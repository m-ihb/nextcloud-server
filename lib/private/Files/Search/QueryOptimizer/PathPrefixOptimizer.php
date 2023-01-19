<?php

declare(strict_types=1);
/**
 * @copyright Copyright (c) 2021 Robin Appelman <robin@icewind.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OC\Files\Search\QueryOptimizer;

use OC\Files\Search\SearchComparison;
use OCP\Files\Search\ISearchBinaryOperator;
use OCP\Files\Search\ISearchComparison;
use OCP\Files\Search\ISearchOperator;

class PathPrefixOptimizer extends QueryOptimizerStep {
	public function processOperator(ISearchOperator &$operator) {
		// normally the `path = "$prefix"` search query part of the prefix filter would be generated as an `path_hash = md5($prefix)` sql query
		// since the `path_hash` sql column usually provides much faster querying that selecting on the `path` sql column
		//
		// however, since we're already doing a filter on the `path` column in the form of `path LIKE "$prefix/%"`
		// generating a `path = "$prefix"` sql query lets the database handle use the same column for both expressions and potentially use the same index
		if ($operator instanceof ISearchBinaryOperator && $operator->getType() === ISearchBinaryOperator::OPERATOR_OR && count($operator->getArguments()) == 2) {
			$a = $operator->getArguments()[0];
			$b = $operator->getArguments()[1];
			if ($a instanceof ISearchComparison && $b instanceof ISearchComparison && $a->getField() === 'path' && $b->getField() === 'path') {
				if ($a->getType() === ISearchComparison::COMPARE_LIKE_CASE_SENSITIVE && $b->getType() === ISearchComparison::COMPARE_EQUAL
					&& $a->getValue() === SearchComparison::escapeLikeParameter($b->getValue()) . '/%') {
					$b->setQueryHint(ISearchComparison::HINT_PATH_EQ_HASH, false);
				}
				if ($b->getType() === ISearchComparison::COMPARE_LIKE_CASE_SENSITIVE && $a->getType() === ISearchComparison::COMPARE_EQUAL
					&& $b->getValue() === SearchComparison::escapeLikeParameter($a->getValue()) . '/%') {
					$a->setQueryHint(ISearchComparison::HINT_PATH_EQ_HASH, false);
				}
			}
		}

		parent::processOperator($operator);
	}
}

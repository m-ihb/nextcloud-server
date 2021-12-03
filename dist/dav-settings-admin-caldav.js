!function(){"use strict";var e,n={99329:function(e,n,t){var a=t(20144),r=t(16453),s=t(9944),i=t(4820),d=t(79753),o={name:"CalDavSettings",computed:{hint:function(){return this.$t("dav","Also install the {calendarappstoreopen}Calendar app{linkclose}, or {calendardocopen}connect your desktop & mobile for syncing ↗{linkclose}.").replace("{calendarappstoreopen}",'<a target="_blank" href="../apps/office/calendar">').replace("{calendardocopen}",'<a target="_blank" :href="userSyncCalendarsUrl" rel="noreferrer noopener">').replace(/\{linkclose\}/g,"</a>")},sendInvitationsHelpText:function(){return this.$t("dav","Please make sure to properly set up {emailopen}the email server{linkclose}.").replace("{emailopen}",'<a href="../admin#mail_general_settings">').replace("{linkclose}","</a>")},sendEventRemindersHelpText:function(){return this.$t("dav","Please make sure to properly set up {emailopen}the email server{linkclose}.").replace("{emailopen}",'<a href="../admin#mail_general_settings">').replace("{linkclose}","</a>")}},watch:{generateBirthdayCalendar:function(e){var n=e?"/apps/dav/enableBirthdayCalendar":"/apps/dav/disableBirthdayCalendar";i.default.post((0,d.generateUrl)(n))},sendInvitations:function(e){OCP.AppConfig.setValue("dav","sendInvitations",e?"yes":"no")},sendEventReminders:function(e){OCP.AppConfig.setValue("dav","sendEventReminders",e?"yes":"no")},sendEventRemindersPush:function(e){OCP.AppConfig.setValue("dav","sendEventRemindersPush",e?"yes":"no")}}},l=(0,t(51900).Z)(o,(function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{staticClass:"section"},[t("h2",[e._v(e._s(e.$t("dav","Calendar server")))]),e._v(" "),t("p",{staticClass:"settings-hint",domProps:{innerHTML:e._s(e.hint)}}),e._v(" "),t("p",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.sendInvitations,expression:"sendInvitations"}],staticClass:"checkbox",attrs:{id:"caldavSendInvitations",type:"checkbox"},domProps:{checked:Array.isArray(e.sendInvitations)?e._i(e.sendInvitations,null)>-1:e.sendInvitations},on:{change:function(n){var t=e.sendInvitations,a=n.target,r=!!a.checked;if(Array.isArray(t)){var s=e._i(t,null);a.checked?s<0&&(e.sendInvitations=t.concat([null])):s>-1&&(e.sendInvitations=t.slice(0,s).concat(t.slice(s+1)))}else e.sendInvitations=r}}}),e._v(" "),t("label",{attrs:{for:"caldavSendInvitations"}},[e._v("\n\t\t\t"+e._s(e.$t("dav","Send invitations to attendees"))+"\n\t\t")]),e._v(" "),t("br"),e._v(" "),t("em",{domProps:{innerHTML:e._s(e.sendInvitationsHelpText)}})]),e._v(" "),t("p",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.generateBirthdayCalendar,expression:"generateBirthdayCalendar"}],staticClass:"checkbox",attrs:{id:"caldavGenerateBirthdayCalendar",type:"checkbox"},domProps:{checked:Array.isArray(e.generateBirthdayCalendar)?e._i(e.generateBirthdayCalendar,null)>-1:e.generateBirthdayCalendar},on:{change:function(n){var t=e.generateBirthdayCalendar,a=n.target,r=!!a.checked;if(Array.isArray(t)){var s=e._i(t,null);a.checked?s<0&&(e.generateBirthdayCalendar=t.concat([null])):s>-1&&(e.generateBirthdayCalendar=t.slice(0,s).concat(t.slice(s+1)))}else e.generateBirthdayCalendar=r}}}),e._v(" "),t("label",{attrs:{for:"caldavGenerateBirthdayCalendar"}},[e._v("\n\t\t\t"+e._s(e.$t("dav","Automatically generate a birthday calendar"))+"\n\t\t")]),e._v(" "),t("br"),e._v(" "),t("em",[e._v("\n\t\t\t"+e._s(e.$t("dav","Birthday calendars will be generated by a background job."))+"\n\t\t")]),e._v(" "),t("br"),e._v(" "),t("em",[e._v("\n\t\t\t"+e._s(e.$t("dav","Hence they will not be available immediately after enabling but will show up after some time."))+"\n\t\t")])]),e._v(" "),t("p",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.sendEventReminders,expression:"sendEventReminders"}],staticClass:"checkbox",attrs:{id:"caldavSendEventReminders",type:"checkbox"},domProps:{checked:Array.isArray(e.sendEventReminders)?e._i(e.sendEventReminders,null)>-1:e.sendEventReminders},on:{change:function(n){var t=e.sendEventReminders,a=n.target,r=!!a.checked;if(Array.isArray(t)){var s=e._i(t,null);a.checked?s<0&&(e.sendEventReminders=t.concat([null])):s>-1&&(e.sendEventReminders=t.slice(0,s).concat(t.slice(s+1)))}else e.sendEventReminders=r}}}),e._v(" "),t("label",{attrs:{for:"caldavSendEventReminders"}},[e._v("\n\t\t\t"+e._s(e.$t("dav","Send notifications for events"))+"\n\t\t")]),e._v(" "),t("br"),e._v(" "),t("em",{domProps:{innerHTML:e._s(e.sendEventRemindersHelpText)}}),e._v(" "),t("br"),e._v(" "),t("em",[e._v("\n\t\t\t"+e._s(e.$t("dav","Notifications are sent via background jobs, so these must occur often enough."))+"\n\t\t")])]),e._v(" "),t("p",[t("input",{directives:[{name:"model",rawName:"v-model",value:e.sendEventRemindersPush,expression:"sendEventRemindersPush"}],staticClass:"checkbox",attrs:{id:"caldavSendEventRemindersPush",type:"checkbox",disabled:!e.sendEventReminders},domProps:{checked:Array.isArray(e.sendEventRemindersPush)?e._i(e.sendEventRemindersPush,null)>-1:e.sendEventRemindersPush},on:{change:function(n){var t=e.sendEventRemindersPush,a=n.target,r=!!a.checked;if(Array.isArray(t)){var s=e._i(t,null);a.checked?s<0&&(e.sendEventRemindersPush=t.concat([null])):s>-1&&(e.sendEventRemindersPush=t.slice(0,s).concat(t.slice(s+1)))}else e.sendEventRemindersPush=r}}}),e._v(" "),t("label",{attrs:{for:"caldavSendEventRemindersPush"}},[e._v("\n\t\t\t"+e._s(e.$t("dav","Enable notifications for events via push"))+"\n\t\t")])])])}),[],!1,null,null,null).exports;a.default.prototype.$t=s.translate,new(a.default.extend(l))({name:"CalDavSettingsView",data:function(){return{sendInvitations:(0,r.loadState)("dav","sendInvitations"),generateBirthdayCalendar:(0,r.loadState)("dav","generateBirthdayCalendar"),sendEventReminders:(0,r.loadState)("dav","sendEventReminders"),sendEventRemindersPush:(0,r.loadState)("dav","sendEventRemindersPush")}}}).$mount("#settings-admin-caldav")}},t={};function a(e){var r=t[e];if(void 0!==r)return r.exports;var s=t[e]={id:e,loaded:!1,exports:{}};return n[e].call(s.exports,s,s.exports,a),s.loaded=!0,s.exports}a.m=n,a.amdD=function(){throw new Error("define cannot be used indirect")},a.amdO={},e=[],a.O=function(n,t,r,s){if(!t){var i=1/0;for(c=0;c<e.length;c++){t=e[c][0],r=e[c][1],s=e[c][2];for(var d=!0,o=0;o<t.length;o++)(!1&s||i>=s)&&Object.keys(a.O).every((function(e){return a.O[e](t[o])}))?t.splice(o--,1):(d=!1,s<i&&(i=s));if(d){e.splice(c--,1);var l=r();void 0!==l&&(n=l)}}return n}s=s||0;for(var c=e.length;c>0&&e[c-1][2]>s;c--)e[c]=e[c-1];e[c]=[t,r,s]},a.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(n,{a:n}),n},a.d=function(e,n){for(var t in n)a.o(n,t)&&!a.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:n[t]})},a.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),a.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.nmd=function(e){return e.paths=[],e.children||(e.children=[]),e},a.j=231,function(){var e={231:0};a.O.j=function(n){return 0===e[n]};var n=function(n,t){var r,s,i=t[0],d=t[1],o=t[2],l=0;if(i.some((function(n){return 0!==e[n]}))){for(r in d)a.o(d,r)&&(a.m[r]=d[r]);if(o)var c=o(a)}for(n&&n(t);l<i.length;l++)s=i[l],a.o(e,s)&&e[s]&&e[s][0](),e[i[l]]=0;return a.O(c)},t=self.webpackChunknextcloud=self.webpackChunknextcloud||[];t.forEach(n.bind(null,0)),t.push=n.bind(null,t.push.bind(t))}();var r=a.O(void 0,[874],(function(){return a(99329)}));r=a.O(r)}();
//# sourceMappingURL=dav-settings-admin-caldav.js.map?v=99f3d69851bc8bcd094a
/*! For license information please see federatedfilesharing-vue-settings-admin.js.LICENSE.txt */
!function(){"use strict";var e,r,n,o={66435:function(e,r,n){var o=n(20144),i=n(77958),a=n(31352),u=n(43554),c=n(71998),s=n(67912),l=n(64024),d=n(93664),f=n(79753),h=n(7820),p=(n(65509),n(25108));function v(e){return v="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},v(e)}function g(){g=function(){return e};var e={},r=Object.prototype,t=r.hasOwnProperty,n=Object.defineProperty||function(e,r,t){e[r]=t.value},o="function"==typeof Symbol?Symbol:{},i=o.iterator||"@@iterator",a=o.asyncIterator||"@@asyncIterator",u=o.toStringTag||"@@toStringTag";function c(e,r,t){return Object.defineProperty(e,r,{value:t,enumerable:!0,configurable:!0,writable:!0}),e[r]}try{c({},"")}catch(e){c=function(e,r,t){return e[r]=t}}function s(e,r,t,o){var i=r&&r.prototype instanceof f?r:f,a=Object.create(i.prototype),u=new O(o||[]);return n(a,"_invoke",{value:k(e,t,u)}),a}function l(e,r,t){try{return{type:"normal",arg:e.call(r,t)}}catch(e){return{type:"throw",arg:e}}}e.wrap=s;var d={};function f(){}function h(){}function p(){}var y={};c(y,i,(function(){return this}));var b=Object.getPrototypeOf,m=b&&b(b(L([])));m&&m!==r&&t.call(m,i)&&(y=m);var S=p.prototype=f.prototype=Object.create(y);function w(e){["next","throw","return"].forEach((function(r){c(e,r,(function(e){return this._invoke(r,e)}))}))}function E(e,r){function o(n,i,a,u){var c=l(e[n],e,i);if("throw"!==c.type){var s=c.arg,d=s.value;return d&&"object"==v(d)&&t.call(d,"__await")?r.resolve(d.__await).then((function(e){o("next",e,a,u)}),(function(e){o("throw",e,a,u)})):r.resolve(d).then((function(e){s.value=e,a(s)}),(function(e){return o("throw",e,a,u)}))}u(c.arg)}var i;n(this,"_invoke",{value:function(e,t){function n(){return new r((function(r,n){o(e,t,r,n)}))}return i=i?i.then(n,n):n()}})}function k(e,r,t){var n="suspendedStart";return function(o,i){if("executing"===n)throw new Error("Generator is already running");if("completed"===n){if("throw"===o)throw i;return{value:void 0,done:!0}}for(t.method=o,t.arg=i;;){var a=t.delegate;if(a){var u=_(a,t);if(u){if(u===d)continue;return u}}if("next"===t.method)t.sent=t._sent=t.arg;else if("throw"===t.method){if("suspendedStart"===n)throw n="completed",t.arg;t.dispatchException(t.arg)}else"return"===t.method&&t.abrupt("return",t.arg);n="executing";var c=l(e,r,t);if("normal"===c.type){if(n=t.done?"completed":"suspendedYield",c.arg===d)continue;return{value:c.arg,done:t.done}}"throw"===c.type&&(n="completed",t.method="throw",t.arg=c.arg)}}}function _(e,r){var t=r.method,n=e.iterator[t];if(void 0===n)return r.delegate=null,"throw"===t&&e.iterator.return&&(r.method="return",r.arg=void 0,_(e,r),"throw"===r.method)||"return"!==t&&(r.method="throw",r.arg=new TypeError("The iterator does not provide a '"+t+"' method")),d;var o=l(n,e.iterator,r.arg);if("throw"===o.type)return r.method="throw",r.arg=o.arg,r.delegate=null,d;var i=o.arg;return i?i.done?(r[e.resultName]=i.value,r.next=e.nextLoc,"return"!==r.method&&(r.method="next",r.arg=void 0),r.delegate=null,d):i:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,d)}function x(e){var r={tryLoc:e[0]};1 in e&&(r.catchLoc=e[1]),2 in e&&(r.finallyLoc=e[2],r.afterLoc=e[3]),this.tryEntries.push(r)}function j(e){var r=e.completion||{};r.type="normal",delete r.arg,e.completion=r}function O(e){this.tryEntries=[{tryLoc:"root"}],e.forEach(x,this),this.reset(!0)}function L(e){if(e){var r=e[i];if(r)return r.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length)){var n=-1,o=function r(){for(;++n<e.length;)if(t.call(e,n))return r.value=e[n],r.done=!1,r;return r.value=void 0,r.done=!0,r};return o.next=o}}return{next:G}}function G(){return{value:void 0,done:!0}}return h.prototype=p,n(S,"constructor",{value:p,configurable:!0}),n(p,"constructor",{value:h,configurable:!0}),h.displayName=c(p,u,"GeneratorFunction"),e.isGeneratorFunction=function(e){var r="function"==typeof e&&e.constructor;return!!r&&(r===h||"GeneratorFunction"===(r.displayName||r.name))},e.mark=function(e){return Object.setPrototypeOf?Object.setPrototypeOf(e,p):(e.__proto__=p,c(e,u,"GeneratorFunction")),e.prototype=Object.create(S),e},e.awrap=function(e){return{__await:e}},w(E.prototype),c(E.prototype,a,(function(){return this})),e.AsyncIterator=E,e.async=function(r,t,n,o,i){void 0===i&&(i=Promise);var a=new E(s(r,t,n,o),i);return e.isGeneratorFunction(t)?a:a.next().then((function(e){return e.done?e.value:a.next()}))},w(S),c(S,u,"Generator"),c(S,i,(function(){return this})),c(S,"toString",(function(){return"[object Generator]"})),e.keys=function(e){var r=Object(e),t=[];for(var n in r)t.push(n);return t.reverse(),function e(){for(;t.length;){var n=t.pop();if(n in r)return e.value=n,e.done=!1,e}return e.done=!0,e}},e.values=L,O.prototype={constructor:O,reset:function(e){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(j),!e)for(var r in this)"t"===r.charAt(0)&&t.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=void 0)},stop:function(){this.done=!0;var e=this.tryEntries[0].completion;if("throw"===e.type)throw e.arg;return this.rval},dispatchException:function(e){if(this.done)throw e;var r=this;function n(t,n){return a.type="throw",a.arg=e,r.next=t,n&&(r.method="next",r.arg=void 0),!!n}for(var o=this.tryEntries.length-1;o>=0;--o){var i=this.tryEntries[o],a=i.completion;if("root"===i.tryLoc)return n("end");if(i.tryLoc<=this.prev){var u=t.call(i,"catchLoc"),c=t.call(i,"finallyLoc");if(u&&c){if(this.prev<i.catchLoc)return n(i.catchLoc,!0);if(this.prev<i.finallyLoc)return n(i.finallyLoc)}else if(u){if(this.prev<i.catchLoc)return n(i.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return n(i.finallyLoc)}}}},abrupt:function(e,r){for(var n=this.tryEntries.length-1;n>=0;--n){var o=this.tryEntries[n];if(o.tryLoc<=this.prev&&t.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===e||"continue"===e)&&i.tryLoc<=r&&r<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=e,a.arg=r,i?(this.method="next",this.next=i.finallyLoc,d):this.complete(a)},complete:function(e,r){if("throw"===e.type)throw e.arg;return"break"===e.type||"continue"===e.type?this.next=e.arg:"return"===e.type?(this.rval=this.arg=e.arg,this.method="return",this.next="end"):"normal"===e.type&&r&&(this.next=r),d},finish:function(e){for(var r=this.tryEntries.length-1;r>=0;--r){var t=this.tryEntries[r];if(t.finallyLoc===e)return this.complete(t.completion,t.afterLoc),j(t),d}},catch:function(e){for(var r=this.tryEntries.length-1;r>=0;--r){var t=this.tryEntries[r];if(t.tryLoc===e){var n=t.completion;if("throw"===n.type){var o=n.arg;j(t)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(e,r,t){return this.delegate={iterator:L(e),resultName:r,nextLoc:t},"next"===this.method&&(this.arg=void 0),d}},e}function y(e,r,t,n,o,i,a){try{var u=e[i](a),c=u.value}catch(e){return void t(e)}u.done?r(c):Promise.resolve(c).then(n,o)}function b(e){return function(){var r=this,t=arguments;return new Promise((function(n,o){var i=e.apply(r,t);function a(e){y(i,n,o,a,u,"next",e)}function u(e){y(i,n,o,a,u,"throw",e)}a(void 0)}))}}var m={name:"AdminSettings",components:{NcCheckboxRadioSwitch:c.Z,NcSettingsSection:s.Z},data:function(){return{outgoingServer2serverShareEnabled:(0,u.j)("federatedfilesharing","outgoingServer2serverShareEnabled"),incomingServer2serverShareEnabled:(0,u.j)("federatedfilesharing","incomingServer2serverShareEnabled"),outgoingServer2serverGroupShareEnabled:(0,u.j)("federatedfilesharing","outgoingServer2serverGroupShareEnabled"),incomingServer2serverGroupShareEnabled:(0,u.j)("federatedfilesharing","incomingServer2serverGroupShareEnabled"),federatedGroupSharingSupported:(0,u.j)("federatedfilesharing","federatedGroupSharingSupported"),lookupServerEnabled:(0,u.j)("federatedfilesharing","lookupServerEnabled"),lookupServerUploadEnabled:(0,u.j)("federatedfilesharing","lookupServerUploadEnabled"),internalOnly:(0,u.j)("federatedfilesharing","internalOnly"),sharingFederatedDocUrl:(0,u.j)("federatedfilesharing","sharingFederatedDocUrl")}},methods:{update:function(e,r){var n=this;return b(g().mark((function o(){var i,a,u,c,s;return g().wrap((function(o){for(;;)switch(o.prev=o.next){case 0:return o.next=2,(0,h.Z)();case 2:return i=(0,f.generateOcsUrl)("/apps/provisioning_api/api/v1/config/apps/{appId}/{key}",{appId:"files_sharing",key:e}),a=r?"yes":"no",o.prev=4,o.next=7,d.Z.post(i,{value:a});case 7:c=o.sent,s=c.data,n.handleResponse({status:null===(u=s.ocs)||void 0===u||null===(u=u.meta)||void 0===u?void 0:u.status}),o.next=15;break;case 12:o.prev=12,o.t0=o.catch(4),n.handleResponse({errorMessage:t("federatedfilesharing","Unable to update federated files sharing config"),error:o.t0});case 15:case"end":return o.stop()}}),o,null,[[4,12]])})))()},handleResponse:function(e){return b(g().mark((function r(){var t,n,o;return g().wrap((function(r){for(;;)switch(r.prev=r.next){case 0:t=e.status,n=e.errorMessage,o=e.error,"ok"!==t&&((0,l.x2)(n),p.error(n,o));case 2:case"end":return r.stop()}}),r)})))()}}},S=(0,n(51900).Z)(m,(function(){var e=this,r=e._self._c;return r("NcSettingsSection",{attrs:{name:e.t("federatedfilesharing","Federated Cloud Sharing"),description:e.t("federatedfilesharing","Adjust how people can share between servers. This includes shares between users on this server as well if they are using federated sharing."),"doc-url":e.sharingFederatedDocUrl}},[r("NcCheckboxRadioSwitch",{attrs:{type:"switch",checked:e.outgoingServer2serverShareEnabled},on:{"update:checked":[function(r){e.outgoingServer2serverShareEnabled=r},function(r){return e.update("outgoing_server2server_share_enabled",e.outgoingServer2serverShareEnabled)}]}},[e._v("\n\t\t"+e._s(e.t("federatedfilesharing","Allow users on this server to send shares to other servers (this option also allows WebDAV access to public shares)"))+"\n\t")]),e._v(" "),r("NcCheckboxRadioSwitch",{attrs:{type:"switch",checked:e.incomingServer2serverShareEnabled},on:{"update:checked":[function(r){e.incomingServer2serverShareEnabled=r},function(r){return e.update("incoming_server2server_share_enabled",e.incomingServer2serverShareEnabled)}]}},[e._v("\n\t\t"+e._s(e.t("federatedfilesharing","Allow users on this server to receive shares from other servers"))+"\n\t")]),e._v(" "),e.federatedGroupSharingSupported?r("NcCheckboxRadioSwitch",{attrs:{type:"switch",checked:e.outgoingServer2serverGroupShareEnabled},on:{"update:checked":[function(r){e.outgoingServer2serverGroupShareEnabled=r},function(r){return e.update("outgoing_server2server_group_share_enabled",e.outgoingServer2serverGroupShareEnabled)}]}},[e._v("\n\t\t"+e._s(e.t("federatedfilesharing","Allow users on this server to send shares to groups on other servers"))+"\n\t")]):e._e(),e._v(" "),e.federatedGroupSharingSupported?r("NcCheckboxRadioSwitch",{attrs:{type:"switch",checked:e.incomingServer2serverGroupShareEnabled},on:{"update:checked":[function(r){e.incomingServer2serverGroupShareEnabled=r},function(r){return e.update("incoming_server2server_group_share_enabled",e.incomingServer2serverGroupShareEnabled)}]}},[e._v("\n\t\t"+e._s(e.t("federatedfilesharing","Allow users on this server to receive group shares from other servers"))+"\n\t")]):e._e(),e._v(" "),r("NcCheckboxRadioSwitch",{attrs:{type:"switch",checked:e.lookupServerEnabled},on:{"update:checked":[function(r){e.lookupServerEnabled=r},function(r){return e.update("lookupServerEnabled",e.lookupServerEnabled)}]}},[e._v("\n\t\t"+e._s(e.t("federatedfilesharing","Search global and public address book for users"))+"\n\t")]),e._v(" "),r("NcCheckboxRadioSwitch",{attrs:{type:"switch",checked:e.lookupServerUploadEnabled},on:{"update:checked":[function(r){e.lookupServerUploadEnabled=r},function(r){return e.update("lookupServerUploadEnabled",e.lookupServerUploadEnabled)}]}},[e._v("\n\t\t"+e._s(e.t("federatedfilesharing","Allow users to publish their data to a global and public address book"))+"\n\t")])],1)}),[],!1,null,null,null).exports;n.nc=btoa((0,i.IH)()),o.default.mixin({methods:{t:a.Iu}}),(0,u.j)("federatedfilesharing","internalOnly",!1)||(new(o.default.extend(S))).$mount("#vue-admin-federated")}},i={};function a(e){var r=i[e];if(void 0!==r)return r.exports;var t=i[e]={id:e,loaded:!1,exports:{}};return o[e].call(t.exports,t,t.exports,a),t.loaded=!0,t.exports}a.m=o,e=[],a.O=function(r,t,n,o){if(!t){var i=1/0;for(l=0;l<e.length;l++){t=e[l][0],n=e[l][1],o=e[l][2];for(var u=!0,c=0;c<t.length;c++)(!1&o||i>=o)&&Object.keys(a.O).every((function(e){return a.O[e](t[c])}))?t.splice(c--,1):(u=!1,o<i&&(i=o));if(u){e.splice(l--,1);var s=n();void 0!==s&&(r=s)}}return r}o=o||0;for(var l=e.length;l>0&&e[l-1][2]>o;l--)e[l]=e[l-1];e[l]=[t,n,o]},a.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(r,{a:r}),r},a.d=function(e,r){for(var t in r)a.o(r,t)&&!a.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:r[t]})},a.f={},a.e=function(e){return Promise.all(Object.keys(a.f).reduce((function(r,t){return a.f[t](e,r),r}),[]))},a.u=function(e){return e+"-"+e+".js?v="+{2250:"9c98ca37abd9ee1927b3",7996:"39e55a09e2da8534cf16"}[e]},a.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),a.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},r={},n="nextcloud:",a.l=function(e,t,o,i){if(r[e])r[e].push(t);else{var u,c;if(void 0!==o)for(var s=document.getElementsByTagName("script"),l=0;l<s.length;l++){var d=s[l];if(d.getAttribute("src")==e||d.getAttribute("data-webpack")==n+o){u=d;break}}u||(c=!0,(u=document.createElement("script")).charset="utf-8",u.timeout=120,a.nc&&u.setAttribute("nonce",a.nc),u.setAttribute("data-webpack",n+o),u.src=e),r[e]=[t];var f=function(t,n){u.onerror=u.onload=null,clearTimeout(h);var o=r[e];if(delete r[e],u.parentNode&&u.parentNode.removeChild(u),o&&o.forEach((function(e){return e(n)})),t)return t(n)},h=setTimeout(f.bind(null,void 0,{type:"timeout",target:u}),12e4);u.onerror=f.bind(null,u.onerror),u.onload=f.bind(null,u.onload),c&&document.head.appendChild(u)}},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.nmd=function(e){return e.paths=[],e.children||(e.children=[]),e},a.j=7220,function(){var e;a.g.importScripts&&(e=a.g.location+"");var r=a.g.document;if(!e&&r&&(r.currentScript&&(e=r.currentScript.src),!e)){var t=r.getElementsByTagName("script");if(t.length)for(var n=t.length-1;n>-1&&!e;)e=t[n--].src}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),a.p=e}(),function(){a.b=document.baseURI||self.location.href;var e={7220:0};a.f.j=function(r,t){var n=a.o(e,r)?e[r]:void 0;if(0!==n)if(n)t.push(n[2]);else{var o=new Promise((function(t,o){n=e[r]=[t,o]}));t.push(n[2]=o);var i=a.p+a.u(r),u=new Error;a.l(i,(function(t){if(a.o(e,r)&&(0!==(n=e[r])&&(e[r]=void 0),n)){var o=t&&("load"===t.type?"missing":t.type),i=t&&t.target&&t.target.src;u.message="Loading chunk "+r+" failed.\n("+o+": "+i+")",u.name="ChunkLoadError",u.type=o,u.request=i,n[1](u)}}),"chunk-"+r,r)}},a.O.j=function(r){return 0===e[r]};var r=function(r,t){var n,o,i=t[0],u=t[1],c=t[2],s=0;if(i.some((function(r){return 0!==e[r]}))){for(n in u)a.o(u,n)&&(a.m[n]=u[n]);if(c)var l=c(a)}for(r&&r(t);s<i.length;s++)o=i[s],a.o(e,o)&&e[o]&&e[o][0](),e[o]=0;return a.O(l)},t=self.webpackChunknextcloud=self.webpackChunknextcloud||[];t.forEach(r.bind(null,0)),t.push=r.bind(null,t.push.bind(t))}(),a.nc=void 0;var u=a.O(void 0,[7874],(function(){return a(66435)}));u=a.O(u)}();
//# sourceMappingURL=federatedfilesharing-vue-settings-admin.js.map?v=36fad846f2ebaa3f481b
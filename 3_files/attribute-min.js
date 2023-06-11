define("attribute",["util","event-custom"],function(t){var r,e,n=t("util"),a=t("event-custom");return r=function(t){function r(t){return t===V.noop?function(){}:V.bind(t)}function e(t,r){return"string"==typeof r?t[r]:r}function i(t){return t.__attrVals||(t.__attrVals={})}function o(t,r){return t+V.ucfirst(r)+"Change"}function u(t,r,e,n,a,i,u,s){return u=u||e,t.fire(o(r,e),V.mix({attrName:u,subAttrName:i,prevVal:n,newVal:a},s))}function s(t,r,e){var n=t[r];return e||n||(t[r]=n={}),n||{}}function _(t,r){for(var e=0,n=r.length;void 0!==t&&n>e;e++)t=t[r[e]];return t}function f(t,r,e){var n=r.length-1,a=t;if(n>=0){for(var i=0;n>i;i++)t=t[r[i]];void 0!==t?t[r[i]]=e:a=void 0}return a}function c(t){var r;return-1!==t.indexOf(".")&&(r=t.split("."),t=r.shift()),{path:r,name:t}}function l(t,r,e){var n=e;return r&&(n=void 0===t?{}:V.clone(t),f(n,r,e)),n}function v(t,r){var e=s(t,"__defaultBeforeFns");if(!e[r]){e[r]=1;var n=o("before",r);t.publish(n,{defaultFn:h,defaultTargetOnly:!0})}}function d(t,r,e,n,a){var i,u,s,f=c(r),d=r;if(r=f.name,i=f.path,s=t.get(r),v(t,r),i&&(u=_(s,i)),!n.force){if(!i&&s===e)return void 0;if(i&&u===e)return void 0}e=l(s,i,e);var p=V.mix({attrName:r,subAttrName:d,prevVal:s,newVal:e,_opts:n,_attrs:a,target:t},n.data);if(n.silent){if(O===h.call(t,p))return O}else if(O===t.fire(o("before",r),p))return O;return t}function h(t){var r=this,e=t.newVal,n=t.prevVal,a=t.attrName,o=t.subAttrName,s=t._attrs,_=t._opts,f=r.setInternal(a,e);return f===O?f:(_.silent||(e=i(r)[a],u(r,"after",a,n,e,o,null,_.data),s?s.push({prevVal:n,newVal:e,attrName:a,subAttrName:o}):u(r,"","*",[n],[e],[o],[a],_.data)),void 0)}function p(t){var r=this,e=r.constructor;for(r.userConfig=t;e;)A(r,e.ATTRS),e=e.superclass?e.superclass.constructor:null;w(r,t)}function m(t,e){var n=e.__hooks__;if(n)for(var a in n)a in t&&(t[a]=n[a](t[a]));V.each(t,function(n,a){if("function"==typeof n){var i=0;if(n.__owner__){var o=n.__owner__;delete n.__owner__,delete n.__name__,i=n.__wrapped__=1;var u=r(n);u.__owner__=o,u.__name__=a,o.prototype[a]=u}else n.__wrapped__&&(i=1);i&&(t[a]=n=r(n)),n.__owner__=e,n.__name__=a}})}function g(t){var r=this;m(t,r),V.mix(r.prototype,t)}function A(t,r){if(r)for(var e in r)t.addAttr(e,r[e],!1)}function w(t,r){if(r)for(var e in r)t.setInternal(e,r[e])}function y(t,r){var n,a=t.getAttrs(),i=s(a,r,1),o=i.valueFn;return o&&(o=e(t,o))&&(n=o.call(t),void 0!==n&&(i.value=n),delete i.valueFn,a[r]=i),i.value}function b(t,r,n,a){var i,o,u;u=c(r),r=u.name,i=u.path,i&&(o=t.get(r),n=l(o,i,n));var _,f=s(t.getAttrs(),r),v=f.validator;return v&&(v=e(t,v))&&(_=v.call(t,n,r,a),void 0!==_&&_!==!0)?_:void 0}var V=n,x=a,N={},O=!1;return p.extend=function S(t,r){var e,n=t,a=this;r=V.merge(r),t=V.merge(t),n.hasOwnProperty("constructor")&&(t.constructor=n.constructor);var i,o=r.__hooks__;(i=a.__hooks__)&&(o=r.__hooks__=r.__hooks__||{},V.mix(o,i,!1));r.name||"AttributeDerived";e=t.hasOwnProperty("constructor")?t.constructor:function(){this.callSuper.apply(this,arguments)},t.constructor=e,e.__hooks__=o,m(t,e);var u,s=r.inheritedStatics;return(u=a.inheritedStatics)&&(s=r.inheritedStatics=r.inheritedStatics||{},V.mix(s,u,!1)),V.extend(e,a,t,r),s&&V.mix(e,s),e.extend=r.extend||S,e.addMembers=g,e},V.augment(p,x.Target,{INVALID:N,callSuper:function(){var t,r,e=this,n=arguments;"function"==typeof e&&e.__name__?(t=e,r=n[0],n=Array.prototype.slice.call(n,1)):(t=arguments.callee.caller,t.__wrapped__&&(t=t.caller),r=e);var a=t.__name__;if(!a)return void 0;var i=t.__owner__.superclass[a];return i?i.apply(r,n||[]):void 0},getAttrs:function(){return this.__attrs||(this.__attrs={})},getAttrVals:function(){var t,r=this,e={},n=r.getAttrs();for(t in n)e[t]=r.get(t);return e},addAttr:function(t,r,e){var n,a=this,i=a.getAttrs(),o=V.merge(r);return o.value&&"object"==typeof o.value&&(o.value=V.clone(o.value)),(n=i[t])?V.mix(n,o,e):i[t]=o,a},addAttrs:function(t,r){var e=this;return V.each(t,function(t,r){e.addAttr(r,t)}),r&&e.set(r),e},hasAttr:function(t){return this.getAttrs().hasOwnProperty(t)},removeAttr:function(t){var r=this,e=i(r),n=r.getAttrs();return r.hasAttr(t)&&(delete n[t],delete e[t]),r},set:function(t,r,e){var n,a=this;if("string"!=typeof t){e=r,e=e||{};var i=Object(t),o=[],s=[];for(t in i)void 0!==(n=b(a,t,i[t],i))&&s.push(n);if(s.length)return e.error&&e.error(s),O;for(t in i)d(a,t,i[t],e,o);var _=[],f=[],c=[],l=[];return V.each(o,function(t){f.push(t.prevVal),c.push(t.newVal),_.push(t.attrName),l.push(t.subAttrName)}),_.length&&u(a,"","*",f,c,l,_,e.data),a}return e=e||{},n=b(a,t,r),void 0!==n?(e.error&&e.error(n),O):d(a,t,r,e)},setInternal:function(t,r){var n,a=this,o=s(a.getAttrs(),t),u=o.setter;return u&&(u=e(a,u))&&(n=u.call(a,r,t)),n===N?O:(void 0!==n&&(r=n),i(a)[t]=r,void 0)},get:function(t){var r,n,a,o,u=this,f=".",c=i(u);return-1!==t.indexOf(f)&&(r=t.split(f),t=r.shift()),n=s(u.getAttrs(),t,1),a=n.getter,o=t in c?c[t]:y(u,t),a&&(a=e(u,a))&&(o=a.call(u,o,t)),t in c||void 0===o||(c[t]=o),r&&(o=_(o,r)),o},reset:function(t,r){var e=this;if("string"==typeof t)return e.hasAttr(t)?e.set(t,y(e,t),r):e;r=t;var n=e.getAttrs(),a={};for(t in n)a[t]=y(e,t);return e.set(a,r),e}}),t=p}(),e=function(t){return t=r}()});
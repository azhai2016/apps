define("node-anim",["node-base","anim","util"],function(n){var t,e,i=n("node-base"),r=n("anim"),o=n("util");return t=function(n){function t(n,t,e){for(var i=[],r={},o=e||0;t>o;o++)i.push.apply(i,f[o]);for(o=0;o<i.length;o++)r[i[o]]=n;return r}var e=i,a=r,u=o,g=e.Dom,f=[["height","margin-top","margin-bottom","padding-top","padding-bottom"],["width","margin-left","margin-right","padding-left","padding-right"],["opacity"]];return u.augment(e,{animate:function(){var n=this,t=n.length,e=n.length>1,i=u.makeArray(arguments),r=i[0],o=a;r.to?o=r.Anim||a:(r=i[1],r&&(o=r.Anim||a));for(var g=0;t>g;g++){var f=n[g],h=e?u.clone(i):i,s=h[0];s.to?(s.node=f,new o(s).run()):o.apply(void 0,[f].concat(h)).run()}return n},stop:function(n,t,e){var i=this;return u.each(i,function(i){a.stop(i,n,t,e)}),i},pause:function(n,t){var e=this;return u.each(e,function(n){a.pause(n,t)}),e},resume:function(n,t){var e=this;return u.each(e,function(n){a.resume(n,t)}),e},isRunning:function(){for(var n=this,t=0;t<n.length;t++)if(a.isRunning(n[t]))return!0;return!1},isPaused:function(){for(var n=this,t=0;t<n.length;t++)if(a.isPaused(n[t]))return!0;return!1}}),u.each({show:t("show",3),hide:t("hide",3),toggle:t("toggle",3),fadeIn:t("show",3,2),fadeOut:t("hide",3,2),fadeToggle:t("toggle",3,2),slideDown:t("show",1),slideUp:t("hide",1),slideToggle:t("toggle",1)},function(n,t){e.prototype[t]=function(e,i,r){var o=this;if(g[t]&&!e)g[t](o);else{var f=a;"object"==typeof e&&(f=e.Anim||a),u.each(o,function(t){new f(t,n,e,r,i).run()})}return o}}),n=e}(),e=function(n){return n=t}()});
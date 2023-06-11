<?php
header('Content-Type: text/html; charset=utf-8');

/**********************************************************************
Copyright (C) FrontAccounting, LLC.
Released under the terms of the GNU General Public License, GPL,
as published by the Free Software Foundation, either version 3
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the License here <http://www.gnu.org/licenses/gpl-3.0.html>.
 ***********************************************************************/
$page_security = 'SA_OPEN';

$path_to_root = '..';
//include_once $path_to_root . '/includes/session.php';
$servername = "localhost";
$username = "root";
$password = "azsOFT2022";
$dbname = "fbapp";

$conn = new mysqli($servername, $username, $password, $dbname);

$conn->set_charset("utf8mb4");

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$orderid = isset($_POST['bizOrderId']) ? $_POST['bizOrderId'] : '';
// 查询语句示例
$sql = "SELECT * FROM `A` where orderid='" . $orderid . "'";
$result = $conn->query($sql);

$orders = [];

if ($result->num_rows > 0) {
    // 输出每行数据
    while ($row = $result->fetch_assoc()) {
        $dj = round($row['je'] / $row['sl'], 2);
        $orders = array(
            'wldh' => $row['wldh'], 'kdmc' => $row['kdmc'], 'fkrq' => $row['fkrq'], 'qrrq' => $row['qrrq'],
            'mj' => $row['mj'], 'jyh' => $row['jyh'],
            'rq' => $row['rq'], 'dj' => $dj, 'orderid' => $row['orderid'], 'info' => $row['info'], 'img' => $row['img'],
            'sl' => $row['sl'], 'je' => $row['je'], 'name' => $row['name'], 'flag' => $row['flag']
        );
    }
} else {
    // echo "0 结果";
}

// 关闭连接
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" async="" src="https://g.alicdn.com/secdev/entry/index.js?t=233211" id="aplus-sufei"></script>
    <script src="https://g.alicdn.com/AWSC/fireyejs/1.225.0/fireyejs.js" id="AWSC_fyModule"></script>
    <script src="https://mai.taobao.com/json/home/seller_menu_data.htm?t=1679120253539" async=""></script>
    <script type="text/javascript" async="" src="https://g.alicdn.com/sd/baxia-entry/index.js?t=233211" id="aplus-baxia"></script>
    <script src="https://assets.alicdn.com/s/kissy/1.2.0/suggest-min.js?t=20130128171456" async="" charset="utf-8"></script>
    <script src="https://g.alicdn.com/aliww/web.ww.im/0.2.1/scripts/adapter.js"></script>
    <script async="" src="https://g.alicdn.com/??/sd/baxia/2.2.3/baxiaCommon.js" crossorigin="true"></script>
    <script>
        /*! 2022-02-16 15:56:09 v8.15.21 */ ! function(e) {
            function i(n) {
                if (o[n]) return o[n].exports;
                var r = o[n] = {
                    exports: {},
                    id: n,
                    loaded: !1
                };
                return e[n].call(r.exports, r, r.exports, i), r.loaded = !0, r.exports
            }
            var o = {};
            return i.m = e, i.c = o, i.p = "", i(0)
        }([function(e, i) {
            "use strict";
            var o = window,
                n = document;
            ! function() {
                var e = 2,
                    r = "ali_analytics";
                if (o[r] && o[r].ua && e <= o[r].ua.version) return void(i.info = o[r].ua);
                var t, a, d, s, c, u, h, l, m, b, f, v, p, w, g, x, z, O = o.navigator,
                    k = O.appVersion,
                    T = O && O.userAgent || "",
                    y = function(e) {
                        var i = 0;
                        return parseFloat(e.replace(/\./g, function() {
                            return 0 === i++ ? "." : ""
                        }))
                    },
                    _ = function(e, i) {
                        var o, n;
                        i[o = "trident"] = .1, (n = e.match(/Trident\/([\d.]*)/)) && n[1] && (i[o] = y(n[1])), i.core = o
                    },
                    N = function(e) {
                        var i, o;
                        return (i = e.match(/MSIE ([^;]*)|Trident.*; rv(?:\s|:)?([0-9.]+)/)) && (o = i[1] || i[2]) ? y(o) : 0
                    },
                    P = function(e) {
                        return e || "other"
                    },
                    M = function(e) {
                        function i() {
                            for (var i = [
                                    ["Windows NT 5.1", "winXP"],
                                    ["Windows NT 6.1", "win7"],
                                    ["Windows NT 6.0", "winVista"],
                                    ["Windows NT 6.2", "win8"],
                                    ["Windows NT 10.0", "win10"],
                                    ["iPad", "ios"],
                                    ["iPhone;", "ios"],
                                    ["iPod", "ios"],
                                    ["Macintosh", "mac"],
                                    ["Android", "android"],
                                    ["Ubuntu", "ubuntu"],
                                    ["Linux", "linux"],
                                    ["Windows NT 5.2", "win2003"],
                                    ["Windows NT 5.0", "win2000"],
                                    ["Windows", "winOther"],
                                    ["rhino", "rhino"]
                                ], o = 0, n = i.length; o < n; ++o)
                                if (e.indexOf(i[o][0]) !== -1) return i[o][1];
                            return "other"
                        }

                        function r(e, i, n, r) {
                            var t, a = o.navigator.mimeTypes;
                            try {
                                for (t in a)
                                    if (a.hasOwnProperty(t) && a[t][e] == i) {
                                        if (void 0 !== n && r.test(a[t][n])) return !0;
                                        if (void 0 === n) return !0
                                    } return !1
                            } catch (e) {
                                return !1
                            }
                        }
                        var t, a, d, s, c, u, h, l = "",
                            m = l,
                            b = l,
                            f = [6, 9],
                            v = "{{version}}",
                            p = "<!--[if IE " + v + "]><s></s><![endif]-->",
                            w = n && n.createElement("div"),
                            g = [],
                            x = {
                                webkit: void 0,
                                edge: void 0,
                                trident: void 0,
                                gecko: void 0,
                                presto: void 0,
                                chrome: void 0,
                                safari: void 0,
                                firefox: void 0,
                                ie: void 0,
                                ieMode: void 0,
                                opera: void 0,
                                mobile: void 0,
                                core: void 0,
                                shell: void 0,
                                phantomjs: void 0,
                                os: void 0,
                                ipad: void 0,
                                iphone: void 0,
                                ipod: void 0,
                                ios: void 0,
                                android: void 0,
                                nodejs: void 0,
                                extraName: void 0,
                                extraVersion: void 0
                            };
                        if (w && w.getElementsByTagName && (w.innerHTML = p.replace(v, ""), g = w.getElementsByTagName("s")), g.length > 0) {
                            for (_(e, x), s = f[0], c = f[1]; s <= c; s++)
                                if (w.innerHTML = p.replace(v, s), g.length > 0) {
                                    x[b = "ie"] = s;
                                    break
                                }! x.ie && (d = N(e)) && (x[b = "ie"] = d)
                        } else((a = e.match(/AppleWebKit\/*\s*([\d.]*)/i)) || (a = e.match(/Safari\/([\d.]*)/))) && a[1] ? (x[m = "webkit"] = y(a[1]), (a = e.match(/OPR\/(\d+\.\d+)/)) && a[1] ? x[b = "opera"] = y(a[1]) : (a = e.match(/Chrome\/([\d.]*)/)) && a[1] ? x[b = "chrome"] = y(a[1]) : (a = e.match(/\/([\d.]*) Safari/)) && a[1] ? x[b = "safari"] = y(a[1]) : x.safari = x.webkit, (a = e.match(/Edge\/([\d.]*)/)) && a[1] && (m = b = "edge", x[m] = y(a[1])), / Mobile\//.test(e) && e.match(/iPad|iPod|iPhone/) ? (x.mobile = "apple", a = e.match(/OS ([^\s]*)/), a && a[1] && (x.ios = y(a[1].replace("_", "."))), t = "ios", a = e.match(/iPad|iPod|iPhone/), a && a[0] && (x[a[0].toLowerCase()] = x.ios)) : / Android/i.test(e) ? (/Mobile/.test(e) && (t = x.mobile = "android"), a = e.match(/Android ([^\s]*);/), a && a[1] && (x.android = y(a[1]))) : (a = e.match(/NokiaN[^\/]*|Android \d\.\d|webOS\/\d\.\d/)) && (x.mobile = a[0].toLowerCase()), (a = e.match(/PhantomJS\/([^\s]*)/)) && a[1] && (x.phantomjs = y(a[1]))) : (a = e.match(/Presto\/([\d.]*)/)) && a[1] ? (x[m = "presto"] = y(a[1]), (a = e.match(/Opera\/([\d.]*)/)) && a[1] && (x[b = "opera"] = y(a[1]), (a = e.match(/Opera\/.* Version\/([\d.]*)/)) && a[1] && (x[b] = y(a[1])), (a = e.match(/Opera Mini[^;]*/)) && a ? x.mobile = a[0].toLowerCase() : (a = e.match(/Opera Mobi[^;]*/)) && a && (x.mobile = a[0]))) : (d = N(e)) ? (x[b = "ie"] = d, _(e, x)) : (a = e.match(/Gecko/)) && (x[m = "gecko"] = .1, (a = e.match(/rv:([\d.]*)/)) && a[1] && (x[m] = y(a[1]), /Mobile|Tablet/.test(e) && (x.mobile = "firefox")), (a = e.match(/Firefox\/([\d.]*)/)) && a[1] && (x[b = "firefox"] = y(a[1])));
                        t || (t = i());
                        var z, O, T;
                        if (!r("type", "application/vnd.chromium.remoting-viewer")) {
                            z = "scoped" in n.createElement("style"), T = "v8Locale" in o;
                            try {
                                O = o.external || void 0
                            } catch (e) {}
                            if (a = e.match(/360SE/)) u = "360";
                            else if ((a = e.match(/SE\s([\d.]*)/)) || O && "SEVersion" in O) u = "sougou", h = y(a[1]) || .1;
                            else if ((a = e.match(/Maxthon(?:\/)+([\d.]*)/)) && O) {
                                u = "maxthon";
                                try {
                                    h = y(O.max_version || a[1])
                                } catch (e) {
                                    h = .1
                                }
                            } else z && T ? u = "360se" : z || T || !/Gecko\)\s+Chrome/.test(k) || x.opera || x.edge || (u = "360ee")
                        }(a = e.match(/TencentTraveler\s([\d.]*)|QQBrowser\/([\d.]*)/)) ? (u = "tt", h = y(a[2]) || .1) : (a = e.match(/LBBROWSER/)) || O && "LiebaoGetVersion" in O ? u = "liebao" : (a = e.match(/TheWorld/)) ? (u = "theworld", h = 3) : (a = e.match(/TaoBrowser\/([\d.]*)/)) ? (u = "taobao", h = y(a[1]) || .1) : (a = e.match(/UCBrowser\/([\d.]*)/)) && (u = "uc", h = y(a[1]) || .1), x.os = t, x.core = x.core || m, x.shell = b, x.ieMode = x.ie && n.documentMode || x.ie, x.extraName = u, x.extraVersion = h;
                        var P = o.screen.width,
                            M = o.screen.height;
                        return x.resolution = P + "x" + M, x
                    },
                    S = function(e) {
                        function i(e) {
                            return Object.prototype.toString.call(e)
                        }

                        function o(e, o, n) {
                            if ("[object Function]" == i(o) && (o = o(n)), !o) return null;
                            var r = {
                                    name: e,
                                    version: ""
                                },
                                t = i(o);
                            if (o === !0) return r;
                            if ("[object String]" === t) {
                                if (n.indexOf(o) !== -1) return r
                            } else if (o.exec) {
                                var a = o.exec(n);
                                if (a) return a.length >= 2 && a[1] ? r.version = a[1].replace(/_/g, ".") : r.version = "", r
                            }
                        }
                        var n = {
                            name: "other",
                            version: ""
                        };
                        e = (e || "").toLowerCase();
                        for (var r = [
                                ["nokia", function(e) {
                                    return e.indexOf("nokia ") !== -1 ? /\bnokia ([0-9]+)?/ : /\bnokia([a-z0-9]+)?/
                                }],
                                ["samsung", function(e) {
                                    return e.indexOf("samsung") !== -1 ? /\bsamsung(?:[ \-](?:sgh|gt|sm))?-([a-z0-9]+)/ : /\b(?:sgh|sch|gt|sm)-([a-z0-9]+)/
                                }],
                                ["wp", function(e) {
                                    return e.indexOf("windows phone ") !== -1 || e.indexOf("xblwp") !== -1 || e.indexOf("zunewp") !== -1 || e.indexOf("windows ce") !== -1
                                }],
                                ["pc", "windows"],
                                ["ipad", "ipad"],
                                ["ipod", "ipod"],
                                ["iphone", /\biphone\b|\biph(\d)/],
                                ["mac", "macintosh"],
                                ["mi", /\bmi[ \-]?([a-z0-9 ]+(?= build|\)))/],
                                ["hongmi", /\bhm[ \-]?([a-z0-9]+)/],
                                ["aliyun", /\baliyunos\b(?:[\-](\d+))?/],
                                ["meizu", function(e) {
                                    return e.indexOf("meizu") >= 0 ? /\bmeizu[\/ ]([a-z0-9]+)\b/ : /\bm([0-9x]{1,3})\b/
                                }],
                                ["nexus", /\bnexus ([0-9s.]+)/],
                                ["huawei", function(e) {
                                    var i = /\bmediapad (.+?)(?= build\/huaweimediapad\b)/;
                                    return e.indexOf("huawei-huawei") !== -1 ? /\bhuawei\-huawei\-([a-z0-9\-]+)/ : i.test(e) ? i : /\bhuawei[ _\-]?([a-z0-9]+)/
                                }],
                                ["lenovo", function(e) {
                                    return e.indexOf("lenovo-lenovo") !== -1 ? /\blenovo\-lenovo[ \-]([a-z0-9]+)/ : /\blenovo[ \-]?([a-z0-9]+)/
                                }],
                                ["zte", function(e) {
                                    return /\bzte\-[tu]/.test(e) ? /\bzte-[tu][ _\-]?([a-su-z0-9\+]+)/ : /\bzte[ _\-]?([a-su-z0-9\+]+)/
                                }],
                                ["vivo", /\bvivo(?: ([a-z0-9]+))?/],
                                ["htc", function(e) {
                                    return /\bhtc[a-z0-9 _\-]+(?= build\b)/.test(e) ? /\bhtc[ _\-]?([a-z0-9 ]+(?= build))/ : /\bhtc[ _\-]?([a-z0-9 ]+)/
                                }],
                                ["oppo", /\boppo[_]([a-z0-9]+)/],
                                ["konka", /\bkonka[_\-]([a-z0-9]+)/],
                                ["sonyericsson", /\bmt([a-z0-9]+)/],
                                ["coolpad", /\bcoolpad[_ ]?([a-z0-9]+)/],
                                ["lg", /\blg[\-]([a-z0-9]+)/],
                                ["android", /\bandroid\b|\badr\b/],
                                ["blackberry", function(e) {
                                    return e.indexOf("blackberry") >= 0 ? /\bblackberry\s?(\d+)/ : "bb10"
                                }]
                            ], t = 0; t < r.length; t++) {
                            var a = r[t][0],
                                d = r[t][1],
                                s = o(a, d, e);
                            if (s) {
                                n = s;
                                break
                            }
                        }
                        return n
                    },
                    E = 1;
                try {
                    t = M(T), a = S(T), d = t.os, s = t.shell, c = t.core, u = t.resolution, h = t.extraName, l = t.extraVersion, m = a.name, b = a.version, v = d ? d + (t[d] ? t[d] : "") : "", p = s ? s + parseInt(t[s]) : "", w = c, g = u, x = h ? h + (l ? parseInt(l) : "") : "", z = m + b
                } catch (e) {}
                f = {
                    p: E,
                    o: P(v),
                    b: P(p),
                    w: P(w),
                    s: g,
                    mx: x,
                    ism: z
                }, o[r] || (o[r] = {}), o[r].ua || (o[r].ua = {}), o.goldlog || (o.goldlog = {}), i.info = o[r].ua = goldlog._aplus_client = {
                    version: e,
                    ua_info: f
                }
            }()
        }]); /*! 2017-10-31 20:15:15 v0.2.4 */
        ! function(t) {
            function e(o) {
                if (n[o]) return n[o].exports;
                var i = n[o] = {
                    exports: {},
                    id: o,
                    loaded: !1
                };
                return t[o].call(i.exports, i, i.exports, e), i.loaded = !0, i.exports
            }
            var n = {};
            return e.m = t, e.c = n, e.p = "", e(0)
        }([function(t, e, n) {
            "use strict";
            ! function() {
                var t = window.goldlog || (window.goldlog = {});
                t._aplus_cplugin_utilkit || (t._aplus_cplugin_utilkit = {
                    status: "init"
                }, n(1).init(t), t._aplus_cplugin_utilkit.status = "complete")
            }()
        }, function(t, e, n) {
            "use strict";
            var o = n(2),
                i = n(4);
            e.init = function(t) {
                t.setCookie = o.setCookie, t.getCookie = o.getCookie, t.on = i.on
            }
        }, function(t, e, n) {
            "use strict";
            var o = document,
                i = n(3),
                a = function(t) {
                    var e = new RegExp("(?:^|;)\\s*" + t + "=([^;]+)"),
                        n = o.cookie.match(e);
                    return n ? n[1] : ""
                };
            e.getCookie = a;
            var r = function(t, e, n) {
                n || (n = {});
                var i = new Date;
                return n.expires && ("number" == typeof n.expires || n.expires.toUTCString) ? ("number" == typeof n.expires ? i.setTime(i.getTime() + 24 * n.expires * 60 * 60 * 1e3) : i = n.expires, e += "; expires=" + i.toUTCString()) : "session" !== n.expires && (i.setTime(i.getTime() + 63072e7), e += "; expires=" + i.toUTCString()), e += "; path=" + (n.path ? n.path : "/"), e += "; domain=" + n.domain, o.cookie = t + "=" + e, a(t)
            };
            e.setCookie = function(t, e, n) {
                try {
                    if (n || (n = {}), n.domain) r(t, e, n);
                    else
                        for (var o = i.getDomains(), a = 0; a < o.length;) n.domain = o[a], r(t, e, n) ? a = o.length : a++
                } catch (t) {}
            }
        }, function(t, e) {
            "use strict";
            e.getDomains = function() {
                var t = [];
                try {
                    for (var e = location.hostname, n = e.split("."), o = 2; o <= n.length;) t.push(n.slice(n.length - o).join(".")), o++
                } catch (t) {}
                return t
            }
        }, function(t, e) {
            "use strict";
            var n = window,
                o = document,
                i = !!o.attachEvent,
                a = "attachEvent",
                r = "addEventListener",
                c = i ? a : r,
                u = function(t, e) {
                    var n = goldlog._$ || {},
                        o = n.meta_info || {},
                        i = o.aplus_ctap || {};
                    if (i && "function" == typeof i.on) i.on(t, e);
                    else {
                        var a = "ontouchend" in document.createElement("div"),
                            r = a ? "touchstart" : "mousedown";
                        s(t, r, e)
                    }
                },
                s = function(t, e, o) {
                    return "tap" === e ? void u(t, o) : void t[c]((i ? "on" : "") + e, function(t) {
                        t = t || n.event;
                        var e = t.target || t.srcElement;
                        "function" == typeof o && o(t, e)
                    }, !1)
                };
            e.on = s;
            var d = function(t) {
                    try {
                        o.documentElement.doScroll("left")
                    } catch (e) {
                        return void setTimeout(function() {
                            d(t)
                        }, 1)
                    }
                    t()
                },
                l = function(t) {
                    var e = 0,
                        n = function() {
                            0 === e && t(), e++
                        };
                    "complete" === o.readyState && n();
                    var i;
                    if (o.addEventListener) i = function() {
                        o.removeEventListener("DOMContentLoaded", i, !1), n()
                    }, o.addEventListener("DOMContentLoaded", i, !1), window.addEventListener("load", n, !1);
                    else if (o.attachEvent) {
                        i = function() {
                            "complete" === o.readyState && (o.detachEvent("onreadystatechange", i), n())
                        }, o.attachEvent("onreadystatechange", i), window.attachEvent("onload", n);
                        var a = !1;
                        try {
                            a = null === window.frameElement
                        } catch (t) {}
                        o.documentElement.doScroll && a && d(n)
                    }
                };
            e.DOMReady = function(t) {
                l(t)
            }, e.onload = function(t) {
                "complete" === o.readyState ? t() : s(n, "load", t)
            }
        }]);
        ! function(o) {
            function t(r) {
                if (e[r]) return e[r].exports;
                var a = e[r] = {
                    exports: {},
                    id: r,
                    loaded: !1
                };
                return o[r].call(a.exports, a, a.exports, t), a.loaded = !0, a.exports
            }
            var e = {};
            return t.m = o, t.c = e, t.p = "", t(0)
        }([function(o, t, e) {
            "use strict";
            ! function() {
                var o = window.goldlog || (window.goldlog = {});
                o._aplus_cplugin_m || (o._aplus_cplugin_m = e(1).run())
            }()
        }, function(o, t, e) {
            "use strict";
            var r = e(2),
                a = e(3),
                n = e(4),
                s = navigator.sendBeacon ? "post" : "get";
            e(5).run(), t.run = function() {
                return {
                    status: "complete",
                    do_tracker_jserror: function(o) {
                        try {
                            var t = new n({
                                    logkey: o ? o.logkey : "",
                                    ratio: o && "number" == typeof o.ratio && o.ratio > 0 ? o.ratio : r.jsErrorRecordRatio
                                }),
                                e = ["Message: " + o.message, "Error object: " + o.error, "Url: " + location.href].join(" - "),
                                c = goldlog.spm_ab || [],
                                i = location.hostname + location.pathname;
                            t.run({
                                code: 110,
                                page: i,
                                msg: "record_jserror_by" + s + "_" + o.message,
                                spm_a: c[0],
                                spm_b: c[1],
                                c1: e,
                                c2: o.filename,
                                c3: location.protocol + "//" + i,
                                c4: goldlog.pvid || "",
                                c5: o.logid || ""
                            })
                        } catch (o) {
                            a.logger({
                                msg: o
                            })
                        }
                    },
                    do_tracker_lostpv: function(o) {
                        var t = !1;
                        try {
                            if (o && o.page) {
                                var e = o.spm_ab ? o.spm_ab.split(".") : [],
                                    c = "record_lostpv_by" + s + "_" + o.msg,
                                    i = new n({
                                        ratio: o.ratio || r.lostPvRecordRatio
                                    });
                                i.run({
                                    code: 102,
                                    page: o.page,
                                    msg: c,
                                    spm_a: e[0],
                                    spm_b: e[1],
                                    c1: o.duration,
                                    c2: o.page_url
                                }), t = !0
                            }
                        } catch (o) {
                            a.logger({
                                msg: o
                            })
                        }
                        return t
                    },
                    do_tracker_obsolete_inter: function(o) {
                        var t = !1;
                        try {
                            if (o && o.page) {
                                var e = o.spm_ab ? o.spm_ab.split(".") : [],
                                    c = "record_obsolete interface be called by" + s,
                                    i = new n({
                                        ratio: o.ratio || r.obsoleteInterRecordRatio
                                    });
                                i.run({
                                    code: 109,
                                    page: o.page,
                                    msg: c,
                                    spm_a: e[0],
                                    spm_b: e[1],
                                    c1: o.interface_name,
                                    c2: o.interface_params
                                }, 1), t = !0
                            }
                        } catch (o) {
                            a.logger({
                                msg: o
                            })
                        }
                        return t
                    },
                    do_tracker_browser_support: function(o) {
                        var t = !1;
                        try {
                            if (o && o.page) {
                                var e = o.spm_ab ? o.spm_ab.split(".") : [],
                                    c = new n({
                                        ratio: o.ratio || r.browserSupportRatio
                                    }),
                                    i = goldlog._aplus_client || {},
                                    l = i.ua_info || {};
                                c.run({
                                    code: 111,
                                    page: o.page,
                                    msg: o.msg + "_by" + s,
                                    spm_a: e[0],
                                    spm_b: e[1],
                                    c1: [l.o, l.b, l.w].join("_"),
                                    c2: o.etag || "",
                                    c3: o.cna || ""
                                }), t = !0
                            }
                        } catch (o) {
                            a.logger({
                                msg: o
                            })
                        }
                        return t
                    },
                    do_tracker_common_analysis: function(o) {
                        var t = !1;
                        try {
                            if (o && o.page) {
                                var e = o.spm_ab ? o.spm_ab.split(".") : [],
                                    c = new n({
                                        ratio: o.ratio || r.browserSupportRatio
                                    }),
                                    i = goldlog._aplus_client || {},
                                    l = i.ua_info || {};
                                c.run({
                                    code: 113,
                                    page: o.page,
                                    msg: o.msg + "_by" + s,
                                    spm_a: e[0],
                                    spm_b: e[1],
                                    c1: [l.o, l.b, l.w].join("_"),
                                    c2: o.init_time || "",
                                    c3: o.wspv_time || 0,
                                    c4: o.load_time || 0,
                                    c5: o.channel_type
                                }), t = !0
                            }
                        } catch (o) {
                            a.logger({
                                msg: o
                            })
                        }
                        return t
                    }
                }
            }
        }, function(o, t) {
            "use strict";
            t.lostPvRecordRatio = "0.01", t.obsoleteInterRecordRatio = "0.001", t.jsErrorRecordRatio = "0.001", t.browserSupportRatio = "0.001", t.goldlogQueueRatio = "0.01"
        }, function(o, t) {
            "use strict";
            var e = function(o) {
                var t = o.level || "warn";
                window.console && window.console[t] && window.console[t](o.msg)
            };
            t.logger = e, t.assign = function(o, t) {
                if ("function" != typeof Object.assign) {
                    var e = function(o) {
                        if (null === o) throw new TypeError("Cannot convert undefined or null to object");
                        for (var t = Object(o), e = 1; e < arguments.length; e++) {
                            var r = arguments[e];
                            if (null !== r)
                                for (var a in r) Object.prototype.hasOwnProperty.call(r, a) && (t[a] = r[a])
                        }
                        return t
                    };
                    return e(o, t)
                }
                return Object.assign({}, o, t)
            }, t.makeCacheNum = function() {
                return Math.floor(268435456 * Math.random()).toString(16)
            }, t.obj2param = function(o) {
                var t, e, r = [];
                for (t in o) o.hasOwnProperty(t) && (e = "" + o[t], r.push(t + "=" + encodeURIComponent(e)));
                return r.join("&")
            }
        }, function(o, t, e) {
            var r = e(3),
                a = {
                    ratio: 1,
                    logkey: "fsp.1.1",
                    gmkey: "",
                    chksum: "H46747615"
                },
                n = function(o) {
                    o && "object" == typeof o || (o = a), this.opts = o, this.opts.ratio = o.ratio || a.ratio, this.opts.logkey = o.logkey || a.logkey, this.opts.gmkey = o.gmkey || a.gmkey, this.opts.chksum = o.chksum || a.chksum
                },
                s = n.prototype;
            s.getRandom = function() {
                return Math.floor(1e3 * Math.random()) + 1
            }, s.run = function(o, t) {
                var e, a, n = {
                        pid: "aplus",
                        code: 101,
                        msg: "异常内容"
                    },
                    s = "";
                try {
                    var c = window.goldlog || {},
                        i = c._$ || {},
                        l = i.meta_info || {},
                        g = parseFloat(l["aplus-tracker-rate"]);
                    if (e = this.opts || {}, "number" == typeof g && g + "" != "NaN" || (g = e.ratio), a = this.getRandom(), t || a <= 1e3 * g) {
                        s = "//gm.mmstat.com/" + e.logkey, o.rel = i.script_name + "@" + c.lver, o.type = o.code, o.uid = encodeURIComponent(c.getCookie("cna")), o = r.assign(n, o);
                        var u = r.obj2param(o);
                        c.tracker = c.send(s, {
                            cache: r.makeCacheNum(),
                            gokey: u,
                            logtype: "2"
                        }, "POST")
                    }
                } catch (o) {
                    r.logger({
                        msg: "tracker.run() exec error: " + o
                    })
                }
            }, o.exports = n
        }, function(o, t, e) {
            "use strict";
            var r = e(6),
                a = function(o) {
                    var t = window.goldlog || {},
                        e = t._$ = t._$ || {},
                        r = t.spm_ab ? t.spm_ab.join(".") : "0.0",
                        a = e.send_pv_count || 0;
                    if (a < 1 && navigator && navigator.sendBeacon) {
                        var n = window.goldlog_queue || (window.goldlog_queue = []),
                            s = location.hostname + location.pathname;
                        n.push({
                            action: ["goldlog", "_aplus_cplugin_m", "do_tracker_lostpv"].join("."),
                            arguments: [{
                                page: s,
                                page_url: location.protocol + "//" + s,
                                duration: o,
                                spm_ab: r,
                                msg: "dom_state=" + document.readyState
                            }]
                        })
                    }
                };
            t.run = function() {
                var o = new Date;
                r.on(window, "beforeunload", function() {
                    var t = new Date,
                        e = t.getTime() - o.getTime();
                    a(e)
                })
            }
        }, function(o, t) {
            "use strict";
            var e = self,
                r = e.document,
                a = !!r.attachEvent,
                n = "attachEvent",
                s = "addEventListener",
                c = a ? n : s;
            t.getIframeUrl = function(o) {
                var t, e = "//g.alicdn.com";
                return t = goldlog && "function" == typeof goldlog.getCdnPath ? goldlog.getCdnPath() || e : e, (o || "https") + ":" + t + "/alilog/aplus_cplugin/@@APLUS_CPLUGIN_VER/ls.html?t=@@_VERSION_"
            }, t.on = function(o, t, r) {
                o[c]((a ? "on" : "") + t, function(o) {
                    o = o || e.event;
                    var t = o.target || o.srcElement;
                    "function" == typeof r && r(o, t)
                }, !1)
            }, t.checkLs = function() {
                var o;
                try {
                    window.localStorage && (localStorage.setItem("test_log_cna", "1"), "1" === localStorage.getItem("test_log_cna") && (localStorage.removeItem("test_log_cna"), o = !0))
                } catch (t) {
                    o = !1
                }
                return o
            }, t.tracker_iframe_status = function(o, t) {
                var e = window.goldlog_queue || (window.goldlog_queue = []),
                    r = goldlog.spm_ab ? goldlog.spm_ab.join(".") : "",
                    a = "createIframe_" + t.status + "_id=" + o;
                t.msg && (a += "_" + t.msg), e.push({
                    action: "goldlog._aplus_cplugin_m.do_tracker_browser_support",
                    arguments: [{
                        page: location.hostname + location.pathname,
                        msg: a,
                        browser_attr: navigator.userAgent,
                        spm_ab: r,
                        cna: t.duration || "",
                        ratio: 1
                    }]
                })
            }, t.tracker_ls_failed = function() {
                var o = window.goldlog_queue || (window.goldlog_queue = []),
                    t = goldlog.spm_ab ? goldlog.spm_ab.join(".") : "";
                o.push({
                    action: "goldlog._aplus_cplugin_m.do_tracker_browser_support",
                    arguments: [{
                        page: location.hostname + location.pathname,
                        msg: "donot support localStorage",
                        browser_attr: navigator.userAgent,
                        spm_ab: t
                    }]
                })
            }, t.processMsgData = function(o) {
                var t = {};
                try {
                    var e = "{}";
                    e = "TextEncoder" in window && "object" == typeof o ? new window.TextDecoder("utf-8").decode(o) : o, t = JSON.parse(e)
                } catch (o) {
                    t = {}
                }
                return t
            }, t.do_pub_fn = function(o, t) {
                var e = window.goldlog_queue || (window.goldlog_queue = []);
                e.push({
                    action: "goldlog.aplus_pubsub.publish",
                    arguments: [o, t]
                }), e.push({
                    action: "goldlog.aplus_pubsub.cachePubs",
                    arguments: [o, t]
                })
            }
        }]); /*! 2022-02-16 15:56:10 v8.15.21 */
        ! function(t) {
            function e(r) {
                if (n[r]) return n[r].exports;
                var o = n[r] = {
                    exports: {},
                    id: r,
                    loaded: !1
                };
                return t[r].call(o.exports, o, o.exports, e), o.loaded = !0, o.exports
            }
            var n = {};
            return e.m = t, e.c = n, e.p = "", e(0)
        }([function(t, e, n) {
            "use strict";
            ! function() {
                var t, e = window;
                try {
                    var r = "function";
                    t = typeof e.WebSocket === r && typeof e.WebSocket.prototype.send === r
                } catch (t) {}
                if (t) {
                    var o = e.goldlog || (e.goldlog = {});
                    if (o._aplus_cplugin_ws) return;
                    o._aplus_cplugin_ws = !0;
                    var a = n(1),
                        s = a.create();
                    s.run()
                }
            }()
        }, function(t, e, n) {
            "use strict";
            var r = window,
                o = n(2),
                a = n(3),
                s = n(13),
                i = n(16),
                u = n(6),
                c = n(8),
                l = n(17),
                f = n(18),
                h = n(20),
                p = n(21),
                g = n(22);
            t.exports = o.extend({
                wsHandler: "",
                lsCnaKey: "APLUS_CNA",
                timeoutToHttp: 3e3,
                domain: "log.mmstat.com",
                retryTimesKey: "aplusx_retry_times",
                maxRetryTimesPerHour: 3,
                retryTimes: 0,
                pageLoadDateHour: "",
                getDateHour: function() {
                    return l.getFormatDate() + (new Date).getHours()
                },
                getRandom: function(t, e) {
                    return t + Math.floor(Math.random() * (e - t + 1))
                },
                getRetryTimes: function() {
                    var t = 0,
                        e = c.get(this.retryTimesKey);
                    if (e) {
                        var n = e.split("-");
                        2 === n.length && n[0] === this.getDateHour() && (t = parseInt(n[1]))
                    }
                    return t
                },
                setRetryTimes: function(t) {
                    c.set(this.retryTimesKey, this.getDateHour() + "-" + t)
                },
                doSetRetryTimes: function() {
                    this.retryTimes < this.maxRetryTimesPerHour ? this.setRetryTimes(++this.retryTimes) : this.retryTimes >= this.maxRetryTimesPerHour && this.pageLoadDateHour !== this.getDateHour() && (this.retryTimes = 0, this.setRetryTimes(++this.retryTimes))
                },
                cheatCallback: function(t, e) {
                    c.set(t.toUpperCase(), e)
                },
                newSend: function(t, e, n, r) {
                    var o = this;
                    i(t, function(e, n) {
                        "number" != typeof n && "boolean" != typeof n || (t[e] = n + "")
                    });
                    var a = c.get("APLUS_SN"),
                        s = c.get("APLUS_SY");
                    try {
                        a && (t.aplus_sn = a), s && (t.aplus_sy = s), t.ua = navigator.userAgent, t.lang = navigator.language
                    } catch (t) {}
                    this.wsHandler.send({
                        id: "id" + o.getRandom(1, 1e8),
                        startTime: (new Date).getTime(),
                        type: e,
                        msg: {
                            postData: JSON.stringify(t),
                            url: n
                        },
                        method: r
                    })
                },
                getPvPostData: function(t) {
                    var e, n = t.is_single,
                        r = t.where_to_sendlog_ut.aplusToUT.toutflag,
                        o = t.where_to_sendpv.url,
                        s = "//log.mmstat.com/o.gif";
                    if ("toUT2" === r && !n || "toUT" === r && !n || "toUT2" !== r && "toUT" !== r) {
                        s = t.where_to_sendpv.url, e = t.what_to_sendpv.pvdata;
                        var i = o.match(/\/\w+.gif/),
                            u = i ? i[0] : "/v.gif",
                            c = a.arr2param(e),
                            l = c.indexOf("&aplus&") > -1 ? "&aplus&" : "&aplus=&",
                            f = c.split(l),
                            h = a.param2obj(f[0]);
                        return {
                            postData: a.assign(h, {
                                logkey: u,
                                url: location.href,
                                gokey: f[1].replace(/&aws=1/, "")
                            }),
                            mmurl: s
                        }
                    }
                },
                pv_callback: function(t) {
                    try {
                        var e = this.getPvPostData(t);
                        e && this.newSend(e.postData, "pv", e.mmurl)
                    } catch (t) {
                        g.catchException("pv_callback", t)
                    }
                },
                getHjljPostData: function(t) {
                    var e = t.is_single,
                        n = {},
                        r = t.where_to_sendlog_ut.aplusToUT.toutflag,
                        o = "";
                    if ("toUT2" === r && !e || "toUT" === r && !e) o = t.where_to_hjlj.url, n = t.what_to_hjlj.logdata, n.logkey = n.logkey || "";
                    else {
                        if ("toUT2" === r || "toUT" === r) return;
                        o = t.where_to_hjlj.url, n = t.what_to_hjlj.logdata, n.logkey = t.userdata ? t.userdata.logkey : ""
                    }
                    return n.url = location.href, n.gokey && (n.gokey = n.gokey.replace(/&aws=1/, "")), {
                        postData: n,
                        mmurl: o
                    }
                },
                hjlj_callback: function(t) {
                    try {
                        var e = this.getHjljPostData(t);
                        e && this.newSend(e.postData, "goldlog", e.mmurl, t.method)
                    } catch (t) {
                        g.catchException("hjlj_callback", t)
                    }
                },
                getCnaData: function() {
                    var t = {
                            params: []
                        },
                        e = u.getLsCna(this.lsCnaKey),
                        n = f.getCookie("cna");
                    return t.cna = e || n, e && !n && t.params.push("lstag=1"), t
                },
                cnaCallback: function(t, e) {
                    var n = u.getLsCna(this.lsCnaKey),
                        r = f.getCookie("cna");
                    n === r && n === e && r === e || (u.setLsCna(this.lsCnaKey, l.getFormatDate(), e), f.setCookie(t, e, {
                        SameSite: "none"
                    }))
                },
                watchWSStatus: function(t) {
                    var e = this;
                    this.wsHandler.subscribe("APLUS_WS_OPEN", function() {
                        t === e.maxRetryTimesPerHour && (e.retryTimes = 0, e.setRetryTimes(e.retryTimes))
                    }), this.wsHandler.subscribe("APLUS_WS_ERROR", function() {
                        e.doSetRetryTimes(), e.msgQueueToHttpRequest()
                    }), this.wsHandler.subscribe("APLUS_WS_EXCEPTION", function() {
                        e.doSetRetryTimes(), e.msgQueueToHttpRequest()
                    }), this.wsHandler.subscribe("APLUS_WS_CLOSE", function() {
                        e.msgQueueToHttpRequest()
                    })
                },
                startWebSocket: function() {
                    var t = this,
                        e = this.getCnaData();
                    this.wsHandler = p.create({
                        cna: e.cna,
                        params: e.params,
                        createTime: (new Date).getTime()
                    }), this.wsHandler.startWS(), this.watchWSStatus(this.getRetryTimes()), this.wsHandler.subscribe("APLUS_WS_SERVER_MSG", function(e) {
                        if (e) {
                            var n = e.indexOf(":"),
                                r = e.substr(0, n),
                                o = e.substr(n + 1);
                            switch (r) {
                                case "cna":
                                    t.cnaCallback(r, o);
                                    break;
                                case "aplus_sn":
                                case "aplus_sy":
                                    t.cheatCallback(r, o);
                                    break;
                                default:
                                    var a = {};
                                    a[r] = o, goldlog.send("//" + t.domain + "/s", a)
                            }
                        }
                    })
                },
                subscribeLogs: function(t, e) {
                    h.pushIntoGoldlogQueue("goldlog.aplus_pubsub.subscribe", [t, function(t) {
                        "complete" === t.status && e(t)
                    }])
                },
                enableSendByWS: function(t) {
                    var e = goldlog.getMetaInfo("aplus-channel"),
                        n = ["WS", "WS-ONLY"],
                        r = n.indexOf(goldlog.aplusChannel) > -1 || n.indexOf(e) > -1 || n.indexOf(t) > -1;
                    return r
                },
                watchLOG: function() {
                    var t = this;
                    t.subscribeLogs("mw_change_pv", function(e) {
                        var n = t.enableSendByWS(e.method);
                        if (n === !0)
                            if (t.retryTimes >= t.maxRetryTimesPerHour) {
                                var r = a.arr2obj(e.what_to_sendpv.pvdata);
                                delete r.aws, r._j = 1, goldlog.send(e.where_to_sendpv.url, r)
                            } else t.pv_callback(e)
                    }), t.subscribeLogs("mw_change_hjlj", function(e) {
                        var n = "POST" === e.method;
                        if (t.enableSendByWS(e.method))
                            if (t.retryTimes >= t.maxRetryTimesPerHour) {
                                var r = t.getHjljPostData(e);
                                if (r && r.postData) {
                                    r.postData.gokey += "&_j=1";
                                    var o = {};
                                    i(r.postData, function(t, e) {
                                        ["url", "logkey"].indexOf(t) === -1 && (o[t] = n ? decodeURIComponent(e) : e)
                                    }), goldlog.send(r.mmurl, o, e.method)
                                }
                            } else t.hjlj_callback(e)
                    })
                },
                changeToHttpRequest: function(t) {
                    if (t && t.length > 0)
                        for (var e = 0; e < t.length; e++) {
                            var n = t[e],
                                r = n.msg,
                                o = "object" == typeof r.postData ? r.postData : JSON.parse(r.postData);
                            o.gokey = o.gokey + "&_j=1", delete o.aplus_sn, delete o.aplus_sy, delete o.ua, delete o.lang;
                            var a = [];
                            i(o, function(t) {
                                try {
                                    o[t] = decodeURIComponent(o[t])
                                } catch (e) {
                                    o[t] = o[t]
                                }
                                "pv" === n.type ? "gokey" === t ? (a.push("aplus"), a.push(o[t].replace(/&aws=1/, ""))) : "pre" === t ? a.push(t + "=" + encodeURIComponent(o[t])) : "url" !== t && "logkey" !== t && a.push(t + "=" + o[t]) : "gokey" === t && (o[t] = o[t].replace(/&aws=1/, ""))
                            }), "pv" === n.type ? goldlog.send(r.url + "?" + a.join("&")) : goldlog.send(r.url, o, n.method || "GET")
                        }
                },
                dataInArray: function(t, e) {
                    for (var n, r = 0; r < t.length; r++) t[r].id === e.id && (n = !0);
                    return n
                },
                reduceDataInArray: function(t, e) {
                    for (var n = [], r = 0; r < t.length; r++) t[r].id !== e.id && n.push(t[r]);
                    return n
                },
                msgQueueToHttpRequest: function() {
                    var t = this.wsHandler.getMsgQueue();
                    this.changeToHttpRequest(t), this.wsHandler.clearMsgQueue()
                },
                watchQueue: function() {
                    var t = this;
                    s.on(r, "beforeunload", function() {
                        t.msgQueueToHttpRequest()
                    }), this.wsHandler.subscribe("APLUS_WS_MSG_QUEUE_CHANGE", function(e) {
                        r.setTimeout(function() {
                            var n = t.wsHandler.getMsgQueue();
                            if (t.dataInArray(n, e)) {
                                t.doSetRetryTimes(), t.changeToHttpRequest([e]);
                                var r = t.reduceDataInArray(n, e);
                                t.wsHandler.setMsgQueue(r)
                            }
                        }, t.timeoutToHttp)
                    })
                },
                watchDomain: function() {
                    var t = this;
                    h.pushIntoGoldlogQueue("goldlog.aplus_pubsub.subscribe", ["aplusInitContext", function(e) {
                        var n = e ? e.where_to_sendpv : {},
                            r = n.url.match(/(\w|-)+\.(\w|-)+\.(\w|-)+/);
                        r && r.length > 0 && (t.domain = r[0])
                    }])
                },
                run: function() {
                    var t = {
                        aws: 1
                    };
                    h.pushIntoGoldlogQueue("goldlog.appendMetaInfo", ["aplus-exdata", t]), h.pushIntoGoldlogQueue("goldlog.appendMetaInfo", ["aplus-cpvdata", t]);
                    try {
                        this.retryTimes = this.getRetryTimes(), this.pageLoadDateHour = this.getDateHour(), this.startWebSocket(), this.watchLOG(), this.watchQueue(), this.watchDomain()
                    } catch (t) {
                        g.catchException("ws_main_run_fn", t)
                    }
                }
            })
        }, function(t, e) {
            "use strict";

            function n() {}
            n.prototype.extend = function() {}, n.prototype.create = function() {}, n.extend = function(t) {
                return this.prototype.extend.call(this, t)
            }, n.prototype.create = function(t) {
                var e = new this;
                for (var n in t) e[n] = t[n];
                return e
            }, n.prototype.extend = function(t) {
                var e = function() {};
                try {
                    "function" != typeof Object.create && (Object.create = function(t) {
                        function e() {}
                        return e.prototype = t, new e
                    }), e.prototype = Object.create(this.prototype);
                    for (var n in t) e.prototype[n] = t[n];
                    e.prototype.constructor = e, e.extend = e.prototype.extend, e.create = e.prototype.create
                } catch (t) {
                    console.log(t)
                } finally {
                    return e
                }
            }, t.exports = n
        }, function(t, e, n) {
            "use strict";

            function r(t) {
                t = (t || "").split("#")[0].split("?")[0];
                var e = t.length,
                    n = function(t) {
                        var e, n = t.length,
                            r = 0;
                        for (e = 0; e < n; e++) r = 31 * r + t.charCodeAt(e);
                        return r
                    };
                return e ? n(e + "#" + t.charCodeAt(e - 1)) : -1
            }

            function o(t) {
                for (var e = t.split("&"), n = 0, r = e.length, o = {}; n < r; n++) {
                    var a = e[n],
                        s = a.indexOf("="),
                        i = a.substring(0, s),
                        u = a.substring(s + 1);
                    o[i] = f.tryToDecodeURIComponent(u)
                }
                return o
            }

            function a(t) {
                if ("function" != typeof t) throw new TypeError(t + " is not a function");
                return t
            }

            function s(t) {
                var e, n, r, o = [],
                    a = t.length;
                for (r = 0; r < a; r++) e = t[r][0], n = t[r][1], o.push(l.isStartWith(e, y) ? n : e + "=" + encodeURIComponent(n));
                return o.join("&")
            }

            function i(t) {
                var e, n, r, o = {},
                    a = t.length;
                for (r = 0; r < a; r++) e = t[r][0], n = t[r][1], o[e] = n;
                return o
            }

            function u(t, e) {
                var n, r, o, a = [];
                for (n in t) t.hasOwnProperty(n) && (r = "" + t[n], o = n + "=" + encodeURIComponent(r), e ? a.push(o) : a.push(l.isStartWith(n, y) ? r : o));
                return a.join("&")
            }

            function c(t, e) {
                var n = t.indexOf("?") == -1 ? "?" : "&",
                    r = e ? l.isArray(e) ? s(e) : u(e) : "";
                return r ? t + n + r : t
            }
            var l = n(4),
                f = n(6),
                h = n(9),
                p = parent !== self;
            e.is_in_iframe = p, e.makeCacheNum = l.makeCacheNum, e.isStartWith = l.isStartWith, e.isEndWith = l.isEndWith, e.any = l.any, e.each = l.each, e.assign = l.assign, e.isFunction = l.isFunction, e.isArray = l.isArray, e.isString = l.isString, e.isNumber = l.isNumber, e.isUnDefined = l.isUnDefined, e.isContain = l.isContain, e.sleep = n(10).sleep, e.makeChkSum = r, e.tryToDecodeURIComponent = f.tryToDecodeURIComponent, e.nodeListToArray = f.nodeListToArray, e.parseSemicolonContent = f.parseSemicolonContent, e.param2obj = o;
            var g = n(11),
                d = function(t) {
                    return /^(\/\/){0,1}(\w+\.){1,}\w+((\/\w+){1,})?$/.test(t)
                };
            e.hostValidity = d;
            var m = function(t, e) {
                    var n = /^(\/\/){0,1}(\w+\.){1,}\w+\/\w+\.gif$/.test(t),
                        r = d(t),
                        o = "";
                    return n ? o = "isGifPath" : r && (o = "isHostPath"), o || g.logger({
                        msg: e + ": " + t + ' is invalid, suggestion: "xxx.mmstat.com"'
                    }), o
                },
                v = function(t) {
                    return !/^\/\/gj\.mmstat/.test(t) && goldlog.isInternational() && (t = t.replace(/^\/\/\w+\.mmstat/, "//gj.mmstat")), t
                };
            e.filterIntUrl = v, e.getPvUrl = function(t) {
                t || (t = {});
                var e, n, r = t.metaValue && m(t.metaValue, t.metaName),
                    o = "";
                "isGifPath" === r ? (e = /^\/\//.test(t.metaValue) ? "" : "//", o = e + t.metaValue) : "isHostPath" === r && (e = /^\/\//.test(t.metaValue) ? "" : "//", n = /\/$/.test(t.metaValue) ? "" : "/", o = e + t.metaValue + n + t.gifPath);
                var a;
                return o ? a = o : (e = 0 === t.gifPath.indexOf("/") ? t.gifPath : "/" + t.gifPath, a = t.url && t.url.replace(/\/\w+\.gif/, e)), a
            }, e.indexof = n(12).indexof, e.callable = a;
            var y = "::-plain-::";
            e.mkPlainKey = function() {
                return y + Math.random()
            }, e.s_plain_obj = y, e.mkPlainKeyForExparams = function(t) {
                var e = t || y;
                return e + "exparams"
            }, e.rndInt32 = function() {
                return Math.round(2147483647 * Math.random())
            }, e.arr2param = s, e.arr2obj = i, e.obj2param = u, e.makeUrl = c, e.ifAdd = function(t, e) {
                var n, r, o, a, s = e.length;
                for (n = 0; n < s; n++) r = e[n], o = r[0], a = r[1], a && t.push([o, a])
            }, e.isStartWithProtocol = h.isStartWithProtocol, e.param2arr = function(t) {
                for (var e, n = t.split("&"), r = 0, o = n.length, a = []; r < o; r++) e = n[r].split("="), a.push([e.shift(), e.join("=")]);
                return a
            }, e.catchException = function(t, e, n) {
                var r = window,
                    o = r.goldlog_queue || (r.goldlog_queue = []),
                    a = t;
                "object" == typeof e && e.message && (a = a + "_" + e.message), n && n.msg && (a += "_" + n.msg), o.push({
                    action: "goldlog._aplus_cplugin_m.do_tracker_jserror",
                    arguments: [{
                        message: a,
                        error: JSON.stringify(e),
                        filename: t
                    }]
                })
            }
        }, function(t, e, n) {
            "use strict";

            function r(t, e) {
                return "function" != typeof Object.assign ? function(t) {
                    if (null === t) throw new TypeError("Cannot convert undefined or null to object");
                    for (var e = Object(t), n = 1; n < arguments.length; n++) {
                        var r = arguments[n];
                        if (null !== r)
                            for (var o in r) Object.prototype.hasOwnProperty.call(r, o) && (e[o] = r[o])
                    }
                    return e
                }(t, e) : Object.assign({}, t, e)
            }

            function o(t) {
                return "function" == typeof t
            }

            function a(t) {
                return Array.isArray ? Array.isArray(t) : /Array/.test(Object.prototype.toString.call(t))
            }

            function s(t) {
                return "string" == typeof t
            }

            function i(t) {
                return "number" == typeof t
            }

            function u(t) {
                return "undefined" == typeof t
            }

            function c(t) {
                return "[object Object]" === Object.prototype.toString.call(t)
            }

            function l(t) {
                if ("number" == typeof t) return !1;
                if (u(t) || null === t) return !0;
                if (s(t)) return !t;
                if (a(t)) return !t.length;
                if (c(t)) {
                    for (var e in t)
                        if (hasOwnProperty.call(t, e)) return !1;
                    return !0
                }
                return !1
            }

            function f(t) {
                if ("string" == typeof t) try {
                    var e = JSON.parse(t);
                    return !("object" != typeof e || !e)
                } catch (t) {
                    return !1
                }
                return !1
            }

            function h(t, e) {
                return t.indexOf(e) > -1
            }
            var p = window;
            e.assign = r, e.makeCacheNum = function() {
                return Math.floor(268435456 * Math.random()).toString(16)
            }, e.each = n(5), e.isStartWith = function(t, e) {
                return 0 === t.indexOf(e)
            }, e.isEndWith = function(t, e) {
                var n = t.length,
                    r = e.length;
                return n >= r && t.indexOf(e) == n - r
            }, e.any = function(t, e) {
                var n, r = t.length;
                for (n = 0; n < r; n++)
                    if (e(t[n])) return !0;
                return !1
            }, e.isFunction = o, e.isArray = a, e.isString = s, e.isNumber = i, e.isUnDefined = u, e.isObject = c, e.isEmpty = l, e.isJSON = f, e.isContain = h;
            var g = function(t) {
                var e, n = t.constructor === Array ? [] : {};
                if ("object" == typeof t) {
                    if (p.JSON && p.JSON.parse) e = JSON.stringify(t), n = JSON.parse(e);
                    else
                        for (var r in t) n[r] = "object" == typeof t[r] ? g(t[r]) : t[r];
                    return n
                }
            };
            e.cloneObj = g, e.cloneDeep = g
        }, function(t, e) {
            "use strict";
            t.exports = function(t, e) {
                var n, r = t.length;
                for (n = 0; n < r; n++) {
                    var o = e(t[n], n);
                    if ("break" === o) break
                }
            }
        }, function(t, e, n) {
            "use strict";
            var r = n(7),
                o = n(8);
            t.exports = {
                tryToDecodeURIComponent: function(t, e) {
                    var n = e || "";
                    if (t) try {
                        n = decodeURIComponent(t)
                    } catch (t) {}
                    return n
                },
                parseSemicolonContent: function(t, e, n) {
                    e = e || {};
                    var o, a, s = t.split(";"),
                        i = s.length;
                    for (o = 0; o < i; o++) {
                        a = s[o].split("=");
                        var u = r.trim(a.slice(1).join("="));
                        e[r.trim(a[0]) || ""] = n ? u : this.tryToDecodeURIComponent(u)
                    }
                    return e
                },
                nodeListToArray: function(t) {
                    var e, n;
                    try {
                        return e = [].slice.call(t)
                    } catch (o) {
                        e = [], n = t.length;
                        for (var r = 0; r < n; r++) e.push(t[r]);
                        return e
                    }
                },
                getLsCna: function(t, e) {
                    if (o.set && o.test()) {
                        var n = "",
                            r = o.get(t);
                        if (r) {
                            var a = r.split("_") || [];
                            n = e ? a.length > 1 && e === a[0] ? a[1] : "" : a.length > 1 ? a[1] : ""
                        }
                        return decodeURIComponent(n)
                    }
                    return ""
                },
                setLsCna: function(t, e, n) {
                    n && o.set && o.test() && o.set(t, e + "_" + encodeURIComponent(n))
                },
                getUrl: function(t) {
                    var e = t || "//log.mmstat.com/eg.js";
                    try {
                        var n = goldlog.getMetaInfo("aplus-rhost-v"),
                            r = /[[a-z|0-9\.]+[a-z|0-9]/,
                            o = n.match(r);
                        o && o[0] && (e = e.replace(r, o[0]))
                    } catch (t) {}
                    return e
                }
            }
        }, function(t, e) {
            "use strict";

            function n(t) {
                return "string" == typeof t ? t.replace(/^\s+|\s+$/g, "") : ""
            }
            e.trim = n
        }, function(t, e) {
            "use strict";
            t.exports = {
                set: function(t, e) {
                    try {
                        return localStorage.setItem(t, e), !0
                    } catch (t) {
                        return !1
                    }
                },
                get: function(t) {
                    try {
                        return localStorage.getItem(t)
                    } catch (t) {
                        return ""
                    }
                },
                test: function() {
                    var t = "grey_test_key";
                    try {
                        return localStorage.setItem(t, 1), localStorage.removeItem(t), !0
                    } catch (t) {
                        return !1
                    }
                },
                remove: function(t) {
                    localStorage.removeItem(t)
                }
            }
        }, function(t, e, n) {
            "use strict";
            var r = n(4),
                o = function() {
                    if (goldlog.aplusDebug) {
                        var t = location.protocol;
                        return "http:" !== t && "https:" !== t && (t = "https:"), t
                    }
                    return "https:"
                };
            e.getProtocal = o, e.isStartWithProtocol = function(t) {
                for (var e = ["javascript:", "tel:", "sms:", "mailto:", "tmall://", "#"], n = 0, o = e.length; n < o; n++)
                    if (r.isStartWith(t, e[n])) return !0;
                return !1
            }
        }, function(t, e) {
            "use strict";
            e.sleep = function(t, e) {
                return setTimeout(function() {
                    e()
                }, t)
            }
        }, function(t, e) {
            "use strict";
            var n = function() {
                var t = !1;
                return "boolean" == typeof goldlog.aplusDebug && (t = goldlog.aplusDebug), t
            };
            e.isDebugAplus = n;
            var r = function(t) {
                t || (t = {});
                var e = t.level || "warn";
                window.console && window.console[e] && window.console[e](t.msg)
            };
            e.logger = r
        }, function(t, e) {
            "use strict";
            e.indexof = function(t, e) {
                var n = -1;
                try {
                    n = t.indexOf(e)
                } catch (o) {
                    for (var r = 0; r < t.length; r++) t[r] === e && (n = r)
                } finally {
                    return n
                }
            }
        }, function(t, e, n) {
            "use strict";

            function r(t, e, n) {
                var r = goldlog._$ || {},
                    o = r.meta_info || {},
                    a = o.aplus_ctap || {},
                    s = o["aplus-touch"];
                if (a && "function" == typeof a.on) a.on(t, e);
                else {
                    var u = "ontouchend" in document.createElement("div");
                    !u || "tap" !== s && "tapSpm" !== n ? i(t, u ? "touchstart" : "mousedown", e) : c.on(t, e)
                }
            }

            function o(t) {
                try {
                    f.documentElement.doScroll("left")
                } catch (e) {
                    return void setTimeout(function() {
                        o(t)
                    }, 1)
                }
                t()
            }

            function a(t) {
                var e = 0,
                    n = function() {
                        0 === e && t(), e++
                    };
                "complete" === f.readyState && n();
                var r;
                if (f.addEventListener) r = function() {
                    f.removeEventListener("DOMContentLoaded", r, !1), n()
                }, f.addEventListener("DOMContentLoaded", r, !1), window.addEventListener("load", n, !1);
                else if (f.attachEvent) {
                    r = function() {
                        "complete" === f.readyState && (f.detachEvent("onreadystatechange", r), n())
                    }, f.attachEvent("onreadystatechange", r), window.attachEvent("onload", n);
                    var a = !1;
                    try {
                        a = null === window.frameElement
                    } catch (t) {}
                    f.documentElement.doScroll && a && o(n)
                }
            }

            function s(t) {
                "complete" === f.readyState ? t() : i(l, "load", t)
            }

            function i() {
                var t = arguments;
                if (2 === t.length) "DOMReady" === t[0] && a(t[1]), "onload" === t[0] && s(t[1]);
                else if (3 === t.length) {
                    var e = t[0],
                        n = t[1],
                        o = t[2];
                    "tap" === n || "tapSpm" === n ? r(e, o, n) : e[d]((h ? "on" : "") + n, function(t) {
                        t = t || l.event;
                        var e = t.target || t.srcElement;
                        "function" == typeof o && o(t, e)
                    }, !!u(n) && {
                        passive: !0
                    })
                }
            }
            var u = n(14),
                c = n(15),
                l = window,
                f = document,
                h = !!f.attachEvent,
                p = "attachEvent",
                g = "addEventListener",
                d = h ? p : g;
            e.DOMReady = a, e.onload = s, e.on = i
        }, function(t, e) {
            var n;
            t.exports = function(t) {
                if ("boolean" == typeof n) return n;
                if (!/touch|mouse|scroll|wheel/i.test(t)) return !1;
                n = !1;
                try {
                    var e = Object.defineProperty({}, "passive", {
                        get: function() {
                            n = !0
                        }
                    });
                    window.addEventListener("test", null, e)
                } catch (t) {}
                return n
            }
        }, function(t, e) {
            "use strict";

            function n(t, e) {
                return t + Math.floor(Math.random() * (e - t + 1))
            }

            function r(t, e, n) {
                var r = l.createEvent("HTMLEvents");
                if (r.initEvent(e, !0, !0), "object" == typeof n)
                    for (var o in n) r[o] = n[o];
                t.dispatchEvent(r)
            }

            function o(t) {
                0 === Object.keys(h).length && (f.addEventListener(d, a, !1), f.addEventListener(g, s, !1), f.addEventListener(v, s, !1));
                for (var e = 0; e < t.changedTouches.length; e++) {
                    var n = t.changedTouches[e],
                        r = {};
                    for (var o in n) r[o] = n[o];
                    var i = {
                        startTouch: r,
                        startTime: Date.now(),
                        status: m,
                        element: t.srcElement || t.target
                    };
                    h[n.identifier] = i
                }
            }

            function a(t) {
                for (var e = 0; e < t.changedTouches.length; e++) {
                    var n = t.changedTouches[e],
                        r = h[n.identifier];
                    if (!r) return;
                    var o = n.clientX - r.startTouch.clientX,
                        a = n.clientY - r.startTouch.clientY,
                        s = Math.sqrt(Math.pow(o, 2) + Math.pow(a, 2));
                    (r.status === m || "pressing" === r.status) && s > 10 && (r.status = "panning")
                }
            }

            function s(t) {
                for (var e = 0; e < t.changedTouches.length; e++) {
                    var n = t.changedTouches[e],
                        o = n.identifier,
                        i = h[o];
                    i && (i.status === m && t.type === g && (i.timestamp = Date.now(), r(i.element, y, {
                        touch: n,
                        touchEvent: t
                    })), delete h[o])
                }
                0 === Object.keys(h).length && (f.removeEventListener(d, a, !1), f.removeEventListener(g, s, !1), f.removeEventListener(v, s, !1))
            }

            function i(t) {
                t.__fixTouchEvent || (t.addEventListener(p, function() {}, !1), t.__fixTouchEvent = !0)
            }

            function u() {
                c || (f.addEventListener(p, o, !1), c = !0)
            }
            var c = !1,
                l = window.document,
                f = l.documentElement,
                h = {},
                p = "touchstart",
                g = "touchend",
                d = "touchmove",
                m = "tapping",
                v = "touchcancel",
                y = "aplus_tap" + n(1, 1e5);
            t.exports = {
                on: function(t, e) {
                    u(), t && t.addEventListener && e && (i(t), t.addEventListener(y, e._aplus_tap_callback = function(t) {
                        e(t, t.target)
                    }, !1))
                },
                un: function(t, e) {
                    t && t.removeEventListener && e && e._aplus_tap_callback && t.removeEventListener(y, e._aplus_tap_callback, !1)
                }
            }
        }, function(t, e) {
            "use strict";
            t.exports = function(t, e) {
                if (Object && Object.keys)
                    for (var n = Object.keys(t), r = n.length, o = 0; o < r; o++) {
                        var a = n[o];
                        e(a, t[a])
                    } else
                        for (var s in t) e(s, t[s])
            }
        }, function(t, e) {
            "use strict";

            function n(t, e, n) {
                var r = "" + Math.abs(t),
                    o = e - r.length,
                    a = t >= 0;
                return (a ? n ? "+" : "" : "-") + Math.pow(10, Math.max(0, o)).toString().substr(1) + r
            }
            e.getFormatDate = function(t) {
                var e = new Date;
                try {
                    return [e.getFullYear(), n(e.getMonth() + 1, 2, 0), n(e.getDate(), 2, 0)].join(t || "")
                } catch (t) {
                    return ""
                }
            }
        }, function(t, e, n) {
            "use strict";

            function r(t) {
                var e = i.cookie.match(new RegExp("(?:^|;)\\s*" + t + "=([^;]+)"));
                return e ? e[1] : ""
            }

            function o(t, e, n) {
                n || (n = {});
                var o = new Date;
                if ("session" === n.expires);
                else if (n.expires && ("number" == typeof n.expires || n.expires.toUTCString)) "number" == typeof n.expires ? o.setTime(o.getTime() + 24 * n.expires * 60 * 60 * 1e3) : o = n.expires, e += "; expires=" + o.toUTCString();
                else {
                    var a = 20;
                    c.indexof(["v.youku.com", "www.youku.com", "player.youku.com"], location.hostname) > -1 && (a = 1), o.setTime(o.getTime() + 365 * a * 24 * 60 * 60 * 1e3), e += "; expires=" + o.toUTCString()
                }
                e += "; path=" + (n.path ? n.path : "/"), e += "; domain=" + n.domain, i.cookie = t + "=" + e;
                var s = 0;
                try {
                    var u = navigator.userAgent.match(/Chrome\/\d+/);
                    u && u[0] && (s = u[0].split("/")[1], s && (s = parseInt(s)))
                } catch (t) {}
                return n.SameSite && s >= 80 && (e += "; SameSite=" + n.SameSite, e += "; Secure", i.cookie = t + "=" + e), r(t)
            }

            function a(t, e, n) {
                try {
                    if (n || (n = {}), n.domain) o(t, e, n);
                    else
                        for (var r = l.getDomains(), a = 0; a < r.length;) n.domain = r[a], o(t, e, n) ? a = r.length : a++
                } catch (t) {}
            }

            function s() {
                var t = {};
                return u.each(h, function(e) {
                    t[e] = r(e)
                }), t.cnaui = /\btanx\.com$/.test(f) ? r("cnaui") : "", t
            }
            var i = document,
                u = n(4),
                c = n(12),
                l = n(19),
                f = location.hostname;
            e.getCookie = r, e.setCookie = a;
            var h = ["tracknick", "thw", "cna"];
            e.getData = s, e.getHng = function() {
                return encodeURIComponent(r("hng") || "")
            }
        }, function(t, e) {
            "use strict";
            e.getDomains = function() {
                var t = [];
                try {
                    for (var e = location.hostname, n = e.split("."), r = 2; r <= n.length;) t.push(n.slice(n.length - r).join(".")), r++
                } catch (t) {}
                return t
            }
        }, function(t, e) {
            "use strict";
            e.pushIntoGoldlogQueue = function(t, e) {
                var n = window;
                (n.goldlog_queue || (n.goldlog_queue = [])).push({
                    action: t,
                    arguments: e
                })
            }
        }, function(t, e, n) {
            "use strict";
            var r = window,
                o = "ws.mmstat.com",
                a = n(22),
                s = n(23),
                i = n(20);
            t.exports = s.extend({
                status: "inactive",
                websocket: {},
                wsindexPre: "wss",
                wsindex: 0,
                msg_queue: [],
                setWsHandler: function(t) {
                    return this.websocket[this.wsindexPre + ++this.wsindex] = new r.WebSocket(t)
                },
                getWsHandler: function() {
                    return this.websocket[this.wsindexPre + this.wsindex]
                },
                getMsgQueue: function() {
                    return this.msg_queue
                },
                clearMsgQueue: function() {
                    this.msg_queue = []
                },
                setMsgQueue: function(t) {
                    this.msg_queue = t
                },
                proessMsgQueue: function(t) {
                    var e, n = this,
                        r = 0;
                    if (t && t.length > 0)
                        for (e = t.length; r < e;) n.send(t.shift()), r++;
                    else
                        for (e = n.msg_queue.length; r < e;) n.send(n.msg_queue.shift()), r++
                },
                initWebSocket: function(t) {
                    var e = this,
                        n = "https:" === location.protocol ? "wss://" : "ws://",
                        r = n + t + "/ws",
                        o = "initWebSocket";
                    try {
                        e.cna && (r += "/" + e.cna), e.params && e.params.length > 0 && (r += "?" + e.params.join("&"));
                        var s = e.setWsHandler(r);
                        s.onopen = function() {
                            e.status = "active";
                            var t = e.getMsgQueue();
                            t.length > 0 && e.proessMsgQueue(t), e.publish("APLUS_WS_OPEN")
                        }, s.onerror = function(t) {
                            e.status = "inactive";
                            var n = t ? t.target : {},
                                r = t ? t.timeStamp : "";
                            a.catchException(o + "_onerror", {
                                message: "targetUrl=" + n.url + "&readyState=" + n.readyState + "&timeStamp=" + r
                            }), e.publish("APLUS_WS_ERROR")
                        }, s.onclose = function() {
                            e.status = "inactive", e.publish("APLUS_WS_CLOSE")
                        }, s.onmessage = function(t) {
                            e.publish("APLUS_WS_SERVER_MSG", t.data)
                        }
                    } catch (t) {
                        a.catchException(o + "_exception", t), e.publish("APLUS_WS_EXCEPTION")
                    }
                },
                readyInitWebSocket: function() {
                    var t = this;
                    i.pushIntoGoldlogQueue("goldlog.aplus_pubsub.subscribe", ["aplusInitContext", function() {
                        var e = t.getWsHandler();
                        (!e || e && e.readyState > 1) && t.initWebSocket(o)
                    }])
                },
                start: function() {
                    var t = this.getWsHandler();
                    (!t || t && t.readyState > 1) && (this.status = "active", this.readyInitWebSocket())
                },
                stop: function() {
                    var t = this.getWsHandler();
                    t && t.readyState <= 1 && (this.status = "inactive", t.close())
                },
                sendMsg: function(t) {
                    var e = this.getWsHandler();
                    return !(!e || 1 !== e.readyState) && (e.send(t), !0)
                },
                processSysEvent: function(t) {
                    "active" === t.msg ? this.start() : "inactive" === t.msg && this.stop()
                },
                processLogEvent: function(t) {
                    if ("active" === this.status) {
                        var e = this.sendMsg(t.msg.postData);
                        e || (this.msg_queue.push(t), this.publish("APLUS_WS_MSG_QUEUE_CHANGE", t))
                    } else this.msg_queue.push(t), this.publish("APLUS_WS_MSG_QUEUE_CHANGE", t)
                },
                send: function(t) {
                    var e = this.getWsHandler();
                    switch ((!e || e.readyState > 1) && this.start(), t.type) {
                        case "sys":
                            this.processSysEvent(t);
                            break;
                        case "pv":
                        case "goldlog":
                            this.processLogEvent(t)
                    }
                },
                startWS: function() {
                    var t = this;
                    t.start()
                }
            })
        }, function(t, e, n) {
            "use strict";
            var r = n(20);
            e.catchException = function(t, e) {
                var n = t;
                "object" == typeof e && e.message && (n = n + "_" + e.message), r.pushIntoGoldlogQueue("goldlog._aplus_cplugin_m.do_tracker_jserror", [{
                    message: n,
                    error: JSON.stringify(e),
                    filename: t
                }])
            }
        }, function(t, e, n) {
            "use strict";

            function r(t) {
                if ("function" != typeof t) throw new TypeError(t + " is not a function");
                return t
            }
            var o = n(2),
                a = function(t) {
                    for (var e = t.length, n = new Array(e - 1), r = 1; r < e; r++) n[r - 1] = t[r];
                    return n
                },
                s = o.extend({
                    create: function(t) {
                        var e = new this;
                        for (var n in t) e[n] = t[n];
                        return e.handlers = [], e.pubs = {}, e
                    },
                    setHandlers: function(t) {
                        this.handlers = t
                    },
                    subscribe: function(t, e) {
                        r(e);
                        var n = this,
                            o = n.pubs || {},
                            a = o[t] || [];
                        if (a)
                            for (var s = 0; s < a.length; s++) {
                                var i = a[s]();
                                e.apply(n, i)
                            }
                        var u = n.handlers || [];
                        return t in u || (u[t] = []), u[t].push(e), n.setHandlers(u), n
                    },
                    subscribeOnce: function(t, e) {
                        r(e);
                        var n, o = this;
                        return this.subscribe.call(this, t, n = function() {
                            o.unsubscribe.call(o, t, n);
                            var r = Array.prototype.slice.call(arguments);
                            e.apply(o, r)
                        }), this
                    },
                    unsubscribe: function(t, e) {
                        r(e);
                        var n = this.handlers[t];
                        if (!n) return this;
                        if ("object" == typeof n && n.length > 0) {
                            for (var o = 0; o < n.length; o++) {
                                var a = e.toString(),
                                    s = n[o].toString();
                                a === s && n.splice(o, 1)
                            }
                            this.handlers[t] = n
                        } else delete this.handlers[t];
                        return this
                    },
                    publish: function(t) {
                        var e = a(arguments),
                            n = this.handlers || [],
                            r = n[t] ? n[t].length : 0;
                        if (r > 0)
                            for (var o = 0; o < r; o++) {
                                var s = n[t][o];
                                s && "function" == typeof s && s.apply(this, e)
                            }
                        return this
                    },
                    cachePubs: function(t) {
                        var e = this.pubs || {},
                            n = a(arguments);
                        e[t] || (e[t] = []), e[t].push(function() {
                            return n
                        })
                    }
                });
            t.exports = s
        }]); /*! 2022-02-16 15:55:57 v8.15.21 */
        ! function(t) {
            function e(o) {
                if (n[o]) return n[o].exports;
                var a = n[o] = {
                    exports: {},
                    id: o,
                    loaded: !1
                };
                return t[o].call(a.exports, a, a.exports, e), a.loaded = !0, a.exports
            }
            var n = {};
            return e.m = t, e.c = n, e.p = "", e(0)
        }([function(t, e, n) {
            t.exports = n(1)
        }, function(t, e, n) {
            "use strict";
            ! function() {
                var t = window;
                n(2)();
                var e = n(3),
                    o = n(4);
                "ontouchend" in document.createElement("div") && (t.goldlog_queue || (t.goldlog_queue = [])).push({
                    action: "goldlog.setMetaInfo",
                    arguments: ["aplus-touch", "tap"]
                });
                var a = function() {
                        n(96);
                        var e = n(98),
                            o = n(32);
                        if (o.doPubMsg(["goldlogReady", "running"]), document.getElementsByTagName("body").length) {
                            var r = "g_tb_aplus_loaded";
                            if (t[r]) return;
                            t[r] = 1, n(112).initGoldlog(e)
                        } else setTimeout(function() {
                            a()
                        }, 50)
                    },
                    r = function(t) {
                        try {
                            e.do_tracker_jserror({
                                ratio: 1,
                                message: t && t.message,
                                error: encodeURIComponent(t && t.stack ? t.stack : ""),
                                filename: "aplusLoad"
                            })
                        } catch (t) {}
                    };
                try {
                    a()
                } catch (t) {
                    r(t, o.script_name + "@" + o.lver)
                }
            }()
        }, function(t, e) {
            t.exports = function() {
                var t = window.goldlog_queue || (window.goldlog_queue = []);
                try {
                    var e = navigator.userAgent,
                        n = /Trident/.test(e);
                    n || t.push({
                        action: "goldlog.setMetaInfo",
                        arguments: ["aplus-p-url-init", window.location.href.substring(0, 850)]
                    })
                } catch (t) {}
            }
        }, function(t, e) {
            "use strict";
            var n = function(t, e) {
                    var n = window.goldlog_queue || (window.goldlog_queue = []);
                    n.push({
                        action: "goldlog._aplus_cplugin_track_deb.monitor",
                        arguments: [{
                            key: "APLUS_PLUGIN_DEBUG",
                            title: "aplus_core",
                            msg: ["_error_:methodName=" + e + ",params=" + JSON.stringify(t)],
                            type: "updateMsg",
                            description: e || "aplus_core"
                        }]
                    })
                },
                o = function(t, e, n) {
                    var o = window.goldlog_queue || (window.goldlog_queue = []);
                    o.push({
                        action: ["goldlog", "_aplus_cplugin_m", e].join("."),
                        arguments: [t, n]
                    })
                };
            e.do_tracker_jserror = function(t, e) {
                var a = "do_tracker_jserror";
                o(t, a, e), n(t, a)
            }, e.do_tracker_obsolete_inter = function(t, e) {
                var a = "do_tracker_obsolete_inter";
                o(t, a, e), n(t, a)
            }, e.wrap = function(t) {
                if ("function" == typeof t) try {
                    t()
                } catch (t) {
                    n({
                        msg: t.message || t
                    }, "exception")
                } finally {}
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(5),
                a = n(6),
                r = n(7);
            e.APLUS_ENV = "production", e.lver = a.lver, e.toUtVersion = a.toUtVersion, e.script_name = a.script_name, e.recordTypes = o.recordTypes, e.KEY = o.KEY, e.context = r.context, e.context_prepv = r.context_prepv, e.aplus_init = n(16).plugins_init, e.plugins_pv = n(36).plugins_pv, e.plugins_prepv = n(65).plugins_prepv, e.context_hjlj = n(66), e.plugins_hjlj = n(68).plugins_hjlj, e.beforeUnload = n(78), e.initLoad = n(82), e.spmException = n(86), e.goldlog_path = n(87), e.is_auto_pv = "true", e.utilPvid = n(91), e.disablePvid = "false", e.mustSpmE = !0, e.LS_CNA_KEY = "APLUS_CNA"
        }, function(t, e) {
            "use strict";
            e.recordTypes = {
                hjlj: "COMMON_HJLJ",
                uhjlj: "DATACLICK_HJLJ",
                pv: "PV",
                prepv: "PREPV"
            }, e.KEY = {
                NAME_STORAGE: {
                    REFERRER: "wm_referrer",
                    REFERRER_PV_ID: "refer_pv_id",
                    LOST_PV_PAGE_DURATION: "lost_pv_page_duration",
                    LOST_PV_PAGE_SPMAB: "lost_pv_page_spmab",
                    LOST_PV_PAGE: "lost_pv_page",
                    LOST_PV_PAGE_MSG: "lost_pv_page_msg"
                }
            }
        }, function(t, e) {
            "use strict";
            e.lver = "8.15.21", e.toUtVersion = "v20220216", e.script_name = "aplus_std"
        }, function(t, e, n) {
            "use strict";
            e.context = n(8), e.context_prepv = n(15)
        }, function(t, e, n) {
            "use strict";

            function o() {
                return {
                    compose: {
                        maxTimeout: 5500
                    },
                    etag: {
                        egUrl: "log.mmstat.com/eg.js",
                        cna: i.getCookie("cna")
                    }
                }
            }

            function a() {
                return r.assign(new s.initConfig, new o)
            }
            var r = n(9),
                i = n(11),
                s = n(14);
            t.exports = a
        }, function(t, e, n) {
            "use strict";

            function o(t, e) {
                return "function" != typeof Object.assign ? function(t) {
                    if (null === t) throw new TypeError("Cannot convert undefined or null to object");
                    for (var e = Object(t), n = 1; n < arguments.length; n++) {
                        var o = arguments[n];
                        if (null !== o)
                            for (var a in o) Object.prototype.hasOwnProperty.call(o, a) && (e[a] = o[a])
                    }
                    return e
                }(t, e) : Object.assign({}, t, e)
            }

            function a(t) {
                return "function" == typeof t
            }

            function r(t) {
                return Array.isArray ? Array.isArray(t) : /Array/.test(Object.prototype.toString.call(t))
            }

            function i(t) {
                return "string" == typeof t
            }

            function s(t) {
                return "number" == typeof t
            }

            function u(t) {
                return "undefined" == typeof t
            }

            function c(t) {
                return "[object Object]" === Object.prototype.toString.call(t)
            }

            function l(t) {
                if ("number" == typeof t) return !1;
                if (u(t) || null === t) return !0;
                if (i(t)) return !t;
                if (r(t)) return !t.length;
                if (c(t)) {
                    for (var e in t)
                        if (hasOwnProperty.call(t, e)) return !1;
                    return !0
                }
                return !1
            }

            function p(t) {
                if ("string" == typeof t) try {
                    var e = JSON.parse(t);
                    return !("object" != typeof e || !e)
                } catch (t) {
                    return !1
                }
                return !1
            }

            function g(t, e) {
                return t.indexOf(e) > -1
            }
            var f = window;
            e.assign = o, e.makeCacheNum = function() {
                return Math.floor(268435456 * Math.random()).toString(16)
            }, e.each = n(10), e.isStartWith = function(t, e) {
                return 0 === t.indexOf(e)
            }, e.isEndWith = function(t, e) {
                var n = t.length,
                    o = e.length;
                return n >= o && t.indexOf(e) == n - o
            }, e.any = function(t, e) {
                var n, o = t.length;
                for (n = 0; n < o; n++)
                    if (e(t[n])) return !0;
                return !1
            }, e.isFunction = a, e.isArray = r, e.isString = i, e.isNumber = s, e.isUnDefined = u, e.isObject = c, e.isEmpty = l, e.isJSON = p, e.isContain = g;
            var d = function(t) {
                var e, n = t.constructor === Array ? [] : {};
                if ("object" == typeof t) {
                    if (f.JSON && f.JSON.parse) e = JSON.stringify(t), n = JSON.parse(e);
                    else
                        for (var o in t) n[o] = "object" == typeof t[o] ? d(t[o]) : t[o];
                    return n
                }
            };
            e.cloneObj = d, e.cloneDeep = d
        }, function(t, e) {
            "use strict";
            t.exports = function(t, e) {
                var n, o = t.length;
                for (n = 0; n < o; n++) {
                    var a = e(t[n], n);
                    if ("break" === a) break
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                var e = s.cookie.match(new RegExp("(?:^|;)\\s*" + t + "=([^;]+)"));
                return e ? e[1] : ""
            }

            function a(t, e, n) {
                n || (n = {});
                var a = new Date;
                if ("session" === n.expires);
                else if (n.expires && ("number" == typeof n.expires || n.expires.toUTCString)) "number" == typeof n.expires ? a.setTime(a.getTime() + 24 * n.expires * 60 * 60 * 1e3) : a = n.expires, e += "; expires=" + a.toUTCString();
                else {
                    var r = 20;
                    c.indexof(["v.youku.com", "www.youku.com", "player.youku.com"], location.hostname) > -1 && (r = 1), a.setTime(a.getTime() + 365 * r * 24 * 60 * 60 * 1e3), e += "; expires=" + a.toUTCString()
                }
                e += "; path=" + (n.path ? n.path : "/"), e += "; domain=" + n.domain, s.cookie = t + "=" + e;
                var i = 0;
                try {
                    var u = navigator.userAgent.match(/Chrome\/\d+/);
                    u && u[0] && (i = u[0].split("/")[1], i && (i = parseInt(i)))
                } catch (t) {}
                return n.SameSite && i >= 80 && (e += "; SameSite=" + n.SameSite, e += "; Secure", s.cookie = t + "=" + e), o(t)
            }

            function r(t, e, n) {
                try {
                    if (n || (n = {}), n.domain) a(t, e, n);
                    else
                        for (var o = l.getDomains(), r = 0; r < o.length;) n.domain = o[r], a(t, e, n) ? r = o.length : r++
                } catch (t) {}
            }

            function i() {
                var t = {};
                return u.each(g, function(e) {
                    t[e] = o(e)
                }), t.cnaui = /\btanx\.com$/.test(p) ? o("cnaui") : "", t
            }
            var s = document,
                u = n(9),
                c = n(12),
                l = n(13),
                p = location.hostname;
            e.getCookie = o, e.setCookie = r;
            var g = ["tracknick", "thw", "cna"];
            e.getData = i, e.getHng = function() {
                return encodeURIComponent(o("hng") || "")
            }
        }, function(t, e) {
            "use strict";
            e.indexof = function(t, e) {
                var n = -1;
                try {
                    n = t.indexOf(e)
                } catch (a) {
                    for (var o = 0; o < t.length; o++) t[o] === e && (n = o)
                } finally {
                    return n
                }
            }
        }, function(t, e) {
            "use strict";
            e.getDomains = function() {
                var t = [];
                try {
                    for (var e = location.hostname, n = e.split("."), o = 2; o <= n.length;) t.push(n.slice(n.length - o).join(".")), o++
                } catch (t) {}
                return t
            }
        }, function(t, e, n) {
            "use strict";

            function o(t, e, n) {
                var o = window.goldlog || {},
                    s = o.getMetaInfo("aplus-ifr-pv") + "" == "1";
                return e ? r(t) ? "yt" : "m" : n && !s ? a.isContain(t, "wrating.com") ? "k" : i(t) || "y" : i(t) || "v"
            }
            var a = n(9),
                r = function(t) {
                    for (var e = ["youku.com", "soku.com", "tudou.com", "laifeng.com"], n = 0; n < e.length; n++) {
                        var o = e[n];
                        if (a.isContain(t, o)) return !0
                    }
                    return !1
                },
                i = function(t) {
                    for (var e = [
                            ["scmp.com", "sc"],
                            ["luxehomes.com.hk", "sc"],
                            ["ays.com.hk", "sc"],
                            ["cpjobs.com", "sc"],
                            ["educationpost.com.hk", "sc"],
                            ["cosmopolitan.com.hk", "sc"],
                            ["elle.com.hk", "sc"],
                            ["harpersbazaar.com.hk", "sc"],
                            ["1688.com", "6"],
                            ["youku.com", "yt"],
                            ["soku.com", "yt"],
                            ["tudou.com", "yt"],
                            ["laifeng.com", "yt"]
                        ], n = 0; n < e.length; n++) {
                        var o = e[n];
                        if (a.isContain(t, o[0])) return o[1]
                    }
                    return ""
                };
            e.getBeaconSrc = o, e.initConfig = function() {
                return {
                    compose: {},
                    etag: {
                        egUrl: "log.mmstat.com/eg.js",
                        cna: "",
                        tag: "",
                        stag: "",
                        lstag: "-1",
                        lscnastatus: ""
                    },
                    can_to_sendpv: {
                        flag: "NO"
                    },
                    userdata: {},
                    what_to_sendpv: {
                        pvdata: {},
                        exparams: {}
                    },
                    what_to_pvhash: {
                        hash: []
                    },
                    what_to_sendpv_ut: {
                        pvdataToUt: {}
                    },
                    what_to_sendpv_ut2: {
                        isSuccess: !1,
                        pvdataToUt: {}
                    },
                    when_to_sendpv: {
                        aplusWaiting: ""
                    },
                    where_to_sendpv: {
                        url: "//log.mmstat.com/o.gif",
                        urlRule: o
                    },
                    where_to_sendlog_ut: {
                        aplusToUT: {},
                        toUTName: "toUT"
                    },
                    hjlj: {
                        what_to_hjlj: {
                            logdata: {}
                        },
                        what_to_hjlj_ut: {
                            logdataToUT: {}
                        }
                    },
                    network: {
                        connType: "UNKNOWN"
                    },
                    is_single: !1
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o() {
                return {
                    etag: {
                        egUrl: "log.mmstat.com/eg.js",
                        cna: a.getCookie("cna"),
                        tag: "",
                        stag: ""
                    },
                    compose: {},
                    where_to_prepv: {
                        url: "//log.mmstat.com/v.gif",
                        urlRule: r.getBeaconSrc
                    },
                    userdata: {},
                    what_to_prepv: {
                        logdata: {}
                    },
                    what_to_hjlj_exinfo: {
                        EXPARAMS_FLAG: "EXPARAMS",
                        exinfo: [],
                        exparams_key_names: ["uidaplus", "pc_i", "pu_i"]
                    },
                    is_single: !1
                }
            }
            var a = n(11),
                r = n(14);
            t.exports = o
        }, function(t, e, n) {
            "use strict";
            e.plugins_init = [{
                name: "where_to_sendpv",
                enable: !0,
                path: n(17)
            }, {
                name: "etag",
                enable: !0,
                path: n(31)
            }, {
                name: "etag_sync",
                enable: !0,
                path: n(35)
            }]
        }, function(t, e, n) {
            "use strict";
            var o = n(18),
                a = n(25),
                r = n(26);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getMetaInfo: function() {
                        var t = a.getGoldlogVal("_$") || {},
                            e = t.meta_info || r.getInfo();
                        return e
                    },
                    getAplusMetaByKey: function(t) {
                        var e = this.getMetaInfo() || {};
                        return e[t]
                    },
                    getGifPath: function(t, e) {
                        var n, r = a.getGoldlogVal("_$") || {};
                        if ("function" == typeof t) n = t(location.hostname, r.is_terminal, o.is_in_iframe) + ".gif";
                        else if (!n && e) {
                            var i = e.match(/\/\w+\.gif/);
                            i && i.length > 0 && (n = i[0])
                        }
                        return n || (n = r.is_terminal ? "m.gif" : "v.gif"), n
                    },
                    run: function() {
                        var t = !!this.options.context.is_single;
                        if (!t) {
                            var e = this.getAplusMetaByKey("aplus-rhost-v"),
                                n = this.options.context.where_to_sendpv || {},
                                a = n.url || "",
                                r = this.getGifPath(n.urlRule, a),
                                i = o.getPvUrl({
                                    metaName: "aplus-rhost-v",
                                    metaValue: e,
                                    gifPath: r,
                                    url: o.filterIntUrl(a)
                                });
                            n.url = i, this.options.context.where_to_sendpv = n
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                t = (t || "").split("#")[0].split("?")[0];
                var e = t.length,
                    n = function(t) {
                        var e, n = t.length,
                            o = 0;
                        for (e = 0; e < n; e++) o = 31 * o + t.charCodeAt(e);
                        return o
                    };
                return e ? n(e + "#" + t.charCodeAt(e - 1)) : -1
            }

            function a(t) {
                for (var e = t.split("&"), n = 0, o = e.length, a = {}; n < o; n++) {
                    var r = e[n],
                        i = r.indexOf("="),
                        s = r.substring(0, i),
                        u = r.substring(i + 1);
                    a[s] = p.tryToDecodeURIComponent(u)
                }
                return a
            }

            function r(t) {
                if ("function" != typeof t) throw new TypeError(t + " is not a function");
                return t
            }

            function i(t) {
                var e, n, o, a = [],
                    r = t.length;
                for (o = 0; o < r; o++) e = t[o][0], n = t[o][1], a.push(l.isStartWith(e, v) ? n : e + "=" + encodeURIComponent(n));
                return a.join("&")
            }

            function s(t) {
                var e, n, o, a = {},
                    r = t.length;
                for (o = 0; o < r; o++) e = t[o][0], n = t[o][1], a[e] = n;
                return a
            }

            function u(t, e) {
                var n, o, a, r = [];
                for (n in t) t.hasOwnProperty(n) && (o = "" + t[n], a = n + "=" + encodeURIComponent(o), e ? r.push(a) : r.push(l.isStartWith(n, v) ? o : a));
                return r.join("&")
            }

            function c(t, e) {
                var n = t.indexOf("?") == -1 ? "?" : "&",
                    o = e ? l.isArray(e) ? i(e) : u(e) : "";
                return o ? t + n + o : t
            }
            var l = n(9),
                p = n(19),
                g = n(22),
                f = parent !== self;
            e.is_in_iframe = f, e.makeCacheNum = l.makeCacheNum, e.isStartWith = l.isStartWith, e.isEndWith = l.isEndWith, e.any = l.any, e.each = l.each, e.assign = l.assign, e.isFunction = l.isFunction, e.isArray = l.isArray, e.isString = l.isString, e.isNumber = l.isNumber, e.isUnDefined = l.isUnDefined, e.isContain = l.isContain, e.sleep = n(23).sleep, e.makeChkSum = o, e.tryToDecodeURIComponent = p.tryToDecodeURIComponent, e.nodeListToArray = p.nodeListToArray, e.parseSemicolonContent = p.parseSemicolonContent, e.param2obj = a;
            var d = n(24),
                _ = function(t) {
                    return /^(\/\/){0,1}(\w+\.){1,}\w+((\/\w+){1,})?$/.test(t)
                };
            e.hostValidity = _;
            var h = function(t, e) {
                    var n = /^(\/\/){0,1}(\w+\.){1,}\w+\/\w+\.gif$/.test(t),
                        o = _(t),
                        a = "";
                    return n ? a = "isGifPath" : o && (a = "isHostPath"), a || d.logger({
                        msg: e + ": " + t + ' is invalid, suggestion: "xxx.mmstat.com"'
                    }), a
                },
                m = function(t) {
                    return !/^\/\/gj\.mmstat/.test(t) && goldlog.isInternational() && (t = t.replace(/^\/\/\w+\.mmstat/, "//gj.mmstat")), t
                };
            e.filterIntUrl = m, e.getPvUrl = function(t) {
                t || (t = {});
                var e, n, o = t.metaValue && h(t.metaValue, t.metaName),
                    a = "";
                "isGifPath" === o ? (e = /^\/\//.test(t.metaValue) ? "" : "//", a = e + t.metaValue) : "isHostPath" === o && (e = /^\/\//.test(t.metaValue) ? "" : "//", n = /\/$/.test(t.metaValue) ? "" : "/", a = e + t.metaValue + n + t.gifPath);
                var r;
                return a ? r = a : (e = 0 === t.gifPath.indexOf("/") ? t.gifPath : "/" + t.gifPath, r = t.url && t.url.replace(/\/\w+\.gif/, e)), r
            }, e.indexof = n(12).indexof, e.callable = r;
            var v = "::-plain-::";
            e.mkPlainKey = function() {
                return v + Math.random()
            }, e.s_plain_obj = v, e.mkPlainKeyForExparams = function(t) {
                var e = t || v;
                return e + "exparams"
            }, e.rndInt32 = function() {
                return Math.round(2147483647 * Math.random())
            }, e.arr2param = i, e.arr2obj = s, e.obj2param = u, e.makeUrl = c, e.ifAdd = function(t, e) {
                var n, o, a, r, i = e.length;
                for (n = 0; n < i; n++) o = e[n], a = o[0], r = o[1], r && t.push([a, r])
            }, e.isStartWithProtocol = g.isStartWithProtocol, e.param2arr = function(t) {
                for (var e, n = t.split("&"), o = 0, a = n.length, r = []; o < a; o++) e = n[o].split("="), r.push([e.shift(), e.join("=")]);
                return r
            }, e.catchException = function(t, e, n) {
                var o = window,
                    a = o.goldlog_queue || (o.goldlog_queue = []),
                    r = t;
                "object" == typeof e && e.message && (r = r + "_" + e.message), n && n.msg && (r += "_" + n.msg), a.push({
                    action: "goldlog._aplus_cplugin_m.do_tracker_jserror",
                    arguments: [{
                        message: r,
                        error: JSON.stringify(e),
                        filename: t
                    }]
                })
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(20),
                a = n(21);
            t.exports = {
                tryToDecodeURIComponent: function(t, e) {
                    var n = e || "";
                    if (t) try {
                        n = decodeURIComponent(t)
                    } catch (t) {}
                    return n
                },
                parseSemicolonContent: function(t, e, n) {
                    e = e || {};
                    var a, r, i = t.split(";"),
                        s = i.length;
                    for (a = 0; a < s; a++) {
                        r = i[a].split("=");
                        var u = o.trim(r.slice(1).join("="));
                        e[o.trim(r[0]) || ""] = n ? u : this.tryToDecodeURIComponent(u)
                    }
                    return e
                },
                nodeListToArray: function(t) {
                    var e, n;
                    try {
                        return e = [].slice.call(t)
                    } catch (a) {
                        e = [], n = t.length;
                        for (var o = 0; o < n; o++) e.push(t[o]);
                        return e
                    }
                },
                getLsCna: function(t, e) {
                    if (a.set && a.test()) {
                        var n = "",
                            o = a.get(t);
                        if (o) {
                            var r = o.split("_") || [];
                            n = e ? r.length > 1 && e === r[0] ? r[1] : "" : r.length > 1 ? r[1] : ""
                        }
                        return decodeURIComponent(n)
                    }
                    return ""
                },
                setLsCna: function(t, e, n) {
                    n && a.set && a.test() && a.set(t, e + "_" + encodeURIComponent(n))
                },
                getUrl: function(t) {
                    var e = t || "//log.mmstat.com/eg.js";
                    try {
                        var n = goldlog.getMetaInfo("aplus-rhost-v"),
                            o = /[[a-z|0-9\.]+[a-z|0-9]/,
                            a = n.match(o);
                        a && a[0] && (e = e.replace(o, a[0]))
                    } catch (t) {}
                    return e
                }
            }
        }, function(t, e) {
            "use strict";

            function n(t) {
                return "string" == typeof t ? t.replace(/^\s+|\s+$/g, "") : ""
            }
            e.trim = n
        }, function(t, e) {
            "use strict";
            t.exports = {
                set: function(t, e) {
                    try {
                        return localStorage.setItem(t, e), !0
                    } catch (t) {
                        return !1
                    }
                },
                get: function(t) {
                    try {
                        return localStorage.getItem(t)
                    } catch (t) {
                        return ""
                    }
                },
                test: function() {
                    var t = "grey_test_key";
                    try {
                        return localStorage.setItem(t, 1), localStorage.removeItem(t), !0
                    } catch (t) {
                        return !1
                    }
                },
                remove: function(t) {
                    localStorage.removeItem(t)
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(9),
                a = function() {
                    if (goldlog.aplusDebug) {
                        var t = location.protocol;
                        return "http:" !== t && "https:" !== t && (t = "https:"), t
                    }
                    return "https:"
                };
            e.getProtocal = a, e.isStartWithProtocol = function(t) {
                for (var e = ["javascript:", "tel:", "sms:", "mailto:", "tmall://", "#"], n = 0, a = e.length; n < a; n++)
                    if (o.isStartWith(t, e[n])) return !0;
                return !1
            }
        }, function(t, e) {
            "use strict";
            e.sleep = function(t, e) {
                return setTimeout(function() {
                    e()
                }, t)
            }
        }, function(t, e) {
            "use strict";
            var n = function() {
                var t = !1;
                return "boolean" == typeof goldlog.aplusDebug && (t = goldlog.aplusDebug), t
            };
            e.isDebugAplus = n;
            var o = function(t) {
                t || (t = {});
                var e = t.level || "warn";
                window.console && window.console[e] && window.console[e](t.msg)
            };
            e.logger = o
        }, function(t, e) {
            "use strict";
            var n = function(t) {
                var e;
                try {
                    window.goldlog || (window.goldlog = {}), e = window.goldlog[t]
                } catch (t) {
                    e = ""
                } finally {
                    return e
                }
            };
            e.getGoldlogVal = n;
            var o = function(t, e) {
                var n = !1;
                try {
                    window.goldlog || (window.goldlog = {}), t && (window.goldlog[t] = e, n = !0)
                } catch (t) {
                    n = !1
                } finally {
                    return n
                }
            };
            e.setGoldlogVal = o, e.getClientInfo = function() {
                return n("_aplus_client") || {}
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                var e, n, o, a = t.length,
                    r = {};
                for (h._microscope_data = r, e = 0; e < a; e++) n = t[e], "microscope-data" === f.tryToGetAttribute(n, "name") && (o = f.tryToGetAttribute(n, "content"), l.parseSemicolonContent(o, r), h.is_head_has_meta_microscope_data = !0);
                h._microscope_data_params = l.obj2param(r), h.ms_data_page_id = r.pageId, h.ms_data_shop_id = r.shopId, h.ms_data_instance_id = r.siteInstanceId, h.ms_data_siteCategoryId = r.siteCategory, h.ms_prototype_id = r.prototypeId, h.site_instance_id_or_shop_id = h.ms_data_instance_id || h.ms_data_shop_id, h._atp_beacon_data = {}, h._atp_beacon_data_params = ""
            }

            function a(t) {
                var e, n = function() {
                        var e;
                        return document.querySelector && (e = document.querySelector("meta[name=data-spm]")), g.each(t, function(t) {
                            "data-spm" === f.tryToGetAttribute(t, "name") && (e = t)
                        }), e
                    },
                    o = n();
                return o && (e = f.tryToGetAttribute(o, "data-spm-protocol")), e
            }

            function r(t) {
                var e = t.isonepage || "-1",
                    n = e.split("|"),
                    o = n[0],
                    a = n[1] ? n[1] : "";
                t.isonepage_data = {
                    isonepage: o,
                    urlpagename: a
                }, t["aplus-pagename"] = a
            }

            function i() {
                var t = d.getMetaTags();
                o(t), g.each(t, function(t) {
                    var e = f.tryToGetAttribute(t, "name");
                    if (/^aplus/.test(e) && (h[e] = d.getMetaCnt(e), e === v)) try {
                        c = h[e] = JSON.parse(d.getMetaCnt(e))
                    } catch (t) {}
                }), g.each(m, function(t) {
                    h[t] = d.getMetaCnt(t)
                }), h.spm_protocol = a(t), c && (h = g.assign(h, c));
                var e, n, i = ["aplus-rate-ahot"],
                    s = i.length;
                for (e = 0; e < s; e++) n = i[e], h[n] = parseFloat(h[n]);
                return r(h), b = h || {}, h
            }

            function s() {
                return b || i()
            }

            function u(t) {
                p.logger({
                    msg: "please do not repeat setPriorityMetaInfo " + t
                })
            }
            var c, l = n(18),
                p = n(24),
                g = n(9),
                f = n(27),
                d = n(28),
                _ = n(29),
                h = {},
                m = ["ahot-aplus", "isonepage", "spm-id", "data-spm", "microscope-data"],
                v = "aplus-x-settings",
                b = {};
            e.setMetaInfo = function(t, e) {
                if (b || (b = {}), "object" == typeof c && c[t]) return u(t), !0;
                if (t === v) {
                    if (c) u(t);
                    else try {
                        c = "object" == typeof e ? e : JSON.parse(e), b = g.assign(b, c)
                    } catch (t) {
                        console && console.log(t)
                    }
                    return !0
                }
                return b[t] = e, !0
            };
            var y = function(t) {
                return b || (b = {}), b[t] || ""
            };
            e.getMetaInfo = y, e.getInfo = i, e.qGet = s, e.appendMetaInfo = function(t, e) {
                var n = function(t, e) {
                    goldlog.setMetaInfo(t, e, {
                        from: "appendMetaInfo"
                    })
                };
                if (t && e) {
                    var o, a = function(o) {
                            try {
                                var a = "string" == typeof e ? JSON.parse(e) : e;
                                n(t, g.assign(o, a))
                            } catch (t) {}
                        },
                        r = function(o) {
                            try {
                                var a = "string" == typeof e ? JSON.parse(e) : e;
                                n(t, o.concat(a))
                            } catch (t) {}
                        },
                        i = function(t) {
                            return "EXPARAMS" === t ? _.getExparamsInfos("", t) : t ? t.split("&") : []
                        },
                        s = function(o) {
                            try {
                                var a = i(o),
                                    r = i(e);
                                n(t, a.concat(r).join("&"))
                            } catch (t) {}
                        },
                        u = function(t) {
                            t.constructor === Array ? r(t) : a(t)
                        },
                        c = goldlog.getMetaInfo(t);
                    if ("aplus-exinfo" === t && (s(c), o = !0), c)
                        if ("object" == typeof c) u(c), o = !0;
                        else try {
                            var l = JSON.parse(c);
                            "object" == typeof l && (u(l), o = !0)
                        } catch (t) {}
                    o || n(t, e)
                }
            }
        }, function(t, e) {
            "use strict";
            e.tryToGetAttribute = function(t, e) {
                return t && t.getAttribute ? t.getAttribute(e) || "" : ""
            };
            var n = function(t, e, n) {
                if (t && t.setAttribute) try {
                    t.setAttribute(e, n)
                } catch (t) {}
            };
            e.tryToSetAttribute = n, e.tryToRemoveAttribute = function(t, e) {
                if (t && t.removeAttribute) try {
                    t.removeAttribute(e)
                } catch (o) {
                    n(t, e, "")
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                return i = i || document.getElementsByTagName("head")[0], s && !t ? s : i ? s = i.getElementsByTagName("meta") : []
            }

            function a(t, e) {
                var n, a, r, i = o(),
                    s = i.length;
                for (n = 0; n < s; n++) a = i[n], u.tryToGetAttribute(a, "name") === t && (r = u.tryToGetAttribute(a, e || "content"));
                return r || ""
            }

            function r(t) {
                var e = {
                        isonepage: "-1",
                        urlpagename: ""
                    },
                    n = t.qGet();
                if (n && n.hasOwnProperty("isonepage_data")) e.isonepage = n.isonepage_data.isonepage, e.urlpagename = n.isonepage_data.urlpagename;
                else {
                    var o = a("isonepage") || "-1",
                        r = o.split("|");
                    e.isonepage = r[0], e.urlpagename = r[1] ? r[1] : ""
                }
                return e
            }
            var i, s, u = n(27);
            e.getMetaTags = o, e.getMetaCnt = a, e.getOnePageInfo = r
        }, function(t, e, n) {
            "use strict";
            var o = n(18),
                a = n(30),
                r = n(12);
            e.getExparamsInfos = function(t, e) {
                var n = [],
                    i = t || ["uidaplus", "pc_i", "pu_i"],
                    s = a.getExParams(o) || "";
                s = s.replace(/&aplus&/, "&");
                for (var u = o.param2arr(s) || [], c = function(t) {
                        return r.indexof(i, t) > -1
                    }, l = 0; l < u.length; l++) {
                    var p = u[l],
                        g = p[0] || "",
                        f = p[1] || "";
                    g && f && ("EXPARAMS" === e || c(g)) && n.push(g + "=" + f)
                }
                return n
            }
        }, function(t, e, n) {
            "use strict";

            function o() {
                return s || (s = g.getElementById("beacon-aplus") || g.getElementById("tb-beacon-aplus")), s
            }

            function a(t) {
                var e = o(),
                    n = p.tryToGetAttribute(e, "cspx");
                t && n && (t.nonce = n)
            }

            function r(t, e, n) {
                var r = "script",
                    s = g.createElement(r);
                s.type = "text/javascript", s.async = !0;
                var c = o(),
                    l = c && c.hasAttribute("crossorigin");
                l && (s.crossOrigin = "anonymous");
                var p = "https:" === location.protocol ? e || t : t;
                0 === p.indexOf("//") && (p = u.getProtocal() + p), s.src = p, n && (s.id = n), a(s);
                var f = g.getElementsByTagName(r)[0];
                i = i || g.getElementsByTagName("head")[0], f ? f.parentNode.insertBefore(s, f) : i && i.appendChild(s)
            }
            var i, s, u = n(22),
                c = n(9),
                l = n(24),
                p = n(27),
                g = document;
            e.getCurrentNode = o, e.addScript = r, e.loadScript = function(t, e) {
                function n(t) {
                    o.onreadystatechange = o.onload = o.onerror = null, o = null, e(t)
                }
                var o = g.createElement("script");
                if (i = i || g.getElementsByTagName("head")[0], o.async = !0, "onload" in o) o.onload = n;
                else {
                    var r = function() {
                        /loaded|complete/.test(o.readyState) && n()
                    };
                    o.onreadystatechange = r, r()
                }
                o.onerror = function(t) {
                    n(t)
                }, o.src = t, a(o), i.appendChild(o)
            }, e.isTouch = function() {
                return "ontouchend" in document.createElement("div")
            };
            var f = function() {
                var t = goldlog && goldlog._$ ? goldlog._$ : {},
                    e = t.meta_info || {};
                return e["aplus-exparams"] || ""
            };
            e.getExParamsFromMeta = f, e.getExParams = function(t) {
                var e = o(),
                    n = p.tryToGetAttribute(e, "exparams"),
                    a = d(n, f(), t) || "";
                return a && a.replace(/&amp;/g, "&").replace(/\buser(i|I)d=/, "uidaplus=")
            };
            var d = function(t, e, n) {
                var o = "aplus&sidx=aplusSidex",
                    a = t || o;
                try {
                    if (e) {
                        var r = n.param2obj(e),
                            i = ["aplus", "cna", "spm-cnt", "spm-url", "spm-pre", "logtype", "pre", "uidaplus", "asid", "sidx", "trid", "gokey"];
                        c.each(i, function(t) {
                            r.hasOwnProperty(t) && (l.logger({
                                msg: "Can not inject keywords: " + t
                            }), delete r[t])
                        }), delete r[""];
                        var s = "";
                        if (t) {
                            var u = t.match(/aplus&/).index,
                                p = u > 0 ? n.param2obj(t.substring(0, u)) : {};
                            delete p[""], s = n.obj2param(c.assign(p, r)) + "&" + t.substring(u, t.length)
                        } else s = n.obj2param(r) + "&" + o;
                        return s
                    }
                    return a
                } catch (t) {
                    return a
                }
            };
            e.mergeExparams = d
        }, function(t, e, n) {
            "use strict";
            var o = n(32),
                a = n(3),
                r = n(11),
                i = n(30),
                s = n(19),
                u = n(33),
                c = n(34),
                l = n(25),
                p = n(4);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t;
                        var e = this.options.context.etag || {};
                        this.cna = e.cna || r.getCookie("cna"), this.setTag(0), this.setStag(-1), this.setLsTag("-1"), this.setEtag(this.cna || ""), this.requesting = !1, this.today = u.getFormatDate()
                    },
                    setLsTag: function(t) {
                        this.lstag = t, this.options.context.etag.lstag = t
                    },
                    setTag: function(t) {
                        this.tag = t, this.options.context.etag.tag = t
                    },
                    setStag: function(t) {
                        this.stag = t, this.options.context.etag.stag = t
                    },
                    setEtag: function(t) {
                        t && (this.etag = t, this.options.context.etag.cna = t, r.getCookie("cna") !== t && (o.publishCNA(t), r.setCookie("cna", t, {
                            SameSite: "none"
                        })))
                    },
                    setLscnaStatus: function(t) {
                        this.options.context.etag.lscnastatus = t
                    },
                    run: function(t, e) {
                        var n = this;
                        if (n.cna) return void n.setTag(1);
                        var o = null,
                            r = c.getUrl(this.options.context.etag || {});
                        n.requesting = !0;
                        var u = function() {
                            setTimeout(function() {
                                e()
                            }, 20), clearTimeout(o)
                        };
                        return i.loadScript(r, function(t) {
                            var e, o;
                            if (t && "error" === t.type ? (n.setStag(-3), a.do_tracker_jserror({
                                    message: "loadError",
                                    error: "",
                                    filename: "etag_ls"
                                })) : (e = l.getGoldlogVal("Etag"), o = l.getGoldlogVal("stag"), "undefined" != typeof o && n.setStag(o)), !n.requesting) return void n.setEtag(e);
                            if (2 === o || 4 === o) {
                                var r = s.getLsCna(p.LS_CNA_KEY);
                                r ? (n.setLsTag(1), n.setEtag(r)) : (n.setLsTag(0), s.setLsCna(p.LS_CNA_KEY, n.today, e), n.setEtag(e))
                            } else n.setEtag(e);
                            u()
                        }), o = setTimeout(function() {
                            n.requesting = !1, n.setStag(-2), e()
                        }, 1500), 2e3
                    }
                }
            }
        }, function(t, e) {
            "use strict";
            var n = "function",
                o = function() {
                    var t = window.goldlog || {},
                        e = t.aplus_pubsub || {},
                        o = typeof e.publish === n;
                    return o ? e : ""
                },
                a = function(t) {
                    var e = o();
                    e && typeof e.publish === n && e.publish.apply(e, t)
                };
            e.doPubMsg = a;
            var r = function(t) {
                var e = o();
                e && typeof e.cachePubs === n && e.cachePubs.apply(e, t)
            };
            e.doCachePubs = r, e.doSubMsg = function(t, e) {
                var a = o();
                a && typeof a.subscribe === n && a.subscribe(t, e)
            }, e.doSubOnceMsg = function(t, e) {
                var a = o();
                a && typeof a.subscribeOnce === n && a.subscribeOnce(t, e)
            }, e.publishCNA = function(t) {
                if (t) {
                    var e = ["CNA", {
                        value: t
                    }];
                    a(e), r(e)
                }
            }
        }, function(t, e) {
            "use strict";

            function n(t, e, n) {
                var o = "" + Math.abs(t),
                    a = e - o.length,
                    r = t >= 0;
                return (r ? n ? "+" : "" : "-") + Math.pow(10, Math.max(0, a)).toString().substr(1) + o
            }
            e.getFormatDate = function(t) {
                var e = new Date;
                try {
                    return [e.getFullYear(), n(e.getMonth() + 1, 2, 0), n(e.getDate(), 2, 0)].join(t || "")
                } catch (t) {
                    return ""
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(19);
            e.getUrl = function(t) {
                var e = (new Date).getTime(),
                    n = o.getUrl(t && t.egUrl ? t.egUrl : "gj.mmstat.com/eg.js"),
                    a = n.match(/[\w+\.]+[a-z|A-Z|0-9]+\/(eg|ge).js/);
                return 0 !== n.indexOf("http") && a && a.length > 0 && (n = "//" + a[0]), n + "?t=" + e
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(19),
                a = n(30),
                r = n(34),
                i = n(4),
                s = n(33),
                u = n(21);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t, this.today = s.getFormatDate()
                    },
                    run: function() {
                        var t = this;
                        if (u.test()) {
                            var e = o.getLsCna(i.LS_CNA_KEY, t.today);
                            e || setTimeout(function() {
                                var e = r.getUrl(t.options.context.etag || {});
                                a.loadScript(e, function(e) {
                                    e && "error" !== e.type && o.setLsCna(i.LS_CNA_KEY, t.today, goldlog.Etag)
                                })
                            }, 1e3)
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            e.plugins_pv = [{
                name: "etag",
                enable: !0,
                path: n(37)
            }, {
                name: "when_to_sendpv",
                enable: !0,
                path: n(38)
            }, {
                name: "where_to_sendlog_ut",
                enable: !0,
                path: n(39)
            }, {
                name: "is_single",
                enable: !0,
                path: n(41)
            }, {
                name: "what_to_pvhash",
                enable: !0,
                path: n(45)
            }, {
                name: "what_to_sendpv",
                enable: !0,
                path: n(46)
            }, {
                name: "what_to_sendpv_userdata",
                enable: !0,
                path: n(50),
                deps: ["what_to_sendpv"]
            }, {
                name: "what_to_sendpv_etag",
                enable: !0,
                path: n(55),
                deps: ["etag", "what_to_sendpv"]
            }, {
                name: "what_to_sendpv_ut2",
                enable: n(56),
                path: n(57),
                deps: ["where_to_sendlog_ut", "is_single"]
            }, {
                name: "what_to_sendpv_ut",
                enable: !0,
                path: n(58),
                deps: ["where_to_sendlog_ut", "is_single"]
            }, {
                name: "what_to_pv_slog",
                enable: !0,
                path: n(59),
                deps: ["what_to_sendpv"]
            }, {
                name: "can_to_sendpv",
                enable: !0,
                path: n(60)
            }, {
                name: "where_to_sendpv",
                enable: !0,
                path: n(17),
                deps: ["is_single"]
            }, {
                name: "do_sendpv",
                enable: !0,
                path: n(61),
                deps: ["is_single", "what_to_sendpv", "where_to_sendpv"]
            }, {
                name: "do_sendpv_ut2",
                enable: n(56),
                path: n(62),
                deps: ["what_to_sendpv_ut2", "where_to_sendlog_ut"]
            }, {
                name: "do_sendpv_ut",
                enable: n(56),
                path: n(63),
                deps: ["what_to_sendpv_ut", "where_to_sendlog_ut"]
            }, {
                name: "after_pv",
                enable: !0,
                path: n(64)
            }]
        }, function(t, e, n) {
            "use strict";
            var o = n(32);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function() {
                        var t = this;
                        o.doSubOnceMsg("aplusInitContext", function(e) {
                            e.etag && (t.options.context.etag = e.etag)
                        })
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(25),
                a = n(23),
                r = n(26);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getMetaInfo: function() {
                        var t = o.getGoldlogVal("_$") || {},
                            e = t.meta_info || r.getInfo();
                        return e
                    },
                    getAplusWaiting: function() {
                        var t = this.getMetaInfo() || {};
                        return t["aplus-waiting"]
                    },
                    run: function(t, e) {
                        var n = this.options.config || {},
                            o = this.getAplusWaiting();
                        if (o && n.is_auto) switch (o = this.getAplusWaiting() + "", this.options.context.when_to_sendpv = {
                                aplusWaiting: o
                            }, o) {
                            case "MAN":
                                return "done";
                            case "1":
                                return this.options.context.when_to_sendpv.isWait = !0, a.sleep(6e3, function() {
                                    e()
                                }), 6e3;
                            default:
                                var r = 1 * o;
                                if (r + "" != "NaN") return this.options.context.when_to_sendpv.isWait = !0, a.sleep(r, function() {
                                    e()
                                }), r
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(40);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getAplusToUT: function(t) {
                        return {
                            toUT2: o.getAplusToUT("toUT2", t),
                            toUT: o.getAplusToUT("toUT", t)
                        }
                    },
                    run: function() {
                        if ("Umeng4Aplus" === goldlog.aplusBridgeName) this.options.context.where_to_sendlog_ut.toUTName = "toUT2";
                        else {
                            var t = this.getAplusToUT(this.options.config.recordType);
                            this.options.context.where_to_sendlog_ut.aplusToUT = t
                        }
                    }
                }
            }
        }, function(t, e) {
            "use strict";
            var n = navigator.userAgent,
                o = /WindVane/i.test(n);
            e.is_WindVane = o;
            var a = function() {
                var t = goldlog.getMetaInfo("aplus_chnl");
                return !(!t || !t.isAvailable || "function" != typeof t.toUT2 && "function" != typeof t.toUT) && t
            };
            e.isAplusChnl = a, e.getAplusToUT = function(t, e) {
                var n = {},
                    r = a();
                if ("object" == typeof r) n.bridgeName = r.bridgeName || "customBridge", n.bridgeVersion = r.bridgeVersion || r.version || "", n.isAvailable = r.isAvailable, n.toUT2 = r.toUT2 || r.toUT;
                else {
                    var i = window.WindVane || {};
                    if (o && i && i.isAvailable && "function" == typeof i.call) {
                        var s = t || "toUT",
                            u = goldlog.getMetaInfo("aplus-toUT") + "";
                        "toUT2HC" === u && "PV" === e && (s = u), n = {
                            bridgeName: "WindVane",
                            bridgeVersion: i.version || "",
                            isAvailable: !0,
                            toUT2: function(t, e, n, o) {
                                return i.call("WVTBUserTrack", s, t, e, n, o)
                            }
                        }
                    }
                }
                return n
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(25),
                a = n(42),
                r = n(43),
                i = n(4);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t, this._$ = o.getGoldlogVal("_$") || {}, this.isBoth = "1" === this._$.meta_info["aplus-both-request"], this.is_WindVane = this._$.is_WindVane
                    },
                    isSingle_pv: function(t) {
                        return t ? !this.isBoth : !(!this.is_WindVane || !r.isSingleUaVersion() || this.isBoth)
                    },
                    isSingle_hjlj: function(t, e) {
                        return e ? !this.isBoth : !(!this.is_WindVane || !r.isSingleSendLog(t) || this.isBoth)
                    },
                    isSingle_uhjlj: function(t, e) {
                        return (!t || !/^\/aplus\.99\.(\d)+$/.test(t.logkey)) && (e ? !this.isBoth : !(!(this.is_WindVane && t && t.logkey && r.isSingleUaVersion()) || this.isBoth))
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = this.options.config || {},
                            n = t.where_to_sendlog_ut.aplusToUT || {},
                            o = n.toUT || {},
                            r = n.toUT2 || {},
                            s = a.isNative4Aplus(),
                            u = !!(o.isAvailable || r.isAvailable || s),
                            c = t.userdata || {},
                            l = !!t.is_single;
                        switch (e.recordType) {
                            case i.recordTypes.uhjlj:
                                l = this.isSingle_uhjlj(c, s);
                                break;
                            case i.recordTypes.hjlj:
                                l = this.isSingle_hjlj(c, s);
                                break;
                            case i.recordTypes.pv:
                                l = this.isSingle_pv(s);
                                break;
                            default:
                                l = this.isSingle_pv(s)
                        }
                        this.options.context.is_single = u && l, this.options.context.ut_is_available = u
                    }
                }
            }
        }, function(t, e) {
            "use strict";
            var n = "UT4Aplus",
                o = "Umeng4Aplus";
            e.isNative4Aplus = function() {
                var t = goldlog.getMetaInfo("aplus-toUT"),
                    e = goldlog.aplusBridgeName;
                return e === n && t === n || e === o
            }, e.haveNativeFlagInUA = function() {
                var t = goldlog.aplusBridgeName;
                if (!t && "boolean" != typeof t) {
                    var e = new RegExp([n, o].join("|"), "i"),
                        a = navigator.userAgent.match(e);
                    t = !!a && a[0], goldlog.aplusBridgeName = t
                }
                return !!t
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(44),
                a = n(42),
                r = function(t) {
                    var e = t.logkey.toLowerCase();
                    0 === e.indexOf("/") && (e = e.substr(1));
                    var n = t.gmkey ? t.gmkey.toUpperCase() : "OTHER";
                    switch (n) {
                        case "EXP":
                            return "2201";
                        case "CLK":
                            return "2101";
                        case "SLD":
                            return "19999";
                        case "OTHER":
                        default:
                            return "19999"
                    }
                },
                i = /\sA2U\/x/.test(window.navigator.userAgent),
                s = function() {
                    var t = window.navigator.userAgent,
                        e = !1,
                        n = /AliApp\((DM|DY|DingTalk|CN|LA)\/(\d+[._]\d+[._]\d+)/i,
                        r = n.test(t);
                    return e = r, i || a.haveNativeFlagInUA() || e || o.webviewIsAbove({
                        version_ios_tb: [5, 11, 7],
                        version_ios_tm: [5, 24, 1],
                        version_android_tb: [5, 11, 7],
                        version_android_tm: [5, 24, 1]
                    })
                };
            e.isSingleUaVersion = s, e.isSingleSendLog = function(t) {
                return (!t || !/^\/fsp\.1\.1$/.test(t.logkey)) && !!(t && t.logkey && s())
            }, e.getFunctypeValue = function(t) {
                return e.isSingleSendLog(t) ? r(t) : "2101"
            }, e.getFunctypeValue2 = function(t) {
                return r(t)
            }
        }, function(t, e) {
            "use strict";
            var n = function(t) {
                var e = [0, 0, 0];
                try {
                    if (t) {
                        var n = t[1],
                            o = n.split(".");
                        if (o.length > 2)
                            for (var a = 0; a < o.length;) e[a] = parseInt(o[a]), a++
                    }
                } catch (t) {
                    e = [0, 0, 0]
                } finally {
                    return e
                }
            };
            e.parseVersion = n;
            var o = function(t, e) {
                var n = !1;
                try {
                    var o = t[0] > e[0],
                        a = t[1] > e[1],
                        r = t[2] > e[2],
                        i = t[0] === e[0],
                        s = t[1] === e[1],
                        u = t[2] === e[2];
                    n = !!o || (!(!i || !a) || (!!(i && s && r) || !!(i && s && u)))
                } catch (t) {
                    n = !1
                } finally {
                    return n
                }
            };
            e.isAboveVersion = o, e.webviewIsAbove = function(t, e) {
                var a = !1;
                try {
                    e || (e = navigator.userAgent);
                    var r = e.match(/AliApp\(TB\/(\d+[._]\d+[._]\d+)/i),
                        i = n(r),
                        s = e.match(/AliApp\(TM\/(\d+[._]\d+[._]\d+)/i),
                        u = n(s),
                        c = /iPhone|iPad|iPod|ios/i.test(e),
                        l = /android/i.test(e);
                    c ? r && i ? a = o(i, t.version_ios_tb) : s && u && (a = o(u, t.version_ios_tm)) : l && (r && i ? a = o(i, t.version_android_tb) : s && u && (a = o(u, t.version_android_tm)))
                } catch (t) {
                    a = !1
                }
                return a
            }, e.webviewIsEqual = function(t, e) {
                var n = !1;
                try {
                    e || (e = navigator.userAgent);
                    var o = e.match(/AliApp\(CN\/(\d+[._]\d+[._]\d+)/i),
                        a = o ? o[1] : "0.0.0",
                        r = e.match(/AliApp\(DingTalk\/(\d+[._]\d+[._]\d+)/i),
                        i = r ? r[1] : "0.0.0",
                        s = /iPhone|iPad|iPod|ios/i.test(e),
                        u = /android/i.test(e);
                    s ? o && a ? n = t.version_ios_cn === a : r && i && (n = t.version_ios_dd === i) : u && (o && a ? n = t.version_android_cn === a : r && i && (n = t.version_android_dd === i))
                } catch (t) {
                    n = !1
                }
                return n
            }, e.webviewIsBelow = function(t, e) {
                var a = !1;
                try {
                    e || (e = navigator.userAgent);
                    var r = e.match(/AliApp\(CN\/(\d+[._]\d+[._]\d+)/i),
                        i = n(r),
                        s = /iPhone|iPad|iPod|ios/i.test(e),
                        u = /android/i.test(e);
                    s ? r && i && (a = !o(i, t.version_ios_cn)) : u && r && i && (a = !o(i, t.version_android_cn))
                } catch (t) {
                    a = !1
                }
                return a
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(25);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function() {
                        var t = this.options.context.what_to_pvhash || {},
                            e = o.getGoldlogVal("_$") || {},
                            n = e.meta_info || {},
                            a = n["aplus-pvhash"] || "",
                            r = [];
                        "1" === a && (r = ["_aqx_uri", encodeURIComponent(location.href)]), t.hash = r, this.options.context.what_to_pvhash = t
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(18),
                a = n(9),
                r = n(30),
                i = n(25),
                s = n(27),
                u = n(11),
                c = n(47),
                l = n(48),
                p = n(49);
            t.exports = function() {
                return a.assign(p, {
                    init: function(t) {
                        this.options = t, this.cookie_data || (this.cookie_data = u.getData()), this.client_info || (this.client_info = i.getClientInfo() || {});
                        var e = location.hash;
                        e && 0 === e.indexOf("#") && (e = e.substr(1)), this.loc_hash = e
                    },
                    getExParams: function() {
                        var t = window,
                            e = document,
                            n = [],
                            u = parent !== t.self,
                            l = e.getElementById("beacon-aplus") || e.getElementById("tb-beacon-aplus"),
                            p = s.tryToGetAttribute(l, "exparams"),
                            g = r.mergeExparams(p, r.getExParamsFromMeta(), o) || "";
                        g = g.replace(/&amp;/g, "&");
                        var f, d, _ = ["taobao.com", "tmall.com", "etao.com", "hitao.com", "taohua.com", "juhuasuan.com", "alimama.com"],
                            h = i.getGoldlogVal("_$") || {},
                            m = h.meta_info || {};
                        if (u && !m["aplus-ifr-pv"]) {
                            for (d = _.length, f = 0; f < d; f++)
                                if (o.isContain(location.hostname, _[f])) return n.push([o.mkPlainKeyForExparams(), g]), n;
                            g = g.replace(/\buser(i|I)d=\w*&?/, "")
                        }
                        g = g.replace(/\buser(i|I)d=/, "uidaplus="), g && n.push([o.mkPlainKeyForExparams(), g]);
                        var v = a.makeCacheNum();
                        return c.updateKey(n, "cache", v), n
                    },
                    getExtra: function() {
                        var t = [],
                            e = i.getGoldlogVal("_$") || {},
                            n = e.meta_info || {},
                            a = this.cookie_data || {},
                            r = this.getClientInfo(!0) || [];
                        return o.ifAdd(t, r), o.ifAdd(t, [
                            ["thw", a.thw],
                            ["bucket_id", l.getBucketId(n)],
                            ["urlokey", this.loc_hash],
                            ["wm_instanceid", n.ms_data_instance_id]
                        ]), t
                    }
                })
            }
        }, function(t, e) {
            "use strict";

            function n(t, e, n) {
                r(t, "spm-cnt", function(t) {
                    var o = t.split(".");
                    return o[0] = goldlog.spm_ab[0], o[1] = goldlog.spm_ab[1], e ? o[1] = o[1].split("/")[0] + "/" + e : o[1] = o[1].split("/")[0], n && (o[4] = n), o.join(".")
                })
            }

            function o(t, e) {
                var n = window.g_SPM && g_SPM._current_spm;
                n && r(t, "spm-url", function() {
                    return [n.a, n.b, n.c, n.d].join(".") + (e ? "." + e : "")
                }, "spm-cnt")
            }

            function a(t, e) {
                var n, o, a, r = -1;
                for (n = 0, o = t.length; n < o; n++)
                    if (a = t[n], a[0] === e) {
                        r = n;
                        break
                    } r >= 0 && t.splice(r, 1)
            }

            function r(t, e, n, o) {
                var a, r, i = t.length,
                    s = -1,
                    u = "function" == typeof n;
                for (a = 0; a < i; a++) {
                    if (r = t[a], r[0] === e) return void(u ? r[1] = n(r[1]) : r[1] = n);
                    o && r[0] === o && (s = a)
                }
                o && (u && (n = n()), s > -1 ? t.splice(s, 0, [e, n]) : t.push([e, n]))
            }
            t.exports = {
                updateSPMCnt: n,
                updateSPMUrl: o,
                updateKey: r,
                removeKey: a
            }
        }, function(t, e, n) {
            "use strict";

            function o(t, e) {
                var n, o = 2146271213;
                for (n = 0; n < t.length; n++) o = (o << 5) + o + t.charCodeAt(n);
                return (65535 & o) % e
            }

            function a(t) {
                var e, n = r.getCookie("t");
                return "3" != t.ms_prototype_id && "5" != t.ms_prototype_id || (e = n ? o(n, 20) : ""), e
            }
            var r = n(11);
            e.getBucketId = a
        }, function(t, e, n) {
            "use strict";
            var o = n(18),
                a = n(9),
                r = n(25),
                i = n(40),
                s = n(11),
                u = n(4);
            t.exports = {
                init: function(t) {
                    this.options = t, this.cookie_data || (this.cookie_data = s.getData())
                },
                getBasicParams: function() {
                    var t = document,
                        e = r.getGoldlogVal("_$") || {},
                        n = e.spm || {},
                        a = e.meta_info || {},
                        i = a["aplus-ifr-pv"] + "" == "1",
                        u = o.is_in_iframe && !i ? 0 : 1,
                        c = this.options.config || {},
                        l = t.title;
                    c.title && (l += "_" + c.title);
                    var p = [
                        ["logtype", u],
                        ["title", l],
                        ["pre", e.page_referrer || ""],
                        ["scr", screen.width + "x" + screen.height]
                    ];
                    try {
                        var g = location.href.substring(0, 1200);
                        g && p.push(["_p_url", a["aplus-p-url"] || g])
                    } catch (t) {}
                    var f = this.cookie_data || {},
                        d = this.options.context || {},
                        _ = d.etag || {},
                        h = _.cna || f.cna || s.getCookie("cna");
                    h && p.push([o.mkPlainKey(), "cna=" + h]), f.tracknick && p.push([o.mkPlainKey(), "nick=" + f.tracknick]);
                    var m = n.spm_url || "";
                    return o.ifAdd(p, [
                        ["wm_pageid", a.ms_data_page_id],
                        ["wm_prototypeid", a.ms_prototype_id],
                        ["wm_sid", a.ms_data_shop_id],
                        ["spm-url", m],
                        ["spm-pre", n.spm_pre],
                        ["spm-cnt", n.spm_cnt],
                        ["cnaui", f.cnaui]
                    ]), p
                },
                getExParams: function() {
                    return []
                },
                getExtra: function() {
                    return []
                },
                getClientInfo: function(t) {
                    var e = [],
                        n = r.getGoldlogVal("_$") || {},
                        s = this.client_info || {},
                        c = s.ua_info || {};
                    if (t || !i.is_WindVane && !i.isAplusChnl()) {
                        for (var l, p = [], g = ["p", "o", "b", "s", "w", "wx", "ism"], f = 0; l = g[f++];) c[l] && p.push([l, c[l]]);
                        o.ifAdd(e, p)
                    }
                    o.ifAdd(e, [
                        ["cache", a.makeCacheNum()],
                        ["lver", goldlog.lver || u.lver],
                        ["jsver", n.script_name || u.script_name],
                        ["pver", goldlog.aplus_cplugin_ver]
                    ]);
                    var d = this.options.config || {},
                        _ = d.is_auto;
                    return _ || o.ifAdd(e, [
                        ["mansndlog", 1]
                    ]), e
                },
                processLodashDollar: function() {
                    var t = r.getGoldlogVal("_$") || {};
                    t.page_url !== location.href && (t.page_referrer = t.page_url, t.page_url = location.href), r.setGoldlogVal("_$", t)
                },
                getLsParams: function() {
                    var t = r.getGoldlogVal("_$") || {},
                        e = [];
                    return t.lsparams && t.lsparams.spm_id && (e.push(["lsparams", t.lsparams.spm_id]), e.push(["lsparams_pre", t.lsparams.current_url])), e
                },
                run: function() {
                    var t = this.getBasicParams() || [],
                        e = this.getExParams() || [],
                        n = this.getExtra() || [];
                    this.processLodashDollar();
                    var o = this.getLsParams() || [],
                        a = [].concat(t, e, n, o);
                    this.options.context.what_to_sendpv.pvdata = a, this.options.context.what_to_sendpv.exparams = e
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(18),
                a = n(25),
                r = n(47),
                i = n(11),
                s = n(51);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getPageId: function() {
                        var t = this.options.config || {},
                            e = this.options.context || {},
                            n = e.userdata || {};
                        return t.page_id || t.pageid || t.pageId || n.page_id
                    },
                    getPageInfo: function() {
                        var t;
                        try {
                            var e = top.location !== self.location;
                            e && void 0 !== window.innerWidth && (t = {
                                width: window.innerWidth,
                                height: window.innerHeight
                            })
                        } catch (t) {}
                        return t
                    },
                    getUserdata: function() {
                        var t = a.getGoldlogVal("_$") || {},
                            e = t.spm || {},
                            n = this.options.context || {},
                            r = n.userdata || {},
                            u = this.options.config || {},
                            c = [];
                        if (u && !u.is_auto) {
                            u.gokey && c.push([o.mkPlainKey(), u.gokey]);
                            var l = e.data.b;
                            if (l) {
                                var p = this.getPageId();
                                l = p ? l.split("/")[0] + "/" + p : l.split("/")[0], s.setB(l);
                                var g = e.spm_cnt.split(".");
                                g && g.length > 2 && (g[1] = l, e.spm_cnt = g.join("."))
                            }
                        }
                        var f = function(t) {
                            if ("object" == typeof t)
                                for (var e in t) "object" != typeof t[e] && "function" != typeof t[e] && c.push([e, t[e]])
                        };
                        f(goldlog.getMetaInfo("aplus-cpvdata")), f(r);
                        var d = i.getCookie("workno") || i.getCookie("emplId");
                        d && c.push(["workno", d]);
                        var _ = i.getHng();
                        _ && c.push(["_hng", i.getHng()]);
                        var h = this.getPageInfo();
                        return h && (c.push(["_pw", h.width]), c.push(["_ph", h.height])), c
                    },
                    processLodashDollar: function() {
                        var t = this.options.config || {},
                            e = a.getGoldlogVal("_$") || {};
                        t && t.referrer && (e.page_referrer = t.referrer), a.setGoldlogVal("_$", e)
                    },
                    updatePre: function(t) {
                        var e = a.getGoldlogVal("_$") || {};
                        return e.page_referrer && r.updateKey(t, "pre", e.page_referrer), t
                    },
                    run: function() {
                        var t = this.options.context.what_to_sendpv.pvdata,
                            e = this.getUserdata();
                        this.processLodashDollar();
                        var n = t,
                            o = this.options.context.what_to_pvhash.hash;
                        o && o.length > 0 && n.push(o), n = n.concat(e), n = this.updatePre(n);
                        var a = this.getPageId();
                        a && r.updateSPMCnt(n, a), this.options.context.what_to_sendpv.pvdata = n, this.options.context.userdata = e
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o() {
                if (!s.data.a || !s.data.b) {
                    var t = r._SPM_a,
                        e = r._SPM_b;
                    if (t && e) return t = t.replace(/^{(\w+\/)}$/g, "$1"), e = e.replace(/^{(\w+\/)}$/g, "$1"), s.is_wh_in_page = !0, void c.setAB(t, e);
                    var n = goldlog._$.meta_info;
                    t = n["data-spm"] || n["spm-id"] || "0";
                    var o = t.split(".");
                    o.length > 1 && (t = o[0], e = o[1]), c.setA(t), e && c.setB(e);
                    var a = i.getElementsByTagName("body");
                    a = a && a.length ? a[0] : null, a && (e = l.tryToGetAttribute(a, "data-spm"), e ? c.setB(e) : 1 === o.length && c.setAB("0", "0"))
                }
            }

            function a() {
                var t = s.data.a,
                    e = s.data.b;
                t && e && (goldlog.spm_ab = [t, e])
            }
            var r = window,
                i = document,
                s = {},
                u = {};
            s.data = u;
            var c = {},
                l = n(27),
                p = n(52),
                g = location.href,
                f = n(53).getRefer(),
                d = n(4);
            c.setA = function(t) {
                s.data.a = t, a()
            }, c.setB = function(t) {
                s.data.b = t, a()
            }, c.setAB = function(t, e) {
                s.data.a = t, s.data.b = e, a()
            };
            var _ = p.getSPMFromUrl,
                h = function() {
                    var t = d.utilPvid.makePVId();
                    return d.mustSpmE ? t || goldlog.pvid || "" : t || ""
                },
                m = function(t, e) {
                    var n = t.goldlog || window.goldlog || {},
                        a = n.meta_info || {};
                    s.meta_protocol = a.spm_protocol;
                    var r, i = n.spm_ab || [],
                        u = i[0] || "0",
                        c = i[1] || "0";
                    "0" === u && "0" === c && (o(), u = s.data.a || "0", c = s.data.b || "0"), r = [s.data.a, s.data.b].join("."), s.spm_cnt = (r || "0.0") + ".0.0";
                    var l = t.send_pv_count > 0 ? h() : n.pvid;
                    l && (s.spm_cnt += "." + l), n._$.spm = s, "function" == typeof e && e(l)
                };
            c.spaInit = function(t, e, n, o) {
                var a = "function" == typeof o ? o : function() {},
                    r = s.spm_url,
                    i = window.g_SPM || {},
                    u = t._$ || {},
                    c = u.send_pv_count;
                m({
                    goldlog: t,
                    meta_info: e,
                    send_pv_count: c
                }, function(t) {
                    s.spm_cnt = s.data.a + "." + s.data.b + ".0.0" + (t ? "." + t : "");
                    var o = e["aplus-spm-fixed"];
                    if ("1" !== o) {
                        s.spm_pre = _(f), s.origin_spm_pre = s.spm_pre, s.spm_url = _(location.href), s.origin_spm_url = s.spm_url;
                        var u = i._current_spm || {};
                        u && u.a && "0" !== u.a && u.b && "0" !== u.b ? (s.spm_url = [u.a, u.b, u.c, u.d, u.e].join("."), s.spm_pre = r) : c > 0 && n && "0" !== n[0] && "0" !== n[1] && (s.spm_url = n.concat(["0", "0"]).join("."), s.spm_pre = r), i._current_spm = {}
                    }
                    a()
                })
            }, c.init = function(t, e, n) {
                s.spm_url = _(g), s.spm_pre = _(f), m({
                    goldlog: t,
                    meta_info: e
                }, function() {
                    "function" == typeof n && n()
                })
            }, c.resetSpmCntPvid = function() {
                var t = goldlog.spm_ab;
                if (t && 2 === t.length) {
                    var e = t.join(".") + ".0.0",
                        n = h();
                    n && (e = e + "." + n), s.spm_cnt = e, s.spm_url = e, goldlog._$.spm = s
                }
            }, t.exports = c
        }, function(t, e) {
            "use strict";

            function n(t, e) {
                if (!t || !e) return "";
                var n, o = "";
                try {
                    var a = new RegExp("[?|&]+" + t + "=([^&|#|?|/]+)");
                    if ("spm" === t || "scm" === t) {
                        var r = new RegExp("\\?.*" + t + "=([\\w\\.\\-\\*/]+)"),
                            i = e.match(a),
                            s = e.match(r),
                            u = i && 2 === i.length ? i[1] : "",
                            c = s && 2 === s.length ? s[1] : "";
                        o = u > c ? u : c, o = decodeURIComponent(o)
                    } else n = e.match(a), o = n && 2 === n.length ? n[1] : ""
                } catch (t) {} finally {
                    return o
                }
            }
            e.getParamFromUrl = n, e.getSPMFromUrl = function(t) {
                return n("spm", t)
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(54).nameStorage,
                a = n(5);
            e.getRefer = function() {
                var t = a.KEY || {},
                    e = t.NAME_STORAGE || {};
                return document.referrer || o.getItem(e.REFERRER) || ""
            }
        }, function(t, e) {
            "use strict";
            var n = function() {
                function t() {
                    var t, e = [],
                        r = !0;
                    for (var l in p) p.hasOwnProperty(l) && (r = !1, t = p[l] || "", e.push(c(l) + s + c(t)));
                    n.name = r ? o : a + c(o) + i + e.join(u)
                }

                function e(t, e, n) {
                    t && (t.addEventListener ? t.addEventListener(e, n, !1) : t.attachEvent && t.attachEvent("on" + e, function(e) {
                        n.call(t, e)
                    }))
                }
                var n = window;
                if (n.nameStorage) return n.nameStorage;
                var o, a = "nameStorage:",
                    r = /^([^=]+)(?:=(.*))?$/,
                    i = "?",
                    s = "=",
                    u = "&",
                    c = encodeURIComponent,
                    l = decodeURIComponent,
                    p = {},
                    g = {};
                return function(t) {
                    if (t && 0 === t.indexOf(a)) {
                        var e = t.split(/[:?]/);
                        e.shift(), o = l(e.shift()) || "";
                        for (var n, i, s, c = e.join(""), g = c.split(u), f = 0, d = g.length; f < d; f++) n = g[f].match(r), n && n[1] && (i = l(n[1]), s = l(n[2]) || "", p[i] = s)
                    } else o = t || ""
                }(n.name), g.setItem = function(e, n) {
                    e && "undefined" != typeof n && (p[e] = String(n), t())
                }, g.getItem = function(t) {
                    return p.hasOwnProperty(t) ? p[t] : null
                }, g.removeItem = function(e) {
                    p.hasOwnProperty(e) && (p[e] = null, delete p[e], t())
                }, g.clear = function() {
                    p = {}, t()
                }, g.valueOf = function() {
                    return p
                }, g.toString = function() {
                    var t = n.name;
                    return 0 === t.indexOf(a) ? t : a + t
                }, e(n, "beforeunload", function() {
                    t()
                }), g
            }();
            e.nameStorage = n
        }, function(t, e, n) {
            "use strict";
            var o = n(47);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    updateBasicParams: function() {
                        var t = this.options.context.what_to_sendpv.pvdata || [],
                            e = this.options.context.etag || {};
                        return e.cna && (o.updateKey(t, "cna", e.cna), this.options.context.what_to_sendpv.pvdata = t), t
                    },
                    addTagParams: function() {
                        var t = this.options.context.what_to_sendpv.pvdata || [],
                            e = this.options.context.etag || {},
                            n = [];
                        (e.tag || 0 === e.tag) && n.push(["tag", e.tag]), (e.stag || 0 === e.stag) && n.push(["stag", e.stag]), (e.lstag || 0 === e.lstag) && n.push(["lstag", e.lstag]), n.length > 0 && (this.options.context.what_to_sendpv.pvdata = t.concat(n))
                    },
                    run: function() {
                        this.updateBasicParams(), this.addTagParams()
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(44),
                a = n(40),
                r = n(42),
                i = /\sA2U\/x/.test(window.navigator.userAgent),
                s = function(t) {
                    t || (t = window.navigator.userAgent);
                    var e = goldlog.getMetaInfo("aplus-toUT") + "",
                        n = a.isAplusChnl(),
                        s = /AliApp\((DM|DY|DingTalk|CN|LA)\/(\d+[._]\d+[._]\d+)/i,
                        u = s.test(t),
                        c = o.webviewIsAbove({
                            version_ios_tb: [6, 6, 0],
                            version_ios_tm: [5, 28, 0],
                            version_android_tb: [6, 6, 2],
                            version_android_tm: [5, 32, 0]
                        }, t);
                    return c || (c = r.haveNativeFlagInUA() || i || "2" === e || "toUT2HC" === e || u), n && "AliBCBridge" !== n.bridgeName && (c = !!n.toUT2), c
                };
            e.isToUT2 = s, e.isEnable = function(t, e) {
                var n = s(e),
                    o = !0;
                switch (t) {
                    case "what_to_hjlj_ut2":
                    case "do_sendhjlj_ut2":
                    case "what_to_sendpv_ut2":
                    case "do_sendpv_ut2":
                        o = !!n;
                        break;
                    case "what_to_hjlj_ut":
                    case "do_sendhjlj_ut":
                    case "what_to_sendpv_ut":
                    case "do_sendpv_ut":
                        o = !n
                }
                return o
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                var e, n, o, a, r = [],
                    s = {};
                for (e = t.length - 1; e >= 0; e--) n = t[e], o = n[0], o && o.indexOf(i.s_plain_obj) == -1 && s.hasOwnProperty(o) || (a = n[1], ("aplus" == o || a) && (r.unshift([o, a]), s[o] = 1));
                return r
            }

            function a(t) {
                var e, n, o, a, r = [],
                    u = {
                        logtype: !0,
                        cache: !0,
                        scr: !0,
                        "spm-cnt": !0
                    };
                for (e = t.length - 1; e >= 0; e--)
                    if (n = t[e], o = n[0], a = n[1], !(s.isStartWith(o, i.s_plain_obj) && !s.isStartWith(o, i.mkPlainKeyForExparams()) || u[o]))
                        if (s.isStartWith(o, i.mkPlainKeyForExparams())) {
                            var c = i.param2arr(a);
                            if ("object" == typeof c && c.length > 0)
                                for (var l = c.length - 1; l >= 0; l--) {
                                    var p = c[l];
                                    p && p[1] && r.unshift([p[0], p[1]])
                                }
                        } else r.unshift([o, a]);
                return r
            }

            function r() {
                var t = {
                        isonepage: "-1",
                        urlpagename: ""
                    },
                    e = g.qGet();
                if (e && e.hasOwnProperty("isonepage_data")) t.isonepage = e.isonepage_data.isonepage, t.urlpagename = e.isonepage_data.urlpagename;
                else {
                    var n = c.getMetaCnt("isonepage") || "-1",
                        o = n.split("|");
                    t.isonepage = o[0], t.urlpagename = o[1] ? o[1] : ""
                }
                return t
            }
            var i = n(18),
                s = n(9),
                u = n(25),
                c = n(28),
                l = n(52),
                p = n(42),
                g = n(26),
                f = n(4),
                d = n(11);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    keyIsAvailable: function(t) {
                        var e = ["functype", "funcId", "spm-cnt", "spm-url", "spm-pre", "_ish5", "_is_g2u", "_h5url", "cna", "isonepage", "lver", "jsver"];
                        return i.indexof(e, t) === -1
                    },
                    valIsAvailable: function(t) {
                        return "object" != typeof t && "function" != typeof t
                    },
                    upUtData: function(t, e) {
                        var n = this;
                        if (t = t ? t : {}, e && "object" == typeof e)
                            for (var o in e) {
                                var a = e[o];
                                o && n.valIsAvailable(a) && n.keyIsAvailable(o) && (t[o] = a)
                            }
                        return t
                    },
                    getToUtData: function(t) {
                        var e = u.getGoldlogVal("_$") || {},
                            n = e.spm || {},
                            s = this.options.context || {},
                            c = !!s.is_single,
                            p = s.what_to_sendpv || {},
                            g = a(o(p.exparams || []));
                        g = i.arr2obj(g);
                        var _ = i.arr2obj(p.pvdata),
                            h = a(o(s.userdata || []));
                        h = i.arr2obj(h);
                        var m = location.href,
                            v = {},
                            b = l.getParamFromUrl("scm", m) || "";
                        b && (v.scm = b);
                        var y = l.getParamFromUrl("pg1stepk", m) || "";
                        y && (v.pg1stepk = y);
                        var w = l.getParamFromUrl("point", m) || "";
                        w && (v.issb = 1), _ && _.mansndlog && (v.mansndlog = _.mansndlog), v = this.upUtData(v, g), v = this.upUtData(v, h);
                        var x = r();
                        v.functype = "page", v.funcId = "2001", v.url = goldlog.getMetaInfo("aplus-pagename") || location.origin + location.pathname, v._ish5 = "1", v._h5url = m, v._toUT = 2, v._bridgeName = t.bridgeName || "", v._bridgeVersion = t.bridgeVersion || "", v["spm-cnt"] = n.spm_cnt || "", v["spm-url"] = n.spm_url || "", v["spm-pre"] = n.spm_pre || "", v.cna = d.getCookie("cna"), v.lver = goldlog.lver || f.lver, v.jsver = f.script_name, v.pver = goldlog.aplus_cplugin_ver, v.isonepage = x.isonepage;
                        var T = goldlog.getMetaInfo("aplus-utparam");
                        return T && (v["utparam-cnt"] = JSON.stringify(T)), v._is_g2u_ = c ? 1 : 2, v
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = t.what_to_sendpv_ut2 || {},
                            n = t.where_to_sendlog_ut || {},
                            o = n.aplusToUT || {},
                            a = o.toUT2 || {};
                        (a && a.isAvailable && "function" == typeof a.toUT2 || p.haveNativeFlagInUA()) && (e.pvdataToUt = this.getToUtData(a), this.options.context.what_to_sendpv_ut2 = e)
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                var e, n, o, a, i = [],
                    s = {};
                for (e = t.length - 1; e >= 0; e--) n = t[e], o = n[0], o && o.indexOf(r.s_plain_obj) == -1 && s.hasOwnProperty(o) || (a = n[1], ("aplus" == o || a) && (i.unshift([o, a]), s[o] = 1));
                return i
            }

            function a(t) {
                var e, n, o, a, s = [],
                    u = {
                        logtype: !0,
                        cache: !0,
                        scr: !0,
                        "spm-cnt": !0
                    };
                for (e = t.length - 1; e >= 0; e--)
                    if (n = t[e], o = n[0], a = n[1], !(i.isStartWith(o, r.s_plain_obj) && !i.isStartWith(o, r.mkPlainKeyForExparams()) || u[o]))
                        if (i.isStartWith(o, r.mkPlainKeyForExparams())) {
                            var c = r.param2arr(a);
                            if ("object" == typeof c && c.length > 0)
                                for (var l = c.length - 1; l >= 0; l--) {
                                    var p = c[l];
                                    p && p[1] && s.unshift([p[0], p[1]])
                                }
                        } else s.unshift([o, a]);
                return s
            }
            var r = n(18),
                i = n(9),
                s = n(25),
                u = n(28),
                c = n(42),
                l = n(26),
                p = n(4),
                g = n(11);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getToUtData: function(t, e) {
                        var n, i = s.getGoldlogVal("_$") || {},
                            c = i.spm || {},
                            f = a(o(t)),
                            d = {};
                        try {
                            var _ = r.arr2obj(f);
                            _._toUT = 1, _._bridgeName = e.bridgeName || "", _._bridgeVersion = e.bridgeVersion || "", n = JSON.stringify(_)
                        } catch (t) {
                            n = '{"_toUT":1}'
                        }
                        var h = u.getOnePageInfo(l);
                        d.functype = "2001", d.urlpagename = h.urlpagename, d.url = location.href, d.spmcnt = c.spm_cnt || "", d.spmurl = c.spm_url || "", d.spmpre = c.spm_pre || "", d.lzsid = "", d.cna = g.getCookie("cna"), d.extendargs = n, d.isonepage = h.isonepage;
                        var m = this.options.context || {},
                            v = !!m.is_single;
                        return d._is_g2u_ = v ? 1 : 2, d.version = p.toUtVersion, d.lver = goldlog.lver || p.lver, d.jsver = p.script_name, d
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = t.what_to_sendpv || {},
                            n = e.pvdata || [],
                            o = t.what_to_sendpv_ut || {},
                            a = t.where_to_sendlog_ut || {},
                            r = a.aplusToUT || {},
                            i = r.toUT || {};
                        (i && i.isAvailable && "function" == typeof i.toUT2 || c.haveNativeFlagInUA()) && (o.pvdataToUt = this.getToUtData(n, i), this.options.context.what_to_sendpv_ut = o)
                    }
                }
            }
        }, function(t, e) {
            "use strict";
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = t.is_single ? "1" : "0";
                        if (t.what_to_sendpv_ut2.pvdataToUt._slog = e, t.what_to_sendpv_ut.pvdataToUt._slog = e, t.what_to_sendpv.pvdata.push(["_slog", e]), t.ut_is_available) {
                            var n = t.is_single ? "1" : "2";
                            t.what_to_sendpv.pvdata.push(["_is_g2u", n])
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(25);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function() {
                        var t = o.getGoldlogVal("_$") || {},
                            e = this.options.context.can_to_sendpv || {},
                            n = t.send_pv_count || 0,
                            a = this.options.config || {};
                        return a.is_auto && n > 0 ? "done" : (e.flag = "YES", this.options.context.can_to_sendpv = e, t.send_pv_count = ++n, void o.setGoldlogVal("_$", t))
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(25),
                a = n(18);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = !!t.is_single;
                        if (!e) {
                            var n = t.what_to_sendpv || {},
                                r = t.where_to_sendpv || {},
                                i = n.pvdata || [],
                                s = goldlog.getMetaInfo("aplus-channel");
                            if ("WS-ONLY" !== s) {
                                var u = location.hostname + location.pathname,
                                    c = "www.taobao.com/" === u || "www.aliyun.com/" === u,
                                    l = goldlog.send(r.url, c ? a.arr2param(i) : a.arr2obj(i), c ? "POST" : "");
                                o.setGoldlogVal("req", l)
                            }
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(42);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function(t, e) {
                        var n = this,
                            a = this.options.context || {},
                            r = a.what_to_sendpv_ut2 || {},
                            i = a.where_to_sendlog_ut || {},
                            s = r.pvdataToUt || {},
                            u = i.aplusToUT || {},
                            c = u.toUT2;
                        if (o.isNative4Aplus()) return u.toutflag = "toUT2", i.toUTName = "toUT2", void(n.options.context.what_to_sendpv_ut2.isSuccess = !0);
                        if (c && "function" == typeof c.toUT2 && c.isAvailable) try {
                            u.toutflag = "toUT2", c.toUT2(s, function() {
                                n.options.context.what_to_sendpv_ut2.isSuccess = !0, e("done")
                            }, function(t) {
                                n.options.context.what_to_sendpv_ut2.errorMsg = t, e()
                            }, 2e3)
                        } catch (t) {
                            e()
                        } finally {
                            return "pause"
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(42);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function(t, e) {
                        var n = this,
                            a = this.options.context || {},
                            r = a.what_to_sendpv_ut || {},
                            i = a.where_to_sendlog_ut || {},
                            s = r.pvdataToUt || {},
                            u = i.aplusToUT || {},
                            c = u.toUT;
                        if (o.isNative4Aplus()) return u.toutflag = "toUT", i.toUTName = "toUT", void(n.options.context.what_to_sendpv_ut.isSuccess = !0);
                        if (c && "function" == typeof c.toUT2 && c.isAvailable) try {
                            u.toutflag = "toUT", c.toUT2(s, function() {
                                n.options.context.what_to_sendpv_ut.isSuccess = !0, e()
                            }, function(t) {
                                n.options.context.what_to_sendpv_ut.errorMsg = t, e()
                            }, 2e3)
                        } catch (t) {
                            e()
                        } finally {
                            return "pause"
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(32),
                a = n(25);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function() {
                        var t = goldlog._$ || {},
                            e = this.options.context || {};
                        a.setGoldlogVal("pv_context", e);
                        var n = goldlog.spm_ab || [],
                            r = n.join("."),
                            i = t.send_pv_count,
                            s = {
                                cna: e.etag.cna,
                                count: i,
                                spmab_pre: goldlog.spmab_pre
                            };
                        o.doPubMsg(["sendPV", "complete", r, s]), o.doCachePubs(["sendPV", "complete", r, s])
                    }
                }
            }
        }, function(t, e) {
            "use strict";
            e.plugins_prepv = []
        }, function(t, e, n) {
            "use strict";

            function o() {
                var t = i.getGoldlogVal("_$") || {},
                    e = "//gm.mmstat.com/";
                return t.is_terminal && (e = "//wgo.mmstat.com/"), {
                    where_to_hjlj: {
                        url: e,
                        ac_atpanel: "//ac.mmstat.com/",
                        tblogUrl: "//log.mmstat.com/"
                    }
                }
            }

            function a() {
                return r.assign(new s, new o)
            }
            var r = n(9),
                i = n(25),
                s = n(67);
            t.exports = a
        }, function(t, e, n) {
            "use strict";

            function o() {
                return {
                    compose: {},
                    basic_params: {
                        cna: a.getCookie("cna")
                    },
                    where_to_hjlj: {
                        url: "//gm.mmstat.com/",
                        ac_atpanel: "//ac.mmstat.com/",
                        tblogUrl: "//log.mmstat.com/"
                    },
                    userdata: {},
                    what_to_hjlj: {
                        logdata: {}
                    },
                    what_to_pvhash: {
                        hash: []
                    },
                    what_to_hjlj_exinfo: {
                        EXPARAMS_FLAG: "EXPARAMS",
                        exinfo: [],
                        exparams_key_names: ["uidaplus", "pc_i", "pu_i"]
                    },
                    what_to_hjlj_ut: {
                        logdataToUT: {}
                    },
                    what_to_hjlj_ut2: {
                        isSuccess: !1,
                        logdataToUT: {}
                    },
                    where_to_sendlog_ut: {
                        aplusToUT: {},
                        toUTName: "toUT"
                    },
                    network: {
                        connType: "UNKNOWN"
                    },
                    is_single: !1
                }
            }
            var a = n(11);
            t.exports = o
        }, function(t, e, n) {
            "use strict";
            e.plugins_hjlj = [{
                name: "etag",
                enable: !0,
                path: n(37)
            }, {
                name: "where_to_sendlog_ut",
                enable: !0,
                path: n(39)
            }, {
                name: "is_single",
                enable: !0,
                path: n(41)
            }, {
                name: "what_to_hjlj_exinfo",
                enable: !0,
                path: n(69)
            }, {
                name: "what_to_pvhash",
                enable: !0,
                path: n(45)
            }, {
                name: "what_to_hjlj",
                enable: !0,
                path: n(70),
                deps: ["what_to_hjlj_exinfo", "what_to_pvhash"]
            }, {
                name: "what_to_hjlj_ut2",
                enable: n(56),
                path: n(71),
                deps: ["is_single", "what_to_hjlj_exinfo"]
            }, {
                name: "what_to_hjlj_ut",
                enable: n(56),
                path: n(72),
                deps: ["is_single", "what_to_hjlj_exinfo"]
            }, {
                name: "what_to_hjlj_slog",
                enable: !0,
                path: n(73),
                deps: ["what_to_hjlj"]
            }, {
                name: "where_to_hjlj",
                enable: !0,
                path: n(74),
                deps: ["is_single", "what_to_hjlj"]
            }, {
                name: "do_sendhjlj",
                enable: !0,
                path: n(75),
                deps: ["is_single", "what_to_hjlj", "where_to_hjlj"]
            }, {
                name: "do_sendhjlj_ut2",
                enable: n(56),
                path: n(76),
                deps: ["what_to_hjlj", "what_to_hjlj_ut2", "where_to_sendlog_ut"]
            }, {
                name: "do_sendhjlj_ut",
                path: n(77),
                deps: ["what_to_hjlj", "what_to_hjlj_ut", "where_to_sendlog_ut"]
            }]
        }, function(t, e, n) {
            "use strict";
            var o = n(18),
                a = n(30),
                r = n(25),
                i = n(25),
                s = n(12),
                u = n(11);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getCookieUserInfo: function() {
                        var t = [],
                            e = u.getCookie("workno") || u.getCookie("emplId");
                        e && t.push("workno=" + e);
                        var n = u.getHng();
                        return n && t.push("_hng=" + u.getHng()), t
                    },
                    filterExinfo: function(t) {
                        var e = "";
                        try {
                            t && ("string" == typeof t ? e = t.replace(/&amp;/g, "&").replace(/\buser(i|I)d=/, "uidaplus=").replace(/&aplus&/, "&") : "object" == typeof t && (e = o.obj2param(t, !0)))
                        } catch (t) {
                            e = t.message ? t.message : ""
                        }
                        return e
                    },
                    getExparamsFlag: function() {
                        var t = this.options.context || {},
                            e = t.what_to_hjlj_exinfo || {};
                        return e.EXPARAMS_FLAG || "EXPARAMS"
                    },
                    getCustomExParams: function(t) {
                        var e = "";
                        return t !== this.getExparamsFlag() && (e = this.filterExinfo(t) || ""), e ? e.split("&") : []
                    },
                    getBeaconExparams: function(t, e) {
                        var n = [],
                            r = a.getExParams(o) || "";
                        r = r.replace(/&aplus&/, "&");
                        for (var i = o.param2arr(r) || [], u = function(e) {
                                return s.indexof(t, e) > -1
                            }, c = 0; c < i.length; c++) {
                            var l = i[c],
                                p = l[0] || "",
                                g = l[1] || "";
                            p && g && (e === this.getExparamsFlag() || u(p)) && n.push(p + "=" + g)
                        }
                        return n
                    },
                    getExinfo: function(t) {
                        var e = this.options.context || {},
                            n = e.what_to_hjlj_exinfo || {},
                            o = n.exparams_key_names || [],
                            a = this.getBeaconExparams(o, t);
                        return a
                    },
                    getExData: function(t) {
                        var e = [];
                        if ("object" == typeof t)
                            for (var n in t) {
                                var o = t[n];
                                n && o && "object" != typeof o && "function" != typeof o && e.push(n + "=" + o)
                            }
                        return e
                    },
                    doConcatArr: function(t, e) {
                        return e && e.length > 0 && (t = t.concat(e)), t
                    },
                    run: function() {
                        try {
                            var t = this.options.context.what_to_hjlj_exinfo || {},
                                e = r.getGoldlogVal("_$") || {},
                                n = e.meta_info || {},
                                o = n["aplus-exinfo"] || "",
                                a = n["aplus-exdata"] || "",
                                s = [];
                            s = this.doConcatArr(s, t.exinfo || []), s = this.doConcatArr(s, this.getExinfo(o)), s = this.doConcatArr(s, this.getCookieUserInfo()), s = this.doConcatArr(s, this.getCustomExParams(o)), s = this.doConcatArr(s, this.getExData(a)), t.exinfo = s.join("&"), this.options.context.what_to_hjlj_exinfo = t
                        } catch (t) {
                            i.logger({
                                msg: t ? t.message : ""
                            })
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(30),
                a = n(18),
                r = n(11),
                i = n(9),
                s = n(4);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getParams: function() {
                        var t = this.options.context || {},
                            e = t.userdata || {},
                            n = t.basic_params || {},
                            u = t.what_to_hjlj_exinfo || {},
                            c = u.exinfo || "",
                            l = t.etag || {},
                            p = l.cna || n.cna || r.getCookie("cna"),
                            g = e.gmkey,
                            f = "";
                        e.gokey && c ? f = [e.gokey, c].join("&") : e.gokey ? f = e.gokey : c && (f = c);
                        var d = t.what_to_pvhash || {},
                            _ = d.hash || [];
                        _.length && (f += "&" + _.join("=")), f += "&jsver=" + s.script_name, f += "&lver=" + s.lver, f += "&pver=" + goldlog.aplus_cplugin_ver, f += "&cache=" + i.makeCacheNum(), f += "&page_cna=" + p;
                        var h = {
                            gmkey: g || "",
                            gokey: f,
                            cna: p
                        };
                        try {
                            var m = location.href.substring(0, 1200);
                            m && (h._p_url = goldlog.getMetaInfo("aplus-p-url") || m)
                        } catch (t) {}
                        e["spm-cnt"] && (h["spm-cnt"] = e["spm-cnt"]), e["spm-pre"] && (h["spm-pre"] = e["spm-pre"]);
                        try {
                            var v = o.getExParams(a),
                                b = a.param2obj(v).uidaplus;
                            b && (h._gr_uid_ = b);
                            var y = a.param2obj(f).uidaplus;
                            y && (h.uidaplus = y)
                        } catch (t) {}
                        return h
                    },
                    run: function() {
                        this.options.context.what_to_hjlj.logdata = this.getParams()
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(43),
                a = n(25),
                r = n(4);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getToUtData: function(t, e) {
                        var n = a.getGoldlogVal("_$") || {},
                            i = n.spm || {},
                            s = this.options.context.userdata || {},
                            u = this.options.context.basic_params || {},
                            c = this.options.context || {},
                            l = c.what_to_hjlj_exinfo || {},
                            p = l.exinfo || "",
                            g = "";
                        s.gokey && p ? g = [s.gokey, p].join("&") : s.gokey ? g = s.gokey : p && (g = p);
                        var f = {};
                        f.functype = "ctrl", f.funcId = o.getFunctypeValue2({
                            logkey: s.logkey,
                            gmkey: s.gmkey,
                            spm_ab: a.getGoldlogVal("spm_ab")
                        }), f.url = goldlog.getMetaInfo("aplus-pagename") || location.origin + location.pathname, f.logkey = s.logkey, f.gokey = encodeURIComponent(g), f.gmkey = s.gmkey, f._ish5 = "1", f._h5url = location.href, f._is_g2u_ = t ? 1 : 2, f._toUT = 2, f._bridgeName = e.bridgeName || "", f._bridgeVersion = e.bridgeVersion || "", f["spm-cnt"] = i.spm_cnt || "", f["spm-url"] = i.spm_url || "", f["spm-pre"] = i.spm_pre || "", f.cna = u.cna, f.lver = r.lver, f.jsver = r.script_name, s.hasOwnProperty("autosend") && (f.autosend = s.autosend);
                        var d = goldlog.getMetaInfo("aplus-utparam");
                        return d && (f["utparam-cnt"] = JSON.stringify(d)), f
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = t.what_to_hjlj_ut2 || {},
                            n = !!t.is_single,
                            o = t.where_to_sendlog_ut || {},
                            a = o.aplusToUT || {},
                            r = a.toUT2 || {};
                        e.logdataToUT = this.getToUtData(n, r), this.options.context.what_to_hjlj_ut2 = e
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(43),
                a = n(11),
                r = n(25),
                i = n(4);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getToUtData: function(t, e) {
                        var n = r.getGoldlogVal("_$") || {},
                            s = n.spm || {},
                            u = this.options.context || {},
                            c = u.userdata || {},
                            l = u.what_to_hjlj_exinfo || {},
                            p = l.exinfo || "",
                            g = "";
                        c.gokey && p ? g = [c.gokey, p].join("&") : c.gokey ? g = c.gokey : p && (g = p);
                        var f = {
                            gmkey: c.gmkey,
                            gokey: g,
                            lver: i.lver,
                            jsver: i.script_name,
                            version: i.toUtVersion,
                            spm_cnt: s.spm_cnt || "",
                            spm_url: s.spm_url || "",
                            spm_pre: s.spm_pre || ""
                        };
                        f._is_g2u_ = t ? 1 : 2, f._bridgeName = e.bridgeName || "", f.bridgeVersion = e.bridgeVersion || "", f._toUT = 1;
                        try {
                            f = JSON.stringify(f), "{}" == f && (f = "")
                        } catch (t) {
                            f = ""
                        }
                        var d = n.meta_info || {},
                            _ = d.isonepage_data || {},
                            h = {};
                        return h.functype = o.getFunctypeValue({
                            logkey: c.logkey,
                            gmkey: c.gmkey,
                            spm_ab: r.getGoldlogVal("spm_ab")
                        }), h.spmcnt = s.spm_cnt || "", h.spmurl = s.spm_url || "", h.spmpre = s.spm_pre || "", h.logkey = c.logkey, h.logkeyargs = f, h.urlpagename = _.urlpagename, h.url = location.href, h.cna = a.getCookie("cna") || "", h.extendargs = "", h.isonepage = _.isonepage, h
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = !!t.is_single,
                            n = t.what_to_hjlj_ut || {},
                            o = t.where_to_sendlog_ut || {},
                            a = o.aplusToUT || {},
                            r = a.toUT || {};
                        n.logdataToUT = this.getToUtData(e, r), this.options.context.what_to_hjlj_ut = n
                    }
                }
            }
        }, function(t, e) {
            "use strict";
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = t.is_single ? "1" : "0";
                        t.what_to_hjlj_ut2.logdataToUT._slog = e, t.what_to_hjlj_ut.logdataToUT._slog = e;
                        var n = ["_slog=" + e];
                        if (t.ut_is_available) {
                            var o = t.is_single ? "1" : "2";
                            n.push("_is_g2u=" + o)
                        }
                        t.what_to_hjlj.logdata.gokey ? t.what_to_hjlj.logdata.gokey += "&" + n.join("&") : t.what_to_hjlj.logdata.gokey = n.join("&")
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(18),
                a = n(9),
                r = n(25),
                i = n(24),
                s = n(26);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    getMetaInfo: function() {
                        var t = r.getGoldlogVal("_$") || {},
                            e = t.meta_info || s.getInfo();
                        return e
                    },
                    getAplusMetaByKey: function(t) {
                        var e = this.getMetaInfo() || {};
                        return e[t]
                    },
                    cramUrl: function(t) {
                        var e = r.getGoldlogVal("_$") || {},
                            n = e.spm || {},
                            o = this.options.context.where_to_hjlj || {},
                            i = o.ac_atpanel,
                            s = o.tblogUrl,
                            u = this.options.context.what_to_hjlj || {},
                            c = this.options.context.userdata || {},
                            l = !0,
                            p = c.logkey;
                        if (!p) return {
                            url: t,
                            logkey_available: !1
                        };
                        if ("ac" == p) t = i + "1.gif";
                        else if (a.isStartWith(p, "ac-")) t = i + p.substr(3);
                        else if (a.isStartWith(p, "/")) {
                            t += p.substr(1);
                            var g = u.logdata || {};
                            g["spm-cnt"] = n.spm_cnt, g.logtype = 2;
                            try {
                                u.logdata = g, this.options.context.what_to_hjlj = u
                            } catch (t) {}
                        } else a.isEndWith(p, ".gif") ? t = s + p : l = !1;
                        return {
                            url: t,
                            logkey_available: l
                        }
                    },
                    can_to_sendhjlj: function(t) {
                        var e = this.options.context || {},
                            n = e.logger || function() {},
                            o = this.options.context.userdata || {};
                        return !!t.logkey_available || (n({
                            msg: "logkey: " + o.logkey + " is not legal!"
                        }), !1)
                    },
                    run: function() {
                        var t = !!this.options.context.is_single;
                        if (!t) {
                            var e, n, a = o.filterIntUrl(this.options.context.where_to_hjlj.url),
                                r = this.getAplusMetaByKey("aplus-rhost-g"),
                                s = r && o.hostValidity(r);
                            s && (e = /^\/\//.test(r) ? "" : "//", n = /\/$/.test(r) ? "" : "/", a = e + r + n), r && !s && i.logger({
                                msg: "aplus-rhost-g: " + r + ' is invalid, suggestion: "xxx.mmstat.com"'
                            });
                            var u = this.cramUrl(a);
                            return this.can_to_sendhjlj(u) ? void(this.options.context.where_to_hjlj.url = u.url) : "done"
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(25);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function() {
                        var t = this.options.context || {},
                            e = this.options.config || {},
                            n = !!t.is_single;
                        if (!n) {
                            var a = t.logger || {},
                                r = t.what_to_hjlj || {},
                                i = t.where_to_hjlj || {},
                                s = r.logdata || {},
                                u = i.url || "";
                            u || "function" != typeof a || a({
                                msg: "warning: where_to_hjlj.url is null, goldlog.record failed!"
                            });
                            var c = goldlog.getMetaInfo("aplus-channel");
                            if ("WS-ONLY" !== c) {
                                var l = goldlog.send(i.url, s, e.method || "GET");
                                o.setGoldlogVal("req", l)
                            }
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(42);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function(t, e) {
                        var n = this,
                            a = this.options.context || {},
                            r = a.logger || function() {},
                            i = a.what_to_hjlj_ut2 || {},
                            s = a.where_to_sendlog_ut || {},
                            u = !!a.is_single,
                            c = i.logdataToUT || {},
                            l = s.aplusToUT || {},
                            p = l.toUT2;
                        if (o.isNative4Aplus()) return l.toutflag = "toUT2", s.toUTName = "toUT2", void(n.options.context.what_to_hjlj_ut2.isSuccess = !0);
                        if (p && "function" == typeof p.toUT2 && p.isAvailable) try {
                            l.toutflag = "toUT2", p.toUT2(c, function() {
                                n.options.context.what_to_hjlj_ut2.isSuccess = !0, e()
                            }, function(t) {
                                n.options.context.what_to_hjlj_ut2.errorMsg = t, e()
                            }, 2e3)
                        } catch (t) {
                            u && r({
                                msg: "warning: singleSendHjlj toUTName = toUT2 errorMsg:" + t.message
                            })
                        } finally {
                            return "pause"
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(42);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.options = t
                    },
                    run: function(t, e) {
                        var n = this,
                            a = this.options.context || {},
                            r = a.what_to_hjlj_ut2.isSuccess,
                            i = a.logger || function() {},
                            s = !!a.is_single,
                            u = a.where_to_sendlog_ut || {},
                            c = a.what_to_hjlj_ut || {},
                            l = c.logdataToUT || {},
                            p = u.aplusToUT || {},
                            g = p.toUT;
                        if (o.isNative4Aplus()) return p.toutflag = "toUT", u.toUTName = "toUT", void(n.options.context.what_to_hjlj_ut.isSuccess = !0);
                        if (!r && g && "function" == typeof g.toUT2 && g.isAvailable) try {
                            p.toutflag = "toUT", g.toUT2(l, function() {
                                n.options.context.what_to_hjlj_ut.isSuccess = !0, e()
                            }, function(t) {
                                n.options.context.what_to_hjlj_ut.errorMsg = t, e()
                            }, 3e3)
                        } catch (t) {
                            s && i({
                                msg: "warning: singleSend toUTName = " + u.toUTName + " errorMsg:" + t.message
                            })
                        } finally {
                            return "pause"
                        }
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o() {
                var t, e, n = i.KEY || {},
                    o = n.NAME_STORAGE || {};
                if (!c && u) {
                    var a = location.href,
                        l = u && (a.indexOf("login.taobao.com") >= 0 || a.indexOf("login.tmall.com") >= 0),
                        p = s.getRefer();
                    l && p ? (t = p, e = r.getItem(o.REFERRER_PV_ID)) : (t = a, e = goldlog.pvid), r.setItem(o.REFERRER, t), r.setItem(o.REFERRER_PV_ID, e)
                }
            }
            var a = n(79),
                r = n(54).nameStorage,
                i = n(4),
                s = n(53),
                u = "https:" == location.protocol,
                c = parent !== self;
            e.run = function() {
                var t = "beforeunload";
                a.on(window, t, function() {
                    o()
                })
            }
        }, function(t, e, n) {
            "use strict";

            function o(t, e, n) {
                var o = goldlog._$ || {},
                    a = o.meta_info || {},
                    r = a.aplus_ctap || {},
                    i = a["aplus-touch"];
                if (r && "function" == typeof r.on) r.on(t, e);
                else {
                    var u = "ontouchend" in document.createElement("div");
                    !u || "tap" !== i && "tapSpm" !== n ? s(t, u ? "touchstart" : "mousedown", e) : c.on(t, e)
                }
            }

            function a(t) {
                try {
                    p.documentElement.doScroll("left")
                } catch (e) {
                    return void setTimeout(function() {
                        a(t)
                    }, 1)
                }
                t()
            }

            function r(t) {
                var e = 0,
                    n = function() {
                        0 === e && t(), e++
                    };
                "complete" === p.readyState && n();
                var o;
                if (p.addEventListener) o = function() {
                    p.removeEventListener("DOMContentLoaded", o, !1), n()
                }, p.addEventListener("DOMContentLoaded", o, !1), window.addEventListener("load", n, !1);
                else if (p.attachEvent) {
                    o = function() {
                        "complete" === p.readyState && (p.detachEvent("onreadystatechange", o), n())
                    }, p.attachEvent("onreadystatechange", o), window.attachEvent("onload", n);
                    var r = !1;
                    try {
                        r = null === window.frameElement
                    } catch (t) {}
                    p.documentElement.doScroll && r && a(n)
                }
            }

            function i(t) {
                "complete" === p.readyState ? t() : s(l, "load", t)
            }

            function s() {
                var t = arguments;
                if (2 === t.length) "DOMReady" === t[0] && r(t[1]), "onload" === t[0] && i(t[1]);
                else if (3 === t.length) {
                    var e = t[0],
                        n = t[1],
                        a = t[2];
                    "tap" === n || "tapSpm" === n ? o(e, a, n) : e[_]((g ? "on" : "") + n, function(t) {
                        t = t || l.event;
                        var e = t.target || t.srcElement;
                        "function" == typeof a && a(t, e);
                    }, !!u(n) && {
                        passive: !0
                    })
                }
            }
            var u = n(80),
                c = n(81),
                l = window,
                p = document,
                g = !!p.attachEvent,
                f = "attachEvent",
                d = "addEventListener",
                _ = g ? f : d;
            e.DOMReady = r, e.onload = i, e.on = s
        }, function(t, e) {
            var n;
            t.exports = function(t) {
                if ("boolean" == typeof n) return n;
                if (!/touch|mouse|scroll|wheel/i.test(t)) return !1;
                n = !1;
                try {
                    var e = Object.defineProperty({}, "passive", {
                        get: function() {
                            n = !0
                        }
                    });
                    window.addEventListener("test", null, e)
                } catch (t) {}
                return n
            }
        }, function(t, e) {
            "use strict";

            function n(t, e) {
                return t + Math.floor(Math.random() * (e - t + 1))
            }

            function o(t, e, n) {
                var o = l.createEvent("HTMLEvents");
                if (o.initEvent(e, !0, !0), "object" == typeof n)
                    for (var a in n) o[a] = n[a];
                t.dispatchEvent(o)
            }

            function a(t) {
                0 === Object.keys(g).length && (p.addEventListener(_, r, !1), p.addEventListener(d, i, !1), p.addEventListener(m, i, !1));
                for (var e = 0; e < t.changedTouches.length; e++) {
                    var n = t.changedTouches[e],
                        o = {};
                    for (var a in n) o[a] = n[a];
                    var s = {
                        startTouch: o,
                        startTime: Date.now(),
                        status: h,
                        element: t.srcElement || t.target
                    };
                    g[n.identifier] = s
                }
            }

            function r(t) {
                for (var e = 0; e < t.changedTouches.length; e++) {
                    var n = t.changedTouches[e],
                        o = g[n.identifier];
                    if (!o) return;
                    var a = n.clientX - o.startTouch.clientX,
                        r = n.clientY - o.startTouch.clientY,
                        i = Math.sqrt(Math.pow(a, 2) + Math.pow(r, 2));
                    (o.status === h || "pressing" === o.status) && i > 10 && (o.status = "panning")
                }
            }

            function i(t) {
                for (var e = 0; e < t.changedTouches.length; e++) {
                    var n = t.changedTouches[e],
                        a = n.identifier,
                        s = g[a];
                    s && (s.status === h && t.type === d && (s.timestamp = Date.now(), o(s.element, v, {
                        touch: n,
                        touchEvent: t
                    })), delete g[a])
                }
                0 === Object.keys(g).length && (p.removeEventListener(_, r, !1), p.removeEventListener(d, i, !1), p.removeEventListener(m, i, !1))
            }

            function s(t) {
                t.__fixTouchEvent || (t.addEventListener(f, function() {}, !1), t.__fixTouchEvent = !0)
            }

            function u() {
                c || (p.addEventListener(f, a, !1), c = !0)
            }
            var c = !1,
                l = window.document,
                p = l.documentElement,
                g = {},
                f = "touchstart",
                d = "touchend",
                _ = "touchmove",
                h = "tapping",
                m = "touchcancel",
                v = "aplus_tap" + n(1, 1e5);
            t.exports = {
                on: function(t, e) {
                    u(), t && t.addEventListener && e && (s(t), t.addEventListener(v, e._aplus_tap_callback = function(t) {
                        e(t, t.target)
                    }, !1))
                },
                un: function(t, e) {
                    t && t.removeEventListener && e && e._aplus_tap_callback && t.removeEventListener(v, e._aplus_tap_callback, !1)
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o() {
                var t = (new Date).getTime(),
                    e = Math.floor(t / 72e5),
                    n = a.getElementById("aplus-sufei"),
                    o = goldlog._$ || {},
                    s = goldlog.getCdnPath(),
                    u = s + "/alilog/aplus_plugin_xwj/index.js?t=" + e,
                    c = s + "/alilog/stat/a.js?t=" + e,
                    l = s + "/secdev/entry/index.js?t=" + e,
                    p = s + "/sd/baxia-entry/index.js?t=" + e,
                    g = s + "/alilog/mlog/wp_beacon.js?t=" + e,
                    f = o.meta_info,
                    d = function() {
                        r.addScript(c), r.addScript(g), r.addScript(u)
                    },
                    _ = function() {
                        Math.random() < .01 && r.addScript(c), f.ms_data_instance_id && f.ms_prototype_id && f.ms_prototype_id.match(/^[124]$/) && f.ms_data_shop_id && r.addScript(g);
                        var t = f["aplus-rate-ahot"];
                        (Math.random() < t || f["ahot-aplus"]) && r.addScript(u)
                    },
                    h = f["aplus-xplug"];
                i.onload(function() {
                    try {
                        switch (h) {
                            case "NONE":
                                break;
                            case "ALL":
                                d();
                                break;
                            default:
                                _()
                        }
                    } catch (t) {}
                }), "NONE" !== h && (r.addScript(p, "", "aplus-baxia"), setTimeout(function() {
                    n && "script" == n.tagName.toLowerCase() || r.addScript(l, "", "aplus-sufei")
                }, 10))
            }
            var a = document,
                r = n(30),
                i = n(79),
                s = n(83);
            e.run = function() {
                o()
            }, e.init_watchGoldlogQueue = s.init_watchGoldlogQueue
        }, function(t, e, n) {
            "use strict";

            function o(t, e) {
                for (var n = {
                        subscribeMwChangeQueue: [],
                        subscribeMetaQueue: [],
                        subscribeQueue: [],
                        metaQueue: [],
                        othersQueue: []
                    }, o = [], a = {}; a = t.shift();) try {
                    var r = a.action,
                        i = a.arguments[0];
                    /subscribe/.test(r) ? "setMetaInfo" === i ? n.subscribeMetaQueue.push(a) : "mw_change_pv" === i || "mw_change_hjlj" === i ? n.subscribeMwChangeQueue.push(a) : n.subscribeQueue.push(a) : /MetaInfo/.test(r) ? n.metaQueue.push(a) : n.othersQueue.push(a)
                } catch (t) {
                    n.othersQueue.push(a), u.do_tracker_jserror({
                        message: t && t.message,
                        error: encodeURIComponent(t.stack),
                        filename: "getFormatQueue"
                    })
                }
                var s;
                return e && n[e] && (s = n[e], n[e] = []), o = n.subscribeMwChangeQueue.concat(n.metaQueue), o = o.concat(n.subscribeQueue), o = o.concat(n.subscribeMetaQueue, n.othersQueue), {
                    queue: o,
                    formatQueue: s
                }
            }
            var a = window,
                r = n(9),
                i = n(84),
                s = n(85),
                u = n(3),
                c = "goldlog_queue",
                l = function(t, e, n) {
                    try {
                        /_aplus_cplugin_track_deb/.test(t) || /_aplus_cplugin_m/.test(t) || u.do_tracker_jserror({
                            message: n || 'illegal task: goldlog_queue.push("' + JSON.stringify(e) + '")',
                            error: JSON.stringify(e),
                            filename: "processTask"
                        })
                    } catch (t) {}
                },
                p = function(t, e) {
                    var n = t ? t.action : "",
                        o = t ? t.arguments : "";
                    try {
                        if (n && o && r.isArray(o)) {
                            var i = n.split("."),
                                s = a,
                                u = a;
                            if (3 === i.length) s = a[i[0]][i[1]] || {}, u = s[i[2]] ? s[i[2]] : "";
                            else
                                for (; i.length;)
                                    if (u = s = s[i.shift()], !s) return void("function" == typeof e ? e(t) : l(n, t));
                            "function" == typeof u && u.apply(s, o)
                        } else l(n, t)
                    } catch (e) {
                        l(n, t, e.message)
                    }
                },
                g = function(t) {
                    function e() {
                        if (t && r.isArray(t) && t.length) {
                            for (var e = o(t).queue, n = {}, a = []; n = e.shift();) p(n, function(t) {
                                a.push(t)
                            });
                            a.length > 0 && setTimeout(function() {
                                for (; n = a.shift();) p(n)
                            }, 100)
                        }
                    }
                    try {
                        e()
                    } catch (t) {
                        u.do_tracker_jserror({
                            message: t && t.message,
                            error: encodeURIComponent(t.stack),
                            filename: "processGoldlogQueue"
                        })
                    }
                };
            e.processGoldlogQueue = g;
            var f = i.extend({
                push: function(t) {
                    this.length++, p(t)
                }
            });
            e.init_watchGoldlogQueue = function(t) {
                try {
                    var e = a[c] || [];
                    if (t) {
                        var n = o(e, t);
                        a[c] = n.queue, g(n.formatQueue)
                    } else a[c] = f.create({
                        startLength: e.length,
                        length: 0
                    }), s.init_loadAplusPlugin(), g(e)
                } catch (t) {
                    u.do_tracker_jserror({
                        message: t && t.message,
                        error: encodeURIComponent(t.stack),
                        filename: "init_watchGoldlogQueue"
                    })
                }
            }
        }, function(t, e) {
            "use strict";

            function n() {}
            n.prototype.extend = function() {}, n.prototype.create = function() {}, n.extend = function(t) {
                return this.prototype.extend.call(this, t)
            }, n.prototype.create = function(t) {
                var e = new this;
                for (var n in t) e[n] = t[n];
                return e
            }, n.prototype.extend = function(t) {
                var e = function() {};
                try {
                    "function" != typeof Object.create && (Object.create = function(t) {
                        function e() {}
                        return e.prototype = t, new e
                    }), e.prototype = Object.create(this.prototype);
                    for (var n in t) e.prototype[n] = t[n];
                    e.prototype.constructor = e, e.extend = e.prototype.extend, e.create = e.prototype.create
                } catch (t) {
                    console.log(t)
                } finally {
                    return e
                }
            }, t.exports = n
        }, function(t, e, n) {
            "use strict";
            var o = n(30),
                a = n(28),
                r = n(6),
                i = function() {
                    var t = goldlog.getCdnPath() + "/alilog/s/" + r.lver + "/plugin/";
                    return {
                        aplus_ae_path: t + "aplus_ae.js",
                        aplus_ac_path: t + "aplus_ac.js"
                    }
                },
                s = {},
                u = "aplus-auto-exp",
                c = "aplus-auto-clk",
                l = function(t, e) {
                    var n = i(),
                        r = goldlog && goldlog.getMetaInfo ? goldlog.getMetaInfo(t) : "",
                        l = e || r || a.getMetaCnt(t),
                        p = {};
                    p[u] = n.aplus_ae_path, p[c] = n.aplus_ac_path, l && p[t] && !s[t] && (o.addScript(p[t]), s[t] = !0)
                };
            e.init_loadAplusPlugin = function() {
                try {
                    !goldlog._aplus_auto_exp && l(u), !goldlog._aplus_ac && l(c), goldlog.aplus_pubsub.subscribe("setMetaInfo", function(t, e) {
                        t !== u || goldlog._aplus_auto_exp || l(t, e), t !== c || goldlog._aplus_ac || l(t, e)
                    })
                } catch (t) {}
            }
        }, function(t, e) {
            "use strict";

            function n(t, e) {
                return t.indexOf(e) > -1
            }

            function o(t, e) {
                for (var o = 0, a = t.length; o < a; o++)
                    if (n(e, t[o])) return !0;
                return !1
            }
            var a = location.host,
                r = ["admin.taobao.org", "mybank.cn"],
                i = ["tmc.admin.taobao.org", "tmall.admin.taobao.org"];
            e.is_exception = o(r, a) && !o(i, a)
        }, function(t, e, n) {
            "use strict";

            function o() {
                var t, e, n, o, a = c.getElementsByTagName("meta");
                for (t = 0, e = a.length; t < e; t++)
                    if (n = a[t], o = n.getAttribute("name"), "data-spm" === o || "spm-id" === o) return n
            }

            function a() {
                var t = c.createElement("meta");
                t.setAttribute("name", "data-spm");
                var e = c.getElementsByTagName("head")[0];
                return e && e.insertBefore(t, e.firstChild), t
            }

            function r() {
                var t = o();
                t || (t = a()), t.setAttribute("content", goldlog.spm_ab[0] || "");
                var e = c.getElementsByTagName("body")[0];
                e && e.setAttribute("data-spm", goldlog.spm_ab[1] || "")
            }

            function i() {
                var t, e, n, o = c.getElementsByTagName("*");
                for (t = 0, e = o.length; t < e; t++) n = o[t], n.getAttribute("data-spm-max-idx") && n.setAttribute("data-spm-max-idx", ""), n.getAttribute("data-spm-anchor-id") && n.setAttribute("data-spm-anchor-id", "")
            }

            function s() {
                var t = 5e3;
                try {
                    var e = goldlog.getMetaInfo("aplus-mmstat-timeout");
                    if (e) {
                        var n = parseInt(e);
                        n >= 1e3 && n <= 1e4 && (t = n)
                    }
                } catch (t) {}
                return t
            }
            var u = window,
                c = document,
                l = n(84),
                p = n(18),
                g = n(79),
                f = n(30),
                d = n(24),
                _ = n(32),
                h = n(9),
                m = n(25),
                v = n(22),
                b = n(51),
                y = n(26),
                w = y.getInfo(),
                x = n(4),
                T = n(3),
                j = n(88),
                A = n(11),
                P = n(91),
                S = n(93),
                k = [],
                U = [],
                E = [],
                I = [],
                M = "//g.alicdn.com",
                C = "//g-assets.daily.taobao.net",
                N = "//assets.alicdn.com/g",
                O = "//s.alicdn.com/@g/",
                V = "//u.alicdn.com",
                G = "//laz-g-cdn.alicdn.com";
            e.run = l.extend({
                getCdnPath: function() {
                    var t = f.getCurrentNode(),
                        e = M,
                        n = [N, O, C, V, G],
                        o = new RegExp(V);
                    if (t)
                        for (var a = 0; a < n.length; a++) {
                            var r = new RegExp(n[a]);
                            if (r.test(t.src)) {
                                e = n[a], o.test(t.src) && (e = N);
                                break
                            }
                        }
                    return e
                },
                isInternational: function() {
                    this.cdnPath || (this.cdnPath = this.getCdnPath());
                    var t = [N, O, G].indexOf(this.cdnPath) > -1;
                    return t || "int" === this.getMetaInfo("aplus-env")
                },
                getCookie: function(t) {
                    return A.getCookie(t)
                },
                getParam: function(t) {
                    var e = u.WindVane || {},
                        n = e && "function" == typeof e.getParam ? e.getParam(t) : "";
                    return n
                },
                beforeSendPV: function(t) {
                    k.push(t)
                },
                afterSendPV: function(t) {
                    U.push(t)
                },
                send: function(t, e, n) {
                    var o;
                    if (0 === t.indexOf("//")) {
                        var a = v.getProtocal();
                        t = a + t
                    }
                    return o = "POST" === n && navigator && navigator.sendBeacon ? S.postData(t, e) : S.sendImg(p.makeUrl(t, e), s())
                },
                launch: function(t, e) {
                    var n;
                    try {
                        e = h.assign(e, t), n = goldlog._$._sendPV(e, t);
                        var o = goldlog.spm_ab ? goldlog.spm_ab.join(".") : "0.0";
                        T.do_tracker_obsolete_inter({
                            page: location.hostname + location.pathname,
                            spm_ab: o,
                            interface_name: "goldlog.launch",
                            interface_params: "userdata = " + JSON.stringify(t) + ", config = " + JSON.stringify(e)
                        })
                    } catch (t) {} finally {
                        return d.logger({
                            msg: "warning: This interface is deprecated, please use goldlog.sendPV instead! API: http://log.alibaba-inc.com/log/info.htm?type=2277&id=31"
                        }), n
                    }
                },
                _$: {
                    _sendPV: function(t, e) {
                        if (t = t || {}, h.any(k, function(e) {
                                return e(goldlog, t) === !1
                            })) return !1;
                        var o = n(94).SendPV,
                            a = new o;
                        return "undefined" == typeof t.recordType && (t.recordType = x.recordTypes.pv), a.run(t, e, {
                            fn_after_pv: U
                        }), !0
                    },
                    _sendPseudo: function(t, e) {
                        t || (t = {});
                        var o = n(95).SendPrePV,
                            a = new o;
                        return "undefined" == typeof t.recordType && (t.recordType = x.recordTypes.prepv), a.run(t, e, {}, function() {
                            _.doPubMsg(["sendPrePV", "complete"])
                        }), !0
                    }
                },
                sendPV: function(t, e) {
                    return e = e || {}, e.pageName && goldlog.setMetaInfo("aplus-pagename", e.pageName), goldlog._$._sendPV(t, e)
                },
                updatePageProperties: function(t) {
                    t && "object" == typeof t ? (t._page && (t.pageName = t._page, delete t._page), t.pageName && (goldlog.setMetaInfo("aplus-pagename", t.pageName), delete t.pageName), goldlog.appendMetaInfo("aplus-cpvdata", t)) : d.logger({
                        msg: "warning: typeof updatePageProperties's params must be object"
                    })
                },
                beforeRecord: function(t) {
                    E.push(t)
                },
                afterRecord: function(t) {
                    I.push(t)
                },
                record: function(t, e, n, o, a) {
                    if (!h.any(E, function(t) {
                            return t(goldlog) === !1
                        })) return "POST" !== o && "WS" !== o && "WS-ONLY" !== o && (o = "GET"), j.run({
                        recordType: x.recordTypes.hjlj,
                        method: o
                    }, {
                        logkey: t,
                        gmkey: e,
                        gokey: n
                    }, {
                        fn_after_record: I
                    }, function() {
                        "function" == typeof a && a()
                    }), !0
                },
                recordUdata: function(t, e, n, o, a) {
                    var r = m.getGoldlogVal("_$") || {},
                        i = r.spm || {};
                    "POST" !== o && "WS" !== o && "WS-ONLY" !== o && (o = "GET"), j.run({
                        ignore_chksum: !0,
                        method: o,
                        recordType: x.recordTypes.uhjlj
                    }, {
                        logkey: t,
                        gmkey: e,
                        gokey: n,
                        "spm-cnt": i.spm_cnt,
                        "spm-pre": i.spm_pre
                    }, {}, function() {
                        h.isFunction(a) && a()
                    })
                },
                setPageSPM: function(t, e, n) {
                    var o = "setPageSPM",
                        a = goldlog.getMetaInfo("aplus-spm-fixed"),
                        s = "function" == typeof n ? n : function() {};
                    goldlog.spm_ab = goldlog.spm_ab || [];
                    var u = h.cloneObj(goldlog.spm_ab);
                    if (t && (goldlog.spm_ab[0] = "" + t, goldlog._$.spm.data.a = "" + t), e && (goldlog.spm_ab[1] = "" + e, goldlog._$.spm.data.b = "" + e), b.spaInit(goldlog, w, u), "1" !== a) {
                        var c = u.join(".");
                        goldlog.spmab_pre = c
                    }
                    var l = goldlog.spm_ab.join(".");
                    _.doPubMsg([o, {
                        spmab_pre: goldlog.spmab_pre,
                        spmab: l
                    }]), _.doCachePubs([o, {
                        spmab_pre: goldlog.spmab_pre,
                        spmab: l
                    }]), r(), i(), s()
                },
                setMetaInfo: function(t, e, n) {
                    if (y.setMetaInfo(t, e, n)) {
                        var o = m.getGoldlogVal("_$") || {};
                        o.meta_info = y.qGet();
                        var a = m.setGoldlogVal("_$", o),
                            r = P.isDisablePvid() + "";
                        return "aplus-disable-pvid" === t && r !== e + "" && b.resetSpmCntPvid(), _.doPubMsg(["setMetaInfo", t, e, n]), _.doCachePubs(["setMetaInfo", t, e, n]), a
                    }
                },
                appendMetaInfo: y.appendMetaInfo,
                getMetaInfo: function(t) {
                    return y.getMetaInfo(t)
                },
                on: g.on,
                cloneDeep: h.cloneDeep,
                getPvId: P.getPvId
            })
        }, function(t, e, n) {
            "use strict";
            var o = n(9),
                a = n(25),
                r = n(32),
                i = n(24),
                s = n(89),
                u = n(90),
                c = n(4);
            e.run = function(t, e, n, l) {
                var p = new u;
                p.init({
                    middleware: [],
                    config: t,
                    plugins: c.plugins_hjlj
                });
                var g = p.run(),
                    f = new c.context_hjlj;
                f.userdata = e, f.logger = i.logger;
                var d = {
                        context: f,
                        pubsub: a.getGoldlogVal("aplus_pubsub"),
                        pubsubType: "hjlj"
                    },
                    _ = new s;
                _.create(d), _.wrap(g, function() {
                    d.context.status = "complete", d.context.method = t.method, r.doPubMsg(["mw_change_hjlj", d.context]), n && n.fn_after_record && o.each(n.fn_after_record, function(t) {
                        t(window.goldlog)
                    }), "function" == typeof l && l()
                })()
            }
        }, function(t, e, n) {
            "use strict";

            function o() {}
            var a = n(12),
                r = n(23),
                i = n(24),
                s = n(3),
                u = n(11);
            o.prototype.create = function(t) {
                for (var e in t) "undefined" == typeof this[e] && (this[e] = t[e]);
                return this
            }, o.prototype.pubsubInfo = function(t, e) {
                try {
                    t && t.pubsub && t.pubsub.publish("mw_change_" + t.pubsubType, t.context, e)
                } catch (t) {}
            }, o.prototype.calledList = [], o.prototype.setCalledList = function(t) {
                a.indexof(this.calledList, t) === -1 && this.calledList.push(t)
            }, o.prototype.resetCalledList = function() {
                this.calledList = []
            }, o.prototype.wrap = function(t, e) {
                var n = this,
                    o = this.context || {},
                    c = o.compose || {},
                    l = c.maxTimeout || 1e4;
                return function(o) {
                    var c, p = t.length,
                        g = 0,
                        f = 0,
                        d = function() {
                            if (n.pubsubInfo(n, t[g]), g === p) return o = "done", n.resetCalledList(), "function" == typeof e && e.call(n, o), void clearTimeout(c);
                            if (a.indexof(n.calledList, g) === -1) {
                                if (n.setCalledList(g), !t[g] || "function" != typeof t[g][0]) return;
                                try {
                                    o = t[g][0].call(n, o, function() {
                                        g++, f = 1, clearTimeout(c), d(g)
                                    })
                                } catch (e) {
                                    s.do_tracker_jserror({
                                        message: e ? e.message : "compose middleware error",
                                        error: encodeURIComponent(e.stack),
                                        filename: t[g][1]
                                    })
                                }
                            }
                            var _ = "number" == typeof o;
                            if ("pause" === o || _) {
                                f = 0;
                                var h = _ ? o : l,
                                    m = t[g] ? t[g][1] : "";
                                c = r.sleep(h, function() {
                                    if (0 === f) {
                                        var t = "jump the middleware about " + m + ", because waiting timeout maxTimeout = " + h + "ms!";
                                        i.logger({
                                            msg: t
                                        });
                                        var e = window.goldlog_queue || (window.goldlog_queue = []);
                                        e.push({
                                            action: "goldlog._aplus_cplugin_m.do_tracker_browser_support",
                                            arguments: [{
                                                msg: t,
                                                spmab: goldlog.spm_ab,
                                                page: location.href,
                                                etag: n.context ? JSON.stringify(n.context.etag) : "",
                                                cna: document.cookie ? u.getCookie("cna") : ""
                                            }]
                                        }), o = null, g++, d(g)
                                    }
                                })
                            } else "done" === o ? (g = p, d(g)) : (g++, d(g))
                        };
                    return n.calledList && n.calledList.length > 0 && n.resetCalledList(), d(g)
                }
            }, t.exports = o
        }, function(t, e, n) {
            "use strict";
            var o = n(12);
            t.exports = function() {
                return {
                    init: function(t) {
                        this.opts = t, t && "object" == typeof t.middleware && t.middleware.length > 0 ? this.middleware = t.middleware : this.middleware = [], this.plugins_name = []
                    },
                    pubsubInfo: function(t, e) {
                        try {
                            var n = t.pubsub;
                            n && n.publish("plugins_change_" + t.pubsubType, e)
                        } catch (t) {}
                    },
                    checkPluginLoader: function(t, e) {
                        var n = !0;
                        if ("object" == typeof e.enable && "function" == typeof e.enable.isEnable ? n = e.enable.isEnable(e.name) : "boolean" == typeof e.enable && (n = !!e.enable), !n) return !1;
                        if (n && e.deps && e.deps.length > 0)
                            for (var a = 0; a < e.deps.length; a++)
                                if (o.indexof(this.plugins_name, e.deps[a]) === -1) return !1;
                        return !0
                    },
                    run: function(t) {
                        t || (t = 0);
                        var e = this,
                            n = this.middleware,
                            o = this.opts || {},
                            a = o.plugins;
                        if (a && "object" == typeof a && a.length > 0) {
                            var r = a[t];
                            if (this.checkPluginLoader(a, r) && (this.plugins_name.push(r.name), n.push([function(t, n) {
                                    e.pubsubInfo(this, r);
                                    var a = new r.path;
                                    return a.init({
                                        context: this.context,
                                        config: o.config
                                    }), a.run(t, n)
                                }, r.name])), t++, a[t]) return this.run(t)
                        } else window.console && console.log("aplus plugins " + JSON.stringify(a) + " must be object of array!");
                        return n
                    }
                }
            }
        }, function(t, e, n) {
            "use strict";

            function o() {
                var t = "true" === l.disablePvid;
                try {
                    var e = goldlog.getMetaInfo("aplus-disable-pvid") + "";
                    "true" === e ? t = !0 : "false" === e && (t = !1)
                } catch (t) {}
                return t
            }

            function a(t) {
                function e(t) {
                    var e = "0123456789abcdefhijklmnopqrstuvwxyzABCDEFHIJKLMNOPQRSTUVWXYZ",
                        n = "0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHIJKMNOPQRSTUVWXYZ";
                    return 1 == t ? e.substr(Math.floor(60 * Math.random()), 1) : 2 == t ? n.substr(Math.floor(60 * Math.random()), 1) : "0"
                }
                for (var n, o = "", a = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", r = !1; o.length < t;) n = a.substr(Math.floor(62 * Math.random()), 1), !r && o.length <= 2 && ("g" == n.toLowerCase() || "l" == n.toLowerCase()) && (0 === o.length && "g" == n.toLowerCase() ? Math.random() < .5 && (n = e(1), r = !0) : 1 == o.length && "l" == n.toLowerCase() && "g" == o.charAt(0).toLowerCase() && (n = e(2), r = !0)), o += n;
                return o
            }

            function r(t, e, n) {
                return t ? u.hash(encodeURIComponent(t)).substr(0, e) : n
            }

            function i() {
                var t = a(8),
                    e = t.substr(0, 4),
                    n = t.substr(0, 6);
                return [r(location.href, 4, e), r(document.title, 4, e), n].join("")
            }

            function s() {
                var t = goldlog.pvid;
                return goldlog.pvid = i(), c.doPubMsg(["pvidChange", {
                    pre_pvid: t,
                    pvid: goldlog.pvid
                }]), c.doCachePubs(["pvidChange", {
                    pre_pvid: t,
                    pvid: goldlog.pvid
                }]), o() ? "" : goldlog.pvid
            }
            var u = n(92),
                c = n(32),
                l = n(4);
            e.isDisablePvid = o, e.makePVId = s, e.getPvId = function() {
                return o() ? "" : goldlog.pvid
            }
        }, function(t, e) {
            "use strict";
            var n = 1315423911;
            e.hash = function(t, e) {
                var o, a, r = e || n;
                for (o = t.length - 1; o >= 0; o--) a = t.charCodeAt(o), r ^= (r << 5) + a + (r >> 2);
                var i = (2147483647 & r).toString(16);
                return i
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                if (!t) return "";
                var e = decodeURIComponent(t).match(/cache=\w+/);
                return e && 1 === e.length ? e[0].split("=")[1] : void 0
            }
            var a = n(3),
                r = window;
            e.sendImg = function(t, e) {
                var n = new Image,
                    i = "_img_" + Math.random();
                r[i] = n;
                var s = function() {
                    if (r[i]) try {
                        delete r[i]
                    } catch (t) {
                        r[i] = void 0
                    }
                };
                return n.onload = function() {
                    s()
                }, n.onerror = function() {
                    a.do_tracker_jserror({
                        message: "loadError",
                        error: "",
                        filename: "sendImg",
                        logid: o(t)
                    }), s()
                }, setTimeout(function() {
                    window[i] && (a.do_tracker_jserror({
                        message: "loadTimeout",
                        error: e,
                        filename: "sendImg",
                        logid: o(t)
                    }), window[i].src = "", s())
                }, e || 3e3), n.src = t, n = null, t
            }, e.postData = function(t, e) {
                var n;
                if ("string" == typeof e) n = e;
                else {
                    for (var o in e)["cna"].indexOf(o) === -1 && (e[o] = encodeURIComponent(e[o]));
                    n = JSON.stringify(e)
                }
                return navigator.sendBeacon(t, n), t
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(9),
                a = n(25),
                r = n(32),
                i = n(24),
                s = n(89),
                u = n(90),
                c = n(4),
                l = function() {};
            l.prototype.run = function(t, e, n) {
                var l = new u;
                l.init({
                    middleware: [],
                    config: t,
                    plugins: c.plugins_pv
                });
                var p = l.run(),
                    g = new c.context;
                g.userdata = e, g.logger = i.logger;
                var f = {
                        context: g,
                        pubsub: a.getGoldlogVal("aplus_pubsub"),
                        pubsubType: "pv"
                    },
                    d = new s;
                d.create(f), d.wrap(p, function() {
                    var e = f.context.can_to_sendpv || {};
                    f.context.status = "YES" === e.flag ? "complete" : "skip", f.context.method = t.method || "GET", r.doPubMsg(["mw_change_pv", f.context]), n && n.fn_after_record && o.each(n.fn_after_pv, function(e) {
                        e(window.goldlog, t)
                    })
                })()
            }, e.SendPV = l
        }, function(t, e, n) {
            "use strict";
            var o = n(9),
                a = n(25),
                r = n(32),
                i = n(24),
                s = n(89),
                u = n(90),
                c = n(4),
                l = function() {};
            l.prototype.run = function(t, e, n, l) {
                var p = new u;
                p.init({
                    middleware: [],
                    config: t,
                    plugins: c.plugins_prepv
                });
                var g = p.run(),
                    f = new c.context_prepv;
                f.userdata = e, f.logger = i.logger;
                var d = {
                        context: f,
                        pubsub: a.getGoldlogVal("aplus_pubsub"),
                        pubsubType: "prepv"
                    },
                    _ = new s;
                _.create(d), _.wrap(g, function() {
                    d.context.status = "complete", r.doPubMsg(["mw_change_prepv", d.context]), n && n.fn_after_record && o.each(n.fn_after_pv, function(e) {
                        e(window.goldlog, t)
                    }), a.setGoldlogVal("prepv_context", f), "function" == typeof l && l()
                })()
            }, e.SendPrePV = l
        }, function(t, e, n) {
            "use strict";
            ! function() {
                var t = window.goldlog || (window.goldlog = {}),
                    e = n(97);
                t.aplus_pubsub || (t.aplus_pubsub = e.create())
            }()
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                if ("function" != typeof t) throw new TypeError(t + " is not a function");
                return t
            }
            var a = n(84),
                r = function(t) {
                    for (var e = t.length, n = new Array(e - 1), o = 1; o < e; o++) n[o - 1] = t[o];
                    return n
                },
                i = a.extend({
                    create: function(t) {
                        var e = new this;
                        for (var n in t) e[n] = t[n];
                        return e.handlers = [], e.pubs = {}, e
                    },
                    setHandlers: function(t) {
                        this.handlers = t
                    },
                    subscribe: function(t, e) {
                        o(e);
                        var n = this,
                            a = n.pubs || {},
                            r = a[t] || [];
                        if (r)
                            for (var i = 0; i < r.length; i++) {
                                var s = r[i]();
                                e.apply(n, s)
                            }
                        var u = n.handlers || [];
                        return t in u || (u[t] = []), u[t].push(e), n.setHandlers(u), n
                    },
                    subscribeOnce: function(t, e) {
                        o(e);
                        var n, a = this;
                        return this.subscribe.call(this, t, n = function() {
                            a.unsubscribe.call(a, t, n);
                            var o = Array.prototype.slice.call(arguments);
                            e.apply(a, o)
                        }), this
                    },
                    unsubscribe: function(t, e) {
                        o(e);
                        var n = this.handlers[t];
                        if (!n) return this;
                        if ("object" == typeof n && n.length > 0) {
                            for (var a = 0; a < n.length; a++) {
                                var r = e.toString(),
                                    i = n[a].toString();
                                r === i && n.splice(a, 1)
                            }
                            this.handlers[t] = n
                        } else delete this.handlers[t];
                        return this
                    },
                    publish: function(t) {
                        var e = r(arguments),
                            n = this.handlers || [],
                            o = n[t] ? n[t].length : 0;
                        if (o > 0)
                            for (var a = 0; a < o; a++) {
                                var i = n[t][a];
                                i && "function" == typeof i && i.apply(this, e)
                            }
                        return this
                    },
                    cachePubs: function(t) {
                        var e = this.pubs || {},
                            n = r(arguments);
                        e[t] || (e[t] = []), e[t].push(function() {
                            return n
                        })
                    }
                });
            t.exports = i
        }, function(t, e, n) {
            "use strict";
            var o = n(40),
                a = n(32),
                r = n(53),
                i = n(4);
            e.init = function() {
                i.initLoad.init_watchGoldlogQueue("metaQueue"), n(99)(function() {
                    var t = goldlog._$ || {},
                        e = navigator.userAgent;
                    e.match(/AliApp\(([A-Z\-]+)\/([\d\.]+)\)/i) && (t.is_ali_app = !0), i.utilPvid.makePVId();
                    var s = n(51);
                    t.spm = s, t.is_WindVane = o.is_WindVane;
                    var u = t.meta_info;
                    s.init(goldlog, u, function() {
                        i.initLoad.init_watchGoldlogQueue();
                        var t = n(4).spmException,
                            e = t.is_exception;
                        e || n(102);
                        var o, r = "complete";
                        o = ["aplusReady", r], a.doPubMsg(o), a.doCachePubs(o)
                    }), goldlog.beforeSendPV(function(e, n) {
                        if (t.page_url = location.href, t.page_referrer = r.getRefer(), n.is_auto && "1" === u["aplus-manual-pv"]) return !1
                    }), goldlog.afterSendPV(function() {
                        window.g_SPM && (g_SPM._current_spm = "")
                    }), i.is_auto_pv + "" == "true" && goldlog.sendPV({
                        is_auto: !0
                    }), i.initLoad.run(), i.beforeUnload.run()
                })
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(32),
                a = n(100);
            t.exports = function(t) {
                var e = n(101).AplusInit,
                    r = new e;
                r.run({}, function(e) {
                    o.doPubMsg(["aplusInitContext", e]), o.doCachePubs(["aplusInitContext", e]), a(), "function" == typeof t && t()
                })
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                var e = "";
                switch (!0) {
                    case r.isJSON(t):
                        e = "settled";
                        break;
                    case r.isString(t):
                        e = t;
                        break;
                    case r.isNumber(t):
                        e = t + "";
                        break;
                    default:
                        e = "settled"
                }
                return e
            }
            var a = n(25),
                r = n(9);
            t.exports = function() {
                try {
                    var t = a.getGoldlogVal("hasSendMIC"),
                        e = Math.floor(99 * Math.random());
                    if (t || 1 !== e) return;
                    var n = goldlog && goldlog._$ ? goldlog._$.meta_info : {},
                        i = "";
                    for (var s in n) r.isEmpty(n[s]) || (i = i + "&" + s + "=" + o(n[s]));
                    a.setGoldlogVal("hasSendMIC", !0), goldlog.record("/m.i.c", "OTHER", i, "POST")
                } catch (t) {}
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(25),
                a = n(24),
                r = n(89),
                i = n(90),
                s = n(4),
                u = function() {};
            u.prototype.run = function(t, e) {
                var n = new i;
                n.init({
                    middleware: [],
                    config: t,
                    plugins: s.aplus_init
                });
                var u = n.run(),
                    c = new s.context;
                c.logger = a.logger;
                var l = {
                        context: c,
                        pubsub: o.getGoldlogVal("aplus_pubsub"),
                        pubsubType: "aplusinit"
                    },
                    p = new r;
                p.create(l), p.wrap(u, function() {
                    "function" == typeof e && e(l.context)
                })()
            }, e.AplusInit = u
        }, function(t, e, n) {
            "use strict";
            ! function() {
                var t, e = n(9),
                    o = n(25),
                    a = n(103),
                    r = function() {
                        t = !0;
                        var n = window.g_SPM || {};
                        e.isFunction(n.getParam) || e.isFunction(n.spm) || a.run()
                    },
                    i = window.goldlog || (window.goldlog = {});
                i.aplus_pubsub && "function" == typeof i.aplus_pubsub.publish && i.aplus_pubsub.subscribe("goldlogReady", function(e) {
                    "complete" !== e || t || r()
                });
                var s = 0,
                    u = function() {
                        if (!t) {
                            var e = o.getGoldlogVal("_$") || {};
                            "complete" === e.status ? r() : s < 50 && (++s, setTimeout(function() {
                                u()
                            }, 200))
                        }
                    };
                u()
            }()
        }, function(t, e, n) {
            "use strict";
            var o = n(30),
                a = n(25),
                r = n(104),
                i = n(108),
                s = n(109),
                u = n(110),
                c = n(111);
            e.run = function() {
                var t = a.getGoldlogVal("_$") || {},
                    e = t.meta_info,
                    n = e["aplus-touch"],
                    l = {
                        isTouchEnabled: o.isTouch() || "1" === n || "tap" === n,
                        isTerminal: t.is_terminal || /WindVane/i.test(navigator.userAgent)
                    };
                window.g_SPM = {
                    spm_d_for_ad: {},
                    resetModule: r.spm_resetModule,
                    anchorBeacon: r.spm_spmAnchorChk,
                    getParam: r.spm_getSPMParam,
                    spm: r.spm_forwap
                }, i.run(l), s.run(l), u.run(l), c.run(l)
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                if (t && 1 === t.nodeType) {
                    s.tryToRemoveAttribute(t, "data-spm-max-idx"), s.tryToRemoveAttribute(t, "data-auto-spmd-max-idx");
                    for (var e = u.nodeListToArray(t.getElementsByTagName("a")), n = u.nodeListToArray(t.getElementsByTagName("area")), o = e.concat(n), a = 0; a < o.length; a++) s.tryToRemoveAttribute(o[a], l)
                }
            }

            function a(t, e) {
                var n = s.tryToGetAttribute(t, l),
                    o = "0";
                if (n && c.spm_isSPMAnchorIdMatch(n)) c.spm_anchorEnsureSPMId_inHref(t, n, e);
                else {
                    var a = c.spm_spmGetParentSPMId(t.parentNode);
                    if (o = a.spm_c, !o) return void c.spm_dealNoneSPMLink(t, e);
                    c.spm_initSPMModule(a.el, o, e), c.spm_initSPMModule(a.el, o, e, !0)
                }
            }

            function r(t) {
                var e, n = t.tagName;
                "A" !== n && "AREA" !== n ? e = c.spm_getParamForAD(t) : (a(t, !0), e = s.tryToGetAttribute(t, l)), e || (e = "0.0.0.0");
                var o = goldlog.getPvId();
                4 === e.split(".").length && o && (e += "." + o), "A" !== n && "AREA" !== n && s.tryToSetAttribute(t, l, e), e = e.split(".");
                var r = {
                    a: e[0],
                    b: e[1],
                    c: e[2],
                    d: e[3]
                };
                return e[4] && (r.e = e[4]), r
            }

            function i(t, e) {
                var n = r(t),
                    o = [n.a, n.b, n.c, n.d];
                return e && n.e && o.push(n.e), o.join(".")
            }
            var s = n(27),
                u = n(19),
                c = n(105),
                l = "data-spm-anchor-id";
            e.spm_resetModule = o, e.spm_spmAnchorChk = a, e.spm_getSPMParam = r, e.spm_forwap = i
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                for (var e, n = "data-spm-ab-max-idx", o = {}, a = ""; t && t.tagName != T && t.tagName != x;) {
                    if (!a && (a = v.tryToGetAttribute(t, "data-spm-ab"))) {
                        e = parseInt(v.tryToGetAttribute(t, n)) || 0, o.a_spm_ab = a, o.ab_idx = ++e, t.setAttribute(n, e);
                        break
                    }
                    if (v.tryToGetAttribute(t, "data-spm")) break;
                    t = t.parentNode
                }
                return o
            }

            function a() {
                var t = b.getGoldlogVal("_$") || {},
                    e = t.spm || {},
                    n = e.data || {};
                return [n.a, n.b].join(".")
            }

            function r(t) {
                var e = a(),
                    n = t.split(".");
                return n[0] + "." + n[1] == e
            }

            function i(t, e) {
                if (!goldlog.isUT4Aplus || "UT4Aplus" !== goldlog.getMetaInfo("aplus-toUT")) {
                    if (t && /&?\bspm=[^&#]*/.test(t) && (t = t.replace(/&?\bspm=[^&#]*/g, "").replace(/&{2,}/g, "&").replace(/\?&/, "?").replace(/\?$/, "")), !e) return t;
                    var n, o, a, r, i, s, u, c = "&";
                    t.indexOf("#") !== -1 && (a = t.split("#"), t = a.shift(), o = a.join("#")), r = t.split("?"), i = r.length - 1, a = r[0].split("//"), a = a[a.length - 1].split("/"), s = a.length > 1 ? a.pop() : "", i > 0 && (n = r.pop(), t = r.join("?")), n && i > 1 && n.indexOf("&") == -1 && n.indexOf("%") !== -1 && (c = "%26");
                    var l = "";
                    if (t = t + "?spm=" + l + e + (n ? c + n : "") + (o ? "#" + o : ""), u = h.isContain(s, ".") ? s.split(".").pop().toLowerCase() : "") {
                        if ({
                                png: 1,
                                jpg: 1,
                                jpeg: 1,
                                gif: 1,
                                bmp: 1,
                                swf: 1
                            }.hasOwnProperty(u)) return 0;
                        !n && i <= 1 && (o || {
                            htm: 1,
                            html: 1,
                            php: 1,
                            aspx: 1,
                            shtml: 1,
                            xhtml: 1
                        }.hasOwnProperty(u) || (t += "&file=" + s))
                    }
                    return t
                }
            }

            function s(t, e) {
                if (!goldlog.isUT4Aplus || "UT4Aplus" !== goldlog.getMetaInfo("aplus-toUT")) {
                    var n, o = t.innerHTML;
                    o && o.indexOf("<") == -1 && (n = document.createElement("b"), n.style.display = "none", t.appendChild(n)), t.href = e, n && t.removeChild(n)
                }
            }

            function u(t, e, n) {
                if (!/^0\.0\.?/.test(e)) {
                    var o = y.tryToGetHref(t),
                        r = a(),
                        u = w.is_ignore_spm(t);
                    if (u) {
                        var c = _.param2obj(o);
                        if (c.spm && c.spm.split)
                            for (var l = c.spm.split("."), p = e.split("."), g = 0; g < 3 && p[g] === l[g]; g++) 2 === g && l[3] && (e = c.spm)
                    }
                    t.setAttribute("data-spm-anchor-id", e);
                    var f = goldlog.getPvId();
                    f && (e += "." + f);
                    var d = "0.0";
                    (f || r && r != d) && (u || n || (o = i(o, e)) && s(t, o))
                }
            }

            function c(t) {
                var e = v.tryToGetAttribute(t, A),
                    n = m.parseSemicolonContent(e) || {};
                return n
            }

            function l(t) {
                var e, n = b.getGoldlogVal("_$") || {},
                    o = n.spm.data;
                return "0" == o.a && "0" == o.b ? e = "0" : (e = v.tryToGetAttribute(t, j), e && e.match(/^d\w+$/) || (e = "")), e
            }

            function p(t, e) {
                for (var n = [], o = m.nodeListToArray(t.getElementsByTagName("a")), a = m.nodeListToArray(t.getElementsByTagName("area")), r = o.concat(a), i = 0; i < r.length; i++) {
                    for (var s = !1, u = r[i], c = r[i];
                        (u = u.parentNode) && u != t;)
                        if (v.tryToGetAttribute(u, j)) {
                            s = !0;
                            break
                        } if (!s) {
                        var l = v.tryToGetAttribute(c, P);
                        e || "t" === l ? e && "t" === l && n.push(c) : n.push(c)
                    }
                }
                return n
            }

            function g(t) {
                for (var e, n = t; t && t.tagName !== T && t.tagName !== x && t.getAttribute;) {
                    var o = t.getAttribute(j);
                    if (o) {
                        e = o, n = t;
                        break
                    }
                    if (!(t = t.parentNode)) break
                }
                return e && !/^[\w\-\.\/]+$/.test(e) && (e = "0"), {
                    spm_c: e,
                    el: n
                }
            }

            function f(t, e) {
                var n = parent !== self;
                if (!n && e) return [t, e].join(".");
                if (t && e) return t + ".i" + e;
                var o = window.g_SPM || (window.g_SPM = {}),
                    a = o.spm_d_for_ad || {};
                return "number" == typeof a[t] ? a[t]++ : a[t] = 0, o.spm_d_for_ad = a, t + ".i" + a[t]
            }

            function d(t) {
                var e;
                return t && (e = t.match(/&?\bspm=([^&#]*)/)) ? e[1] : ""
            }
            var _ = n(18),
                h = n(9),
                m = n(19),
                v = n(27),
                b = n(25),
                y = n(106),
                w = n(107),
                x = "BODY",
                T = "HTML",
                j = "data-spm",
                A = "data-spm-click",
                P = "data-auto-spmd",
                S = "data-spm-anchor-id";
            e.getGlobalSPMId = a, e.spm_isSPMAnchorIdMatch = r, e.spm_updateHrefWithSPMId = i, e.spm_writeHref = s, e.spm_anchorEnsureSPMId_inHref = u, e.getElDataSpm = c, e.spm_getAnchor4thId_spm_d = l, e.spm_getModuleLinks = p, e.spm_spmGetParentSPMId = g, e.get_spm_for_ad = f, e.spm_getParamForAD = function(t) {
                var e = v.tryToGetAttribute(t, S);
                if (!e) {
                    var n = a(),
                        o = t.parentNode;
                    if (!o) return "";
                    var r = c(t) || {},
                        i = r.locaid || "",
                        s = t.getAttribute(j) || i,
                        u = g(o),
                        l = u.spm_c || 0;
                    l && l.indexOf(".") !== -1 && (l = l.split("."), l = l[l.length - 1]), e = f(n + "." + l, s)
                }
                return e
            }, e.spm_initSPMModule = function(t, e, n, i) {
                var s;
                if (e = e || t.getAttribute("data-spm") || "") {
                    var g = p(t, i);
                    if (0 !== g.length) {
                        var f = e.split("."),
                            d = h.isStartWith(e, "110") && 3 == f.length;
                        d && (s = f[2], f[2] = "w" + (s || "0"), e = f.join("."));
                        var _ = a();
                        if (_ && _.match(/^[\w\-\*]+(\.[\w\-\*\/]+)?$/))
                            if (h.isContain(e, ".")) {
                                if (!h.isStartWith(e, _)) {
                                    var m = _.split(".");
                                    f = e.split(".");
                                    for (var b = 0; b < m.length; b++) f[b] = m[b];
                                    e = f.join(".")
                                }
                            } else h.isContain(_, ".") || (_ += ".0"), e = _ + "." + e;
                        if (e.match && e.match(/^[\w\-\*]+\.[\w\-\*\/]+\.[\w\-\*\/]+$/)) {
                            for (var w = "data-auto-spmd-max-idx", x = "data-spm-max-idx", T = i ? w : x, j = parseInt(v.tryToGetAttribute(t, T)) || 0, P = 0; P < g.length; P++) {
                                var k = g[P],
                                    U = y.tryToGetHref(k),
                                    E = v.tryToGetAttribute(k, A);
                                if (i || U || E) {
                                    d && k.setAttribute("data-spm-wangpu-module-id", s);
                                    var I = k.getAttribute(S);
                                    if (I && r(I)) u(k, I, n);
                                    else {
                                        var M, C, N = o(k.parentNode);
                                        N.a_spm_ab ? (C = N.a_spm_ab, M = N.ab_idx) : (C = void 0, j++, M = j);
                                        var O, V = c(k) || {},
                                            G = V.locaid || "";
                                        G ? O = G : (O = l(k) || M, i && (O = "at" + ((h.isNumber(O) ? 1e3 : "") + O))), I = C ? e + "-" + C + "." + O : e + "." + O, u(k, I, n)
                                    }
                                }
                            }
                            t.setAttribute(T, j)
                        }
                    }
                }
            }, e.spm_dealNoneSPMLink = function(t, e) {
                var n = goldlog.getMetaInfo("aplus-getspmcd"),
                    o = a(),
                    r = y.tryToGetHref(t),
                    i = d(r),
                    c = null,
                    p = o && 2 == o.split(".").length;
                if (p) {
                    var g;
                    return "function" == typeof n && (g = n(t, null, o)), c = g && "0" !== g.spm_c ? [o, g.spm_c, g.spm_d] : [o, 0, l(t) || 0], void u(t, c.join("."), e)
                }
                r && i && (r = r.replace(/&?\bspm=[^&#]*/g, "").replace(/&{2,}/g, "&").replace(/\?&/, "?").replace(/\?$/, "").replace(/\?#/, "#"), s(t, r))
            }
        }, function(t, e, n) {
            "use strict";
            var o = n(20);
            e.tryToGetHref = function(t) {
                var e;
                try {
                    e = o.trim(t.getAttribute("href", 2))
                } catch (t) {}
                return e || ""
            }
        }, function(t, e, n) {
            "use strict";

            function o(t) {
                return !!t && !!t.match(/^[^\?]*\balipay\.(?:com|net)\b/i)
            }

            function a(t) {
                return !!t && !!t.match(/^[^\?]*\balipay\.(?:com|net)\/.*\?.*\bsign=.*/i)
            }

            function r(t) {
                var e = location.href;
                return t && e.split("#")[0] === t.split("#")[0]
            }

            function i(t) {
                for (var e;
                    (t = t.parentNode) && "BODY" !== t.tagName;)
                    if (e = u.tryToGetAttribute(t, f)) return e;
                return ""
            }

            function s(t) {
                for (var e = ["mclick.simba.taobao.com", "click.simba.taobao.com", "click.tanx.com", "click.mz.simba.taobao.com", "click.tz.simba.taobao.com", "redirect.simba.taobao.com", "rdstat.tanx.com", "stat.simba.taobao.com", "s.click.taobao.com"], n = 0; n < e.length; n++)
                    if (t.indexOf(e[n]) !== -1) return !0;
                return !1
            }
            var u = n(27),
                c = n(9),
                l = n(106),
                p = n(25),
                g = n(22),
                f = "data-spm-protocol";
            e.is_ignore_spm = function(t) {
                var e = p.getGoldlogVal("_$") || {},
                    n = e.meta_info || {},
                    d = l.tryToGetHref(t),
                    _ = i(t),
                    h = u.tryToGetAttribute(t, f),
                    m = "i" === (h || _ || n.spm_protocol);
                if (!d || s(d)) return !0;
                var v = r(d) || g.isStartWithProtocol(d.toLowerCase()),
                    b = o(d) || a(d),
                    y = v || b;
                return !(m || !c.isStartWith(d, "#") && !y) || m
            }
        }, function(t, e, n) {
            "use strict";

            function o(t, e, n) {
                var o = u.parseSemicolonContent(e, {}, !0),
                    a = o.gostr || "",
                    r = o.locaid || "",
                    g = t.getAttribute("data-spm") || r,
                    f = "CLK",
                    d = o.gokey || "",
                    _ = p.spm_getSPMParam(t),
                    h = [_.a, _.b, _.c, g].join("."),
                    m = a + "." + h;
                0 !== m.indexOf("/") && (m = "/" + m);
                var v = [],
                    b = ["gostr", "locaid", "gmkey", "gokey", "spm-cnt", "cna"];
                for (var y in o) o.hasOwnProperty(y) && c.indexof(b, y) === -1 && v.push(y + "=" + o[y]);
                v.push("_g_et=" + n), v.push("autosend=1"), d && v.length > 0 && (d += "&"), d += v.length > 0 ? v.join("&") : "", goldlog && s.isFunction(goldlog.recordUdata) ? goldlog.recordUdata(m, f, d, "GET", function() {}) : l.logger({
                    msg: "goldlog.recordUdata is not function!"
                }), i.tryToSetAttribute(t, "data-spm-anchor-id", h)
            }

            function a(t, e) {
                var n = e;
                window.g_SPM && (g_SPM._current_spm = p.spm_getSPMParam(e));
                for (var a; e && "HTML" !== e.tagName;) {
                    a = i.tryToGetAttribute(e, "data-spm-click");
                    {
                        if (a) {
                            o(e, a, "mousedown" === t.type ? t.type : "tap");
                            break
                        }
                        e = e.parentNode
                    }
                }
                if (!a) {
                    var r = g.getGlobalSPMId(),
                        s = goldlog.getMetaInfo("aplus-getspmcd");
                    "function" == typeof s && s(n, t, r)
                }
            }
            var r = n(79),
                i = n(27),
                s = n(9),
                u = n(19),
                c = n(12),
                l = n(24),
                p = n(104),
                g = n(105);
            e.run = function(t) {
                t && t.isTouchEnabled ? r.on(document, "tap", a) : r.on(document, "mousedown", a)
            }
        }, function(t, e, n) {
            "use strict";

            function o() {
                for (var t = document.getElementsByTagName("iframe"), e = 0; e < t.length; e++) {
                    var n = t[e],
                        o = r.tryToGetAttribute(n, "data-spm-src");
                    if (!n.src && o) {
                        var a = s.spm_getSPMParam(n);
                        if (a) {
                            var u = [a.a, a.b, a.c, a.d];
                            a.e && u.push(a.e), a = u.join("."), n.src = i.spm_updateHrefWithSPMId(o, a)
                        } else n.src = o
                    }
                }
            }

            function a() {
                function t() {
                    e++, e > 10 && (n = 3e3), o(), setTimeout(t, n)
                }
                var e = 0,
                    n = 500;
                t()
            }
            var r = n(27),
                i = n(105),
                s = n(104);
            e.run = function(t) {
                t && !t.isTerminal && a()
            }
        }, function(t, e, n) {
            "use strict";

            function o(t, e) {
                for (var n, o = window; e && (n = e.tagName);) {
                    if ("A" === n || "AREA" === n) {
                        r.spm_spmAnchorChk(e, !1);
                        var a = o.g_SPM || (o.g_SPM = {}),
                            i = a._current_spm = r.spm_getSPMParam(e),
                            s = [];
                        try {
                            s = [i.a, i.b, i.c, i.d];
                            var u = i.e || goldlog.pvid || "";
                            u && s.push(u)
                        } catch (t) {}
                        break
                    }
                    if ("BODY" == n || "HTML" == n) break;
                    e = e.parentNode
                }
            }
            var a = n(79),
                r = n(104);
            e.run = function(t) {
                var e = document;
                t && t.isTouchEnabled ? a.on(e, "tapSpm", o) : (a.on(e, "mousedown", o), a.on(e, "keydown", o))
            }
        }, function(t, e, n) {
            "use strict";

            function o(t, e) {
                if (e || (e = p), p.evaluate) return e.evaluate(t, p, null, 9, null).singleNodeValue;
                for (var n, a = t.split("/"); !n && a.length > 0;) n = a.shift();
                var r, i = /^.+?\[@id='(.+?)']$/i,
                    s = /^(.+?)\[(\d+)]$/i;
                return (r = n.match(i)) ? e = e.getElementById(r[1]) : (r = n.match(s)) && (e = e.getElementsByTagName(r[1])[parseInt(r[2]) - 1]), e ? 0 === a.length ? e : o(a.join("/"), e) : null
            }

            function a() {
                var t = {};
                for (var e in l)
                    if (l.hasOwnProperty(e)) {
                        var n = o(e);
                        if (n) {
                            t[e] = 1;
                            var a = l[e],
                                r = "A" === n.tagName ? a.spmd : a.spmc;
                            s.tryToSetAttribute(n, "data-spm", r || "")
                        }
                    } for (var i in t) t.hasOwnProperty(i) && delete l[i]
            }

            function r() {
                if (!c && g.spmData) {
                    c = !0;
                    var t = g.spmData.data;
                    if (t && i.isArray(t)) {
                        for (var e = 0; e < t.length; e++) {
                            var n = t[e],
                                o = n.xpath;
                            o = o.replace(/^id\('(.+?)'\)(.*)/g, "//*[@id='$1']$2"), l[o] = {
                                spmc: n.spmc,
                                spmd: n.spmd
                            }
                        }
                        a()
                    }
                }
            }
            var i = n(9),
                s = n(27),
                u = n(79),
                c = !1,
                l = {},
                p = document,
                g = window;
            e.wh_updateXPathElements = a, e.init_wh = r, e.run = function() {
                u.DOMReady(function() {
                    r()
                })
            }
        }, function(t, e, n) {
            "use strict";

            function o() {
                var t, e = p.getParamFromUrl("utparamcnt", location.href);
                if (e) try {
                    t = e = JSON.parse(decodeURIComponent(e))
                } catch (t) {}
                return t
            }

            function a() {
                var t, e = d["aplus-utparam"];
                if (e)
                    if ("object" == typeof e) t = e;
                    else try {
                        t = JSON.parse(e)
                    } catch (t) {}
                return t
            }
            var r = n(11),
                i = n(53),
                s = n(54),
                u = n(32),
                c = n(42),
                l = n(9),
                p = n(52),
                g = n(4),
                f = n(26),
                d = f.getInfo(),
                _ = "complete";
            e.initGoldlog = function(t) {
                var e = window.goldlog || (window.goldlog = {}),
                    n = g.goldlog_path.run.create();
                e._ready_time = (new Date).getTime();
                for (var p in n) e[p] = n[p];
                var f = /TB\-PD/i.test(navigator.userAgent),
                    h = e._$ = e._$ || {},
                    m = o(),
                    v = a();
                return "object" == typeof m && (v && (m = l.assign(m, v)), d["aplus-utparam"] = m), h.meta_info = d, h.is_terminal = "aplus_wap" === g.script_name || f || "1" == d["aplus-terminal"], h.send_pv_count = 0, h.status = _, h.script_name = g.script_name, h.spm = {
                    data: {}
                }, h.page_referrer = i.getRefer(), h.pageLoadTime = (new Date).getTime(), e.lver = g.lver, e.nameStorage = s.nameStorage, c.haveNativeFlagInUA(), u.doPubMsg(["goldlogReady", _]), u.doCachePubs(["goldlogReady", _]), u.publishCNA(r.getCookie("cna")), t.init(), e
            }
        }]); /*! 2022-02-16 15:56:09 v8.15.21 */
        ! function(t) {
            function e(n) {
                if (r[n]) return r[n].exports;
                var a = r[n] = {
                    exports: {},
                    id: n,
                    loaded: !1
                };
                return t[n].call(a.exports, a, a.exports, e), a.loaded = !0, a.exports
            }
            var r = {};
            return e.m = t, e.c = r, e.p = "", e(0)
        }([function(t, e) {
            "use strict";
            ! function() {
                function t(t, e, r) {
                    t[_]((h ? "on" : "") + e, function(t) {
                        t = t || s.event;
                        var e = t.target || t.srcElement;
                        r(t, e)
                    }, !1)
                }

                function e() {
                    return /&?\bspm=[^&#]*/.test(location.href) ? location.href.match(/&?\bspm=[^&#]*/gi)[0].split("=")[1] : ""
                }

                function r(t, e) {
                    if (t && /&?\bspm=[^&#]*/.test(t) && (t = t.replace(/&?\bspm=[^&#]*/g, "").replace(/&{2,}/g, "&").replace(/\?&/, "?").replace(/\?$/, "")), !e) return t;
                    var r, n, a, i, o, c, p, s = "&";
                    if (t.indexOf("#") != -1 && (a = t.split("#"), t = a.shift(), n = a.join("#")), i = t.split("?"), o = i.length - 1, a = i[0].split("//"), a = a[a.length - 1].split("/"), c = a.length > 1 ? a.pop() : "", o > 0 && (r = i.pop(), t = i.join("?")), r && o > 1 && r.indexOf("&") == -1 && r.indexOf("%") != -1 && (s = "%26"), t = t + "?spm=" + e + (r ? s + r : "") + (n ? "#" + n : ""), p = c.indexOf(".") > -1 ? c.split(".").pop().toLowerCase() : "") {
                        if ({
                                png: 1,
                                jpg: 1,
                                jpeg: 1,
                                gif: 1,
                                bmp: 1,
                                swf: 1
                            }.hasOwnProperty(p)) return 0;
                        !r && o <= 1 && (n || {
                            htm: 1,
                            html: 1,
                            php: 1
                        }.hasOwnProperty(p) || (t += "&file=" + c))
                    }
                    return t
                }

                function n(t) {
                    function e(t) {
                        return t = t.replace(/refpos[=(%3D)]\w*/gi, c).replace(i, "%3D" + n + "%26" + a.replace("=", "%3D")).replace(o, n), a.length > 0 && (t += "&" + a), t
                    }
                    var r = window.location.href,
                        n = r.match(/mm_\d{0,24}_\d{0,24}_\d{0,24}/i),
                        a = r.match(/[&\?](pvid=[^&]*)/i),
                        i = new RegExp("%3Dmm_\\d+_\\d+_\\d+", "ig"),
                        o = new RegExp("mm_\\d+_\\d+_\\d+", "ig");
                    a = a && a[1] ? a[1] : "";
                    var c = r.match(/(refpos=(\d{0,24}_\d{0,24}_\d{0,24})?(,[a-z]+)?)(,[a-z]+)?/i);
                    return c = c && c[0] ? c[0] : "", n ? (n = n[0], e(t)) : t
                }

                function a(e) {
                    var r = s.KISSY;
                    r ? r.ready(e) : s.jQuery ? jQuery(m).ready(e) : "complete" === m.readyState ? e() : t(s, "load", e)
                }

                function i(t, e) {
                    return t && t.getAttribute ? t.getAttribute(e) || "" : ""
                }

                function o(t) {
                    if (t) {
                        var e, r = g.length;
                        for (e = 0; e < r; e++)
                            if (t.indexOf(g[e]) > -1) return !0;
                        return !1
                    }
                }

                function c(t, e) {
                    if (t && /&?\bspm=[^&#]*/.test(t) && (t = t.replace(/&?\bspm=[^&#]*/g, "").replace(/&{2,}/g, "&").replace(/\?&/, "?").replace(/\?$/, "")), !e) return t;
                    var r, n, a, i, o, c, p, s = "&";
                    if (t.indexOf("#") != -1 && (a = t.split("#"), t = a.shift(), n = a.join("#")), i = t.split("?"), o = i.length - 1, a = i[0].split("//"), a = a[a.length - 1].split("/"), c = a.length > 1 ? a.pop() : "", o > 0 && (r = i.pop(), t = i.join("?")), r && o > 1 && r.indexOf("&") == -1 && r.indexOf("%") != -1 && (s = "%26"), t = t + "?spm=" + e + (r ? s + r : "") + (n ? "#" + n : ""), p = c.indexOf(".") > -1 ? c.split(".").pop().toLowerCase() : "") {
                        if ({
                                png: 1,
                                jpg: 1,
                                jpeg: 1,
                                gif: 1,
                                bmp: 1,
                                swf: 1
                            }.hasOwnProperty(p)) return 0;
                        !r && o <= 1 && (n || {
                            htm: 1,
                            html: 1,
                            shtml: 1,
                            php: 1
                        }.hasOwnProperty(p) || (t += "&__file=" + c))
                    }
                    return t
                }

                function p(t) {
                    if (o(t.href)) {
                        var r = i(t, u);
                        if (!r) {
                            var n = l()(t),
                                a = [n.a, n.b, n.c, n.d].join(".");
                            n.e && (n += "." + n.e), d && (a = [n.a || "0", n.b || "0", n.c || "0", n.d || "0"].join("."), a = (e() || "0.0.0.0.0") + "_" + a), t.href = c(t.href, a), t.setAttribute(u, a)
                        }
                    }
                }
                var s = window,
                    m = document;
                if (1 !== s.aplus_spmact) {
                    s.aplus_spmact = 1;
                    var f = function() {
                            return {
                                a: 0,
                                b: 0,
                                c: 0,
                                d: 0,
                                e: 0
                            }
                        },
                        l = function() {
                            return s.g_SPM && s.g_SPM.getParam ? s.g_SPM.getParam : f
                        },
                        d = !0;
                    try {
                        d = self.location != top.location
                    } catch (t) {}
                    var u = "data-spm-act-id",
                        g = ["mclick.simba.taobao.com", "click.simba.taobao.com", "click.tanx.com", "click.mz.simba.taobao.com", "click.tz.simba.taobao.com", "redirect.simba.taobao.com", "rdstat.tanx.com", "stat.simba.taobao.com", "s.click.taobao.com"],
                        h = !!m.attachEvent,
                        b = "attachEvent",
                        v = "addEventListener",
                        _ = h ? b : v;
                    t(m, "mousedown", function(t, e) {
                        for (var r, n = 0; e && (r = e.tagName);) {
                            if ("A" == r || "AREA" == r) {
                                p(e);
                                break
                            }
                            if ("BODY" == r || "HTML" == r) break;
                            e = e.parentNode, n += 1
                        }
                    }), a(function() {
                        for (var t, a, o = document.getElementsByTagName("iframe"), c = 0; c < o.length; c++) {
                            t = i(o[c], "mmsrc"), a = i(o[c], "mmworked");
                            var p = l()(o[c]),
                                s = [p.a || "0", p.b || "0", p.c || "0", p.d || "0", p.e || "0"].join(".");
                            t && !a ? (d && (s = [p.a || "0", p.b || "0", p.c || "0", p.d || "0"].join("."), s = e() + "_" + s), o[c].src = r(n(t), s), o[c].setAttribute("mmworked", "mmworked")) : o[c].setAttribute(u, s)
                        }
                    })
                }
            }()
        }]);
    </script>
    <script src="https://mai.taobao.com/home/get_seller_menu.htm?t=1679120252830" async=""></script>
    <script src="https://assets.alicdn.com/s/kissy/1.2.0/component-min.js?t=20130128171456" async="" charset="utf-8"></script>
    <script src="https://assets.alicdn.com/apps/sportal/2.0/common/js/tmall-header-min.js?t=20120620.js" async=""></script>
    <script src="//tmm.taobao.com/member/query_member_top.do?callback=_initMemberInfoCallback&amp;t=1679120251969" async=""></script>
    <meta name="data-spm" content="a1z09">
    <title>已卖出的宝贝</title>
    <script>
        window.g_config = {
            appId: 26,
            startTime: new Date().valueOf()
        };
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="description" content="中国最大、最安全的网上交易社区,尽享淘宝乐趣！">
    <meta name="keywords" content="淘宝,掏宝,网上购物,C2C,在线交易,交易市场,网上交易,交易市场,网上买,网上卖，购物网站,团购,网上贸易,安全购物,电子商务,放心买,供应,买卖信息,网店,一口价,拍卖,网上开店,网络购物,打折,免费开店,网购,频道,店铺">
    <link rel="shortcut icon" href="//img.alicdn.com/favicon.ico" type="image/x-icon">
    <script src="//g.alicdn.com/sd/baxia/1.1.1/baxiaCommon.js"></script>










    <link href="//g.alicdn.com/sj/sportal/1.0.0/??2.0/common/css/tmall-global-v2-min.css,2.0/common/css/tmall-head-footer-v2-min.css,3.0/common/css/base-min.css,3.0/common/css/menu-min.css?t=20120702.css" rel="stylesheet">
    <script src="//assets.alicdn.com/s/kissy/1.2.0/kissy-min.js?t=20130522_20120702.js"></script>
    <script src="//g.alicdn.com/sj/sportal/1.0.0/2.0/common/js/tmall-global-min.js"></script>





    <link rel="stylesheet" href="//g.alicdn.com/tp/sold/1.8.16/style.css">

    <style>
        .screen-wrapper {
            padding: 20px;
        }

        .screen-wrapper>.navigation {
            width: auto;
        }
    </style>
    <script src="//g.alicdn.com/??/AWSC/AWSC/awsc.js,/sd/baxia-entry/baxiaCommon.js"></script>
    <script async="" src="//log.mmstat.com/eg.js?t=1679120252922"></script>
    <style>
        .ww-light {
            overflow: hidden;
        }

        .ww-block {
            display: block;
            margin-top: 3px;
        }

        .ww-inline {
            display: inline-block;
            vertical-align: text-bottom;
        }

        .ww-light a {
            background-image: url("//img.alicdn.com/tps/i1/T15AD7FFFaXXbJnvQ_-130-60.gif");
            background-image: -webkit-image-set(url("//img.alicdn.com/tps/i1/T15AD7FFFaXXbJnvQ_-130-60.gif") 1x, url("//img.alicdn.com/tps/i4/T1Rsz7FPJaXXbZhKn7-520-240.gif") 4x);
            background-image: -moz-image-set(url("//img.alicdn.com/tps/i1/T15AD7FFFaXXbJnvQ_-130-60.gif") 1x, url("//img.alicdn.com/tps/i4/T1Rsz7FPJaXXbZhKn7-520-240.gif") 4x);
            background-image: -o-image-set(url("//img.alicdn.com/tps/i1/T15AD7FFFaXXbJnvQ_-130-60.gif") 1x, url("//img.alicdn.com/tps/i4/T1Rsz7FPJaXXbZhKn7-520-240.gif") 4x);
            background-image: -ms-image-set(url("//img.alicdn.com/tps/i1/T15AD7FFFaXXbJnvQ_-130-60.gif") 1x, url("//img.alicdn.com/tps/i4/T1Rsz7FPJaXXbZhKn7-520-240.gif") 4x);
            text-decoration: none !important;
            width: 20px;
            height: 20px;
            zoom: 1;
        }

        .ww-large a {
            width: 67px;
        }

        a.ww-offline {
            background-position: 0 -20px;
        }

        a.ww-mobile {
            background-position: 0 -40px;
        }

        .ww-small .ww-online {
            background-position: -80px 0;
        }

        .ww-small .ww-offline {
            background-position: -80px -20px;
        }

        .ww-small .ww-mobile {
            background-position: -80px -40px;
        }

        .ww-static .ww-online {
            background-position: -110px 0;
        }

        .ww-static .ww-offline {
            background-position: -110px -20px;
        }

        .ww-static .ww-mobile {
            background-position: -110px -40px;
        }

        .ww-light a span {
            display: none;
        }
    </style>
    <script src="//g.alicdn.com/everywhere/everywhere-entry/index.js" charset="UTF-8" id="everywhere"></script>
    <style id="ks-suggest-style">
        .ks-suggest-container {
            background: white;
            border: 1px solid #999;
            z-index: 99999
        }

        .ks-suggest-shim {
            z-index: 99998
        }

        .ks-suggest-container li {
            color: #404040;
            padding: 1px 0 2px;
            font-size: 12px;
            line-height: 18px;
            float: left;
            width: 100%
        }

        .ks-suggest-container .ks-selected {
            background-color: #39F;
            cursor: default
        }

        .ks-suggest-key {
            float: left;
            text-align: left;
            padding-left: 5px
        }

        .ks-suggest-result {
            float: right;
            text-align: right;
            padding-right: 5px;
            color: green
        }

        .ks-suggest-container .ks-selected span {
            color: #FFF;
            cursor: default
        }

        .ks-suggest-footer {
            padding: 0 5px 5px
        }

        .ks-suggest-closebtn {
            float: right
        }

        .ks-suggest-container li,
        .ks-suggest-footer {
            overflow: hidden;
            zoom: 1;
            clear: both
        }

        .ks-suggest-container {
            *margin-left: 2px;
            _margin-left: -2px;
            _margin-top: -3px
        }
    </style>
    <script crossorigin="" referrerpolicy="unsafe-url" src="//g.alicdn.com/secdev/sufei_data/3.9.10/index.js" id="aplus-sufei"></script>
    <script crossorigin="" referrerpolicy="unsafe-url" src="//g.alicdn.com??xlly/spl/rp.js,secdev/nsv/1.0.87/ns_f_95_3_f.js?v=1"></script>
    <script crossorigin="" referrerpolicy="unsafe-url" src="//g.alicdn.com/AWSC/et/1.62.7/et_f.js"></script>
    <script charset="utf-8" crossorigin="true" src="//g.alicdn.com/service-hall/scenario-widget/1.6.0/index.js"></script>
    <style>
        .SW__src-components-entries-embedded-Content-index-module__content--1I1sT {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .SW__src-components-entries-embedded-Content-index-module__content--1I1sT .sw-page {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            display: none;
        }

        .SW__src-components-entries-embedded-Content-index-module__content--1I1sT .sw-page.sw-show {
            display: block;
        }

        .SW__src-components-entries-embedded-Content-index-module__content--1I1sT .sw-page iframe {
            position: relative;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
    <style>
        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI {
            cursor: pointer;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 9px;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .sw-page {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            border-radius: 9px;
            box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
            opacity: 0;
            z-index: 0;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .sw-page.sw-show {
            opacity: 1;
            z-index: 1;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .sw-page iframe {
            position: relative;
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 9px;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__popupContainer--2OYNC {
            position: fixed;
            box-sizing: content-box !important;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__popupContainer--2OYNC .SW__src-components-entries-widget-Detail-index-module__content--1SW1N {
            position: absolute;
            width: calc(100% - 16px);
            height: 100%;
            border-radius: 12px;
            background-color: #fff;
            box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__back--NjWgo {
            position: relative;
            width: 60px;
            height: 60px;
            background-color: #3d7fff;
            border-radius: 50%;
            box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-box-pack: center;
            -webkit-box-align: center;
            transition: background-color 300ms;
            font-size: 14px;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__back--NjWgo:hover {
            background-color: #0a5dff;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__back--NjWgo>span {
            margin-top: 4px;
            color: #fff;
            font-size: 14px;
            display: block;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__back--NjWgo>img {
            margin-top: -16px;
            width: 48px;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__back--NjWgo.SW__src-components-entries-widget-Detail-index-module__custom--2jKf4>img {
            margin-top: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__back--NjWgo>i {
            display: block;
            font-size: 24px;
            color: #fff;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__minimum--1ohSg.SW__src-components-entries-widget-Detail-index-module__servicing--vTCY4 {
            animation: SW__src-components-entries-widget-Detail-index-module__pulse-2--2w1sD 2s infinite;
        }

        .SW__src-components-entries-widget-Detail-index-module__detail--1xRYI .SW__src-components-entries-widget-Detail-index-module__minimum--1ohSg .SW__src-components-entries-widget-Detail-index-module__servicer--6RuVw {
            pointer-events: none;
            margin-top: 0;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: contain;
            animation: SW__src-components-entries-widget-Detail-index-module__pulse-1--3x_3P 2s infinite;
        }

        @keyframes SW__src-components-entries-widget-Detail-index-module__pulse-1--3x_3P {
            0% {
                box-shadow: 0 0 0 0 rgba(67, 127, 255, 0.14);
            }

            15% {
                box-shadow: 0 0 0 8px rgba(67, 127, 255, 0.14);
            }

            45% {
                box-shadow: 0 0 0 8px rgba(67, 127, 255, 0.14);
            }

            60% {
                box-shadow: 0 0 0 0x rgba(67, 127, 255, 0.14);
            }
        }

        @keyframes SW__src-components-entries-widget-Detail-index-module__pulse-2--2w1sD {
            0% {
                box-shadow: 0 0 0 0 rgba(67, 127, 255, 0.1);
            }

            20% {
                box-shadow: 0 0 0 16px rgba(67, 127, 255, 0.1);
            }

            40% {
                box-shadow: 0 0 0 16px rgba(67, 127, 255, 0.1);
            }

            45% {
                box-shadow: 0 0 0 8px rgba(67, 127, 255, 0.1);
            }

            60% {
                box-shadow: 0 0 0 0x rgba(67, 127, 255, 0.1);
            }
        }
    </style>
    <style>
        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            -webkit-box-align: end;
            -webkit-box-pack: end;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3 {
            position: relative;
            width: 60px;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC {
            display: none;
            position: fixed;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o {
            position: relative;
            display: -webkit-box;
            width: 100%;
            -webkit-box-orient: vertical;
            border-radius: 12px;
            background-color: #fff;
            box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j {
            display: -webkit-box;
            -webkit-box-flex: 1;
            -webkit-box-align: start;
            padding: 12px 16px;
            border-bottom: 1px solid #f0f2f5;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j.SW__src-components-entries-widget-Ball-index-module__fixClose--2TSUa {
            padding: 12px 24px 12px 16px;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j>.SW__src-components-entries-widget-Ball-index-module__tag--1DlTC {
            display: block;
            color: #1779f2;
            background-color: #e2efff;
            border-radius: 2px;
            padding: 2px 4px;
            font-size: 12px;
            margin-right: 8px;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j>.SW__src-components-entries-widget-Ball-index-module__text--38zD7 {
            font-size: 14px;
            color: #3e4a5a;
            display: -webkit-box;
            -webkit-box-flex: 1;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupBar--2P8Li {
            padding: 12px 16px;
            display: -webkit-box;
            -webkit-box-orient: horizontal;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupBar--2P8Li>span {
            display: block;
            text-align: center;
            -webkit-box-flex: 1;
            font-size: 14px;
            color: #3d7fff;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupBar--2P8Li>span>i {
            margin-right: 8px;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupBar--2P8Li>span:nth-child(2) {
            border-left: 1px solid #f0f2f5;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__popupBar--2P8Li>span:hover {
            color: #0049d6;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__close--201P8 {
            position: absolute;
            top: 4px;
            right: 4px;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3>.SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC>.SW__src-components-entries-widget-Ball-index-module__list--2oZ8o>.SW__src-components-entries-widget-Ball-index-module__close--201P8>i {
            font-size: 20px;
            color: rgba(0, 0, 0, 0.25);
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3 .SW__src-components-entries-widget-Ball-index-module__contact--La120 {
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #3d7fff;
            box-shadow: 0px 0px 12px 4px rgba(0, 0, 0, 0.1);
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-box-pack: center;
            -webkit-box-align: center;
            transition: background-color 300ms;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3 .SW__src-components-entries-widget-Ball-index-module__contact--La120:hover {
            background-color: #0a5dff;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3 .SW__src-components-entries-widget-Ball-index-module__contact--La120>span {
            margin-top: 4px;
            color: #fff;
            font-size: 14px;
            display: block;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3 .SW__src-components-entries-widget-Ball-index-module__contact--La120>img {
            margin-top: -16px;
            width: 48px;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3 .SW__src-components-entries-widget-Ball-index-module__contact--La120 .SW__src-components-entries-widget-Ball-index-module__badge--1-P2h {
            position: absolute;
            top: -12px;
            right: 0;
            background-color: #f00;
            border-radius: 8px;
            font-size: 12px;
            padding: 0 4px;
            min-width: 8px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .SW__src-components-entries-widget-Ball-index-module__ball--13UXn>.SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3 .SW__src-components-entries-widget-Ball-index-module__contact--La120.SW__src-components-entries-widget-Ball-index-module__custom--3yenL>img {
            margin-top: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }
    </style>
    <style>
        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- {
            position: relative;
            height: auto;
            border-radius: 8px;
            display: flex;
            overflow: hidden;
            flex-direction: column;
            background-color: #eee;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__topBar--19NcB {
            display: flex;
            flex-direction: row;
            padding: 12px 8px;
            background-color: #3d7fff;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__topBar--19NcB .SW__src-components-entries-widget-Summary-index-module__search--3rzVB {
            display: flex;
            flex: 1;
            padding: 8px;
            border-radius: 6px;
            background-color: #fff;
            line-height: 16px;
            cursor: text;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__topBar--19NcB .SW__src-components-entries-widget-Summary-index-module__search--3rzVB>img {
            margin-right: 7px;
            object-fit: contain;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__topBar--19NcB .SW__src-components-entries-widget-Summary-index-module__search--3rzVB>span {
            font-size: 14px;
            color: rgba(0, 0, 0, 0.45);
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__topBar--19NcB .SW__src-components-entries-widget-Summary-index-module__bell--2nzua {
            position: relative;
            padding-top: 5px;
            margin-left: 4px;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__topBar--19NcB .SW__src-components-entries-widget-Summary-index-module__bell--2nzua .sh-icon {
            font-size: 20px;
            color: #fff;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__topBar--19NcB .SW__src-components-entries-widget-Summary-index-module__bell--2nzua .SW__src-components-entries-widget-Summary-index-module__badge--rFGAr {
            position: absolute;
            top: -2px;
            right: -4px;
            background-color: #f00;
            border-radius: 8px;
            min-width: 8px;
            text-align: center;
            font-size: 12px;
            padding: 0 4px;
            color: #fff;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0 {
            max-height: 344px;
            padding: 8px 4px 0 8px;
            overflow-y: scroll;
            -webkit-box-flex: 1;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0::-webkit-scrollbar-track {
            background-color: transparent;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0::-webkit-scrollbar-thumb {
            background-color: #ddd;
            border-radius: 2px;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0::-webkit-scrollbar {
            width: 4px;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0 .SW__src-components-entries-widget-Summary-index-module__main--3fDNN {
            padding: 27px 6px 0;
            box-sizing: border-box;
            background-color: #fff;
            border-top-right-radius: 12px;
            border-top-left-radius: 12px;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0 .SW__src-components-entries-widget-Summary-index-module__main--3fDNN .SW__src-components-entries-widget-Summary-index-module__list--3KyE6 .SW__src-components-entries-widget-Summary-index-module__item--dF73R {
            display: flex;
            margin-bottom: 24px;
            align-items: flex-start;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0 .SW__src-components-entries-widget-Summary-index-module__main--3fDNN .SW__src-components-entries-widget-Summary-index-module__list--3KyE6 .SW__src-components-entries-widget-Summary-index-module__item--dF73R:before {
            content: '';
            width: 5px;
            height: 5px;
            border-radius: 2.5px;
            background-color: #3d7fff;
            margin-right: 6px;
            margin-top: 8px;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0 .SW__src-components-entries-widget-Summary-index-module__main--3fDNN .SW__src-components-entries-widget-Summary-index-module__list--3KyE6 .SW__src-components-entries-widget-Summary-index-module__item--dF73R>span {
            flex: 1;
            font-size: 14px;
            color: #3e4a5a;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0 .SW__src-components-entries-widget-Summary-index-module__main--3fDNN .SW__src-components-entries-widget-Summary-index-module__list--3KyE6 .SW__src-components-entries-widget-Summary-index-module__item--dF73R>span .SW__src-components-entries-widget-Summary-index-module__tag--3BQdZ {
            display: inline;
            color: #1779f2;
            background-color: #e2efff;
            border-radius: 2px;
            padding: 2px 4px;
            font-size: 12px;
            margin-left: 4px;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__content--3iao0 .SW__src-components-entries-widget-Summary-index-module__main--3fDNN .SW__src-components-entries-widget-Summary-index-module__list--3KyE6 .SW__src-components-entries-widget-Summary-index-module__item--dF73R:last-child {
            margin-bottom: 0;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__btnBar--3aXuo {
            display: -webkit-box;
            position: sticky;
            bottom: 0;
            padding: 12px;
            background-color: #fff;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            margin: 0 8px 8px;
        }

        .SW__src-components-entries-widget-Summary-index-module__summary--24LZ- .SW__src-components-entries-widget-Summary-index-module__btnBar--3aXuo .SW__src-components-entries-widget-Summary-index-module__btn--1Vujf {
            -webkit-box-flex: 1;
            padding: 8px;
            border-radius: 4px;
            font-size: 16px;
            color: #fff;
            background-image: linear-gradient(to right, #76b6fe, #3d7fff);
            text-align: center;
            box-sizing: border-box;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-Summary-index-module__strongRemindBalloon--1ysCO {
            padding: 4px;
            z-index: 1000000;
            background-color: #fff;
            position: fixed;
            font-size: 12px;
            display: block;
            width: max-content;
            border: 1px solid #eee;
            border-radius: 4px;
            max-width: 148px;
            transform: translate(calc(-100% + 29px), calc(-100% - 40px));
            cursor: pointer;
        }

        @font-face {
            font-family: 'shIconfont';
            /* Project id 1937921 */
            src: url('//at.alicdn.com/t/a/font_1937921_bsaua0cacvg.woff2?t=1664192638895') format('woff2'), url('//at.alicdn.com/t/a/font_1937921_bsaua0cacvg.woff?t=1664192638895') format('woff'), url('//at.alicdn.com/t/a/font_1937921_bsaua0cacvg.ttf?t=1664192638895') format('truetype');
        }

        .SW__src-components-entries-widget-Summary-index-module__strongRemindBalloon--1ysCO .sh-icon {
            font-family: 'shIconfont';
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -webkit-text-stroke-width: 0.2px;
            -moz-osx-font-smoothing: grayscale;
            color: #000 !important;
            font-size: 12px !important;
        }

        .SW__src-components-entries-widget-Summary-index-module__strongRemindBalloon--1ysCO .SW__src-components-entries-widget-Summary-index-module__content--3iao0 {
            word-break: break-all;
        }

        .SW__src-components-entries-widget-Summary-index-module__strongRemindBalloon--1ysCO .SW__src-components-entries-widget-Summary-index-module__content--3iao0::after {
            content: '';
            width: 0;
            height: 0;
            border-color: transparent;
            border-width: 10px;
            border-top-color: #fff;
            border-style: solid;
            position: absolute;
            bottom: -20px;
        }

        .SW__src-components-entries-widget-Summary-index-module__strongRemindBalloon--1ysCO .SW__src-components-entries-widget-Summary-index-module__tag--3BQdZ {
            display: inline-block;
            margin-right: 4px;
            border-radius: 3px;
            padding: 2px 3px;
            font-size: 12px;
            line-height: 12px;
            font-weight: bold;
            background-color: #edf3ff;
            color: #3d7fff;
        }

        .SW__src-components-entries-widget-Summary-index-module__strongRemindBalloon--1ysCO .SW__src-components-entries-widget-Summary-index-module__tag--3BQdZ.SW__src-components-entries-widget-Summary-index-module__warn--1XrUV {
            background-color: #ffeded;
            color: #ff3333;
        }

        .SW__src-components-entries-widget-Summary-index-module__strongRemindBalloon--1ysCO .SW__src-components-entries-widget-Summary-index-module__close--3Q8_9 {
            display: inline-block;
            padding: 1px;
            margin-left: 5px;
        }

        .SW__src-components-entries-widget-Summary-index-module__strongRemindBalloon--1ysCO::after {
            background-color: #fff !important;
        }
    </style>
    <style>
        .fusion-media-box_components-media-box_thumbnail-container {
            display: flex;
            flex-direction: row
        }

        .fusion-media-box_components-media-box_album-cover {
            font-family: fusionMediaBoxIconFont;
            writing-mode: initial;
            position: relative;
            margin-left: 8px;
            width: 50px;
            height: 50px;
            transition: transform cubic-bezier(.23, 1, .32, 1) .3s
        }

        .fusion-media-box_components-media-box_album-cover:before {
            content: "\e6a3";
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -16px 0 0 -16px;
            width: 32px;
            height: 32px;
            font-size: 16px;
            background-color: #3339;
            border-radius: 16px;
            z-index: 2;
            color: #fff;
            text-align: center;
            line-height: 32px;
            cursor: pointer;
            opacity: 0;
            transform: scale(1.2);
            transition-property: transform, opacity;
            transition-duration: .3s;
            transition-timing-function: cubic-bezier(.23, 1, .32, 1);
            transition-delay: 0s
        }

        .fusion-media-box_components-media-box_album-cover:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #0000;
            z-index: 1;
            transition-property: background-color;
            transition-duration: .3s;
            transition-timing-function: cubic-bezier(.23, 1, .32, 1);
            transition-delay: 0s
        }

        .fusion-media-box_components-media-box_album-cover:hover {
            transform: scale(1.1)
        }

        .fusion-media-box_components-media-box_album-cover:hover:before {
            opacity: 1;
            transform: scale(1)
        }

        .fusion-media-box_components-media-box_album-cover:hover:after {
            background-color: #0000001a
        }

        @font-face {
            font-family: fusionMediaBoxIconFont;
            src: url(//at.alicdn.com/t/a/font_3836394_l9361xxpg1.woff2?t=1677481816612) format("woff2"), url(//at.alicdn.com/t/a/font_3836394_l9361xxpg1.woff?t=1677481816612) format("woff"), url(//at.alicdn.com/t/a/font_3836394_l9361xxpg1.ttf?t=1677481816612) format("truetype")
        }

        .fusion-media-box_components-custom-icon-icon-module-less_fusion-media-box-icon-font {
            font-family: fusionMediaBoxIconFont;
            font-size: 16px;
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -webkit-text-stroke-width: .2px;
            -moz-osx-font-smoothing: grayscale
        }

        .fusion-media-box_components-media-view_album-overlay {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #000000a6;
            z-index: 1000
        }

        .fusion-media-box_components-media-view_album-overlay-hide {
            display: none
        }

        .fusion-media-box_components-media-view_album-control {
            position: absolute;
            z-index: 1;
            top: 50%;
            width: 48px;
            height: 48px;
            background-color: #0006;
            color: #fff;
            line-height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .fusion-media-box_components-media-view_album-control:hover {
            background-color: #0009;
            text-decoration: none;
            cursor: pointer
        }

        .fusion-media-box_components-media-view_album-control-disabled {
            color: #fff3
        }

        .fusion-media-box_components-media-view_album-control-disabled:hover {
            background-color: #0006;
            cursor: not-allowed
        }

        .fusion-media-box_components-media-view_albumprev {
            left: 48px
        }

        .fusion-media-box_components-media-view_albumnext {
            right: 48px
        }

        .fusion-media-box_components-media-view_album-stage {
            height: 100%;
            position: relative
        }

        .fusion-media-box_components-media-view_album-func-button {
            position: absolute;
            height: 56px;
            top: 0;
            z-index: 1003;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, .25);
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: center;
            padding: 0 56px 0 32px
        }

        .fusion-media-box_components-media-view_album-func-button-item {
            width: 32px;
            height: 32px;
            color: #fff;
            cursor: pointer;
            position: relative;
            margin-left: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 4px
        }

        .fusion-media-box_components-media-view_album-func-button-item:hover {
            background-color: #fff3
        }

        .fusion-media-box_components-media-view_deep-album-item {
            position: relative;
            width: 100%;
            height: 100%
        }

        .fusion-media-box_components-media-view_item-container {
            transition: transform fadeIn;
            transition-property: transform;
            transition-duration: .3s;
            transition-timing-function: cubic-bezier(.23, 1, .32, 1);
            transition-delay: 0s;
            position: absolute;
            inset: 56px 0 0;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .fusion-media-box_components-media-view_album-close {
            position: absolute;
            width: 56px;
            height: 56px;
            z-index: 1004;
            cursor: pointer;
            right: 0;
            top: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .fusion-media-box_components-media-view_custom-divider {
            display: inline-block;
            width: 1px;
            height: 10px;
            background: #dcdee3;
            margin-left: 10px
        }

        @keyframes fusion-media-box_components-media-view-animate-module-less_album-zoom-in {
            0% {
                opacity: .5;
                transform: scale(.2)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        @keyframes fusion-media-box_components-media-view-animate-module-less_album-zoom-out {
            0% {
                opacity: .8;
                transform: scale(1)
            }

            to {
                opacity: 0;
                transform: scale(.2)
            }
        }

        .fusion-media-box_components-media-view-animate-module-less_album-overlay-enter,
        .fusion-media-box_components-media-view-animate-module-less_album-overlay-appear {
            transform: scale(.2);
            opacity: .5;
            animation-duration: .3s;
            animation-fill-mode: both;
            animation-play-state: paused
        }

        .fusion-media-box_components-media-view-animate-module-less_album-overlay-enter-active,
        .fusion-media-box_components-media-view-animate-module-less_album-overlay-appear-active {
            animation-name: fusion-media-box_components-media-view-animate-module-less_album-zoom-in;
            animation-play-state: running
        }

        .fusion-media-box_components-media-view-animate-module-less_album-overlay-leave {
            transform: scale(1);
            opacity: .8;
            animation-duration: .3s;
            animation-fill-mode: both;
            animation-play-state: paused
        }

        .fusion-media-box_components-media-view-animate-module-less_album-overlay-leave-active {
            animation-name: fusion-media-box_components-media-view-animate-module-less_album-zoom-out;
            animation-play-state: running
        }

        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInN0eWxlLmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSwyREFBMkQsWUFBWSxDQUFDLGtCQUFrQixDQUFDLG1EQUFtRCxrQ0FBa0MsQ0FBQyxvQkFBb0IsQ0FBQyxpQkFBaUIsQ0FBQyxlQUFlLENBQUMsVUFBVSxDQUFDLFdBQVcsQ0FBQyxrREFBa0QsQ0FBQywwREFBMEQsZUFBZSxDQUFDLGlCQUFpQixDQUFDLFFBQVEsQ0FBQyxPQUFPLENBQUMsc0JBQXNCLENBQUMsVUFBVSxDQUFDLFdBQVcsQ0FBQyxjQUFjLENBQUMsc0JBQXNCLENBQUMsa0JBQWtCLENBQUMsU0FBUyxDQUFDLFVBQVUsQ0FBQyxpQkFBaUIsQ0FBQyxnQkFBZ0IsQ0FBQyxjQUFjLENBQUMsU0FBUyxDQUFDLG9CQUFvQixDQUFDLHFDQUFxQyxDQUFDLHVCQUF1QixDQUFDLG9EQUFvRCxDQUFDLG1CQUFtQixDQUFDLHlEQUF5RCxVQUFVLENBQUMsaUJBQWlCLENBQUMsTUFBTSxDQUFDLEtBQUssQ0FBQyxVQUFVLENBQUMsV0FBVyxDQUFDLHNCQUFzQixDQUFDLFNBQVMsQ0FBQyxvQ0FBb0MsQ0FBQyx1QkFBdUIsQ0FBQyxvREFBb0QsQ0FBQyxtQkFBbUIsQ0FBQyx5REFBeUQsb0JBQW9CLENBQUMsZ0VBQWdFLFNBQVMsQ0FBQyxrQkFBa0IsQ0FBQywrREFBK0QsMEJBQTBCLENBQUMsV0FBVyxrQ0FBa0MsQ0FBQyx1UUFBdVEsQ0FBQyxxRkFBcUYsa0NBQWtDLENBQUMsY0FBYyxDQUFDLGlCQUFpQixDQUFDLGtDQUFrQyxDQUFDLDhCQUE4QixDQUFDLGlDQUFpQyxDQUFDLHNEQUFzRCxjQUFjLENBQUMsTUFBTSxDQUFDLEtBQUssQ0FBQyxVQUFVLENBQUMsV0FBVyxDQUFDLDBCQUEwQixDQUFDLFlBQVksQ0FBQywyREFBMkQsWUFBWSxDQUFDLHNEQUFzRCxpQkFBaUIsQ0FBQyxTQUFTLENBQUMsT0FBTyxDQUFDLFVBQVUsQ0FBQyxXQUFXLENBQUMsc0JBQXNCLENBQUMsVUFBVSxDQUFDLGdCQUFnQixDQUFDLGlCQUFpQixDQUFDLFlBQVksQ0FBQyxzQkFBc0IsQ0FBQyxrQkFBa0IsQ0FBQyw0REFBNEQsc0JBQXNCLENBQUMsb0JBQW9CLENBQUMsY0FBYyxDQUFDLCtEQUErRCxXQUFXLENBQUMscUVBQXFFLHNCQUFzQixDQUFDLGtCQUFrQixDQUFDLGtEQUFrRCxTQUFTLENBQUMsa0RBQWtELFVBQVUsQ0FBQyxvREFBb0QsV0FBVyxDQUFDLGlCQUFpQixDQUFDLDBEQUEwRCxpQkFBaUIsQ0FBQyxXQUFXLENBQUMsS0FBSyxDQUFDLFlBQVksQ0FBQyxNQUFNLENBQUMsT0FBTyxDQUFDLDBCQUEwQixDQUFDLFlBQVksQ0FBQyxrQkFBa0IsQ0FBQyx3QkFBd0IsQ0FBQyxrQkFBa0IsQ0FBQyxxQkFBcUIsQ0FBQywrREFBK0QsVUFBVSxDQUFDLFdBQVcsQ0FBQyxVQUFVLENBQUMsY0FBYyxDQUFDLGlCQUFpQixDQUFDLGVBQWUsQ0FBQyxZQUFZLENBQUMsc0JBQXNCLENBQUMsa0JBQWtCLENBQUMsaUJBQWlCLENBQUMscUVBQXFFLHNCQUFzQixDQUFDLHdEQUF3RCxpQkFBaUIsQ0FBQyxVQUFVLENBQUMsV0FBVyxDQUFDLHVEQUF1RCwyQkFBMkIsQ0FBQyw2QkFBNkIsQ0FBQyx1QkFBdUIsQ0FBQyxvREFBb0QsQ0FBQyxtQkFBbUIsQ0FBQyxpQkFBaUIsQ0FBQyxjQUFjLENBQUMsV0FBVyxDQUFDLGNBQWMsQ0FBQyxlQUFlLENBQUMsWUFBWSxDQUFDLHNCQUFzQixDQUFDLGtCQUFrQixDQUFDLG9EQUFvRCxpQkFBaUIsQ0FBQyxVQUFVLENBQUMsV0FBVyxDQUFDLFlBQVksQ0FBQyxjQUFjLENBQUMsT0FBTyxDQUFDLEtBQUssQ0FBQyxVQUFVLENBQUMsWUFBWSxDQUFDLHNCQUFzQixDQUFDLGtCQUFrQixDQUFDLHVEQUF1RCxvQkFBb0IsQ0FBQyxTQUFTLENBQUMsV0FBVyxDQUFDLGtCQUFrQixDQUFDLGdCQUFnQixDQUFDLG9GQUFvRixHQUFHLFVBQVUsQ0FBQyxtQkFBbUIsQ0FBQyxHQUFHLFNBQVMsQ0FBQyxrQkFBa0IsQ0FBQyxDQUFDLHFGQUFxRixHQUFHLFVBQVUsQ0FBQyxrQkFBa0IsQ0FBQyxHQUFHLFNBQVMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDLGlLQUFpSyxtQkFBbUIsQ0FBQyxVQUFVLENBQUMsc0JBQXNCLENBQUMsd0JBQXdCLENBQUMsMkJBQTJCLENBQUMsK0tBQStLLHVGQUF1RixDQUFDLDRCQUE0QixDQUFDLGdGQUFnRixrQkFBa0IsQ0FBQyxVQUFVLENBQUMsc0JBQXNCLENBQUMsd0JBQXdCLENBQUMsMkJBQTJCLENBQUMsdUZBQXVGLHdGQUF3RixDQUFDLDRCQUE0QiIsImZpbGUiOiJzdHlsZS5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLWJveF90aHVtYm5haWwtY29udGFpbmVye2Rpc3BsYXk6ZmxleDtmbGV4LWRpcmVjdGlvbjpyb3d9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS1ib3hfYWxidW0tY292ZXJ7Zm9udC1mYW1pbHk6ZnVzaW9uTWVkaWFCb3hJY29uRm9udDt3cml0aW5nLW1vZGU6aW5pdGlhbDtwb3NpdGlvbjpyZWxhdGl2ZTttYXJnaW4tbGVmdDo4cHg7d2lkdGg6NTBweDtoZWlnaHQ6NTBweDt0cmFuc2l0aW9uOnRyYW5zZm9ybSBjdWJpYy1iZXppZXIoLjIzLDEsLjMyLDEpIC4zc30uZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLWJveF9hbGJ1bS1jb3ZlcjpiZWZvcmV7Y29udGVudDpcIlxcZTZhM1wiO3Bvc2l0aW9uOmFic29sdXRlO2xlZnQ6NTAlO3RvcDo1MCU7bWFyZ2luOi0xNnB4IDAgMCAtMTZweDt3aWR0aDozMnB4O2hlaWdodDozMnB4O2ZvbnQtc2l6ZToxNnB4O2JhY2tncm91bmQtY29sb3I6IzMzMzk7Ym9yZGVyLXJhZGl1czoxNnB4O3otaW5kZXg6Mjtjb2xvcjojZmZmO3RleHQtYWxpZ246Y2VudGVyO2xpbmUtaGVpZ2h0OjMycHg7Y3Vyc29yOnBvaW50ZXI7b3BhY2l0eTowO3RyYW5zZm9ybTpzY2FsZSgxLjIpO3RyYW5zaXRpb24tcHJvcGVydHk6dHJhbnNmb3JtLG9wYWNpdHk7dHJhbnNpdGlvbi1kdXJhdGlvbjouM3M7dHJhbnNpdGlvbi10aW1pbmctZnVuY3Rpb246Y3ViaWMtYmV6aWVyKC4yMywxLC4zMiwxKTt0cmFuc2l0aW9uLWRlbGF5OjBzfS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtYm94X2FsYnVtLWNvdmVyOmFmdGVye2NvbnRlbnQ6XCJcIjtwb3NpdGlvbjphYnNvbHV0ZTtsZWZ0OjA7dG9wOjA7d2lkdGg6MTAwJTtoZWlnaHQ6MTAwJTtiYWNrZ3JvdW5kLWNvbG9yOiMwMDAwO3otaW5kZXg6MTt0cmFuc2l0aW9uLXByb3BlcnR5OmJhY2tncm91bmQtY29sb3I7dHJhbnNpdGlvbi1kdXJhdGlvbjouM3M7dHJhbnNpdGlvbi10aW1pbmctZnVuY3Rpb246Y3ViaWMtYmV6aWVyKC4yMywxLC4zMiwxKTt0cmFuc2l0aW9uLWRlbGF5OjBzfS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtYm94X2FsYnVtLWNvdmVyOmhvdmVye3RyYW5zZm9ybTpzY2FsZSgxLjEpfS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtYm94X2FsYnVtLWNvdmVyOmhvdmVyOmJlZm9yZXtvcGFjaXR5OjE7dHJhbnNmb3JtOnNjYWxlKDEpfS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtYm94X2FsYnVtLWNvdmVyOmhvdmVyOmFmdGVye2JhY2tncm91bmQtY29sb3I6IzAwMDAwMDFhfUBmb250LWZhY2V7Zm9udC1mYW1pbHk6ZnVzaW9uTWVkaWFCb3hJY29uRm9udDtzcmM6dXJsKC8vYXQuYWxpY2RuLmNvbS90L2EvZm9udF8zODM2Mzk0X2w5MzYxeHhwZzEud29mZjI/dD0xNjc3NDgxODE2NjEyKSBmb3JtYXQoXCJ3b2ZmMlwiKSx1cmwoLy9hdC5hbGljZG4uY29tL3QvYS9mb250XzM4MzYzOTRfbDkzNjF4eHBnMS53b2ZmP3Q9MTY3NzQ4MTgxNjYxMikgZm9ybWF0KFwid29mZlwiKSx1cmwoLy9hdC5hbGljZG4uY29tL3QvYS9mb250XzM4MzYzOTRfbDkzNjF4eHBnMS50dGY/dD0xNjc3NDgxODE2NjEyKSBmb3JtYXQoXCJ0cnVldHlwZVwiKX0uZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLWN1c3RvbS1pY29uLWljb24tbW9kdWxlLWxlc3NfZnVzaW9uLW1lZGlhLWJveC1pY29uLWZvbnR7Zm9udC1mYW1pbHk6ZnVzaW9uTWVkaWFCb3hJY29uRm9udDtmb250LXNpemU6MTZweDtmb250LXN0eWxlOm5vcm1hbDstd2Via2l0LWZvbnQtc21vb3RoaW5nOmFudGlhbGlhc2VkOy13ZWJraXQtdGV4dC1zdHJva2Utd2lkdGg6LjJweDstbW96LW9zeC1mb250LXNtb290aGluZzpncmF5c2NhbGV9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3X2FsYnVtLW92ZXJsYXl7cG9zaXRpb246Zml4ZWQ7bGVmdDowO3RvcDowO3dpZHRoOjEwMCU7aGVpZ2h0OjEwMCU7YmFja2dyb3VuZC1jb2xvcjojMDAwMDAwYTY7ei1pbmRleDoxMDAwfS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtdmlld19hbGJ1bS1vdmVybGF5LWhpZGV7ZGlzcGxheTpub25lfS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtdmlld19hbGJ1bS1jb250cm9se3Bvc2l0aW9uOmFic29sdXRlO3otaW5kZXg6MTt0b3A6NTAlO3dpZHRoOjQ4cHg7aGVpZ2h0OjQ4cHg7YmFja2dyb3VuZC1jb2xvcjojMDAwNjtjb2xvcjojZmZmO2xpbmUtaGVpZ2h0OjgwcHg7Ym9yZGVyLXJhZGl1czo1MCU7ZGlzcGxheTpmbGV4O2p1c3RpZnktY29udGVudDpjZW50ZXI7YWxpZ24taXRlbXM6Y2VudGVyfS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtdmlld19hbGJ1bS1jb250cm9sOmhvdmVye2JhY2tncm91bmQtY29sb3I6IzAwMDk7dGV4dC1kZWNvcmF0aW9uOm5vbmU7Y3Vyc29yOnBvaW50ZXJ9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3X2FsYnVtLWNvbnRyb2wtZGlzYWJsZWR7Y29sb3I6I2ZmZjN9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3X2FsYnVtLWNvbnRyb2wtZGlzYWJsZWQ6aG92ZXJ7YmFja2dyb3VuZC1jb2xvcjojMDAwNjtjdXJzb3I6bm90LWFsbG93ZWR9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3X2FsYnVtcHJldntsZWZ0OjQ4cHh9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3X2FsYnVtbmV4dHtyaWdodDo0OHB4fS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtdmlld19hbGJ1bS1zdGFnZXtoZWlnaHQ6MTAwJTtwb3NpdGlvbjpyZWxhdGl2ZX0uZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXdfYWxidW0tZnVuYy1idXR0b257cG9zaXRpb246YWJzb2x1dGU7aGVpZ2h0OjU2cHg7dG9wOjA7ei1pbmRleDoxMDAzO2xlZnQ6MDtyaWdodDowO2JhY2tncm91bmQ6cmdiYSgwLDAsMCwuMjUpO2Rpc3BsYXk6ZmxleDtmbGV4LWRpcmVjdGlvbjpyb3c7anVzdGlmeS1jb250ZW50OmZsZXgtZW5kO2FsaWduLWl0ZW1zOmNlbnRlcjtwYWRkaW5nOjAgNTZweCAwIDMycHh9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3X2FsYnVtLWZ1bmMtYnV0dG9uLWl0ZW17d2lkdGg6MzJweDtoZWlnaHQ6MzJweDtjb2xvcjojZmZmO2N1cnNvcjpwb2ludGVyO3Bvc2l0aW9uOnJlbGF0aXZlO21hcmdpbi1sZWZ0OjhweDtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OmNlbnRlcjthbGlnbi1pdGVtczpjZW50ZXI7Ym9yZGVyLXJhZGl1czo0cHh9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3X2FsYnVtLWZ1bmMtYnV0dG9uLWl0ZW06aG92ZXJ7YmFja2dyb3VuZC1jb2xvcjojZmZmM30uZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXdfZGVlcC1hbGJ1bS1pdGVte3Bvc2l0aW9uOnJlbGF0aXZlO3dpZHRoOjEwMCU7aGVpZ2h0OjEwMCV9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3X2l0ZW0tY29udGFpbmVye3RyYW5zaXRpb246dHJhbnNmb3JtIGZhZGVJbjt0cmFuc2l0aW9uLXByb3BlcnR5OnRyYW5zZm9ybTt0cmFuc2l0aW9uLWR1cmF0aW9uOi4zczt0cmFuc2l0aW9uLXRpbWluZy1mdW5jdGlvbjpjdWJpYy1iZXppZXIoLjIzLDEsLjMyLDEpO3RyYW5zaXRpb24tZGVsYXk6MHM7cG9zaXRpb246YWJzb2x1dGU7aW5zZXQ6NTZweCAwIDA7bWFyZ2luOmF1dG87bWF4LXdpZHRoOjEwMCU7bWF4LWhlaWdodDoxMDAlO2Rpc3BsYXk6ZmxleDtqdXN0aWZ5LWNvbnRlbnQ6Y2VudGVyO2FsaWduLWl0ZW1zOmNlbnRlcn0uZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXdfYWxidW0tY2xvc2V7cG9zaXRpb246YWJzb2x1dGU7d2lkdGg6NTZweDtoZWlnaHQ6NTZweDt6LWluZGV4OjEwMDQ7Y3Vyc29yOnBvaW50ZXI7cmlnaHQ6MDt0b3A6MDtjb2xvcjojZmZmO2Rpc3BsYXk6ZmxleDtqdXN0aWZ5LWNvbnRlbnQ6Y2VudGVyO2FsaWduLWl0ZW1zOmNlbnRlcn0uZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXdfY3VzdG9tLWRpdmlkZXJ7ZGlzcGxheTppbmxpbmUtYmxvY2s7d2lkdGg6MXB4O2hlaWdodDoxMHB4O2JhY2tncm91bmQ6I2RjZGVlMzttYXJnaW4tbGVmdDoxMHB4fUBrZXlmcmFtZXMgZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXctYW5pbWF0ZS1tb2R1bGUtbGVzc19hbGJ1bS16b29tLWluezAle29wYWNpdHk6LjU7dHJhbnNmb3JtOnNjYWxlKC4yKX10b3tvcGFjaXR5OjE7dHJhbnNmb3JtOnNjYWxlKDEpfX1Aa2V5ZnJhbWVzIGZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3LWFuaW1hdGUtbW9kdWxlLWxlc3NfYWxidW0tem9vbS1vdXR7MCV7b3BhY2l0eTouODt0cmFuc2Zvcm06c2NhbGUoMSl9dG97b3BhY2l0eTowO3RyYW5zZm9ybTpzY2FsZSguMil9fS5mdXNpb24tbWVkaWEtYm94X2NvbXBvbmVudHMtbWVkaWEtdmlldy1hbmltYXRlLW1vZHVsZS1sZXNzX2FsYnVtLW92ZXJsYXktZW50ZXIsLmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3LWFuaW1hdGUtbW9kdWxlLWxlc3NfYWxidW0tb3ZlcmxheS1hcHBlYXJ7dHJhbnNmb3JtOnNjYWxlKC4yKTtvcGFjaXR5Oi41O2FuaW1hdGlvbi1kdXJhdGlvbjouM3M7YW5pbWF0aW9uLWZpbGwtbW9kZTpib3RoO2FuaW1hdGlvbi1wbGF5LXN0YXRlOnBhdXNlZH0uZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXctYW5pbWF0ZS1tb2R1bGUtbGVzc19hbGJ1bS1vdmVybGF5LWVudGVyLWFjdGl2ZSwuZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXctYW5pbWF0ZS1tb2R1bGUtbGVzc19hbGJ1bS1vdmVybGF5LWFwcGVhci1hY3RpdmV7YW5pbWF0aW9uLW5hbWU6ZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXctYW5pbWF0ZS1tb2R1bGUtbGVzc19hbGJ1bS16b29tLWluO2FuaW1hdGlvbi1wbGF5LXN0YXRlOnJ1bm5pbmd9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3LWFuaW1hdGUtbW9kdWxlLWxlc3NfYWxidW0tb3ZlcmxheS1sZWF2ZXt0cmFuc2Zvcm06c2NhbGUoMSk7b3BhY2l0eTouODthbmltYXRpb24tZHVyYXRpb246LjNzO2FuaW1hdGlvbi1maWxsLW1vZGU6Ym90aDthbmltYXRpb24tcGxheS1zdGF0ZTpwYXVzZWR9LmZ1c2lvbi1tZWRpYS1ib3hfY29tcG9uZW50cy1tZWRpYS12aWV3LWFuaW1hdGUtbW9kdWxlLWxlc3NfYWxidW0tb3ZlcmxheS1sZWF2ZS1hY3RpdmV7YW5pbWF0aW9uLW5hbWU6ZnVzaW9uLW1lZGlhLWJveF9jb21wb25lbnRzLW1lZGlhLXZpZXctYW5pbWF0ZS1tb2R1bGUtbGVzc19hbGJ1bS16b29tLW91dDthbmltYXRpb24tcGxheS1zdGF0ZTpydW5uaW5nfVxuIl19 */
    </style>
    <style>
        .SW__src-components-entries-widget-WidgetShell-index-module__widgetShell--2WJA- {
            position: relative;
        }

        .SW__src-components-entries-widget-WidgetShell-index-module__widgetShell--2WJA- .fusion-media-box_components-media-view_album-func-button {
            width: -webkit-fill-available;
        }
    </style>
    <style>
        .SW__src-components-entries-embedded-EmbeddedShell-index-module__embeddedShell--2cEmR {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: auto;
        }

        body {
            margin: 0;
            padding: 0;
        }
    </style>
    <style>
        .SW__src-components-entries-widget-ShortcutSearch-index-module__shortcutSearch--3zyaf {
            display: none;
            position: fixed;
            font-size: 12px;
            box-sizing: border-box;
            height: 40px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.12);
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__search--O6oHL {
            padding: 8px 0 8px 16px;
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__search--O6oHL>span {
            float: left;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__search--O6oHL>span>svg {
            float: left;
            margin-top: 5px;
            margin-right: 8px;
            color: #3d7fff;
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__search--O6oHL>span>span {
            color: #3d7fff;
            max-width: 140px;
            min-width: 25px;
            line-height: 24px;
            font-size: 14px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            float: left;
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__search--O6oHL>svg {
            float: left;
            margin-top: 5px;
            margin-left: 8px;
            cursor: pointer;
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__confirm--1i4g7 {
            padding: 0 16px;
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__confirm--1i4g7 span {
            float: left;
            font-size: 14px;
            margin-top: 10px;
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__confirm--1i4g7 .SW__src-components-entries-widget-ShortcutSearch-index-module__btn--2KmNZ {
            display: inline-block;
            margin-top: 8px;
            margin-left: 8px;
            padding: 0 12px;
            height: 24px;
            line-height: 24px;
            border-style: solid;
            border-radius: 12px;
            border-width: 1px;
            border-color: rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: #666;
        }

        .SW__src-components-entries-widget-ShortcutSearch-index-module__confirm--1i4g7 .SW__src-components-entries-widget-ShortcutSearch-index-module__btn--2KmNZ.SW__src-components-entries-widget-ShortcutSearch-index-module__primary--87dir {
            color: #3d7fff;
            border-color: #3d7fff;
        }
    </style>
    <style>
        @font-face {
            font-family: 'shIconfont';
            /* Project id 1937921 */
            src: url('//at.alicdn.com/t/a/font_1937921_bsaua0cacvg.woff2?t=1664192638895') format('woff2'), url('//at.alicdn.com/t/a/font_1937921_bsaua0cacvg.woff?t=1664192638895') format('woff'), url('//at.alicdn.com/t/a/font_1937921_bsaua0cacvg.ttf?t=1664192638895') format('truetype');
        }

        .SW__src-components-App-index-module__app--3ixkT .sh-icon {
            font-family: 'shIconfont';
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -webkit-text-stroke-width: 0.2px;
            -moz-osx-font-smoothing: grayscale;
        }

        .SW__src-components-App-index-module__app--3ixkT .fade.in {
            display: block;
        }

        .SW__src-components-App-index-module__app--3ixkT .fade.out {
            display: none;
        }

        .scenario-widget-frame-prefetcher {
            position: fixed;
            width: 1px;
            right: -1px;
            bottom: -1px;
            visibility: hidden;
        }
    </style>
    <script async="" src="//log.mmstat.com/eg.js?t=1679120254825"></script>
    <script charset="utf-8" crossorigin="true" src="//g.alicdn.com/??code/npm/@ali/lib-accs/1.0.4/accs.umd.production.min.js"></script>
</head>

<body style="background:#fff" id="list-sold-items" data-spm="1">
    <div class="ks-suggest-container mall-suggest-container" style="position: absolute; visibility: hidden;">
        <div class="ks-suggest-content"></div>
        <div class="ks-suggest-footer"></div>
    </div>
    <script src="https://retcode.alicdn.com/retcode/bl.js" crossorigin=""></script>
    <script id="tb-beacon-aplus" src="//g.alicdn.com/alilog/mlog/aplus_v2.js" exparams="category=&amp;userid=1583809483&amp;aplus&amp;yunid=&amp;eb35e97583f3d&amp;asid=AcsDZ157VxVkqOG0SAAAAAC/WFsDN620hw=="></script>
    <script>
        with(document) with(body) with(insertBefore(createElement("script"), firstChild)) setAttribute("exparams", "category=&userid=1583809483&aplus&yunid=&eb35e97583f3d&asid=AcsDZ157VxVkqOG0SAAAAAC/WFsDN620hw==", id = "tb-beacon-aplus", src = (location > "https" ? "//g" : "//g") + ".alicdn.com/alilog/mlog/aplus_v2.js")
    </script>


    <script>
        window.cTag1 = "tm_itemlist_listSoldItems";
    </script>
    <script>
        let script = document.createElement('script');
        script.src = "//g.alicdn.com/??/AWSC/AWSC/awsc.js,/sd/baxia-entry/baxiaCommon.js";
        document.head.append(script);

        script.onload = function() {
            baxiaCommon.init({
                "checkApiPath": function(url) {
                    return url.indexOf("https://trade.taobao.com/trade/itemlist/asyncSold.htm") > -1;
                }
            })
        }
    </script>

    <script>
        window.__FE_VERSION__ = window.__FE_VERSION__ || (function() {
            try {
                var version = 'undefined';
                if (typeof document.querySelectorAll !== 'function') {
                    return version;
                }
                var links = document.querySelectorAll('link');
                var linksLength = links.length;
                var versionReg = /tp\/(sold|detail|snapshot)\/(\d+\.\d+\.\d+)\//;
                if (linksLength === 0) {
                    return version;
                };
                for (var i = 0; i < linksLength; i++) {
                    var link = links[i];
                    if (!link || typeof(link.getAttribute) !== 'function') {
                        continue;
                    }
                    var href = link.getAttribute('href');
                    href = href + '';
                    var regResult = versionReg.exec(href);
                    if (!regResult || !regResult[2]) {
                        continue;
                    }
                    version = regResult[2];
                    break;
                }
                return version;
            } catch (e) {
                return 'undefined';
            }
        })();

        function getCookie(e) {
            try {
                for (var o = document.cookie.split("; "), n = {}, t = 0; t < o.length; t++) {
                    var c = o[t].split("=");
                    n[c[0]] = c[1]
                }
                return unescape(decodeURIComponent(n[e]).replace(/\\u/g, "%u"))
            } catch (err) {
                return ""
            }
        };
        ! function(c, b, d, a) {
            with(c[a] || (c[a] = {}), c[a].config = {
                pid: "gf3el0xc6g@c7362cca9f7f200",
                c1: window.cTag1,
                ignore: {
                    ignoreErrors: [/^Script error\.?$/]
                },
                sendResource: true,
                release: window.__FE_VERSION__,
                imgUrl: "https://arms-retcode.aliyuncs.com/r.png?",
                release: window.__FE_VERSION__,
                tag: getCookie("tracknick"),
                disableHook: !0
            }, b)
            with(body) with(insertBefore(createElement("script"), firstChild)) setAttribute("crossorigin", "", src = d)
        }
        (window, document, "https://retcode.alicdn.com/retcode/bl.js", "__bl");
    </script>

    <!-- getSession: false-->


    <div id="site-nav" role="navigation">
        <div id="sn-bg">
            <div class="sn-bg-right"></div>
        </div>
        <div id="sn-bd">
            <b class="sn-edge"></b>
            <div class="sn-container">
                <p id="login-info" class="sn-login-info"><span class="sn-mobile"><a title="天猫无线" target="_top" class="sn-mobile-link" href="//mobile.tmall.com/?scm=1027.1.1.1">手机版</a></span>您好，<a target="_top" href="//jianghu.taobao.com/admin/home.htm?t=1679120251968" class="j_UserNick sn-user-nick">恩华大药房旗舰店</a>！<a class="j_Identity sn-identity hidden" target="_top"></a><a class="j_Point sn-point hidden" target="_top" href="//jifen.tmall.com/?from=top&amp;scm=1027.1.1.4">积分<span class="j_PointValue sn-point-value">0</span></a><span class="j_Message sn-message hidden"><a target="_top" href="//vip.tmall.com/member/index.htm?layer=messagebox&amp;from=top&amp;scm=1027.1.1.5" class="j_MessageText sn-msg-text">消息</a><a target="_top" href="//vip.tmall.com/member/index.htm?layer=messagebox&amp;from=top&amp;scm=1027.1.1.5" class="j_MessageNum sn-msg-num">0</a><span class="sn-msg-box  j_MesssageBox hidden"><span class="sn-msg-hd"></span><span class="sn-msg-bd"><a href="#" class="j_MessageTitle sn-msg-title">加入Tmall俱乐部</a><b class="j_CloseMessage sn-msg-close">×</b></span></span></span><a class="sn-logout" target="_top" href="//login.taobao.com/member/logout.jhtml?f=top&amp;redirectURL=//login.tmall.com/?redirect_url=https%253A%252F%252Ftrade.taobao.com%252Ftrade%252Fitemlist%252Flist_sold_items.htm%253Faction%253Ditemlist%252FSoldHisQueryAction%2526event_submit_do_query%253D1%2526tabCode%253Dbefore3Months%2526" id="J_Logout">退出</a><a class="sn-point" href="//outmem.taobao.com/message/list_private_msg.htm" target="_top">站内信</a>
                </p>
                <ul class="sn-quick-menu">
                    <li class="sn-seller j_SellerCenter">
                        <a target="_top" href="//mai.taobao.com/seller_admin.htm">商家中心</a>
                    </li>
                    <li class="sn-mobile" id="sn-mobile">
                        <a title="商家手机版" target="_top" class="sn-mobile-link" href="//work.taobao.com/?tracelog=sjzx">商家手机版</a>
                    </li>
                    <li class="sn-home">
                        <a href="//www.taobao.com/">淘宝网</a>
                    </li>
                    <li class="sn-sitemap menu-item last">
                        <div class="sn-menu">
                            <a class="menu-hd" href="//www.tmall.com/go/chn/navi-map/index.php" target="_top" tabindex="0" aria-haspopup="menu-3" aria-label="右键弹出菜单，tab键导航，esc关闭当前菜单">网站导航<b></b></a>

                            <div class="menu-bd" style="height: auto" role="menu" aria-hidden="true" id="menu-3">
                                <ul>

                                    <li>

                                        <h3>商家：</h3>

                                        <a target="_top" href="//shangjia.tmall.com/portal.htm?spm=1.277573.266710.1">商家中心</a>
                                        <a class="sitemap-right" target="_top" href="//zhaoshang.tmall.com/?spm=1.277573.266710.2">商家入驻</a>
                                        <a target="_top" href="//fw.tmall.com/?spm=1.277573.266710.3">商家服务</a>
                                        <a class="sitemap-right" target="_top" href="//www.tmall.com/go/chn/mall/pzsc-gfsj.php?spm=1.277573.266710.4">商家品控</a>

                                    </li>

                                    <li>



                                        <a target="_top" href="//mobile.tmall.com/?spm=1.277573.266710.5">天猫无线</a>

                                    </li>

                                    <li>

                                        <h3>帮助：</h3>

                                        <a target="_top" href="//service.tmall.com/support/tmall/tmallHelp.htm?spm=1.277573.266710.6">帮助中心</a>

                                    </li>

                                </ul>
                                <a class="sitemap-more" href="//www.tmall.com/go/chn/navi-map/index.php" target="_top">更多内容&gt;&gt;</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        if (TB && TB.Global && TB.Global.init) {
            TB.Global.init();
        }
    </script>




    <script>
        if (/MSIE\s+\d+/.test(navigator.userAgent)) {
            document.documentElement.className += ' iebefore11';
        }
    </script>
    <style>
        .browser-update-bar-20160818 {
            display: none;
        }

        .iebefore11 .browser-update-bar-20160818 {
            display: block;
        }

        .taobao-announce {
            width: auto;
            height: 26px;
            background-color: #fefaec;
        }

        .taobao-browser .catA,
        .taobao-browser .ie8,
        .taobao-browser .tao,
        .taobao-browser .closeA,
        .taobao-browser .chrome {
            background: url(//img.alicdn.com/tps/i1/T1ICl.FjpeXXc8E2U.-133-22.png) no-repeat 0 0;
        }

        .taobao-browser {
            text-align: center;
            margin: 0 auto;
            display: block;
            color: #3e3e3e;
            line-height: 26px;
            width: 990px;
            height: 26px;
            position: relative;
        }

        .taobao-browser a {
            color: #b20000;
            padding: 0 5px;
        }

        .taobao-browser b {
            display: inline-block;
            vertical-align: middle;
        }

        .taobao-browser .catA {
            width: 53px;
            height: 22px;
            background-position: 0 0;
            margin-right: 10px;
        }

        .taobao-browser .ie8 {
            width: 17px;
            height: 22px;
            background-position: -55px 0;
            margin-left: 4px;
        }

        .taobao-browser .tao {
            width: 17px;
            height: 22px;
            background-position: -76px 0;
            margin-left: 4px;
        }

        .taobao-browser .chrome {
            width: 17px;
            height: 22px;
            background-position: -114px 0;
            margin-left: 4px;
        }

        .taobao-browser .closeA {
            width: 14px;
            height: 22px;
            background-position: -96px 0;
            position: absolute;
            right: 10px;
            top: 0;
            cursor: pointer;
        }

        #J_BrowserUpdate {
            display: none;
        }
    </style>
    <div class="taobao-announce browser-update-bar-20160818" id="J_TBAnnounce">
        <div class="taobao-browser">
            <b class="catA"></b>喵~您的浏览器版本过低，天猫商家端业务逐步停止对IE10及以下浏览器的支持，快使用速度更快体验更好的浏览器吧
            <b class="UC"></b><a href="http://down2.uc.cn/pcbrowser/index.php?id=101&amp;pid=4413">UC浏览器</a>
            <b class="chrome"></b><a href="http://www.google.cn/intl/zh-CN/chrome/">谷歌浏览器</a>
            <b class="firefox"></b><a href="http://www.firefox.com.cn/">火狐浏览器</a>
        </div>
    </div>

    <div id="header" class="mallChn">
        <div class="headerLayout">
            <div class="headerCon hasSubLogo">
                <h1 id="mallLogo">
                    <span class="mlogo"><a href="//www.tmall.com/" title="天猫Tmall.com"><s></s>天猫Tmall.com</a></span>
                    <span class="slogo"><a target="_top" class="shangjia" href="//mai.taobao.com/seller_admin.htm"><s></s>商家中心</a></span>
                </h1>
                <div id="mallSearch">
                    <div class="mallSearch-bg">
                        <form name="searchTop" action="//list.tmall.com/search_dispatcher.htm" class="mallSearch-form clearfix">
                            <fieldset>
                                <legend>天猫搜索</legend>
                                <div id="J_SelectTypes" class="mallSearch-type">
                                    <a class="active search-product" data-type="p" href="//list.tmall.com/search_product.htm" data-label="搜索 天猫 商品">商品<i></i></a>
                                    <a class="search-shop" data-type="s" href="//list.tmall.com/search_shop.htm" data-label="搜索 天猫 店铺">店铺</a>
                                </div>
                                <div class="mallSearch-input clearfix">
                                    <label for="mq" style="visibility: visible; color: rgb(102, 102, 102);">搜索 天猫 商品</label>
                                    <input type="text" name="q" accesskey="s" autofocus="true" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:translate" value="" id="mq">
                                    <button type="submit">搜索<s></s></button>
                                    <input id="J_Type" type="hidden" name="type" value="p">
                                    <input id="J_Cat" type="hidden" name="cat" value="all">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .chnNew {
            background: url(data:image/gif;base64,R0lGODlhFgAMAPMIAGa8AVu0AHTIAP///0yhAFOpAFylGnjCNuWkpAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C1hNUCBEYXRhWE1QAz94cAAh+QQFAAAIACwAAAAAFgAMAEAEUxCdQKu99SBkSKkFIY6kaCAEAAxrO7xs3AKeIAz2fcM6jgshyqAyhBWNFMJmUzgtn9ClKketWgGBgu211eV83pCKtZKpXDOCAcNmO5mhqDxamNsjADs=) no-repeat;
            *background: url("//img.alicdn.com/tps/i2/T1j4KZXE8eXXXiE7za-22-12.gif") no-repeat;
            display: block;
            height: 13px;
            overflow: hidden;
            position: absolute;
            right: -1px;
            top: -3px;
            width: 23px;
            z-index: 11;
        }

        .curChn .chnNew {
            display: none;
        }

        .chn11 {
            background: url(data:image/gif;base64,R0lGODlhGAAOAPIGAHLGAEqcAP///06eBU+fB0udAgAAAAAAACH/C1hNUCBEYXRhWE1QAz94cAAh+QQFAAAGACwAAAAAGAAOAAADRmix3P5BgUmrvWBRUfnulAYI3liSWymO4OdmwcvKajyV893C9J6LJE/whjJ5VphkJdKgDAgFiMNArTKq2KzWGtl6td3vNgEAOw==) no-repeat;
            *background: url("//img.alicdn.com/tps/i4/T1gyLrFnpbXXcy72zb-24-14.gif") no-repeat;
            display: block;
            height: 14px;
            overflow: hidden;
            position: absolute;
            right: -2px;
            top: -5px;
            width: 24px;
            z-index: 11;
        }

        .curChn .chn11 {
            display: none;
        }

        .mallNav-main li a {
            color: #fff;
        }
    </style>

    <div id="mallNav" data-spm="1997708433">
        <div id="J_MallNavCon" class="mallNav-con">
            <div id="mallTextNav" class="clearfix">
                <ul class="mallNav-main">
                    <li>
                        <a href="//shangjia.tmall.com/" target="_blank" title="首页" data-spm="d4918317">首页</a>
                    </li>
                    <li class="curChn "><a href="//mai.taobao.com/seller_admin.htm" data-spm="d4918321">我的工作台</a></li>

                    <li class=""><a href="//zhaoshang.tmall.com/sellergrow/show_exam_report_new.htm?source=2" data-spm="d4918329" title="体检报告">商家成长</a></li>

                    <li><a href="//zhiku.tmall.com" title="培训学习" data-spm="d4918869">天猫智库</a></li>


                    <li class=""><a href="//zhaoshang.tmall.com/portalmessage/messageHome.htm" title="官方信息" data-spm="d4918325">天猫早知道</a>
                    </li>

                    <li class=""><a href="//pages.tmall.com/wow/seller/act/myrule" title="商家规则" data-spm="d4918333">天猫规则</a></li>
                    <li class="">
                        <a href="//maowo.tmall.com" target="_blank" title="商家社区" data-spm="d4918345">喵言喵语</a>
                    </li>
                </ul>
                <div class="mallNav-right">
                    <div class="mallNav-others">
                        <a target="_blank" style="background: none;" href="//seller.aliexpress.com/so/tmall.php" title="业务推荐" data-spm="d4918337">卖往海外</a>
                    </div>
                    <div id="J_tmall_dropdown" class="mallNav-dropdown">
                        <span class="down-arrow-box" title="更多商家服务">商家支持<b class="common-down-arrow"></b></span>
                        <ul style="display: none;" class="mallNav-dropdown-list" id="J_tmall_dropdown_list">
                            <li><a href="//zhaoshang.tmall.com/" data-spm="d4918353">天猫招商</a></li>
                            <li><a href="//www.tmall.com/wow/seller/act/tmallpinkong" data-spm="d4918365">商家品控</a></li>
                            <li><a href="//huangjintai.tmall.com/huangjintai/portal.htm" data-spm="d4918390">黄金台</a></li>
                            <li class="mallNav-dropdown-separator"></li>
                            <li><a href="//www.tmall.com/go/chn/tmall/temai/join.php" data-spm="d4918373">品牌特卖</a></li>
                            <li><a href="//fw.tmall.com/" data-spm="d4918377">运营服务</a></li>
                            <li><a href="//www.tmall.com/go/chn/tm_cod/" data-spm="d4918381">货到付款</a></li>
                            <li><a href="//gonghuo.tmall.com/" data-spm="d4918385">供货中心</a></li>
                            <li class="mallNav-dropdown-separator"></li>
                            <li><a href="//sellerhelp.taobao.com/market/service/tmall.php" data-spm="d4918389">帮助中心</a></li>
                        </ul>
                    </div>
                    <ul class="mallNav-others">
                        <li class="account"><a target="_blank" href="//member1.taobao.com/member/fresh/account_security.htm" title="账号管理" data-spm="d4918349"><s></s>账号设置</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <style>
        /*=猫窝：喵我，喵言喵语=*/
        #mallNav .mallNav-con .curChn {
            overflow: visible;
        }

        #mallNav .mallNav-con li:hover .chn-menu {
            display: block;
        }

        .chn-menu {
            display: none;
            position: absolute;
            top: 5px;
            left: 0;
            width: 52px;
            background-color: #fff;
            border: 1px solid #ddd;
            z-index: 2;
        }

        .curChn .chn-menu {
            position: relative;
            top: -30px;
            width: 56px;
        }

        .chn-menu dd {
            padding: 4px 0 8px;
            font-weight: 400;
        }

        #mallTextNav .mallNav-main .chn-menu a,
        #mallTextNav .mallNav-main .chn-menu .link {
            display: block;
            padding: 3px 0;
            color: #333;
            font-size: 12px;
            cursor: pointer;
        }

        #mallTextNav .mallNav-main .chn-menu a:hover {
            background-color: #fff;
            text-decoration: underline;
        }

        /*=覆盖全局样式，仅支持kissy1.3=*/
        .ks-ext-position {
            position: absolute;
            z-index: 9999;
            left: 0;
            top: 0;
        }
    </style>

    <div id="page" class="page-container">
        <div id="content">
            <div class="layout grid-s140m0">
                <div class="col-main">
                    <div id="J_Region" class="main-wrap">
                        <span class="mytaobao-rc-tp"><span></span></span>
                        <div class="navigation" data-spm="8">
                            <div class="crumbs ">
                                <i class="tm-iconfont icon-info"></i>
                                <a href="//mai.taobao.com/seller_admin.htm">我是卖家</a><span>&gt;</span><a href="#200">交易管理</a><span>&gt;</span>已卖出的宝贝
                            </div>
                            <div class="help" data-spm="a1z4i">
                                <a target="_blank" href="//seller.service.taobao.com/market/service/jiaoyi.php?file=jiaoyi.php&amp;page=trade">卖家交易学习专区
                                </a>
                            </div>
                            <span></span>
                        </div>


                        <div id="sold_container1">
                            <div data-reactid=".0">
                                <div data-reactid=".0.0">
                                    <div class="notice-tips-mod__buyOneBox___2Pf3k" data-reactid=".0.0.$0">
                                        <div class="notice-tips-mod__buyOneBoxImg___HA73J" data-reactid=".0.0.$0.0"><svg viewBox="0 0 1024 1024" version="1.1" width="20" height="20" data-reactid=".0.0.$0.0.0">
                                                <path d="M512 0c282.766222 0 512 229.233778 512 512s-229.233778 512-512 512S0 794.766222 0 512 229.233778 0 512 0z m0 320a64 64 0 1 0 0-128 64 64 0 0 0 0 128z m15.445333 512c17.066667 0 30.919111-13.852444 30.919111-30.919111V414.919111c0-17.066667-13.824-30.919111-30.919111-30.919111h-30.890666c-17.066667 0-30.919111 13.852444-30.919111 30.919111v386.161778c0 17.066667 13.824 30.919111 30.919111 30.919111h30.890666z" fill="#0085d7" data-reactid=".0.0.$0.0.0.0"></path>
                                            </svg></div>
                                        <div class="notice-tips-mod__buyOneText___1_nP2" data-reactid=".0.0.$0.1"><span data-reactid=".0.0.$0.1.$notice-content-0"><span data-reactid=".0.0.$0.1.$notice-content-0.0">为更好的保护消费者隐私，买家淘宝会员名字段作为敏感字段，平台不再明文展示，卖家中心将对商家订单中的买家会员名字段脱敏展示，已卖出的宝贝页面将不再提供明文解密开关（逐步灰度中）<br>【短信服务】号码保护订单也可以给消费者发订单履约短信哦，快给贵店铺的亲们更好的关怀吧！</span></span><a target="_blank" href="https://myseller.taobao.com/home.htm/bc-templates?appId=249" data-reactid=".0.0.$0.1.$notice-content-1">立即去设置&gt;&gt;</a></div>
                                    </div>
                                    <div class="notice-tips-mod__buyOneBox___2Pf3k" data-reactid=".0.0.$1"><img class="notice-tips-mod__buyOneBoxImg___HA73J" src="https://img.alicdn.com/imgextra/i1/O1CN01Tqodfp1W9iJUFhdCa_!!6000000002746-2-tps-254-200.png" data-reactid=".0.0.$1.0">
                                        <div class="notice-tips-mod__buyOneText___1_nP2" data-reactid=".0.0.$1.1"><span data-reactid=".0.0.$1.1.$notice-content-0"><span data-reactid=".0.0.$1.1.$notice-content-0.0">【不设置会很亏】顺手买一件【全面】开放跨店活动，一键设置后【免费】获取更多新客流量，带成交！</span></span><a target="_blank" href="https://shell.mkt.taobao.com/taobaoTied/index" data-reactid=".0.0.$1.1.$notice-content-1">立即去设置&gt;&gt;</a></div>
                                    </div>
                                </div>
                                <div data-reactid=".0.2">
                                    <form action="1_1.php" method="post">

                                        <div class="row-mod__row___3CI3c" style="margin-top:10px;margin-bottom:10px;" data-reactid=".0.2.0.1.0">
                                            <div style="float:left;width:33.33333333333333%;" data-reactid=".0.2.0.1.0.0">
                                                <div class="field-mod__container___2Q571" data-reactid=".0.2.0.1.0.0.0"><label for="itemName" class="field-mod__label___2dQlH" data-reactid=".0.2.0.1.0.0.0.0">宝贝名称:</label>
                                                    <div class="field-mod__field___3-eGV" data-reactid=".0.2.0.1.0.0.0.1"><input class="field-input-mod__input___3H1qE" id="itemName" type="text" data-reactid=".0.2.0.1.0.0.0.1.0"></div>
                                                </div>
                                            </div>
                                            <div style="float:left;width:66.66666666666666%;" data-reactid=".0.2.0.1.0.1">
                                                <div class="field-mod__container___2Q571 date-range-mod__container___3nPEC" data-reactid=".0.2.0.1.0.1.0"><label class="field-mod__label___2dQlH" data-reactid=".0.2.0.1.0.1.0.0">创建时间:</label>
                                                    <div class="field-mod__field___3-eGV" data-reactid=".0.2.0.1.0.1.0.1"><input class="field-input-mod__input___3H1qE" placeholder="请选择时间范围起始" type="text" data-reactid=".0.2.0.1.0.1.0.1.0"><span class="date-range-mod__sep___1Uz5o" data-reactid=".0.2.0.1.0.1.0.1.1">-</span><input class="field-input-mod__input___3H1qE" placeholder="请选择时间范围结束" type="text" data-reactid=".0.2.0.1.0.1.0.1.2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-mod__row___3CI3c" style="margin-top:10px;margin-bottom:10px;" data-reactid=".0.2.0.1.1">
                                            <div style="float:left;width:33.33333333333333%;" data-reactid=".0.2.0.1.1.0">
                                                <div class="field-mod__container___2Q571" data-reactid=".0.2.0.1.1.0.0"><label for="buyerNick" class="field-mod__label___2dQlH" data-reactid=".0.2.0.1.1.0.0.0">买家昵称:</label>
                                                    <div class="field-mod__field___3-eGV" data-reactid=".0.2.0.1.1.0.0.1"><input class="field-input-mod__input___3H1qE" id="buyerNick" type="text" data-reactid=".0.2.0.1.1.0.0.1.0"></div>
                                                </div>
                                            </div>
                                            <div style="float:left;width:66.66666666666666%;" data-reactid=".0.2.0.1.1.1">
                                                <div class="field-mod__container___2Q571" data-reactid=".0.2.0.1.1.1.0"><label for="bizOrderId" class="field-mod__label___2dQlH" data-reactid=".0.2.0.1.1.1.0.0">订单编号:</label>
                                                    <div class="field-mod__field___3-eGV" data-reactid=".0.2.0.1.1.1.0.1">
                                                        <input class="field-input-mod__input___3H1qE" id="bizOrderId" name="bizOrderId" type="text" data-reactid=".0.2.0.1.1.1.0.1.0" data-spm-anchor-id="a1z09.1.0.i0.73033606rxn7yw" value="<?php echo $orderid; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-mod__row___3CI3c" style="margin-top:15px;margin-bottom:2px;" data-reactid=".0.2.0.1.2">
                                            <div class="field-mod__container___2Q571" data-reactid=".0.2.0.1.2.0"><label class="field-mod__label___2dQlH" data-reactid=".0.2.0.1.2.0.0"></label>
                                                <div class="field-mod__field___3-eGV" data-reactid=".0.2.0.1.2.0.1" data-spm-anchor-id="a1z09.1.0.i3.73033606rxn7yw">
                                                    <button class="button-mod__button___2rxXV button-mod__primary___3CCZd" style="margin-right:15px;" type="submit">搜索订单</button>
                                                    <button class="button-mod__button___2rxXV button-mod__default___1TKo-" data-reactid=".0.2.0.1.2.0.1.1">导出/下载历史订单</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="row-mod__row___3CI3c" data-reactid=".0.3">
                                    <div style="float:left;width:;" data-reactid=".0.3.0">
                                        <div class="roller-tips-box" data-reactid=".0.3.0.0">
                                            <div style="overflow: hidden; height: 18px;" data-reactid=".0.3.0.0.0">
                                                <div style="margin-top: -3.6px;" data-reactid=".0.3.0.0.0.0">
                                                    <div data-reactid=".0.3.0.0.0.0.0">
                                                        <div data-reactid=".0.3.0.0.0.0.0.0">


                                                            <span class="fp-link" style="background: transparent url(//assets.alicdn.com/sys/common/img/msg_bg.png) no-repeat scroll 4px -299px;padding-left: 20px;"><a target="_blank" href="https://h5.m.taobao.com/qn/pc/niuba-feeds.html#/detail/10403981?_k=d4j90u" style="color:red;">千万商家：公益“护苗”行动，你愿意加入我们吗？</a></span>
                                                        </div>
                                                    </div>
                                                    <div data-reactid=".0.3.0.0.0.0.1">
                                                        <div data-reactid=".0.3.0.0.0.0.1.0">

                                                            <span style="background: transparent url(//assets.alicdn.com/sys/common/img/msg_bg.png) no-repeat scroll 4px -299px;padding-left: 20px;" class="mm-link"><a target="_blank" href="https://www.yuque.com/docs/share/5b8cff1b-06fa-4afd-97ec-14ccedcd219b#" style="color:red;">又客服要培训了？又有数据表要协同了？快用文档知识库工具来解决！</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><span data-reactid=".0.3.1"></span>
                                </div>
                                <div class="row-mod__row___3CI3c" data-reactid=".0.4"><noscript data-reactid=".0.4.0"></noscript></div><span id="nav_anchor" style="visibility:hidden;height:0;" data-reactid=".0.5"></span>
                                <div class="tabs-mod__container___FSB_J nav-mod__tabs___5DHRQ" data-reactid=".0.6">
                                    <div class="tabs-mod__main___1fOqP" data-reactid=".0.6.0">
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$latest3Months"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$latest3Months.0">近三个月订单</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$latest3Months.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$waitBuyerPay"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$waitBuyerPay.0">等待买家付款</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$waitBuyerPay.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$waitSend"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$waitSend.0">等待发货</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$waitSend.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$haveSendGoods"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$haveSendGoods.0">已发货</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$haveSendGoods.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$refunding"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$refunding.0">退款中</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$refunding.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$waitRate"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$waitRate.0">需要评价</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$waitRate.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$success"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$success.0">成功的订单</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$success.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$closed"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$closed.0">关闭的订单</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$closed.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7 tabs-mod__selected___3nBmw" data-reactid=".0.6.0.$before3Months"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$before3Months.0">三个月前订单</span><span class="tabs-mod__sep___66CRX" data-reactid=".0.6.0.$before3Months.1">|</span></div>
                                        <div class="tabs-mod__tab___ZlrX7" data-reactid=".0.6.0.$drugPending"><span class="nav-mod__tab___2Jdwe" data-reactid=".0.6.0.$drugPending.0">待处理的处方药订单</span></div>
                                    </div>
                                    <div class="tabs-mod__minors___qt8V6" data-reactid=".0.6.1"></div>
                                </div>
                                <div class="the-extra-entries" data-reactid=".0.7"></div>
                                <?php if ($orders) { ?>
                                    <div data-reactid=".0.8">
                                        <div class="row-mod__row___3CI3c" style="margin-bottom:10px;" data-reactid=".0.8.0">
                                            <div style="float:left;width:;" data-reactid=".0.8.0.0">
                                                <div style="margin-left:10px;line-height:24px;" data-reactid=".0.8.0.0.0"><label style="margin-right:15px;" data-reactid=".0.8.0.0.0.0"><input type="checkbox" style="margin:0 3px 0 0;" data-cbtype="all" data-reactid=".0.8.0.0.0.0.0"><span data-reactid=".0.8.0.0.0.0.1">全选</span></label><span data-reactid=".0.8.0.0.0.1"></span><span data-reactid=".0.8.0.0.0.2"></span><span data-reactid=".0.8.0.0.0.3"></span><span data-reactid=".0.8.0.0.0.4"></span></div>
                                            </div>
                                            <div style="float:left;width:;" data-reactid=".0.8.0.1">
                                                <div style="line-height:24px;display:flex;" data-reactid=".0.8.0.1.0"></div>
                                            </div>
                                            <div style="float:right;width:;" data-reactid=".0.8.0.2">
                                                <div class="simple-pagination-mod__container___1ls_M" data-reactid=".0.8.0.2.0"><button class="button-mod__button___2rxXV button-mod__default___1TKo- button-mod__small___16IBI simple-pagination-mod__prev___1o_AY" disabled="" data-reactid=".0.8.0.2.0.0">上一页</button><button class="button-mod__button___2rxXV button-mod__default___1TKo- button-mod__small___16IBI" data-reactid=".0.8.0.2.0.1" disabled="">下一页</button></div>
                                            </div>
                                        </div>
                                        <table class="table-mod__table___3sqJL" style="background:#F9F9F9;border:1px solid #ECECEC;margin-bottom:5px;text-align:center;" data-reactid=".0.8.1">
                                            <colgroup data-reactid=".0.8.1.0">
                                                <col class="table-mod__col1___1XWQp" data-reactid=".0.8.1.0.0">
                                                <col class="table-mod__col2___24tap" data-reactid=".0.8.1.0.1">
                                                <col class="table-mod__col3___QO5a9" data-reactid=".0.8.1.0.2">
                                                <col class="table-mod__col4___2C2uW" data-reactid=".0.8.1.0.3">
                                                <col class="table-mod__col5___20kdu" data-reactid=".0.8.1.0.4">
                                                <col class="table-mod__col6___2U6R4" data-reactid=".0.8.1.0.5">
                                                <col class="table-mod__col7___3zpUp" data-reactid=".0.8.1.0.6">
                                                <col class="table-mod__col8___2iLTW" data-reactid=".0.8.1.0.7">
                                            </colgroup>
                                            <tbody data-reactid=".0.8.1.1">
                                                <tr data-reactid=".0.8.1.1.0">
                                                    <td data-reactid=".0.8.1.1.0.0">宝贝</td>
                                                    <td data-reactid=".0.8.1.1.0.1">单价</td>
                                                    <td data-reactid=".0.8.1.1.0.2">数量</td>
                                                    <td data-reactid=".0.8.1.1.0.3">售后</td>
                                                    <td data-reactid=".0.8.1.1.0.4">买家</td>
                                                    <td data-reactid=".0.8.1.1.0.5">交易状态</td>
                                                    <td data-reactid=".0.8.1.1.0.6">实收款</td>
                                                    <td data-reactid=".0.8.1.1.0.7">评价</td>
                                                </tr>
                                            </tbody>
                                        </table><span data-reactid=".0.8.2"></span>
                                        <div class="item-mod__trade-order___2LnGB trade-order-main" data-reactid=".0.8.3:$2471980788827543757">
                                            <table class="table-mod__table___3sqJL item-mod__head___38O6X" data-reactid=".0.8.3:$2471980788827543757.0">
                                                <colgroup data-reactid=".0.8.3:$2471980788827543757.0.0">
                                                    <col class="table-mod__col1___1XWQp" data-reactid=".0.8.3:$2471980788827543757.0.0.0">
                                                    <col class="table-mod__col2___24tap" data-reactid=".0.8.3:$2471980788827543757.0.0.1">
                                                    <col class="table-mod__col3___QO5a9" data-reactid=".0.8.3:$2471980788827543757.0.0.2">
                                                    <col class="table-mod__col4___2C2uW" data-reactid=".0.8.3:$2471980788827543757.0.0.3">
                                                    <col class="table-mod__col5___20kdu" data-reactid=".0.8.3:$2471980788827543757.0.0.4">
                                                    <col class="table-mod__col6___2U6R4" data-reactid=".0.8.3:$2471980788827543757.0.0.5">
                                                    <col class="table-mod__col7___3zpUp" data-reactid=".0.8.3:$2471980788827543757.0.0.6">
                                                    <col class="table-mod__col8___2iLTW" data-reactid=".0.8.3:$2471980788827543757.0.0.7">
                                                </colgroup>
                                                <tbody data-reactid=".0.8.3:$2471980788827543757.0.1">
                                                    <tr data-reactid=".0.8.3:$2471980788827543757.0.1.0">
                                                        <td class="item-mod__thead-cell___3aIQ_" colspan="7" data-reactid=".0.8.3:$2471980788827543757.0.1.0.0"><label class="item-mod__checkbox-label___cRGUj" data-reactid=".0.8.3:$2471980788827543757.0.1.0.0.0"><input type="checkbox" name="orderid" value="2471980788827543757" style="margin:0 3px 0 0;" data-cbtype="item" data-reactid=".0.8.3:$2471980788827543757.0.1.0.0.0.0"><span data-reactid=".0.8.3:$2471980788827543757.0.1.0.0.0.1">订单号: </span><span data-reactid=".0.8.3:$2471980788827543757.0.1.0.0.0.2"> </span><span data-reactid=".0.8.3:$2471980788827543757.0.1.0.0.0.3"><?php echo  isset($orders['orderid']) ? $orders['orderid'] : '' ?></span><span class="item-mod__create-time___1DIMJ" data-reactid=".0.8.3:$2471980788827543757.0.1.0.0.0.4">创建时间: </span><span data-reactid=".0.8.3:$2471980788827543757.0.1.0.0.0.5"> </span><span data-reactid=".0.8.3:$2471980788827543757.0.1.0.0.0.6"><?php echo $orders['fkrq'] ?></span></label></td>
                                                        <td class="item-mod__thead-cell___3aIQ_ item-mod__thead-operations-container___1M3XV" data-reactid=".0.8.3:$2471980788827543757.0.1.0.1">
                                                            <div data-reactid=".0.8.3:$2471980788827543757.0.1.0.1.0"></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table-mod__table___3sqJL suborder-mod__order-table___2SEhF" data-reactid=".0.8.3:$2471980788827543757.1">
                                                <colgroup data-reactid=".0.8.3:$2471980788827543757.1.0">
                                                    <col class="table-mod__col1___1XWQp" data-reactid=".0.8.3:$2471980788827543757.1.0.0">
                                                    <col class="table-mod__col2___24tap" data-reactid=".0.8.3:$2471980788827543757.1.0.1">
                                                    <col class="table-mod__col3___QO5a9" data-reactid=".0.8.3:$2471980788827543757.1.0.2">
                                                    <col class="table-mod__col4___2C2uW" data-reactid=".0.8.3:$2471980788827543757.1.0.3">
                                                    <col class="table-mod__col5___20kdu" data-reactid=".0.8.3:$2471980788827543757.1.0.4">
                                                    <col class="table-mod__col6___2U6R4" data-reactid=".0.8.3:$2471980788827543757.1.0.5">
                                                    <col class="table-mod__col7___3zpUp" data-reactid=".0.8.3:$2471980788827543757.1.0.6">
                                                    <col class="table-mod__col8___2iLTW" data-reactid=".0.8.3:$2471980788827543757.1.0.7">
                                                </colgroup>
                                                <?php if ($orders) { ?>
                                                    <tbody data-reactid=".0.8.3:$2471980788827543757.1.1">
                                                        <tr class="suborder-mod__item___dY2q5 suborder-mod__first-item___vJlL6" data-reactid=".0.8.3:$2471980788827543757.1.1.$0">
                                                            <td class="sol-mod__no-br___toLPG" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0">
                                                                <div class="ml-mod__container___1zaKJ production-mod__production___3ZePJ suborder-mod__production___1eyM1" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0">
                                                                    <div class="ml-mod__media___28HC5" style="width:50px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.0"><a href="//trade.taobao.com/trade/detail/tradeSnap.htm?tradeID=2471980788827543757&amp;snapShot=true" class="production-mod__pic___2Wuak" target="_blank" rel="noopener noreferrer" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.0.0">
                                                                            <img src="<?php echo $orders['flag'] == 1 ? $orders['img'] : '//gsnapshot.alicdn.com/imgextra/O1CNA1iM6sIN2JvGd7rsN1l_!!1583809483-0-psf.jpg_sum.jpg?time=1645059054000' ?>" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.0.0.0"><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.0.0.1"> </span></a></div>
                                                                    <div style="margin-left:60px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1">
                                                                        <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.0"><a href="//trade.taobao.com/trade/detail/tradeSnap.htm?tradeID=2471980788827543757&amp;snapShot=true" target="_blank" rel="noopener noreferrer" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.0.0"><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.0.0.0"> </span><span style="line-height:16px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.0.0.1"><?php echo ($orders['flag'] == 1) ? $orders['name'] : '正常发货】PULMICORT 普米克令舒 吸入用布地奈德混悬液 2ml:1mg*5支/包cfy 哮喘' ?></span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.0.0.2"> </span></a><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.0.1"></span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.0.2"></span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.0.3"></span></p>
                                                                        <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.1"><span class="production-mod__sku-item___3s6lG" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.1.$0"><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.1.$0.0">套餐类型</span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.1.$0.1">：</span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.1.$0.2"><?php echo ($orders['flag'] == 1) ? $orders['info'] : '4盒装' ?></span></span></p>
                                                                        <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.2" data-spm-anchor-id="a1z09.1.0.i2.73033606rxn7yw"><a href="//rule.tmall.com/tdetail-4400.htm" title="正品保证" type="3" style="margin-right:8px;" target="_blank" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.2.$0"><img src="//img.alicdn.com/tps/i2/T1SyeXFpliXXaSQP_X-16-16.png" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.2.$0.0"></a><a href="//www.taobao.com/go/act/315/xfzbz_rsms.php?ad_id=&amp;am_id=130011830696bce9eda3&amp;cm_id=&amp;pm_id=" title="如实描述" type="3" style="margin-right:8px;" target="_blank" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.2.$1"><img src="//img.alicdn.com/tps/TB1PDB6IVXXXXaVaXXXXXXXXXXX.png" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$0.0.1.2.$1.0"></a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="sol-mod__no-br___toLPG" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$1">
                                                                <div class="price-mod__price___3Un7c" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$1.0">
                                                                    <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$1.0.1"><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$1.0.1.0">￥</span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$1.0.1.1"><?php echo $orders['dj']; ?></span></p>
                                                                </div>
                                                            </td>
                                                            <td class="sol-mod__no-br___toLPG" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$2">
                                                                <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$2.0">
                                                                    <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$2.0.0"><?php echo (int)$orders['sl'] < 0 ? -1 * (int)$orders['sl'] : $orders['sl']; ?></p>
                                                                </div>
                                                            </td>
                                                            <td data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$3">
                                                                <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$3.0">
                                                                    <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$3.0.0">
                                                                        <p style="margin-bottom:3px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$3.0.0.$0"><span class="text-mod__link___36nmM text-mod__secondary___15E3- text-mod__hover___t2aVK" action="a8" data="[object Object]" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$3.0.0.$0.0">打开售后入口</span></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4">
                                                                <div class="buyer-mod__buyer___3NRwJ" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0">
                                                                    <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.0"><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.0.0"><?php echo $orders['mj'] ?></span><i class="icon-mod__icon___1AFrE tm-iconfont icon-filter" title="查询该买家订单" style="color:#FFDF39;cursor:pointer;margin-left:5px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.0.1"></i></p><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.1"></span>
                                                                    <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.2">
                                                                        <p style="margin-bottom:3px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.2.$0"><a href="/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&amp;event_submit_do_query=1" class="text-mod__link___36nmM text-mod__hover___t2aVK" target="_blank" rel="noopener noreferrer" action="a14" title="查询该买家订单" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.2.$0.0"></a></p>
                                                                    </div>
                                                                    <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.3"><span id="2213061545737" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.3.0"><span class="ww-light ww-large" data-display="inline" data-nick="tb014198529" data-tnick="tb014198529" data-scene="consult" data-torole="buyer" data-source="light" data-sceneparam="{&quot;toRole&quot;: &quot;&quot;,&quot;bizRef&quot;: &quot;&quot;}" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$4.0.3.0.0"><a href="javascript: void(0);" target="_blank" class="ww-inline ww-online" title="点此可以直接和卖家交流选好的宝贝，或相互交流网购体验，还支持语音视频噢。"><span>旺旺在线</span></a></span></span></p>
                                                                </div>
                                                            </td>
                                                            <td class="" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$5">
                                                                <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$5.0">
                                                                    <p style="margin-bottom:3px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$5.0.0"><span class="text-mod__link___36nmM" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$5.0.0.0"><?php echo (int)$orders['sl'] < 0 ? '交易关闭' : '交易成功'; ?></span></p>
                                                                    <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$5.0.1">
                                                                        <p style="margin-bottom:3px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$5.0.1.$0"><a href="2.php?trade.taobao.com/trade/itemlist/list_sold_items.htm?action=itemlist/SoldHisQueryAction&bizOrderId=<?php echo $orders['orderid'] ?>" class="text-mod__link___36nmM text-mod__secondary___15E3- text-mod__hover___t2aVK" target="_blank" rel="noopener noreferrer" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$5.0.1.$0.0">详情</a></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6">
                                                                <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0">
                                                                    <div class="price-mod__price___3Un7c" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.0">
                                                                        <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.0.2"><strong data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.0.2.0"><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.0.2.0.0">￥</span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.0.2.0.1"><?php echo (int)$orders['sl'] < 0 ? -1 * $orders['je'] : $orders['je']; ?></span></strong></p>
                                                                    </div>
                                                                    <p style="color:#6c6c6c;font-family:verdana;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.1:$0"><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.1:$0.0"></span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.1:$0.1">(含快递:￥0.00)</span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.1:$0.2"></span><span data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.1:$0.3"></span></p>
                                                                    <div style="font-family:verdana;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.2">
                                                                        <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.2.0">
                                                                            <p style="margin-bottom:3px;" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.2.0.$0"><a href="express.php?trade_id=<?php echo $orders['orderid'] ?>&amp;seller_id=1583809483" class="text-mod__link___36nmM text-mod__secondary___15E3- text-mod__hover___t2aVK" target="_blank" rel="noopener noreferrer" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.2.0.$0.0">查看物流</a></p>
                                                                        </div>
                                                                    </div>
                                                                    <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.3"><a href="http://www.taobao.com/go/act/integrated/maijia-index.php?sprefer=symj27" title="该订单来自您的手机淘宝店铺" style="margin-right:5px;" target="_blank" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.3.$0"><img src="//img.alicdn.com/tps/i1/T1xRBqXdNAXXXXXXXX-46-16.png" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$6.0.3.$0.0"></a></p>
                                                                </div>
                                                            </td>
                                                            <td class="" data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$7">
                                                                <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$7.0">
                                                                    <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$7.0.0"></p>
                                                                    <p data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$7.0.1"></p>
                                                                    <div data-reactid=".0.8.3:$2471980788827543757.1.1.$0.$7.0.1.0"></div>
                                                                    <p></p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php } ?>
                                            </table>
                                        </div>
                                        <div class="row-mod__row___3CI3c" style="margin-bottom:10px;" data-reactid=".0.8.4">
                                            <div style="float:left;width:;" data-reactid=".0.8.4.0">
                                                <div style="margin-left:10px;line-height:24px;" data-reactid=".0.8.4.0.0"><label style="margin-right:15px;" data-reactid=".0.8.4.0.0.0"><input type="checkbox" style="margin:0 3px 0 0;" data-cbtype="all" data-reactid=".0.8.4.0.0.0.0"><span data-reactid=".0.8.4.0.0.0.1">全选</span></label><span data-reactid=".0.8.4.0.0.1"></span><span data-reactid=".0.8.4.0.0.2"></span><span data-reactid=".0.8.4.0.0.3"></span><span data-reactid=".0.8.4.0.0.4"></span></div>
                                            </div>
                                            <div style="float:right;width:;" data-reactid=".0.8.4.2">
                                                <div class="row-mod__row___3CI3c" data-reactid=".0.8.4.2.0">
                                                    <div style="float:left;width:;" data-reactid=".0.8.4.2.0.0">
                                                        <ul class="pagination " unselectable="unselectable" data-reactid=".0.8.4.2.0.0.0">
                                                            <li title="上一页" class="pagination-disabled pagination-prev" data-reactid=".0.8.4.2.0.0.0.0"><a data-reactid=".0.8.4.2.0.0.0.0.0"></a></li>
                                                            <li title="1" class="pagination-item pagination-item-1 pagination-item-active" data-reactid=".0.8.4.2.0.0.0.1:$1"><a data-reactid=".0.8.4.2.0.0.0.1:$1.0">1</a></li>
                                                            <li title="下一页" class="pagination-disabled pagination-next" data-reactid=".0.8.4.2.0.0.0.2"><a data-reactid=".0.8.4.2.0.0.0.2.0"></a></li><noscript data-reactid=".0.8.4.2.0.0.0.4"></noscript>
                                                        </ul>
                                                    </div>
                                                    <div style="float:left;width:;" data-reactid=".0.8.4.2.0.1"><button class="button-mod__button___2rxXV button-mod__default___1TKo- pagination-mod__show-more-page-button___txdoB" data-reactid=".0.8.4.2.0.1.0">显示更多页码</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="loading-mod__loading___1TLO4 loading-mod__hidden___3dXx5" data-reactid=".0.9">
                                    <div class="loading-mod__bg___3akeq loading-mod__q___1ts1X" data-reactid=".0.9.0"></div>
                                    <div class="loading-mod__bg___3akeq loading-mod__z___1Nry0" data-reactid=".0.9.1"></div>
                                </div>
                            </div>
                        </div>

                        <script>
                            <?php

                            $json = '{
                                "error": "",
                                "extra": {
                                    "archiveEndTime": "2022-12-19",
                                    "needAuth": true,
                                    "queryTitleMaxSize": 15,
                                    "sellerExport": "//tradearchive.taobao.com/trade/itemlist/list_export_order.htm",
                                    "tjbPriority": 0
                                },
                                "mainOrders": [{
                                    "buyer": {
                                        "guestUser": false,
                                        "id": 3404958832,
                                        "memberUrl": "//member1.taobao.com/member/userProfile.jhtml?userID=t_1503842000048_0757&sign=7331f4e943bf865c7931022b1e042dc3",
                                        "nick": "t_1503842000048_0757",
                                        "operations": [{
                                            "action": "a14",
                                            "imgUrl": "//gtd.alicdn.com/tps/i8/T1KNtuXc4rXXXXXXXX-12-12.png",
                                            "style": "t0",
                                            "title": "查询该买家订单",
                                            "type": "operation",
                                            "url": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1"
                                        }]
                                    },
                                    "extra": {
                                        "batchSendGoods": 1,
                                        "closed": true,
                                        "currency": "CNY",
                                        "currencySymbol": "￥",
                                        "disableCheckbox": false,
                                        "inHold": false,
                                        "isShowSellerService": false,
                                        "sellerFlag": 0
                                    },
                                    "id": "' . $orders['orderid'] . '",
                                    "operations": [

                                    ],
                                    "orderInfo": {
                                        "archive": true,
                                        "b2C": true,
                                        "createTime": "2022-11-24 23:50:34",
                                        "id": "' . $orders['orderid'] . '"
                                    },
                                    "payInfo": {
                                        "actualFee": "12.80",
                                        "icons": [{
                                            "linkTitle": "该订单来自您的手机淘宝店铺",
                                            "linkUrl": "http://www.taobao.com/go/act/integrated/maijia-index.php?sprefer=symj27",
                                            "type": 3,
                                            "url": "//img.alicdn.com/tps/i1/T1xRBqXdNAXXXXXXXX-46-16.png"
                                        }],
                                        "postType": "(含快递:￥0.00)"
                                    },
                                    "statusInfo": {
                                        "operations": [{
                                            "params": {
                                                "qianNiuPCDetailUrl": "//trade.tmall.com/detail/orderDetail.htm?bizOrderId=' . $orders['orderid'] . '",
                                                "solutionPCDetailUrl": "//trade.tmall.com/detail/orderDetail.htm?bizOrderId=' . $orders['orderid'] . '"
                                            },
                                            "style": "t16",
                                            "text": "详情",
                                            "type": "operation",
                                            "url": "/2.php"
                                        }],
                                        "text": "交易关闭",
                                        "type": "t0"
                                    },
                                    "subOrders": [{
                                        "itemInfo": {
                                            "extra": [{
                                                "name": "",
                                                "value": "",
                                                "visible": ""
                                            }],
                                            "itemUrl": "//trade.taobao.com/trade/detail/tradeSnap.htm?tradeID=1849353709514725782&snapShot=true",
                                            "pic": "//gsnapshot.alicdn.com/imgextra/O1CN01HCknQV2JvGhSeBQAR_!!1583809483-0-picasso.jpg_sum.jpg?time=<?php echo time(); ?>",
                                            "serviceIcons": [{
                                                    "linkTitle": "正品保证",
                                                    "linkUrl": "//rule.tmall.com/tdetail-4400.htm",
                                                    "name": "正品保证",
                                                    "title": "正品保证",
                                                    "type": 3,
                                                    "url": "//img.alicdn.com/tps/i2/T1SyeXFpliXXaSQP_X-16-16.png"
                                                },
                                                {
                                                    "linkTitle": "如实描述",
                                                    "linkUrl": "//www.taobao.com/go/act/315/xfzbz_rsms.php?ad_id=&am_id=130011830696bce9eda3&cm_id=&pm_id=",
                                                    "name": "如实描述",
                                                    "title": "如实描述",
                                                    "type": 3,
                                                    "url": "//img.alicdn.com/tps/TB1PDB6IVXXXXaVaXXXXXXXXXXX.png"
                                                },
                                                {
                                                    "linkTitle": "七天退换",
                                                    "linkUrl": "//pages.tmall.com/wow/seller/act/seven-day",
                                                    "name": "七天退换",
                                                    "title": "七天退换",
                                                    "type": 3,
                                                    "url": "//img.alicdn.com/tps/i3/T1Vyl6FCBlXXaSQP_X-16-16.png"
                                                }
                                            ],
                                            "skuId": 0,
                                            "skuText": [{
                                                "name": "套餐类型:",
                                                "value": "4盒装",
                                                "visible": ""
                                            }],
                                            "title": "令舒 吸入用布地奈德混悬液 2ml:1mg*5支/包cfy 哮喘"
                                        },
                                        "operations": [{
                                            "style": "t0",
                                            "text": "保险服务",
                                            "type": "operation",
                                            "url": "//prod-baoxian.taobao.com/item/sellerList.htm?bizOrderId=1849353709514725782"
                                        }],
                                        "priceInfo": {
                                            "realTotal": "' . $orders['je'] . '"
                                        },
                                        "quantity": "' . $orders['je'] . '"
                                    }]
                                }],
                                "page": {
                                    "currentPage": 1,
                                    "globalCodes": [

                                    ],
                                    "pageSize": 15,
                                    "prefetchCount": 31,
                                    "queryForTitle": false,
                                    "totalNumber": 15,
                                    "totalPage": 1
                                },
                                "query": {
                                    "action": "itemlist/SoldHisQueryAction",
                                    "auctionType": 0,
                                    "buyerNick": "",
                                    "cartItemDOList": [

                                    ],
                                    "close": 0,
                                    "dateBegin": 0,
                                    "dateEnd": 0,
                                    "extra": {

                                    },
                                    "lastStartRow": "ha3,1749159014619698484,0,15",
                                    "pageNum": 1,
                                    "pageSize": 15,
                                    "payDateBegin": 0,
                                    "payDateEnd": 0,
                                    "queryMore": false,
                                    "queryOrder": "desc",
                                    "rxAuditFlag": 0,
                                    "rxElectronicAllFlag": 0,
                                    "rxElectronicAuditFlag": 0,
                                    "rxHasSendFlag": 0,
                                    "rxOldFlag": 0,
                                    "rxSendFlag": 0,
                                    "rxSuccessflag": 0,
                                    "rxWaitSendflag": 0,
                                    "sellerMemo": 0,
                                    "tabCode": "before3Months",
                                    "tradeTag": 0,
                                    "useCheckcode": false,
                                    "useOrderInfo": false
                                },
                                "queryOption": {
                                    "aftersaleType": [{
                                            "label": "全部",
                                            "value": "ALL"
                                        },
                                        {
                                            "label": "买家投诉",
                                            "value": "BUYER_SUIT"
                                        },
                                        {
                                            "label": "我已投诉",
                                            "value": "SELLER_SUIT"
                                        },
                                        {
                                            "label": "退款中",
                                            "value": "REFUNDING"
                                        }
                                    ],
                                    "appNameList": [{
                                            "label": "全部订单",
                                            "value": "ALL"
                                        },
                                        {
                                            "label": "天猫APP",
                                            "value": "tmall"
                                        }
                                    ],
                                    "bizType": [{
                                            "label": "全部",
                                            "value": "ALL"
                                        },
                                        {
                                            "label": "机票订单",
                                            "value": "1400"
                                        },
                                        {
                                            "label": "数字订单",
                                            "value": "1500"
                                        },
                                        {
                                            "label": "理财订单",
                                            "value": "3000"
                                        },
                                        {
                                            "label": "网游订单",
                                            "value": "900"
                                        },
                                        {
                                            "label": "酒店订单",
                                            "value": "710"
                                        },
                                        {
                                            "label": "保险订单",
                                            "value": "1102"
                                        },
                                        {
                                            "label": "企采订单",
                                            "value": "corpMarket"
                                        },
                                        {
                                            "label": "送礼订单",
                                            "value": "giftMarket"
                                        },
                                        {
                                            "label": "租赁订单",
                                            "value": "leaseMarket"
                                        },
                                        {
                                            "label": "境外订单",
                                            "value": "oversea"
                                        }
                                    ],
                                    "commonTradeType": [{
                                            "label": "所有类型",
                                            "value": 0
                                        },
                                        {
                                            "label": "一口价",
                                            "value": 1
                                        },
                                        {
                                            "label": "拍卖",
                                            "value": 2
                                        }
                                    ],
                                    "logisticsType": [{
                                            "label": "全部",
                                            "value": "ALL"
                                        },
                                        {
                                            "label": "货到付款",
                                            "value": "COD"
                                        },
                                        {
                                            "label": "卖家物流",
                                            "value": "SELLER_PAYED"
                                        }
                                    ],
                                    "orderStatus": [{
                                            "label": "全部",
                                            "value": "ALL"
                                        },
                                        {
                                            "label": "等待买家付款",
                                            "value": "NOT_PAID"
                                        },
                                        {
                                            "label": "买家已付款",
                                            "value": "PAID"
                                        },
                                        {
                                            "label": "卖家已发货",
                                            "value": "SEND"
                                        },
                                        {
                                            "label": "交易成功",
                                            "value": "SUCCESS"
                                        },
                                        {
                                            "label": "交易关闭",
                                            "value": "DROP"
                                        },
                                        {
                                            "label": "待付款和待发货订单",
                                            "value": "NOT_PAID_AND_NOT_SEND"
                                        },
                                        {
                                            "label": "未完成的订单",
                                            "value": "NOT_FINISHED"
                                        },
                                        {
                                            "label": "退款中的订单",
                                            "value": "REFUNDING"
                                        },
                                        {
                                            "label": "定金已付",
                                            "value": "FRONT_PAID"
                                        },
                                        {
                                            "label": "异常订单",
                                            "value": "EXCEPTIONAL"
                                        }
                                    ],
                                    "preSaleTradeType": [{
                                            "label": "全部",
                                            "value": "ALL"
                                        },
                                        {
                                            "label": "预付款已付未确认",
                                            "value": "waitConfirm"
                                        },
                                        {
                                            "label": "已确认未付尾款",
                                            "value": "waitPayWeikuan"
                                        }
                                    ],
                                    "rateStatus": [{
                                            "label": "全部",
                                            "value": "ALL"
                                        },
                                        {
                                            "label": "需我评价",
                                            "value": "I_HAS_NOT_COMMENT"
                                        },
                                        {
                                            "label": "我已评价",
                                            "value": "I_HAS_COMMENT"
                                        },
                                        {
                                            "label": "对方已评",
                                            "value": "OTHER_HAS_COMMENT"
                                        },
                                        {
                                            "label": "双方已评",
                                            "value": "ALL_COMMENT"
                                        }
                                    ]
                                },
                                "tabs": [{
                                        "code": "latest3Months",
                                        "herf": "/trade/itemlist/list_sold_items.htm?userSwitch=1",
                                        "text": "近三个月订单"
                                    },
                                    {
                                        "code": "waitBuyerPay",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1&auctionStatus=NOT_PAID&tabCode=waitBuyerPay",
                                        "text": "等待买家付款"
                                    },
                                    {
                                        "code": "waitSend",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1&auctionStatus=PAID&tabCode=waitSend",
                                        "text": "等待发货"
                                    },
                                    {
                                        "code": "haveSendGoods",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1&auctionStatus=SEND&tabCode=haveSendGoods",
                                        "text": "已发货"
                                    },
                                    {
                                        "code": "refunding",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1&auctionStatus=REFUNDING&tabCode=refunding",
                                        "text": "退款中"
                                    },
                                    {
                                        "code": "waitRate",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1&commentStatus=I_HAS_NOT_COMMENT&tabCode=waitRate",
                                        "text": "需要评价"
                                    },
                                    {
                                        "code": "success",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1&auctionStatus=SUCCESS&tabCode=success",
                                        "text": "成功的订单"
                                    },
                                    {
                                        "code": "closed",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1&auctionStatus=DROP&tabCode=closed",
                                        "text": "关闭的订单"
                                    },
                                    {
                                        "code": "before3Months",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldHisQueryAction&event_submit_do_query=1&tabCode=before3Months",
                                        "selected": true,
                                        "text": "三个月前订单"
                                    },
                                    {
                                        "code": "drugPending",
                                        "herf": "/trade/itemlist/list_sold_items.htm?action=itemlist/SoldQueryAction&event_submit_do_query=1&auctionStatus=AUDIT&tabCode=drugPending",
                                        "text": "待处理的处方药订单"
                                    }
                                ]
                            }';

                            //$json = json_encode($json, JSON_PRETTY_PRINT);

                            // $json = json_decode($json);

                            ?>

                            var data = JSON.parse(<?php echo $json; ?>);
                        </script>


                        <!--[if !(IE 8)]><!-->
                        <script src="//g.alicdn.com/tp/sold/1.8.16/index.js" charset="utf-8" crossorigin=""></script>
                        <!--<![endif]-->
                        <!--[if IE 8]>
<script src="//g.alicdn.com/tp/sold/1.8.16/index-ie8.js" charset="utf-8" crossorigin></script>
<![endif]-->

                        <script charset="utf-8" src="//market.m.taobao.com/app/aliww/bc-ww/webww"></script>


                        <div class="sold-ads-container">
                            <style>
                                .fn_161228_con {
                                    width: 840px;
                                    height: 70px;
                                    overflow: hidden;
                                    background-color: #f2fdfd;
                                    -ms-text-size-adjust: 100%;
                                    -webkit-text-size-adjust: 100%;
                                    font-family: "PingFangSC-Light", "Helvetica Neue", Helvetica, STHeiTi, "Microsoft YaHei", Arial, sans-serif;
                                    margin: 0;
                                    padding: 0;
                                    overflow: hidden;
                                }

                                .fn_161228_con .fn_161228_img_url {
                                    float: left;
                                    margin: 0 3px 0 0;
                                    padding: 0;
                                    overflow: hidden;
                                }
                            </style>
                            <div class="fn_161228_con">

                                <a href="https://huodong.taobao.com/wow/z/service-market/tbmrheader/operate" class="fn_161228_img_url" style="width: 90px;height: 70px;">
                                    <img src="https://img.alicdn.com/imgextra/i2/O1CN01UcwQFd1oxKI3gi2Oi_!!6000000005291-2-tps-90-70.png" width="90" height="70" alt=" ">
                                </a>

                                <a href="https://huodong.taobao.com/wow/z/service-market/tbmrheader/kfwbpd?spm=a1z13.fuwu-indext-2018.fuwu-daohang.6.55095aca5KgORW" class="fn_161228_img_url" style="width: 90px;height: 70px;">
                                    <img src="https://img.alicdn.com/imgextra/i1/O1CN01ZwC7h91uS4u6V2RZc_!!6000000006035-2-tps-90-70.png" width="90" height="70" alt=" ">
                                </a>

                                <a href="https://huodong.taobao.com/wow/z/service-market/tbmrheader/DrxazMnZpfmRbeYZ45HF" class="fn_161228_img_url" style="width: 90px;height: 70px;">
                                    <img src="https://img.alicdn.com/imgextra/i2/O1CN019Hc7yc1XHKYpS9yRl_!!6000000002898-0-tps-90-70.jpg" width="90" height="70" alt=" ">
                                </a>

                                <a href="https://fuwu.taobao.com/ser/detail.htm?spm=a1z13.pc_search_result.1234-fwlb.5.79a45acaYOkq90&amp;service_code=FW_GOODS-1001224024&amp;tracelog=search&amp;from_key=%E5%86%85%E5%AE%B9%E5%8F%82%E8%B0%8B" class="fn_161228_img_url" style="width: 280px;height: 70px;">
                                    <img src="https://img.alicdn.com/imgextra/i3/O1CN01lju3kP1IVKUIq2RBM_!!6000000000898-0-tps-840-210.jpg" width="280" height="70" alt=" ">
                                </a>

                            </div>


                            <br>
                            <!--AdForward Begin:-->
                            <div class="J_DirectionalBox">
                                <style>
                                    .fn_161228_url {
                                        float: left;
                                        margin: 0 3px 0 0;
                                        padding: 0;
                                        overflow: hidden;
                                    }

                                    .fn_161228_url img {
                                        display: block;
                                        border: none;
                                    }
                                </style>
                                <div>

                                    <a href="https://huodong.taobao.com/wow/z/service-market/tbmrheader/FfijHRdnjRRtCwGMr45M" class="fn_161228_url" style="width: 824px;height: 100px;">
                                        <img src="https://img.alicdn.com/imgextra/i2/O1CN01BiscZD1Dd34oCHweQ_!!6000000000238-0-tps-824-100.jpg" width="824" height="100" alt=" ">
                                    </a>

                                </div>

                            </div>
                            <!--AdForward End-->
                        </div>

                        <span class="mytaobao-rc-bt"><span></span></span>
                    </div>
                </div>
                <div class="col-sub">
                    <div id="mytaobao-menu">
                        <div class="service-button-container">
                            <a id="J_service_button" href="#" class="service-button link5" issub="true" data-url="//mai.taobao.com/home/getOrderedMenu.htm">我购买的服务<span class="normal-arrow">&gt;</span></a>
                        </div>
                        <div class="service-button-container" id="J_QuickMenu">
                            <a id="J_QuickMenuBtn" href="#" class="service-button link5 menu-setting" atpanel="mjzx.1.2">我的快捷菜单<span class="normal-arrow">&gt;</span></a>
                            <ul class="group">
                                <li data-spm="606" data-mid="606"><span><a target="_blank" href="https://ecrm.taobao.com/?scm=1028.1.2.606">客户运营平台</a></span></li>
                                <li data-spm="20023" data-mid="20023"><span><a target="_blank" href="https://tmc.tmall.com/baoming/view_list.htm?scm=1028.1.2.20023">官方活动报名</a></span></li>
                                <li data-spm="3300006" data-mid="3300006"><span><a target="_blank" href="http://d.alibaba.com/?scm=1028.1.2.3300006">生意参谋</a></span></li>
                                <li data-spm="903" data-mid="903"><span><a target="_blank" href="https://fuwu.tmall.com/?scm=1215.100.100.7&amp;scm=1028.1.2.903">我要订购</a></span></li>
                                <li data-spm="20001" data-mid="20001"><span><a target="_blank" href="https://store.taobao.com/shop/view_shop.htm?mytmenu=mdianpu&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;user_number_id=1583809483&amp;scm=1028.1.2.20001">查看淘宝店铺</a></span></li>
                                <li data-spm="10029" data-mid="10029"><span><a target="_blank" href="https://zhaoshang.tmall.com/common/brandList.htm?utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.2.10029">品牌和类目管理</a></span></li>
                                <li data-spm="20066" data-mid="20066"><span><a target="_blank" href="https://xbc-baoxian.taobao.com/portal/index.htm?spm=a1z09....d716.47c23606mfAjHt&amp;scm=1028.1.2.20066">商家保障</a></span></li>
                                <li data-spm="20012" data-mid="20012"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20012&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.2.20012">投诉管理</a></span></li>
                                <li data-spm="33000014" data-mid="33000014"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=33000014&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.2.33000014">申诉中心</a></span></li>
                                <li data-spm="33000067" data-mid="33000067"><span><a target="_blank" href="https://qinquan.taobao.com/complaint/seller/beComplaintsAuction.htm?spm=0.0.0.0.kPk7T0&amp;scm=1028.1.2.33000067">知识产权</a></span></li>
                            </ul>
                        </div>
                        <div id="J_SelectMenu" class="mytaobao-bd" data-url="//mai.taobao.com/home/get_seller_menu.htm" light-id="201" aria-multiselectable="true">
                            <div class="menu-box group_3" role="tablist">
                                <h3 class="mytaobao-bar first-bar" id="ks-accordion-tab44" role="tab" aria-expanded="true" aria-selected="true" aria-controls="ks-accordion-tab-panel33" tabindex="0"><span>营销中心</span><button oritabindex="0" tabindex="0">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel33" role="tabpanel" aria-hidden="false" aria-labelledby="ks-accordion-tab44">
                                    <li data-spm="606" data-mid="606"><span><a target="_blank" href="https://ecrm.taobao.com/?scm=1028.1.1.606">客户运营平台</a></span></li>
                                    <li data-spm="20023" data-mid="20023"><span><a target="_blank" href="https://tmc.tmall.com/baoming/view_list.htm?scm=1028.1.1.20023">官方活动报名</a></span></li>
                                    <li data-spm="33000069" data-mid="33000069"><span><a target="_blank" href="https://ip.alibaba.com/?scm=1028.1.1.33000069">娱乐营销中心</a></span></li>
                                    <li data-spm="33000083" data-mid="33000083"><span><a target="_blank" href="https://sale.tmall.com/home.htm?spm=a21xr.8701891.0.0.LXezMw&amp;scm=1028.1.1.33000083">营销活动中心</a></span></li>
                                    <li data-spm="33000085" data-mid="33000085"><span><a target="_blank" href="https://fuwu.taobao.com/activity/index.htm?scm=1028.1.1.33000085">营销推广中心</a></span></li>
                                    <li data-spm="330000834" data-mid="330000834"><span><a target="_blank" href="https://aliyx.tmall.com/?scm=1028.1.1.330000834">营销工具中心</a></span></li>
                                    <li data-spm="330000840" data-mid="330000840"><span><a target="_blank" href="https://lxz.tmall.com/?scm=1028.1.1.330000840">天猫快闪店</a></span></li>
                                    <li data-spm="330000901" data-mid="330000901"><span><a target="_blank" href="https://tmc.tmall.com/frontendRoute/newRouteWidth.htm?frontRoute=/bizBase/sucaiCenter/sucaiItemList&amp;scm=1028.1.1.330000901">天猫素材库</a></span></li>
                                    <li data-mid="no_id" class="hidden"><span><a href="javascript:void(0)" class="no-link">数据中心</a></span>
                                        <ul>
                                            <li data-spm="1105" data-mid="1105" class="hidden"><span><a target="_blank" href="http://mofang.taobao.com/p/login?f=4&amp;mytmenu=shujuzhuanye&amp;scm=1028.1.1.1105">数据魔方专业版</a></span></li>
                                            <li data-spm="20015" data-mid="20015" class="hidden"><span><a target="_blank" href="http://mofang.taobao.com/s/login?f=4&amp;mytmenu=shujubiaozhun&amp;scm=1028.1.1.20015">数据魔方标准版</a></span></li>
                                        </ul>
                                    </li>
                                    <li data-spm="20062" data-mid="20062" class="default_hide"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20062&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20062">手机营销专区</a></span></li>
                                    <li data-spm="3300006" data-mid="3300006"><span><a target="_blank" href="http://d.alibaba.com/?scm=1028.1.1.3300006">生意参谋</a></span></li>
                                    <li data-spm="33000028" data-mid="33000028" class="default_hide"><span><a target="_blank" href="http://equity-vip.tmall.com/liuliangbao/index.htm?scm=1028.1.1.33000028">流量宝</a></span></li>
                                    <li data-spm="33000041" data-mid="33000041"><span><a target="_blank" href="https://zhaoshang.tmall.com/crm/crmExcel.htm?scm=1028.1.1.33000041">商家协作填表</a></span></li>
                                    <li data-spm="20058" data-mid="20058" class="default_hide"><span><a target="_blank" href="https://market.m.taobao.com/app/tbcoin/coin_seller/index.html#/home?scm=1028.1.1.20058">淘金币营销</a></span></li>
                                    <li data-spm="330000906" data-mid="330000906"><span><a target="_blank" href="https://equity-vip.tmall.com/baoliao/exposeList.htm?scm=1028.1.1.330000906">特价爆品引流</a></span></li>
                                    <li data-spm="330000909" data-mid="330000909"><span><a target="_blank" href="https://h5.m.taobao.com/bgm/qn-portal/index.htm?scm=1028.1.1.330000909">自运营中心</a></span></li>
                                    <li data-spm="33000087" data-mid="33000087" class="default_hide"><span><a target="_blank" href="https://paimai.taobao.com/pmp/pub/index.htm#/?scm=1028.1.1.33000087">拍卖营销平台</a></span></li>
                                    <li data-spm="3300009107" data-mid="3300009107"><span><a target="_blank" href="https://we.taobao.com/creation/new?scene=waitou&amp;scm=1028.1.1.3300009107">发微淘</a></span></li>
                                    <li data-spm="3300009109" data-mid="3300009109"><span><a target="_blank" href="https://liveplatform.taobao.com/live/addLive.htm?scm=1028.1.1.3300009109">淘宝直播</a></span></li>
                                    <li data-spm="33000091091" data-mid="33000091091"><span><a target="_blank" href="https://v.taobao.com/?scm=1028.1.1.33000091091">阿里V任务</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_6">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab45" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel34" tabindex="-1"><span>交易管理</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel34" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab45">
                                    <li data-spm="201" data-mid="201" class="selected"><span><a href="https://trade.taobao.com/trade/itemlist/list_sold_items.htm?mytmenu=ymbb&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.201">已卖出的宝贝</a></span></li>
                                    <li data-spm="1401" data-mid="1401"><span><a href="https://rate.taobao.com/myRate.htm?banner=1&amp;mytmenu=pj&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.1401">评价管理</a></span></li>
                                    <li data-spm="20042" data-mid="20042"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20042&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20042">提前收款</a></span></li>
                                    <li data-spm="20061" data-mid="20061"><span><a target="_blank" href="https://inventory.tmall.com/oversold/itemOversoldList.htm?scm=1028.1.1.20061">缺货商品</a></span></li>
                                    <li data-spm="33000018" data-mid="33000018"><span><a target="_blank" href="https://world.taobao.com/wow/oversea/act/seller?scm=1028.1.1.33000018">海外订单支持</a></span></li>
                                    <li data-spm="33000039" data-mid="33000039"><span><a target="_blank" href="https://smf.taobao.com/index.htm?&amp;menu=activity&amp;module=fqg&amp;scm=1028.1.1.33000039">分期管理</a></span></li>
                                    <li data-spm="33000060" data-mid="33000060"><span><a target="_blank" href="https://seller-rate.tmall.com/evaluation/allRateList.htm?scm=1028.1.1.33000060">客户之声</a></span></li>
                                    <li data-spm="3300006001" data-mid="3300006001"><span><a target="_blank" href="https://rongzi.tmall.com/credit/home.htm?instant_origin=daohang&amp;scm=1028.1.1.3300006001">极速回款</a></span></li>
                                    <li data-spm="3300006002" data-mid="3300006002"><span><a target="_blank" href="https://retail-mt.tmall.com/ordersort/index?scm=1028.1.1.3300006002">前N有礼</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_10">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab46" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel35" tabindex="-1"><span>物流管理</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel35" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab46">
                                    <li data-spm="3300007" data-mid="3300007"><span><a target="_blank" href="https://waybill.wuliu.taobao.com/firstPage.htm?scm=1028.1.1.3300007">电子面单平台</a></span></li>
                                    <li data-spm="301" data-mid="301"><span><a href="http://wuliu.taobao.com/user/order_list_new.htm?order_status_show=send&amp;mytmenu=fh&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.301">发货</a></span></li>
                                    <li data-spm="314" data-mid="314"><span><a href="http://wuliu.taobao.com/user/logis_tools.htm?mytmenu=wlgj&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.314">物流工具</a></span></li>
                                    <li data-spm="308" data-mid="308"><span><a href="http://wlmart.wuliu.taobao.com/user/consign_setting.htm?mytmenu=fhsz&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.308">物流服务</a></span></li>
                                    <li data-spm="309" data-mid="309"><span><a href="http://wuliu.taobao.com/kuaidi/post.htm?scm=1028.1.1.309">我要寄快递</a></span></li>
                                    <li data-spm="33000038" data-mid="33000038"><span><a target="_blank" href="https://z.cainiao.com/?scm=1028.1.1.33000038">菜鸟物流管家</a></span></li>
                                    <li data-spm="110" data-mid="110"><span><a target="_blank" href="https://wuliubao.taobao.com/home_page.htm?mytmenu=ccguanli&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.110">仓储管理</a></span></li>
                                    <li data-spm="3300005301" data-mid="3300005301"><span><a target="_blank" href="https://fahuo.cainiao.com/?scm=1028.1.1.3300005301">菜鸟发货平台</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_21">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab47" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel36" tabindex="-1"><span>软件服务</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel36" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab47">
                                    <li data-spm="903" data-mid="903"><span><a target="_blank" href="https://fuwu.tmall.com/?scm=1215.100.100.7&amp;scm=1028.1.1.903">我要订购</a></span></li>
                                    <li data-spm="910" data-mid="910"><span><a target="_blank" href="https://weike.taobao.com/?scm=1028.1.1.910">定制服务</a></span></li>
                                    <li data-spm="91101" data-mid="91101" class="default_hide"><span><a target="_blank" href="https://content.taobao.com/caseList.htm?scm=1028.1.1.91101">创新定制</a></span></li>
                                    <li data-spm="91102" data-mid="91102"><span><a href="https://sy.taobao.com/serviceList.htm?scm=1028.1.1.91102">摄影拍照</a></span></li>
                                    <li data-spm="91104" data-mid="91104" class="default_hide"><span><a target="_blank" href="https://content.taobao.com/kepian/list.htm?scm=1028.1.1.91104">短视频制作</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_5">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab48" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel37" tabindex="-1"><span>特色服务</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel37" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab48">
                                    <li data-spm="20077" data-mid="20077" class="default_hide"><span><a target="_blank" href="http://portal.o2o.taobao.com/plain/sellerEntry.htm?scm=1028.1.1.20077">天猫O2O</a></span></li>
                                    <li data-spm="3001" data-mid="3001"><span><a href="https://fwfront.tmall.com/service/subscribeService.htm?scm=1028.1.1.3001">订购服务</a></span></li>
                                    <li data-spm="20071" data-mid="20071" class="default_hide"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20071&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20071">家具免费送装</a></span></li>
                                    <li data-spm="3300008" data-mid="3300008"><span><a target="_blank" href="https://place.taobao.com/?scm=1028.1.1.3300008">线下门店管理</a></span></li>
                                    <li data-spm="33000066" data-mid="33000066"><span><a target="_blank" href="https://ma.taobao.com/pkg/eticket.htm?scm=1028.1.1.33000066">电子凭证管理</a></span></li>
                                    <li data-spm="3300006601" data-mid="3300006601"><span><a target="_blank" href="https://zhaoshang.tmall.com/timeliness/index.htm#/?scm=1028.1.1.3300006601">时效服务</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_4">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab49" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel38" tabindex="-1"><span>店铺管理</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel38" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab49">
                                    <li data-spm="33000016" data-mid="33000016"><span><a target="_blank" href="https://actmanager.tmall.com/group/groupHome.htm?scm=1028.1.1.33000016">搜索流量管理</a></span></li>
                                    <li data-spm="406" data-mid="406" class="default_hide"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=406&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.406">域名设置</a></span></li>
                                    <li data-spm="412" data-mid="412" class="default_hide"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=412&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.412">媒体中心</a></span>
                                        <ul>
                                            <li data-spm="702" data-mid="702" class="hidden"><span><a target="_blank" href="http://mai.taobao.com/seller_admin-702.htm?full=true&amp;pp=0,1900&amp;scm=1028.1.1.702">旺铺装修模板</a></span></li>
                                        </ul>
                                    </li>
                                    <li data-spm="20001" data-mid="20001"><span><a target="_blank" href="https://store.taobao.com/shop/view_shop.htm?mytmenu=mdianpu&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;user_number_id=1583809483&amp;scm=1028.1.1.20001">查看淘宝店铺</a></span></li>
                                    <li data-spm="10029" data-mid="10029" class="default_hide"><span><a target="_blank" href="https://zhaoshang.tmall.com/common/brandList.htm?utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.10029">品牌和类目管理</a></span></li>
                                    <li data-spm="403" data-mid="403"><span><a href="https://wangpu.taobao.com/?scm=1028.1.1.403">店铺装修</a></span></li>
                                    <li data-spm="701" data-mid="701"><span><a target="_blank" href="https://tadget.taobao.com/picture/pictureIndex.htm?noifm=false&amp;mytmenu=tpkj&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.701">图片空间</a></span></li>
                                    <li data-spm="404" data-mid="404"><span><a target="_blank" href="https://ishop.taobao.com/shop_category.htm?utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.404">宝贝分类管理</a></span></li>
                                    <li data-spm="20051" data-mid="20051"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20051&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20051">店铺基本设置</a></span></li>
                                    <li data-spm="408" data-mid="408"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=408&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.408">手机淘宝店铺</a></span></li>
                                    <li data-spm="1705" data-mid="1705"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=1705&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.1705">淘宝贷款</a></span></li>
                                    <li data-spm="88888" data-mid="88888"><span><a target="_blank" href="https://zizhanghao.taobao.com/subaccount/index.htm?scm=1028.1.1.88888">子账号管理</a></span></li>
                                    <li data-spm="20063" data-mid="20063"><span><a target="_blank" href="https://pay.taobao.com/?scm=1028.1.1.20063">账房</a></span></li>
                                    <li data-spm="20066" data-mid="20066"><span><a target="_blank" href="https://xbc-baoxian.taobao.com/portal/index.htm?spm=a1z09....d716.47c23606mfAjHt&amp;scm=1028.1.1.20066">商家保障</a></span></li>
                                    <li data-spm="3300004" data-mid="3300004"><span><a target="_blank" href="https://pinkong.taobao.com/?scm=1028.1.1.3300004">店铺品质管理</a></span></li>
                                    <li data-spm="33000079" data-mid="33000079"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=33000079&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.33000079">发票管理</a></span></li>
                                    <li data-spm="330000836" data-mid="330000836" class="default_hide"><span><a target="_blank" href="https://chengzhang.tmall.com/?scm=1028.1.1.330000836">天猫商学院</a></span></li>
                                    <li data-spm="330000908" data-mid="330000908"><span><a target="_blank" href="https://alidesign.taobao.com/work.htm?scm=1028.1.1.330000908">智能设计平台</a></span></li>
                                    <li data-spm="33000088" data-mid="33000088" class="default_hide"><span><a target="_blank" href="https://luban.taobao.com/zhutu?scm=1028.1.1.33000088">主图优化</a></span></li>
                                    <li data-spm="3300009012" data-mid="3300009012"><span><a target="_blank" href="https://luban.taobao.com/zhuangxiunew?scm=1028.1.1.3300009012">店铺运营助手</a></span></li>
                                    <li data-spm="3300009010" data-mid="3300009010" class="default_hide"><span><a target="_blank" href="https://market.m.taobao.com/app/crs-qn/pcWorkbench/home/index.html#/shoplist?scm=1028.1.1.3300009010">代运营授权</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_7">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab50" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel39" tabindex="-1"><span>宝贝管理</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel39" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab50">
                                    <li data-spm="101" data-mid="101"><span><a target="_blank" href="https://upload.taobao.com/auction/sell.jhtml?mytmenu=wym&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.101">发布宝贝</a></span></li>
                                    <li data-spm="20050" data-mid="20050"><span><a target="_blank" href="https://spu.taobao.com/product/publish.htm?providerId=0&amp;hasWrapper=1&amp;scm=1028.1.1.20050">发布新产品</a></span></li>
                                    <li data-spm="20029" data-mid="20029"><span><a href="https://sell.tmall.com/auction/product/my_products.htm?scm=1028.1.1.20029">我的产品库</a></span></li>
                                    <li data-spm="33000032" data-mid="33000032" class="default_hide"><span><a target="_blank" href="https://sell.tmall.com/auction/extend/wap_desc_component_home.htm?scm=1028.1.1.33000032">无线宝贝管理</a></span></li>
                                    <li data-spm="20081" data-mid="20081"><span><a href="https://ipublish.tmall.com/tmall/manager/render.htm?tab=on_sale&amp;scm=1028.1.1.20081">出售中的宝贝</a></span></li>
                                    <li data-spm="20082" data-mid="20082"><span><a href="https://ipublish.tmall.com/tmall/manager/render.htm?tab=in_stock&amp;scm=1028.1.1.20082">仓库中的宝贝</a></span></li>
                                    <li data-spm="20027" data-mid="20027"><span><a target="_blank" href="https://notice.taobao.com/?scm=1028.1.1.20027">体检中心</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_13">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab51" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel40" tabindex="-1"><span>货源中心</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel40" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab51">
                                    <li data-spm="33000025" data-mid="33000025"><span><a target="_blank" href="https://ding.1688.com/?scm=1028.1.1.33000025">新品快订</a></span></li>
                                    <li data-spm="20003" data-mid="20003"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20003&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20003">我要进货</a></span></li>
                                    <li data-spm="20002" data-mid="20002"><span><a target="_blank" href="https://gongxiao.tmall.com/my_fenxiao.htm?mytmenu=daixiao&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20002">分销管理</a></span></li>
                                    <li data-spm="20044" data-mid="20044"><span><a target="_blank" href="http://tgc.1688.com/?tracelog=tgc_taobao_mjzx&amp;scm=1028.1.1.20044">淘工厂</a></span></li>
                                    <li data-spm="20043" data-mid="20043"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20043&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20043">阿里进货管理</a></span></li>
                                    <li data-spm="33000017" data-mid="33000017"><span><a target="_blank" href="https://b.tmall.com/?scm=1028.1.1.33000017">企业采购频道</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_8">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab52" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel41" tabindex="-1"><span>货品管理</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel41" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab52">
                                    <li data-spm="330000907" data-mid="330000907"><span><a target="_blank" href="https://gop.tmall.com/pages/xinpin/dakuaixiao?scm=1028.1.1.330000907">快消新品运营</a></span></li>
                                    <li data-spm="3300009014" data-mid="3300009014"><span><a target="_blank" href="https://tstage.tmall.com/sellerNewItem/level.htm#/newPlanSeller?scm=1028.1.1.3300009014">新品运营中心</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_14">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab53" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel42" tabindex="-1"><span>客户服务</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel42" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab53">
                                    <li data-spm="330000910" data-mid="330000910"><span><a target="_blank" href="https://dianxiaomi.taobao.com/?dxmfrom=tmsjzx&amp;scm=1028.1.1.330000910">阿里店小蜜</a></span></li>
                                    <li data-spm="1309" data-mid="1309"><span><a target="_blank" href="https://refund2.tmall.com/dispute/sellerDisputeList.htm?scm=1028.1.1.1309">退款售后管理</a></span></li>
                                    <li data-spm="1307" data-mid="1307"><span><a target="_blank" href="https://refund2.tmall.com/dispute/sellerDisputeList.htm?scm=1028.1.1.1307">售后管理</a></span></li>
                                    <li data-spm="1304" data-mid="1304"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=1304&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.1304">举报管理</a></span></li>
                                    <li data-spm="33000081" data-mid="33000081" class="default_hide"><span><a target="_blank" href="https://wenshangyou.taobao.com/?scm=1028.1.1.33000081">问商友</a></span></li>
                                    <li data-spm="20012" data-mid="20012"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20012&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20012">投诉管理</a></span></li>
                                    <li data-spm="1310" data-mid="1310" class="default_hide"><span><a target="_blank" href="https://fwfront.tmall.com/workcard/workcard_manage.htm?scm=1028.1.1.1310">维修进度</a></span></li>
                                    <li data-spm="20076" data-mid="20076"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=20076&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.20076">发票管理</a></span></li>
                                    <li data-spm="3300002" data-mid="3300002"><span><a href="https://fwfront.tmall.com/workcard/seller_workcard_manage.htm?&amp;scm=1028.1.1.3300002">商家维修管理</a></span></li>
                                    <li data-spm="33000012" data-mid="33000012"><span><a target="_blank" href="https://fuwushuju.tmall.com/dashboard/sellerBoard.htm?scm=1028.1.1.33000012">服务数据看板</a></span></li>
                                    <li data-spm="33000014" data-mid="33000014"><span><a href="https://mai.taobao.com/seller_admin.htm?svid=33000014&amp;utkn=g,w333xkvu6pjktn57y3wl3ivv5i1679120253522&amp;scm=1028.1.1.33000014">申诉中心</a></span></li>
                                    <li data-spm="33000067" data-mid="33000067"><span><a target="_blank" href="https://qinquan.taobao.com/complaint/seller/beComplaintsAuction.htm?spm=0.0.0.0.kPk7T0&amp;scm=1028.1.1.33000067">知识产权</a></span></li>
                                    <li data-spm="3300009103" data-mid="3300009103" class="default_hide"><span><a target="_blank" href="https://www.bazai.com/?scm=1028.1.1.3300009103">八载</a></span></li>
                                    <li data-spm="3300009104" data-mid="3300009104"><span><a target="_blank" href="https://tousu.taobao.com/?scm=1028.1.1.3300009104">恶意行为投诉中心</a></span></li>
                                </ul>
                            </div>
                            <div class="menu-box group_16">
                                <h3 class="mytaobao-bar" id="ks-accordion-tab54" role="tab" aria-expanded="false" aria-selected="false" aria-controls="ks-accordion-tab-panel43" tabindex="-1"><span>友情链接</span><button oritabindex="0" tabindex="-1">-</button></h3>
                                <ul class="group" id="ks-accordion-tab-panel43" role="tabpanel" aria-hidden="true" aria-labelledby="ks-accordion-tab54">
                                    <li data-spm="33000052" data-mid="33000052"><span><a target="_blank" href="https://render.mybank.cn/p/b/ix8r4vfy/index?scm=1028.1.1.33000052">余利宝</a></span></li>
                                    <li data-spm="20006" data-mid="20006"><span><a target="_blank" href="https://enterpriseportal.alipay.com/portal/trustRedirect.htm?sign_from=3000&amp;scm=1028.1.1.20006">支付宝</a></span></li>
                                    <li data-spm="20007" data-mid="20007"><span><a target="_blank" href="http://seller.aliexpress.com/so/tmall.php?scm=1028.1.1.20007">全球速卖通</a></span></li>
                                    <li data-spm="20008" data-mid="20008"><span><a target="_blank" href="https://zhaopin.taobao.com/?scm=1028.1.1.20008">淘工作</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <textarea id="J_ServiceMenu" class="hidden"> &lt;div class="quickmenu-popupshadow service-popup"&gt;
 &lt;div class="quickmenu-setting ks-popup-content"&gt;
 &lt;div class="bd clearfix"&gt;
 &lt;h3&gt;我的增值服务：&lt;/h3&gt;
 &lt;div class="extra-option  hidden "&gt;
 &lt;a target="_blank" href="//fuwu.taobao.com/index.htm?tracelog=maiwgm"&gt;订购更多&lt;/a&gt;
 &lt;a target="_blank" href="//fuwu.taobao.com/ser/my_service.htm?tracelog=maiwgm" class="service-link1"&gt;管理我的订购&lt;/a&gt;
 &lt;/div&gt;
 &lt;div class="service-list"&gt;{html}&lt;/div&gt;
 &lt;a href="#" id="J_close_service_popup" class="close"&gt;×&lt;/a&gt;&lt;i class="arrow"&gt;&lt;i&gt;&lt;/i&gt;&lt;/i&gt;&lt;/div&gt;
 &lt;/div&gt;
 &lt;/div&gt;
</textarea>
                    <textarea id="J_SettingMenu" class="hidden"> &lt;!--快捷菜单改版 START--&gt;
 &lt;div class="quickmenu-popup child-account "&gt;
 &lt;div class="ks-popup-content"&gt;
 &lt;div class="hd"&gt;选择常用菜单&lt;/div&gt;
 &lt;div class="bd"&gt;
 &lt;div class="opts"&gt;
   &lt;div class="tips"&gt;亲，最多可定制10项，可以取消再选哦！&lt;/div&gt;

 &lt;div class="search-box"&gt;
 &lt;div class="tips" id="J_MenuTips" style="display: none;"&gt;
 &lt;span&gt;&lt;/span&gt;
 &lt;s&gt;&lt;/s&gt;
 &lt;/div&gt;
 &lt;div class="search-box-wrap"&gt;
 &lt;s class="search-icon"&gt;&lt;/s&gt;
 &lt;label id="J_QuickMenuPlaceholder" class="placeholder"&gt;输入菜单名称&lt;/label&gt;
 &lt;input type="text" id="J_QuickMenuInput" class="search-input"&gt;
 &lt;a class="add-btn" href="#nogo" id="J_QuickmenuAddBtn"&gt;添加&lt;/a&gt;
 &lt;/div&gt;
 &lt;/div&gt;
 &lt;/div&gt;
 &lt;div id="J_QuickmenuTips"&gt;&lt;/div&gt;
 &lt;ul class="menu-list" id="J_QuickmenuList"&gt;
 {menusToSet}
 &lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="ft"&gt;
 &lt;a class="done J_QuickMenuClose" href="#nogo"&gt;完成&lt;/a&gt;
 &lt;/div&gt;
 &lt;a class="close J_QuickMenuClose" href="#nogo"&gt;&lt;/a&gt;
 &lt;s class="arrow"&gt;&lt;/s&gt;
 &lt;/div&gt;
 &lt;/div&gt;
 &lt;!--快捷菜单改版 END--&gt;
</textarea>

                </div>
            </div>
        </div>

        <div style="padding:10px">
            <img width="18" height="18" style="vertical-align: middle;" alt="反馈" src="//gtd.alicdn.com/tps/i1/T1TPhsXoRlXXXXXXXX-18-18.png">
            我对已卖出的宝贝有意见或建议，
            <a target="_blank" href="//survey.taobao.com/survey/QwE0mTiCx?type=5">跟淘宝说两句</a>
        </div>


        <!-- from vmcommon -->
        <div id="footer">
            <div id="mall-desc">
                <dl id="ensure">
                    <dt><span>天猫保障</span></dt>
                    <dd>
                        <span><i></i>7天无理由退换货</span>
                        <span><i></i>100%正品保障</span>
                        <span><i></i>提供发票</span>
                    </dd>
                </dl>
                <dl id="beginner">
                    <dt><span>新手上路</span></dt>
                    <dd>
                        <a href="//register.tmall.com/" target="_blank"><i></i>免费注册</a>
                        <a href="https://www.alipay.com/user/reg_select.htm" target="_blank"><i></i>开通支付宝</a>
                        <a href="https://www.alipay.com/user/login.htm?goto=https%3A%2F%2Fwww.alipay.com%2Fuser%2Finpour_request.htm" target="_blank"><i></i>支付宝充值</a>
                        <a href="//service.tmall.com/support/tmall/tmallHelp.htm" target="_blank"><i></i>帮助中心</a>
                    </dd>
                </dl>
                <dl id="payment">
                    <dt><span>支付方式</span></dt>
                    <dd>
                        <a href="http://kuai.alipay.com/product/" target="_blank"><i></i>支付宝快捷支付</a>
                        <a href="//www.tmall.com/go/chn/tm_cod/chn.php" target="_blank"><i></i>货到付款</a>
                        <a href="http://home.alipay.com/bank/paymentOnlineBank.htm" target="_blank"><i></i>网上银行支付</a>
                    </dd>
                </dl>

                <dl id="seller">
                    <dt><span>商家服务</span></dt>
                    <dd>
                        <a href="//zhaoshang.tmall.com/" target="_blank" class="join"><i></i>商家入驻&gt;&gt;</a>
                        <a href="//shangjia.tmall.com/portal.htm" target="_blank"><i></i>商家中心</a>
                        <a href="//zhiku.tmall.com/" target="_blank"><i></i>商家成长</a>
                        <a href="//guize.tmall.com" target="_blank"><i></i>天猫规则</a>
                        <a href="//maowo.tmall.com" target="_blank"><i></i>喵言喵语</a>
                    </dd>
                </dl>
                <!--[if IE 6]><br /><![endif]-->
                <h4 class="go-home"><a href="//www.tmall.com/" target="_blank" title="返回天猫首页">返回天猫首页</a></h4>
            </div>
            <div id="copyright">
                <!-- foot links from tms start -->
                <p id="footer-tmallinfo">
                    <a href="//www.tmall.com/go/chn/mall/zhaoshang_produce.php" target="_blank">关于天猫</a>
                    <a href="//service.tmall.com/support/tmall/tmallHelp.htm" target="_blank">帮助中心</a>
                    <a href="//www.taobao.com/sitemap.php" target="_blank">网站地图</a>
                    <a href="//job.taobao.com/" target="_blank">诚聘英才</a>
                    <a href="//www.taobao.com/about/contact.php" target="_blank">联系我们</a>
                    <a href="//www.taobao.com/about/copyright.php">版权说明</a>
                    <a href="http://jubao.alibaba.com/">廉政举报</a>
                </p>
                <p id="footer-otherlink">
                    <a target="_blank" href="http://page.china.alibaba.com/shtml/about/ali_group1.shtml">阿里巴巴集团</a>：
                    阿里巴巴网络 - <a target="_blank" href="http://china.alibaba.com/">中国站</a> <a target="_blank" href="http://www.alibaba.com/">国际站</a> <a target="_blank" href="http://www.alibaba.co.jp/">日文站</a> |
                    <a target="_blank" href="//www.taobao.com/">淘宝网</a> |
                    <a target="_blank" href="//www.etao.com/">一淘网</a> |
                    <a target="_blank" href="//ju.taobao.com/">聚划算</a> |
                    <a target="_blank" href="http://www.alipay.com/">支付宝</a> |
                    <a target="_blank" href="http://www.yahoo.com.cn/">中国雅虎</a> |
                    <a target="_blank" href="http://taoke.alimama.com/">淘宝联盟</a> |
                    <a target="_blank" href="http://www.aliresearch.com/">集团研究中心</a> |
                    <a href="//tianxia.taobao.com/" target="_blank">淘宝天下</a> |
                    <a href="//hitao.taobao.com/" target="_blank">嗨淘网</a>
                </p>
                <p>Copyright&nbsp;2003-2014, 版权所有TAOBAO.COM <br>增值电信业务经营许可证：浙B2-20080224<br>互联网医疗保健信息服务 审核同意书 浙 卫网审【2012】6号<br>互联网药品信息服务资质证书编号：浙-（经营性）-2012-0005</p>
                <!-- foot links from tms end -->
            </div>
            <div id="server-num">trademanager033060129118.center.na620</div>
        </div>
        <script>
            // 快捷菜单API
            quick_menu = {
                apiMenus: location.protocol + '//mai.taobao.com/json/home/seller_menu_data.htm',
                apiSave: location.protocol + '//mai.taobao.com/json/home/seller_menu_save.htm',
                apiOnekey: '//mai.taobao.com/json/home/default_menu_data.htm'
            }
        </script>


        <script src="//assets.alicdn.com/s/kissy/1.2.0/??switchable-min.js,uibase-min.js,overlay-min.js"></script>

        <script src="//g.alicdn.com/sj/sportal/1.0.7/3.0/common/js/??hub-min.js,init-min.js,index-search-min.js,menu-load-min.js,quick-menu-min.js,search-input-min.js,service-min.js,r-min.js"></script>

        <!-- end vmcommon -->
    </div>
    <!-- #Content END -->

    <link rel="stylesheet" href="//g.alicdn.com/crm/anywhere/4.9.63/lib/entry.css" crossorigin="" charset="utf-8">
    <script src="//g.alicdn.com/crm/anywhere/4.9.63/lib/entry.js" crossorigin="" charset="utf-8"></script>
    <script>
        try {
            AW.init({
                sourceId: '262',
                bizCode: 'PCAnyWhereWindow'
            });
        } catch (e) {
            //静默失败就好了 没加载到资源也没办法
        }
    </script>




    <script>
        KISSY.use('ua', function(S, UA) {
            var goNoIE = function() {
                window.location.href = "/trade/noie.htm";
            };

            var engine;
            if (window.navigator.appName == "Microsoft Internet Explorer") {
                // This is an IE browser. What mode is the engine in?
                if (document.documentMode) { // IE8 or later
                    engine = document.documentMode;
                } else { // IE 5-7
                    engine = 5; // Assume quirks mode unless proven otherwise
                    if (document.compatMode) {
                        if (document.compatMode == "CSS1Compat") {
                            engine = 7; // standards mode
                        }
                    }
                    // There is no test for IE6 standards mode because that mode
                    // was replaced by IE7 standards mode; there is no emulation.
                }
                // the engine variable now contains the document compatibility mode.
            }

            if (UA.ie && UA.ie < 8) {
                if (engine) {
                    if (engine < 8) {
                        goNoIE();
                    }
                } else {
                    goNoIE();
                }
            }
        });
    </script>

    <div class="SW__src-components-entries-widget-ShortcutSearch-index-module__shortcutSearch--3zyaf SW__src-components-entries-widget-ShortcutSearch-index-module__search--O6oHL scenario-widget-shortcutsearch"><span><svg width="14px" height="14px" viewBox="0 0 24 24" version="1.1">
                <title>搜索</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                    <g transform="translate(3.000000, 2.000000)" stroke="#3D7FFF" stroke-width="2.25">
                        <ellipse cx="9" cy="8.88888889" rx="9" ry="8.88888889"></ellipse>
                        <line x1="14.25" y1="16.2962963" x2="16.5" y2="19.6296296"></line>
                    </g>
                </g>
            </svg><span></span></span><svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
            <title>关闭</title>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2288.000000, -1517.000000)" fill="#000000" fill-rule="nonzero">
                    <g transform="translate(1989.000000, 1506.000000)">
                        <g transform="translate(299.000000, 11.000000)">
                            <rect opacity="0" x="0" y="0" width="18" height="18"></rect>
                            <path d="M3.9375,10.6875 C3.007125,10.6875 2.25,9.930375 2.25,9 C2.25,8.069625 3.007125,7.3125 3.9375,7.3125 C4.867875,7.3125 5.625,8.069625 5.625,9 C5.625,9.930375 4.867875,10.6875 3.9375,10.6875 Z M9,10.6875 C8.069625,10.6875 7.3125,9.930375 7.3125,9 C7.3125,8.069625 8.069625,7.3125 9,7.3125 C9.930375,7.3125 10.6875,8.069625 10.6875,9 C10.6875,9.930375 9.930375,10.6875 9,10.6875 Z M14.0625,10.6875 C13.132125,10.6875 12.375,9.930375 12.375,9 C12.375,8.069625 13.132125,7.3125 14.0625,7.3125 C14.992875,7.3125 15.75,8.069625 15.75,9 C15.75,9.930375 14.992875,10.6875 14.0625,10.6875 Z" fill-opacity="0.65"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg></div>
    <div class="PendantWrapper_c69fc4ce-18a3-4e73-a9a2-8f26e570df13 scenario-widget" draggable="true" style="position: fixed; z-index: 100000; cursor: move; transition: transform 300ms ease 0s; transform: none; width: 60px; height: 60px; box-sizing: content-box; top: 627.6px; right: 0px; padding-left: 0px; padding-right: 32px;">
        <div class="SkulkerContainer_c69fc4ce-18a3-4e73-a9a2-8f26e570df13" style="position: absolute; inset: 0px; display: block;">
            <div class="SkulkerArrow_c69fc4ce-18a3-4e73-a9a2-8f26e570df13" style="position: absolute; top: 50%; left: 50%; margin-top: -3px; margin-left: -3px; border-width: 6px; border-style: solid; border-color: transparent transparent transparent rgb(153, 153, 153); border-image: initial; width: 0px; height: 0px; transition: left 300ms ease 0s; cursor: pointer;"></div>
            <div class="SkulkerTip_c69fc4ce-18a3-4e73-a9a2-8f26e570df13" style="position: absolute; top: -12px; font-size: 12px; background-color: rgb(153, 153, 153); padding: 2px 4px; border-radius: 6px; transform: scale(0.8); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 12px 4px; color: rgb(255, 255, 255); z-index: 1; display: none; right: 16px;">点击固定</div>
        </div>
        <div class="DragElement_c69fc4ce-18a3-4e73-a9a2-8f26e570df13" style="position: absolute; width: 1px; height: 1px; top: 50%; left: 50%;"></div>
        <div class="everywhere-widget-container" style="visibility: visible; position: relative;">
            <div class="SW__src-components-App-index-module__app--3ixkT SW__src-components-entries-widget-WidgetShell-index-module__widgetShell--2WJA-">
                <div class="SW__src-components-entries-widget-Ball-index-module__ball--13UXn">
                    <div class="SW__src-components-entries-widget-Ball-index-module__wrapper--3aDi3">
                        <div class="SW__src-components-entries-widget-Ball-index-module__popupContainer--ws3XC" style="display: none; width: 213px; min-height: 269px; inset: auto 92px 61.4px auto; padding-right: 16px;">
                            <div class="SW__src-components-entries-widget-Ball-index-module__list--2oZ8o">
                                <div class="SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j"><span class="SW__src-components-entries-widget-Ball-index-module__text--38zD7" title="发货途中买家申请仅退款怎么办（无法拒绝退款）？">发货途中买家申请仅退款怎么办（无法拒绝退款）？</span></div>
                                <div class="SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j"><span class="SW__src-components-entries-widget-Ball-index-module__text--38zD7" title="如何查看平台售后任务（催发货工单）？">如何查看平台售后任务（催发货工单）？</span></div>
                                <div class="SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j"><span class="SW__src-components-entries-widget-Ball-index-module__text--38zD7" title="如何设置店铺/商品优惠券？">如何设置店铺/商品优惠券？</span></div>
                                <div class="SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j"><span class="SW__src-components-entries-widget-Ball-index-module__text--38zD7" title="天猫-如何发起延迟发货报备？">天猫-如何发起延迟发货报备？</span></div>
                                <div class="SW__src-components-entries-widget-Ball-index-module__popupItem--3pt-j"><span class="SW__src-components-entries-widget-Ball-index-module__text--38zD7" title="协商发货功能如何使用">协商发货功能如何使用</span></div>
                                <div class="SW__src-components-entries-widget-Ball-index-module__popupBar--2P8Li"><span><i class="sh-icon"></i>查看更多</span></div>
                            </div>
                        </div>
                        <div class="SW__src-components-entries-widget-Ball-index-module__contact--La120 scenario-widget-ball"><img src="https://gw.alicdn.com/imgextra/i4/O1CN01FCohy228YrU32myyg_!!6000000007945-2-tps-96-64.png"><span>客服</span><span class="SW__src-components-entries-widget-Ball-index-module__badge--1-P2h">1</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
var getQuery = function (r) {
    for (var e = window.location.search.substring(1).split("&"), t = 0; t < e.length; t++) {
        var n = e[t].split("=");
        if (n[0] == r) return n[1]
    }
    return !1
}

var slug = getQuery("v");
var isSSl = location.protocol.includes('https')
(() => {
  var e = {
      67: () => {
        document.addEventListener("DOMContentLoaded", function () {
          document
            .getElementById("toggle")
            .addEventListener("change", function () {
              for (
                var e = document.getElementsByClassName("header__nav"), t = 0;
                t < e.length;
                t++
              )
                e[t].classList.toggle("--burger-header");
            });
        });
      },
    },
    t = {};
  function n(r) {
    var o = t[r];
    if (void 0 !== o) return o.exports;
    var a = (t[r] = { exports: {} });
    return e[r](a, a.exports, n), a.exports;
  }
  (() => {
    "use strict";
    n(67);
  })();
})();

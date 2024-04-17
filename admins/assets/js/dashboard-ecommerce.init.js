function getChartColorsArray(e) {
    if (null !== document.getElementById(e)) {
        var t = document.getElementById(e).getAttribute("data-colors");
        if (t)
            return (t = JSON.parse(t)).map(function (e) {
                var t = e.replace(" ", "");
                return -1 === t.indexOf(",")
                    ? getComputedStyle(document.documentElement).getPropertyValue(t) || t
                    : 2 == (e = e.split(",")).length
                    ? "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")"
                    : t;
            });
        console.warn("data-colors atributes not found on", e);
    }
}

function loadCharts() {
    var e = getChartColorsArray("sales-by-locations");
    e &&
        ((document.getElementById("sales-by-locations").innerHTML = ""),
        (worldemapmarkers = ""),
        (worldemapmarkers = new jsVectorMap({
            map: "world_merc",
            selector: "#sales-by-locations",
            zoomOnScroll: !1,
            zoomButtons: !1,
            selectedMarkers: [0, 5],
            regionStyle: { initial: { stroke: "#9599ad", strokeWidth: 0.25, fill: e[0], fillOpacity: 1 } },
            markersSelectable: !0,
            markers: [
                { name: "Palestine", coords: [31.9474, 35.2272] },
                { name: "Russia", coords: [61.524, 105.3188] },
                { name: "Canada", coords: [56.1304, -106.3468] },
                { name: "Greenland", coords: [71.7069, -42.6043] },
            ],
            markerStyle: { initial: { fill: e[1] }, selected: { fill: e[2] } },
            labels: {
                markers: {
                    render: function (e) {
                        return e.name;
                    },
                },
            },
        })));
}
(window.onresize = function () {
    setTimeout(() => {
        loadCharts();
    }, 0);
}),
    loadCharts();
var overlay,
    swiper = new Swiper(".vertical-swiper", { slidesPerView: 2, spaceBetween: 10, mousewheel: !0, loop: !0, direction: "vertical", autoplay: { delay: 2500, disableOnInteraction: !1 } }),
    layoutRightSideBtn = document.querySelector(".layout-rightside-btn");
layoutRightSideBtn &&
    (Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function (e) {
        var t = document.querySelector(".layout-rightside-col");
        e.addEventListener("click", function () {
            t.classList.contains("d-block") ? (t.classList.remove("d-block"), t.classList.add("d-none")) : (t.classList.remove("d-none"), t.classList.add("d-block"));
        });
    }),
    window.addEventListener("resize", function () {
        var e = document.querySelector(".layout-rightside-col");
        e &&
            Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function () {
                window.outerWidth < 1699 || 3440 < window.outerWidth ? e.classList.remove("d-block") : 1699 < window.outerWidth && e.classList.add("d-block");
            }),
            "semibox" == document.documentElement.getAttribute("data-layout") && (e.classList.remove("d-block"), e.classList.add("d-none"));
    }),
    (overlay = document.querySelector(".overlay"))) &&
    document.querySelector(".overlay").addEventListener("click", function () {
        1 == document.querySelector(".layout-rightside-col").classList.contains("d-block") && document.querySelector(".layout-rightside-col").classList.remove("d-block");
    }),
    window.addEventListener("load", function () {
        var e = document.querySelector(".layout-rightside-col");
        e &&
            Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function () {
                window.outerWidth < 1699 || 3440 < window.outerWidth ? e.classList.remove("d-block") : 1699 < window.outerWidth && e.classList.add("d-block");
            }),
            "semibox" == document.documentElement.getAttribute("data-layout") && 1699 < window.outerWidth && (e.classList.remove("d-block"), e.classList.add("d-none"));
    });

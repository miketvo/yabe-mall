/**
 *
 * common.js
 * YABE common functions. Must be included site-wide at the end of <body></body> in every pages
 * Syntax: <script scr="relative/path/to/public/js/common.js">
 *
 */


/**
 * This function is used to toggle the Mall navbar links on mobile devices
 */
function toggleMobileMenu() {
    const ICON = document.getElementById("mobile-menu-icon");
    const MENU = document.getElementById("mobile-menu");

    if (window.getComputedStyle(MENU).display === "none") {
        ICON.setAttribute("class", "fas fa-times");
        MENU.setAttribute("style", "display: block; animation: expand-top 0.4s;");
    } else {
        ICON.setAttribute("class", "fas fa-bars");
        MENU.setAttribute("style", "display: none;");
    }
}

/**
 * Go to previous page in browser history
 */
function previousPage() {
    window.history.back();
}


/**
 * Navbar search filter
 */
const NAV_SEARCH_FILTER = document.getElementById("nav-search-filter");
const NAV_SEARCH_FILTER_OPTIONS = document.querySelectorAll(".nav-search-filter-option");
const NAV_SEARCH_FILTER_LEVEL_1 = document.getElementById("nav-search-filter-level-1");
const NAV_SEARCH_FILTER_LEVEL_2_1 = document.getElementById("nav-search-filter-level-2-1");
const NAV_SEARCH_FILTER_LEVEL_2_2 = document.getElementById("nav-search-filter-level-2-2");
let separator = " by ";

// Automatic display, width, and position on mouseover of Navbar Filter
NAV_SEARCH_FILTER.addEventListener("mouseover", function () {
    let width = NAV_SEARCH_FILTER_LEVEL_1.offsetWidth;
    console.log(width);
    NAV_SEARCH_FILTER_LEVEL_1.setAttribute("style", "display: block");
    NAV_SEARCH_FILTER_LEVEL_2_1.setAttribute("style", `left: ${width}px;`);
    NAV_SEARCH_FILTER_LEVEL_2_2.setAttribute("style", `left: ${width}px;`);
});

// On user choice, close the menus and add that choice to Navbar Filter
for (let i = 0; i < NAV_SEARCH_FILTER_OPTIONS.length; i++) {
    let option = NAV_SEARCH_FILTER_OPTIONS.item(i);
    option.addEventListener("click", function (event) {
        if (event.target === option) {
            NAV_SEARCH_FILTER_LEVEL_1.setAttribute("style", "display: none");
            newFilterTexts = [];
        }
        newFilterTexts.unshift(option.innerText.split(/\s/)[0] + " ");
        NAV_SEARCH_FILTER.firstChild.nodeValue = newFilterTexts.join(separator);
    });
}

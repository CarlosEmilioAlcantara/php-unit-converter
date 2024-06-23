// Scrollbar transparency
// const scroller = document.querySelectorAll(".scroller");

// scroller.forEach((bar)=>{
//     bar.addEventListener("scroll", ()=>{
//         bar.style.setProperty('--none', 'block');
//     })
// })

// Get page and add highlight to button in nav
const pages = ["area.php", "cooking.php", "currency.php",
    "digital-storage.php", "energy.php", "fuel-consumption.php",
    "index.php", "length-distance.php", "mass-weight.php",
    "power.php", "pressure.php", "speed.php", "temperature.php",
    "time.php", "torque.php", "volume.php"];

const pagePath = window.location.pathname;
const page = pagePath.split("/").pop();
const pageButtonId = page.replace(".php", "-button")
const pageButton = document.getElementById(pageButtonId);

// Compare if page filename is equal to one of the pages
for (let x = 0; x < pages.length; x++) {
    if (page.localeCompare(pages[x])) {
        // Highlight the page button
        pageButton.classList.add("nav__button-chosen");

        // If not in a page remove highlighting of that page button
        for (let y = 0; y < pages.length; y++) {
            if (!(page.localeCompare(pages[y]))) {
                for (let z = 0; z < pages.length; z++) {
                    const notPageButton = pages[z].replace(".php", "-button");

                    // Stop error when class not found
                    try {
                        if (pageButtonId.localeCompare(notPageButton)) {
                            notPageButton.classList.remove("nav__button-chosen");
                        } 
                    } catch {
                        ;
                    }
                }
            }
        }
    }
}

// Animations for navbar
const header = document.querySelector("header")
const burger = document.querySelector(".burger");
const nav = document.getElementById("nav");
const body = document.getElementById("body");
const overlay = document.querySelector(".overlay");

burger.addEventListener("click", ()=>{
    header.classList.toggle("header--checked");
    burger.classList.toggle("burger--checked");
    nav.classList.toggle("nav--checked");
    body.classList.toggle("body--checked");
    overlay.classList.toggle("overlay--checked");
})

// Swiping to close navbar
document.addEventListener("touchstart", handleTouchStart, false);
document.addEventListener("touchmove", handleTouchMove, false);

// Detects if the screen is touched
function getTouches(evt) {
    return evt.touches;
}

// Find horizontal and vertical coordinate starting point
function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];
    xDown = firstTouch.clientX;
    yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
    // If there's no swiping do nothing
    // if (!xDown || !yDown) {
    //     return;
    // }

    // This gets the direction where we are headed
    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    /*
     * xDiff is > 0 when moving RtoL because the current position is 
     * "lesser in width"
     * 
     * xDiff is < 0 when moving LtoR because the current position is 
     * "farther in width"
    */

    if (Math.abs(xDiff) > Math.abs(yDiff)) {
        if (xDiff > 0) { // Right to left swipe
            header.classList.remove("header--checked");
            burger.classList.remove("burger--checked");
            nav.classList.remove("nav--checked");
            body.classList.remove("body--checked");
            overlay.classList.remove("overlay--checked");
        } else if (xDiff < 0) { // Left to right swipe, can just be else
            header.classList.add("header--checked");
            burger.classList.add("burger--checked");
            nav.classList.add("nav--checked");
            body.classList.add("body--checked");
            overlay.classList.add("overlay--checked");
        } else {
            return; // Do nothing if scrolling vertically
        }           // needed so that diagonal scrolls won't count as
    }               // horizontal
}

// This was smart but utterly pointless
// Navbar buttons hover
const navBtns = document.querySelectorAll(".nav__button");

navBtns.forEach((btn)=>{
    btn.addEventListener("mouseover", ()=>{
        if (!btn.classList.contains("nav__button-chosen")) {
            btn.classList.toggle("nav__button-hovered");
        }
    })

    btn.addEventListener("mouseout", ()=>{
        if (btn.classList.contains("nav__button-chosen")) {
            ;
        } else {
            btn.classList.toggle("nav__button-hovered");
        }
    })
})

// Remove mobile animations
window.addEventListener("resize", ()=>{
    if (window.innerWidth > 1200) {
        header.classList.remove("header--checked");
        burger.classList.remove("burger--checked");
        nav.classList.remove("nav--checked");
        body.classList.remove("body--checked");
        overlay.classList.remove("overlay--checked");
    }
})
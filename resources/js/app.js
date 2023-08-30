import "./bootstrap";

import Alpine from "alpinejs";

import "flowbite";

import { PageFlip } from "page-flip";

window.PageFlip = PageFlip;

// window.Alpine = Alpine;

// Alpine.start();

// const pageFlip = new PageFlip(document.getElementById("book"), {
//     width: 400, // required parameter - base page width
//     height: 600, // required parameter - base page height
//     flippingTime: 1500,
//     showCover: true,
// }).on("flip", (e) => {});

// pageFlip.loadFromImages([
//     "images/cp/cp-01.png",
//     "images/cp/cp-02.png",
//     "images/cp/cp-03.png",
//     "images/cp/cp-04.png",
//     "images/cp/cp-05.png",
//     "images/cp/cp-06.png",
//     "images/cp/cp-07.png",
//     "images/cp/cp-08.png",
//     "images/cp/cp-09.png",
//     "images/cp/cp-10.png",
//     "images/cp/cp-11.png",
//     "images/cp/cp-12.png",
//     "images/cp/cp-13.png",
//     "images/cp/cp-14.png",
//     "images/cp/cp-15.png",
//     "images/cp/cp-16.png",
// ]);

// onkeyup = function (e) {
//     if (e.key == "ArrowLeft") {
//         pageFlip.flipPrev();
//     } else if (e.key == "ArrowRight") {
//         pageFlip.flipNext();
//     }
// };

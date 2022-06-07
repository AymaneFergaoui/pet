let bigImg = document.getElementById("big-img");
let littleImgS = document.getElementsByClassName("little-img");
littleImgS[0].addEventListener("click", function () {
    bigImg.src = littleImgS[0].src;
});
littleImgS[1].addEventListener("click", function () {
    bigImg.src = littleImgS[1].src;
});
littleImgS[2].addEventListener("click", function () {
    bigImg.src = littleImgS[2].src;
});
littleImgS[3].addEventListener("click", function () {
    bigImg.src = littleImgS[3].src;
});

let menu = document.getElementById("menuNav");
menu.style.maxHeight = "0px";
function menutoggle() {
    if (menu.style.maxHeight == "0px") {
        menu.style.maxHeight = "250px";
    } else {
        menu.style.maxHeight = "0px";
    }
}

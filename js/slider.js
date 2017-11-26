var items = document.querySelectorAll("#news .item");

var slideCounter = 0;

function slide() {
    var exit = items[slideCounter];
    var enter = items[(slideCounter + 1) % items.length];
    enter.style.left = "-100%";

    $(enter).animate({
        left: "50%"
    }, 2000, function() {});

    $(exit).animate({
        left: "200%"
    }, 2000, function() {});

    slideCounter = (slideCounter + 1) % items.length;
}

setInterval(slide, 2500);

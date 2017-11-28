$(document).ready(function() {
    var arrows = document.getElementsByClassName("sliderArrow");
    var animating = false;
    var date = new Date();
    var counter = 0;
    var speed = 1000;
    var frequency = 20000;

    for (var i = 0; i < arrows.length; i++) {
        $(arrows[i]).click(function(e) {
            e.preventDefault();
            if (this.id == "previous") {
                slide(slideCounter, "reverse");
            } else if (this.id == "next") {
                slide(slideCounter);
            }
        });
    }

    var items = document.querySelectorAll("#news .item");

    var slideCounter = 0;

    slide(slideCounter);

    function slide(id, direction) {
        date = new Date();

        if (counter + speed < date.getTime()) {
            if (document.hasFocus()) {
                if (direction == "reverse") {
                    var exit = items[id];
                    var enter = items[(items.length + id - 1) % items.length];
                    enter.style.left = "200%";

                    $(enter).animate({
                        left: "50%"
                    }, speed, function() {});

                    $(exit).animate({
                        left: "-100%"
                    }, speed, function() {});

                    slideCounter = (items.length + slideCounter - 1) % items.length;
                } else {
                    var exit = items[id];
                    var enter = items[(id + 1) % items.length];
                    enter.style.left = "-100%";

                    $(enter).animate({
                        left: "50%"
                    }, speed, function() {});

                    $(exit).animate({
                        left: "200%"
                    }, speed, function() {});

                    slideCounter = (slideCounter + 1) % items.length;
                }

                counter = date.getTime();
            }

            if (autoSwitch) {
                clearInterval(autoSwitch);
                autoSwitch = setInterval(function() {slide(slideCounter)}, frequency);
            }
        }
    }

    var autoSwitch = setInterval(function() {slide(slideCounter)}, frequency);
});

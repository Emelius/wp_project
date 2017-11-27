$(document).ready(function() {
    var arrows = document.getElementsByClassName("sliderArrow");
    var animating = false;
    var date = new Date();
    var counter = date.getTime();
    var speed = 1000;

    for (var i = 0; i < arrows.length; i++) {
        $(arrows[i]).click(function(e) {
            e.preventDefault();
            date = new Date();

            if (counter + speed < date.getTime()) {
                if (this.id == "previous") {
                    slide(slideCounter);
                } else if (this.id == "next") {
                    slide(slideCounter, "reverse");
                }
            }
        });
    }

    var items = document.querySelectorAll("#news .item");

    var slideCounter = 0;

    slide(slideCounter);

    function slide(id, direction) {
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
    }

    setInterval(function() {slide(slideCounter)}, 20000);
});

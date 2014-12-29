var target = $(".box h3").offset().top;


var interval = setInterval(function() {
    if ($(window).scrollTop() >= target) {
        alert("made it!");
        clearInterval(interval);
    }
}, 250);
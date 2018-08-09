$(function () {

   var step = 25;
    var scrolling = false;

// Wire up events for the 'scrollUp' link:
    $("#btn-scroll-left").bind("click", function(event) {
        event.preventDefault();
        // Animates the scrollTop property by the specified
        // step.
        $("html").animate({
            scrollLeft: "-=" + step + "px"
        });
    }).bind("mouseover", function(event) {
        scrolling = true;
        scrollContent("up");
    }).bind("mouseout", function(event) {
        scrolling = false;
    });


    $("#btn-scroll-right").bind("click", function(event) {
        event.preventDefault();
        $("html").animate({
            scrollLeft: "+=" + step + "px"
        });
    }).bind("mouseover", function(event) {
        scrolling = true;
        scrollContent("down");
    }).bind("mouseout", function(event) {
        scrolling = false;
    });
    function scrollContent(direction) {
        var amount = (direction === "up" ? "-=8px" : "+=8px");
        $("html").animate({
            scrollLeft: amount
        }, 1, function() {
            if (scrolling) {
                scrollContent(direction);
            }
        });
    }

});


// var clicked = false, clickX;
// $(document).on({
//     'mousemove': function(e) {
//         clicked && updateScrollPos(e);
//     },
//     'mousedown': function(e) {
//         clicked = true;
//         clickX = e.pageX;
//     },
//     'mouseup': function() {
//         clicked = false;
//         $('html').css('cursor', 'grab');
//     }
// });
//
// var updateScrollPos = function(e) {
//     $('.page').css('cursor', 'grab');
//     $(window).scrollLeft($(window).scrollLeft() + (clickX - e.pageX));
// }

$(function(){

    // suggested ratio = 0.3
    // suggested duration = 400
    $.fn.lc_smoothscroll = function(ratio, duration, ignoreX, ignoreY) {
        var $subj = this,
            trackX = (typeof(ignoreY) == 'undefined' || !ignoreX) ? true : false,

            curDown = false,
            curYPos = 0,
            curXPos = 0,

            startScrollY = 0,
            startScrollX = 0,
            scrollDif   = 0;

        $subj.mousemove(function(m){
            if(curDown === true){
                $subj.stop(true);

                if(trackX) {
                    $subj.scrollLeft(startScrollX + (curXPos - m.offsetX));
                }
            }

            if(typeof(lc_sms_timeout) != 'undefined') {clearTimeout(lc_sms_timeout);}
            lc_sms_timeout = setTimeout(function () {
                curDown = false;
            }, 50);
        });

        $subj.mousedown(function(m){
            if(typeof(lc_sms_timeout) != 'undefined') {clearTimeout(lc_sms_timeout);}
            curDown = true;

            startScrollY = $subj.scrollTop();
            startScrollX = $subj.scrollLeft();
            curYPos = m.offsetY;
            curXPos = m.offsetX;
        });

        $subj.mouseup(function(m){
            curDown = false;

            // smooth scroll
            var currScrollX = $subj.scrollLeft();
            var scrollDiffX = (startScrollX - currScrollX) * -10;
            var newScrollX = currScrollX + ( scrollDiffX * ratio);

            var anim_obj = {};
            if(trackX) {
                anim_obj["scrollLeft"] = newScrollX;
            }

            $subj.stop(true).animate(anim_obj, duration, 'linear');
        });
    };


    // implementation
    $('html').lc_smoothscroll(0.3, 400);


    // little trick to make mobile devices compatible with this demo
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('html').css('overflow', 'auto');
    }
});

jQuery(window).scroll(function (event) {

    var $elementTarget = $('#PageTopBtn');
    var elementHeight = $('#PageTopBtn').innerHeight();

    var threshold = jQuery(document).height() - jQuery(window).height() - jQuery('footer').height() + 60;
    if (jQuery(window).scrollTop() > 180) {
        $elementTarget.css({
            display: "block",
            top: "auto",
            right: "20px",
            bottom: "20px",
            position: "fixed"
        });
        // contact btn 會擋到
        // if ( jQuery(window).scrollTop() >= threshold) {
        //     $elementTarget.css({
        //         top: -1*elementHeight + "px",
        //         right: "20px",
        //         bottom: "auto",
        //         position: "absolute"
        //     });
        // } else {
        //     $elementTarget.css({
        //         top: "auto",
        //         right: "20px",
        //         bottom: "20px",
        //         position: "fixed"
        //     });
        // }
    } else {
        $elementTarget.css({
            display: "none"
        });
    }
});

jQuery('div.pagetopbtn').click(function () {
    jQuery("html, body").animate({scrollTop:0}, 500, 'swing');
});

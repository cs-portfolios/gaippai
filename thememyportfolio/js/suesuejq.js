jQuery(function () {
    $(".sfmb-modal").mouseover(function () {
        $(this).stop(true).animate({
            opacity: "1",
        }, 250
        );
    });
    $(".sfmb-modal").stop(true).mouseout(function () {
        $(this).animate({
            opacity: "0",
        }, 250
        );
    });
});

jQuery(function () {
    $(".snb-image").mouseover(function () {
        $(this).stop(true).animate({
            width: "110px",
        }, 250
        );
    });
    $(".snb-image").stop(true).mouseout(function () {
        $(this).animate({
            width: "90px",
        }, 250
        );
    });
});
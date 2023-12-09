let wrapRepeat = 0;
$(window).on("resize", function () {
    if($(window).width() < 992){
        if(wrapRepeat==0){
            $('.singleProductTopWrapper .entry-summary,.customSummaryBox').wrapAll('<div class="addedSingleWrapper"/>');
            wrapRepeat++;
        }
    }
    else{
        if($('.addedSingleWrapper').length){
            $('.singleProductTopWrapper .entry-summary,.customSummaryBox').unwrap();
            wrapRepeat=0;
        }
    }
}).resize();
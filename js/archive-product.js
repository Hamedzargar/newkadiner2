function updateQueryStringParameter(url, key, value) {
    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
    var separator = url.indexOf('?') !== -1 ? "&" : "?";
    if (url.match(re)) {
        return url.replace(re, '$1' + key + "=" + value + '$2');
    } else {
        return url + separator + key + "=" + value;
    }
}
function removeQueryStringParameter(url, key) {
    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
    if (url.match(re)) {
        var updatedUrl = url.replace(re, '$1$2');
        if (updatedUrl.endsWith('?') || updatedUrl.endsWith('&')) {
            updatedUrl = updatedUrl.slice(0, -1);
        }
        return updatedUrl;
    } else {
        return url;
    }
}
function checkQueryParam(parameter) {
    var queryString = window.location.search;
    var urlParams = new URLSearchParams(queryString);
    return urlParams.has(parameter);
}
  
$(document).ready(function () {
    if(checkQueryParam('in_stock')){
        $('.customProductStockSort input').prop('checked',true);
    }
    else{
        $('.customProductStockSort input').prop('checked',false);  
    }
    $('.customProductStockSort input').change(function(){
        var currentUrl = window.location.href;
        if ($(this).prop('checked')) {
            var updatedUrl = updateQueryStringParameter(currentUrl, 'in_stock', '1');
            window.location.href = updatedUrl;
        } else {
            var updatedUrl = removeQueryStringParameter(currentUrl, 'in_stock');
            window.location.href = updatedUrl;
        }
    });
    $('.customProductSort').click(function (e) {
        if($(window).width() < 480){
            e.preventDefault();
            $('.customProductSortOptionsMobile').show(300);
            $(this).unbind('click').click();
        }
        
    });
});
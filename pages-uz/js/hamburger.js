// Language switcher
// Убрать отсюда и раскоментировать в script.js - При посадке на CMS ====

// Mobile menu active
$('.hamburger').click(function(){
    $(this).toggleClass('is-active');
    $('.mobileMenu').toggleClass('active');
});

$(".mobileMenu .wrap .col-top .wraps .searchBlock form input").on('keypress keyup',function(e) {
    $(this).parent().find('button').css({
        'opacity' : 1,
        'visibility' : 'visible'
    });
    if (!this.value) {
        $(this).parent().find('button').css({
            'opacity' : 0,
            'visibility' : 'hidden'
        });
    }
});
$('.mobileMenu .wrap .col-top .wraps .features .switcher').click(function() {
    $(this).addClass('active');
    $('.mobileMenu .wrap .col-top .wraps .features .dropdown').toggleClass('active');
});


$('header .langSwitcher ul li span').click(function() {
    $(this).parent().toggleClass('active');
});
$('header a.searchBtn').click(function() {
    $('.searchDropdown').addClass('active');
});
$('header .featuresBlock a.switcher').click(function() {
    $(this).addClass('active');
    $('header .featuresBlock .dropdown').addClass('active');
});
$('.searchDropdown .col-top .container .wrap a.closeBtn').click(function(){
    $('.searchDropdown').removeClass('active');
});
$(document).keyup(function(e) {
    if (e.which == 27){
        $('header .langSwitcher ul li').removeClass('active');
        $('.searchDropdown').removeClass('active');
        $('header .featuresBlock .dropdown').removeClass('active');
        $('header .featuresBlock a.switcher').removeClass('active');
    }
});
$(document).mouseup(function (e) {
    var langItem = $('header .langSwitcher ul li');
    var searchItem = $('.searchDropdown .col-top');
    var switcherItem = $('header .featuresBlock');
    var mobileDropFeatures = $('.mobileMenu .wrap .col-top .wraps .features .dropdown');
    if (langItem.has(e.target).length === 0 && searchItem.has(e.target).length === 0 && switcherItem.has(e.target).length === 0 && mobileDropFeatures.has(e.target).length === 0){
        $('header .langSwitcher ul li').removeClass('active');
        $('.searchDropdown').removeClass('active');
        $('header .featuresBlock .dropdown').removeClass('active');
        $('header .featuresBlock a.switcher').removeClass('active');
        $('header .featuresBlock a.switcher').removeClass('active');
        $('.mobileMenu .wrap .col-top .wraps .features .dropdown').removeClass('active');
    }
});
// Enterprise Live search
$('header .container .wrap .col-right .wraps .col-top nav ul li.enterPriseCall a').click(function(){
    $('.enterpriseDropdown').addClass('active');
});
$('.enterpriseDropdown .col-top .container .wrap a.closeBtn').click(function(){
    $('.enterpriseDropdown').removeClass('active');
});
function liveSearch() {
    var input, filter, list, item, a, i;
    input = document.getElementById('liveSearch');
    filter = input.value.toUpperCase();
    list = document.getElementById("enterPriseList");
    item = list.querySelectorAll('div.item');
    console.log(item);
    for (i = 0; i < item.length; i++) {
        a = item[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            item[i].style.display = "";
        } else {
            item[i].style.display = "none";
        }
    }
}
$('.enterpriseDropdown .col-bottom .container .wrap .list .item').each(function(i){
    var item = $(this);
    item.click(function(){
        $('.enterpriseDropdown .col-bottom .container .wrap .list .item').removeClass('active');
        item.find('.dropBlock').css('display','block');
        item.addClass('active');
    });
});
$(document).mouseup(function (e) {
    var container = $('.enterpriseDropdown .col-bottom .container .wrap .list .item');
    if (container.has(e.target).length === 0){
        $('.enterpriseDropdown .col-bottom .container .wrap .list .item').removeClass('active');
    }
});
$(document).keyup(function(e) {
    if (e.which == 27){
        $('.enterpriseDropdown').removeClass('active');
    }
});
jQuery(window).on("load", function(){
    var $selectedItems = $("p, a, strong, span, address, h1, h2, h3, h4, h5, h6");
    $selectedItems.each( function(){
        var $this = $(this);
        $this.data("orig-size", $this.css("font-size") );
    });

    $('.des').click(function(e){
        e.preventDefault();
        changeFontSize(-1);
    });
    $('.inc').click(function(e){
        e.preventDefault();
        changeFontSize(1);
    });
    $(".def").click(function(){
        $selectedItems.each( function(){
            var $this = $(this);
            $this.css( "font-size" , $this.data("orig-size") );
        });
    })
    function changeFontSize(direction){
        $selectedItems.each( function(){
            var $this = $(this);
            $this.css('font-size', parseInt($this.css('font-size'))+direction);
        });
    }
}); 

$('header .featuresBlock .dropdown .switchRadioFeatures input.itemRadio, .mobileMenu .wrap .col-top .wraps .features .dropdown .switchRadioFeatures input.itemRadio').each(function(i){
    var radioItem = $(this);
    radioItem.click(function(){
        var myId = radioItem.prop("id");
        console.log(myId);
        if(myId == 'variantDefault' || myId == 'variantDefault_Mob'){
            $('body').removeClass('variantBlackWhite');
            $('body').addClass('variantDefault');
            $('.grayscale').removeClass('grayscale-off');
        }else if(myId == 'variantBlackWhite' || myId == 'variantBlackWhite_Mob'){
            $('body').removeClass('variantDefault');
            $('body').addClass('variantBlackWhite');
            $('img').gray();
        }
    });
});
// Table wrap div
setTimeout(function(){
    $("table").wrap( "<div class='tableResponsive'></div>" );
}, 1000);
// Accordion in Page html
    $('.pageTenders .content .container .wrap .col-left .wraps .list#accordionInPage .item').each(function(i){
        $(this).click(function(){
            $(this).siblings().find('.description').slideUp();
            $(this).find('.description').stop().slideToggle();
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
        });
    });

$(document).on('click', '[data-show-more]', function(){
    var btn = $(this);
    var page = btn.attr('data-next-page');
    var id = btn.attr('data-show-more');
    var bx_ajax_id = btn.attr('data-ajax-id');
    var block_id = "#comp_"+bx_ajax_id;

    var data = {
        bxajaxid:bx_ajax_id
    };
    data['PAGEN_'+id] = page;

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        timeout: 3000,
        success: function(data) {
            $("#btn_"+bx_ajax_id).remove();
            $(block_id).append(data);
        }
    });
});
var loc = window.location,
        pathArray=window.location.pathname.split("/"),
        secondLevelLocation=pathArray[1],
        sitepath=window.location.pathname.substring(3,loc.pathname.lastIndexOf("/")+1);
    "uz"===secondLevelLocation.toString()?($("#en").attr("href","/en"+sitepath),$("#ru").attr("href",sitepath)):"en"===secondLevelLocation.toString()?($("#uz").attr("href","/uz"+sitepath),$("#ru").attr("href",sitepath)):(sitepath=window.location.pathname.substring(0,loc.pathname.lastIndexOf("/")+1),$("#uz").attr("href","/uz"+sitepath),$("#en").attr("href","/en"+sitepath));
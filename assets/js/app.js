/**
 * Created by admin on 2017/12/15.
 */
// jQuery("#demo1").slide({ mainCell:".bd ul",effect:"top",autoPlay:false,triggerTime:0 });

$(function() {
    $('#my-slick').slick();
});

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
//        autoplay: true,
//        autoplaySpeed: 2000,
    speed: 500,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});

$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 500,
    asNavFor: '.slider-for',
    dots: false,
//        centerMode: true,
    focusOnSelect: true,
    slide: 'div'
});

$('.center').slick({
    centerMode: true,
    infinite: true,
    centerPadding: '20px',
    autoplay: true,
    autoplaySpeed: 2000,
    focusOnSelect: true,
    slidesToShow: 5,
    speed: 500
});

$('.center-teacher').slick({
    centerMode: true,
    infinite: true,
    centerPadding: '0px',
    autoplay: false,
    autoplaySpeed: 2000,
    focusOnSelect: true,
    slidesToShow: 3,
    speed: 500
});
//sliders

$(".lineBtn").on('click',function(){
    var btnid = $(this).attr('data-btnid');
    $(this).children(".details").toggle();
});
//question and answer's page show and hide

$(".leftSideBox p").click(function(){
    $(".leftSideBox").fadeOut();
});
// left side box's show and  hide

// var targetTitle = $(document).attr("title");
// var targetUrl = window.location.href;
// $("input[name='link']").val(targetUrl );
// $("input[name='linkTitle']").val(targetTitle );
// //browsers
// var browser = {
//     versions: function () {
//         var u = navigator.userAgent, app = navigator.appVersion;
//         return {         //移动终端浏览器版本信息
//             trident: u.indexOf('Trident') > -1, //IE内核
//             presto: u.indexOf('Presto') > -1, //opera内核
//             webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
//             gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
//             mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
//             ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
//             android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器
//             iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
//             iPad: u.indexOf('iPad') > -1, //是否iPad
//             webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
//         };
//     }(),
//     language: (navigator.browserLanguage || navigator.language).toLowerCase()
// };
//
// if (browser.versions.mobile) {//判断是否是移动设备打开。browser代码在下面
//     var ua = navigator.userAgent.toLowerCase();//获取判断用的对象
//
//     if (ua.match(/WeiBo/i) == "weibo") {
//         // 在新浪微博客户端打开
//         $("input[name='browserType']").val("手机新浪微博");
//     }
//     if (ua.match(/QQ/i) == "qq") {
//         // 在QQ空间打开
//         $("input[name='browserType']").val("手机QQ");
//     }
//     if (browser.versions.ios) {
//         // 是否在IOS浏览器打开
//         $("input[name='browserType']").val("手机IOS浏览器");
//     }
//     if(browser.versions.android){
//         // 是否在安卓浏览器打开
//         $("input[name='browserType']").val("手机安卓浏览器");
//     }
//     if (ua.match(/MicroMessenger/i) == "micromessenger") {
//         //在微信中打开
//         $("input[name='browserType']").val("手机微信");
//     }
// }
// else {
//     // 否则就是PC浏览器打开
//     $("input[name='browserType']").val("PC浏览器");
// }


if($(".teacherBlock .teacherName").text() == "樊登"){
    $(".hidingBlock").hide();
    $(".teacherBlock .teacherInfo p.paraForCheck").html("<a class='checkMore' href='/topic-fanDengDuShuHui.html'>加入樊登读书会</a>");
}

//排序
$(function(){
    //递增
    var asc = function(a, b) {
        return $(a).find('.hiddenInput').val() > $(b).find('.hiddenInput').val() ? 1 : -1;
    };
    //递减
//    var desc = function(a, b) {
//        return $(a).find('input').val() > $(b).find('input').val() ? -1 : 1;
//    };

    var sortByInput = function(sortBy) {
        var targetEle = $('.targetLayer>.layer');
        var sortEle = targetEle.sort(sortBy);
        $(targetEle).parent().empty().append(sortEle);
    };
    sortByInput(asc);
});

//for table in schedule
(function ($) {
    $.fn.extend({
        //表格合并单元格，colIdx要合并的列序号，从0开始
        "rowspan": function (colIdx) {
            return this.each(function () {
                var that;
                $('tr', this).each(function (row) {
                    $('td:eq(' + colIdx + ')', this).filter(':visible').each(function (col) {
                        if (that != null && $(this).html() == $(that).html()) {
                            rowspan = $(that).attr("rowSpan");
                            if (rowspan == undefined) {
                                $(that).attr("rowSpan", 1);
                                rowspan = $(that).attr("rowSpan");
                            }
                            rowspan = Number(rowspan) + 1;
                            $(that).attr("rowSpan", rowspan);
                            $(this).hide();
                        } else {
                            that = this;
                        }
                    });
                });
            });
        }
    });

})(jQuery);
function initLoad() {
    $(".tbListTM").rowspan(0); //第一列合并
}
$(document).ready(function () {
    initLoad();
});

// for index tabs
$(function(){

    let eqList = $(".fantastic .head-list li");
    let eqTab = $(".fantastic .image-library>ul");

    eqList.hover(function(){
        $(this).addClass("active-tab").siblings().removeClass("active-tab");
        // $(this)
        let eqList = $(this).index();
        // console.log(eqNum);
        eqTab.eq(eqList).addClass("active-tab-ul").siblings().removeClass("active-tab-ul");
    })

});

//lazy load
$('div.lazy').lazyload({
    effect : 'fadeIn'
});

if( self == top ) {document.documentElement.style.display = 'block' ;} else {top.location = self.location ;}

$('.formSubmit').submit(function(){
//        alert("！");
    var $nameVal = $(this).find("input[name='name']").val();
    var $phoneVal = $(this).find("input[name='tel']").val();
    var $checkcodeVal = $(this).find("input[name='checkcode']").val();
//        alert($nameVal);
//        alert($phoneVal);
    if ($nameVal == "" || $phoneVal == "" || $checkcodeVal == "") {
        alert("请完整填写信息！");
        return false;
    }
    else if (!$phoneVal.match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/)) {
        alert("请正确填写手机号！");
        return false;
    }
});


new Valine({
    el: '#comment' ,
    notify:false,
    verify:false,
    appId: '68GA4KjrBGlIB7wtnj1vtLqM-9Nh9j0Va',
    appKey: 'IaY5tDuKhHWPIRGPakqjbxbJ',
    placeholder: '请输入留言内容 ',
    path:window.location.pathname,
    avatar:'monsterid',
    lang:'zh-cn',
    guest_info:['nick','mail']
});

$(".formConsult").submit(function(){
    $('input[name="content"]').val($('select[name="selectTime"]').val() + $('select[name="selectPlace"]').val());
});


// var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
// document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F075f2e036e499f3f3a5a1583b2cbbc4b' type='text/javascript'%3E%3C/script%3E"));


(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();



$(document).ready(function(e) {
    var date1=new Date();
    sta_str = ("2018-12-22 00:00:00").replace(/-/g,"/");
    var sta_date = new Date(sta_str);
    var num = (sta_date-date1)/(1000*3600*24);//求出两个时间的时间差，这个是天数
    var days = parseInt(Math.ceil(num));//转化为整天（小于零的话剧不用转了）
    $("#daojishi_text").text(days);
});



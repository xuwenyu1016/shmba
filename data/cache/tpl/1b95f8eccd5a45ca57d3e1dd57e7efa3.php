<?php exit;?>0015750792389e411285de7d07e5bd8d1f566c6995des:2665:"a:2:{s:8:"template";s:2601:"

<hr class="bottomBreak" />

<div class="bottom-nav">
    <ul class="am-navbar-nav am-avg-sm-4">
        <li>
            <a href='/'>
                <img src="/upload/2018-02-14/1.png" class="am-img-responsive"/> <span class="am-navbar-label">首页</span>
            </a>
        </li>
        <li>
            <a href='/list-shiTingKeKeCheng.html'>
                <img src="/upload/2018-02-14/2.png" class="am-img-responsive"/> <span class="am-navbar-label">免费试听</span>
            </a>
        </li>

        <li>
            <a href='http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw='>
                <img src="/upload/2018-02-14/3.png" class="am-img-responsive"/> <span class="am-navbar-label">在线咨询</span>
            </a>
        </li>
        <li>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schoolInfo", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
            <a href='tel:<?php echo $list["tel"];?>'>
                <img src="/upload/2018-02-14/4.png" class="am-img-responsive"/> <span class="am-navbar-label">电话咨询</span>
            </a>
            <?php } ?>
        </li>
    </ul>
</div>


</body>



<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/assets/js/amazeui.min.js"></script>
<script src="/assets/js/slick.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=2ab9a8e5f4c7f4b99d508d3d0025b954"></script>

<script src="/assets/js/lazyload.js"></script>

<script src="//cdn1.lncld.net/static/js/3.0.4/av-min.js"></script>
<script src='//unpkg.com/valine/dist/Valine.min.js'></script>

<script src="/assets/js/app.js#3"></script>

<script type="text/javascript" src="/assets/js/touchslider.js"></script>
<script type="text/javascript" src="/assets/js/touchNavTab.js"></script>

<script src="/assets/js/changning.js"></script>
<script src="/assets/js/pudong.js"></script>
<script src="/assets/js/yangpu.js"></script>
<script src="/assets/js/xuhui.js"></script>
<script src="/assets/js/huangpu.js"></script>

<script src="/assets/js/tushuguan.js"></script>

<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?075f2e036e499f3f3a5a1583b2cbbc4b";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

</html>";s:12:"compile_time";i:1543543238;}";
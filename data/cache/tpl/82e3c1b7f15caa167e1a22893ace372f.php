<?php exit;?>00155185461925c10eeed12b0f43809908c22eb62249s:2247:"a:2:{s:8:"template";s:2183:"<?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"ads", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
<div class="ads" style="background-color:#<?php echo $list["color"];?>; ">

    <a href="<?php echo $list["link"];?>" target="_blank" title="<?php echo $list["description"];?>">
        <img src="<?php echo $list["img"];?>" class="am-img-responsive am-center" alt="<?php echo $list["description"];?>"/>
    </a>
    <div class="am-container">
        <div class="leftSideBox">
            <div class="am-animation-slide-left am-animation-delay-1">
                <a href="<?php echo $list["sideUrl"];?>" target="_blank">
                    <img src="<?php echo $list["sideImg"];?>" class="am-img-responsive" />
                </a>
                <p>关闭</p>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<header>
    <nav class="am-container">
        <a class="logoImg" href="/"><img src="/assets/img/35.png" class="am-img-responsive" title="" alt="" /></a>
        <ul class="am-avg-sm-6 navList">
            <li><a href="/" title="">首页</a></li>
            <li>
                <a title="课程介绍">课程介绍</a>
                <ul class="dropdownList">
                    <li><a href="/list-writtenTest.html">笔试课程</a></li>
                    <li><a href="/page-mianShiKeCheng.html">面试课程</a></li>
                </ul>
            </li>
            <li><a href="/list-events.html" title="华章活动">华章活动</a></li>
            <!--<li><a href="/list-yuanXiaoXinXi.html" title="学校信息">学校信息</a></li>-->
            <!--<li><a href="/list-faq.html" title="常见问题">常见问题</a></li>-->
            <li><a href="/page-fileDownload.html" title="备考资料">备考资料</a></li>
            <li><a href="/page-readingParty.html" title="樊登读书会">樊登读书会</a></li>
            <li><a href="http://wk.hzmba.net" target="_blank" title="华章网课">华章网课</a></li>
        </ul>
        <a href="http://www.hzmba.net/" target="_blank" class="returnBack">返回旧版</a>
    </nav>
</header>";s:12:"compile_time";i:1520318619;}";
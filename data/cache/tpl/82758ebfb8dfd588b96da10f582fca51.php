<?php exit;?>001575079145f9b6173c362ff6e1a65c4ba51bc3f05cs:8433:"a:2:{s:8:"template";s:8369:"<?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"ads", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
<div class="ads" style="background-color:#<?php echo $list["color"];?>; ">

    <div class="am-container am-padding-0">
        <a href="<?php echo $list["link"];?>" target="_blank" title="<?php echo $list["description"];?>" class="link-container" style="background-image: url('<?php echo $list["img"];?>')">
            <span id="daojishi_text"></span>
        </a>
    </div>

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
        <a class="logoImg" href="/"><img src="/assets/img/35.png" class="am-img-responsive" title="上海华章" alt="上海华章" /></a>

        <div class="am-dropdown" data-am-dropdown>
            <a data-am-drop-down href="javascript:;" class="am-dropdown-toggle" id="cityList"> 全国华章<span class="am-icon-caret-down am-margin-left-xs"></span></a>
            <ul class="am-avg-sm-5 link-lists-dropdown am-dropdown-content am-text-center">
                <li><a href="http://www.hzmba.com/" target="_blank" title="北京华章" id="bjhzmba">北京</a></li>
                <li><a href="http://www.hzmba.net/" target="_blank" title="上海华章" id="shhzmba">上海</a></li>
                <li><a href="http://suzhou.hzmba.net/" target="_blank" title="苏州华章" id="suzhouhzmba">苏州</a></li>
                <li><a href="http://www.mbajs.com/" target="_blank" title="南京华章" id="njhzmba">南京</a></li>
                <li><a href="http://sz.szhzmba.com/" target="_blank" title="深圳华章" id="shenzhenhzmba">深圳</a></li>
                <li><a href="http://www.nkmba.com/" target="_blank" title="天津华章" id="nkhzmba">天津</a></li>
                <li><a href="http://wh.hzmba.com" target="_blank" title="武汉华章">武汉</a></li>
                <li><a href="http://lz.hzmba.com" target="_blank" title="兰州华章">兰州</a></li>
                <li><a href="http://zz.hzmba.com" target="_blank" title="郑州华章">郑州</a></li>
                <li><a href="http://nn.hzmba.com" target="_blank" title="南宁华章">南宁</a></li>
                <li><a href="http://cz.hzmba.com" target="_blank" title="常州华章">常州</a></li>
                <li><a href="http://jn.hzmba.com" target="_blank" title="济南华章">济南</a></li>
                <li><a href="http://gy.hzmba.com" target="_blank" title="贵阳华章">贵阳</a></li>
                <li><a href="http://xm.hzmba.com" target="_blank" title="厦门华章">厦门</a></li>
                <li><a href="http://wlmq.hzmba.com" target="_blank" title="乌鲁木齐华章">乌鲁木齐</a></li>
                <li><a href="http://xian.hzmba.com" target="_blank" title="西安华章">西安</a></li>
                <li><a href="http://gz.hzmba.com" target="_blank" title="广州华章">广州</a></li>
                <li><a href="http://sy.hzmba.com" target="_blank" title="沈阳华章">沈阳</a></li>
                <li><a href="http://qz.hzmba.com" target="_blank" title="泉州华章">泉州</a></li>
                <li><a href="http://cc.hzmba.com" target="_blank" title="长春华章">长春</a></li>
                <li><a href="http://jh.hzmba.com" target="_blank" title="浙江金华华章">浙江金华</a></li>
                <li><a href="http://lyg.hzmba.com" target="_blank" title="连云港华章">连云港</a></li>
                <li><a href="http://st.hzmba.com" target="_blank" title="汕头华章">汕头</a></li>
                <li><a href="http://sjz.hzmba.com" target="_blank" title="石家庄华章">石家庄</a></li>
                <li><a href="http://fs.hzmba.com" target="_blank" title="佛山华章">佛山</a></li>
                <li><a href="http://cd.hzmba.com" target="_blank" title="成都华章">成都</a></li>
                <li><a href="http://ty.hzmba.com" target="_blank" title="太原华章">太原</a></li>
                <li><a href="http://sz.hzmba.com" target="_blank" title="深圳华章">深圳</a></li>
                <li><a href="http://fz.hzmba.com" target="_blank" title="福州华章">福州</a></li>
                <li><a href="http://qd.hzmba.com" target="_blank" title="青岛华章">青岛</a></li>
                <li><a href="http://tz.hzmba.com" target="_blank" title="泰州华章">泰州</a></li>
                <li><a href="http://hangzhou.hzmba.com" target="_blank" title="杭州华章">杭州</a></li>
                <li><a href="http://cq.hzmba.com" target="_blank" title="重庆华章">重庆</a></li>
                <li><a href="http://hf.hzmba.com" target="_blank" title="合肥华章">合肥</a></li>
                <li><a href="http://dl.hzmba.com" target="_blank" title="大连华章">大连</a></li>
                <li><a href="http://bd.hzmba.com" target="_blank" title="保定华章">保定</a></li>
                <li><a href="http://changchun.hzmba.com/huazhang/index.asp" target="_blank" title="长春华章">长春</a></li>
            </ul>
        </div>

        <?php if ( $_SERVER['HTTP_HOST'] ==  'www.hz-mba.com'  ){ ?>
        <ul class="am-avg-sm-6 navList">
            <li><a href="/" title="">首页</a></li>
            <li>
                <a title="课程介绍">课程介绍</a>
                <ul class="dropdownList">
                    <li><a href="/topic-MBABiShiKeCheng.html">笔试课程</a></li>
                    <li><a href="/topic-MBATiQianMianShi.html">面试课程</a></li>

                </ul>
            </li>
            <li>
                <a title="华章活动">华章活动</a>
                <ul class="dropdownList">
                    <li><a href="/list-huoDong.html">活动回顾</a></li>
                </ul>
            </li>
            <li><a href="/topic-MBABeiKaoZiLiao.html" title="备考资料">备考资料</a></li>
            <li>
                <a title="招生简章">招生简章</a>
                <ul class="dropdownList">
                    <li><a href="/topic-huazhangMBAbishi.html">笔试简章</a></li>
                    <li><a href="/topic-huazhangMBAmianshi.html">面试简章</a></li>

                </ul>
            </li>
            <li><a href="/topic-fanDengDuShuHui.html" title="樊登读书会">樊登读书会</a></li>
            <!--<li><a href="http://wk.hzmba.net" target="_blank" title="华章网课">华章网课</a></li>-->
        </ul>

        <?php }else{ ?>
        <ul class="am-avg-sm-7 navList">
            <li><a href="/" title="">首页</a></li>
            <li>
                <a title="课程介绍">课程介绍</a>
                <ul class="dropdownList">
                    <li><a href="/topic-MBABiShiKeCheng.html">笔试课程</a></li>
                    <li><a href="/topic-MBATiQianMianShi.html">面试课程</a></li>

                </ul>
            </li>
            <li>
                <a title="华章活动">华章活动</a>
                <ul class="dropdownList">
                    <li><a href="/list-huoDong.html">活动回顾</a></li>
                </ul>
            </li>
            <li><a href="/topic-MBABeiKaoZiLiao.html" title="备考资料">备考资料</a></li>
            <li>
                <a title="招生简章">招生简章</a>
                <ul class="dropdownList">
                    <li><a href="/topic-huazhangMBAbishi.html">笔试简章</a></li>
                    <li><a href="/topic-huazhangMBAmianshi.html">面试简章</a></li>

                </ul>
            </li>
            <li><a href="/topic-fanDengDuShuHui.html" title="樊登读书会">樊登读书会</a></li>
            <li><a href="http://wk.hzmba.net" target="_blank" title="华章网课">华章网课</a></li>
        </ul>
        <?php } ?>

    </nav>
</header>";s:12:"compile_time";i:1543543145;}";
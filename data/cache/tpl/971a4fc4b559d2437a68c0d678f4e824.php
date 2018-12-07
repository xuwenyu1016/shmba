<?php exit;?>001575079597f24b6bdb6cc627857d5d48c0b69983e1s:27081:"a:2:{s:8:"template";s:27016:"﻿
<?php $__Template->display("themes/mobile/head_index"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{"controlNav":false,slideshowSpeed: 10000}' >
    <ul class="am-slides">
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"mobileSlider", "order"=>"giveOrder asc", "limit"=>100));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['giveOrder'] !=  0 ){ ?>
        <li>
            <a href="<?php echo $list["link"];?>" target="_blank" title="<?php echo $list["description"];?>">
                <img src="<?php echo $list["img"];?>" class="am-img-responsive" alt="<?php echo $list["description"];?>"/>
            </a>
        </li>
        <?php } ?>
        <?php } ?>
    </ul>
</div>

<main class="index-main am-padding-sm">
    <h3><span class="leftBrackets">[</span><span class="core">近期动态</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>

    <section>
        <div>
            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>14, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
            <a href="<?php echo $list["aurl"];?>" class="label-rectangle" id="baike">

                <span class="dark-blue"><?php echo $list["class_name"];?></span>

                <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" />

                <article class="am-padding-left-sm">
                    <p class="am-margin-vertical-xs am-text-xs am-text-truncate"><?php echo $list["title"];?></p>
                    <div class="last-line">
                        <!--<p class="am-margin-vertical-xs am-text-xs"><img src="/upload/2017-11-01/12.png" alt="白中男" /> 白中男</p>-->
                        <p class="am-margin-0 am-text-xs"><span><?php echo date('Y-m-d',$list['time']);?></span> <span class="am-icon-eye am-padding-left-xs"><?php echo $list["views"];?></span> </p>
                    </div>
                </article>
            </a>
            <?php } ?>

            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>86, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
            <a href="<?php echo $list["aurl"];?>" class="label-rectangle" id="shenqing">

                <span class="brown"><?php echo $list["class_name"];?></span>

                <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" />

                <article class="am-padding-left-sm">
                    <p class="am-margin-vertical-xs am-text-xs am-text-truncate"><?php echo $list["title"];?></p>
                    <div class="last-line">
                        <!--<p class="am-margin-vertical-xs am-text-xs"><img src="/upload/2017-11-01/12.png" alt="白中男" /> 白中男</p>-->
                        <p class="am-margin-0 am-text-xs"><span><?php echo date('Y-m-d',$list['time']);?></span> <span class="am-icon-eye am-padding-left-xs"><?php echo $list["views"];?></span> </p>
                    </div>
                </article>
            </a>
            <?php } ?>

            <ul class="am-avg-sm-2">
                <li class="am-padding-right-xs">
                    <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>72, "class_id"=>47 , "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <a href="<?php echo $list["curl"];?>" class="square-box" id="mbaceshi">

                        <span class="light-green"><?php echo $list["name"];?></span>

                        <img src="<?php echo $list["image"];?>" class="am-img-responsive" />

                        <article class="">
                            <p class="am-margin-vertical-xs am-padding-top-xs am-text-xs am-text-truncate">我能考上MBA吗？</p>
                            <div class="last-line">
                                <!--<p class="am-margin-vertical-xs am-text-xs"><img src="/upload/2017-11-01/12.png" alt="白中男" /> 白中男</p>-->
                                <p class="am-margin-0 am-text-xs">2018-06-12 <span class="am-icon-eye am-padding-left-xs"></span>  <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"guestbook", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?><?php echo $list["data_id"];?><?php } ?></p>
                            </div>
                        </article>
                    </a>
                    <?php } ?>
                </li>
                <li class="am-padding-left-xs">
                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>18, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <a href="<?php echo $list["aurl"];?>" class="square-box" id="beikaoriji">

                        <span class="light-blue"><?php echo $list["class_name"];?></span>

                        <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" />

                        <article class="">
                            <p class="am-margin-vertical-xs am-padding-top-xs am-text-xs am-text-truncate"><?php echo $list["title"];?></p>
                            <div class="last-line">
                                <!--<p class="am-margin-vertical-xs am-text-xs"><img src="/upload/2017-11-01/12.png" alt="白中男" /> 白中男</p>-->
                                <p class="am-margin-0 am-text-xs"><?php echo date('Y-m-d',$list['time']);?> <span class="am-icon-eye am-padding-left-xs"></span> <?php echo $list["views"];?></p>
                            </div>
                        </article>
                    </a>
                    <?php } ?>
                </li>
            </ul>

            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>87, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
            <a href="<?php echo $list["aurl"];?>" class="label-rectangle" id="shenghuo">

                <span class="special-green"><?php echo $list["class_name"];?></span>

                <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" />

                <article class="am-padding-left-sm">
                    <p class="am-margin-vertical-xs am-text-xs am-text-truncate"><?php echo $list["title"];?></p>
                    <div class="last-line">
                        <!--<p class="am-margin-vertical-xs am-text-xs"><img src="/upload/2017-11-01/12.png" alt="白中男" /> 白中男</p>-->
                        <p class="am-margin-0 am-text-xs"><span><?php echo date('Y-m-d',$list['time']);?></span> <span class="am-icon-eye am-padding-left-xs"><?php echo $list["views"];?></span> </p>
                    </div>
                </article>
            </a>
            <?php } ?>

            <section data-am-widget="accordion" class="am-accordion am-accordion-basic" data-am-accordion='{  }'>
                <dl class="am-accordion-item">
                    <dt class="am-accordion-title" id="gengduodongtai">
                        查看更多MBA动态
                    </dt>
                    <dd class="am-accordion-bd am-collapse">
                        <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                        <div class="am-accordion-content">
                            <ul class="am-avg-sm-2">
                                <li class="am-padding-right-xs">
                                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>91, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                                    <a href="<?php echo $list["aurl"];?>" class="square-box" id="tiaoji">

                                        <span class="red"><?php echo $list["class_name"];?></span>

                                        <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" />

                                        <article class="">
                                            <p class="am-margin-vertical-xs am-padding-top-xs am-text-xs am-text-truncate"><?php echo $list["title"];?></p>
                                            <div class="last-line">
                                                <!--<p class="am-margin-vertical-xs am-text-xs"><img src="/upload/2017-11-01/12.png" alt="白中男" /> 白中男</p>-->
                                                <p class="am-margin-0 am-text-xs"><span><?php echo date('Y-m-d',$list['time']);?></span> <span class="am-icon-eye am-padding-left-xs"><?php echo $list["views"];?></span> </p>
                                            </div>
                                        </article>
                                    </a>
                                    <?php } ?>
                                </li>
                                <li class="am-padding-left-xs">
                                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>16, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                                    <a href="<?php echo $list["aurl"];?>" class="square-box" id="ruhebaikao">

                                        <span class="light-brown"><?php echo $list["class_name"];?></span>

                                        <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" />

                                        <article class="">
                                            <p class="am-margin-vertical-xs am-padding-top-xs am-text-xs am-text-truncate"><?php echo $list["title"];?></p>
                                            <div class="last-line">
                                                <!--<p class="am-margin-vertical-xs am-text-xs"><img src="/upload/2017-11-01/12.png" alt="白中男" /> 白中男</p>-->
                                                <p class="am-margin-0 am-text-xs"><span><?php echo date('Y-m-d',$list['time']);?></span> <span class="am-icon-eye am-padding-left-xs"><?php echo $list["views"];?></span> </p>
                                            </div>
                                        </article>
                                    </a>
                                    <?php } ?>
                                </li>
                            </ul>

                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>88, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>" class="label-rectangle" id="pengyouquan">

                                <span class="special-light-green"><?php echo $list["class_name"];?></span>

                                <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" />

                                <article class="am-padding-left-sm">
                                    <p class="am-margin-vertical-xs am-text-xs am-text-truncate"><?php echo $list["title"];?></p>
                                    <div class="last-line">
                                        <!--<p class="am-margin-vertical-xs am-text-xs"><img src="/upload/2017-11-01/12.png" alt="白中男" /> 白中男</p>-->
                                        <p class="am-margin-0 am-text-xs"><span><?php echo date('Y-m-d',$list['time']);?></span> <span class="am-icon-eye am-padding-left-xs"><?php echo $list["views"];?></span> </p>
                                    </div>
                                </article>
                            </a>
                            <?php } ?>

                            <ul class="am-avg-sm-2">
                                <li class="am-padding-right-xs">
                                    <a href="" class="square-box ads-img">

                                        <img src="/upload/2017-11-01/23.png" class="am-img-responsive" />
                                    </a>
                                </li>
                                <li class="am-padding-left-xs">
                                    <a href="" class="square-box ads-img">



                                        <img src="/upload/2017-11-01/24.png" class="am-img-responsive" />


                                    </a>
                                </li>
                            </ul>
                        </div>
                    </dd>
                </dl>

            </section>


        </div>

    </section>

</main>

<section class="theory am-padding-sm">
    <h3><span class="leftBrackets">[</span><span class="core">华章理念</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>

    <p>上海华章MBA考前辅导机构专注MBA培训，华章MBA培训依托个性化辅导,精确把握MBA联考信息，例如MBA提前面试，MBA报考条件，MBA和EMBA的区别等，精选全国MBA名师，铸就MBA联考高通过率。 </br>华章秉承“不仅通过联考，更要受益终身”的办学理念，圆您高校MBA之梦，成就辉煌人生！</p>

    <img src="/assets/img/4.png" class="am-img-responsive am-center am-margin-vertical-sm" alt="" />

    <ul class="am-avg-sm-3">
        <li><a href="/list-mba.html"><span>MBA</span><span> > MORE < </span></a></li>
        <li><a href="/list-emba.html"><span>EMBA</span><span> > MORE < </span></a></li>
        <li><a href="/list-mpa.html"><span>MPA</span><span> > MORE < </span></a></li>
        <li><a href="/list-mpacc.html" class="am-margin-bottom-0"><span>MPAcc</span><span> > MORE < </span></a></li>
        <li><a href="/list-mem.html" class="am-margin-bottom-0"><span>MEM</span><span> > MORE < </span></a></li>
        <li><a href="/topic-MBATiQianMianShi.html" class="am-margin-bottom-0 am-text-danger"><span class="fontSm">提前面试</span><span> > MORE < </span></a></li>
    </ul>
</section>

<section class="lecture am-padding-horizontal-sm">
    <a href="/list-shiTingKeKeCheng.html" class="morePlus">more</a>
    <h3><span class="leftBrackets">[</span><span class="core">试听课</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>
    <div class="layerBox targetLayer">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "expand_id"=>8, "order"=>"time desc" , "limit"=>15));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( date('Y-m-d H-i-s',$list['time']) >=  date("Y-m-d H-i-s")  ){ ?>
        <article class="layer">
            <p class="targetHiddenTime">
                <input class="hiddenInput" type="hidden" value="<?php echo date('YmdH',$list["time"]);?>" placeholder="<?php echo date('YmdH',$list["time"]);?>" />
            </p>
            <a href="<?php echo $list["aurl"];?>">
                <div class="calender">
                    <span><?php echo $list["week"];?></span><span><?php echo date('d',$list["begTime"]);?></span>
                </div>
                <div class="classContent">
                    <p class="am-text-truncate"><?php echo $list["subject"];?>课程</p>
                    <p class="am-text-truncate"><span class="location"><?php echo $list["location"];?></span><span>校区 <?php echo $list["subject"];?>导师-<?php echo $list["Instructor"];?>授课<?php echo $list["class"];?></span></p>
                    <span>免费试听</span>
                </div>
            </a>

        </article>
        <?php } ?>
        <?php } ?>

    </div>
</section>

<section class="teacher am-padding-sm">

    <a href="/list-huaZhangDaoShi.html" class="morePlus">more</a>

    <h3><span class="leftBrackets">[</span><span class="core">导师介绍</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>

    <div data-am-widget="slider" class="am-slider am-slider-default" data-am-flexslider="{itemWidth:100, itemMargin: 5, minItems:3, maxItems:3, slideshow: true,animationLoop: true, slideshow: true}" >
        <ul class="am-slides">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li>
                <a href="<?php echo $list["aurl"];?>">
                    <img src="<?php echo $list["image"];?>" />
                    <span><?php echo $list["title"];?></span>
                </a>
            </li>
            <?php } ?>

        </ul>
    </div>
</section>

<section class="class">
    <h3><span class="leftBrackets">[</span><span class="core">课程介绍</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>

    <ul class="am-padding-sm class-container">
        <li>
            <a class="am-padding-xs am-margin-bottom-sm" href="/topic-MBABiShiKeCheng.html">
                <p class="class-title am-margin-top-0 am-margin-bottom-xs">MBA笔试课程</p>

                <article>
                    <img src="/upload/2018-11-21/5.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />

                    <div class="">

                        <p class="am-margin-vertical-0 flagship am-text-xs"><span>数学</span><span>英语</span><span>逻辑</span><span>写作</span><span>1月-12月</span></p>
                        <p class="am-margin-vertical-0 am-text-xs">MBA官方教材主编，命题组、阅卷组老师亲授。</p>
                        <span class="link-span">查看详情>></span>
                    </div>
                </article>
            </a>
        </li>
        <li>
            <a class="am-padding-xs am-margin-bottom-sm" href="/topic-MBATiQianMianShi.html">
                <p class="class-title am-margin-top-0 am-margin-bottom-xs">MBA面试课程</p>

                <article>
                    <img src="/upload/2018-11-21/6.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />

                    <div class="">

                        <p class="am-margin-vertical-0 flagship am-text-xs"><span>背景评估</span><span>个面</span><span>组面</span><span>3月-10月</span></p>
                        <p class="am-margin-vertical-0 am-text-xs">企业高管，高校MBA招生官、现任面试官亲授。</p>
                        <span class="link-span">查看详情>></span>
                    </div>
                </article>
            </a>
        </li>
       <li>
           <a class="am-padding-xs" href="/topic-MBABiShiKeCheng.html">
               <p class="class-title am-margin-top-0 am-margin-bottom-xs">MBA笔面课程</p>

               <article>
                   <img src="/upload/2018-11-21/7.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />

                   <div class="">

                       <p class="am-margin-vertical-0 flagship am-text-xs"><span>笔试+面试辅导</span><span>1月-12月</span></p>
                       <p class="am-margin-vertical-0 am-text-xs">全程连报，不玩套路，特价优惠</p>
                       <span class="link-span">查看详情>></span>
                   </div>
               </article>
           </a>
       </li>




    </ul>
    <!--<div class="am-tabs am-margin-top-lg" data-am-tabs>-->
        <!--<ul class="am-tabs-nav am-nav am-nav-tabs am-avg-sm-3">-->
            <!--<li class="am-active"><a href="#tab1">笔试班</a></li>-->
            <!--<li><a href="#tab2">面试班</a></li>-->
            <!--<li><a href="#tab3">订制班</a></li>-->
        <!--</ul>-->

        <!--<div class="am-tabs-bd">-->
            <!--<div class="am-tab-panel am-fade am-in am-active" id="tab1">-->
                <!--<ul class="am-avg-sm-2">-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBABiShiKeCheng.html">-->
                                <!--<div>-->
                                    <!--<span>【导学阶段】</span>-->
                                <!--</div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-jiChuBan.html">-->
                                <!--<div>-->
                                    <!--<span>【基础阶段】</span>-->
                                <!--</div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBAxitongban.html">-->
                                <!--<div>-->
                                    <!--<span>【系统阶段】</span>-->
                                <!--</div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->

                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBABiShiKeCheng.html">-->
                                <!--<div>-->
                                    <!--<span>【模考冲刺阶段】</span>-->
                                <!--</div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->

                <!--</ul>-->
            <!--</div>-->
            <!--<div class="am-tab-panel am-fade" id="tab2">-->
                <!--<ul class="am-avg-sm-2">-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBATiQianMianShi.html">-->
                                <!--<div><span>【面试材料准备】</span></div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBATiQianMianShi.html">-->
                                <!--<div><span>【面试综合能力】</span></div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBATiQianMianShi.html">-->
                                <!--<div><span>【高校面试特色课程】</span></div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->

                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBATiQianMianShi.html">-->
                                <!--<div><span>【全真模拟演练】</span></div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->

                <!--</ul>-->
            <!--</div>-->
            <!--<div class="am-tab-panel am-fade" id="tab3">-->
                <!--<ul class="am-avg-sm-2">-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBABiShiKeCheng.html">-->
                                <!--<div><span>【笔试+面试全程班】</span></div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBABiShiKeCheng.html">-->
                                <!--<div><span>【30人小班】</span></div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBABiShiKeCheng.html">-->
                                <!--<div><span>【笔试私人定制班】</span></div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->

                    <!--<li>-->
                        <!--<article class="innerBox">-->
                            <!--<a href="/topic-MBATiQianMianShi.html">-->
                                <!--<div><span>【面试私人定制班】</span></div>-->
                                <!--<p>查看详情</p>-->
                            <!--</a>-->
                        <!--</article>-->
                    <!--</li>-->

                <!--</ul>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
</section>



<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>

";s:12:"compile_time";i:1543543597;}";
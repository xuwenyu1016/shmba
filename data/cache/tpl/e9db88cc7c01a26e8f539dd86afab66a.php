<?php exit;?>001575079145b327d5c90051a9a58b0d76f5254bb551s:35785:"a:2:{s:8:"template";s:35720:"﻿<?php $__Template->display("themes/default/head_index"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="indexSlider">
    <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{slideshowSpeed: 10000}' >
        <ul class="am-slides">
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"PCslider", "order"=>"giveOrder asc", "limit"=>100));  if(is_array($listList)) foreach($listList as $list){ ?>
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
</section>

<main class="index-main">
    <div class="am-container am-padding-top-lg">
        <h2>近期动态<span class="borderSpan"></span></h2>

        <ul class="am-avg-sm-3 am-padding-top-lg am-padding-bottom-sm three-classes">
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"pc_triboxes", "order"=>"ranks asc", "limit"=>100));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['ranks'] !=  0 ){ ?>
            <li><a href="<?php echo $list["imgLink"];?>"><img src="<?php echo $list["classImg"];?>" alt="近期动态" class="am-img-responsive am-center"></a></li>
            <?php } ?>
            <?php } ?>
            <!--<li class="am-padding-horizontal-xs"><a href=""><img src="/upload/2017-11-01/8.png" alt="" class="am-img-responsive am-center"></a></li>-->
            <!--<li class="am-padding-left-sm"><a href=""><img src="/upload/2017-11-01/9.png" alt="" class="am-img-responsive am-center"></a></li>-->
        </ul>

        <?php $__Template->display("themes/default/article-head"); ?>

        <section class="am-padding-top-sm am-padding-bottom-lg">
            <div>
                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>14, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                <a href="<?php echo $list["aurl"];?>" class="label-rectangle" id="baike">

                    <span class="dark-blue"><?php echo $list["class_name"];?></span>

                    <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                    <article class="am-padding-left-sm">
                        <p class="am-margin-vertical-xs"><?php echo $list["title"];?></p>
                        <div class="last-line">
                            <p class="am-margin-vertical-xs">
                                <!--<img src="/upload/2017-11-01/12.png" alt="白中男" /> -->
                                <?php echo $list["copyfrom"];?></p>
                            <p class="am-margin-vertical-xs"><?php echo date('Y-m-d',$list['time']);?> <span class="am-icon-eye am-padding-right-xs"></span> <?php echo $list["views"];?></p>
                        </div>
                    </article>
                </a>
                <?php } ?>

                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>86, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                <a href="<?php echo $list["aurl"];?>" class="label-rectangle" id="shenqing">

                    <span class="brown"><?php echo $list["class_name"];?></span>

                    <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                    <article class="am-padding-left-sm">
                        <p class="am-margin-vertical-xs"><?php echo $list["title"];?></p>
                        <div class="last-line">
                            <p class="am-margin-vertical-xs">
                                <!--<img src="/upload/2017-11-01/12.png" alt="白中男" />-->
                                <?php echo $list["copyfrom"];?></p>
                            <p class="am-margin-vertical-xs"><?php echo date('Y-m-d',$list['time']);?> <span class="am-icon-eye am-padding-right-xs"></span> <?php echo $list["views"];?></p>
                        </div>
                    </article>
                </a>
                <?php } ?>

                <ul class="am-avg-sm-2">
                    <li class="am-padding-right-xs">
                        <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>72, "class_id"=>47 , "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <a href="<?php echo $list["curl"];?>" class="square-box" id="mbaceshi">

                            <span class="light-green"><?php echo $list["name"];?></span>

                            <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                            <article class="/topic-MBABeiJingCeShi.html">
                                <p class="am-margin-vertical-xs am-padding-top-xs">我能考上MBA吗？<br/>考上的几率有多大？</p>
                                <div class="last-line">
                                    <p class="am-margin-vertical-xs">
                                        <!--<img src="/upload/2017-11-01/12.png" alt="白中男" /> -->
                                        GengXiHR</p>
                                    <p class="am-margin-vertical-xs">2018-06-12 <span class="am-icon-eye am-padding-right-xs"></span>  <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"guestbook", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?><?php echo $list["data_id"];?><?php } ?></p>
                                </div>
                            </article>
                        </a>
                        <?php } ?>
                    </li>
                    <li class="am-padding-left-xs">
                        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>18, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <a href="<?php echo $list["aurl"];?>" class="square-box" id="beikaoriji">

                            <span class="light-blue"><?php echo $list["class_name"];?></span>

                            <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                            <article class="">
                                <p class="am-margin-vertical-xs am-padding-top-xs"><?php echo $list["title"];?></p>
                                <div class="last-line">
                                    <p class="am-margin-vertical-xs">
                                        <!--<img src="/upload/2017-11-01/12.png" alt="白中男" /> -->
                                        <?php echo $list["copyfrom"];?></p>
                                    <p class="am-margin-vertical-xs"><?php echo date('Y-m-d',$list['time']);?> <span class="am-icon-eye am-padding-right-xs"></span> <?php echo $list["views"];?></p>
                                </div>
                            </article>
                        </a>
                        <?php } ?>
                    </li>
                </ul>

                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>87, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                <a href="<?php echo $list["aurl"];?>" class="label-rectangle" id="shenghuo">

                    <span class="special-green"><?php echo $list["class_name"];?></span>

                    <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                    <article class="am-padding-left-sm">
                        <p class="am-margin-vertical-xs"><?php echo $list["title"];?></p>
                        <div class="last-line">
                            <p class="am-margin-vertical-xs">
                                <!--<img src="/upload/2017-11-01/12.png" alt="白中男" /> -->
                                <?php echo $list["copyfrom"];?></p>
                            <p class="am-margin-vertical-xs"><?php echo date('Y-m-d',$list['time']);?> <span class="am-icon-eye am-padding-right-xs"></span> <?php echo $list["views"];?></p>
                        </div>
                    </article>
                </a>
                <?php } ?>

                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>88, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                <a href="<?php echo $list["aurl"];?>" class="label-rectangle" id="pengyouquan">

                    <span class="red"><?php echo $list["class_name"];?></span>

                    <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                    <article class="am-padding-left-sm">
                        <p class="am-margin-vertical-xs"><?php echo $list["title"];?></p>
                        <div class="last-line">
                            <p class="am-margin-vertical-xs">
                                <!--<img src="/upload/2017-11-01/12.png" alt="白中男" /> -->
                                <?php echo $list["copyfrom"];?></p>
                            <p class="am-margin-vertical-xs"><?php echo date('Y-m-d',$list['time']);?> <span class="am-icon-eye am-padding-right-xs"></span> <?php echo $list["views"];?></p>
                        </div>
                    </article>
                </a>
                <?php } ?>

                <ul class="am-avg-sm-2">
                    <li class="am-padding-right-xs">
                        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>91, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <a href="<?php echo $list["aurl"];?>" class="square-box" id="tiaoji">

                            <span class="special-light-green"><?php echo $list["class_name"];?></span>

                            <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                            <article class="">
                                <p class="am-margin-vertical-xs am-padding-top-xs"><?php echo $list["title"];?></p>
                                <div class="last-line">
                                    <p class="am-margin-vertical-xs">
                                        <!--<img src="/upload/2017-11-01/12.png" alt="白中男" /> -->
                                        <?php echo $list["copyfrom"];?></p>
                                    <p class="am-margin-vertical-xs"><?php echo date('Y-m-d',$list['time']);?> <span class="am-icon-eye am-padding-right-xs"></span> <?php echo $list["views"];?></p>
                                </div>
                            </article>
                        </a>
                        <?php } ?>
                    </li>
                    <li class="am-padding-left-xs">
                        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>16, "sub"=>true, "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <a href="<?php echo $list["aurl"];?>" class="square-box" id="ruhebaikao">

                            <span class="light-brown"><?php echo $list["class_name"];?></span>

                            <img src="<?php echo $list["class_image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                            <article class="">
                                <p class="am-margin-vertical-xs am-padding-top-xs"><?php echo $list["title"];?></p>
                                <div class="last-line">
                                    <p class="am-margin-vertical-xs">
                                        <!--<img src="/upload/2017-11-01/12.png" alt="白中男" /> -->
                                        <?php echo $list["copyfrom"];?></p>
                                    <p class="am-margin-vertical-xs"><?php echo date('Y-m-d',$list['time']);?> <span class="am-icon-eye am-padding-right-xs"></span> <?php echo $list["views"];?></p>
                                </div>
                            </article>
                        </a>
                        <?php } ?>
                    </li>
                </ul>


            </div>

            <aside class="am-padding-left-sm">
                <h2 class="am-text-left">24小时热门</h2>

                <div class="aside-container">

                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"14,16,18,36" , "limit"=>9));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <a href="<?php echo $list["aurl"];?>" class="">
                        <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                        <p class="am-text-sm am-margin-vertical-0 am-padding-left-sm"><?php echo $list["title"];?></p>
                    </a>
                    <?php } ?>

                </div>

                <div class="aside-img-box">
                    <a href="/list-mbaWeiXinDongTai.html">
                        <img src="/upload/2017-11-01/21.png" class="am-img-responsive" alt="微信关注华章MBA" />
                    </a>

                    <ul class="am-avg-sm-2">
                        <li class="am-padding-right-xs">
                            <img src="/upload/2017-11-01/20.png" class="am-img-responsive" alt="华章MBA" />
                        </li>
                        <li class="am-padding-left-xs">
                            <img src="/upload/2017-11-01/22.png" class="am-img-responsive" alt="华章MBA" />
                        </li>
                    </ul>
                </div>
            </aside>
        </section>
    </div>
</main>

<?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"ads", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
<a href="<?php echo $list["midPictureLink"];?>" target="_blank">
    <img src="<?php echo $list["midPicture"];?>" alt="<?php echo $list["description"];?>" class="am-img-responsive am-center" />
</a>
<?php } ?>

<section class="theoryClass">
    <div class="am-container">
        <ul class="am-avg-sm-2">
            <li>
                <section class="theory am-padding-top-xl">

                    <h2>华章理念<span class="borderSpan"></span></h2>

                    <p class="subtitle">上海华章MBA考前辅导机构专注MBA培训，华章MBA培训依托个性化辅导，把握MBA联考信息，例如MBA提前面试，MBA报考条件，MBA和EMBA的区别等，选全国MBA导师，铸就MBA联考高通过率。华章秉承“不仅通过联考，更要受益终身”的办学理念，圆您高校MBA梦，成就辉煌人生！</p>

                    <ul class="am-avg-sm-3">
                        <li><a href="/list-mba.html"><span>MBA</span><span>> CHECK MORE <</span></a></li>
                        <li><a href="/list-emba.html"><span>EMBA</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="/list-mpa.html"><span>MPA</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="/list-mpacc.html"><span>MPAcc</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="/list-mem.html"><span>MEM</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="/topic-MBATiQianMianShi.html" class="am-text-danger"><span class="fontSm">提前面试</span><span> > CHECK MORE < </span></a></li>
                    </ul>

                </section>
            </li>
            <li>
                <section class="class am-padding-top-xl">

                    <h2>试听课程 <a href="/list-shiTingKeKeCheng.html" class="rightMore">more</a><span class="borderSpan"></span></h2>

                    <article class="layerBox targetLayer">
                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "expand_id"=>8, "limit"=>"15", "order"=>"begTime desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( date('Y-m-d H-i-s',$list['time']) >=  date("Y-m-d H-i-s")  ){ ?>
                        <div class="layer">
                            <p class="targetHiddenTime">
                                <input class="hiddenInput" type="hidden" value="<?php echo date('YmdH',$list["time"]);?>" placeholder="<?php echo date('YmdH',$list["time"]);?>" />
                            </p>

                            <a href="<?php echo $list["aurl"];?>" target="_blank">
                                <div class="schedule">
                                    <span><?php echo $list["week"];?> </span>
                                    <span><?php echo date('d',$list["begTime"]);?></span>
                                </div>
                                <div class="classContent">
                                    <p>【<?php echo $list["subject"];?>课程】</p>
                                    <p><span class="location"><?php echo $list["location"];?></span><span>校区-<?php echo $list["subject"];?>导师-<?php echo $list["Instructor"];?> 预约试听！</span></p>
                                </div>



                                <button class="checkMore">预约试听</button>
                            </a>
                        </div>

                        <?php } ?>
                        <?php } ?>
                    </article>

                </section>
            </li>
        </ul>

    </div>
</section>

<section class="teacherStudent">
    <div class="am-container">
        <ul class="am-avg-sm-2">
            <li>
                <section class="teacher am-padding-vertical-xl">
                    <h2>导师介绍 <a href="/list-huaZhangDaoShi.html" class="rightMore">more</a><span class="borderSpan"></span></h2>

                    <div class="teacherBox">
                        <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{"controlNav":false}'>
                            <ul class="am-slides">
                                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
                                <li>

                                    <div>
                                        <a href="<?php echo $list["aurl"];?>" target="_blank">
                                            <div class="sliderBox">
                                                <div class="leftBox">
                                                    <p class="name"><?php echo $list["title"];?></p>
                                                    <p class="description"><?php echo $list["briefIntro"];?></p>
                                                    <button class="checkMore">免费试听</button>
                                                </div>
                                                <div class="rightBox">
                                                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["subject"];?>导师-<?php echo $list["title"];?>"/>
                                                </div>
                                            </div>
                                        </a>

                                    </div>

                                </li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>


                </section>
            </li>
            <li>
                <section class="student am-padding-top-xl">
                    <h2>学员风采<a href="/list-MBAXueYuanFengCai.html" class="rightMore">more</a> <span class="borderSpan"></span></h2>

                    <div class="studentBox">


                        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"ourStudents", "limit"=>4, "order"=>"giveOrder asc"));  if(is_array($listList)) foreach($listList as $list){ ?>

                        <article class="innerBox">
                            <!--<a href="/list-MBAXueYuanFengCai.html">-->
                            <img src="<?php echo $list["img"];?>" class="am-img-responsive" title="<?php echo $list["name"];?>" alt="<?php echo $list["name"];?>" />
                            <!--</a>-->

                            <p class="studentInfo">  <a href="/list-MBAXueYuanFengCai.html"><?php echo $list["lineOne"];?>  </a></p>

                        </article>

                        <?php } ?>

                    </div>

                </section>

            </li>
        </ul>
    </div>
</section>

<?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"ads", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
<a href="<?php echo $list["midPictureLink"];?>" target="_blank">
    <img src="<?php echo $list["midPicture"];?>" alt="<?php echo $list["description"];?>" class="am-img-responsive am-center" />
</a>
<?php } ?>

<section class="classExperience">
    <div class="am-container am-padding-vertical-xl">
        <ul class="am-avg-sm-2">
            <li>
                <section class="index-class">
                    <h2>免费课程 <span class="borderSpan"></span></h2>

                    <article class="class-box-one">
                        <a href="/topic-MBABeiJingCeShi.html">
                            <img src="/upload/2018-04-07/26.jpg" alt="MBA面试成功着装指南" class="am-img-responsive am-center"/>
                            <p class="am-margin-bottom-0 am-text-truncate"><b>你考上高校MBA的几率有多大</b></p>
                            <p class="am-margin-top-0 am-text-sm">MBA报考看的是背景，看的是潜力。但更看你和你的竞争者的相对成绩，来看看你在报考人群中处在什么位置。</p>
                        </a>
                    </article>

                    <article class="class-box-two">
                        <ul class="am-avg-sm-2">
                            <li>
                                <div class="innerBox">
                                    <a href="/topic-fanDengDuShuHui.html">
                                        <img src="/upload/2018-04-07/27.jpg" alt="樊登读书会线下活动" class="am-img-responsive am-center"/>
                                        <p class="am-text-center am-text-truncate">樊登读书会线下活动</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="innerBox">
                                    <a href="/list-kaibanbaomingyouhui.html">
                                        <img src="/upload/2018-04-07/28.jpg" alt="即将开班，报名优惠中" class="am-img-responsive am-center"/>
                                        <p class="am-text-center am-text-truncate">即将开班，报名优惠中</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </article>

                </section>
            </li>
            <li>
                <section class="index-experience">
                    <h2>经验分享<span class="borderSpan"></span><a href="/list-JingYanFenXiang.html" class="rightMore">more</a></h2>

                    <article class="num-box">
                        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>30 , "limit"=>4, "not_id"=>"356"));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <div class="num">
                            <a href="<?php echo $list["aurl"];?>" target="_blank" title="<?php echo $list["title"];?><?php echo $list["content_id"];?>">
                                <span>0<?php echo $list["i"]+1;?></span>
                                <div class="content-box">
                                    <p class="am-margin-0"><b><?php echo $list["title"];?></b></p>
                                    <p class="am-margin-0"><?php echo $list["description"];?></p>
                                </div>
                            </a>

                        </div>
                        <?php } ?>
                    </article>
                </section>
            </li>
        </ul>
    </div>
</section>

<section class="lessons am-padding-vertical-xl">
    <div class="am-container">
        <h2>课程介绍<span class="borderSpan"></span></h2>

        <p class="subtitle am-text-center am-margin-top-xs">我们重新定义MBA联考备考</p>

        <ul class="am-avg-sm-3 am-margin-top-lg">
            <li>
                <a class="am-padding-sm" href="/topic-MBABiShiKeCheng.html">
                    <p class="class-title am-margin-top-0 am-margin-bottom-xs">MBA笔试课程</p>
                    <img src="/upload/2018-11-21/1.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />
                    <p class="am-margin-vertical-xs flagship"><span>数学</span><span>英语</span><span>逻辑</span><span>写作</span><span>1月-12月</span></p>
                    <p class="am-margin-vertical-xs am-text-sm">MBA官方教材主编，命题组、阅卷组老师亲授。</p>
                    <span class="link-span">查看详情>></span>
                </a>
            </li>
            <li>
                <a class="am-padding-sm" href="/topic-MBATiQianMianShi.html">
                    <p class="class-title am-margin-top-0 am-margin-bottom-xs">MBA面试课程</p>
                    <img src="/upload/2018-11-21/2.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />
                    <p class="am-margin-vertical-xs flagship"><span>背景评估</span><span>个面</span><span>组面</span><span>3月-10月</span></p>
                    <p class="am-margin-vertical-xs am-text-sm">企业高管，高校MBA招生官、现任面试官亲授。</p>
                    <span class="link-span">查看详情>></span>
                </a>
            </li>
            <li>
                <a class="am-padding-sm" href="/topic-MBABiShiKeCheng.html">
                    <p class="class-title am-margin-top-0 am-margin-bottom-xs">MBA笔面课程</p>
                    <img src="/upload/2018-11-21/3.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />
                    <p class="am-margin-vertical-xs flagship"><span>笔试+面试辅导</span><span>1月-12月</span></p>
                    <p class="am-margin-vertical-xs am-text-sm">全程连报，不玩套路，特价优惠<br/>&nbsp;</p>
                    <span class="link-span">查看详情>></span>
                </a>
            </li>
        </ul>

    </div>
</section>

<section class="school-list am-padding-vertical-sm">
    <div class="am-container">
        <div data-am-widget="slider" class="am-slider am-slider-b3" data-am-slider='{"controlNav":false}'  style="box-shadow: none;">
            <ul class="am-slides">
                <li>
                    <ul class="am-avg-sm-6">
                        <li class="am-padding-xs"><a href="http://mba.usst.edu.cn/index.aspx" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/1.jpg" alt="上海理工"></a></li>
                        <li class="am-padding-xs"><a href="http://mba.dhu.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/2.jpg" alt="东华"></a></li>
                        <li class="am-padding-xs"><a href="http://mba.suibe.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/3.jpg" alt="对外贸易"></a></li>
                        <li class="am-padding-xs"><a href="http://cob.sufe.edu.cn/MBA" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/4.jpg" alt="上财"></a></li>
                        <li class="am-padding-xs"><a href="http://bs.ecust.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/5.jpg" alt="华东理工"></a></li>

                        <li class="am-padding-xs"><a href="http://www.nsciic.edu.cn/en/index.html" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/7.jpg" alt="宁波供应链"></a></li>
                        <!--<li class="am-padding-xs"><a href="http://mba.shisu.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/8.jpg" alt="上外"></a></li>-->
                        <!--<li class="am-padding-xs"><a href="http://www.fdsm.fudan.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/6.jpg" alt="复旦"></a></li>-->


                        <!--<li class="am-padding-xs"><a href="http://www.ckgsb.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/9.jpg" alt="长江商学院"></a></li>-->
                        <!--<li class="am-padding-xs"><a href="http://www.acem.sjtu.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/10.jpg" alt="安泰经管"></a></li>-->
                        <!--<li class="am-padding-xs"><a href="http://www.shumba.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/11.jpg" alt="上大英语"></a></li>-->
                        <!--<li class="am-padding-xs"><a href="http://www.ms.shu.edu.cn/Default.aspx?tabid=27423" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/12.jpg" alt="上大中文"></a></li>-->
                    </ul>
                </li>
                <li>
                    <ul class="am-avg-sm-6">

                        <li class="am-padding-xs"><a href="http://mba.shisu.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/8.jpg" alt="上外"></a></li>
                        <li class="am-padding-xs"><a href="http://www.fdsm.fudan.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/6.jpg" alt="复旦"></a></li>


                        <li class="am-padding-xs"><a href="http://www.ckgsb.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/9.jpg" alt="长江商学院"></a></li>
                        <li class="am-padding-xs"><a href="http://www.acem.sjtu.edu.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/10.jpg" alt="安泰经管"></a></li>
                        <li class="am-padding-xs"><a href="http://www.shumba.cn/" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/11.jpg" alt="上大英语"></a></li>
                        <li class="am-padding-xs"><a href="http://www.ms.shu.edu.cn/Default.aspx?tabid=27423" target="_blank" rel="nofollow"><img class="am-img-responsive am-center" src="/upload/2018-09-02/12.jpg" alt="上大中文"></a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</section>

<?php $__Template->display("themes/default/fantastic_block"); ?>

<section class="index-benefits benefits am-padding-vertical-xl">
    <div class="am-container am-padding-vertical-sm">
        <h2>不仅通过联考，更要受益终身<span class="borderSpan"></span></h2>

        <ul class="am-avg-sm-3 am-padding-top-xl">
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-02-24/12.png" class="am-img-responsive am-center show" alt="<?php echo $categoryInfo["name"];?>" />
                    <h4>樊登读书会</h4>
                    <a href="/topic-fanDengDuShuHui.html" class="checkMore">查看详情</a>
                </div>
            </li>
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-02-24/14.png" class="am-img-responsive am-center show" alt="<?php echo $categoryInfo["name"];?>" />
                    <h4>丰富的学生活动</h4>
                    <a href="/list-huoDong.html" class="checkMore">查看详情</a>
                </div>
            </li>
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-02-24/13.png" class="am-img-responsive am-center show" alt="<?php echo $categoryInfo["name"];?>" />
                    <h4>华章微信</h4>
                    <a href="/list-mbaWeiXinDongTai.html" class="checkMore">查看详情</a>
                </div>
            </li>
        </ul>

        <!--<h2>华章MBA考前辅导专业机构</h2>-->
        <p class="describe">18年来华章及其遍及全国43个城市的分支机构，已成功引领近10万学子考入理想高校。培养出清华、北大、复旦、上海交大、中山大学岭南学院、人大、 对外经贸、同济、上海财大、西安交大、南开大学、南京大学、浙江大学、厦门大学、中财、中科院、北邮、重庆大学、四川大学、华东理工大学等高校MBA联考状元和MBA面试满分得者。</p>
        <!--<h4>不仅通过联考，更要受益终身</h4>-->
    </div>
</section>

<?php $__Template->display("themes/default/footer_withoutFantastic"); ?>

<?php $__Template->display("themes/default/ending"); ?>

";s:12:"compile_time";i:1543543145;}";
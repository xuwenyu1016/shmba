<?php exit;?>001551854619473ab05e26a256ec272ced073edca78as:21168:"a:2:{s:8:"template";s:21103:"﻿<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="indexSlider">
    <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
        <ul class="am-slides">
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"PCslider", "order"=>"giveOrder asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li>
                <a href="<?php echo $list["link"];?>" target="_blank" title="<?php echo $list["description"];?>">
                    <img src="<?php echo $list["img"];?>" class="am-img-responsive" alt="<?php echo $list["description"];?>"/>
                </a>
            </li>
            <?php } ?>

        </ul>
    </div>
</section>

<section class="theoryClass">
    <div class="am-container">
        <ul class="am-avg-sm-2">
            <li>
                <section class="theory am-padding-top-xl">

                    <h2>华章理念<span class="borderSpan"></span></h2>

                    <p class="subtitle">上海华章MBA考前辅导机构，以“全程个性化辅导、专业教务管理、把握联考信息、精选全国导师、联考高通过率”等优势而闻名于联考培训领域。华章秉承“不仅通过联考，更要受益终身”的办学理念，圆您名校MBA之梦，成就辉煌人生！</p>

                    <ul class="am-avg-sm-3">
                        <li><a href="/list-mba.html"><span>MBA</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="/list-emba.html"><span>EMBA</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="list-mpa.html"><span>MPA</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="list-mpacc.html"><span>MPAcc</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="list-mem.html"><span>MEM</span><span> > CHECK MORE < </span></a></li>
                        <li><a href="/page-mianShiKeCheng.html"><span class="fontSm">提前面试</span><span> > CHECK MORE < </span></a></li>
                    </ul>

                </section>
            </li>
            <li>
                <section class="class am-padding-top-xl">

                    <h2>试听课程 <a href="/list-shiTingKeKeCheng.html" class="rightMore">more</a><span class="borderSpan"></span></h2>

                    <article class="layerBox targetLayer">
                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "expand_id"=>8, "limit"=>"4", "order"=>"begTime desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <div class="layer">
                            <a href="<?php echo $list["aurl"];?>" target="_blank">
                                <div class="schedule">
                                    <span><?php echo $list["week"];?> </span>
                                    <span><?php echo date('d',$list["begTime"]);?></span>
                                </div>
                                <div class="classContent">
                                    <p>【<?php echo $list["subject"];?>课程】</p>
                                    <p class="am-text-truncate"><?php echo $list["class"];?>-<?php echo $list["subject"];?>导师-<?php echo $list["Instructor"];?> 预约试听！</p>
                                </div>

                                <p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>

                                <button class="checkMore">预约试听</button>
                            </a>
                        </div>
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
                    <h2>导师介绍 <a href="/list-huazhangdaoshi.html" class="rightMore">more</a><span class="borderSpan"></span></h2>

                    <div class="teacherBox">
                        <div class="slider slider-for">
                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <div>
                                <a href="<?php echo $list["aurl"];?>" target="_blank">
                                    <div class="sliderBox">
                                        <div class="leftBox">
                                            <p class="name"><?php echo $list["title"];?></p>
                                            <p class="description"><?php echo $list["briefIntro"];?></p>
                                            <button class="checkMore">免费试听</button>
                                        </div>
                                        <div class="rightBox">
                                            <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["subject"];?>导师-<?php echo $list["title"];?>" />
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <?php } ?>

                        </div>
                        <div class="slider slider-nav am-g">
                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc", "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <div>
                                <a href="<?php echo $list["aurl"];?>">
                                    <img src="<?php echo $list["circleImg"];?>" class="am-img-responsive am-center" alt="<?php echo $list["subject"];?>导师-<?php echo $list["title"];?>" />
                                </a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>


                </section>
            </li>
            <li>
                <section class="student am-padding-top-xl">
                    <h2>学员风采<a href="/list-behave.html" class="rightMore">more</a> <span class="borderSpan"></span></h2>

                    <div class="studentBox">

                            
                        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"ourStudents", "limit"=>4, "order"=>"giveOrder asc"));  if(is_array($listList)) foreach($listList as $list){ ?>

                        <article class="innerBox">
                            <!--<a href="/list-behave.html">-->
                            <img src="<?php echo $list["img"];?>" class="am-img-responsive" title="<?php echo $list["name"];?>" alt="<?php echo $list["name"];?>" />
                            <!--</a>-->

                                <p class="studentInfo">  <a href="/list-behave.html"><?php echo $list["lineOne"];?>  </a></p>

                        </article>

                        <?php } ?>

                    </div>

                </section>

                <section class="video am-padding-top-sm am-padding-bottom-xl">
                    <ul class="am-avg-sm-3">
                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>29, "expand_id"=>15, "order"=>"time desc", "limit"=>3));  if(is_array($listList)) foreach($listList as $list){ ?>
                       <li>
                           <div class="innerBox">
                               <a href="<?php echo $list["aurl"];?>">
                                   <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                   <p><span class="am-icon-youtube-play"></span></p>
                               </a>
                           </div>
                       </li>
                        <?php } ?>

                    </ul>
                </section>
            </li>
        </ul>
    </div>
</section>

<?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"ads", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
<a href="<?php echo $list["midPictureLink"];?>" target="_blank">
    <article class="mid-ads" style="background-image: url(<?php echo $list["midPicture"];?>);"></article>
</a>
<?php } ?>

<section class="latest am-padding-vertical-xl">
    <div class="am-container">
        <h2>最新动态<span class="borderSpan"></span></h2>
        <ul class="am-avg-sm-3 am-margin-top-xl">
            <li>
                <div class="innerBox">
                    <a href="/list-consultation.html">
                        <p>宣讲会/教育展/活动</p>
                        <p>MBA Info Sessions</p>
                        <img src="/assets/img/22.png" alt="政策动态" title="政策动态" />
                    </a>

                </div>
            </li>
            <li>
                <div class="innerBox">
                    <a href="/list-faq.html">
                        <p>常见问题</p>
                        <p>FAQ</p>
                        <img src="/assets/img/23.png" alt="报名相关" title="报名相关" />
                    </a>

                </div>
            </li>
            <li>
                <div class="innerBox">
                    <a href="/list-registerAndInterview.html">
                        <p>报考·面试相关</p>
                        <p>Register/Interview</p>
                        <img src="/assets/img/24.png" alt="面试相关" title="面试相关" />
                    </a>

                </div>
            </li>
            <li>
                <div class="innerBox">
                    <a href="/list-policy.html">
                        <p>政策动态</p>
                        <p>Policy Trends</p>
                        <img src="/assets/img/25.png" alt="政策动态" title="政策动态" />
                    </a>

                </div>
            </li>
            <li>
                <div class="innerBox">
                    <a href="/list-yuanXiaoXinXi.html">
                        <p>合作院校</p>
                        <p>Partner schools</p>
                        <img src="/assets/img/26.png" alt="合作院校" title="合作院校" />
                    </a>

                </div>
            </li>
            <li>
                <div class="innerBox">
                    <a href="/list-articles.html">
                        <p>原创文章</p>
                        <p>Original Articles</p>
                        <img src="/assets/img/27.png" alt="原创文章" title="原创文章" />
                    </a>

                </div>
            </li>
        </ul>
    </div>
</section>

<section class="lessons am-padding-vertical-xl">
    <div class="am-container">
        <h2>课程介绍<span class="borderSpan"></span></h2>

        <div class="am-tabs am-margin-top-lg" data-am-tabs>
            <ul class="am-tabs-nav am-nav am-nav-tabs am-avg-sm-3">
                <li class="am-active"><a href="#tab1">笔试班</a></li>
                <li><a href="#tab2">面试班</a></li>
                <li><a href="#tab3">私人订制班</a></li>
            </ul>

            <div class="am-tabs-bd">
                <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                    <ul class="am-avg-sm-3">
                        <li>
                            <article class="innerBox">
                                <a href="/list-writtenTest.html">
                                    <div><span>【MBA笔试课程】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="/list-writtenTest.html">
                                    <div><span>【导学阶段】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="/page-jichu.html">
                                    <div><span>【基础阶段】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>

                        <li>
                            <article class="innerBox">
                                <a href="/list-writtenTest.html">
                                    <div><span>【系统阶段】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="/list-writtenTest.html">
                                    <div><span>【模考冲刺阶段】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="/list-writtenTest.html">
                                    <div><span>【笔试+面试全程班】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                    </ul>
                </div>
                <div class="am-tab-panel am-fade" id="tab2">
                    <ul class="am-avg-sm-3">
                        <li>
                            <article class="innerBox">
                                <a href="/page-mianShiKeCheng.html">
                                    <div><span>【面试材料准备】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="/page-mianShiKeCheng.html">
                                    <div><span>【面试综合能力】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="/page-mianShiKeCheng.html">
                                    <div><span>【高校面试特色课程】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>

                        <li>
                            &nbsp;
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="/page-mianShiKeCheng.html">
                                    <div><span>【全真模拟演练】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            &nbsp;
                        </li>
                    </ul>
                </div>
                <div class="am-tab-panel am-fade" id="tab3">
                    <ul class="am-avg-sm-3">
                        <li>
                            <article class="innerBox">
                                <a href="/list-writtenTest.html">
                                    <div><span>【联考集训班】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="http://www.hzmba.net/topic-dingzhi">
                                    <div><span>【30人小班】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="http://www.hzmba.net/topic-dingzhi">
                                    <div><span>【笔试私人定制班】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>

                        <li>
                            &nbsp;
                        </li>
                        <li>
                            <article class="innerBox">
                                <a href="http://www.hzmba.net/topic-dingzhi">
                                    <div><span>【面试私人定制班】</span></div>
                                    <p>查看详情</p>
                                </a>
                            </article>
                        </li>
                        <li>
                            &nbsp;
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="index-benefits benefits am-padding-vertical-xl">
    <div class="am-container am-padding-vertical-sm">
        <h2>不仅通过联考，更要受益终身<span class="borderSpan"></span></h2>

        <ul class="am-avg-sm-3 am-padding-top-xl am-padding-bottom-sm">
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-02-24/12.png" class="am-img-responsive am-center show" alt="<?php echo $categoryInfo["name"];?>" />
                    <h4>樊登读书会</h4>
                    <a href="/page-readingParty.html" class="checkMore">查看详情</a>
                </div>
            </li>
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-02-24/14.png" class="am-img-responsive am-center show" alt="<?php echo $categoryInfo["name"];?>" />
                    <h4>丰富的学生活动</h4>
                    <a href="/list-events.html" class="checkMore">查看详情</a>
                </div>
            </li>
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-02-24/13.png" class="am-img-responsive am-center show" alt="<?php echo $categoryInfo["name"];?>" />
                    <h4>华章微信</h4>
                    <a href="/list-wechat.html" class="checkMore">查看详情</a>
                </div>
            </li>
        </ul>

        <!--<h2>华章MBA考前辅导专业机构</h2>-->
        <p class="describe">18年来华章及其遍及全国43个城市的分支机构，已成功引领近10万学子考入理想名校。培养出清华、北大、复旦、上海交大、中山大学岭南学院、人大、 对外经贸、同济、上海财大、西安交大、南开大学、南京大学、浙江大学、厦门大学、中财、中科院、北邮、重庆大学、四川大学、华东理工大学等名校MBA联考状元和MBA面试满分得者。</p>
        <!--<h4>不仅通过联考，更要受益终身</h4>-->
    </div>
</section>

<!--<section class="firmIntro am-padding-vertical-xl">-->
    <!--<div class="am-container">-->
        <!--<div class="imgBox">-->
            <!--<img src="/assets/img/31.png" class="am-img-responsive am-center"/>-->
        <!--</div>-->
        <!--<div class="paraBox">-->
          <!---->
        <!--</div>-->
    <!--</div>-->
<!--</section>-->

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1520318619;}";
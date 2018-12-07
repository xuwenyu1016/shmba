<?php exit;?>0015750912651fe798ba5238ca1b0cd1f2d0cdea13e6s:9509:"a:2:{s:8:"template";s:9445:"﻿<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2017-12-22/19.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">

        <div class="collegeBlock">

            <div class="collegeList">
                <h3 class="subTitle am-text-left bordered">
                    <span class="num">01</span>
                    <span class="numContent">什么是<b class="red en"><?php echo $categoryInfo["name"];?></b></span>
                </h3>

                <article class="textBox am-margin-top-sm">
                    <p>   工程管理硕士(Masterof Engineering Management，简称MEM)是2010由中国工程院提议，委托清华大学进行学科论证，同年批复新设置的一种专业学位。</p>
                    <p>目的是适应我国现代工程事业发展对工程管理人才的迫切需求，完善工程管理人才培养体系，创新工程管理人才培养模式，提高我国工程管理的人才质量。</p>


                </article>

                <h3 class="subTitle am-text-left bordered">
                    <span class="num">02</span>
                    <span class="numContent">什么是<?php echo $categoryInfo["name"];?><b class="red en">报考条件？</b></span>
                </h3>

                <article class="textBox am-margin-top-sm">
                    <p>专科背景：至入学前毕业满5年及以上。</p>
                    <p>本科背景：至入学前毕业满3年及以上。</p>
                    <p>硕博背景：至入学前毕业满2年及以上。</p>
                    <p>海外留学：需要教育部认证的学历证书。</p>
                </article>

                <h3 class="subTitle am-text-left bordered">
                    <span class="num">03</span>
                    <span class="numContent">上海<?php echo $categoryInfo["name"];?><b class="red en">院校有哪些？</b></span>
                    <a href="/list-yuanXiaoXinXi.html" class="morePlus am-margin-top-sm">更多院校</a>
                </h3>

                <ul class="am-avg-sm-5 schoolList">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6, "order"=>"time desc", "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <?php if ( $list['mem'] == $categoryInfo['name'] ){ ?>
                    <li>
                        <div class="innerBox">
                            <a href="<?php echo $list["aurl"];?>">
                                <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                <p class="am-text-sm"><?php echo $list["title"];?></p>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>

                <h3 class="subTitle am-text-left bordered">
                    <span class="num">04</span>
                    <span class="numContent">近期上海<b class="red en"><?php echo $categoryInfo["name"];?>活动</b></span>
                </h3>


                <section class="theoryClass testClass am-margin-vertical-sm">

                    <div class="class layerBox">
                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>31, "sub"=>true, "expand_id"=>13, "limit"=>"20", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['MEM'] ==  $categoryInfo['name']  && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
                        <div class="layer">
                            <a href="<?php echo $list["aurl"];?>" class="am-padding-horizontal-lg">
                                <div class="schedule">
                                    <span><?php echo $list["month"];?></span>
                                    <span><?php echo $list["date"];?></span>
                                </div>
                                <div class="classContent am-padding-horizontal-lg">
                                    <p class="am-text-truncate"><?php echo $list["title"];?></p>
                                    <p class="am-text-truncate"><?php echo $list["description"];?></p>
                                </div>

                                <!--<p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>-->

                                <button class="checkMore">免费试听</button>
                            </a>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>

                </section>

                <h3 class="subTitle am-text-left bordered">
                    <span class="num">05</span>
                    <span class="numContent">近期上海<b class="red en"><?php echo $categoryInfo["name"];?>备考试听课</b></span>
                </h3>

                <section class="theoryClass testClass am-margin-vertical-sm">

                    <div class="class layerBox">

                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "sub"=>true, "expand_id"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['MEM'] ==  $categoryInfo['name']  && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
                        <div class="layer">
                            <a href="<?php echo $list["aurl"];?>" class="am-padding-horizontal-lg">
                                <div class="schedule">
                                    <span><?php echo $list["week"];?></span>
                                    <span><?php echo date('d',$list["begTime"]);?></span>
                                </div>
                                <div class="classContent am-padding-horizontal-lg">
                                    <p class="am-text-truncate"><?php echo $list["title"];?></p>
                                    <p class="am-text-truncate"><?php echo $list["description"];?></p>
                                </div>

                                <!--<p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>-->

                                <button class="checkMore">免费试听</button>
                            </a>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>

                </section>

                <h3 class="subTitle am-text-left bordered">
                    <span class="num">06</span>
                    <span class="numContent">上海<?php echo $categoryInfo["name"];?><b class="red en">报考资讯</b></span>
                </h3>

                <article class="newsBox">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "sub"=>true , "expand_id"=>14));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <?php if ( $list['MEM'] ==  $categoryInfo['name']  ){ ?>
                    <div class="innerBox">
                        <a href="<?php echo $list["aurl"];?>">
                            <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />

                            <div class="newContainer">
                                <p class="newsTitle am-text-truncate"><?php echo $list["title"];?></p>
                                <p class="newContent"><?php echo $list["description"];?></p>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                    <?php } ?>

                </article>

            </div>

            <div class="formBox">

                <?php $__Template->display("themes/default/sideBarForm"); ?>

                <h3 class="subTitle am-text-center am-margin-top-lg">
                    <span class="num">07</span>
                    <span class="numContent">上海华章<b class="red"><?php echo $categoryInfo["name"];?>辅导课程</b></span>
                </h3>

                <?php $__Template->display("themes/default/threeClasses"); ?>

            </div>

        </div>
    </div>
</section>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1543555265;}";
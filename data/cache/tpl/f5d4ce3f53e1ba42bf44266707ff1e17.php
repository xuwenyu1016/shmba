<?php exit;?>0015518710018746130fe03a2751d702a1e1de211dees:9334:"a:2:{s:8:"template";s:9270:"﻿<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2017-12-22/15.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
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
                    <p>MBA是英文Master Of Business Administration（工商管理硕士）的简称。</p>
                    <p>工商管理硕士是源于欧美国家的一种专门培养中高级职业经理人员的专业硕士学位。工管硕士是市场经济的产物，培养的是高素质的管理人员、职业经理人和创业者。</p>
                    <p>工商管理硕士是商业界普遍认为是晋身管理阶层的一块垫脚石。现时不少学校为了开拓财源增加收入，都与世界知名大学商学院学术合作，销售他们的工商管理硕士课程。</p>
                    <p>工商管理硕士培养的是高质量的职业工商管理人才，使他们掌握生产、财务、金融、营销、经济法规、国际商务等多学科知识和管理技能。</p>

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
                </h3>

                <ul class="am-avg-sm-5 schoolList">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "order"=>"time desc" , "limit"=>10));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li>
                        <div class="innerBox">
                            <a href="<?php echo $list["aurl"];?>">
                                <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="" />
                                <p class="am-text-sm"><?php echo $list["title"];?></p>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>

                <h3 class="subTitle am-text-left bordered">
                    <span class="num">04</span>
                    <span class="numContent">近期上海<b class="red en"><?php echo $categoryInfo["name"];?>活动</b></span>
                </h3>


                <section class="theoryClass testClass am-margin-vertical-sm">

                    <div class="class layerBox targetLayer">

                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>31, "sub"=>true, "expand_id"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['MBA'] ==  $categoryInfo['name']  ){ ?>
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
                                <p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>

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

                    <div class="class layerBox targetLayer">

                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "sub"=>true, "expand_id"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['MBA'] ==  $categoryInfo['name']  ){ ?>
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

                                <p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>


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
                    <?php if ( $list['MBA'] ==  $categoryInfo['name']  ){ ?>
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
";s:12:"compile_time";i:1520335001;}";
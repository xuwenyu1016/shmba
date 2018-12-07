<?php exit;?>00157508109880bd2b1089d227d4beb0b294aa7034f0s:9817:"a:2:{s:8:"template";s:9753:"﻿<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2017-12-22/16.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
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
                    <p>EMBA是指高级管理人员工商管理硕士，旨在培养具有高度政治素养、责任心和职业道德的中、高层管理者。</p>
                    <p>通过系统学习，全面掌握现代企业管理理论和决策方法，深入了解国内外企业的商业模式，具备在复杂的国内外经济、社会和技术环境下制定企业发展战略、进行企业日常经营管理决策、领导企业参与国内外竞争的能力和知识。</p>
                    <p>自2017年起，高级管理人员工商管理硕士 （EMBA）已纳入全国统一的硕士研究生入学，依据教育部划定统一专业学位分数线招生。</p>
                    

                </article>

                <h3 class="subTitle am-text-left bordered">
                    <span class="num">02</span>
                    <span class="numContent">什么是<?php echo $categoryInfo["name"];?><b class="red en">报考条件？</b></span>
                </h3>

                <article class="textBox am-margin-top-sm">
                    <p>具有大学本科或者本科以上学历（一般应有学士学位）.</p>
                    <p>有8年或8年以上工作经历（其中应有4年或4年以上的管理工作经历）.</p>
                    <p>较大规模企业的现职高层管理人员。</p>
  
                </article>

                <h3 class="subTitle am-text-left bordered">
                    <span class="num">03</span>
                    <span class="numContent">上海<?php echo $categoryInfo["name"];?><b class="red en">院校有哪些？</b></span>
                    <a href="/list-yuanXiaoXinXi.html" class="morePlus am-margin-top-sm">更多院校</a>
                </h3>

                <ul class="am-avg-sm-5 schoolList">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6, "order"=>"time desc", "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['emba'] == $categoryInfo['name'] ){ ?>
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
                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>31, "sub"=>true, "expand_id"=>13, "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['EMBA'] ==  $categoryInfo['name'] && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
                        <div class="layer">
                            <!--<p class="targetHiddenTime">-->
                                <!--<input class="hiddenInput" type="hidden" value="<?php echo $list["content_id"];?>" placeholder="<?php echo $list["content_id"];?>" />-->
                            <!--</p>-->
                            <a href="<?php echo $list["aurl"];?>" class="am-padding-horizontal-lg">
                                <div class="schedule">
                                    <span><?php echo $list["month"];?></span>
                                    <span><?php echo $list["date"];?></span>
                                </div>
                                <div class="classContent am-padding-horizontal-lg">
                                    <p class="am-text-truncate"><?php echo $list["title"];?></p>
                                    <p class="am-text-truncate"><?php echo $list["description"];?></p>
                                </div>

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
                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "sub"=>true, "expand_id"=>8, "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['EMBA'] ==  $categoryInfo['name'] && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
                        <div class="layer">
                            <!--<p class="targetHiddenTime">-->
                                <!--<input class="hiddenInput" type="hidden" value="<?php echo $list["content_id"];?>" placeholder="<?php echo $list["content_id"];?>" />-->
                            <!--</p>-->

                            <a href="<?php echo $list["aurl"];?>" class="am-padding-horizontal-lg">
                                <div class="schedule">
                                    <span><?php echo $list["week"];?></span>
                                    <span><?php echo date('d',$list["begTime"]);?></span>
                                </div>
                                <div class="classContent am-padding-horizontal-lg">
                                    <p class="am-text-truncate"><?php echo $list["title"];?></p>
                                    <p class="am-text-truncate"><?php echo $list["description"];?></p>
                                </div>

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
                    <?php if ( $list['EMBA'] ==  $categoryInfo['name']  ){ ?>
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
";s:12:"compile_time";i:1543545098;}";
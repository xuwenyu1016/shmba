<?php exit;?>001575079357add7b6a6651b40170142525dbbe5f78ds:11521:"a:2:{s:8:"template";s:11456:"﻿<?php $__Template->display("themes/default/head"); ?>

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
                    <p>MBA是英文Master Of Business Administration（工商管理硕士）的缩写。</p>
                    <p>工商管理硕士（MBA）是一个国际公认的学位，旨在培养商业和管理工作所需的技能。但是，MBA的价值并不仅仅限于商业领域。对于在公共部门，政府，私营企业和其他领域希望从事管理工作的人来说，MBA也很有用。</p>
                    <p>MBA通常分为不同的类别。有全日制MBA学位课程（需要全日制学习）和在职MBA课程（需要兼职学习）。在职MBA通常在工作日晚上或周末上课，也有一个月一次集中在一个包含周末的四天上课的类型。在职MBA的课程设计可以让学生继续工作的同时获得学位。</p>
                    <p>大多数MBA课程包括一些“核心”的科目课程，如会计学，经济学，市场营销和运营等，此外还有遵循其个人或专业兴趣的选修课程。有些学校要求MBA考生在公司或组织实习，这样可以在项目结束后获得具体的工作机会。优秀的MBA项目课程往往紧跟时代发展的前沿，提供前瞻性的商业发展机会。例如近几年的MBA普遍设有创业管理、大数据、人工智能、深度学习、区块链等前沿的课程。</p>
                    <p>优质商学院通常要求考生在开始MBA课程之前至少有几年的专业工作经验。申请人需要提交入学申请，通常包括大学成绩单、英语等级证明、工作背景、未来职业规划以及攻读MBA的目的论文或目的陈述。审核通过后需要通过学校的MBA面试获得录取分数，还要通过全国联考，联考的分数加上面试的分数决定了你是否能够被申请的学校录取。一些和国外合作的MBA项目可能不需要参加全国联考，但通常需要证明具备足够的外语能力。</p>
                    <p>MBA是目前世界上受欢迎程度较高的专业学位课程，在中国MBA是报考人数较多的研究生专业。2017年全国硕士研究生报考人数201万，2017年MBA报考人数142,389人，录取35,112人。2018年全国硕士研究生报考人数238万，华章MBA预测其中MBA报考人数17万，录取不足3万7千人，录取率不足22%</p>
                    <p>目前国内比较知名的MBA院校主要有：中欧国际商学院MBA，长江商学院MBA，北京大学MBA，清华大学MBA，五道口金融学院MBA，人民大学MBA，上海交通大学MBA，上海高级金融学院MBA，复旦大学MBA等，南开大学MBA，南京大学MBA…</p>
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
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "order"=>"time desc" , "limit"=>10));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li>
                        <div class="innerBox">
                            <a href="<?php echo $list["aurl"];?>">
                                <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
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

                    <div class="class layerBox">

                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>31, "sub"=>true, "expand_id"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['MBA'] ==  $categoryInfo['name']  && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
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
                        <?php if ( $list['MBA'] ==  $categoryInfo['name']  && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
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
";s:12:"compile_time";i:1543543357;}";
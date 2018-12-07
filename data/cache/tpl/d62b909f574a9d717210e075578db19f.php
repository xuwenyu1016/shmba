<?php exit;?>0015518748844fc538bb5addffead6a4926a7b0a9208s:9799:"a:2:{s:8:"template";s:9735:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-01-04/55935431f2c0b3c4210fc74409b50213.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<div class="am-padding-vertical-sm">

    <h3 class="noEn"><b class="en">MBA</b>华章笔试联考</h3>
    <p class="am-padding-horizontal-sm">想要考取名校MBA，首先就要通过MBA联考笔试，但对于工作多年，早已放下数理化的考生来说，其备考难度可想而知，更别提取得高分了。这里，华章就为您层层揭开“MBA联考笔试”的神秘面纱。</p>

    <div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm">
        <article class="layer">
            <a href="/page-descriptionForWrittenTest.html">
                <div class="imgBox">
                    <img src="/upload/2017-12-21/6.png" class="am-img-responsive am-center" alt="" />
                </div>
                <div class="classContent">
                    <p class="am-text-truncate">什么是MBA笔试</p>
                    <p class="am-text-truncate">想要考取名校MBA，首先就要通过MBA联考笔试，但对于工作多年</p>
                </div>
            </a>

        </article>
        <article class="layer">
            <a href="/page-descriptionForWrittenTest.html">
                <div class="imgBox">
                    <img src="/upload/2017-12-21/3.png" class="am-img-responsive am-center" alt="" />
                </div>
                <div class="classContent">
                    <p class="am-text-truncate">MBA笔试考什么</p>
                    <p class="am-text-truncate">想要考取名校MBA，首先就要通过MBA联考笔试，但对于工作多年</p>
                </div>
            </a>

        </article>
        <article class="layer">
            <a href="/page-descriptionForWrittenTest.html">
                <div class="imgBox">
                    <img src="/upload/2017-12-21/7.png" class="am-img-responsive am-center" alt="" />
                </div>
                <div class="classContent">
                    <p class="am-text-truncate">MBA笔试难不难</p>
                    <p class="am-text-truncate">想要考取名校MBA，首先就要通过MBA联考笔试，但对于工作多年</p>
                </div>
            </a>

        </article>

    </div>

    <a href="/page-descriptionForWrittenTest.html" class="testNow">了解更多MBA笔试</a>

</div>




<section class="system am-padding-sm">
    <h3 class="noEn">完整的“挑战名校”课程体系</h3>
    <table class="am-table am-table-bordered">
        <thead>
        <tr>
            <th>备考课程</th>
            <th>课时安排</th>
            <th>授课时间</th>
            <th>课程费用</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td rowspan="2" class="classTitle">MBA预热班</td>
            <td>英语16课时</td>
            <td rowspan="2">11月-1月</td>
            <td rowspan="2" class="classPrice"><span>3680</span>元</td>
        </tr>
        <tr>
            <td>数学8课时</td>
        </tr>
        <tr>
            <td rowspan="4" class="classTitle">MBA基础班</td>
            <td>英语52课时</td>
            <td rowspan="4">1月-4月</td>
            <td rowspan="4" class="classPrice"><span>7680</span>元</td>
        </tr>
        <tr>
            <td>逻辑4课时</td>
        </tr>
        <tr>
            <td>数学52课时</td>
        </tr>
        <tr>
            <td>写作4课时</td>
        </tr>
        <tr>
            <td rowspan="4" class="classTitle">MBA系统班</td>
            <td>英语68课时</td>
            <td rowspan="4">5-9月</td>
            <td rowspan="4" class="classPrice"><span>8680</span>元</td>
        </tr>
        <tr>
            <td>逻辑28课时</td>
        </tr>
        <tr>
            <td>数学60课时</td>
        </tr>
        <tr>
            <td>写作16课时</td>
        </tr>
        <tr>
            <td rowspan="4" class="classTitle">MBA模考串讲班</td>
            <td>英语36课时</td>
            <td rowspan="4">10-12月</td>
            <td rowspan="4" class="classPrice"><span>8680</span>元</td>
        </tr>
        <tr>
            <td>逻辑16课时</td>
        </tr>
        <tr>
            <td>数学36课时</td>
        </tr>
        <tr>
            <td>写作16课时</td>
        </tr>
        <tr>
            <td class="classTitle"><p class="hotClass">MBA全程班<span class="hot">hot</span></p></td>
            <td>预热+基础+系统+冲刺</td>
            <td>11月-次年12月</td>
            <td class="classPrice"><span>26488</span>元</td>
        </tr>
        </tbody>
    </table>
</section>

<section class="pickyTeacher">
    <h3 class="noEn">挑剔老师？我们就怕你不挑剔</h3>

    <div class="teacherBox">
        <div class="slider slider-for">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
            <div>
                <a href="<?php echo $list["aurl"];?>">

                    <div class="sliderBox">
                        <div class="rightBox">
                            <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                        </div>
                        <div class="leftBox">
                            <p class="name"><?php echo $list["title"];?></p>
                            <p class="description"><?php echo $list["description"];?></p>
                        </div>
                    </div>
                </a>

            </div>
            <?php } ?>

        </div>
        <div class="slider slider-nav am-g">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
            <div><img src="<?php echo $list["circleImg"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" /></div>
            <?php } ?>


        </div>
    </div>


</section>

<div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm feedbackBox">
    <h3 class="noEn">学员反馈</h3>
    <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"ourStudents", "limit"=>2, "order"=>"giveOrder asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
    <article class="layer">
        <a>
            <div class="imgBox">
                <img src="<?php echo $list["img"];?>" class="am-img-responsive am-center" alt="<?php echo $list["name"];?>" />
            </div>
            <div class="classContent">
                <p class="am-text-truncate"><?php echo $list["name"];?></p>
                <p><?php echo $list["lineOne"];?></p>
            </div>
        </a>
    </article>
    <?php } ?>

</div>

<section class="lecture am-padding-sm">
    <h3 class="noEn">试听课</h3>
    <div class="layerBox am-padding-bottom-sm targetLayer">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "expand_id"=>8, "order"=>"time desc" , "limit"=>3));  if(is_array($listList)) foreach($listList as $list){ ?>
        <article class="layer">
            <a href="<?php echo $list["aurl"];?>">
                <div class="calender">
                    <span><?php echo $list["week"];?></span><span><?php echo date('d',$list["begTime"]);?></span>
                </div>
                <div class="classContent">
                    <p class="am-text-truncate"><?php echo $list["subject"];?>课程</p>
                    <p class="am-text-truncate"><?php echo $list["subject"];?>导师-<?php echo $list["Instructor"];?>授课<?php echo $list["class"];?></p>
                    <span>免费试听</span>
                </div>
            </a>
            <p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>
        </article>
        <?php } ?>

    </div>
</section>

<section class="benefits am-padding-sm">
    <h3 class="noEn">不仅通过联考，更要受益终身</h3>

    <ul class="am-avg-sm-3 am-padding-top-sm">
        <li>
            <div class="innerBox">
                <img src="/upload/2017-12-21/15.png" class="am-img-responsive am-center" alt="樊登读书会" />
                <p>樊登读书会</p>
                <a href="/page-readingParty.html">查看详情</a>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2017-12-21/16.png" class="am-img-responsive am-center" alt="丰富的学生活动" />
                <p>丰富的学生活动</p>
                <a href="/list-events.html">查看详情</a>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2017-12-21/17.png" class="am-img-responsive am-center" alt="华章校友会" />
                <p>华章微信</p>
                <a href="/list-wechat.html">查看详情</a>
            </div>
        </li>
    </ul>
</section>


<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1520338884;}";
<?php exit;?>001575089843bbabe40dc1304e070f85fce0a6bb2d90s:9493:"a:2:{s:8:"template";s:9429:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="<?php echo $contentInfo["schoolImg"];?>" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title am-margin-top-lg">
            <!--<span class="num">01</span>-->
            <span class="numContent"><?php echo $contentInfo["title"];?><b class="red">招生信息</b></span>
        </h2>

        <div class="collegeBlock">

            <div class="collegeList">
                <h3 class="subTitle am-text-left">
                    <span class="num">01</span>
                    <span class="numContent">招生<b class="red">信息</b></span>
                </h3>

                <table class="am-table recruitTable">
                    <thead>
                    <tr><th colspan="6">招生信息</th></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="tableTitle">项目类别</td>
                        <td class="con"><?php echo $contentInfo["category"];?></td>
                        <td class="tableTitle">学制</td>
                        <td class="con"><?php echo $contentInfo["duration"];?></td>
                        <td class="tableTitle">是否接受调剂</td>
                        <td class="con"><?php echo $contentInfo["adjustable"];?></td>
                    </tr>
                    <tr>
                        <td class="tableTitle">是否开设提前面试</td>
                        <td class="con"><?php echo $contentInfo["interview"];?></td>
                        <td class="tableTitle">招生人数</td>
                        <td colspan="3" class="con"><?php echo $contentInfo["recruitNum"];?></td>
                    </tr>
                    <tr>
                        <td class="tableTitle">学费</td>
                        <td colspan="5" class="con"><?php echo $contentInfo["tuition"];?></td>
                    </tr>
                    <tr>
                        <td class="tableTitle">奖学金</td>
                        <td colspan="5" class="con"><?php echo $contentInfo["scholarship"];?></td>
                    </tr>
                    <tr>
                        <td class="tableTitle">历年分数线</td>
                        <td colspan="5" class="con"><?php echo $contentInfo["passingScore"];?></td>
                    </tr>
                    <tr>
                        <td rowspan="4" class="tableTitle">历年招生<br/>数据</td>
                        <td><b>年份</b></td>
                        <td><b>报考人数</b></td>
                        <td><b>实考人数</b></td>
                        <td><b>录取人数</b></td>
                        <td><b>录取比例</b></td>
                    </tr>
                    <tr>
                        <td class="con or"><?php echo $contentInfo["year1"];?></td>
                        <td class="con"><?php echo $contentInfo["yearOneAttends"];?></td>
                        <td class="con"><?php echo $contentInfo["yearOneAttendsInReal"];?></td>
                        <td class="con"><?php echo $contentInfo["yearOneEnrollment"];?></td>
                        <td class="con"><?php echo $contentInfo["yearOnePercentage"];?></td>
                    </tr>
                    <tr>
                        <td class="con or"><?php echo $contentInfo["year2"];?></td>
                        <td class="con"><?php echo $contentInfo["yearTwoAttends"];?></td>
                        <td class="con"><?php echo $contentInfo["yearTwoAttendsInReal"];?></td>
                        <td class="con"><?php echo $contentInfo["yearTwoEnrollment"];?></td>
                        <td class="con"><?php echo $contentInfo["yearTwoPercentage"];?></td>
                    </tr>
                    <tr>
                        <td class="con or"><?php echo $contentInfo["year3"];?></td>
                        <td class="con"><?php echo $contentInfo["yearThreeAttends"];?></td>
                        <td class="con"><?php echo $contentInfo["yearThreeAttendsInReal"];?></td>
                        <td class="con"><?php echo $contentInfo["yearThreeEnrollment"];?></td>
                        <td class="con"><?php echo $contentInfo["yearThreePercentage"];?></td>
                    </tr>
                    </tbody>
                </table>

                <h3 class="subTitle am-text-left">
                    <span class="num">02</span>
                    <span class="numContent">面试<b class="red">时间</b></span>
                </h3>

                <?php echo $contentInfo["interviewTime"];?>

                <h3 class="subTitle am-text-left">
                    <span class="num">03</span>
                    <span class="numContent">招生<b class="red">项目</b></span>
                </h3>

                <?php echo $contentInfo["recruitProject"];?>

                <h3 class="subTitle am-text-left">
                    <span class="num">04</span>
                    <span class="numContent">师资<b class="red">力量</b></span>
                </h3>

                <div data-am-widget="slider" class="am-slider am-slider-default recruitSlider" data-am-slider='{itemWidth:100, itemMargin: 5, minItems:4, maxItems:4, slideshow: true}' >
                    <ul class="am-slides">
                        <?php echo $contentInfo["teacherResources"];?>
                    </ul>
                </div>

                <h3 class="subTitle am-text-left">
                    <span class="num">05</span>
                    <span class="numContent">优秀<b class="red">学员</b></span>
                </h3>

                <div data-am-widget="slider" class="am-slider am-slider-default recruitSlider" data-am-slider='{itemWidth:100, itemMargin: 5, minItems:4, maxItems:4, slideshow: true}' >
                    <ul class="am-slides">
                        <?php echo $contentInfo["ourStudents"];?>
                    </ul>
                </div>

                <h3 class="subTitle am-text-left">
                    <span class="num">06</span>
                    <span class="numContent">项目<b class="red">特色</b></span>
                </h3>

                <div class="features">
                    <?php echo $contentInfo["features"];?>

                </div>
            </div>

            <div class="formBox">

                <?php $__Template->display("themes/default/sideBarForm"); ?>

                <!--<h3 class="subTitle am-text-center am-margin-top-lg">-->
                    <!--<span class="num">06</span>-->
                    <!--<span class="numContent"><?php echo $contentInfo["title"];?><b class="red">近期活动</b></span>-->
                <!--</h3>-->

                <!--<article class="layerBox">-->
                    <!--<div class="layer">-->
                        <!--<a href="">-->
                            <!--<div class="schedule">-->
                                <!--<span>Fri</span>-->
                                <!--<span>13</span>-->
                            <!--</div>-->
                            <!--<div class="classContent am-text-truncate">-->
                                <!--<p>【逻辑课程】</p>-->
                                <!--<p class="am-text-truncate">模考班-《逻辑分册》主编-孙勇 免费试听！</p>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</div>-->
                    <!--<div class="layer">-->
                        <!--<a href="">-->
                            <!--<div class="schedule">-->
                                <!--<span>Fri</span>-->
                                <!--<span>13</span>-->
                            <!--</div>-->
                            <!--<div class="classContent">-->
                                <!--<p>【逻辑课程】</p>-->
                                <!--<p class="am-text-truncate">模考班-《逻辑分册》主编-孙勇 免费试听！</p>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</div>-->
                    <!--<div class="layer">-->
                        <!--<a href="">-->
                            <!--<div class="schedule">-->
                                <!--<span>Fri</span>-->
                                <!--<span>13</span>-->
                            <!--</div>-->
                            <!--<div class="classContent">-->
                                <!--<p>【逻辑课程】</p>-->
                                <!--<p class="am-text-truncate">模考班-《逻辑分册》主编-孙勇 免费试听！</p>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</div>-->
                <!--</article>-->
            </div>

        </div>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1543553843;}";
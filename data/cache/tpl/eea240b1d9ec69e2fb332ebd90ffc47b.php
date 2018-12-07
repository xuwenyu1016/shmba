<?php exit;?>001575081122b47b06412f203b5590e31f382380bfbes:4707:"a:2:{s:8:"template";s:4643:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="<?php echo $contentInfo["mobileImg"];?>" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="contentContainer am-padding-sm">
    <h3 class="noBorder">
        <span class="num">01</span>
        <span class="prime">招生<b class="red">信息</b></span>
    </h3>

    <div class="collegeBlock">

        <div class="collegeList">

            <p><span class="bold">项目类别：</span><?php echo $contentInfo["category"];?></p>
            <p><span class="bold">学制：</span><?php echo $contentInfo["duration"];?></p>
            <p><span class="bold">是否接受调剂：</span><?php echo $contentInfo["adjustable"];?></p>
            <p><span class="bold">是否开设提前面试：</span><?php echo $contentInfo["interview"];?></p>

            <p><span class="bold">招生人数：</span><?php echo $contentInfo["recruitNum"];?></p>

            <p><span class="bold">学费：</span><?php echo $contentInfo["tuition"];?></p>
            <p><span class="bold">奖学金：</span><?php echo $contentInfo["scholarship"];?></p>
            <p><span class="bold">历年分数线：</span><?php echo $contentInfo["passingScore"];?></p>

            <h3 class="noBorder">
                <span class="num">02</span>
                <span class="prime">面试<b class="red">时间</b></span>
            </h3>
            <div class="recruit">
               <?php echo $contentInfo["interviewTime"];?>
            </div>

            <h3 class="noBorder">
                <span class="num">03</span>
                <span class="prime">师资<b class="red">力量</b></span>
            </h3>

            <div data-am-widget="slider" class="am-slider am-slider-default recruitSlider" data-am-slider='{itemWidth:100, itemMargin: 5, minItems:3, maxItems:3, slideshow: true}' >
                <ul class="am-slides">
                    <?php echo $contentInfo["teacherResources"];?>
                </ul>
            </div>

            <h3 class="noBorder">
                <span class="num">04</span>
                <span class="prime">优秀<b class="red">学员</b></span>
            </h3>

            <div data-am-widget="slider" class="am-slider am-slider-default recruitSlider" data-am-slider='{itemWidth:100, itemMargin: 5, minItems:3, maxItems:3, slideshow: true}' >
                <ul class="am-slides">
                    <?php echo $contentInfo["ourStudents"];?>
                </ul>
            </div>

            <h3 class="noBorder">
                <span class="num">05</span>
                <span class="prime">项目<b class="red">特色</b></span>
            </h3>

            <div class="features">
                <?php echo $contentInfo["features"];?>

            </div>

            <h3 class="noBorder">
                <span class="num">06</span>
                <span class="prime">近期<b class="red">活动</b></span>
            </h3>

            <div class="layerBox am-padding-bottom-sm">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>31, "sub"=>true, "limit"=>3, "expand_id"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
                <article class="layer">
                    <a href="<?php echo $list["aurl"];?>">
                        <div class="calender">
                            <span><?php echo $list["month"];?></span><span><?php echo $list["date"];?></span>
                        </div>
                        <div class="classContent">
                            <p class="am-text-truncate"><?php echo $list["title"];?></p>
                            <p class="am-text-truncate"><?php echo $list["description"];?></p>
                            <span>免费试听</span>
                        </div>

                        <p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>

                    </a>

                </article>
                <?php } ?>
              


            </div>

        </div>

    </div>
</section>

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543545122;}";
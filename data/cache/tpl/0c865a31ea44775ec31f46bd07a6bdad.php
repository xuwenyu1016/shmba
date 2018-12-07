<?php exit;?>0015519162030030a3019ee5ec35ec17a7aadb90d35cs:2443:"a:2:{s:8:"template";s:2379:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2017-12-18/791419b41eb834e553414e230e8e0e45.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title">
            <span class="num">01</span>
            <span class="numContent">上海<b class="en">MBA</b><b class="red">招生院校</b></span>
        </h2>

        <div class="collegeBlock">

            <div class="collegeList">

                <?php foreach ($pageList as $vo) { ?>
                <article class="collegeInfo am-padding-sm">
                    <div class="logo">
                        <a href="<?php echo $vo["aurl"];?>">
                            <img src="<?php echo $vo["image"];?>" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                        </a>
                    </div>

                    <div class="infoDetails">
                        <a href="<?php echo $vo["aurl"];?>">
                            <h4><?php echo $vo["title"];?></h4>
                            <p><span>地区：<?php echo $vo["location"];?></span> <span>创办时间：<?php echo $vo["establishTime"];?></span> <span>学费：<?php echo $vo["tuitionRange"];?></span></p>
                            <p><span>性质：<?php echo $vo["quality"];?></span> <span>分数线：<?php echo $vo["overallPassingScore"];?></span></p>
                            <p><span>认证：<?php echo $vo["certificate"];?></span></p>
                        </a>
                        <a href="<?php echo $vo["aurl"];?>" class="enrollCheck">我的录取几率</a>
                    </div>
                </article>
                <?php } ?>

                <div class="page">
                    <?php echo $page;?>
                </div>

            </div>
            <div class="formBox">
                <?php $__Template->display("themes/default/sideBarForm"); ?>
            </div>
        </div>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1520380203;}";
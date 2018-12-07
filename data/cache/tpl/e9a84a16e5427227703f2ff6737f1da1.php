<?php exit;?>00156566405468c4f6b25f3eefea15540372828f2654s:2039:"a:2:{s:8:"template";s:1975:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title">
            <span class="num">01</span>
            <span class="numContent">上海<b class="en">MBA</b><b class="red"><?php echo $categoryInfo["name"];?></b></span>
        </h2>

        <div class="collegeBlock">

            <div class="collegeList">
                <article class="layerBox">
                    <?php foreach ($pageList as $vo) { ?>
                    <div class="layer">
                        <a href="<?php echo $vo["aurl"];?>">
                            <div class="schedule">
                                <span><?php echo $vo["month"];?></span>
                                <span><?php echo $vo["date"];?></span>
                            </div>
                            <div class="classContent am-text-truncate">
                                <p><?php echo $vo["title"];?></p>
                                <p class="am-text-truncate"><?php echo $vo["description"];?></p>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </article>
                <div class="page"><?php echo $page;?></div>

            </div>
            <div class="formBox">
                <?php $__Template->display("themes/default/sideBarForm"); ?>
            </div>
        </div>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1534128054;}";
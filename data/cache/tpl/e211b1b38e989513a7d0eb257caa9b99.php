<?php exit;?>001551871611ffe08ef28fd1d24cb7520c61d4f7f4das:1475:"a:2:{s:8:"template";s:1411:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title am-margin-top-lg">
            <!--<span class="num">01</span>-->
            <span class="numContent"><?php echo $contentInfo["title"];?></span>
        </h2>

        <div class="collegeBlock">

            <div class="collegeList">

                <div class="am-margin-vertical-sm">
                    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
                        <ul class="am-slides">
                            <?php echo $contentInfo["content"];?>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="formBox">

                <?php $__Template->display("themes/default/sideBarForm"); ?>

            </div>

        </div>
    </div>
</section>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>";s:12:"compile_time";i:1520335611;}";
<?php exit;?>001575080487a80a40954f049eb627742018aba29babs:1878:"a:2:{s:8:"template";s:1814:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>


<section class="content-image-gallery am-padding-vertical-lg">
    <div class="am-container">

        <?php $__Template->display("themes/default/article-head"); ?>

        <h2 class="title am-padding-top-lg">
            <!--<span class="num">01</span>-->
            <span class="numContent"><?php echo $categoryInfo["name"];?></span>
        </h2>

        <div class="gallery-box am-margin-top-lg">
            <article>
                <ul class="am-avg-sm-3 gallery-content am-padding-right-sm">
                    <?php foreach ($pageList as $vo) { ?>
                    <li>
                        <a href="<?php echo $vo["aurl"];?>">
                            <div class="am-center lazy" data-original="<?php echo $vo["image"];?>" title="<?php echo $vo["title"];?>"></div>
                            <p class="am-margin-top-sm am-margin-bottom-0 am-text-sm"><?php echo $vo["title"];?></p>
                        </a>

                    </li>
                    <?php } ?>
                </ul>

                <div class="page"><?php echo $page;?></div>
            </article>


            <div class="nav-hot-list">
                <?php $__Template->display("themes/default/hot_list"); ?>
            </div>
        </div>
    </div>
</section>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1543544487;}";
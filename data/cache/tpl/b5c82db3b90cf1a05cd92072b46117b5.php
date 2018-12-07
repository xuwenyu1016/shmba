<?php exit;?>0015750910214f0439cb2b3c1c582a55a922bd61f0acs:1512:"a:2:{s:8:"template";s:1448:"<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>


<section class="content-image-gallery am-padding-sm">

    <?php $__Template->display("themes/mobile/hot_list"); ?>

    <h3 class="noEn"><?php echo $categoryInfo["name"];?></h3>

    <ul class="am-avg-sm-1 am-margin-top-sm">
        <?php foreach ($pageList as $vo) { ?>
        <li>
            <a href="<?php echo $vo["aurl"];?>" class="am-margin-bottom-sm" title="<?php echo $vo["title"];?>">
                <div class="am-img-responsive lazy" data-original="<?php echo $vo["image"];?>" title="<?php echo $vo["title"];?>"></div>

                <article>
                    <p class="am-margin-top-sm am-margin-bottom-0 am-text-sm am-text-truncate"><?php echo $vo["title"];?></p>
                    <p class="am-margin-top-0 am-margin-bottom-sm am-text-xs am-text-truncate"><?php echo $vo["description"];?></p>
                </article>

            </a>

        </li>
        <?php } ?>
    </ul>

    <div class="page"><?php echo $page;?></div>

</section>



<?php $__Template->display("themes/mobile/ending"); ?>

";s:12:"compile_time";i:1543555021;}";
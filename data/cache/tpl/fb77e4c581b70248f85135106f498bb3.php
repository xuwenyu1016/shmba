<?php exit;?>00157521717306e1dfc86972e62eb66358cc9ce04d29s:1341:"a:2:{s:8:"template";s:1277:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />

<section class="contentContainer am-padding-vertical-sm">

        <h3 class="title">
            <span class="num">01</span>
            <span class="prime"><b class="en">MBA</b><b class="red">在线试听</b></span>
        </h3>

        <ul class="am-avg-sm-2">
            <?php foreach ($pageList as $vo) { ?>
            <li>
                <article class="imgGallery">
                    <a href="<?php echo $vo["aurl"];?>">
                        <img src="<?php echo $vo["image"];?>" class="am-img-responsive" alt="<?php echo $vo["title"];?>" />
                        <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $vo["title"];?></p>
                    </a>
                </article>
            </li>
            <?php } ?>
        </ul>

</section>






<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543681173;}";
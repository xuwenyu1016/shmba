<?php exit;?>0015751276487a0f77b0d8b96fa73b70088c930724e4s:989:"a:2:{s:8:"template";s:926:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-24/28.png" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />


<section class="wechat-container am-padding-sm">
    <?php foreach ($pageList as $vo) { ?>
    <article class="wechat-layer am-margin-vertical-sm">
        <a href="<?php echo $vo["link"];?>" target="_blank">
            <img src="<?php echo $vo["image"];?>" alt="<?php echo $vo["title"];?>" />
            <div class="wechat-content am-padding-horizontal-sm">
                <p><?php echo $vo["title"];?></p>
                <p class="am-text-sm"><?php echo $vo["description"];?></p>
            </div>
        </a>
    </article>
    <?php } ?>
    <div class="page"><?php echo $page;?></div>
</section>



<?php $__Template->display("themes/mobile/firmIntroBox"); ?>";s:12:"compile_time";i:1543591648;}";
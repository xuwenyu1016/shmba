<?php exit;?>001575115882c7728ae293d46b912b0ef786e0db2b9bs:1264:"a:2:{s:8:"template";s:1200:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-02-24/16.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="wechat-container">
    <div class="am-container am-padding-vertical-xl">
        <?php foreach ($pageList as $vo) { ?>
        <article class="wechat-layer">
            <a href="<?php echo $vo["link"];?>" target="_blank">
                <img src="<?php echo $vo["image"];?>" alt="<?php echo $vo["title"];?>" />
                <div class="wechat-content am-padding-horizontal-sm">
                    <p class="am-text-truncate"><?php echo $vo["title"];?></p>
                    <p class="am-text-sm"><?php echo $vo["description"];?></p>
                </div>
            </a>
        </article>
        <?php } ?>
        <div class="page"><?php echo $page;?></div>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>";s:12:"compile_time";i:1543579882;}";
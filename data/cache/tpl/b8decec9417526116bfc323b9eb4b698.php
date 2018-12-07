<?php exit;?>0015750792385d034b7fc171761fea7badc36011583fs:1886:"a:2:{s:8:"template";s:1822:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $contentInfo["title"];?>" />

<div class="am-padding-horizontal-sm">
    <?php $__Template->display("themes/mobile/hot_list"); ?>
</div>

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime"><?php echo $contentInfo["title"];?></span>
</h3>

<section class="content am-padding-horizontal-sm am-padding-bottom-sm">
    <?php echo $contentInfo["content"];?>
</section>

<ul class="am-avg-sm-2 am-padding-sm bottomIndex">
    <li>
        <div class="am-text-truncate am-text-sm"><span>上一篇：</span>
            <?php if (empty($prevInfo['aurl'])){ ?>
            <a class="am-link-muted ">暂无</a>
            <?php }else{ ?>
            <a href="<?php echo $prevInfo["aurl"];?>" class="am-link-muted"><?php echo $prevInfo["title"];?></a>
            <?php } ?>
        </div>
    </li>
    <li>

        <div class="am-text-truncate am-text-sm"><span>下一篇：</span>
            <?php if (empty($nextInfo['aurl'])){ ?>
            <a class="am-link-muted am-text-truncate">暂无</a>
            <?php }else{ ?>
            <a href="<?php echo $nextInfo["aurl"];?>" class="am-link-muted am-text-truncate"><?php echo $nextInfo["title"];?></a>
            <?php } ?>
        </div>
    </li>
</ul>

<!--<article class="am-padding-sm">-->
    <!--<p class="am-margin-bottom-xs am-text-sm"><b>留言框：</b></p>-->
    <!--<div id="comment"></div>-->
<!--</article>-->



<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543543238;}";
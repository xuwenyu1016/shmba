<?php exit;?>001575091019491f9e9d65ba948611ef94367d5d1dc3s:1821:"a:2:{s:8:"template";s:1757:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-01-02/a1cf757141f6debd03a8c34a0fe96b2c.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime">上海<b class="en">MBA</b><b class="red">招生院校</b></span>
</h3>

<section class="collegeList am-padding-horizontal-sm am-padding-bottom-sm">

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
                <p><span>创办时间：<?php echo $vo["establishTime"];?></span></p>
                <p><span>学费：<?php echo $vo["tuitionRange"];?></span></p>
                <p><span>分数线：<?php echo $vo["overallPassingScore"];?></span></p>
                <p><span>认证：<?php echo $vo["certificate"];?></span></p>
            </a>
            <a href="/article/jiaoDaAnTaiZhaoShengXinXi.html" class="enrollCheck">我的录取几率</a>
        </div>
    </article>
    <?php } ?>

    <div class="page">
        <?php echo $page;?>
    </div>

</section>

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543555019;}";
<?php exit;?>0015750804219b791d7b0b49f9e3e76b3d55020103b7s:2348:"a:2:{s:8:"template";s:2284:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime"><?php echo $categoryInfo["name"];?></span>
</h3>


<ul class="am-avg-sm-2 am-padding-horizontal-sm am-padding-bottom-sm imgEvents">
    <?php foreach ($pageList as $vo) { ?>
    <li>
        <article>
            <a href="<?php echo $vo["aurl"];?>">
                <img src="<?php echo $vo["image"];?>" class="am-img-responsive" alt="<?php echo $vo["title"];?>" />
                <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $vo["title"];?></p>
            </a>
        </article>
    </li>
    <?php } ?>
</ul>
<div class="page"><?php echo $page;?></div>

<div class="am-text-sm am-text-center page am-padding-bottom-sm"><?php echo $page;?></div>

<section class="benefits am-padding-sm">
    <h3 class="noEn">不仅通过联考，更要受益终身</h3>

    <ul class="am-avg-sm-3 am-padding-top-sm">
        <li>
            <div class="innerBox">
                <img src="/upload/2017-12-21/15.png" class="am-img-responsive am-center" alt="樊登读书会" />
                <p>樊登读书会</p>
                <a href="/topic-fanDengDuShuHui.html">查看详情</a>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2017-12-21/16.png" class="am-img-responsive am-center" alt="丰富的学生活动" />
                <p>丰富的学生活动</p>
                <a href="/list-huoDong.html">查看详情</a>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2017-12-21/17.png" class="am-img-responsive am-center" alt="华章校友会" />
                <p>华章微信</p>
                <a href="/list-mbaWeiXinDongTai.html">查看详情</a>
            </div>
        </li>
    </ul>
</section>


<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543544421;}";
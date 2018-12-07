<?php exit;?>001575082626518a4270757153f7fc5978f40dc9e33fs:5071:"a:2:{s:8:"template";s:5007:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime">学员活动</span>
    <a href="/list-xueyuanhuodong.html" class="morePlus">+more</a>
</h3>


<ul class="am-avg-sm-2 am-padding-horizontal-sm am-padding-bottom-sm imgEvents">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>64, "order"=>"time desc" , "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
    <li>
        <article>
            <a href="<?php echo $list["aurl"];?>">
                <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $list["title"];?></p>
            </a>
        </article>
    </li>
    <?php } ?>
</ul>

<h3 class="noBorder">
    <span class="num">02</span>
    <span class="prime">上课实录</span>
    <a href="/list-shangkeshilu.html" class="morePlus">+more</a>
</h3>

<ul class="am-avg-sm-2 am-padding-horizontal-sm am-padding-bottom-sm imgEvents">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>65, "order"=>"time desc" , "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
    <li>
        <article>
            <a href="<?php echo $list["aurl"];?>">
                <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $list["title"];?></p>
            </a>
        </article>
    </li>
    <?php } ?>
</ul>

<h3 class="noBorder">
    <span class="num">03</span>
    <span class="prime">品牌报道</span>
    <a href="/list-pinpaibaodao.html" class="morePlus">+more</a>
</h3>

<ul class="am-avg-sm-2 am-padding-horizontal-sm am-padding-bottom-sm imgEvents">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>66, "order"=>"time desc" , "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
    <li>
        <article>
            <a href="<?php echo $list["aurl"];?>">
                <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $list["title"];?></p>
            </a>
        </article>
    </li>
    <?php } ?>
</ul>

<h3 class="noBorder">
    <span class="num">04</span>
    <span class="prime">樊登读书会线下活动</span>
    <a href="/list-fandengdushuhuixianxiahuodong.html" class="morePlus">+more</a>
</h3>

<ul class="am-avg-sm-2 am-padding-horizontal-sm am-padding-bottom-sm imgEvents">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>67, "order"=>"time desc" , "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
    <li>
        <article>
            <a href="<?php echo $list["aurl"];?>">
                <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $list["title"];?></p>
            </a>
        </article>
    </li>
    <?php } ?>
</ul>

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

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543546626;}";
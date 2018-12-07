<?php exit;?>001575092486f9a2498506e7cb9c19d9927d8f9210ebs:5362:"a:2:{s:8:"template";s:5298:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2017-12-18/791419b41eb834e553414e230e8e0e45.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title">
            <span class="num">01</span>
            <span class="numContent">上海华章<b class="en">MBA</b><b class="red">学员活动</b></span>
            <a href="/list-xueyuanhuodong.html" class="rightMore am-padding-top-sm" target="_blank">+more</a>
        </h2>

        <ul class="am-avg-sm-4 am-margin-top-lg">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>64, "order"=>"time desc" , "limit"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li>
                <article class="imgGallery">
                    <a href="<?php echo $list["aurl"];?>">
                        <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                        <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $list["title"];?></p>
                    </a>
                </article>
            </li>
            <?php } ?>
        </ul>

        <h2 class="title">
            <span class="num">02</span>
            <span class="numContent">上海华章<b class="en">MBA</b><b class="red">上课实录</b></span>
            <a href="/list-shangkeshilu.html" class="rightMore am-padding-top-sm" target="_blank">+more</a>
        </h2>

        <ul class="am-avg-sm-4 am-margin-top-lg">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>65, "order"=>"time desc" , "limit"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li>
                <article class="imgGallery">
                    <a href="<?php echo $list["aurl"];?>">
                        <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                        <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $list["title"];?></p>
                    </a>
                </article>
            </li>
            <?php } ?>
        </ul>

        <h2 class="title">
            <span class="num">03</span>
            <span class="numContent">上海华章<b class="en">MBA</b><b class="red">品牌报道</b></span>
            <a href="/list-pinpaibaodao.html" class="rightMore am-padding-top-sm" target="_blank">+more</a>
        </h2>

        <ul class="am-avg-sm-4 am-margin-top-lg">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>66, "order"=>"time desc" , "limit"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li>
                <article class="imgGallery">
                    <a href="<?php echo $list["aurl"];?>">
                        <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                        <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $list["title"];?></p>
                    </a>
                </article>
            </li>
            <?php } ?>
        </ul>

        <h2 class="title">
            <span class="num">04</span>
            <span class="numContent">上海华章<b class="en">MBA</b><b class="red">樊登读书会线下活动</b></span>
            <a href="/list-fandengdushuhuixianxiahuodong.html" class="rightMore am-padding-top-sm" target="_blank">+more</a>
        </h2>

        <ul class="am-avg-sm-4 am-margin-top-lg">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>67, "order"=>"time desc" , "limit"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li>
                <article class="imgGallery">
                    <a href="<?php echo $list["aurl"];?>">
                        <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                        <p class="am-text-truncate am-text-center am-margin-top-xs"><?php echo $list["title"];?></p>
                    </a>
                </article>
            </li>
            <?php } ?>
        </ul>
    </div>
</section>

<section class="benefits am-padding-vertical-xl">
    <div class="am-container am-padding-vertical-sm">
        <h2>不仅通过联考，更要受益终身<span class="borderSpan"></span></h2>

        <ul class="am-avg-sm-3 am-padding-top-xl">
            <?php $__Template->display("themes/default/benefits"); ?>
        </ul>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>";s:12:"compile_time";i:1543556486;}";
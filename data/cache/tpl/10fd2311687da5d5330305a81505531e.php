<?php exit;?>001551917698e23d6f1ece1af1426ef146935a5a5dbas:1424:"a:2:{s:8:"template";s:1360:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2017-12-18/791419b41eb834e553414e230e8e0e45.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title">
            <span class="num">01</span>
            <span class="numContent">上海华章<b class="en">MBA</b><b class="red">在线试听</b></span>
        </h2>

        <ul class="am-avg-sm-4 am-margin-top-lg">
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
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>";s:12:"compile_time";i:1520381698;}";
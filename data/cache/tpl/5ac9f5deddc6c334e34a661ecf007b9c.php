<?php exit;?>0015640058661a8ec9cbad8cb974a3c9abc00fb63f7cs:1594:"a:2:{s:8:"template";s:1530:"﻿<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>


<section class="content-image-gallery am-padding-sm">

    <?php $__Template->display("themes/mobile/hot_list"); ?>

    <h3 class="noEn"><?php echo $categoryInfo["name"];?></h3>

    <ul class="am-avg-sm-1 am-margin-top-sm">
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>18 , "limit"=>102));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li>
            <a href="<?php echo $list["aurl"];?>" class="am-margin-bottom-sm">
                <div class="am-img-responsive lazy" data-original="<?php echo $list["image"];?>" title="<?php echo $list["title"];?>"></div>

                <article>
                    <p class="am-margin-top-sm am-margin-bottom-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                    <p class="am-margin-top-0 am-margin-bottom-sm am-text-xs am-text-truncate"><?php echo $list["description"];?></p>
                </article>
            </a>

        </li>
        <?php } ?>
    </ul>

</section>



<?php $__Template->display("themes/mobile/ending"); ?>

";s:12:"compile_time";i:1532469866;}";
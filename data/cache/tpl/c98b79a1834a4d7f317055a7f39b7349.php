<?php exit;?>00155190200508db2671202fb80344d993dbbb30b40as:1422:"a:2:{s:8:"template";s:1358:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime"><?php echo $categoryInfo["name"];?></span>
</h3>

<section class="lecture am-padding-horizontal-sm am-padding-bottom-sm">
    <div class="layerBox">
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>37, "sub"=>true, "limit"=>10, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <article class="layer">
            <a href="<?php echo $list["aurl"];?>">
                <div class="classContent">
                    <p class="am-text-truncate"><?php echo $list["title"];?></p>
                    <p class="am-text-truncate"><?php echo $list["description"];?></p>
                </div>
            </a>

        </article>
        <?php } ?>
        <!--<div class="page"><?php echo $page;?></div>-->
    </div>
</section>

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1520366005;}";
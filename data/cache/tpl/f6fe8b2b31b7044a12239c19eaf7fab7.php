<?php exit;?>00157534569604bc551d9e2eb82cef207050595739bas:2322:"a:2:{s:8:"template";s:2258:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime">报考资讯</span>
    <a href="/list-MBABaoKaoXiangGuan.html" class="morePlus">more</a>
</h3>

<section class="lecture am-padding-horizontal-sm">
    <div class="layerBox">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "order"=>"time desc", "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
        <article class="layer">
            <a href="<?php echo $list["aurl"];?>">
                <div class="classContent">
                    <p class="am-text-truncate"><?php echo $list["title"];?></p>
                    <p class="am-text-truncate"><?php echo $list["description"];?></p>
                </div>
            </a>

        </article>
        <?php } ?>
    </div>
</section>

<h3 class="noBorder">
    <span class="num">02</span>
    <span class="prime">面试资讯</span>
    <a href="/list-MBABiMianZiXun.html" class="morePlus">more</a>
</h3>

<section class="lecture am-padding-horizontal-sm am-padding-bottom-sm">
    <div class="layerBox">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>36, "order"=>"time desc", "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
        <article class="layer">
            <a href="<?php echo $list["aurl"];?>">
                <div class="classContent">
                    <p class="am-text-truncate"><?php echo $list["title"];?></p>
                    <p class="am-text-truncate"><?php echo $list["description"];?></p>
                </div>
            </a>

        </article>
        <?php } ?>
    </div>
</section>

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543809696;}";
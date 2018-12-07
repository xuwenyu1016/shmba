<?php exit;?>001575174987ea6ea59873805b8d664746fef0256f61s:3630:"a:2:{s:8:"template";s:3566:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="banterBox">
    <a href="/topic-MBAZiXunHui.html">
        <img src="<?php echo $categoryInfo["image"];?>" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    </a>

    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="content-image-gallery am-padding-sm">

    <?php $__Template->display("themes/mobile/hot_list"); ?>

    <h3 class="noEn"><?php echo $categoryInfo["name"];?></h3>

    <ul class="am-avg-sm-1 am-margin-top-sm">
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>52 , "limit"=>102));  if(is_array($listList)) foreach($listList as $list){ ?>
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

<!--<h3 class="noBorder">-->
    <!--<span class="num">01</span>-->
    <!--<span class="prime">MBA咨询会</span>-->
    <!--<a href="/list-MBAZiXunHuiList.html" class="morePlus">more</a>-->
<!--</h3>-->

<!--<section class="lecture am-padding-horizontal-sm">-->
    <!--<div class="layerBox">-->
        <!--&lt;!&ndash;list{app="Article" label="contentList" class_id=37 order="time desc" limit=5}&ndash;&gt;-->
        <!--<article class="layer">-->
            <!--<a href="<?php echo $list["aurl"];?>">-->
                <!--<div class="classContent">-->
                    <!--<p class="am-text-truncate"><?php echo $list["title"];?></p>-->
                    <!--<p class="am-text-truncate"><?php echo $list["description"];?></p>-->
                <!--</div>-->
            <!--</a>-->

        <!--</article>-->
        <!--&lt;!&ndash;{/list}&ndash;&gt;-->
    <!--</div>-->
<!--</section>-->

<!--<h3 class="noBorder">-->
    <!--<span class="num">02</span>-->
    <!--<span class="prime">MBA教育展</span>-->
    <!--<a href="/list-jiaoYuZhanList.html" class="morePlus">more</a>-->
<!--</h3>-->

<!--<section class="lecture am-padding-horizontal-sm am-padding-bottom-sm">-->
    <!--<div class="layerBox">-->
        <!--&lt;!&ndash;list{app="Article" label="contentList" class_id=51 order="time desc" limit=5}&ndash;&gt;-->
        <!--<article class="layer">-->
            <!--<a href="<?php echo $list["aurl"];?>">-->
                <!--<div class="classContent">-->
                    <!--<p class="am-text-truncate"><?php echo $list["title"];?></p>-->
                    <!--<p class="am-text-truncate"><?php echo $list["description"];?></p>-->
                <!--</div>-->
            <!--</a>-->

        <!--</article>-->
        <!--&lt;!&ndash;{/list}&ndash;&gt;-->
    <!--</div>-->
<!--</section>-->

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543638987;}";
<?php exit;?>001575214431f775f9615701ffcede67d3950f8d5032s:3422:"a:2:{s:8:"template";s:3358:"<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>


<img src="/upload/2017-12-05/13.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="teacher-four am-padding-sm">
    <h3 class="noBorder">华章导师梦之队</h3>

    <div class="teacher-four-stars">
        <div data-am-widget="slider" class="am-slider am-slider-a5" data-am-slider='{&quot;directionNav&quot;:false}' >
            <ul class="am-slides">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>4, "not_id"=>"129"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li>
                    <ul class="am-avg-sm-2">
                        <li><img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" /></li>
                        <li>
                            <p class="am-margin-vertical-xs"><b><?php echo $list["title"];?></b> <span class="am-text-xs">华章<?php echo $list["subject"];?>导师</span></p>
                            <p class="am-text-xs am-margin-vertical-xs"><?php echo $list["briefIntro"];?></p>
                            <button class="am-text-sm" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 375}">预约试听</button>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>

<section class="teacher-lists am-padding-sm">
    <h3 class="noBorder">华章导师团队</h3>

    <div class="teacher-layer-container">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc", "not_id"=>"22,23,24,25"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <article class="teacher-layer">
            <img src="<?php echo $list["circleImg"];?>" class="am-img-responsive am-center" alt="<?php echo $list["subject"];?>导师-<?php echo $list["title"];?>" />
            <div class="am-padding-left-sm">
                <p class="am-margin-vertical-xs"><b><?php echo $list["title"];?></b> <span class="am-text-xs">华章<?php echo $list["subject"];?>导师</span></p>
                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["briefIntro"];?></p>
                <button class="am-text-sm" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 375}">预约试听</button>
            </div>
        </article>
        <?php } ?>
    </div>

</section>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">立即预约
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <?php $__Template->display("themes/mobile/form"); ?>
        </div>
    </div>
</div>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>
";s:12:"compile_time";i:1543678431;}";
<?php exit;?>001563971024ba4418086d4c349a397321b5419248e3s:1822:"a:2:{s:8:"template";s:1758:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>


<section class="content-image-gallery am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title am-padding-top-lg">
            <!--<span class="num">01</span>-->
            <span class="numContent"><?php echo $categoryInfo["name"];?></span>
        </h2>

        <div class="gallery-box am-margin-top-lg">
            <ul class="am-avg-sm-3 gallery-content am-padding-right-sm">
                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>16 , "limit"=>102));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li>
                    <a href="<?php echo $list["aurl"];?>">
                        <div class="am-center lazy" data-original="<?php echo $list["image"];?>" title="<?php echo $list["title"];?>"></div>
                        <p class="am-margin-top-sm am-margin-bottom-0 am-text-sm"><?php echo $list["title"];?></p>
                    </a>

                </li>
                <?php } ?>
            </ul>

            <div class="nav-hot-list">
                <?php $__Template->display("themes/default/hot_list"); ?>
            </div>
        </div>
    </div>
</section>




<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>

";s:12:"compile_time";i:1532435024;}";
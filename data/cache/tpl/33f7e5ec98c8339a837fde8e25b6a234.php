<?php exit;?>001551871085e6684c924cf73f95dc23345bd1a8df21s:1977:"a:2:{s:8:"template";s:1913:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title">
            <span class="num">01</span>
            <span class="numContent"><?php echo $categoryInfo["name"];?></span>
        </h2>

        <div class="collegeBlock">

            <div class="collegeList">
                <article class="layerBox">
                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>37, "sub"=>true, "limit"=>10, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <div class="layer bordered">
                        <a href="<?php echo $list["aurl"];?>">
                            <div class="classContent am-text-truncate am-padding-0">
                                <p class="am-padding-bottom-xs"><b><?php echo $list["title"];?></b></p>
                                <p class="am-text-truncate"><?php echo $list["description"];?></p>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </article>
                <!--<div class="page"><?php echo $page;?></div>-->

            </div>
            <div class="formBox">
                <?php $__Template->display("themes/default/sideBarForm"); ?>
            </div>
        </div>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1520335085;}";
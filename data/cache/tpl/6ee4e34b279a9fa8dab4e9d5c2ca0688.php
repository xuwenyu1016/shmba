<?php exit;?>0015750792613bb6604f396af3eb93f719050cd5abbes:2700:"a:2:{s:8:"template";s:2636:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">

        <?php $__Template->display("themes/default/article-head"); ?>
        
        <h2 class="title am-margin-top-lg">
            <!--<span class="num">01</span>-->
            <span class="numContent"><?php echo $contentInfo["title"];?></span>
        </h2>

        <div class="collegeBlock">

            <div class="collegeList">

                <div class="am-margin-vertical-sm"><?php echo $contentInfo["content"];?></div>

                <ul class="am-avg-sm-1 am-avg-md-2 am-padding-top-lg am-padding-bottom-xl bottomIndex">
                    <li>
                        <div class="am-text-truncate am-text-sm am-padding-right-sm"><span>上一篇：</span>
                            <?php if (empty($prevInfo['aurl'])){ ?>
                            <a class="am-link-muted ">暂无</a>
                            <?php }else{ ?>
                            <a href="<?php echo $prevInfo["aurl"];?>" class="am-link-muted"><?php echo $prevInfo["title"];?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li>

                        <div class="am-text-truncate am-padding-left-lg am-text-sm"><span>下一篇：</span>
                            <?php if (empty($nextInfo['aurl'])){ ?>
                            <a class="am-link-muted am-text-truncate">暂无</a>
                            <?php }else{ ?>
                            <a href="<?php echo $nextInfo["aurl"];?>" class="am-link-muted am-text-truncate"><?php echo $nextInfo["title"];?></a>
                            <?php } ?>
                        </div>
                    </li>
                </ul>

                <!--<p class="am-margin-bottom-xs"><b>留言框：</b></p>-->
                <!--<div id="comment"></div>-->

            </div>

            <div class="nav-hot-list">
                <?php $__Template->display("themes/default/hot_list"); ?>
            </div>

        </div>
    </div>
</section>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>";s:12:"compile_time";i:1543543261;}";
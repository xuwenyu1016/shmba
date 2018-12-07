<?php exit;?>001551916117ce2b65c100531b02dcc831c6425873aas:3178:"a:2:{s:8:"template";s:3114:"<?php $__Template->display("themes/default/head"); ?>

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
                <h3 class="subTitle am-text-left bordered">
                    <span class="numContent">报考资讯</span>
                    <a href="/list-registration.html" class="morePlus">more</a>
                </h3>
                <article class="layerBox">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "order"=>"time desc", "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
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

                <h3 class="subTitle am-text-left bordered">
                    <span class="numContent">面试资讯</span>
                    <a href="/list-interview.html" class="morePlus">more</a>
                </h3>
                <article class="layerBox">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>36, "order"=>"time desc", "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
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

            </div>
            <div class="formBox">
                <?php $__Template->display("themes/default/sideBarForm"); ?>
            </div>
        </div>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1520380117;}";
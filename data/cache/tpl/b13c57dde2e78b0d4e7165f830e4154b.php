<?php exit;?>001551912295735d60be364256acc5230c907bc3002ds:4375:"a:2:{s:8:"template";s:4311:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title am-padding-top-lg">
            <!--<span class="num">01</span>-->
            <span class="numContent"><?php echo $categoryInfo["name"];?></span>
        </h2>

        <div class="collegeBlock">

            <div class="collegeList">
                <h3 class="subTitle am-text-left bordered">
                    <span class="num">01</span>
                    <span class="numContent">学员感言</span>
                    <a class="morePlus" href="/list-speech.html">more</a>
                </h3>
                <article class="layerBox am-margin-left-0">
                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>28 , "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
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
                    <span class="num">02</span>
                    <span class="numContent">学员采访</span>
                    <a class="morePlus" href="/list-trainee.html">more</a>
                </h3>
                <article class="layerBox am-margin-left-0">
                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>29 , "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
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
                    <span class="num">03</span>
                    <span class="numContent">经验分享</span>
                    <a class="morePlus" href="/list-experience.html">more</a>
                </h3>
                <article class="layerBox am-margin-left-0">
                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>30 , "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
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
";s:12:"compile_time";i:1520376295;}";
<?php exit;?>001575081023fbadce163348b9d41e707aaf9fe9cdb1s:4973:"a:2:{s:8:"template";s:4909:"<?php $__Template->display("themes/default/head"); ?>

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
            <article class="gallery-content am-padding-right-sm">

                <a href="/topic-MBAZiXunHui.html">
                    <img src="<?php echo $categoryInfo["image"];?>" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </a>

                <ul class="am-avg-sm-3 am-margin-top-lg">
                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>52 , "limit"=>102));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li>
                        <a href="<?php echo $list["aurl"];?>">
                            <div class="am-center lazy" data-original="<?php echo $list["image"];?>" title="<?php echo $list["title"];?>"></div>
                            <p class="am-margin-top-sm am-margin-bottom-0 am-text-sm"><?php echo $list["title"];?></p>
                        </a>

                    </li>
                    <?php } ?>
                </ul>
            </article>


            <div class="nav-hot-list">
                <?php $__Template->display("themes/default/hot_list"); ?>
            </div>
        </div>
    </div>
</section>

<!--<section class="contentContainer am-padding-vertical-lg">-->
    <!--<div class="am-container">-->
        <!--<h2 class="title">-->
            <!--<span class="num">01</span>-->
            <!--<span class="numContent"><?php echo $categoryInfo["name"];?></span>-->
        <!--</h2>-->

        <!--<div class="collegeBlock">-->

            <!--<div class="collegeList">-->
                <!--<h3 class="subTitle am-text-left bordered">-->
                    <!--<span class="numContent">MBA咨询会</span>-->
                    <!--<a href="/list-MBAZiXunHuiList.html" class="morePlus">more</a>-->
                <!--</h3>-->
                <!--<article class="layerBox">-->
                    <!--&lt;!&ndash;list{app="Article" label="contentList" class_id=37 order="time desc" limit=5}&ndash;&gt;-->
                    <!--<div class="layer bordered">-->
                        <!--<a href="<?php echo $list["aurl"];?>">-->
                            <!--<div class="classContent am-text-truncate am-padding-0">-->
                                <!--<p class="am-padding-bottom-xs"><b><?php echo $list["title"];?></b></p>-->
                                <!--<p class="am-text-truncate"><?php echo $list["description"];?></p>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</div>-->
                    <!--&lt;!&ndash;{/list}&ndash;&gt;-->
                <!--</article>-->

                <!--<h3 class="subTitle am-text-left bordered">-->
                    <!--<span class="numContent">MBA教育展</span>-->
                    <!--<a href="/list-jiaoYuZhanList.html" class="morePlus">more</a>-->
                <!--</h3>-->
                <!--<article class="layerBox">-->
                    <!--&lt;!&ndash;list{app="Article" label="contentList" class_id=51 order="time desc" limit=5}&ndash;&gt;-->
                    <!--<div class="layer bordered">-->
                        <!--<a href="<?php echo $list["aurl"];?>">-->
                            <!--<div class="classContent am-text-truncate am-padding-0">-->
                                <!--<p class="am-padding-bottom-xs"><b><?php echo $list["title"];?></b></p>-->
                                <!--<p class="am-text-truncate"><?php echo $list["description"];?></p>-->
                            <!--</div>-->
                        <!--</a>-->
                    <!--</div>-->
                    <!--&lt;!&ndash;{/list}&ndash;&gt;-->
                <!--</article>-->


            <!--</div>-->
            <!--<div class="formBox">-->
                <!--&lt;!&ndash;#include file="sideBarForm.html"&ndash;&gt;-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</section>-->

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1543545023;}";
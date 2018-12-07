<?php exit;?>00157509618462f6c2cae81bc8e5d4f6993b7b31398cs:6029:"a:2:{s:8:"template";s:5965:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-xl">
    <div class="am-container">
        <h2 class="title">
            <!--<span class="num">01</span>-->
            <span class="numContent"><?php echo $categoryInfo["name"];?></span>
        </h2>

        <ul class="am-avg-sm-2 map-block">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>50, "expand_id"=>22, "order"=>"time asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li class="am-padding-sm">
                <div id="<?php echo $list["id"];?>" class="am-margin-vertical-0 am-margin-bottom-sm" style="height: 200px;"></div>
                <h3 class="am-margin-bottom-0"><?php echo $list["map"];?></h3>
                <p class="am-margin-bottom-xs am-margin-top-0">地址：<?php echo $list["location"];?><br/>交通：<?php echo $list["traffic"];?></p>
            </li>
            <?php } ?>
        </ul>

    </div>
</section>

<section class="environments am-padding-bottom-xl">
    <div class="am-container">
        <h2 class="title">
            <span class="numContent">校区环境</span>
        </h2>

        <div data-am-widget="tabs" class="am-tabs am-tabs-default">
            <ul class="am-tabs-nav am-cf">
                <li class="am-active"><a href="[data-tab-panel-0]">长宁校区</a></li>
                <li class=""><a href="[data-tab-panel-1]">浦东校区</a></li>
                <li class=""><a href="[data-tab-panel-2]">杨浦校区</a></li>
                <li class=""><a href="[data-tab-panel-3]">徐汇校区</a></li>
                <li class=""><a href="[data-tab-panel-4]">黄埔校区</a></li>
            </ul>
            <div class="am-tabs-bd">
                <div data-tab-panel-0 class="am-tab-panel am-active">
                    <ul class="am-avg-sm-4">
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/changning/1.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/changning/2.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/changning/3.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/changning/4.png" class="am-img-responsive am-center" /></li>
                    </ul>
                </div>
                <div data-tab-panel-1 class="am-tab-panel ">
                    <ul class="am-avg-sm-4">
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/pudong/1.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/pudong/2.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/pudong/3.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/pudong/4.png" class="am-img-responsive am-center" /></li>
                    </ul>
                </div>
                <div data-tab-panel-2 class="am-tab-panel ">
                    <ul class="am-avg-sm-4">
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/yangpu/1.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/yangpu/2.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/yangpu/3.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/yangpu/4.png" class="am-img-responsive am-center" /></li>
                    </ul>
                </div>
                <div data-tab-panel-3 class="am-tab-panel ">
                    <ul class="am-avg-sm-4">
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/xuhui/1.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/xuhui/2.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/xuhui/3.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/xuhui/4.png" class="am-img-responsive am-center" /></li>
                    </ul>
                </div>
                <div data-tab-panel-3 class="am-tab-panel ">
                    <ul class="am-avg-sm-4">
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/huangpu/1.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/huangpu/2.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/huangpu/3.png" class="am-img-responsive am-center" /></li>
                        <li class="am-padding-sm"><img src="/upload/2018-01-03/huangpu/4.png" class="am-img-responsive am-center" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__Template->display("themes/default/footer_withoutFantastic"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1543560184;}";
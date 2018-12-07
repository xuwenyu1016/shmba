<?php exit;?>001575210687c910e794e24f0533a3fabf1363956746s:5442:"a:2:{s:8:"template";s:5378:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />


<section class="contentContainer am-padding-horizontal-sm am-padding-top-sm">
    <h3 class="noBorder"><?php echo $categoryInfo["name"];?></h3>

    <ul class="am-avg-sm-1 map-block">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>50, "expand_id"=>22, "order"=>"time asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li>
            <div id="<?php echo $list["id"];?>" class="am-margin-vertical-0 am-margin-bottom-sm" style="height: 200px;"></div>
            <p class="am-margin-bottom-0 am-margin-top-sm"><?php echo $list["map"];?></p>
            <p class="am-margin-bottom-sm am-margin-top-0 am-text-xs">地址：<?php echo $list["location"];?><br/>交通：<?php echo $list["traffic"];?></p>
        </li>
        <?php } ?>
    </ul>

</section>

<section class="environments am-padding-horizontal-sm">
    <h3 class="noBorder">校区环境</h3>

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
                <ul class="am-avg-sm-2">
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/changning/1.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/changning/2.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/changning/3.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/changning/4.png" class="am-img-responsive am-center" /></li>
                </ul>
            </div>
            <div data-tab-panel-1 class="am-tab-panel ">
                <ul class="am-avg-sm-2">
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/pudong/1.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/pudong/2.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/pudong/3.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/pudong/4.png" class="am-img-responsive am-center" /></li>
                </ul>
            </div>
            <div data-tab-panel-2 class="am-tab-panel ">
                <ul class="am-avg-sm-2">
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/yangpu/1.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/yangpu/2.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/yangpu/3.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/yangpu/4.png" class="am-img-responsive am-center" /></li>
                </ul>
            </div>
            <div data-tab-panel-3 class="am-tab-panel ">
                <ul class="am-avg-sm-2">
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/xuhui/1.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/xuhui/2.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/xuhui/3.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/xuhui/4.png" class="am-img-responsive am-center" /></li>
                </ul>
            </div>
            <div data-tab-panel-3 class="am-tab-panel ">
                <ul class="am-avg-sm-2">
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/huangpu/1.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/huangpu/2.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/huangpu/3.png" class="am-img-responsive am-center" /></li>
                    <li class="am-padding-xs"><img src="/upload/2018-01-03/huangpu/4.png" class="am-img-responsive am-center" /></li>
                </ul>
            </div>
        </div>
    </div>

</section>





<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543674687;}";
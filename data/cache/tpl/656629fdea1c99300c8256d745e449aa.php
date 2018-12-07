<?php exit;?>001575130174fe7f6ff155bf701abb7d8aa10c3f397bs:6642:"a:2:{s:8:"template";s:6578:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/5f05d299f8fe113d7b27f710ceeb05ec.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime">什么是<b class="en red"><?php echo $categoryInfo["name"];?></b></span>
</h3>

<p class="am-padding-horizontal-sm">MAPACC是专业会计硕士（Master of Professional Accounting，简称MPACC ）是经教育部、国务院学位办批准设立的一种专业学位。</p>

<p class="am-padding-horizontal-sm">培养具有良好职业道德，系统掌握现代会计理论与实务以及相关领域的知识与技能，具备会计工作领导能力的高素质会计人才。</p>

<h3 class="noBorder">
    <span class="num">02</span>
    <span class="prime"><?php echo $categoryInfo["name"];?><b class="en red">报考条件</b></span>
</h3>

<p class="am-padding-horizontal-sm">专科背景：至入学前毕业满2年及以上。</p>

<p class="am-padding-horizontal-sm">本科背景：至入学前毕业即可报考（含应届生）。</p>

<h3 class="noBorder">
    <span class="num">03</span>
    <span class="prime">上海<?php echo $categoryInfo["name"];?><b class="en red">院校有哪些</b></span>
    <a href="/list-yuanXiaoXinXi.html" class="morePlus">more</a>
</h3>

<section class="schoolList am-padding-horizontal-sm">
    <ul class="am-avg-sm-3">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6, "order"=>"time desc", "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['mpacc'] == $categoryInfo['name'] ){ ?>
        <li>
            <div class="innerBox">
                <a href="<?php echo $list["aurl"];?>">
                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                    <p><?php echo $list["title"];?></p>
                </a>
            </div>
        </li>
        <?php } ?>
        <?php } ?>
    </ul>
</section>

<h3 class="noBorder">
    <span class="num">04</span>
    <span class="prime">近期上海<b class="en red"><?php echo $categoryInfo["name"];?>活动</b></span>
</h3>

<div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>31, "sub"=>true, "expand_id"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MPAcc'] ==  $categoryInfo['name']  && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
    <article class="layer">
        <a href="<?php echo $list["aurl"];?>">
            <div class="calender">
                <span><?php echo $list["month"];?></span><span><?php echo $list["date"];?></span>
            </div>
            <div class="classContent">
                <p class="am-text-truncate"><?php echo $list["title"];?></p>
                <p class="am-text-truncate"><?php echo $list["description"];?></p>
                <span>免费试听</span>
            </div>
            <!--<p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>-->

        </a>

    </article>
    <?php } ?>
    <?php } ?>
</div>

<h3 class="noBorder">
    <span class="num">05</span>
    <span class="prime">近期上海<b class="en red"><?php echo $categoryInfo["name"];?>备考试听课</b></span>
</h3>

<div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "sub"=>true, "expand_id"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MPAcc'] ==  $categoryInfo['name']   && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
    <article class="layer">
        <a href="<?php echo $list["aurl"];?>">
            <div class="calender">
                <span><?php echo $list["week"];?></span><span><?php echo date('d',$list["begTime"]);?></span>
            </div>
            <div class="classContent">
                <p class="am-text-truncate"><?php echo $list["title"];?></p>
                <p class="am-text-truncate"><?php echo $list["description"];?></p>
                <span>免费试听</span>
            </div>
            <!--<p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>-->

        </a>

    </article>
    <?php } ?>
    <?php } ?>

</div>

<h3 class="noBorder">
    <span class="num">06</span>
    <span class="prime">上海<?php echo $categoryInfo["name"];?><b class="en red">报考资讯</b></span>
</h3>

<div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "sub"=>true , "expand_id"=>14));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MPAcc'] ==  $categoryInfo['name']  ){ ?>
    <article class="layer">
        <a href="<?php echo $list["aurl"];?>">
            <div class="imgBox">
                <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
            </div>
            <div class="classContent">
                <p class="am-text-truncate"><?php echo $list["title"];?></p>
                <p class="am-text-truncate"><?php echo $list["description"];?></p>
            </div>
        </a>

    </article>
    <?php } ?>
    <?php } ?>

</div>

<h3 class="noBorder">
    <span class="num">07</span>
    <span class="prime">上海华章<b class="en red"><?php echo $categoryInfo["name"];?>辅导课程</b></span>
</h3>

<?php $__Template->display("themes/mobile/threeClasses"); ?>

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543594174;}";
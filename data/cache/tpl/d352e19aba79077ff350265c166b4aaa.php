<?php exit;?>001575082942c78c8283d773b907052d9fe7302ab51es:7093:"a:2:{s:8:"template";s:7029:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/0f5849b2e92c9205c7abb04e58be666a.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime">什么是<b class="en red"><?php echo $categoryInfo["name"];?></b></span>
</h3>

<p class="am-padding-horizontal-sm">EMBA是指高级管理人员工商管理硕士，旨在培养具有高度政治素养、责任心和职业道德的中、高层管理者。</p>

<p class="am-padding-horizontal-sm">通过系统学习，全面掌握现代企业管理理论和决策方法，深入了解国内外企业的商业模式，具备在复杂的国内外经济、社会和技术环境下制定企业发展战略、进行企业日常经营管理决策、领导企业参与国内外竞争的能力和知识。</p>

<p class="am-padding-horizontal-sm">自2017年起，高级管理人员工商管理硕士 （EMBA）已纳入全国统一的硕士研究生入学，依据教育部划定统一专业学位分数线招生。</p>

<h3 class="noBorder">
    <span class="num">02</span>
    <span class="prime"><?php echo $categoryInfo["name"];?><b class="en red">报考条件</b></span>
</h3>

<p class="am-padding-horizontal-sm">具有大学本科或者本科以上学历（一般应有学士学位）。</p>

<p class="am-padding-horizontal-sm">有8年或8年以上工作经历（其中应有4年或4年以上的管理工作经历）。</p>

<p class="am-padding-horizontal-sm">较大规模企业的现职高层管理人员。</p>

<h3 class="noBorder">
    <span class="num">03</span>
    <span class="prime">上海<?php echo $categoryInfo["name"];?><b class="en red">院校有哪些</b></span>
    <a href="/list-yuanXiaoXinXi.html" class="morePlus">more</a>
</h3>

<section class="schoolList am-padding-horizontal-sm">
    <ul class="am-avg-sm-3">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['emba'] == $categoryInfo['name'] ){ ?>
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
    <?php if ( $list['EMBA'] ==  $categoryInfo['name']  && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
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
    <?php if ( $list['EMBA'] ==  $categoryInfo['name']  && date('Y-m-d',$list['time']) >=  date("Y-m-d") ){ ?>
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
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "sub"=>true, "expand_id"=>14));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['EMBA'] ==  $categoryInfo['name']  ){ ?>
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

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543546942;}";
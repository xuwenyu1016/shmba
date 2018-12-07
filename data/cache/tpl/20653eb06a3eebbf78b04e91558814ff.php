<?php exit;?>001551874970b9b09f8017320f0680584c05224f91cas:6903:"a:2:{s:8:"template";s:6839:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-01-04/7bdd541babdfc6788b5eacfefa052824.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime">什么是<b class="en red"><?php echo $categoryInfo["name"];?></b></span>
</h3>

<p class="am-padding-horizontal-sm">MBA是英文Master Of Business Administration（工商管理硕士）的简称。</p>

<p class="am-padding-horizontal-sm">工商管理硕士是源于欧美国家的一种专门培养中高级职业经理人员的专业硕士学位。工管硕士是市场经济的产物，培养的是高素质的管理人员、职业经理人和创业者。</p>

<p class="am-padding-horizontal-sm">工商管理硕士是商业界普遍认为是晋身管理阶层的一块垫脚石。现时不少学校为了开拓财源增加收入，都与世界知名大学商学院学术合作，销售他们的工商管理硕士课程。</p>

<p class="am-padding-horizontal-sm">工商管理硕士培养的是高质量的职业工商管理人才，使他们掌握生产、财务、金融、营销、经济法规、国际商务等多学科知识和管理技能。</p>

<h3 class="noBorder">
    <span class="num">02</span>
    <span class="prime"><?php echo $categoryInfo["name"];?><b class="en red">报考条件</b></span>
</h3>

<p class="am-padding-horizontal-sm">专科背景：至入学前毕业满5年及以上。</p>

<p class="am-padding-horizontal-sm">本科背景：至入学前毕业满3年及以上。</p>

<p class="am-padding-horizontal-sm">硕博背景：至入学前毕业满2年及以上。</p>

<p class="am-padding-horizontal-sm">海外留学：需要教育部认证的学历证书。</p>

<h3 class="noBorder">
    <span class="num">03</span>
    <span class="prime">上海<?php echo $categoryInfo["name"];?><b class="en red">院校有哪些</b></span>
</h3>

<section class="schoolList am-padding-horizontal-sm">
    <ul class="am-avg-sm-3">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "order"=>"time desc" , "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li>
            <div class="innerBox">
                <a href="<?php echo $list["aurl"];?>">
                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                    <p><?php echo $list["title"];?></p>
                </a>
            </div>
        </li>
        <?php } ?>
    </ul>
</section>

<h3 class="noBorder">
    <span class="num">04</span>
    <span class="prime">近期上海<b class="en red"><?php echo $categoryInfo["name"];?>活动</b></span>
</h3>

<div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm targetLayer">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>31, "sub"=>true, "expand_id"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MBA'] ==  $categoryInfo['name']  ){ ?>
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
            <p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>

        </a>

    </article>
    <?php } ?>
    <?php } ?>
</div>

<h3 class="noBorder">
    <span class="num">05</span>
    <span class="prime">近期上海<b class="en red"><?php echo $categoryInfo["name"];?>备考试听课</b></span>
</h3>

<div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm targetLayer">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "sub"=>true, "expand_id"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MBA'] ==  $categoryInfo['name']  ){ ?>
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
            <p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>

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
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "sub"=>true, "limit"=>3 , "expand_id"=>14));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MBA'] ==  $categoryInfo['name']  ){ ?>
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

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1520338970;}";
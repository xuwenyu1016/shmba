<?php exit;?>001551901920e06a8e18eb58a5cdea3c0337fbba69a5s:6755:"a:2:{s:8:"template";s:6691:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-13/c8383220772250daf54d5d56f50609a2.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<h3 class="noBorder">
    <span class="num">01</span>
    <span class="prime">什么是<b class="en red"><?php echo $categoryInfo["name"];?></b></span>
</h3>

<p class="am-padding-horizontal-sm">MPA 是公共管理硕士(Master of Public Administration) 专业学位的英文简称， 是以公共管理学科及其他相关学科为基础的研究生教育项目。</p>

<p class="am-padding-horizontal-sm">目标是为政府部门及公共机构培养德才兼备、适应社会主义现代化建设需要的高层次、应用型、复合型的管理人才。</p>

<p class="am-padding-horizontal-sm">公共管理学是一门运用管理学、政治学、经济学等多学科理论与方法，专门研究公共组织尤其是政府组织的管理活动及其规律的学科体系。</p>

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
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6, "order"=>"time desc", "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['mpa'] == $categoryInfo['name'] ){ ?>
        <li>
            <div class="innerBox">
                <a href="<?php echo $list["aurl"];?>">
                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                    <p><?php echo $list["description"];?></p>
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

<div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm targetLayer">">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>31, "sub"=>true, "expand_id"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MPA'] ==  $categoryInfo['name']  ){ ?>
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

<div class="layerBox am-padding-horizontal-sm am-padding-bottom-sm targetLayer">">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "sub"=>true, "expand_id"=>8));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MPA'] ==  $categoryInfo['name']  ){ ?>
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
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "sub"=>true , "expand_id"=>14));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['MPA'] ==  $categoryInfo['name']  ){ ?>
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

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1520365920;}";
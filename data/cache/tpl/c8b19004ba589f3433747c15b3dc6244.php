<?php exit;?>001575328628c4628543754463b4cf631222e6e9e50as:6490:"a:2:{s:8:"template";s:6426:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-03-10/18.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="chongci-schools am-padding-sm">
    <article>
        <p class="am-margin-vertical-xs am-text-center">*国庆报班优惠 加入樊登读书会减1000。</p>
        <p class="am-margin-vertical-xs am-text-center">（仅限报名两阶段以上班级享受此次活动，单阶段不享受此次活动折扣）</p>
        <img src="/upload/2018-03-10/2.png" class="am-img-responsive am-center am-margin-vertical-sm" alt="<?php echo $categoryInfo["name"];?>" />
        <p class="am-margin-vertical-xs am-text-center">上海华章教育培训有限公司自2005年成立至今连续13年同机械工业出版社以及高等教育出版社合作，共同承担管理类硕士联考领域权威教材策划和编写工作，组建了以该系列教材作者为班底的师资团队，被誉为:导师“梦之队”。所有授课老师MBA辅导经验均超过7年以上！汇聚机械工业出版社四大分册主编，笔试通过率高！</p>
    </article>
</section>

<section class="chongci-teacher am-padding-sm">
    <article>

        <img src="/upload/2018-03-10/3.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />
        <p class="am-margin-vertical-xs">官方指定机工版，高教版教材四大主编，导师授课，华章的老师不仅教学经验丰富，更擅长于培养学员用简单的思路巧妙解决难题。</p>


        <div class="teacher-container am-margin-top-lg">
            <img src="/upload/2018-03-10/5.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />

            <div class="container-info">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc", "limit"=>1, "not_id"=>"129"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <p class="am-margin-vertical-0 am-text-sm"><b><?php echo $list["title"];?></b></p>
                <p class="am-margin-vertical-0 am-text-sm"><b>华章<?php echo $list["subject"];?>导师</b></p>
                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["briefIntro"];?></p>
                <?php } ?>
            </div>

        </div>

        <div class="teacher-container">
            <img src="/upload/2018-03-10/6.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />

            <div class="container-info">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>1, "not_id"=>"129,22"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <p class="am-margin-vertical-0 am-text-sm"><b><?php echo $list["title"];?></b></p>
                <p class="am-margin-vertical-0 am-text-sm"><b>华章<?php echo $list["subject"];?>导师</b></p>
                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["briefIntro"];?></p>
                <?php } ?>
            </div>
        </div>

        <div class="teacher-container">
            <img src="/upload/2018-03-10/4.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />
            <div class="container-info">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>1, "not_id"=>"129,22,23"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <p class="am-margin-vertical-0 am-text-sm"><b><?php echo $list["title"];?></b></p>
                <p class="am-margin-vertical-0 am-text-sm"><b>华章<?php echo $list["subject"];?>导师</b></p>
                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["briefIntro"];?></p>
                <?php } ?>
            </div>
        </div>

        <div class="teacher-container">
            <img src="/upload/2018-03-10/7.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />
            <div class="container-info">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>1, "not_id"=>"129,22,23,24"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <p class="am-margin-vertical-0 am-text-sm"><b><?php echo $list["title"];?></b></p>
                <p class="am-margin-vertical-0 am-text-sm"><b>华章<?php echo $list["subject"];?>导师</b></p>
                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["briefIntro"];?></p>
                <?php } ?>
            </div>
        </div>

    </article>
</section>

<section class="chongci-class am-padding-sm">
    <article>
        <img src="/upload/2018-03-10/8.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />

        <img src="/upload/2018-03-10/19.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />

    </article>
</section>

<section class="chongci-discount am-padding-sm">
    <article>
        <img src="/upload/2018-03-10/9.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />

        <ul class="am-avg-sm-1 am-margin-vertical-lg class-prices">
            <li>
                <p class="am-margin-0">模考+突破+集训=12666 &emsp;集训+突破=9800</p>
            </li>

            <li>
                <p class="am-margin-0">模考+突破=9800 &emsp;&emsp;模考+集训=10666</p>
            </li>

        </ul>


    </article>
</section>

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>

";s:12:"compile_time";i:1543792628;}";
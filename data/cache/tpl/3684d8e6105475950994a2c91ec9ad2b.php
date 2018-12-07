<?php exit;?>0015750867049c77d26db086ea1187df44f0c11e5419s:1451:"a:2:{s:8:"template";s:1387:"﻿<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<div class="am-container">
    <article class="question-box am-padding-vertical-xl">
        <h2><?php echo $categoryInfo["name"];?></h2>

        <?php if ( $categoryInfo['name'] ==  '关于我们' && $_SERVER['HTTP_HOST'] ==  'www.hz-mba.com'  ){ ?>
        <p class="am-padding-top-sm am-show-md-up">
            上海华章教育培训有限公司（以下简称华章）MBA考前辅导专业机构，以“全程个性化辅导、专业教务管理、把握联考信息、精选全国导师、联考高通过率”等优势而闻名于联考培训领域，被学员誉为“名校MBA专业培训机构”。
        </p>
        <?php }else{ ?>
        <p class="am-padding-top-sm am-show-md-up">
            上海华彰教育信息咨询有限公司（以下简称华章）MBA考前辅导专业机构，以“全程个性化辅导、专业教务管理、把握联考信息、精选全国导师、联考高通过率”等优势而闻名于联考培训领域，被学员誉为“名校MBA专业培训机构”。
        </p>
        <?php } ?>

        <?php echo $categoryInfo["content"];?>


    </article>
</div>



<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>


";s:12:"compile_time";i:1543550704;}";
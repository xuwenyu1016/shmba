<?php exit;?>001575210687fdea84d4ccc4180aaf72297254a2d2aes:1404:"a:2:{s:8:"template";s:1340:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<article class="question-box am-padding-sm">
    <h3><span class="core"><?php echo $categoryInfo["name"];?></span></h3>

    <?php if ( $categoryInfo['name'] ==  '关于我们' && $_SERVER['HTTP_HOST'] ==  'www.hz-mba.com'  ){ ?>
    <p class="am-padding-top-sm">
        上海华章教育培训有限公司（以下简称华章）MBA考前辅导专业机构，以“全程个性化辅导、专业教务管理、把握联考信息、精选全国导师、联考高通过率”等优势而闻名于联考培训领域，被学员誉为“名校MBA专业培训机构”。    </p>
    <?php }else{ ?>
    <p class="am-padding-top-sm">
        上海华彰教育信息咨询有限公司（以下简称华章）MBA考前辅导专业机构，以“全程个性化辅导、专业教务管理、把握联考信息、精选全国导师、联考高通过率”等优势而闻名于联考培训领域，被学员誉为“名校MBA专业培训机构”。    </p>
    <?php } ?>

   <?php echo $categoryInfo["content"];?>
</article>


<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>
";s:12:"compile_time";i:1543674687;}";
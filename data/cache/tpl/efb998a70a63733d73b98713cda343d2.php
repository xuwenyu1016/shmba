<?php exit;?>001575082738f7715bcd268d2ce3c325233dbe9bfedas:1406:"a:2:{s:8:"template";s:1342:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-01-03/7482c23efc251f702d90c0d0a7f2c88d.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />


<section class="am-padding-sm">
    <h3><span class="leftBrackets">[</span><span class="core">试听课</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>
    <div class="layerBox">
        <?php foreach ($pageList as $vo) { ?>
        <article class="layer">
            <a href="<?php echo $vo["aurl"];?>">
                <div class="calender">
                    <span><?php echo $vo["week"];?></span><span><?php echo date('d',$vo["begTime"]);?></span>
                </div>
                <div class="classContent">
                    <p class="am-text-truncate"><?php echo $vo["subject"];?>课程</p>
                    <p class="am-text-truncate"><?php echo $vo["description"];?></p>
                    <span>免费试听</span>
                </div>
            </a>

        </article>
        <?php } ?>
        <div class="page"><?php echo $page;?></div>

    </div>
</section>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>

";s:12:"compile_time";i:1543546738;}";
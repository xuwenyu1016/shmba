<?php exit;?>0015751373656b459b2e3a842e97d5d8930499818bd3s:9520:"a:2:{s:8:"template";s:9456:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<style>
    .mpacc-intro{background: url(/upload/2018-08-05/11.jpg) center no-repeat;width: 100%; height: 2500px;background-size: contain;}
    .mpacc-intro .mpacc-title{font-weight: bold;font-size: 24px;}
    .mpacc-intro .grey{color: #696969;}
    .mpacc-intro .para-indent{text-indent: 40px;}
    .mpacc-intro article .am-slider{box-shadow: none;background-color: white;}
    .mpacc-intro article .am-slider ul li div{width: 90%;margin: 0 auto;}
    .mpacc-intro article .am-slider ul li div img{width: 85%;}
    .mpacc-intro .schedule-table{width: 800px;}

    .mpacc-reserve{background: url(/upload/2018-08-05/10.png) center no-repeat;width: 100%; height: 500px;background-size: contain;padding-top: 160px;}
    .mpacc-reserve h2{color: white;}
    .mpacc-reserve form{width: 45%;margin-left: auto;margin-right: auto;}
    .mpacc-reserve form .formContainer{margin: 15px auto;}
    .mpacc-reserve form .checkcode input{width: 150px;}
</style>

<img src="/upload/2018-08-05/1.png" alt="<?php echo $categoryInfo["name"];?>" class="am-img-responsive am-center"/>

<section class="mpacc-intro am-padding-vertical-xl">
    <div class="am-container">
        <article class="am-padding-vertical-lg">
            <div class="mpacc-title"><img src="/upload/2018-08-05/2.png" class="am-vertical-align-bottom" alt="<?php echo $categoryInfo["name"];?>" /> MPAcc介绍</div>
            <p class="para-indent am-margin-top-sm am-margin-bottom-0">会计硕士专业学位又称专业会计硕士（Master of Professional Accounting，简称MPAcc）是经教育部、国务院学位办批准设立的一种专业学位。会计硕士专业学位的目标是培养具有良好职业道德， 系统掌握现代会计理论与实务以及相关领域的知识与技能，具备会计工作领导能力的高素质会计人才。</p>
        </article>

        <article class="am-padding-vertical-bottom">
            <div class="mpacc-title"><img src="/upload/2018-08-05/3.png" class="am-vertical-align-bottom" alt="<?php echo $categoryInfo["name"];?>" /> 会计硕士(MPAcc)适用人群</div>

            <p class="am-margin-top-sm am-margin-bottom-xs">1、大学本科毕业生就可以。</p>
            <p class="am-margin-vertical-xs">2、国家承认的高职高专毕业学历后，满2年或2年以上工作经历的人都可以报考会计硕士。</p>
            <p class="am-margin-vertical-xs">3、以下几种考生更适合考研：</p>

            <ul class="am-margin-top-xs">
                <li>有志于深化本专业学习的考生，希望提升自己的理论与实践能力;</li>
                <li>为了兴趣决定放弃本专业的跨专业的考生;</li>
                <li>希望通过学习提高或扩展自己的知识层次的考生。</li>
            </ul>
        </article>

        <article class="am-padding-bottom-xl">
            <div class="mpacc-title"><img src="/upload/2018-08-05/4.png" class="am-vertical-align-bottom" alt="<?php echo $categoryInfo["name"];?>" /> MPAcc高校学费、录取分数</div>

            <img src="/upload/2018-08-05/5.png" alt="<?php echo $categoryInfo["name"];?>" class="schedule-table am-img-responsive am-center am-margin-top-lg"/>
        </article>

        <article class="am-padding-bottom-xl">
            <div class="mpacc-title"><img src="/upload/2018-08-05/6.png" class="am-vertical-align-bottom" alt="<?php echo $categoryInfo["name"];?>" /> 华章导师</div>

            <div data-am-widget="slider" class="am-slider am-slider-b3" data-am-slider='{"controlNav":false}' >
                <ul class="am-slides">
                    <li>
                        <ul class="am-avg-sm-4">
                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "limit"=>"4", "order"=>"time asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <li>
                                <div>
                                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                    <p class="am-text-center am-margin-top-sm am-margin-bottom-xs"><?php echo $list["title"];?></p>
                                    <p class="am-margin-vertical-xs am-text-sm"><?php echo $list["description"];?></p>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>

                    </li>
                    <li>
                        <ul class="am-avg-sm-4">
                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "limit"=>"4", "order"=>"time asc", "not_id"=>"129,22,23,24"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <li>
                                <div>
                                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                    <p class="am-text-center am-margin-top-sm am-margin-bottom-xs"><?php echo $list["title"];?></p>
                                    <p class="am-margin-vertical-xs am-text-sm"><?php echo $list["description"];?></p>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li>
                        <ul class="am-avg-sm-4">
                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "limit"=>"4", "order"=>"time asc", "not_id"=>"129,22,23,24,25,31,30,27"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <li>
                                <div>
                                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                    <p class="am-text-center am-margin-top-sm am-margin-bottom-xs"><?php echo $list["title"];?></p>
                                    <p class="am-margin-vertical-xs am-text-sm"><?php echo $list["description"];?></p>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </article>

        <article class="">
            <div class="mpacc-title"><img src="/upload/2018-08-05/7.png" class="am-vertical-align-bottom" alt="<?php echo $categoryInfo["name"];?>" /> MPAcc课程设置</div>

            <p class="am-margin-vertical-sm grey am-text-center"><b>线下面授班</b></p>
            <img src="/upload/2018-08-05/8.png" alt="<?php echo $categoryInfo["name"];?>" class="schedule-table am-center am-img-responsive am-margin-bottom-lg"/>

            <p class="am-margin-vertical-sm grey am-text-center"><b>移动互联课程班</b></p>
            <img src="/upload/2018-08-05/9.png" alt="<?php echo $categoryInfo["name"];?>" class="schedule-table am-center am-img-responsive"/>
        </article>
    </div>
</section>

<section class="mpacc-reserve">
    <div class="am-container">
        <h2>立即预约 <span class="borderSpan"></span></h2>

        <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit am-margin-vertical-lg">


            <div class="formContainer">
                <input type="text" name="name" placeholder="姓名："/>
            </div>
            <div class="formContainer">
                <input type="tel" name="tel" placeholder="手机号："/>
            </div>

            <div class="formContainer checkcode">
                <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码：">
                <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
            </div>


            <div class="formContainer">
                <input name="time" type="hidden" />
                <input name="link" type="hidden" />
                <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                <input name="browserType" type="hidden" />
                <input name="ip" type="hidden" />

                <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                <input type="hidden" name="table" value="guestbook">
                <button type="submit">提交</button>
            </div>

        </form>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1543601365;}";
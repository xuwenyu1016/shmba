<?php exit;?>0015752106444fb2856c8b8e615dc135e83d75a5b9ebs:11349:"a:2:{s:8:"template";s:11284:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<a href="#dianti-formbox">
    <img src="/upload/2017-11-04/11.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
</a>

<section class="dianti-intro am-padding-sm">

    <img src="/upload/2017-11-04/3.png" class="am-img-responsive am-center" width="200" alt="<?php echo $categoryInfo["name"];?>" />

    <table class="am-table am-margin-top-sm">
        <thead>
        <tr>
            <th>课程名称</th>
            <th>时段、课时</th>

            <th>学费</th>
            <th>开班地点、开班时间</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>模拟点题班</td>
            <td>10-12月<br/>128课时</td>
            <td>8680元</td>
            <td>长宁(10.13)<br/>徐汇(10.13)<br/>杨浦(10.13)<br/>浦东(10.13)<br/>苏州(10.13)</td>
        </tr>
        </tbody>
    </table>

</section>

<section class="dianti-arrange">

    <img src="/upload/2017-11-04/4.png" class="am-img-responsive am-center am-margin-bottom-sm" width="200" alt="<?php echo $categoryInfo["name"];?>" />

    <div data-am-widget="tabs" class="am-tabs am-tabs-default ">
        <ul class="am-tabs-nav am-cf am-avg-sm-6">
            <li class="am-active"><a href="[data-tab-panel-0]">长宁校区</a></li>
            <li class=""><a href="[data-tab-panel-1]">徐汇校区</a></li>
            <li class=""><a href="[data-tab-panel-2]">杨浦校区</a></li>
            <li class=""><a href="[data-tab-panel-3]">浦东校区</a></li>
            <li class=""><a href="[data-tab-panel-4]">30人小班</a></li>
            <li class=""><a href="[data-tab-panel-5]">苏州校区</a></li>
        </ul>
        <div class="am-tabs-bd">
            <div data-tab-panel-0 class="am-tab-panel am-active">
                <img src="/upload/2017-11-04/changning.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
            </div>
            <div data-tab-panel-1 class="am-tab-panel ">
                <img src="/upload/2017-11-04/xuhui.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
            </div>
            <div data-tab-panel-2 class="am-tab-panel ">
                <img src="/upload/2017-11-04/yangpu.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
            </div>
            <div data-tab-panel-3 class="am-tab-panel ">
                <img src="/upload/2017-11-04/pudong.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
            </div>
            <div data-tab-panel-4 class="am-tab-panel ">
                <img src="/upload/2017-11-04/30.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
            </div>
            <div data-tab-panel-5 class="am-tab-panel ">
                <img src="/upload/2017-11-04/suzhou.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
            </div>
        </div>
    </div>

</section>

<div class="dianti-reason am-padding-sm">

    <img src="/upload/2017-11-04/5.png" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $categoryInfo["name"];?>" />

    <p class="am-text-center am-margin-vertical-0 sub-head">实战检验 更胜一筹</p>

    <ul class="am-avg-sm-3 am-margin-vertical-sm">
        <li>
            <img src="/upload/2017-11-04/6.png" alt="<?php echo $categoryInfo["name"];?>" class="am-img-responsive am-center">
        </li>
        <li>
            <img src="/upload/2017-11-04/7.png" alt="<?php echo $categoryInfo["name"];?>" class="am-img-responsive am-center">
        </li>
        <li>
            <img src="/upload/2017-11-04/8.png" alt="<?php echo $categoryInfo["name"];?>" class="am-img-responsive am-center">
        </li>
    </ul>

    <p class="details am-text-xs">*短期突击，学做各种题型，迅速提高分数，提高做题速度和准确率，综合学习知识，融汇贯通。<br/>华章模拟试卷的题目也很荣幸的每年出现在管理类联考考试题目当中！</p>

</div>

<div class="dianti-teacher am-padding-horizontal-sm">

    <img src="/upload/2017-11-04/9.png" class="am-img-responsive am-center am-margin-bottom-sm" width="200" alt="<?php echo $categoryInfo["name"];?>" />

    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{"controlNav":false}'>
        <ul class="am-slides">
            <li>
                <ul class="am-avg-sm-2">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "order"=>"time asc", "expand_id"=>7, "limit"=>"20"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <?php if ( $list['data_id'] == 22 || $list['data_id'] == 23  ){ ?>
                    <li>
                        <article>
                            <a href="<?php echo $list["aurl"];?>">
                                <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                <p class="am-text-center am-text-sm am-margin-vertical-xs"><?php echo $list["title"];?></p>
                                <p class="am-text-xs am-margin-vertical-xs"><?php echo $list["briefIntro"];?></p>
                            </a>
                        </article>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-2">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "order"=>"time asc", "expand_id"=>7, "limit"=>"20"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <?php if ( $list['data_id'] == 24 || $list['data_id'] == 25 ){ ?>
                    <li>
                        <article>
                            <a href="<?php echo $list["aurl"];?>">
                                <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                <p class="am-text-center am-text-sm am-margin-vertical-xs"><?php echo $list["title"];?></p>
                                <p class="am-text-xs am-margin-vertical-xs"><?php echo $list["briefIntro"];?></p>
                            </a>
                        </article>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-2">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "order"=>"time asc", "expand_id"=>7, "limit"=>"20"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <?php if ( $list['data_id'] == 31 || $list['data_id'] == 26  ){ ?>
                    <li>
                        <article>
                            <a href="<?php echo $list["aurl"];?>">
                                <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                <p class="am-text-center am-text-sm am-margin-vertical-xs"><?php echo $list["title"];?></p>
                                <p class="am-text-xs am-margin-vertical-xs"><?php echo $list["briefIntro"];?></p>
                            </a>
                        </article>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-2">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "order"=>"time asc", "expand_id"=>7, "limit"=>"20"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <?php if ( $list['data_id'] == 28 || $list['data_id'] == 27 ){ ?>
                    <li>
                        <article>
                            <a href="<?php echo $list["aurl"];?>">
                                <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                <p class="am-text-center am-text-sm am-margin-vertical-xs"><?php echo $list["title"];?></p>
                                <p class="am-text-xs am-margin-vertical-xs"><?php echo $list["briefIntro"];?></p>
                            </a>
                        </article>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>

    <p class="details am-text-xs">*试卷出题人： 袁进&emsp;张宇&emsp;孙勇&emsp;陈君华&emsp;张惠恩&emsp;王帅&emsp;马全海&emsp;苏楠楠 </p>


</div>

<div class="dianti-formbox am-padding-sm" id="dianti-formbox">

    <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit">
        <p class="am-margin-vertical-sm am-text-center">立即预约试听</p>

        <div class="formContainer">
            <input name="name" type="text" placeholder="请输入姓名："/>
        </div>

        <div class="formContainer">
            <input name="tel" type="tel" placeholder="请输入手机号："/>
        </div>
        <div class="formContainer validate">

            <input name="checkcode" type="text" maxlength="4" size="4" placeholder="请输入验证码：" class="am-margin-right-sm" />
            <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />

            <input name="time" type="hidden" />
            <input name="link" type="hidden" />
            <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
            <input name="browserType" type="hidden" />
            <input name="ip" type="hidden" />

            <input name="table" type="hidden" value="guestbook">
            <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>



        </div>
        <div class="formContainer">
            <button type="submit">提&nbsp;交</button>
        </div>
    </form>

    <!--<img src="/upload/2017-11-04/10.png" class="am-img-responsive" alt="<?php echo $categoryInfo["name"];?>" />-->

</div>


<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>
";s:12:"compile_time";i:1543674644;}";
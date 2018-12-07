<?php exit;?>001575124630b24f39f1e501508d30a252b171d33842s:9605:"a:2:{s:8:"template";s:9541:"﻿
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>


<img src="/upload/2018-02-28/30.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="jichu-intro am-padding-sm">
    <h3 class="noBorder am-margin-bottom-xs">参加「MBA预热班」，抢占先机</h3>
    <h4 class="am-text-sm am-margin-vertical-xs">课程介绍：从零起步，了解专业报考流程、院校选择、考试大纲、各科复习方法。<br/>
        适合学员：工作时间较长、数学预热薄弱、英语预热薄弱，想一次性通过MBA联考的考生。</h4>

    <ul class="am-avg-sm-3">
        <li class="am-padding-vertical-sm">
            <div class="innerBox">
                <img src="/upload/2018-02-28/2.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p>MBA就业前景</p>
            </div>
        </li>
        <li class="am-padding-vertical-sm">
            <div class="innerBox">
                <img src="/upload/2018-02-28/3.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p>MBA背景评估</p>
            </div>
        </li>
        <li class="am-padding-vertical-sm">
            <div class="innerBox">
                <img src="/upload/2018-02-28/4.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p>择校指导</p>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2018-02-28/5.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p>名校MBA招官<br/>面对面</p>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2018-02-28/6.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p>提前预热</p>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2018-02-28/7.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p>品牌实力</p>
            </div>
        </li>
    </ul>

    <button class="signUp" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 310, height: 240}">预约咨询</button>
</section>

<section class="jichu-class-detail am-padding-sm">
    <h3 class="noBorder am-margin-bottom-xs">各校区近期开班</h3>

    <table class="am-table am-margin-top-sm">
        <thead>
        <tr>
            <th>校区</th>
            <th>剩余名额</th>
            <th>地址</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td class="am-text-center">长宁预热班</td>
            <td class="am-text-center">2018年11月18日</td>
            <td>长宁区定西路1300号业余大学2号楼</td>
        </tr>
        <tr>
            <td class="am-text-center">徐汇预热班</td>
            <td class="am-text-center">2018年12月16日</td>
            <td>徐汇区曹溪北路88号圣爱大厦7楼706</td>
        </tr>
        <tr>
            <td class="am-text-center">浦东预热班	</td>
            <td class="am-text-center">2018年12月29日</td>
            <td>浦东源深路158号上海海事职业技术学院内</td>
        </tr>
        <tr>
            <td class="am-text-center">杨浦预热班</td>
            <td class="am-text-center">2019年1月5日</td>
            <td>杨浦区控江路2063号五环大厦西座3楼第一教室</td>
        </tr>
        </tbody>
    </table>
</section>

<section class="jichu-specific-class am-padding-sm">
    <h3 class="noBorder am-margin-bottom-xs">预热班开班课程，公益课堂</h3>
    <h4 class="am-text-sm am-margin-vertical-xs">上海华章MBA预热班开班，导师全程零预热教学，解析联考英语、 数学报考流程、院校选择、考试大纲、及复习方法</h4>
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
    <?php if ( $list['title'] ==  $categoryInfo['teacher1']  ){ ?>

    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["name"];?>" />

    <p><?php echo $categoryInfo["name1"];?></p>
    <p><?php echo $list["subject"];?>导师-<?php echo $list["title"];?></p>

    <p>活动时间:<?php echo $categoryInfo["time1"];?></p>
    <p>上课地点:<?php echo $categoryInfo["address1"];?></p>

    <p><?php echo $categoryInfo["description1"];?></p>

    <button class="signUp" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 310, height: 240}">预约课程试听</button>

    <?php } ?>
    <?php } ?>
    <h4 class="am-text-sm am-margin-bottom-xs am-margin-top-lg am-text-center am-text-danger">现在备考，成功考取MBA</h4>
    <p>1. 充足的时间准备MBA备考（精心的雕琢，全方位的定制）</p>
    <p>2. 夯实英语词汇和数学基础（扎实基础直接轻松通过联考）</p>
</section>

<section class="jichu-teacher am-padding-sm">
    <h3 class="noBorder am-margin-bottom-xs">上海华章授课导师</h3>
    <div data-am-widget="slider" class="am-slider am-slider-default" data-am-flexslider="{itemWidth:100, itemMargin: 5, minItems:3, maxItems:3, slideshow: true}">
        <ul class="am-slides">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li>
                <div class="innerBox">
                    <a href="<?php echo $list["aurl"];?>" target="_blank">
                        <img src="<?php echo $list["circleImg"];?>" alt="<?php echo $list["subject"];?>导师-<?php echo $list["title"];?>" />
                        <p class="am-text-center"><?php echo $list["subject"];?>导师 <?php echo $list["title"];?></p>
                    </a>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
    <button class="signUp" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 310, height: 240}">立即预约</button>
</section>

<section class="jichu-gifts am-padding-sm">
    <h3 class="noBorder am-margin-bottom-xs">MBA联考资料免费领</h3>
    <h4 class="am-text-sm am-margin-vertical-xs">微信预约即送价值<span class="am-text-danger">500元</span>备考大礼包<br/>活动优惠限<span class="am-text-danger">前100位</span>，名额有限，快快预约报名吧！</h4>
    <p>华章核心资料：</p>

    <p>《数学公式手册》、《数学分册》、《MBA联考历年真题册》、《各大院校简章》、华章精美笔记本</p>
    <img src="/upload/2018-02-28/9.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
</section>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">立即预约
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit am-margin-bottom-lg">

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
                    <button type="submit" id="submitFormButton">点击提交</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>";s:12:"compile_time";i:1543588630;}";
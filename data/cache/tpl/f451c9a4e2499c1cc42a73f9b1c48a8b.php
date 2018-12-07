<?php exit;?>001575127648fa8e7290fc67bfbce7af2fbb5f1bf2c1s:4904:"a:2:{s:8:"template";s:4840:"﻿
<?php $__Template->display("themes/mobile/head_index"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-04-02/8.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="freeclass-interview-guide am-padding-sm">
    <h3 class="noBorder lineHigh-sm">上海华章提前面试免费课程之<br/>MBA面试成功着装指南</h3>

    <img src="/upload/2018-04-02/3.png" class="am-img-responsive am-center" width="150" alt="<?php echo $categoryInfo["name"];?>" />

    <ul>
        <li>
            <p>MBA面试近在眼前，忙着做各种准备的你，有没有想过自己该以怎样的形象出现在面试官面前？</p>
        </li>
        <li>
            <p>不少同学都已经是“面试达人”，甚至有的同学自己就做过单位里的面试官。然而，什么样的着装才算MBA面试的正确打开方式，怎样在让考官对你产生好印象，这个可没那么简单！</p>
        </li>
        <li>
            <p>您还真别不信，根据我们对多位面试官的访谈，每一届面试中，我们都能找到大把的同学，要么潇洒过头“Free Style”爆表，要么用力过猛变成中介小哥小妹Cosplay，因此而影响了面试成绩，这让我们觉得分外惋惜。</p>
        </li>
        <li>
            <p>什么样的着装要求才算是MBA面试的标准？</p>
        </li>
        <li>
            <p>38°的天气男生到底是打不打领带，要不要穿西装外套？女生该怎样恰到好处的穿出商务范儿？……</p>
        </li>
    </ul>
</section>

<section class="freeclass-invitation-guest am-padding-sm">
    <h3 class="noBorder lineHigh-sm">本次课堂请到的是</h3>

    <img src="/upload/2018-04-02/2.png" class="am-img-responsive am-center" width="150" alt="<?php echo $categoryInfo["name"];?>" />

    <p><b>冀耀武</b> 先生</p>
    <p>同时获得交大、复旦MBA面试优异成绩（2015年），西装定制领域的跨界创业者 <b>冀耀武</b> 先生，与您分享满满的MBA面试干货知识。</p>
    <p>主讲内容：</p>
    <p>1.MBA面试的本质是什么？</p>
    <p>2.怎样通过着装提升你的气场</p>
    <p>3.在眼花缭乱的男女西装成衣、定制中如何做出挑选</p>
    <p>4.……</p>
    <p>课程时间：2018年 4 月13 日 18:30</p>
    <p>课程地址：上海市长宁区定西路1300号2号楼402</p>
    <p>名额限制：70人</p>

    <button class="signUp" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 240}">已结束</button>
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

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>
";s:12:"compile_time";i:1543591648;}";
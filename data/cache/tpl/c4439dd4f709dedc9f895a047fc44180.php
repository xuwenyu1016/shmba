<?php exit;?>001575080443c84dca5f188d4d220d5e25bb4539ef3ds:4758:"a:2:{s:8:"template";s:4694:"<?php $__Template->display("themes/default/head"); ?>

<link rel="stylesheet" href="/assets/css/topicStyle.css">

<?php $__Template->display("themes/default/header"); ?>

<img src="/upload/2017-11-08/1.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" draggable="false"/>

<section class="eleven-intro am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-text-center am-margin-vertical-xs gold-color">打折！打折！打折！</p>
        <p class="am-text-center am-margin-vertical-xs gold-color">拼的就是折扣！拼的就是性价比！</p>
        <p class="am-text-center am-margin-vertical-xs gold-color">今年的研究生报名又把考点挤爆了！人太多了！</p>
        <p class="am-text-center am-margin-vertical-xs gold-color">再过几年，你将会被硕士包围着！</p>
        <p class="am-text-center am-margin-vertical-xs gold-color">你还希望你是大专或者本科吗？！</p>
        <p class="am-text-center am-margin-vertical-xs gold-color">赶紧行动吧！</p>

        <img src="/upload/2017-11-08/4.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" draggable="false"/>

        <img src="/upload/2017-11-08/3.png" class="am-img-responsive am-center am-margin-top-lg" alt="<?php echo $categoryInfo["name"];?>" draggable="false"/>
    </div>
</section>

<section class="eleven-class am-padding-vertical-xl">
    <div class="am-container">

        <img src="/upload/2017-11-08/6.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" draggable="false"/>

        <img src="/upload/2017-11-08/7.png" class="am-img-responsive am-center am-margin-top-xl" alt="<?php echo $categoryInfo["name"];?>" draggable="false"/>

        <ul class="am-avg-sm-2 am-margin-top-xl">
            <li>
                <img src="/upload/2017-11-08/12.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" draggable="false"/>
            </li>
            <li>
                <img src="/upload/2017-11-08/13.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" draggable="false"/>
            </li>
        </ul>

        <p class="am-text-center am-margin-top-lg gold-color">注：套餐1，套餐2不能同时享受，只能选择其一！活动时间：2018年12月10日-12月12日。</p>
    </div>
</section>

<section class="eleven-attend am-padding-vertical-xl">
    <div class="am-container">
        <img src="/upload/2017-11-08/8.png" class="am-img-responsive am-center am-margin-top-lg" alt="<?php echo $categoryInfo["name"];?>" draggable="false"/>

        <article>
            <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit">

                <div class="formContainer">
                    <input name="name" type="text" placeholder="请输入姓名："/>
                </div>

                <div class="formContainer">
                    <input name="tel" type="tel" placeholder="请输入手机号："/>
                </div>
                <div class="formContainer validate">
                    <div>
                        <input name="checkcode" type="text" maxlength="4" size="4" placeholder="请输入验证码：" class="am-margin-right-sm" />
                        <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                    </div>
                    <div>
                        <input name="time" type="hidden" />
                        <input name="link" type="hidden" />
                        <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                        <input name="browserType" type="hidden" />
                        <input name="ip" type="hidden" />

                        <input name="table" type="hidden" value="guestbook">
                        <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>

                        <button type="submit" id="festival1">提&nbsp;交</button>
                    </div>

                </div>

            </form>
        </article>

    </div>
</section>



<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>";s:12:"compile_time";i:1543544443;}";
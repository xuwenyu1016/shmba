<?php exit;?>0015751784238bee11bcb0754ea6c03a8a0903c93b1cs:2086:"a:2:{s:8:"template";s:2022:"
<?php $__Template->display("themes/mobile/head_index"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="am-padding-sm">
    <h3>预约咨询</h3>

    <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit form-lone-page formSubmit">

        <div class="formContainer">
            <label>姓名：</label>
            <input name="name" type="text" placeholder="姓名："/>
        </div>

        <div class="formContainer">
            <label>手机号：</label>
            <input name="tel" type="tel" placeholder="手机号："/>
        </div>

        <div class="formContainer">
            <label>内容：</label>
            <input name="content" type="text" placeholder="内容："/>
        </div>

        <div class="formContainer checkcode">
            <label>验证码：</label>
            <input name="checkcode" type="text" maxlength="4" size="4" width="120">
            <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();"/>
        </div>

        <input name="time" type="hidden" />
        <input name="link" type="hidden" />
        <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
        <input name="browserType" type="hidden" />
        <input name="ip" type="hidden" />

        <input name="table" type="hidden" value="guestbook">
        <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>
        <div class="formContainer">
            <button id="submitFormButton" type="submit">提&nbsp;交</button>
        </div>


    </form>
</section>




<?php $__Template->display("themes/mobile/ending"); ?>
";s:12:"compile_time";i:1543642423;}";
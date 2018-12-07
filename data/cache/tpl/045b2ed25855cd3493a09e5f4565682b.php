<?php exit;?>001575089086b73f7ee93a74ea2eabc0d40848f593bes:2237:"a:2:{s:8:"template";s:2173:"<title>预约咨询，<?php echo $sys["site_title"];?></title>

<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<div class="am-container formSignIn am-padding-vertical-xl">

    <h2>预约咨询</h2>

    <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit form-lone-page" >

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
            <label>输入验证码：</label>
            <input name="checkcode" type="text" maxlength="4" size="4" width="120">
            <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
        </div>

        <input name="time" type="hidden" />
        <input name="link" type="hidden" />
        <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
        <input name="browserType" type="hidden" />
        <input name="ip" type="hidden" />

        <input name="table" type="hidden" value="guestbook">
        <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>
        <div class="formContainer">
            <button class="u-btn" type="submit">提&nbsp;交</button>
        </div>


    </form>


</div>


<?php $__Template->display("themes/default/footer_withoutFantastic"); ?>

<?php $__Template->display("themes/default/ending"); ?>";s:12:"compile_time";i:1543553086;}";
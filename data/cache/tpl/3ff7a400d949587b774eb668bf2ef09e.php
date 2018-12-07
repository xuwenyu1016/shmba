<?php exit;?>001551865985237eef0d2293de1c30a083b473c895b0s:1470:"a:2:{s:8:"template";s:1406:"<form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit">

    <div class="formContainer am-padding-horizontal-sm">
        <input type="text" name="name" placeholder="姓名："/>
    </div>
    <div class="formContainer am-padding-horizontal-sm">
        <input type="tel" name="tel" placeholder="手机号"/>
    </div>
    <div class="formContainer am-padding-horizontal-sm">
        <textarea name="content" placeholder="咨询问题"></textarea>
    </div>


    <div class="formContainer checkcode am-padding-horizontal-sm">
        <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码">
        <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
    </div>


    <div class="formContainer am-padding-horizontal-sm">
        <input name="content" type="hidden" value="">

        <input name="time" type="hidden" />
        <input name="link" type="hidden" />
        <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
        <input type="hidden" name="table" value="guestbook">
        <button type="submit" id="submitFormButton">点击提交</button>
    </div>

</form>";s:12:"compile_time";i:1520329985;}";
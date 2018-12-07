<?php exit;?>001575079359473f49a00f7bbe299d8f858c90433e63s:1696:"a:2:{s:8:"template";s:1632:"<form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit am-margin-bottom-lg">

    <p class="formTitle">
        <!--<span class="en"><?php echo $categoryInfo["name"];?></span>-->
        快速咨询
    </p>

    <div class="formContainer">
        <input type="text" name="name" placeholder="姓名："/>
    </div>
    <div class="formContainer">
        <input type="tel" name="tel" placeholder="手机号："/>
    </div>
    <div class="formContainer">
        <textarea name="content" placeholder="咨询问题："></textarea>
    </div>


    <div class="formContainer checkcode">
        <input name="checkcode" type="text" maxlength="4" size="4" >
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
        <button type="submit">点击提交</button>
    </div>

</form>";s:12:"compile_time";i:1543543359;}";
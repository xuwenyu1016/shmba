<?php exit;?>001575079215ba8e0ccf59bfb547ced290c6b981981bs:37031:"a:2:{s:8:"template";s:36966:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<img src="/upload/2018-02-11/14.png" class="am-img-responsive" alt="<?php echo $categoryInfo["name"];?>" />

<section class="download-head am-padding-vertical-xl">
    <div class="am-container">
        <ul class="am-avg-sm-4 am-padding-vertical-lg">
            <li>
                <a id="mian" class="downloadBox" href="/topic-MBAtiqianmianshi.html">
                    <span>面</span>
                    <article class="rightBox am-padding-left-xs">
                        <p class="boxTitle">提前面试</p>
                        <p class="checkMore">面试</p>
                    </article>
                </a>
            </li>
            <li>
                <a id="ce" class="downloadBox" href="/topic-MBABeiJingCeShi.html">
                    <span>测</span>
                    <article class="rightBox am-padding-left-xs">
                        <p class="boxTitle">考前测评</p>
                        <p class="checkMore">测评</p>
                    </article>
                </a>
            </li>
            <li>
                <a id="da" class="downloadBox" href="/topic-MBAbaokaotiaojian.html">
                    <span>答</span>
                    <article class="rightBox am-padding-left-xs">
                        <p class="boxTitle">精准报考</p>
                        <p class="checkMore">问答</p>
                    </article>
                </a>
            </li>
            <li>
                <a id="ting" class="downloadBox" href="/list-MBAZaiXianShiTing.html">
                    <span>听</span>
                    <article class="rightBox am-padding-left-xs">
                        <p class="boxTitle">在线视频</p>
                        <p class="checkMore">试听</p>
                    </article>
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="download-writtenTest am-padding-vertical-xl">
    <div class="am-container">
        <h2 class="title am-text-center am-margin-bottom-sm am-padding-top-xs">
            <span class="numContent">MBA联考<b class="green">笔试资料下载</b></span>
            <span class="borderBottom"></span>
        </h2>

        <ul class="am-avg-sm-3 am-margin-bottom-sm">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>25, "order"=>"time asc", "not_id"=>"67,68,69,70,570", "expand_id"=>9));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li class="am-padding-vertical-xs">
                <article id="<?php echo $list["i"];?>-2" data-am-modal="{target: '#doc-modal-<?php echo $list["i"];?>-2', closeViaDimmer: 0, width: 400, height: 240}">
                    <img src="/upload/2018-07-26/7bac1be292df13d9.png" class="am-img-responsive" alt="资料下载" />
                    <p class="orange"><?php echo $list["title"];?></p>
                    <p class="details"><?php echo $list["description"];?></p>
                </article>

                <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $list["i"];?>-2">
                    <div class="am-modal-dialog">
                        <div class="am-modal-hd"><?php echo $list["title"];?> 资料下载
                            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                        </div>
                        <div class="am-modal-bd">
                            <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm<?php echo $list["i"];?>-2" class="formSubmit">

                                <div class="formContainer">
                                    <input type="text" name="name" placeholder="姓名：" />
                                </div>
                                <div class="formContainer">
                                    <input type="tel" name="tel" placeholder="手机号：" />
                                </div>
                                <div class="formContainer">
                                    <input type="hidden" name="content" value="<?php echo $list["title"];?> 资料下载" placeholder="" />
                                </div>

                                <div class="formContainer checkcode">
                                    <span>验证码</span>
                                    <input type="text" name="verifiy"  class="am-form-field" placeholder="验证码" required/>
                                    <button type="button" class="acquireCode" id="msg<?php echo $list["i"];?>-2">获取验证码</button>
                                </div>


                                <input name="time" type="hidden" />
                                <input name="link" type="hidden" />
                                <input name="ip" type="hidden" />
                                <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                                <input name="browserType" type="hidden" />

                                <input name="table" type="hidden" value="MBATest">
                                <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"MBATest"));  echo $echoList; ?> '>

                                <div class="formContainer">
                                    <input id="id_submit<?php echo $list["i"];?>-2" type="button" class="btn1" value="提交" onClick="javascript:;" data-am-modal-close/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>

        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>25, "order"=>"time asc", "where"=>"A.content_id = 570", "expand_id"=>9));  if(is_array($listList)) foreach($listList as $list){ ?>
        <button id="bishiziliaoanniu" class="acquire-material am-center am-margin-top-lg" data-am-modal="{target: '#doc-modal-<?php echo $list["i"];?>-3', closeViaDimmer: 0, width: 400, height: 240}">下载所有笔试资料</button>
        <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $list["i"];?>-3">
            <div class="am-modal-dialog">
                <div class="am-modal-hd"><?php echo $list["title"];?>资料下载
                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                </div>
                <div class="am-modal-bd">
                    <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm<?php echo $list["i"];?>-3" class="formSubmit">

                        <div class="formContainer">
                            <input type="text" name="name" placeholder="姓名：" />
                        </div>
                        <div class="formContainer">
                            <input type="tel" name="tel" placeholder="手机号：" />
                        </div>
                        <div class="formContainer">
                            <input type="hidden" name="content" value="<?php echo $list["title"];?> 资料下载" placeholder="" />
                        </div>

                        <div class="formContainer checkcode">
                            <span>验证码</span>
                            <input type="text" name="verifiy"  class="am-form-field" placeholder="验证码" required/>
                            <button type="button" class="acquireCode" id="msg<?php echo $list["i"];?>-3">获取验证码</button>
                        </div>


                        <input name="time" type="hidden" />
                        <input name="link" type="hidden" />
                        <input name="ip" type="hidden" />
                        <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                        <input name="browserType" type="hidden" />

                        <input name="table" type="hidden" value="MBATest">
                        <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"MBATest"));  echo $echoList; ?> '>

                        <div class="formContainer">
                            <input id="id_submit<?php echo $list["i"];?>-3" type="button" class="btn1" value="提交" onClick="javascript:;" data-am-modal-close/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</section>

<section class="download-interviewTest am-padding-vertical-xl">
    <div class="am-container">
        <h2 class="title am-text-center am-margin-bottom-0 am-padding-top-xs">
            <span class="numContent">MBA联考<b class="green">面试资料下载</b></span>
            <span class="borderBottom"></span>
        </h2>

        <p class="am-text-center am-margin-top-0 am-margin-bottom-lg">包含MBA院校招生简章、报考指南、面试攻略、申请材料模板、推荐信模板</p>

        <ul class="am-avg-sm-6">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>32));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['infoDownload'] ){ ?>
            <li>
                <div id="mianshi-<?php echo $list["i"];?>" data-am-modal="{target: '#doc-modal-<?php echo $list["i"];?>', closeViaDimmer: 0, width: 400, height: 240}">
                    <article class="am-center">
                        <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>下载" />
                        <span> >>立即下载<< </span>
                    </article>
                    <p class="am-text-center am-margin-top-xs am-margin-bottom-sm"><?php echo $list["title"];?></p>
                </div>

                <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $list["i"];?>">
                    <div class="am-modal-dialog">
                        <div class="am-modal-hd"><?php echo $list["title"];?> 资料下载
                            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                        </div>
                        <div class="am-modal-bd">
                            <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm<?php echo $list["i"];?>" class="formSubmit">

                                <div class="formContainer">
                                    <input type="text" name="name" placeholder="姓名：" />
                                </div>
                                <div class="formContainer">
                                    <input type="tel" name="tel" placeholder="手机号：" />
                                </div>
                                <div class="formContainer">
                                    <input type="hidden" name="content" value="<?php echo $list["title"];?> 资料下载" placeholder="" />
                                </div>

                                <div class="formContainer checkcode">
                                    <span>验证码</span>
                                    <input type="text" name="verifiy" class="am-form-field" placeholder="验证码" required/>
                                    <button type="button" class="acquireCode" id="msg<?php echo $list["i"];?>">获取验证码</button>
                                </div>

                                <!--<div class="am-form-group">-->


                                <!--<div class="formContainer checkcode">-->
                                <!--<input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码" />-->

                                <!--<img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('/duxcms/ValidateCode/index');?>&'+Math.random();">-->
                                <!--</div>-->

                                <input name="time" type="hidden" />
                                <input name="link" type="hidden" />
                                <input name="ip" type="hidden" />
                                <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                                <input name="browserType" type="hidden" />

                                <input name="table" type="hidden" value="MBATest">
                                <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"MBATest"));  echo $echoList; ?> '>

                                <div class="formContainer">
                                    <input id="id_submit<?php echo $list["i"];?>" type="button" class="btn1" value="提交" onClick="javascript:;" data-am-modal-close/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <?php } ?>
            <?php } ?>
        </ul>

        <button id="mianshiziliaoanniu" class="acquire-material am-center am-margin-top-sm" data-am-modal="{target: '#doc-modal-all', closeViaDimmer: 0, width: 400, height: 240}">下载所有面试资料</button>
        <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-all">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">MBA面试资料下载
                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                </div>
                <div class="am-modal-bd">
                    <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm-all" class="formSubmit">

                        <div class="formContainer">
                            <input type="text" name="name" placeholder="姓名：" />
                        </div>
                        <div class="formContainer">
                            <input type="tel" name="tel" placeholder="手机号：" />
                        </div>
                        <div class="formContainer">
                            <input type="hidden" name="content" value="全部面试资料下载" placeholder="" />
                        </div>

                        <div class="formContainer checkcode">
                            <span>验证码</span>
                            <input type="text" name="verifiy"  class="am-form-field" placeholder="验证码" required/>
                            <button type="button" class="acquireCode" id="msg-all">获取验证码</button>
                        </div>


                        <input name="time" type="hidden" />
                        <input name="link" type="hidden" />
                        <input name="ip" type="hidden" />
                        <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                        <input name="browserType" type="hidden" />

                        <input name="table" type="hidden" value="MBATest">
                        <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"MBATest"));  echo $echoList; ?> '>

                        <div class="formContainer">
                            <input id="id_submit-all" type="button" class="btn1" value="提交" onClick="javascript:;" data-am-modal-close/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="innerMaterial am-padding-vertical-xl">
    <div class="am-container">
        <h2 class="title am-text-center am-margin-bottom-sm am-padding-top-xs">
            <span class="numContent">MBA联考华章<b class="green">备考经验获取</b></span>
            <span class="borderBottom"></span>
        </h2>
        <p class="am-text-center am-margin-top-0">填写邮箱信息，领取华章备考经验：MBA联考笔试内部资料+历年真题册+面试攻略手册+面试材料模板+各高校报考指南</p>

        <ul class="am-avg-sm-2">
            <li>
                <img src="/upload/2018-07-26/6e6dbb4c529da74f.png" class="am-img-responsive am-center" alt="资料下载" />
            </li>
            <li>
                <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit">

                    <div class="formContainer">
                        <input type="text" name="name" placeholder="姓名："/>
                    </div>
                    <div class="formContainer">
                        <input type="tel" name="tel" placeholder="手机号"/>
                    </div>
                    <div class="formContainer">
                        <input type="email" name="content" placeholder="邮箱"/>
                    </div>


                    <div class="formContainer checkcode">
                        <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码" />
                        <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                    </div>


                    <div class="formContainer">
                        <input name="time" type="hidden" />
                        <input name="link" type="hidden" />
                        <input name="ip" type="hidden" />
                        <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                        <input name="browserType" type="hidden" />

                        <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                        <input type="hidden" name="table" value="guestbook">
                        <button type="submit" id="submitFormButton">点击提交</button>
                    </div>

                </form>
            </li>
        </ul>

    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>

<?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>32));  if(is_array($listList)) foreach($listList as $list){ ?>
<?php if ( $list['infoDownload'] ){ ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#id_submit<?php echo $list["i"];?>").click(function () {

            if($("#myForm<?php echo $list["i"];?> input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?> input[name='tel']").val()=="" || $("#myForm<?php echo $list["i"];?> input[name='verifiy']").val()==""){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm<?php echo $list["i"];?> input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }

            var AjaxURL = "<?php echo U('DuxCms/Form/pushTest');?>";
           var newTab=window.open('about:blank');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: AjaxURL,
                data: $('#myForm<?php echo $list["i"];?>').serialize(),
                success: function (result) {
                    var strresult = result;
//                    console.log(strresult);
//                    console.log(strresult.status);
                    if (!strresult.status){
                        alert(strresult.info);
                        return false;
                    }else{
                        alert("已提交");
                    }

//                    console.log('<?php echo $list["infoDownload"];?>');
                    newTab.location.href = "<?php echo $list["infoDownload"];?>";
//                    setTimeout('window.open("<?php echo $list["infoDownload"];?>");', 800);
                },
                error: function (data) {
                    console.log("error:" + data.responseText);
                    window.location.href = "<?php echo $list["infoDownload"];?>";
                }
            });
        });
    });

    $(function () {
        //获取短信验证码
        var validCode = true;
        $("#msg<?php echo $list["i"];?>").click (function () {
            if($("#myForm<?php echo $list["i"];?> input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?> input[name='tel']").val()=="" ){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm<?php echo $list["i"];?> input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }else{
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "<?php echo U('DuxCms/Form/miji_yz');?>",
                    data: $('#myForm<?php echo $list["i"];?>').serialize(),// 你的formid
                    async: false,
                    error: function (request) {
                        alert("系统出错请重新获取");
                    },
                    success: function (data) {
//                    alert(data);
//                     $("#commonLayout_appcreshi").parent().html(data);

//                    alert("申请成功,立即下载!");
//                    setTimeout(window.location.href="/mianshimiji/fudan.pdf",3000);
                    }
                });

                var time = 60;
                var code = $(this);
                if (validCode) {
                    validCode = false;
                    code.addClass("msg");
                    var t = setInterval(function () {
                        time--;
                        code.html('还剩余(' + time + ')秒');
                        if (time == 0) {
                            clearInterval(t);
                            code.html("重新获取");
                            validCode = true;
                            code.removeClass("msg");

                        }
                    }, 1000)
                }
            }

        })
    })
</script>
<?php } ?>
<?php } ?>

<!--笔试-->
<?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>25, "order"=>"time asc", "not_id"=>"67,68,69,70,457", "expand_id"=>9));  if(is_array($listList)) foreach($listList as $list){ ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#id_submit<?php echo $list["i"];?>-2").click(function () {

            if($("#myForm<?php echo $list["i"];?>-2 input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?>-2 input[name='tel']").val()==""  || $("#myForm<?php echo $list["i"];?>-2 input[name='verifiy']").val()==""){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm<?php echo $list["i"];?>-2 input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }

            var AjaxURL = "<?php echo U('DuxCms/Form/pushTest');?>";
            var newTab=window.open('about:blank');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: AjaxURL,
                data: $('#myForm<?php echo $list["i"];?>-2').serialize(),
                success: function (result) {
                    var strresult = result;
//                    console.log(strresult);
//                    console.log(strresult.status);
                    if (!strresult.status){
                        alert(strresult.info);
                        return false;
                    }else{
                        alert("已提交");
                    }

//                    console.log('<?php echo $list["infoDownload"];?>');
                    newTab.location.href = "<?php echo $list["writingInfo"];?>";
//                    setTimeout('window.open("<?php echo $list["infoDownload"];?>");', 800);
                },
                error: function (data) {
                    console.log("error:" + data.responseText);
                    newTab.location.href = "<?php echo $list["writingInfo"];?>";
                }
            });
        });
    });

    $(function () {
        //获取短信验证码
        var validCode = true;
        $("#msg<?php echo $list["i"];?>-2").click (function () {
            if($("#myForm<?php echo $list["i"];?>-2 input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?>-2 input[name='tel']").val()=="" ){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm<?php echo $list["i"];?>-2 input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }else{
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "<?php echo U('DuxCms/Form/miji_yz');?>",
                    data: $('#myForm<?php echo $list["i"];?>-2').serialize(),// 你的formid
                    async: false,
                    error: function (request) {
                        alert("系统出错请重新获取");
                    },
                    success: function (data) {
//                    alert(data);
//                     $("#commonLayout_appcreshi").parent().html(data);

//                    alert("申请成功,立即下载!");
//                    setTimeout(window.location.href="/mianshimiji/fudan.pdf",3000);
                    }
                });

                var time = 60;
                var code = $(this);
                if (validCode) {
                    validCode = false;
                    code.addClass("msg");
                    var t = setInterval(function () {
                        time--;
                        code.html('还剩余(' + time + ')秒');
                        if (time == 0) {
                            clearInterval(t);
                            code.html("重新获取");
                            validCode = true;
                            code.removeClass("msg");

                        }
                    }, 1000)
                }
            }


        })
    })
</script>
<?php } ?>

<?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>25, "order"=>"time asc", "where"=>"A.content_id = 570", "expand_id"=>9));  if(is_array($listList)) foreach($listList as $list){ ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#id_submit<?php echo $list["i"];?>-3").click(function () {

            if($("#myForm<?php echo $list["i"];?>-3 input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?>-3 input[name='tel']").val()==""  || $("#myForm<?php echo $list["i"];?>-3 input[name='verifiy']").val()==""){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm<?php echo $list["i"];?>-3 input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }

            var AjaxURL = "<?php echo U('DuxCms/Form/pushTest');?>";
            var newTab=window.open('about:blank');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: AjaxURL,
                data: $('#myForm<?php echo $list["i"];?>-3').serialize(),
                success: function (result) {
                    var strresult = result;
//                    console.log(strresult);
//                    console.log(strresult.status);
                    if (!strresult.status){
                        alert(strresult.info);
                        return false;
                    }else{
                        alert("已提交");
                    }

//                    console.log('<?php echo $list["infoDownload"];?>');
                    newTab.location.href = "<?php echo $list["writingInfo"];?>";
//                    setTimeout('window.open("<?php echo $list["infoDownload"];?>");', 800);
                },
                error: function (data) {
                    console.log("error:" + data.responseText);
                    newTab.location.href = "<?php echo $list["writingInfo"];?>";
                }
            });
        });
    });

    $(function () {
        //获取短信验证码
        var validCode = true;
        $("#msg<?php echo $list["i"];?>-3").click (function () {
            if($("#myForm<?php echo $list["i"];?>-3 input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?>-3 input[name='tel']").val()=="" ){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm<?php echo $list["i"];?>-3 input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }else{
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "<?php echo U('DuxCms/Form/miji_yz');?>",
                    data: $('#myForm<?php echo $list["i"];?>-3').serialize(),// 你的formid
                    async: false,
                    error: function (request) {
                        alert("系统出错请重新获取");
                    },
                    success: function (data) {
//                    alert(data);
//                     $("#commonLayout_appcreshi").parent().html(data);

//                    alert("申请成功,立即下载!");
//                    setTimeout(window.location.href="/mianshimiji/fudan.pdf",3000);
                    }
                });

                var time = 60;
                var code = $(this);
                if (validCode) {
                    validCode = false;
                    code.addClass("msg");
                    var t = setInterval(function () {
                        time--;
                        code.html('还剩余(' + time + ')秒');
                        if (time == 0) {
                            clearInterval(t);
                            code.html("重新获取");
                            validCode = true;
                            code.removeClass("msg");

                        }
                    }, 1000)
                }
            }


        })
    })
</script>
<?php } ?>


<script type="text/javascript">
    $(document).ready(function(){
        $("#id_submit-all").click(function () {

            if($("#myForm-all input[name='name']").val()=="" || $("#myForm-all input[name='tel']").val()==""  || $("#myForm-all input[name='verifiy']").val()==""){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm-all input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }

            var AjaxURL = "<?php echo U('DuxCms/Form/pushTest');?>";
            var newTab=window.open('about:blank');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: AjaxURL,
                data: $('#myForm-all').serialize(),
                success: function (result) {
                    var strresult = result;
//                    console.log(strresult);
//                    console.log(strresult.status);
                    if (!strresult.status){
                        alert(strresult.info);
                        return false;
                    }else{
                        alert("已提交");
                    }

//                    console.log('<?php echo $list["infoDownload"];?>');
                    newTab.location.href = "/assets/files/yuanxiaomianshi.zip";
//                    setTimeout('window.open("<?php echo $list["infoDownload"];?>");', 800);
                },
                error: function (data) {
                    console.log("error:" + data.responseText);
                    newTab.location.href = "/assets/files/yuanxiaomianshi.zip";
                }
            });
        });
    });

    $(function () {
        //获取短信验证码
        var validCode = true;
        $("#msg-all").click (function () {
            if($("#myForm-all input[name='name']").val()=="" || $("#myForm-all input[name='tel']").val()=="" ){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm-all input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }else{
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "<?php echo U('DuxCms/Form/miji_yz');?>",
                    data: $('#myForm-all').serialize(),// 你的formid
                    async: false,
                    error: function (request) {
                        alert("系统出错请重新获取");
                    },
                    success: function (data) {
//                    alert(data);
//                     $("#commonLayout_appcreshi").parent().html(data);

//                    alert("申请成功,立即下载!");
//                    setTimeout(window.location.href="/mianshimiji/fudan.pdf",3000);
                    }
                });

                var time = 60;
                var code = $(this);
                if (validCode) {
                    validCode = false;
                    code.addClass("msg");
                    var t = setInterval(function () {
                        time--;
                        code.html('还剩余(' + time + ')秒');
                        if (time == 0) {
                            clearInterval(t);
                            code.html("重新获取");
                            validCode = true;
                            code.removeClass("msg");

                        }
                    }, 1000)
                }
            }


        })
    })
</script>
";s:12:"compile_time";i:1543543215;}";
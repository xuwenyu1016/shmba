<?php exit;?>0015518552496a6b15e13e4effe77fc0056ab4475913s:25322:"a:2:{s:8:"template";s:25257:"<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-14/8c944f4650e6416b0bf478e3a3ee618b.png" class="am-img-responsive" alt="<?php echo $categoryInfo["name"];?>" />

<section class="download-head am-padding-vertical-sm">
    <ul class="am-avg-sm-4">
        <li>
            <a class="downloadBox" href="/page-mianShiKeCheng.html">
                <img src="/upload/2018-02-10/6.png" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <article class="rightBox">
                    <p class="boxTitle">提前面试</p>
                    <p class="checkMore">面试</p>
                </article>
            </a>
        </li>
        <li>
            <a class="downloadBox" href="/list-backgroundTest.html">
                <img src="/upload/2018-02-10/7.png" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <article class="rightBox">
                    <p class="boxTitle">考前测评</p>
                    <p class="checkMore">测评</p>
                </article>
            </a>
        </li>
        <li>
            <a class="downloadBox" href="/page-basicAnswers.html">
                <img src="/upload/2018-02-10/8.png" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <article class="rightBox">
                    <p class="boxTitle">精准报考</p>
                    <p class="checkMore">问答</p>
                </article>
            </a>
        </li>
        <li>
            <a class="downloadBox" href="/list-video.html">
                <img src="/upload/2018-02-10/9.png" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <article class="rightBox">
                    <p class="boxTitle">在线视频</p>
                    <p class="checkMore">试听</p>
                </article>
            </a>
        </li>
    </ul>
</section>

<section class="schoolInfoDownload am-padding-sm">
    <h2 class="title am-text-center">
        <span class="numContent"><b class="en">MBA</b>联考<b class="red">面试经验下载</b></span>
    </h2>
    <ul class="am-avg-sm-2">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li>
            <div data-am-modal="{target: '#doc-modal-<?php echo $list["i"];?>', closeViaDimmer: 0, width: 300, height: 270}">
                <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>下载" />
                <p class="schoolTitle"><?php echo $list["title"];?></p>
                <button class="download">立即下载</button>
            </div>

            <div class="am-modal am-modal-no-btn fileModal" tabindex="-1" id="doc-modal-<?php echo $list["i"];?>">
                <div class="am-modal-dialog">
                    <div class="am-modal-hd"><?php echo $list["title"];?> 资料下载
                        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                    </div>
                    <div class="am-modal-bd">
                        <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm<?php echo $list["i"];?>">

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
                                <input type="text" name="verifiy" id="input_verifiy"  class="am-form-field" placeholder="验证码" required/>
                                <button type="button" class="acquireCode msg<?php echo $list["i"];?>">获取验证码</button>
                            </div>

                            <!--<div class="am-form-group">-->


                            <!--<div class="formContainer checkcode">-->
                            <!--<input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码" />-->

                            <!--<img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('/duxcms/ValidateCode/index');?>&'+Math.random();">-->
                            <!--</div>-->

                            <input name="time" type="hidden" />
                            <input name="date" type="hidden" />
                            <input name="table" type="hidden" value="guestbook">
                            <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>

                            <div class="formContainer">
                                <input id="id_submit<?php echo $list["i"];?>" type="button" class="btn1" value="提交" onClick="javascript:;" data-am-modal-close/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
</section>

<section class="letter-download am-padding-sm">
    <h2 class="title am-text-center">
        <span class="numContent"><b class="en">MBA</b>联考<b class="red">推荐信下载</b></span>
    </h2>
    <ul class="am-avg-sm-2">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li>
            <div data-am-modal="{target: '#doc-modal-<?php echo $list["i"];?>-1', closeViaDimmer: 0, width: 300, height: 270}">
                <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>下载" />
                <p class="schoolTitle"><?php echo $list["title"];?></p>
                <button class="download">立即下载</button>
            </div>

            <div class="am-modal am-modal-no-btn fileModal" tabindex="-1" id="doc-modal-<?php echo $list["i"];?>-1">
                <div class="am-modal-dialog">
                    <div class="am-modal-hd"><?php echo $list["title"];?> 推荐信下载
                        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                    </div>
                    <div class="am-modal-bd">
                        <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm<?php echo $list["i"];?>-1">

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
                                <input type="text" name="verifiy" class="am-form-field" placeholder="验证码" required/>
                                <button type="button" class="acquireCode msg<?php echo $list["i"];?>">获取验证码</button>
                            </div>

                            <!--<div class="am-form-group">-->


                            <!--<div class="formContainer checkcode">-->
                            <!--<input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码" />-->

                            <!--<img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('/duxcms/ValidateCode/index');?>&'+Math.random();">-->
                            <!--</div>-->

                            <input name="time" type="hidden" />
                            <input name="date" type="hidden" />
                            <input name="table" type="hidden" value="guestbook">
                            <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>

                            <div class="formContainer">
                                <input id="id_submit<?php echo $list["i"];?>-1" type="button" class="btn1" value="提交" onClick="javascript:;" data-am-modal-close/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
</section>

<section class="writingInfoDownload am-padding-vertical-sm">
    <h2 class="title am-text-center">
        <span class="numContent"><b class="en">MBA</b>联考<b class="red">笔试经验下载</b></span>
    </h2>
    <ul class="am-avg-sm-2">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>25, "order"=>"time asc", "expand_id"=>9));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li>
            <div class="downloadBox" data-am-modal="{target: '#doc-modal-<?php echo $list["i"];?>-2', closeViaDimmer: 0, width: 300, height: 270}">
                <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                <article class="rightBox">
                    <p class="schoolTitle"><?php echo $list["title"];?></p>
                    <button class="download">立即下载</button>
                </article>
            </div>

            <div class="am-modal am-modal-no-btn fileModal" tabindex="-1" id="doc-modal-<?php echo $list["i"];?>-2">
                <div class="am-modal-dialog">
                    <div class="am-modal-hd"><?php echo $list["title"];?> 资料下载
                        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                    </div>
                    <div class="am-modal-bd">
                        <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm<?php echo $list["i"];?>-2">

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
                                <input type="text" name="verifiy" class="am-form-field" placeholder="验证码" required/>
                                <button type="button" class="acquireCode msg<?php echo $list["i"];?>">获取验证码</button>
                            </div>


                            <input name="time" type="hidden" />
                            <input name="date" type="hidden" />
                            <input name="table" type="hidden" value="guestbook">
                            <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>

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
</section>


<section class="innerMaterial am-padding-sm">
    <h2 class="title am-text-center">
        <span class="numContent"><b class="en">MBA</b>联考<b class="red">华章备考经验获取</b></span>
    </h2>
    <p class="am-text-center am-margin-top-0">填写邮寄信息，领取华章备考经验：《MBA联考历年真题册》+面试经验+面试简历模板+各高校招生简章</p>
    <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit am-margin-bottom-lg">

        <div class="formContainer">
            <span>姓名：</span><input type="text" name="name" placeholder="姓名："/>
        </div>
        <div class="formContainer">
            <span>手机号：</span><input type="tel" name="tel" placeholder="手机号"/>
        </div>
        <div class="formContainer">
            <span>咨询问题：</span><textarea name="content" placeholder="咨询问题"></textarea>
        </div>


        <div class="formContainer checkcode">
            <span>验证码：</span>
            <input name="checkcode" type="text" maxlength="4" size="4" >
            <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
        </div>


        <div class="formContainer">
            <input name="time" type="hidden" />
            <input name="date" type="hidden" />

            <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
            <input type="hidden" name="table" value="guestbook">
            <button type="submit" id="submitFormButton">点击提交</button>
        </div>

    </form>
</section>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>


<?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#id_submit<?php echo $list["i"];?>").click(function () {

            if($("#myForm<?php echo $list["i"];?> input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?> input[name='tel']").val()==""){
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
                    alert("error:" + data.responseText);
                }
            });
        });
    });

    $(function () {
        //获取短信验证码
        var validCode = true;
        $(".msg<?php echo $list["i"];?>").click (function () {
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
        })
    })
</script>
<?php } ?>

<?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>13));  if(is_array($listList)) foreach($listList as $list){ ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#id_submit<?php echo $list["i"];?>-1").click(function () {

            if($("#myForm<?php echo $list["i"];?>-1 input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?>-1 input[name='tel']").val()==""){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm<?php echo $list["i"];?>-1 input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }

            var AjaxURL = "<?php echo U('DuxCms/Form/pushTest');?>";
            var newTab=window.open('about:blank');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: AjaxURL,
                data: $('#myForm<?php echo $list["i"];?>-1').serialize(),
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
                    newTab.location.href = "<?php echo $list["recommendation"];?>";
//                    setTimeout('window.open("<?php echo $list["infoDownload"];?>");', 800);
                },
                error: function (data) {
                    alert("error:" + data.responseText);
                }
            });
        });
    });

    $(function () {
        //获取短信验证码
        var validCode = true;
        $(".msg<?php echo $list["i"];?>").click (function () {
            $.ajax({
                cache: true,
                type: "POST",
                url: "<?php echo U('DuxCms/Form/miji_yz');?>",
                data: $('#myForm<?php echo $list["i"];?>-1').serialize(),// 你的formid
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
        })
    })
</script>
<?php } ?>

<?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>25, "order"=>"time asc", "expand_id"=>9));  if(is_array($listList)) foreach($listList as $list){ ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#id_submit<?php echo $list["i"];?>-2").click(function () {

            if($("#myForm<?php echo $list["i"];?>-2 input[name='name']").val()=="" || $("#myForm<?php echo $list["i"];?>-2 input[name='tel']").val()==""){
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
                    alert("error:" + data.responseText);
                }
            });
        });
    });

    $(function () {
        //获取短信验证码
        var validCode = true;
        $(".msg<?php echo $list["i"];?>").click (function () {
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
        })
    })
</script>
<?php } ?>

";s:12:"compile_time";i:1520319249;}";
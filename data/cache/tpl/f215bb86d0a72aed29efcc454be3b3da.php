<?php exit;?>0015752951575a37a7c1c7b682ff4dcca68b52ec1231s:27193:"a:2:{s:8:"template";s:27128:"﻿<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<style>

    .narrow{width: 750px;margin-left: auto;margin-right: auto;}
    .box1 .mainTitle{color:rgb(109,109,109); text-align: center;font-weight: 600;font-size: 18px;}
    .box1 .mainTitle span{display: inline-block;background-color: rgb(163,163,163);color: white;
        padding: 2px 6px;margin-right: 4px;border-radius: 2px;font-weight: 500;width: 21px;text-align: center;}
    .box1 .subTitle{color: rgb(163,163,163);}

    .box1 ul.banter{width: 88%;margin: 0 auto;display: flex;align-items: center;}
    .box1 ul.banter li:nth-child(1){width: 65%;padding:25px 20px 15px 0;}
    .box1 ul.banter li:nth-child(2){width: 35%;padding-top: 5px;}

    .box1 ul.banter li p{color: rgb(41,41,41);}
    .box1 ul.banter li p:nth-child(2){font-size: 15px;}
    .box1 ul.banter li img{margin: 0 auto;}
    .box1 .caretDowns{position: absolute;width: 100%;bottom: -19px;}
    .box1 span.am-icon-caret-down{display: block;text-align: center;line-height: 1;color: rgb(30,205,151);
        font-size: 28px;}
    .box1 span.am-icon-caret-down.caretDown2{margin-top: -21px;}



    .btn1{display: block;margin: 0 auto;
        background-color: rgb(30,205,151);color: white;width: 20%;border: none;height: 37px;line-height: 37px;}

    .box1 .infoBox{background-color: rgb(248,248,248);}
    .box1 .infoBox .innerBox{width: 80%;margin: 0 auto;}
    .box1 .infoBox .innerBox .infoTitle{color: rgb(41,41,41);}
    .box1 .infoBox .innerBox .infoTitle span{font-size: 14px;margin-left: 5px;color: rgb(130,130,130); }
    .box1 .infoBox .innerBox .infoTitle.am-text-danger{color: #db0000;margin: 5px auto;}

    .box1 .infoBox form>ul>li{width: 32%;}
    .box1 .infoBox form ul li span{display: inline-block;height: 37px;vertical-align: middle;}
    .box1 .infoBox form>ul>li:nth-child(1) input{display: inline-block;width: -webkit-calc( 100% - 70px );
        width: calc( 100% - 70px );margin-left: 8px;margin-bottom: 15px;}
    .box1 .infoBox form>ul>li:nth-child(2) input{display: inline-block;width: -webkit-calc( 100% - 80px );
        width: calc( 100% - 80px );margin-left: 8px;margin-bottom: 15px;}

    .box1 .infoBox form>ul>li:nth-child(3){width: 35%;}
    /*.box1 .infoBox ul li:nth-child(3) input.msg{padding: 0 5px;width: 80%;margin: 0 0 0 auto;height: 37px;line-height: 37px;}*/
    /*.box1 .infoBox ul li:nth-child(3) .msgbk{width: 80%;margin: 0 auto;padding-left: 0;padding-right: 0;text-align: center;}*/
    .box1 .infoBox .btn1{display: block;margin: 0 auto 15px auto;
        background-color: rgb(30,205,151);color: white;width: 20%;border: none;height: 37px;line-height: 37px;}

    .question-lists li{display: flex;align-items: center;}
    .question-lists li select{width: 120px;}
    .question-lists li .am-g{width: calc( 100% - 100px );}
    .question-lists li .formTitle{width: 100px;}



    .am-form-group [class*=am-u-]+[class*=am-u-]:last-child{float: left;}
    .am-form-group .am-radio+.am-radio{margin-top: 10px;}

    ul.form-list li div{display: flex;align-items: center;}
    ul.form-list li div span{width: 75px;}
    ul.form-list li:nth-child(1) input,ul.form-list li:nth-child(2) input{width: calc( 85% - 80px );}

    button[type=submit]#submitFormButton{display: block;margin: 0 auto;
        background-color: rgb(30,205,151);color: white;width: 130px;border: none;height: 37px;line-height: 37px;}


</style>

<img src="/upload/2018-02-14/172123034e8ca568cbe6962a35a1f434.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />


<section class="items">

    <div class="box box1 am-padding-vertical-xl">

        <div class="boxContainer am-container">
            <h2 class="mainTitle">已有
                <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"guestbook", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?><?php echo $list["data_id"];?><?php } ?>
                位考生提交了有效的华章MBA背景测试</h2>
            <p class="subTitle am-text-center">本测试题的参照数据由5820名2017年上海华章的同学及今年已报考上海华章MBA联考辅导班的同学提供。</p>

            <ul class="am-avg-sm-2 banter">
                <li>
                    <p class="am-margin-vertical-sm am-text-lg am-text-center"><b>职场精英还是管理小白？</b></p>

                    <p class="am-margin-vertical-sm am-text-justify">截止2017年10月31日，上海MBA等在职研究生报考人数突破10,000人，交大等MBA名校更猛增至2,700人左右。</p>
                    <p class="am-margin-vertical-sm am-text-justify">MBA报考看的是背景，看的是潜力。但更看你和你的竞争者的相对成绩，来看看你在报考人群中处在什么位置。</p>
                    <p class="am-margin-vertical-sm am-text-justify">1分钟职业背景测试，看你考上名校MBA的几率有多大？</p>
                    <p class="am-margin-vertical-sm am-text-justify">华章老师将为参加背景测试的同学全面评估，推荐适合您的MBA商学院。</p>


                </li>
                <li><img src="/upload/2018-02-13/396462c819649e1c6067b37c3381aa06.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" /></li>
            </ul>

            <hr>


            <div class="questionsBlock">
                <ul class="am-avg-sm-1 question-lists">
                    <li>
                        <p class="formTitle">
                            <span class="num">1</span>
                            <span>学校类型：</span>
                        </p>
                        <div class="am-form-group am-g">

                            <label class="am-u-sm-5 am-success textLabel">
                                <select class="ti1" name="ti1">
                                    <option value ="普本" selected>普本</option>
                                    <option value ="专科">专科</option>
                                    <option value ="985/211">985/211</option>
                                </select>
                            </label>

                        </div>
                    </li>
                    <li>
                        <p class="formTitle">
                            <span class="num">2</span>
                            <span>您的专业：</span>
                        </p>
                        <div class="am-form-group am-g">

                            <label class="am-u-sm-5 am-success textLabel">
                                <select class="ti2" name="ti2">
                                    <option value ="工科" selected>工科</option>
                                    <option value ="理科">理科</option>
                                    <option value ="商科">商科</option>
                                    <option value ="文科">文科</option>
                                    <option value ="其他">其他</option>
                                </select>
                            </label>

                        </div>
                    </li>
                    <li>
                        <p class="formTitle">
                            <span class="num">3</span>
                            <span>最高学历：</span>
                        </p>
                        <div class="am-form-group am-g">

                            <label class="am-u-sm-5 am-success textLabel">
                                <select class="ti3" name="ti3" >
                                    <option value ="本科" selected>本科</option>
                                    <option value ="专科">专科</option>
                                    <option value ="硕士">硕士</option>
                                    <option value ="博士">博士</option>
                                </select>

                            </label>

                        </div>
                    </li>
                </ul>
            </div>



            <div class="questionsBlock">
                <p class="formTitle">
                    <span class="num">4</span>
                    <span>公司的性质：</span>
                </p>
                <div class="am-form-group am-g">

                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti4" class="ti4" type="radio" value="外企/合资企业" checked>外企/合资企业
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti4" class="ti4" type="radio" value="自主创业">自主创业
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti4" class="ti4" type="radio" value="国有企业">国有企业
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti4" class="ti4" type="radio" value="民营企业">民营企业
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti4" class="ti4" type="radio" value="政府机构">政府机构
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti4" class="ti4" type="radio" value="事业单位">事业单位
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti4" class="ti4" type="radio" value="其他">其他
                    </label>

                </div>
            </div>

            <div class="questionsBlock">
                <p class="formTitle">
                    <span class="num">5</span>
                    <span>您的公司的行业类别：</span>
                </p>
                <div class="am-form-group am-g">

                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="金融服务" checked>金融服务
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="咨询">咨询
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="能源/化工">能源/化工
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="科技/新媒体/电信">科技/新媒体/电信
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="房地产开发及装饰">房地产开发及装饰
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="服务行业">服务行业
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="非营利组织/政府机构">非营利组织/政府机构
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="制造业">制造业
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="批发/零售/贸易">批发/零售/贸易
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="医药/保健/生物科技">医药/保健/生物科技
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="媒体/娱乐/广告">媒体/娱乐/广告
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti5" type="radio" value="其他">其他
                    </label>

                </div>
            </div>


            <div class="questionsBlock">
                <p class="formTitle">
                    <span class="num">6</span>
                    <span>工作职能：</span>
                </p>
                <div class="am-form-group am-g">
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="金融/财务" checked>金融/财务
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="咨询/战略/业务发展">咨询/战略/业务发展
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="综合管理">综合管理
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="政府公务员">政府公务员
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="销售/客户管理">销售/客户管理
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="项目管理">项目管理
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="市场营销/产品管理">市场营销/产品管理
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="供应链管理">供应链管理
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="人事/行政">人事/行政
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="技术研发">技术研发
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti6" class="ti6" type="radio" value="其他">其他
                    </label>
                </div>
            </div>

            <div class="questionsBlock">
                <p class="formTitle">
                    <span class="num">7</span>
                    <span>您的职位类型：</span>
                </p>
                <div class="am-form-group am-g">
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti7" type="radio" value="高层管理(副总经理以上级)" checked>高层管理(副总经理以上级)
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti7" type="radio" value="高层管理(总助/执行总监级)">高层管理（总助/执行主任/执行总监级）
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti7" type="radio" value="中级管理(总监/部门经理)">中级管理（总监/部门经理）
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti7" type="radio" value="初级管理(主管级/一般经理级)">初级管理（主管级/一般经理级）
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti7" type="radio" value="高级专业人士">高级专业人士
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti7" type="radio" value="初级专业人士">初级专业人士
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti7" type="radio" value="管理培训生">管理培训生
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti7" type="radio" value="其他">其他
                    </label>

                </div>
            </div>

            <div class="questionsBlock">
                <p class="formTitle">
                    <span class="num">8</span>
                    <span>您的下属人数（人）：</span>
                </p>
                <div class="am-form-group am-g">
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti8" type="radio" value="0-3人" checked>0-3人
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti8" type="radio" value="4-6人">4-6人
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti8" type="radio" value="7-10人">7-10人
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti8" type="radio" value="11-20人">11-20人
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti8" type="radio" value="21-30人">21-30人
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti8" type="radio" value="31-50人">31-50人
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti8" type="radio" value="51人以上">51人以上
                    </label>

                </div>
            </div>

            <div class="questionsBlock">
                <p class="formTitle">
                    <span class="num">9</span>
                    <span>您从事管理工作岗位经验（年）：</span>
                </p>
                <div class="am-form-group am-g">
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti9" type="radio" value="0-1年" checked>0-1年
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti9" type="radio" value="2-3年">2-3年
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti9" type="radio" value="4-5年">4-5年
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti9" type="radio" value="6-7年">6-7年
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti9" type="radio" value="8-9年">8-9年
                    </label>
                    <label class="am-u-sm-3 am-success am-radio">
                        <input data-am-ucheck name="ti9" type="radio" value="10年以上">10年以上
                    </label>

                </div>
            </div>


            <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm">

                <p class="am-margin-top-lg am-margin-bottom-sm am-text-center am-text-lg"> <b>留言获得测试结果</b> </p>
                <ul class="am-avg-sm-3 form-list am-padding-bottom-lg">
                    <li>
                        <div class="formContainer">
                            <span>姓名：</span>
                            <input type="text" name="name" id="name" placeholder="姓名："/>
                        </div>
                    </li>
                    <li>
                        <div class="formContainer">
                            <span>手机号：</span>
                            <input type="tel" name="tel" id="tel" placeholder="手机号："/>
                        </div>
                    </li>
                    <li>
                        <div class="formContainer checkcode">
                            <span>验证码：</span>
                            <input type="text" name="verifiy" id="input_verifiy" class="am-form-field" placeholder="验证码" required/>
                            <button type="button" class="acquireCode msg" id="msg">获取验证码</button>
                        </div>
                    </li>
                </ul>

                <input name="content" type="hidden"/>

                <input name="time" type="hidden" />
                <input name="link" type="hidden" />
                <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                <input name="browserType" type="hidden" />
                <input name="ip" type="hidden" />

                <input name="table" type="hidden" value="MBATest">
                <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"MBATest"));  echo $echoList; ?> '>


                <input id="beijingceshi1" type="submit" class="btn1" value="查看测试结果" />

            </form>

        </div>

    </div>

</section>



<?php $__Template->display("themes/default/footer_withoutFantastic"); ?>

<?php $__Template->display("themes/default/ending"); ?>

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){


        $('#myForm').submit(function(){

            // alert("11");
            var str="";

            // if ($('select[name="ti1"]').val())
                str += '院校：' + $('select[name="ti1"]').val();

            if ($('select[name="ti2"]').val())
                str += '；专业：' + $('select[name="ti2"]').val();

            if ($('select[name="ti3"]').val())
                str += '；最高学历：' + $('select[name="ti3"]').val();

            if ($('input:radio[name="ti4"]:checked').val())
                str += '；公司的性质：' + $('input:radio[name="ti4"]:checked').val();

            if ($('input:radio[name="ti5"]:checked').val())
                str += '；行业类别：' + $('input:radio[name="ti5"]:checked').val();

            if ($('input:radio[name="ti6"]:checked').val())
                str += '；工作职能：' + $('input:radio[name="ti6"]:checked').val();

            if ($('input:radio[name="ti7"]:checked').val())
                str += '；职位类型：' + $('input:radio[name="ti7"]:checked').val();

            if ($('input:radio[name="ti8"]:checked').val())
                str += '；下属人数：' + $('input:radio[name="ti8"]:checked').val();

            if ($('input:radio[name="ti9"]:checked').val())
                str += '；管理岗位经验：' + $('input:radio[name="ti9"]:checked').val();



            $("input[name='content']").val(str);
            console.log(str);
        });
    });

    $(function () {
        //获取短信验证码
        var validCode = true;
        $(".msg").click (function () {

            if ($("#myForm input[name='name']").val() == "" || $("#myForm input[name='tel']").val() == "") {
                alert("请完整填写信息！");
                return false;
            }
            else if (!$("#myForm input[name='tel']").val().match(/^1[34578]{1}\d{9}$/)) {
                alert("请正确填写手机号！");
                return false;
            }
            else{
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "<?php echo U('DuxCms/Form/miji_yz');?>",
                    data: $('#myForm').serialize(),// 你的formid
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
    });



</script>


";s:12:"compile_time";i:1543759157;}";
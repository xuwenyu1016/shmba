<?php exit;?>001575346218d24be2f3d47f21efcb12075f59a65d8cs:17589:"a:2:{s:8:"template";s:17524:"﻿
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<link rel="stylesheet" href="/assets/css/interviewMobile.css">

<div class="partOne">
    <img src="/upload/2017-12-06/44.jpg" class="am-img-responsive" />
    <!--<div class="signUpBox">-->
    <!--<button class="signUp"  data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 355}">立即报名</button>-->
    <!--</div>-->
</div>

<div class="partTwo">
    <ul class="am-avg-sm-2 am-padding-sm">
        <li>
            <h2 class="am-text-center">上海华彰</h2>
            <h4 class="am-text-center">MBA考试辅导机构</h4>
        </li>
        <li>
            <h2 class="am-text-center">全国咨询热线</h2>
            <h4 class="am-text-center">
                <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schoolInfo", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
                <a href="tel:<?php echo $list["tel"];?>" class="am-link-muted"><?php echo $list["tel"];?></a>
                <?php } ?>
            </h4>
        </li>
    </ul>
</div>

<div class="partThree am-padding-horizontal-sm am-padding-top-sm">

    <h2 class="am-text-center">MBA提前面试</h2>

    <div class="line">
        <hr>
    </div>

    <h4 class="am-margin-top-sm am-padding-horizontal-lg am-text-justify">报考MBA的同学,大多对”提前面试”一词几乎是耳熟能详，但对其中的“潜规则”却只是略知一二，更别提对在提前面试中拿到优秀资格还有几分胜筹了。这里，华彰就为您层层揭开“MBA提前面试”的神秘面纱。</h4>

    <a class="signUp" href="/topic-mianShiShuoMing.html" id="mainshi1">了解更多MBA提前面试资讯</a>

</div>

<div class="partEight am-padding-sm">
    <h2 class="am-text-center">试听课List</h2>

    <div class="line">
        <hr>
    </div>

    <ul class="am-avg-sm-2">
        <li>
            <div class="container">
               <a>
                    <img src="/upload/2017-12-06/38.jpg" class="am-img-responsive am-center" alt="上海华彰MBA-提前面试"/>
                    <h3 class="am-text-truncate">MBA面试教育展</h3>
                    <h4 class="am-text-truncate">上海MBA高校面试流程讲解</h4>
                    <h5>主讲人：高校MBA招生老师<br/>
                        时间：12月15日 周六 <br/>13:00-17:00<br/>
                        地址：徐汇区漕宝路66号光大会展中心国际大酒店二楼9号厅
                    </h5>
               </a>
            </div>

            <button class="signUp am-margin-vertical-sm" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 355}" id="mainshi4">立即预约</button>
            <!--<button class="signUp am-margin-vertical-sm disabled" id="mainshi4">已结束</button>-->
        </li>
        <li>
            <div class="container  ">
                <a>
                    <img src="/upload/2017-12-06/80.jpg" class="am-img-responsive am-center" alt="上海华彰MBA-提前面试"/>
                    <h3 class="am-text-truncate">MBA面试咨询会</h3>
                    <h4 class="am-text-truncate">面试技巧讲解</h4>
                    <h5>主讲人：高校MBA面试官<br/>
                        时间：11月3日 周六 <br/>13:30-16:00<br/>
                        地址：长宁区定西路1300号2号楼
                    </h5>
                </a>
            </div>
            <!--<button class="signUp am-margin-vertical-sm" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 355}" id="mainshi5">立即预约</button>-->
            <button class="signUp am-margin-vertical-sm disabled" id="mainshi4">已结束</button>
        </li>

    </ul>
</div>

<div class="partSix am-padding-horizontal-sm">

    <h2 class="am-text-center">提前面试课程介绍</h2>

    <div class="line">
        <hr>
    </div>

    <ul class="am-avg-sm-2 am-margin-top-sm">
        <li class="forty">
            <img src="/upload/2017-12-04/47.png" class="am-img-responsive am-center" alt="提前面试课程介绍" />
        </li>

        <li class="am-padding-sm sixty">
            <p class="am-text-xs am-margin-vertical-0">导师面对面背景评估</p>
            <p class="am-text-xs am-margin-vertical-0">确定参加面试的院校及批次</p>
            <p class="am-text-xs am-margin-vertical-0">基础面试材料填写培训</p>
            <p class="am-text-xs am-margin-vertical-0">3次修改考生基本面试材料</p>
            <p class="am-text-xs am-margin-vertical-0">面试导师终审，形成终稿</p>
        </li>
    </ul>
    <ul class="am-avg-sm-2">

        <li class="am-padding-sm sixty">
            <p class="am-text-xs am-margin-vertical-0">高校MBA面试政策解析</p>
            <p class="am-text-xs am-margin-vertical-0">一对一个人面试实践</p>
            <p class="am-text-xs am-margin-vertical-0">无领导小组面试实践</p>
            <p class="am-text-xs am-margin-vertical-0">一对一压力面试实践</p>
            <p class="am-text-xs am-margin-vertical-0">一对一英语面试实践</p>
        </li>
        <li class="forty">
            <img src="/upload/2017-12-04/48.png" class="am-img-responsive am-center" alt="提前面试课程介绍" />
        </li>
    </ul>
    <ul class="am-avg-sm-2">
        <li class="forty">
            <img src="/upload/2017-12-04/49.png" class="am-img-responsive am-center" alt="提前面试课程介绍" />
        </li>

        <li class="am-padding-sm sixty">
            <p class="am-text-xs am-margin-vertical-0">MBA现任面试官讲解面试方法</p>
            <p class="am-text-xs am-margin-vertical-0">MBA面试前批次分享面试经验</p>
            <p class="am-text-xs am-margin-vertical-0">模拟面试培养临场发挥</p>
            <p class="am-text-xs am-margin-vertical-0">针对面试问题逐项矫正</p>
            <p class="am-text-xs am-margin-vertical-0">调整面试状态及临考状态</p>
        </li>
    </ul>

</div>

<section class="am-padding-horizontal-sm">
    <h2 class="am-text-center">MBA提前面试课程设置</h2>
    <div class="line">
        <hr>
    </div>
    <img src="/upload/2017-12-04/50.jpg" class="am-img-responsive am-center am-margin-vertical-sm" />
</section>

<div class="partSeven am-padding-vertical-sm">

    <h2 class="am-text-center">盛邀企业高管，面试官执教</h2>

    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{"controlNav":false}' >
        <ul class="am-slides">

            <li>
                <ul class="am-avg-sm-2">
                    <li>
                        <article class="am-padding-sm">
                            <img src="/upload/2018-02-24/9.png" class="am-img-responsive am-center" alt="樊登 面试导师" draggable="false">
                            <p class="am-text-center am-margin-bottom-0"><b>樊登 面试导师</b></p>
                            <p class="am-text-center am-margin-vertical-0 am-text-xs">樊登读书会创始人；华彰教育集团董事长、MBA讲师</p>
                        </article>
                    </li>
                   <li>
                        <article class="am-padding-sm">

                            <img src="/upload/2017-12-04/51.png" class="am-img-responsive am-center" alt="赵华 面试导师" draggable="false">
                            <p class="am-text-center am-margin-bottom-0"><b>赵华 面试导师</b></p>
                            <p class="am-text-center am-margin-vertical-0 am-text-xs">高校MBA面试官、博士生导师、高校商学院教授。</p>

                        </article>
                    </li>  

                </ul>

            </li>
            <li>
                <ul class="am-avg-sm-2">
                    <li>
                        <article class="am-padding-sm">

                            <img src="/upload/2017-12-04/52.png" class="am-img-responsive am-center" alt="闻涛 面试导师" draggable="false">
                            <p class="am-text-center am-margin-bottom-0"><b>闻涛 面试导师</b></p>
                            <p class="am-text-center am-margin-vertical-0 am-text-xs">高校MBA面试官、知名企业总经理，高校MBA职业导师。</p>

                        </article>
                    </li>
                    <li>
                        <article class="am-padding-sm">

                            <img src="/upload/2017-12-04/51.png" class="am-img-responsive am-center" alt="张浩 面试导师" draggable="false">
                            <p class="am-text-center am-margin-bottom-0"><b>张浩 面试导师</b></p>
                            <p class="am-text-center am-margin-vertical-0 am-text-xs">高校MBA面试官，曾经参与多所高校面试政策制定。</p>

                        </article>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-2">
                    <li>
                        <article class="am-padding-sm">

                            <img src="/upload/2017-12-04/52.png" class="am-img-responsive am-center" alt="林江  面试导师" draggable="false">
                            <p class="am-text-center am-margin-bottom-0"><b>林江  面试导师</b></p>
                            <p class="am-text-center am-margin-vertical-0 am-text-xs">高校MBA面试官、高校MBA职业导师，上市公司战略总监 。</p>

                        </article>
                    </li>
                    <li>
                        <article class="am-padding-sm">

                            <img src="/upload/2017-12-04/51.png" class="am-img-responsive am-center" alt="张正  面试导师" draggable="false">
                            <p class="am-text-center am-margin-bottom-0"><b>张正 面试导师</b></p>
                            <p class="am-text-center am-margin-vertical-0 am-text-xs">高校MBA、EMBA面试官、高校MBA职业导师。</p>

                        </article>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-2">
                    <li>
                        <article class="am-padding-sm">

                            <img src="/upload/2017-12-04/52.png" class="am-img-responsive am-center" alt="马超 面试导师" draggable="false">
                            <p class="am-text-center am-margin-bottom-0"><b>马超 面试导师</b></p>
                            <p class="am-text-center am-margin-vertical-0 am-text-xs">高校MBA面试官，上市公司总经理、高校MBA创业导师。</p>

                        </article>
                    </li>
<li>
                        <article class="am-padding-sm">

                            <img src="/upload/2017-12-04/51.png" class="am-img-responsive am-center" alt="周华 面试导师" draggable="false">
                            <p class="am-text-center am-margin-bottom-0"><b>周华 面试导师</b></p>
                            <p class="am-text-center am-margin-vertical-0 am-text-xs">高校MBA面试官，高校商学院教授。</p>

                        </article>
                    </li>
                   
                </ul>
            </li>
        </ul>
    </div>

</div>

<div class="interview-student am-padding-sm">

    <button class="signUp" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 355}" id="mainshi2">课程预约及咨询</button>


    <h2 class="am-text-center">华彰提前面试录取学员</h2>

    <div class="line">
        <hr>
    </div>

    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{"controlNav":false}' >
        <ul class="am-slides">

            <li>
                <ul class="am-avg-sm-2 am-margin-top-sm">
                    <li>
                        <article>
                            <img src="/upload/2017-12-04/35.png" class="am-img-responsive am-center" />

                            <p><span>姓名：</span><span>鲍靖静</span></p>
                            <p><span>录取院校：</span>上海财大MBA</p>

                        </article>
                    </li>
                    <li>
                        <article class="">
                            <img src="/upload/2017-12-04/36.png" class="am-img-responsive am-center" />

                            <p><span>姓名：</span><span>石峰</span></p>
                            <p><span>录取院校：</span>交大安泰MBA</p>

                        </article>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-2 am-margin-top-sm">
                    <li>
                        <article>
                            <img src="/upload/2017-12-04/37.png" class="am-img-responsive am-center" />

                            <p><span>姓名：</span><span>刘哲立</span></p>
                            <p><span>录取院校：</span>上海财大MBA</p>

                        </article>
                    </li>
                    <li>
                        <article class="">
                            <img src="/upload/2017-12-04/44.png" class="am-img-responsive am-center" />

                            <p><span>姓名：</span><span>周晨</span></p>
                            <p><span>录取院校：</span>交大高金MBA</p>

                        </article>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-2 am-margin-top-sm">
                    <li>
                        <article>
                            <img src="/upload/2017-12-04/45.png" class="am-img-responsive am-center" />

                            <p><span>姓名：</span><span>汪亚文</span></p>
                            <p><span>录取院校：</span>交大安泰MBA</p>

                        </article>
                    </li>
                    <li>
                        <article class="">
                            <img src="/upload/2017-12-04/46.png" class="am-img-responsive am-center" />

                            <p><span>姓名：</span><span>陈家亮</span></p>
                            <p><span>录取院校：</span>复旦MBA</p>

                        </article>
                    </li>
                </ul>
            </li>
        </ul>
    </div>




</div>

<div class="am-modal am-modal-no-btn modelPopup" id="doc-modal-1" tabindex="-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            预约试听<a class="am-close am-close-spin" data-am-modal-close="" href="javascript: void(0)">&times;</a></div>
        <div class="am-modal-bd">
            <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit">

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
                    <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                    <input name="browserType" type="hidden" />
                    <input name="ip" type="hidden" />

                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="guestbook">
                    <button type="submit" id="mainshi7">点击提交</button>
                </div>

            </form>
        </div>
    </div>
</div>


<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>
";s:12:"compile_time";i:1543810218;}";
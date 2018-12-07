<?php exit;?>0015518706026c802b9d6c286931c8079f175c205b0fs:10871:"a:2:{s:8:"template";s:10806:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-02-26/1.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="consult-allInfo am-padding-vertical-xl">
    <div class="am-container">
        <h2>你关心的所有备考信息都在这里</h2>

        <ul class="am-avg-sm-4 am-padding-vertical-lg">
            <li>
                <div class="innerBox am-padding-bottom-sm">
                    <img src="/upload/2018-02-26/2.png" class="am-img-responsive am-center" alt="MBA价值" />
                    <p class="infoTitle">MBA价值</p>
                    <p class="infoDescribe">工作遇到瓶颈，我想提高学历，提高自己管理能力，考MBA有用吗？</p>
                </div>
            </li>
            <li>
                <div class="innerBox am-padding-bottom-sm">
                    <img src="/upload/2018-02-26/3.png" class="am-img-responsive am-center" alt="人群分析" />
                    <p class="infoTitle">人群分析</p>
                    <p class="infoDescribe">哪些人适合攻读MBA？MBA学哪些内容？</p>
                </div>
            </li>
            <li>
                <div class="innerBox am-padding-bottom-sm">
                    <img src="/upload/2018-02-26/4.png" class="am-img-responsive am-center" alt="择校方向" />
                    <p class="infoTitle">择校方向</p>
                    <p class="infoDescribe">毕业10年如何备考？笔试不错，怎么拿到高校的巨额奖学金？</p>
                </div>
            </li>
            <li>
                <div class="innerBox am-padding-bottom-sm">
                    <img src="/upload/2018-02-26/5.png" class="am-img-responsive am-center" alt="报考条件" />
                    <p class="infoTitle">报考条件</p>
                    <p class="infoDescribe">交大,复旦等名校MBA报考条件是什么？我有什么优势？</p>
                </div>
            </li>

            <li>
                <div class="innerBox am-padding-top-sm">
                    <img src="/upload/2018-02-26/6.png" class="am-img-responsive am-center" alt="院校实况" />
                    <p class="infoTitle">院校实况</p>
                    <p class="infoDescribe">18年上海各大院校招生政策有哪些变化？</p>
                </div>
            </li>
            <li>
                <div class="innerBox am-padding-top-sm">
                    <img src="/upload/2018-02-26/7.png" class="am-img-responsive am-center" alt="提前面试" />
                    <p class="infoTitle">提前面试</p>
                    <p class="infoDescribe">高校MBA提前面试是什么？交大，复旦等名校提前面试会问什么问题？</p>
                </div>
            </li>
            <li>
                <div class="innerBox am-padding-top-sm">
                    <img src="/upload/2018-02-26/8.png" class="am-img-responsive am-center" alt="关于考试" />
                    <p class="infoTitle">关于考试</p>
                    <p class="infoDescribe">MBA联考考哪些科目？考试难度有多大？我该怎么备考？</p>
                </div>
            </li>
            <li>
                <div class="innerBox am-padding-top-sm">
                    <img src="/upload/2018-02-26/9.png" class="am-img-responsive am-center" alt="户口问题" />
                    <p class="infoTitle">户口问题</p>
                    <p class="infoDescribe">想要落个上海户口，我应该怎么择校，如何做准备呢？</p>
                </div>
            </li>
        </ul>

        <p class="tel-consult">免费咨询热线：<?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schoolInfo", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?><?php echo $list["tel"];?><?php } ?><button>了解备考信息</button></p>

    </div>
</section>

<section class="consult-highlights am-padding-vertical-xl">
    <div class="am-container">
        <h2>咨询会亮点</h2>
        <h3 class="am-text-center">专业的导师团队</h3>

        <ul class="am-avg-sm-2 consult-highlists-points am-padding-top-sm">
            <li>
                <span class="num">1/</span>
                <span class="details">2018年MBA面试、笔试备考信息</span>
            </li>
            <li>
                <span class="num">2/</span>
                <span class="details">2018年各校商学院MBA招生流程</span>
            </li>
        </ul>
        <ul class="am-avg-sm-2 consult-highlists-points am-padding-bottom-sm">
            <li>
                <span class="num">3/</span>
                <span class="details">2018年各校商学院MBA项目招生政策信息</span>
            </li>
            <li>
                <span class="num">4/</span>
                <span class="details">2018年各校商学院MBA项目发展趋势</span>
            </li>
        </ul>

        <h2 class="am-padding-top-sm">备考导师现场答疑，赶快预约吧！</h2>
        <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit am-padding-top-sm">
            <ul class="am-avg-sm-2">
                <li>
                    <div class="formContainer">
                        <span>预约时间</span>
                        <select>
                            <?php echo $contentInfo["consultTime"];?>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="formContainer">
                        <span>姓名</span>
                        <input type="text" name="name" placeholder="姓名：" />
                    </div>
                </li>
                <li>
                    <div class="formContainer">
                        <span>预约校区</span>
                        <select>
                            <?php echo $contentInfo["consultAddress"];?>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="formContainer">
                        <span>手机号</span>
                        <input type="tel" name="tel" placeholder="手机号：" />
                    </div>
                </li>
                <li>
                    <div class="formContainer checkcode">
                        <span>验证码</span>
                        <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码："/>
                        <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                    </div>
                </li>
                <li>
                    <div class="formContainer">
                        <input name="time" type="hidden" />
                        <input name="link" type="hidden" />

                        <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                        <input type="hidden" name="table" value="guestbook">
                        <button type="submit" id="submitFormButton">点击提交</button>
                    </div>
                </li>
            </ul>
        </form>
    </div>
</section>

<section class="consult-gift am-padding-vertical-xl">
    <div class="am-container">
        <h2>预约咨询会即 赠送两重大礼</h2>
        <ul class="am-avg-sm-2 am-padding-top-lg gift-1">
           <li>
               <img src="/upload/2018-02-26/13.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
           </li>
            <li class="am-padding-right-lg">
                <h3>1/ 价值 <span class="red">500元</span> 备考大礼包</h3>
                <p>华章内部核心资料：</p>
                <p class="am-text-sm">《华章备考秘籍：面试简历模板+作文模板》、《数学公式手册》、《MBA联考历年真题册》、《各大院校简章》、华章精美笔记本、以及以下四本管理类书籍（任选一本）</p>
            </li>
        </ul>
        <ul class="am-avg-sm-2 gift-2 am-padding-top-sm">
            <li class="am-padding-right-lg">
                <h3>2/ <span class="red">现场报名（笔试+面试）</span> 即可享受新优惠</h3>
                <ol class="am-margin-0">
                    <li><p class="am-text-sm">报全程笔试+提前面试班 打折；</p></li>
                    <li><p class="am-text-sm">赠送个性化提前面试择校方案一套；</p></li>
                    <li><p class="am-text-sm">赠送机工版MBA\MPA\MPAcc系列辅导教材《数学分册》1本；</p></li>
                    <li><p class="am-text-sm">获得校长一对一备考咨询一次；</p></li>
                    <li><p class="am-text-sm">赠送高教版MBA\MPA\MPAcc系列辅导教材《词频、词汇》1本；</p></li>
                    <li><p class="am-text-sm">赠送高教版MBA\MPA\MPAcc系列辅导教材《英语分册》1本；</p></li>
                </ol>
            </li>
            <li>
                <img src="/upload/2018-02-26/12.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p class="am-text-sm am-text-center">手机微信扫码<br/>即可免费领取华章大礼包</p>
            </li>
        </ul>
    </div>
</section>

<section class="consult-location am-padding-vertical-xl">
    <div class="am-container">
        <h2>活动地址</h2>

        <ul class="am-avg-sm-2 am-padding-top-lg">
            <li class="am-padding-horizontal-lg">
                <p>时间：<span class="am-text-sm"><?php echo $contentInfo["consultDate"];?></span></p>

                <p>地址：<span class="am-text-sm"><?php echo $contentInfo["consultLocation"];?>	</span></p>

                <p>活动人数：<span class="am-text-sm">120人</span></p>

                <p>天气：<span class="am-text-sm">多云转晴</span></p>
            </li>
            <li>
                <div style="width:500px;height:200px;border:#ccc solid 1px;font-size:12px" id="<?php echo $contentInfo["baiduditu"];?>"></div>
            </li>
        </ul>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>

";s:12:"compile_time";i:1520334602;}";
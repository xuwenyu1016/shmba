<?php exit;?>001575628734bdc1e0e2ef534c746974235670fa69b3s:22842:"a:2:{s:8:"template";s:22777:"﻿<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-03-26/1.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
</section>

<section class="jiaoyuzhan-willingness am-padding-vertical-xl">
    <div class="am-container">
        <ul class="am-avg-sm-3 cols">
            <li>
                <div class="innerBox">
                    <h4><span></span>提前确定面试录取资格</h4>
                    <p>咨询会现场，高校MBA招生主任<br/>1VS1确认你的面试录取资格。</p>
                    <p class="am-text-sm">*预录取资格高校名单请同华章老师确认</p>
                </div>

                <div class="innerBox">
                    <h4><span></span>名额有限 先得先得</h4>
                    <p>上海MBA高校预录取资格，共计30个名额。</p>
                    <p class="am-text-sm">*以提交预约时间为准。</p>
                </div>
                <div class="innerBox">
                    <h4>辅导课程优惠"价”给你<span></span></h4>
                    <p>咨询会当日，MBA考试辅导课程大优惠，<br/>现场报名享受团购价。</p>
                </div>
            </li>

            <li><img src="/upload/2018-03-26/2.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" /></li>
            <li>

                <div class="innerBox">
                    <h4><span></span>MBA录取秘籍</h4>
                    <p>交大、上财、同济、上外、华理、<br/>华师大...各名校招生主任介绍录取秘籍。</p>
                </div>
                <div class="innerBox">
                    <h4>樊登读书会-华章分会<span></span></h4>
                    <p>华章教育董事长樊登博士</p>
                    <p>新作《可复制的领导力》现场赠送，<br/>加入樊登读书会华章分会更有惊喜大礼。</p>
                </div>

                <div class="innerBox">
                    <h4>华章18年初心不变<span></span></h4>
                    <p>选择了读MBA，始终有华章的陪伴！<br/>18年来初心不变，为您搭建通往名校MBA<br/>的华章之桥！</p>
                </div>
            </li>
        </ul>

        <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit">
            <ul class="am-avg-sm-5 jiaoyuzhan-form-box">
                <li>
                    <select name="content">
                        <option value="" disabled selected>咨询意向：</option>
                        <option value ="复习备考">复习备考</option>
                        <option value ="招生信息">招生信息</option>
                        <option value="预录取名额">预录取名额</option>
                    </select>
                </li>
                <li><input type="text" placeholder="姓名：" name="name" /></li>
                <li><input type="tel" placeholder="手机号：" name="tel" /></li>
                <li class="validate">
                    <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码：" />
                    <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onClick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                </li>
                <li>
                    <input name="time" type="hidden" />
                    <input name="link" type="hidden" />
                    <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                    <input name="browserType" type="hidden" />
                    <input name="ip" type="hidden" />

                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="guestbook">
                    <button type="submit">立即预约</button>
                </li>
            </ul>
        </form>
    </div>
</section>

<section class="jiaoyuzhan-highlights am-padding-vertical-xl">
    <div class="am-container">
        <h2>MBA教育展亮点</h2>

        <ul class="am-avg-sm-4 am-margin-top-lg">
           <li>
               <article>
                   <img src="/upload/2018-03-26/3.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                   <div class="innerBox">
                       <p>-01-</p>
                       <h4>MBA院校</h4>
                       <p>沪上MBA商学院招生主管悉数到场</p>
                   </div>
               </article>
           </li>
            <li>
                <article>
                    <img src="/upload/2018-03-26/4.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                    <div class="innerBox">
                        <p>-02-</p>
                        <h4>招生政策</h4>
                        <p>参展院校2019MBA招生政策权威发布</p>
                    </div>
                </article>
            </li>
            <li>
                <article>
                    <img src="/upload/2018-03-26/5.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                    <div class="innerBox">
                        <p>-03-</p>
                        <h4>提前面试</h4>
                        <p>各大MBA商学院提前面试方针、批次、录取情况抢先知道</p>
                    </div>

                </article>
            </li>
            <li>
                <article>
                    <img src="/upload/2018-03-26/6.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                    <div class="innerBox">
                        <p>-04-</p>
                        <h4>招生官</h4>
                        <p>与MBA名校招生官零距离接触，享受1vs1沟通交流</p>
                    </div>

                </article>
            </li>
        </ul>
    </div>
</section>

<section class="jiaoyuzhan-schools am-padding-vertical-xl">
    <div class="am-container">
        <h2>参展MBA商学院</h2>
        <p class="am-text-center am-margin-vertical-xs">多校MBA招生官，展开生源争夺大战，为你详解各校MBA招生情况&备考策略。</p>
        <ul class="am-avg-sm-3 am-padding-top-lg">

            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2018-02-11/13.png" class="am-img-responsive am-center" alt="交大安泰" />
                    <p>交大安泰</p>
                </div>
            </li>
            <!--<li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2017-12-28/5d8ce290c6a943968f58cfee72c9f85d.png" class="am-img-responsive am-center" alt="交大高金" />
                    <p>交大高金</p>
                </div>
            </li>-->
            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2017-12-28/aa8f0ce2b8a17ece40809ee4c29e8488.png" class="am-img-responsive am-center" alt="复旦泛海" />
                    <p>复旦泛海</p>
                </div>
            </li>
            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2017-12-28/26a51163560ac3675c1077892e56ba72.png" class="am-img-responsive am-center" alt="上海财经大学" />
                    <p>上海财大</p>
                </div>
            </li>
            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2017-12-28/31bc12e16fca44fbcd16a6c7017b80f6.png" class="am-img-responsive am-center" alt="中央财经大学" />
                    <p>华东理工</p>
                </div>
            </li>
            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2017-12-29/98b90fdd1da0c80d65fe9a2ce54be52e.png" class="am-img-responsive am-center" alt="北京理工大学" />
                    <p>上外</p>
                </div>
            </li>


            <!--<li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2017-12-28/d5098e7737c0224e99fdc271b573149e.png" class="am-img-responsive am-center" alt="同济大学" />
                    <p>同济</p>
                </div>
            </li>-->
            <!--<li class="am-padding-bottom-sm">
                         <div class="innerBox">
                             <img src="/upload/2017-12-29/88f9d4c530217978acd9f0ebe2e31b58.png" class="am-img-responsive am-center" alt="北京科技大学" />
                             <p>华师大</p>
                         </div>
                     </li>-->

            <!--<li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2018-02-11/10.png" class="am-img-responsive am-center" alt="中国传媒大学" />
                    <p>东华大学</p>
                </div>
            </li>-->
            <!-- <li class="am-padding-bottom-sm">
               <div class="innerBox">
                   <img src="/upload/2018-02-11/9.png" class="am-img-responsive am-center" alt="中国政法大学" />
                   <p>上海理工</p>
               </div>
           </li>-->
            <!--<li class="am-padding-bottom-sm">
              <div class="innerBox">
                  <img src="/upload/2018-02-11/12.png" class="am-img-responsive am-center" alt="中国政法大学" />
                  <p>上外贸</p>
              </div>
          </li>-->

        </ul>
    </div>
</section>

<section class="jiaoyuzhan-process am-padding-vertical-xl">
    <div class="am-container">
        <h2>MBA教育展流程</h2>
        <p class="am-text-center am-margin-vertical-xs">一下午全面了解MBA商学院新政，2019MBA择校指导</p>
        <ul class="am-avg-sm-2 am-padding-vertical-lg">
            <li><img src="/upload/2018-03-26/9.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" /></li>
            <li>
                <p><span class="num">1</span><span class="time">13:00-13:30</span><span class="process-content">学员签到</span></p>
                <p class="borderOr"><span></span></p>
                <!--<p><span class="num">2</span><span class="time">13:30-13:40</span><span class="process-content">教育展嘉宾介绍</span></p>-->
                <p class="borderOr"><span></span></p>
                <p><span class="num">2</span><span class="time">13:30-16:30</span><span class="process-content">MBA院校招生政策宣讲：<br/>各校MBA中心招生主管、MBA中心主任</span></p>
                <p class="borderOr"><span></span></p>
                <p><span class="num">3</span><span class="time">16:30-17:00</span><span class="process-content">华章面试讲座—面试预录取资格大放送</span></p>
                <!--<p class="borderOr"><span></span></p>-->
              <!-- <p><span class="num">4</span><span class="time">16:20-16:30</span><span class="process-content">现场抽奖</span></p>-->
                <p class="borderOr"><span></span></p>
                <p><span class="num">4</span><span class="time">16:30-17:00</span><span class="process-content">与名校MBA招生官面对面：<br/>1vs1报考背景评估</span></p>
            </li>
        </ul>

        <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit">
            <ul class="am-avg-sm-5 jiaoyuzhan-form-box">
                <li>
                    <select name="content">
                        <option value="" disabled selected>咨询意向：</option>
                        <option value ="复习备考">复习备考</option>
                        <option value ="招生信息">招生信息</option>
                        <option value="预录取名额">预录取名额</option>
                    </select>
                </li>
                <li><input type="text" placeholder="姓名：" name="name" /></li>
                <li><input type="tel" placeholder="手机号：" name="tel" /></li>
                <li class="validate">
                    <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码：" />
                    <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onClick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                </li>
                <li>
                    <input name="time" type="hidden" />
                    <input name="link" type="hidden" />
                    <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                    <input name="browserType" type="hidden" />
                    <input name="ip" type="hidden" />

                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="guestbook">
                    <button type="submit">立即预约</button>
                </li>
            </ul>
        </form>
    </div>
</section>

<section class="jiaoyuzhan-location am-padding-vertical-xl">
    <div class="am-container">
        <h2>会场地址</h2>
        <p class="am-text-center am-margin-vertical-xs">12月15日 我们不见不散</p>
        <ul class="am-avg-sm-2 am-margin-top-lg">
            <li>
                <div id="<?php echo $categoryInfo["map"];?>" style="width:100%;height:250px;"></div>
            </li>
            <li>
                <p><b>时间：</b></p>
                <p><?php echo $categoryInfo["time"];?></p>
                <p><b>地点：</b></p>
                <p><?php echo $categoryInfo["address"];?></p>
                <p><b>路线：</b></p>
                <p><?php echo $categoryInfo["route"];?></p>
            </li>
        </ul>
    </div>
</section>

<section class="jiaoyuzhan-presents am-padding-vertical-xl">
    <div class="am-container">
        <h2>豪礼相送</h2>
        <p class="am-text-center am-margin-vertical-xs">签到领简章  现场签约更多惊喜</p>
        <ul class="am-avg-sm-2 am-margin-top-lg">
            <li>
                <img src="/upload/2018-03-26/10.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p class="am-text-center am-margin-vertical-sm">签到即领高校MBA招生简章</p>
            </li>
            <li>
                <img src="/upload/2018-03-26/11.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                <p class="am-text-center am-margin-vertical-sm">现场同行报名，享更多折扣</p>
            </li>
        </ul>
    </div>
</section>

<section class="jiaoyuzhan-preview am-padding-vertical-xl">
    <div class="am-container">
        <h2>往期回顾</h2>
        <p class="am-text-center am-margin-vertical-xs">2018年华章MBA教育展活动盛况</p>
        <ul class="am-avg-sm-4 am-margin-vertical-lg">
            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2018-03-26/13.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </div>
            </li>
            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2018-03-26/14.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </div>
            </li>
            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2018-03-26/15.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </div>
            </li>
            <li class="am-padding-bottom-sm">
                <div class="innerBox">
                    <img src="/upload/2018-03-26/16.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </div>
            </li>
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-03-26/17.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </div>
            </li>
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-03-26/18.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </div>
            </li>
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-03-26/19.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </div>
            </li>
            <li>
                <div class="innerBox">
                    <img src="/upload/2018-03-26/20.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                </div>
            </li>
        </ul>

        <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit">
            <ul class="am-avg-sm-5 jiaoyuzhan-form-box">
                <li>
                    <select name="content">
                        <option value="" disabled selected>咨询意向：</option>
                        <option value ="复习备考">复习备考</option>
                        <option value ="招生信息">招生信息</option>
                        <option value="预录取名额">预录取名额</option>
                    </select>
                </li>
                <li><input type="text" placeholder="姓名：" name="name" /></li>
                <li><input type="tel" placeholder="手机号：" name="tel" /></li>
                <li class="validate">
                    <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码：" />
                    <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onClick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                </li>
                <li>
                    <input name="time" type="hidden" />
                    <input name="link" type="hidden" />
                    <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                    <input name="browserType" type="hidden" />
                    <input name="ip" type="hidden" />

                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="guestbook">
                    <button type="submit">立即预约</button>
                </li>
            </ul>
        </form>
    </div>
</section>

<section class="lessons am-padding-vertical-xl">
    <div class="am-container">
        <h2>更多相关项目推荐<span class="borderSpan"></span></h2>

        <ul class="am-avg-sm-3 am-margin-top-lg">
            <li>
                <a class="am-padding-sm" href="/topic-fanDengDuShuHui.html">
                    <p class="class-title am-margin-top-0 am-margin-bottom-xs">樊登读书会，半间教室</p>
                    <img src="/upload/2018-12-06/3d9b6ec801db0f76d7eb7dca2393b566.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />
                    <p class="am-margin-vertical-xs flagship"><span>一周一书</span><span>书籍解读</span><span>学习型社区</span></p>
                    <p class="am-margin-vertical-xs am-text-sm">重新定义阅读和学习，越读越有趣！</p>
                    <span class="link-span">立即咨询>></span>
                </a>
            </li>
            <li>
                <a class="am-padding-sm" href="/topic-huazhangzhuanbenke.html">
                    <p class="class-title am-margin-top-0 am-margin-bottom-xs">专本科</p>
                    <img src="/upload/2018-12-06/1c9bbeac08aa3d8875d024e97c8a55b6.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />
                    <p class="am-margin-vertical-xs flagship"><span>2.5年毕业</span><span>学信网可查</span><span>上海市积分</span></p>
                    <p class="am-margin-vertical-xs am-text-sm">上海开放大学+上海业余大学合作培训</p>
                    <span class="link-span">立即咨询>></span>
                </a>
            </li>
            <li>
                <a class="am-padding-sm" href="http://p.qiao.baidu.com/cps/chat?siteId=12159402&userId=399307" target="_blank">
                    <p class="class-title am-margin-top-0 am-margin-bottom-xs">CFA,CMA,CPA,ACCA等</p>
                    <img src="/upload/2018-12-06/143393915f8513c50f7bdd8b1a0d592d.png" class="am-center am-img-responsive am-margin-bottom-sm" alt="" />
                    <p class="am-margin-vertical-xs flagship"><span>国家认证</span><span>从业资格证</span><span>高含金量</span></p>
                    <p class="am-margin-vertical-xs am-text-sm">上海财经大学合作培训</p>
                    <span class="link-span">立即咨询>></span>
                </a>
            </li>
        </ul>

    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1544092734;}";
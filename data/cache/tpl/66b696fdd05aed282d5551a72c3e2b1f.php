<?php exit;?>001575079476aeb2638289d689b4c7bcaffee177871ds:14620:"a:2:{s:8:"template";s:14555:"<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-14/8c944f4650e6416b0bf478e3a3ee618b.png" class="am-img-responsive" alt="<?php echo $categoryInfo["name"];?>" />

<section class="download-head am-padding-sm">
    <ul class="am-avg-sm-2 am-padding-vertical-sm">
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
        <li class="am-padding-top-sm">
            <a id="da" class="downloadBox" href="/topic-MBAbaokaotiaojian.html">
                <span>答</span>
                <article class="rightBox am-padding-left-xs">
                    <p class="boxTitle">精准报考</p>
                    <p class="checkMore">问答</p>
                </article>
            </a>
        </li>
        <li class="am-padding-top-sm">
            <a id="ting" class="downloadBox" href="/list-MBAZaiXianShiTing.html">
                <span>听</span>
                <article class="rightBox am-padding-left-xs">
                    <p class="boxTitle">在线视频</p>
                    <p class="checkMore">试听</p>
                </article>
            </a>
        </li>
    </ul>
</section>

<section class="download-writtenTest am-padding-sm">
    <h2 class="title am-text-center am-margin-bottom-sm am-padding-top-xs">
        <span class="numContent">MBA联考<b class="green">笔试资料获取</b></span>
        <span class="borderBottom"></span>
    </h2>

    <ul class="am-avg-sm-2 am-margin-bottom-sm">
        <li class="am-padding-right-xs am-padding-vertical-xs">
            <article>
                <p class="orange">2008年-2017年</p>
                <p class="details">联考真题+答案详解</p>
            </article>
        </li>
        <li class="am-padding-left-xs am-padding-vertical-xs">
            <article>
                <p class="orange">2018年</p>
                <p class="details">管理类联考大纲</p>
            </article>
        </li>
        <li class="am-padding-right-xs am-padding-vertical-xs">
            <article>
                <p class="orange">77项</p>
                <p class="details">联考数学必考公式</p>
            </article>
        </li>
        <li class="am-padding-left-xs am-padding-vertical-xs">
            <article>
                <p class="orange">2000+</p>
                <p class="details">联考英语核心词汇</p>
            </article>
        </li>
        <li class="am-padding-right-xs am-padding-vertical-xs">
            <article>
                <p class="orange">论述文/论证有效性</p>
                <p class="details">联考中文写作模版</p>
            </article>
        </li>
        <li class="am-padding-left-xs am-padding-vertical-xs">
            <article>
                <p class="orange">大作文、小作文</p>
                <p class="details">联考英语写作模版</p>
            </article>
        </li>
    </ul>

    <button id="bishiziliaoanniu" class="acquire-material am-center am-margin-bottom-sm" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 325}">获取所有笔试资料</button>

    <div class="am-modal am-modal-no-btn fileModal" tabindex="-1" id="doc-modal-1">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">笔试资料获取
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form action="<?php echo U('DuxCms/Form/push');?>" method="post" role="form" >

                    <div class="formContainer am-margin-vertical-0">
                        <input type="text" name="name" placeholder="姓名：" class="am-margin-bottom-0"/>
                    </div>
                    <div class="formContainer am-margin-vertical-0">
                        <input type="tel" name="tel" placeholder="手机号：" class="am-margin-bottom-0"/>
                    </div>
                    <div class="formContainer am-margin-vertical-0">
                        <input type="email" name="content" placeholder="邮箱：" class="am-margin-bottom-0"/>
                    </div>

                    <div class="formContainer checkcode am-margin-vertical-0 am-padding-vertical-sm">
                        <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码" class="am-margin-bottom-sm"/>
                        <img title="点击刷新" height="32" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                    </div>


                    <input name="time" type="hidden" />
                    <input name="link" type="hidden" />
                    <input name="ip" type="hidden" />
                    <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                    <input name="browserType" type="hidden" />

                    <input name="table" type="hidden" value="guestbook">
                    <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>
                    <div class="formContainer am-margin-vertical-sm am-text-xs am-padding-bottom-sm">
                        备注: 华章老师将发送备考资料至您的邮箱，或您可登录华章官网电脑端直接下载资料。
                    </div>
                    <div class="formContainer am-margin-vertical-sm">
                        <button type="submit" class="signUp" id="id_submit0-3">点击提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="download-interviewTest am-padding-sm">
    <h2 class="title am-text-center am-margin-bottom-sm am-padding-top-xs">
        <span class="numContent">MBA联考<b class="green">面试资料获取</b></span>
        <span class="borderBottom"></span>
    </h2>

    <p class="am-text-center am-margin-vertical-sm">包含MBA院校招生简章、报考指南、面试攻略、申请材料模版、推荐信模版</p>


    <div data-am-widget="slider" class="am-slider am-slider-a5" data-am-slider='{"directionNav":false}' >
        <ul class="am-slides">
            <li>
                <ul class="am-avg-sm-3 am-margin-bottom-sm">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>6));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <?php if ( $list['infoDownload'] ){ ?>
                    <li class="am-padding-xs">
                        <article>
                            <img src="<?php echo $list["image"];?>" alt="" class="am-img-responsive am-center" />
                            <p class="am-text-center am-text-xs am-margin-vertical-xs"><?php echo $list["title"];?></p>
                        </article>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-3 am-margin-bottom-sm">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>8, "not_id"=>"1,6,9,7,8,15"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <?php if ( $list['infoDownload'] ){ ?>
                    <li class="am-padding-xs">
                        <article>
                            <img src="<?php echo $list["image"];?>" alt="" class="am-img-responsive am-center" />
                            <p class="am-text-center am-text-xs am-margin-vertical-xs"><?php echo $list["title"];?></p>
                        </article>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>


    <button id="mianshiziliaoanniu" class="acquire-material am-center am-margin-bottom-sm" data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 300, height: 325}">获取所有面试资料</button>

    <div class="am-modal am-modal-no-btn fileModal" tabindex="-1" id="doc-modal-2">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">面试资料获取
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form action="<?php echo U('DuxCms/Form/push');?>" method="post" role="form" >

                    <div class="formContainer am-margin-vertical-0">
                        <input type="text" name="name" placeholder="姓名：" class="am-margin-bottom-0"/>
                    </div>
                    <div class="formContainer am-margin-vertical-0">
                        <input type="tel" name="tel" placeholder="手机号：" class="am-margin-bottom-0"/>
                    </div>
                    <div class="formContainer am-margin-vertical-0">
                        <input type="email" name="content" placeholder="邮箱：" class="am-margin-bottom-0"/>
                    </div>

                    <div class="formContainer checkcode am-margin-vertical-0 am-padding-vertical-sm">
                        <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码" class="am-margin-bottom-sm"/>
                        <img title="点击刷新" height="32" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                    </div>


                    <input name="time" type="hidden" />
                    <input name="link" type="hidden" />
                    <input name="ip" type="hidden" />
                    <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                    <input name="browserType" type="hidden" />

                    <input name="table" type="hidden" value="guestbook">
                    <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>
                    <div class="formContainer am-margin-vertical-sm am-text-xs am-padding-bottom-sm">
                        备注: 华章老师将发送备考资料至您的邮箱，或您可登录华章官网电脑端直接下载资料。
                    </div>
                    <div class="formContainer am-margin-vertical-sm">
                        <button type="submit" class="signUp" id="id_submit-all">点击提交</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<section class="innerMaterial am-padding-sm">
    <h2 class="title am-text-center am-margin-bottom-sm am-padding-top-xs">
        <span class="numContent">MBA联考华章<b class="green">备考经验获取</b></span>
        <span class="borderBottom"></span>
    </h2>
    <p class="am-text-center am-margin-top-0">填写邮箱信息，领取华章备考经验：MBA联考笔试内部资料+历年真题册+面试攻略手册+面试材料模版+各高校报考指南</p>
    <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit am-margin-bottom-lg">

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

        <div class="formContainer am-margin-vertical-sm am-text-xs am-padding-bottom-sm">
            备注: 华章老师将发送备考资料至您的邮箱。
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
</section>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>

";s:12:"compile_time";i:1543543476;}";
<?php exit;?>001565234400cf760a0f66f7a5034403c14c2277d199s:90912:"a:2:{s:8:"template";s:90847:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-04-21/36.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<style>
    .condition-basics .condition-basics-terms{color: #444883;}
    .condition-basics h4{position: relative;}
    .condition-basics h4 span{display: block;}
    .condition-basics h4 span:nth-child(1){text-align: center;width: 200px;background-color: #1cc68c;color: white;border-radius: 5px;height: 32px;line-height: 32px;}
    .condition-basics h4 span:nth-child(2){border-top: 1px solid #1cc68c;position: absolute;left: 0;top:15px;width: 100%;z-index: -1;}
    .condition-basics ul li article{width: 90%;margin: 0 auto;}
    .condition-basics ul li:nth-child(2){border-left: 1px solid #eaeef1;border-right: 1px solid #eaeef1;}

    .condition-questions .title-box{position: relative;}
    .condition-questions .title-box  h2{width: 200px;background-color: white;}
    .condition-questions .title-box  h2 span{color: #f34142;}
    .condition-questions .title-box>span{position: absolute;width: 100%;border-top: 2px solid #eaeef1;left: 0;top:25px;z-index: -1;}

    .condition-questions .am-tabs{margin: 2.4rem 0 1.5rem 0;}
    .condition-questions .am-tabs-default .am-tabs-nav{background-color: transparent;}
    .condition-questions .am-tabs-default .am-tabs-nav>.am-active a{background-color: transparent;color: #0e90d2;font-weight: bold;}
    .condition-questions .am-tabs-bd{border: none;}
    .condition-questions .am-tabs-bd .am-tab-panel.am-active{padding-left: 0;padding-right: 0;padding-bottom: 0;}
    .condition-questions .am-tabs-bd .condition-questions-box{display: flex;}
    .condition-questions .am-tabs-bd .condition-questions-box>img{width: 79px;height: 79px;}
    .condition-questions .am-tabs-bd .condition-questions-box>div{width: calc(100% - 85px);}
    .condition-questions .condition-questions-box .am-accordion-default{margin: 0;box-shadow: none;position: relative;}
    .condition-questions .condition-questions-box .am-accordion-title{padding: 0 1rem;color: #333;}
    .condition-questions .condition-questions-box .am-accordion-title:hover{color: initial;}
    .condition-questions .am-accordion-default .am-active .am-accordion-title{background-color: transparent;color: inherit;}
    .condition-questions .condition-questions-box>div .am-accordion-default .am-accordion-title:before{display: none;}
    .condition-questions .condition-questions-box>div .am-accordion-title .item-check{border: 1px solid #1cc68c;
        color: #1cc68c;border-radius: 5px;display: block;height: 24px;line-height: 24px;width: 80px;text-align: center;}
    .condition-questions .condition-questions-box>div .am-accordion-default .am-accordion-title p:nth-child(1) span{display: none;}
    .condition-questions .condition-questions-box>div .am-accordion-default .am-active .am-accordion-title p:nth-child(2),
    .condition-questions .condition-questions-box>div .am-accordion-default .am-active .am-accordion-title .item-check{display: none;}

    .condition-questions .condition-questions-box>div .am-accordion-default .am-active .am-accordion-title p:nth-child(1) span{color: #3a3a3a;width: 80px;
        text-align: center;position: absolute;right: 0;bottom:5px;display: block;}
    .condition-questions .condition-questions-box>div .am-accordion-default .am-accordion-content p{height: 90px;margin-bottom: 0;}
    .condition-questions .condition-questions-box a.checkMore{width: 100px;color: white;}
    .condition-questions .am-container>.checkMore{width: 340px;height: 36px;line-height: 36px;color: white;font-size: 2rem;}

    .condition-materials{background-color: #eaeef1;}
    .condition-materials .checkMore{width: 340px;height: 36px;line-height: 36px;color: white;font-size: 2rem;}

    .condition-besties .green-bordered{border-left: 2px solid #1cc68c;display: flex;justify-content: space-between;align-items: center;}

    .condition-schools{background-color:#f2f3f5}
    .condition-schools>.am-container>p{font-weight:700}
    .condition-schools article div{margin-bottom:5px;padding:0 15px}
    .condition-schools article{margin:0 auto}
    .condition-schools p{margin:0 auto}
    .condition-schools p.condition-schools-title{font-weight:700}
    .condition-schools article .school-term-box{display:flex;align-items:center}
    .condition-test{background-color:#e9f4ff}
    .condition-test h2{width:600px}
    .condition-test h2 span{display:block;text-align:center;color:#1ecd97}
    .condition-test ul li input,.condition-test ul li select{display:block;margin:0 auto 15px;padding:2px 5px;width:75%;height:2pc;border:1px solid silver;border-radius:4px;background-color:#fff;line-height:28px}
    .condition-test ul li .checkcode{display:flex;margin:0 auto;width:75%}
    .condition-test ul li .checkcode input{margin:0 10px 0 0;width:35%}
    .condition-test ul li .checkcode .msgForm{margin:0;width:75pt;height:2pc;background-color:#23496b;color:#fff;text-align:center;line-height:2pc}
    .condition-test ul li .checkcode .msgForm:hover{cursor:pointer}
    .condition-test .checkMore{display:block;margin:0 auto;width:90pt;height:2pc;border:transparent;background-color:#1ecd97;color:#fff;line-height:2pc}
    .condition-test .answers{display:none}
    .condition-test .answers h2{font-size:20px}
    .condition-besties .am-accordion-default .am-accordion-item .am-accordion-title span.am-fr{margin-top:-3px;padding:5px;border-radius:5px;background-color:#1ecd98;color:#fff;font-size:12px}
    .condition-besties .am-accordion-default .am-accordion-item.am-active .am-accordion-title{color:#333}
    .condition-besties .am-accordion-default .am-accordion-item.am-active .am-accordion-title span.am-fr{display:none}
    .condition-besties .am-accordion-content{padding:1.5rem 0}
    .condition-besties .am-accordion-content .accordion-box{overflow-y:scroll;margin:0 auto;padding:15px;width:80%;height:350px;line-height:2.2}
    .condition-besties .am-accordion-content .accordion-box p{margin:0}
    .condition-besties article{margin:0 auto;padding:20px;background-color:#f7f7f7;box-shadow:none}
    .condition-besties article p.besties-title{border-bottom:4px solid #1ecd97;color:#1ecd97;font-size:34px}
    .condition-besties .green-background{padding:15px;background-color:#1ecd97;color:#fff}
    .condition-besties .green-background span{display:block}
    .condition-besties .checkMore{margin:20px auto 0;width:150px;height:2pc;color:#fff;line-height:2pc}
    .condition-teacher ul li article{position:relative;display:flex;margin:0 auto;width:90%;align-items:center}
    .condition-teacher ul li article div{position:absolute;top:0;left:0;display:none;width:100%;height:100%;background-color:rgba(55,55,55,.7);align-items:center}
    .condition-teacher ul li article div a{margin:0 auto;width:90pt;height:2pc;color:#fff;line-height:2pc}
    .condition-teacher ul li article:hover div{display:flex}
    .condition-teacher ul li p{margin:10px auto;text-align:center}
</style>

<section class="condition-basics am-padding-vertical-xl">
    <div class="am-container">
        <h2>报考MBA的基本条件</h2>

        <p class="am-text-center am-margin-top-sm am-margin-bottom-0">根据教育部门的规定，报考MBA的考生必须符合以下条件：</p>
        <p class="condition-basics-terms am-margin-top-0 am-margin-bottom-sm am-text-center"><b>大专毕业5年及以上 | 或本科毕业3年及以上 | 或硕士毕业2年及以上 | 任何专业背景的本科生都可以申请 | 要有一定的工作经验</b></p>


        <h4 class="am-margin-top-lg"><span class="am-center">名校MBA报考条件</span><span></span></h4>

        <ul class="am-avg-sm-3 am-margin-top-xl">
            <li>
                <article>
                    <img src="/upload/2018-04-21/37.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                    <p class="am-margin-top-sm am-margin-bottom-0 am-text-center"><b>出色的申请资料</b></p>
                    <p class="am-margin-top-0 am-margin-bottom-sm am-text-center am-text-sm">出色的MBA申请材料，是冲击名校的第一关。2018年MBA第一批申请材料审核通过率，清华为7.46%、北大为5%、上海交大10%以下。申请材料避免沦为炮灰之3大要素：较成功的职业生涯；有明晰的短、中、长期职业生涯规划；有明确的MBA学习目标。</p>
                </article>
            </li>
            <li>
                <article>
                    <img src="/upload/2018-04-21/38.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                    <p class="am-margin-top-sm am-margin-bottom-0 am-text-center"><b>必须参加MBA提前面试</b></p>
                    <p class="am-margin-top-0 am-margin-bottom-sm am-text-center am-text-sm">清华、北大、上海交大等MBA名校仅开设提前面试，笔试后再面试的录取方式已被废弃。即使申请材料通过审核，在提前面试阶段，通过率也仅在10%~30%。提前面试如何脱颖而出，乃是冲击名校的重中之重。</p>
                </article>
            </li>
            <li>
                <article>
                    <img src="/upload/2018-04-21/39.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
                    <p class="am-margin-top-sm am-margin-bottom-0 am-text-center"><b>坚实的经济实力</b></p>
                    <p class="am-margin-top-0 am-margin-bottom-sm am-text-center am-text-sm">MBA一直被称为"史上最贵的专业"，名校MBA的学费均在30万元以上。报考名校MBA，需要坚实的经济实力做后盾。但名校带来的薪资提升、广阔的人生平台、强大的人脉资源也是普通院校所望尘莫及的。 </p>
                </article>
            </li>
        </ul>
    </div>
</section>

<section class="condition-questions am-padding-bottom-xl">
    <div class="am-container">
        <article class="title-box">
            <h2>报考MBA<span>问答</span></h2>
            <p class="am-margin-top-0 am-margin-bottom-sm am-text-center">全方位解答MBA报考疑问</p>
            <span></span>
        </article>

        <div data-am-widget="tabs" class="am-tabs am-tabs-default">
            <ul class="am-tabs-nav am-avg-sm-7">
                <li id="tab1" class="am-active"><a href="[data-tab-panel-0]">全部</a></li>
                <li id="tab2" class=""><a href="[data-tab-panel-1]">条件</a></li>
                <li id="tab3" class=""><a href="[data-tab-panel-2]">学费</a></li>
                <li id="tab4" class=""><a href="[data-tab-panel-3]">院校</a></li>
                <li id="tab5" class=""><a href="[data-tab-panel-4]">专业</a></li>
                <li id="tab6" class=""><a href="[data-tab-panel-5]">学制</a></li>
                <li id="tab7" class=""><a href="[data-tab-panel-6]">特色</a></li>
            </ul>
            <div class="am-tabs-bd">
                <div data-tab-panel-0 class="am-tab-panel am-active">
                    <ul class="am-avg-sm-2">
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/32.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">我自考本科没有学位证，可以报考MBA吗？<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">大部分院校要求具有本科学位，如果没有部分学校接受同等学力...</p>
                                                <span class="am-text-xs item-check" id="tab1-1">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>大部分院校要求具有本科学位，如果没有部分学校接受同等学力，涉及到如何换算，是否接受的具体事项，建议咨询报考院校，以招生办公室给出的回复为准。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab1-1-q" target="_blank" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/33.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">MBA学费那么贵，能赚回来吗?<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">MBA的学习是一个学习全方位综合管理知识，提升思维层次，扩展人脉的机会。</p>
                                                <span class="am-text-xs item-check" id="tab1-2">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>MBA的学习是一个学习全方位综合管理知识，提升思维层次，扩展人脉的机会。但最终能获得多大的收获，是否加剧竞争力，获得理想的投资回报，取决于每个人在这段学习中的努力程度。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab1-2-q" target="_blank" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/34.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">金融专业的哪个MBA院校最好？<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">中欧工商学院、清华五道口金融MBA、上海交大高级金融学院的金融MBA都是比较顶尖的。</p>
                                                <span class="am-text-xs item-check" id="tab1-3">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>中欧工商学院、清华五道口金融MBA、上海交大高级金融学院的金融MBA都是比较顶尖的。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab1-3-q" target="_blank" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/35.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">我英语不太好，能考上IMBA吗？<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">通过提前准备，制定适宜个人情况的备考计划，着重突破弱项（阅读？写作？首先了解自己）。</p>
                                                <span class="am-text-xs item-check" id="tab1-4">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>通过提前准备，制定适宜个人情况的备考计划，着重突破弱项（阅读？写作？首先了解自己）。IMBA也并非很难考，大部分考生只要坚持。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab1-4-q" target="_blank" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
                <div data-tab-panel-1 class="am-tab-panel ">
                    <ul class="am-avg-sm-2">
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/32.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">我自考本科没有学位证，可以报考MBA吗？<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">大部分院校要求具有本科学位，如果没有部分学校接受同等学力...</p>
                                                <span class="am-text-xs item-check" id="tab2-1">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>大部分院校要求具有本科学位，如果没有部分学校接受同等学力，涉及到如何换算，是否接受的具体事项，建议咨询报考院校，以招生办公室给出的回复为准。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab2-1-q" target="_blank" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/41.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">专科学历能不能报考MBA?</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">MBA的学习是一个学习全方位综合管理知识，提升思维层次，扩展人脉的机会。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw="  id="tab2-2-q" target="_blank">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/42.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">

                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">我是做微商的，能报考MBA吗？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">可以。MBA对行业及从业限制并没有严格要求，但无论处于哪个行业，考生必须展现自己成为管理者的潜力以及清晰的职业规划。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab2-3-q" target="_blank">查看详情</a>
                                    </dt>

                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/43.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">我大学刚毕业，能报考MBA吗？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">目前大部分院校都要求至少有2-3年的工作经验。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab2-4-q" target="_blank">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
                <div data-tab-panel-2 class="am-tab-panel ">
                    <ul class="am-avg-sm-2">
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/33.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">MBA学费那么贵，能赚回来吗?<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">MBA的学习是一个学习全方位综合管理知识，提升思维层次，扩展人脉的机会。</p>
                                                <span class="am-text-xs item-check" id="tab3-1">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>MBA的学习是一个学习全方位综合管理知识，提升思维层次，扩展人脉的机会。但最终能获得多大的收获，是否加剧竞争力，获得理想的投资回报，取决于每个人在这段学习中的努力程度。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab3-1-q" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/44.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">MBA学费排行榜</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">体制外商学院中欧和长江的MBA学费是最贵的，体制内商学院中，清华、北大、复旦、交大这些第一梯队院校学费不相上下，目前都在三十万左右。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab3-2-q" target="_blank">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/45.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">

                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">MBA性价比高一点的学校有哪些？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">第一梯队的顶尖商学院目前MBA项目学费基本都在三十万以上，第二梯队学费会相对低一些，如上海的华东师法大学、上海大学、华东理工大学等。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab3-3-q" target="_blank">查看详情</a>
                                    </dt>

                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/46.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">MBA学费不够该怎么办？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">可以联系中国银行、招商银行等金融机构申请助学贷款。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab3-4-q" target="_blank">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
                <div data-tab-panel-3 class="am-tab-panel ">
                    <ul class="am-avg-sm-2">
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/34.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">金融专业的哪个MBA院校最好？<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">中欧工商学院、清华五道口金融MBA、上海交大高级金融学院的金融MBA都是比较顶尖的。</p>
                                                <span class="am-text-xs item-check" id="tab4-1">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>中欧工商学院、清华五道口金融MBA、上海交大高级金融学院的金融MBA都是比较顶尖的。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab4-1-q" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/47.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">清华MBA的录取条件是什么？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">以2018年复试分数线为例，清华大学工商管理（MBA)录取分数线与教育部A类考生线相同，即总分不低于170分。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab4-2-q">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/48.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">

                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">我能被名校录取的几率有多高？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">如果准备充分，能够在提前批面试展现清晰的职业规划和领导潜能，同时笔试达到最低分数线，就能成功被名校录取。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab4-3-q">查看详情</a>
                                    </dt>

                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/49.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">排名比较靠前的MBA院校有哪些？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">中欧工商管理学院、清华、北大、复旦、交大的MBA项目是排名比较靠前的。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab4-4-q">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
                <div data-tab-panel-4 class="am-tab-panel ">
                    <ul class="am-avg-sm-2">
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/35.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">我英语不太好，能考上IMBA吗？<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">通过提前准备，制定适宜个人情况的备考计划，着重突破弱项（阅读？写作？首先了解自己）。</p>
                                                <span class="am-text-xs item-check" id="tab5-1">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>通过提前准备，制定适宜个人情况的备考计划，着重突破弱项（阅读？写作？首先了解自己）。IMBA也并非很难考，大部分考生只要坚持。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab5-1-q" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/50.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">非科班出身，可以报考EMBA吗?</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">可以。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab5-2-q">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/51.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">

                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">MBA里面哪些专业比较热门？容易找工作？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">MBA的培养目标是优秀的企业家和实践工作人员，MBA毕业生应当能够胜任各类企业和经济管理部门中...</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab5-3-q">查看详情</a>
                                    </dt>

                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/52.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">FMBA和IMBA哪个更好?</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">FMBA是针对在金融行业具有一定从业经验（一般有30%-40%来自于银行业、证券业、金融服务/财务/审计）...</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab5-4-q">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>

                <div data-tab-panel-5 class="am-tab-panel ">
                    <ul class="am-avg-sm-2">
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/53.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">MBA在职和脱产的区别在哪里啊？<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">MBA在职的学习时间一般是平日晚上或周末，大部分学生都是一边工作，一边学习。</p>
                                                <span class="am-text-xs item-check" id="tab6-1">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>MBA在职的学习时间一般是平日晚上或周末，大部分学生都是一边工作，一边学习。而脱产学习基本是周一至周五白天上课，适合暂时不准备工作的学生。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab6-1-q" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/54.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">MBA全日制和非全日制的毕业证的含金量有没有什么区别？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">没有太大区别。只是毕业证书上，会注明“全日制工商管理硕士”或“业余制工商管理硕士”</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab6-2-q" target="_blank">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/55.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">

                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">MBA在职和脱产哪个好？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">在职学习和脱产学习的课程设置是完全一样的。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab6-3-q" target="_blank">查看详情</a>
                                    </dt>

                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/56.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <dt class="am-accordion-title">
                                        <p class="am-margin-top-0 am-margin-bottom-xs">MBA全日制和非全日制对落户的积分有帮助吗？</p>
                                        <p class="am-margin-vertical-xs am-text-xs am-text-truncate">MBA与其他专业的硕士学位落户政策相同。</p>
                                        <a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" id="tab6-4-q" target="_blank">查看详情</a>
                                    </dt>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
                <div data-tab-panel-6 class="am-tab-panel ">
                    <ul class="am-avg-sm-2">
                        <li>
                            <article class="condition-questions-box am-padding-sm">
                                <img src="/upload/2018-04-21/57.png" class="am-img-responsive">
                                <div class="condition-questions-accordion">
                                    <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                        <dl class="am-accordion-item">
                                            <dt class="am-accordion-title">
                                                <p class="am-margin-top-0 am-margin-bottom-xs">有哪些特色专业？CLGO<span class="am-text-xs">收起 <i class="am-icon-angle-up"></i></span></p>
                                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate">交大安泰与美国MIT联合办学的CLGO项目、 同济-明尼苏达双学位医疗MBA项目等</p>
                                                <span class="am-text-xs item-check" id="tab7-1">查看详情</span>
                                            </dt>
                                            <dd class="am-accordion-bd am-collapse">
                                                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                                                <div class="am-accordion-content am-padding-vertical-0">
                                                    <p>交大安泰与美国MIT联合办学的CLGO项目、 同济-明尼苏达双学位医疗MBA项目等。</p>
                                                    <a href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank" id="tab7-1-q" class="checkMore am-margin-top-sm">立即咨询</a>
                                                </div>
                                            </dd>
                                        </dl>

                                    </section>
                                </div>
                            </article>
                        </li>
                        <!--<li>-->
                        <!--<article class="condition-questions-box am-padding-sm">-->
                        <!--<img src="/upload/2018-04-21/54.png" class="am-img-responsive">-->
                        <!--<div class="condition-questions-accordion">-->
                        <!--<dt class="am-accordion-title">-->
                        <!--<p class="am-margin-top-0 am-margin-bottom-xs">MBA全日制和非全日制的毕业证的含金量有没有什么区别？</p>-->
                        <!--<p class="am-margin-vertical-xs am-text-xs am-text-truncate">没有太大区别。只是毕业证书上，会注明“全日制工商管理硕士”或“业余制工商管理硕士”</p>-->
                        <!--<a class="am-text-xs item-check" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank">查看详情</a>-->
                        <!--</dt>-->
                        <!--</div>-->
                        <!--</article>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--<article class="condition-questions-box am-padding-sm">-->
                        <!--<img src="/upload/2018-04-21/55.png" class="am-img-responsive">-->
                        <!--<div class="condition-questions-accordion">-->

                        <!--<dt class="am-accordion-title">-->
                        <!--<p class="am-margin-top-0 am-margin-bottom-xs">MBA在职和脱产哪个好？</p>-->
                        <!--<p class="am-margin-vertical-xs am-text-xs am-text-truncate">在职学习和脱产学习的课程设置是完全一样的。</p>-->
                        <!--<span class="am-text-xs item-check">查看详情</span>-->
                        <!--</dt>-->

                        <!--</div>-->
                        <!--</article>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--<article class="condition-questions-box am-padding-sm">-->
                        <!--<img src="/upload/2018-04-21/56.png" class="am-img-responsive">-->
                        <!--<div class="condition-questions-accordion">-->
                        <!--<dt class="am-accordion-title">-->
                        <!--<p class="am-margin-top-0 am-margin-bottom-xs">MBA全日制和非全日制对落户的积分有帮助吗？</p>-->
                        <!--<p class="am-margin-vertical-xs am-text-xs am-text-truncate">MBA与其他专业的硕士学位落户政策相同。</p>-->
                        <!--<span class="am-text-xs item-check">查看详情</span>-->
                        <!--</dt>-->
                        <!--</div>-->
                        <!--</article>-->
                        <!--</li>-->
                    </ul>
                </div>

            </div>
        </div>

        <a class="checkMore am-center" id="tiaojian1" href="http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=" target="_blank">我有其他问题</a>
    </div>
</section>

<section class="condition-materials letter-download am-padding-vertical-xl">
    <div class="am-container">
        <h2>免费获取上海13所MBA院校招生简章</h2>
        <p class="am-margin-top-0 am-margin-bottom-sm am-text-center"> >>含MBA高校具体报考条件及报考流程<< </p>
        <ul class="am-avg-sm-7 am-padding-vertical-lg">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>6 , "limit"=>40));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['recruitPaper'] ){ ?>
            <li>
                <div id="<?php echo $list["engBrief"];?>" >
                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>招生简章下载" />
                    <p class="am-margin-vertical-sm am-text-center"><?php echo $list["title"];?></p>
                </div>
            </li>
            <?php } ?>
            <?php } ?>
        </ul>

        <button class="checkMore am-center" data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 400, height: 240}" id="tiaojian2">一键获取所有院校招生简章</button>
        <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">立即获取招生简章
                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                </div>
                <div class="am-modal-bd">
                    <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" role="form" id="myForm2" class="formSubmit">

                        <div class="formContainer">
                            <input type="text" name="name" placeholder="姓名：" />
                        </div>
                        <div class="formContainer">
                            <input type="tel" name="tel" placeholder="手机号：" />
                        </div>
                        <div class="formContainer">
                            <input type="hidden" name="content" value="获取招生简章" placeholder="" />
                        </div>

                        <!--<div class="formContainer checkcode">-->
                        <!--<input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码：">-->
                        <!--<img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />-->
                        <!--</div>-->
                        <div class="formContainer checkcode">
                            <span>验证码</span>
                            <input type="text" name="verifiy" class="am-form-field" placeholder="验证码" required/>
                            <button type="button" class="acquireCode msgM" id="msgM">获取验证码</button>
                        </div>


                        <input name="time" type="hidden" />
                        <input name="link" type="hidden" />
                        <input name="ip" type="hidden" />
                        <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                        <input name="browserType" type="hidden" />

                        <input name="table" type="hidden" value="MBATest">
                        <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"MBATest"));  echo $echoList; ?> '>

                        <div class="formContainer">
                            <input id="tiaojian3" type="button" class="btn1" value="立即获取" onClick="javascript:;" data-am-modal-close/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="condition-besties am-padding-vertical-xl">
    <div class="am-container">
        <h2>华章老师告诉你，如何考到更好的MBA学校？</h2>
        <p class="am-text-center am-margin-vertical-xs">MBA院校录取以个人背景和笔试及格线为底线，但否能被名校青睐看的是个人综合能力的表现。</p>

        <div class="green-background am-margin-top-lg">
            <!--<span class="am-text-lg">结论:</span>-->
            <span class="green-conclusion">在这方面华章的咨询老师能为学员提供很大的帮助和支持，同样的背景和能力，华章的学生能选择到更好的学校。</span>
        </div>
        <article data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
            <dl class="am-accordion-item">
                <dt class="am-accordion-title">
                    上海 朱同学：<span class="am-fr">点击查看</span>
                </dt>
                <dd class="am-accordion-bd am-collapse">
                    <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                    <div class="am-accordion-content">
                        <div class="accordion-box">
                            <p class="am-text-sm">上海同学小朱在外企有多年工作经验，外语非常好，已经逐渐进入高管层。但因为今年照顾家庭和孩子在事业上放慢了脚步，她想利用MBA的学习提升自己的层次。小朱有名校情结，于是申请了复旦+MIT合作的 MBA项目，在两个学校各学习一段时间，获得两校颁发的MBA学位。因为要忙于家庭，而且小朱一直是学霸，所以她选择了自己在家学习，没有报名辅导班。到了最后报名的时刻，因为缺少老师的反馈以及和周围同学的比较，小朱不太清楚自己能否考上复旦+MIT合作的MBA项目。这时正好另外一个A学校的老师给小朱打电话，邀请她报考A学校的MBA项目。小朱在犹豫中修改了志愿，参加了A学校的全国联考。最后考试成绩出来后，小朱发现自己的分数也超过了复旦+MIT的录取分数线，虽然A学校的MBA项目也是非常优秀，但是没能去MIT上学的小朱还是有些遗憾。</p>
                        </div>

                    </div>
                </dd>
            </dl>
            <dl class="am-accordion-item">
                <dt class="am-accordion-title">
                    上海 李同学：<span class="am-fr">点击查看</span>
                </dt>
                <dd class="am-accordion-bd am-collapse ">
                    <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                    <div class="am-accordion-content">
                        <div class="accordion-box">
                            <p class="am-text-sm">李公司是某互联网公司的技术骨干并持有公司股份，靠技术实力在公司职位不断上升，但他的学历只有大专，他打算考一个MBA提升一下自己的学历，为获得上海户口增加一些积分。所以他最开始选择了学费比较便宜的苏州的一所院校，但是参加了华章的MBA面试课程之后，他发现上海交通大学的面试官在面试分数上对有创业潜力的学生有加分，于是抱着试试看的心情，参加了上海交通大学的第三批次面试，并最终获取了C线录取资格。在17年12月的考试中通过了笔试，并被上海交大录取，成就了他在学历上的一次重大飞跃。</p>
                        </div>
                    </div>
                </dd>
            </dl>

        </article>


        <div class="green-bordered am-margin-top-lg am-padding-left-sm">
            <!--<span class="am-text-lg">结论:</span>-->
            <span class="am-text-sm">选择大于努力，人生最大的遗憾在于“我本可以”，<br/>多跟华章的老师咨询，多参加华章的高校MBA项目宣讲会，你就能获取更多信息，考上你自己的理想院校。</span>

            <button class="checkMore" id="tiaojian4" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 230}">立即预约咨询</button>
        </div>

    </div>
</section>

<section class="condition-test am-padding-vertical-xl">
    <div class="am-container">
        <h2 class="title">现在报考MBA，你的录取概率是多少？</h2>

        <form action="<?php echo U('DuxCms/Form/pushTest');?>" method="post" class="formSubmit" id="conditionTestForm">

            <ul class="am-avg-sm-2 am-margin-top-lg">
                <li>
                    <select name="q1" title="院校类型" required>
                        <option value="" disabled selected class="am-hide">Q1：您的毕业院校类型</option>
                        <option value="10">本地TOP2</option>
                        <option value="8">985/211</option>
                        <option value="6">普通本科</option>
                        <option value="3">专科</option>
                    </select>
                </li>
                <li>
                    <select name="q2" title="从事的行业" required>
                        <option value="" disabled selected class="am-hide">Q2：您从事的行业</option>
                        <option value="9">金融</option>
                        <option value="8">IT/互联网</option>
                        <option value="10">咨询</option>
                        <option value="7">文化&创意</option>
                        <option value="7">制造业</option>
                        <option value="7">服务业</option>
                        <option value="7">其他</option>
                    </select>
                </li>

                <li>
                    <select name="q3" title="职位">
                        <option value="" disabled selected class="am-hide">Q3：您的职位</option>
                        <option value="10">高管</option>
                        <option value="7">中层管理</option>
                        <option value="4">普通职员</option>
                        <option value="8">创业者</option>
                    </select>
                </li>

                <li>
                    <select name="q4" title="年收入">
                        <option value="" disabled selected class="am-hide">Q4：您的年收入</option>
                        <option value="9">50万及以上</option>
                        <option value="7">30-50万</option>
                        <option value="6">20-30万</option>
                        <option value="4">10-20万</option>
                    </select>
                </li>

                <li>
                    <select name="q5" title="沟通表达能力">
                        <option value="" disabled selected class="am-hide">Q5：您的沟通表达能力</option>
                        <option value="10">擅长演讲</option>
                        <option value="7">擅长面试</option>
                        <option value="6">善于沟通</option>
                        <option value="4">不善交际</option>
                    </select>
                </li>

                <li>
                    <select name="q6" title="应试能力">
                        <option value="" disabled selected class="am-hide">Q6：您的应试能力</option>
                        <option value="10">学神</option>
                        <option value="9">学霸</option>
                        <option value="8">学民</option>
                        <option value="6">学渣</option>
                    </select>
                </li>

                <li>
                    <input type="text" placeholder="姓名：" name="name" />
                </li>
                <li>
                    <input type="tel" placeholder="手机号：" name="tel" />
                </li>

                <li>
                    <div class="checkcode">
                        <input type="text" name="verifiy" id="input_verifiy" class="am-form-field" placeholder="验证码" required/>
                        <span class="msgForm" id="msg">获取验证码</span>
                    </div>

                </li>
                <li>
                    <input name="time" type="hidden" />
                    <input name="link" type="hidden" />
                    <input name="ip" type="hidden" />
                    <input name="linkTitle" type="hidden" />
                    <input name="browserType" type="hidden" />

                    <input name="content" type="hidden" />

                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"MBATest"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="MBATest">
                    <!--<button type="submit" class="checkMore">点击提交</button>-->

                    <input type="button" class="checkMore am-padding-0" value="查看录取率"  id="conditionTest" onClick="javascript:;" />
                </li>
            </ul>

        </form>

        <article class="answers">

            <a href="" target="_blank" class="dirLink">
                <img src="" alt="" class="am-img-responsive am-center" />
            </a>

            <h2>录取率解读</h2>
            <article data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                <dl class="am-accordion-item am-active">
                    <dt class="am-accordion-title">
                        Q1 毕业院校类型<span class="am-text-sm am-margin-left-sm">录取率解读 点击查看</span>
                    </dt>
                    <dd class="am-accordion-bd am-collapse am-in">
                        <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                        <div class="am-accordion-content">
                            <div class="accordion-box">
                                <p class="am-text-sm am-margin-vertical-0">如果您比较年轻，缺少工作经验，那么学校就会在您的背景分数中占较大的比重，同时很多学校会不自觉地偏袒本科在本校的学生，这也是可以理解的。如果您工作时间较长，那么您的工作背景会占更大的比例。</p>
                            </div>

                        </div>
                    </dd>
                </dl>
                <dl class="am-accordion-item">
                    <dt class="am-accordion-title">
                        Q2 从事的行业<span class="am-text-sm am-margin-left-sm">录取率解读 点击查看</span>
                    </dt>
                    <dd class="am-accordion-bd am-collapse">
                        <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                        <div class="am-accordion-content">
                            <div class="accordion-box">
                                <p class="am-text-sm am-margin-vertical-0">对于您从事的行业，除了金融MBA这种有专业要求的MBA项目以外，其他行业对于专业没有要求，任何专业都可以报考。MBA学校也倾向于吸收多元化的生源，来丰富MBA在读学生的知识、人脉和视野。</p>
                            </div>
                        </div>
                    </dd>
                </dl>
                <dl class="am-accordion-item">
                    <dt class="am-accordion-title">
                        Q3 职位<span class="am-text-sm am-margin-left-sm">录取率解读 点击查看</span>
                    </dt>
                    <dd class="am-accordion-bd am-collapse ">
                        <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                        <div class="am-accordion-content">
                            <div class="accordion-box">
                                <p class="am-text-sm am-margin-vertical-0">知名大型企业的高管职位最能够为申请者的能力背书，同时在现在这个飞速发展的时代，创业者也经常有额外的加分。</p>
                            </div>
                        </div>
                    </dd>
                </dl>
                <dl class="am-accordion-item">
                    <dt class="am-accordion-title">
                        Q4 年收入<span class="am-text-sm am-margin-left-sm">录取率解读 点击查看</span>
                    </dt>
                    <dd class="am-accordion-bd am-collapse ">
                        <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                        <div class="am-accordion-content">
                            <div class="accordion-box">
                                <p class="am-text-sm am-margin-vertical-0">收入是您实力的证明，同时MBA的学费非常昂贵，商学院也会筛选您的学费支付能力。</p>
                            </div>
                        </div>
                    </dd>
                </dl>
                <dl class="am-accordion-item">
                    <dt class="am-accordion-title">
                        Q5 沟通表达能力<span class="am-text-sm am-margin-left-sm">录取率解读 点击查看</span>
                    </dt>
                    <dd class="am-accordion-bd am-collapse ">
                        <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                        <div class="am-accordion-content">
                            <div class="accordion-box">
                                <p class="am-text-sm am-margin-vertical-0">MBA的教学是以案例为教材，采用主动思考的学习方式，教学效果高度依赖学生的参与和交流。如果没有良好的沟通能力，即使完成了学业毕了业，你可能只是也上了一个假MBA。</p>
                            </div>
                        </div>
                    </dd>
                </dl>

                <dl class="am-accordion-item">
                    <dt class="am-accordion-title">
                        Q6 应试能力<span class="am-text-sm am-margin-left-sm">录取率解读 点击查看</span>
                    </dt>
                    <dd class="am-accordion-bd am-collapse ">
                        <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                        <div class="am-accordion-content">
                            <div class="accordion-box">
                                <p class="am-text-sm am-margin-vertical-0">笔试的科目是数学，逻辑，英语，写作，可以说都是通识能力的考核，您必须具备一定的学习素养，才能真正获得MBA学习的价值。</p>
                            </div>
                        </div>
                    </dd>
                </dl>
            </article>
        </article>

    </div>
</section>

<style>
    .condition-teacher article{background-color: #edeced;position: relative;}
    .condition-teacher article>img{position: absolute;right: 5rem;bottom: 0;}
    .condition-teacher article .condition-teacher-intro{width: 60%;}
    .condition-teacher article .condition-teacher-intro .teacher-name{font-size: 32px;margin-bottom: 1.5rem;}
    .condition-teacher article .checkMore{width: 150px;height: 32px;line-height: 32px;font-size: 1.6rem;padding: 0;color: white;}

    .condition-teacher article .hidden-block{background-color: rgba(95, 103, 122, .8);position: absolute;left: 0;top:0;
        width: 100%;height: 100%;display: none;align-items: center;justify-content: center;}
    .condition-teacher article .hidden-block span{position: absolute;right: 15px;top: 15px;color: white;font-size: 24px;font-weight: bold;}
    .condition-teacher article .hidden-block span:hover{cursor: pointer;}
    .condition-teacher article .hidden-block p{color: white;}
</style>

<section class="condition-teacher am-padding-top-xl">
    <div class="am-container">
        <h2>添加王校长微信  免费1vs1咨询MBA报考+制定备考策略 </h2>

        <article class="am-margin-top-lg am-padding-xl">
            <div class="condition-teacher-intro am-padding-lg">
                <p class="teacher-name">王会营 <span class="am-text-sm">上海华章校长</span></p>

                <p class="am-margin-vertical-sm">华章MBA教育集团创始人、上海华章校长、MBA提前面试导师、18年MBA指导经验，至今已成功帮助数万学子进入名校。</p>
                <p class="am-margin-vertical-sm">校长寄语：没有谁比我们更有把握让您获得硕士学历、学位，我们的升学率永远名列前茅！</p>

                <button class="checkMore am-margin-top-lg">免费获取1vs1咨询</button>
            </div>

            <img src="/upload/2018-07-28/1.png" class="am-img-responsive" alt="王校长" />

            <div class="hidden-block">
                <span> X </span>

                <div>
                    <img src="/upload/2018-07-28/2.png" class="am-img-responsive" alt="添加王校长微信" />
                    <p class="am-margin-vertical-sm am-text-center">添加时请备注“MBA咨询”</p>
                </div>

            </div>
        </article>
    </div>
</section>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">立即咨询
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit am-margin-bottom-lg">

                <div class="formContainer">
                    <input type="text" name="name" placeholder="姓名："/>
                </div>
                <div class="formContainer">
                    <input type="tel" name="tel" placeholder="手机号："/>
                </div>

                <div class="formContainer checkcode">
                    <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码：">
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
                    <button type="submit" id="tiaojian5">点击提交</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>

<script>
    $(document).ready(function(){
        $("#tiaojian3").click(function () {

            if($("#myForm2 input[name='name']").val()=="" || $("#myForm2 input[name='tel']").val()=="" || $("#myForm2 input[name='verifiy']").val()==""){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm2 input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }

            var AjaxURL = "<?php echo U('DuxCms/Form/pushTest');?>";
//            var newTab=window.open('about:blank');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: AjaxURL,
                data: $('#myForm2').serialize(),
                success: function (result) {
                    var strresult = result;
//                    console.log(strresult);
//                    console.log(strresult.status);
                    if (!strresult.status){
                        alert(strresult.info);
                        return false;
                    }else{
                        alert("正在为您下载！");
                    }

//                    console.log('<?php echo $list["infoDownload"];?>');
                    window.location.href = "/assets/files/shzhaoshengjianzhang.zip";
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
        $(".msgM").click (function () {
            if($("#myForm2 input[name='name']").val()=="" || $("#myForm2 input[name='tel']").val()=="" ){
                alert("请完整填写信息！");
                return false;
            }
            else if(!$("#myForm2 input[name='tel']").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                alert("请正确填写手机号！");
                return false;
            }else{
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "<?php echo U('DuxCms/Form/miji_yz');?>",
                    data: $('#myForm2').serialize(),// 你的formid
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

    $(function(){
        $("#conditionTest").click(function(){
            // alert("11");
            // return false;

            var $name = $('#conditionTestForm input[name="name"]').val();
            var $tel = $('#conditionTestForm input[name="tel"]').val();
            var $verifiy = $('#conditionTestForm input[name="verifiy"]').val();

            var $q1 = $('select[name="q1"]').val();
            var $q1Text = $('select[name="q1"]').find("option:selected").text();
            var $q2 = $('select[name="q2"]').val();
            var $q2Text = $('select[name="q2"]').find("option:selected").text();
            var $q3 = $('select[name="q3"]').val();
            var $q3Text = $('select[name="q3"]').find("option:selected").text();
            var $q4 = $('select[name="q4"]').val();
            var $q4Text = $('select[name="q4"]').find("option:selected").text();
            var $q5 = $('select[name="q5"]').val();
            var $q5Text = $('select[name="q5"]').find("option:selected").text();
            var $q6 = $('select[name="q6"]').val();
            var $q6Text = $('select[name="q6"]').find("option:selected").text();

            var totalPoint = parseInt($q1) + parseInt($q2) + parseInt($q3) + parseInt($q4) + parseInt($q5) + parseInt($q6);

            console.log($tel);

            if( $q1 ==null || $q2 ==null || $q3 ==null ||  $q4 ==null || $q5 ==null || $q6 ==null || $name == "" || $tel == null || $verifiy == null){
                alert('请完整填写您的个人信息~');
                return false;
            }else if (!$tel["match"](/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)) {
                console.log($tel);
                alert('手机号码填写不正确~');
                return false;
                // console.log()
            }

            console.log($q1 + $q2 + $q3 + $q4 + $q5 + $q6);
            console.log(totalPoint);

            var str = "";
            str += $q1Text + "；" + $q2Text+ "；" + $q3Text+ "；" + $q4Text+ "；" + $q5Text+ "；" + $q6Text;
            console.log(str);
            $('input[name="content"]').val(str);

            var AjaxURL = "<?php echo U('DuxCms/Form/pushTest');?>";
            $.ajax({
                type: "POST",
                dataType: "json",
                url: AjaxURL,
                data: $('#conditionTestForm').serialize(),
                success: function (result) {
                    var strresult = result;
//                    console.log(strresult);
//                    console.log(strresult.status);
                    if (!strresult.status) {
                        alert(strresult.info);
                        return false;
                    } else {
                        console.log("已提交");

                        if(totalPoint>=52){
                            console.log("恭喜你有90% 的几率通过名校MBA的面试，选择一所最适合自己的MBA院校吧~");
                            $(".condition-test .dirLink").attr("href","/topic-MBAZiXunHui.html");
                            $(".condition-test .dirLink img").attr("src","/upload/2018-04-21/21.png");
                            $(".condition-test form.formSubmit").hide(500);
                            $(".condition-test .answers").fadeIn();
                        }else if(totalPoint>=44 && totalPoint<52){
                            console.log("恭喜你有70% 的几率通过名校MBA的面试，还要好好准备笔试哦~");
                            $(".condition-test .dirLink").attr("href","/topic-MBABiShiKeCheng.html");
                            $(".condition-test .dirLink img").attr("src","/upload/2018-04-21/22.png");
                            $(".condition-test form.formSubmit").hide(500);
                            $(".condition-test .answers").fadeIn();
                        }else if(totalPoint>=36 && totalPoint<44){
                            console.log("你面临的竞争比较大，你还需要加强你的个人背景~");
                            $(".condition-test .dirLink").attr("href","/topic-MBATiQianMianShi.html");
                            $(".condition-test .dirLink img").attr("src","/upload/2018-04-21/23.png");
                            $(".condition-test form.formSubmit").hide(500);
                            $(".condition-test .answers").fadeIn();
                        }else if(totalPoint<36){
                            console.log("距离名校MBA还有很长的距离哦，你需要全方位的提升自己啦~");
                            $(".condition-test .dirLink").attr("href","http://p.qiao.baidu.com/im/index?siteid=12159402&ucid=399307&cp=&cr=&cw=");
                            $(".condition-test .dirLink img").attr("src","/upload/2018-04-21/24.png");
                            $(".condition-test form.formSubmit").hide(500);
                            $(".condition-test .answers").fadeIn();
                        }

                    }

                },
                error: function (data) {
                    console.log("error:" + data.responseText);
                    return false;
                }
            });





        });

        $(function () {
            //获取短信验证码
            var validCode = true;

            $(".msgForm").click (function () {
                if( $('#conditionTestForm input[name="name"]').val() == "" || $('#conditionTestForm input[name="tel"]').val() == ""  ){
                    alert('请完整填写您的个人信息~');
                    return false;
                }else if (!$('#conditionTestForm input[name="tel"]').val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/)) {
                    alert('手机号码填写不正确~');
                    return false;
                    // console.log()
                }else{
                    $.ajax({
                        cache: true,
                        type: "POST",
                        url: "<?php echo U('DuxCms/Form/miji_yz');?>",
                        data: $('#conditionTestForm').serialize(),// 你的formid
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

        $(".condition-teacher button").click(function(){
            $(".condition-teacher .hidden-block").css("display","flex");
        });
        $(".condition-teacher .hidden-block span").click(function(){
            $(this).parent().hide();
        })
    });
</script>

";s:12:"compile_time";i:1533698400;}";
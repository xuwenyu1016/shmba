<?php exit;?>00156540442644e3723cffc1be9f961ef572972e422es:17699:"a:2:{s:8:"template";s:17634:"﻿
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-02-24/27.jpg" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />


<article class="adjust-how am-padding-sm">
    <h3 class="noBorder am-margin-bottom-xs">MBA导师亲自教你如何调剂</h3>
    <h4 class="am-text-sm">2018年MBA/MPAcc等管理类联考国家线公布！</br><b><font color="red">A线：165/42/84 B线：155/37/74</font></b></br>MBA复试，调剂大战一触即发。</h4>

    <img src="/upload/2018-02-24/20.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

    <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}'>
        <ul class="am-slides">
            <li>
                <p>分数一公布，上海华章告诉你接下来要做的事情——抢占调剂名额</p>
                <p class="grey">3月31日 上海华章调剂咨询会 邀你免费参加！现场为各位考生解答调剂问题，同时全部到场学员赠送调剂名额，你还等什么？</p>
                <p class="grey">时间：2018年3月31日 13:30 - 17:00<br/>地点：杨浦区控江路2063号五环大厦西座3楼第二教室；</p>
                <button class="signUp" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 310, height: 240}">立即咨询</button>
            </li>
            <!--<li>
                <p>分数一公布，上海华章告诉你接下来要做的事情——抢占调剂名额</p>
                <p class="grey">3月25日 上海华章调剂咨询会 邀你免费参加！现场为各位考生解答调剂问题，同时全部到场学员赠送调剂名额，你还等什么？</p>
                <p class="grey">时间：2018年3月25日 13:30 - 17:00<br/>地点：上海长宁区定西路1300号2号楼603；</p>
                <button class="signUp" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 310, height: 240}">立即咨询</button>
            </li>-->
        </ul>
    </div>
</article>

<article class="adjust-how am-padding-horizontal-sm am-padding-bottom-sm">
    <h3 class="noBorder am-margin-bottom-xs">2018年入学的一个机会-调剂</h3>
    <h4 class="am-text-sm">华章教育集团在全国拥有47家分校，为了更好地服务广大考生，上海华章不仅联合东部地区名校、更有西部地区名校，不仅有MBA项目、MPA项目，更有EMBA项目。</h4>
    <img src="/upload/2018-02-24/21.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <p>现开始接受调剂申请，早申请、早预定调剂名额，有部分项目更有机会获得调剂奖学金！</p>
    <p>调剂咨询热线：
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schoolInfo", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?> <a class="tel" href="tel:<?php echo $list["tel"];?>"><?php echo $list["tel"];?></a><?php } ?></p>
    <p>建议以下考生预定：</p>
    <p class="red">1.考分在165分以下的考生；<br/>2.报考名校但是未获得C线，能接受普通院校考生；</p>
    <p class="grey">注1：提交信息提前预定名额，分数线公布后可沟通取消。<br/>注2：华章学员可直接联系班主任或报名老师预约调剂名额。</p>
    <button class="signUp" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 310, height: 240}">立即咨询</button>
</article>

<article class="adjust-features am-padding-horizontal-sm">
    <h3 class="noBorder am-margin-bottom-xs">华章全国调剂四大优势</h3>

    <ul class="am-avg-sm-2 am-padding-top-sm">
        <li>
            <div class="innerBox">
                <img src="/upload/2018-02-24/23.png" class="am-img-responsive am-center" alt="MBA价值" />
                <p class="am-text-xs">达到国家线即可调剂，并调剂成功</p>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2018-02-24/24.png" class="am-img-responsive am-center" alt="人群分析" />
                <p class="am-text-xs">MBA、MPA、MEM、MPAcc、EMBA可相互调剂</p>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2018-02-24/25.png" class="am-img-responsive am-center" alt="择校方向" />
                <p class="am-text-xs">有东部线名校，更有西部线名校</p>
            </div>
        </li>
        <li>
            <div class="innerBox">
                <img src="/upload/2018-02-24/26.png" class="am-img-responsive am-center" alt="报考条件" />
                <p class="am-text-xs">提前锁定名额，让考生高枕无忧</p>
            </div>
        </li>
    </ul>
</article>

<article class="adjust-schools am-padding-horizontal-sm am-padding-bottom-sm">
    <h3 class="noBorder am-margin-bottom-xs">可调剂院校</h3>

    <div class="am-tabs am-margin-top-xs" data-am-tabs>
        <ul class="am-tabs-nav am-nav am-nav-tabs am-avg-sm-5">
            <li class="am-active"><a href="#tab1">MBA</a></li>
            <li><a href="#tab2">EMBA</a></li>
            <li><a href="#tab3">MPA</a></li>
            <li><a href="#tab4">MEM</a></li>
            <li><a href="#tab5">其他</a></li>
        </ul>

        <div class="am-tabs-bd">
            <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                <table class="am-table am-table-bordered">
                    <thead>
                    <tr>
                        <th>项目</th>
                        <th>院校名称</th>
                        <th>名额</th>
                        <th>优势</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="11" class="am-text-center">MBA</td>
                        <td>西部名校MBA</td>
                        <td class="am-text-center">30</td>
                        <td>西部线，学费低、上海开班，211</td>
                    </tr>
                    <tr>
                        <td>华东师范大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>985+211</td>
                    </tr>
                    <tr>
                        <td>东华大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>211</td>
                    </tr>
                    <tr>
                        <td>复旦港大MBA</td>
                        <td class="am-text-center">20</td>
                        <td>985+211</td>
                    </tr>
                    <tr>
                        <td>上海大学英文MBA</td>
                        <td class="am-text-center">20</td>
                        <td>211</td>
                    </tr>
                    <tr>
                        <td>上海大学中文MBA</td>
                        <td class="am-text-center">20</td>
                        <td>211</td>
                    </tr>
                    <tr>
                        <td>长江商学院MBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>上海理工大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>上海对外经贸大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>上海海事大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>兰州大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="am-tab-panel am-fade" id="tab2">
                <table class="am-table am-table-bordered">
                    <thead>
                    <tr>
                        <th>项目</th>
                        <th>院校名称</th>
                        <th>名额</th>
                        <th>优势</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="4" class="am-text-center">EMBA</td>
                        <td>复旦港大EMBA</td>
                        <td class="am-text-center">20</td>
                        <td>985+211</td>
                    </tr>
                    <tr>
                        <td>东华大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>211</td>
                    </tr>
                    <tr>
                        <td>上海海事大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>天津财经大学MBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="am-tab-panel am-fade" id="tab3">
                <table class="am-table am-table-bordered">
                    <thead>
                    <tr>
                        <th>项目</th>
                        <th>院校名称</th>
                        <th>名额</th>
                        <th>优势</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="6" class="am-text-center">MPA</td>
                        <td>西部名校MPA</td>
                        <td class="am-text-center">30</td>
                        <td>西部线，上海开班</td>
                    </tr>
                    <tr>
                        <td>东华大学MPA</td>
                        <td class="am-text-center">20</td>
                        <td>211</td>
                    </tr>

                    <tr>
                        <td>上海师范大学MPA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>上海理工大学MPA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>华东政法大学MPA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>国家党校MPA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="am-tab-panel am-fade" id="tab4">
                <table class="am-table am-table-bordered">
                    <thead>
                    <tr>
                        <th>项目</th>
                        <th>院校名称</th>
                        <th>名额</th>
                        <th>优势</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="3" class="am-text-center">MEM</td>
                        <td>东华大学MEM</td>
                        <td class="am-text-center">	20</td>
                        <td>211</td>
                    </tr>
                    <tr>
                        <td>上海理工大学MEM</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>上海海事大学MEM</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="am-tab-panel am-fade" id="tab5">
                <table class="am-table am-table-bordered">
                    <thead>
                    <tr>
                        <th>项目</th>
                        <th>院校名称</th>
                        <th>名额</th>
                        <th>优势</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="9" class="am-text-center">国外项目</td>
                        <td>华东理工-堪培拉</td>
                        <td class="am-text-center">	20</td>
                        <td>可以认证</td>
                    </tr>
                    <tr>
                        <td>东华大学-卡尔顿</td>
                        <td class="am-text-center">20</td>
                        <td>可以认证</td>
                    </tr>

                    <tr>
                        <td>西三一大学</td>
                        <td class="am-text-center">20</td>
                        <td>可以认证</td>
                    </tr>
                    <tr>
                        <td>马赛商学院</td>
                        <td class="am-text-center">20</td>
                        <td>可以认证</td>
                    </tr>
                    <tr>
                        <td>财大-韦伯斯特</td>
                        <td class="am-text-center">20</td>
                        <td>可以认证</td>
                    </tr>
                    <tr>
                        <td>法国蒙彼利埃大学EDBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>法国诺欧商学院DBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>法国尼斯大学DBA</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>里昂商学院</td>
                        <td class="am-text-center">20</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</article>

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
                    <input name="linkTitle" type="hidden" value="<?php echo $contentInfo["title"];?> <?php echo $categoryInfo["name"];?>，<?php echo $sys["site_title"];?>"/>
                    <input name="browserType" type="hidden" />
                    <input name="ip" type="hidden" />

                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="guestbook">
                    <button type="submit" id="submitFormButton">点击提交</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $__Template->display("themes/mobile/consultFormBox"); ?>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>
";s:12:"compile_time";i:1533868426;}";
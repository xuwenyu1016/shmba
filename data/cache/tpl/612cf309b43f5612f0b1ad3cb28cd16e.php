<?php exit;?>001551905422f08b45caa85bc496e8ac1e46660e41d6s:9997:"a:2:{s:8:"template";s:9933:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">
        <h2 class="title am-margin-top-lg">
            <!--<span class="num">01</span>-->
            <span class="numContent"><?php echo $contentInfo["title"];?></span>
        </h2>

        <div class="collegeBlock">

            <div class="collegeList">
                <h3 class="subTitle am-text-left">
                    <span class="num">01</span>
                    <span class="numContent">课程<b class="red">信息</b></span>
                </h3>

                <table class="am-table recruitTable">
                    <thead>
                    <tr><th colspan="6">课程信息</th></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="tableTitle">导师</td>
                        <td class="con"><?php echo $contentInfo["Instructor"];?></td>
                        <td class="tableTitle">课程</td>
                        <td class="con"><?php echo $contentInfo["class"];?></td>
                        <td class="tableTitle">科目</td>
                        <td class="con"><?php echo $contentInfo["subject"];?></td>
                    </tr>
                    <tr>
                        <td class="tableTitle">时间</td>
                        <td colspan="5" class="con"><?php echo date('m月d日 H:i',$contentInfo["begTime"]);?>-<?php echo date('m月d日 H:i',$contentInfo["endTime"]);?></td>
                    </tr>
                    <tr>
                        <td class="tableTitle">地点</td>
                        <td colspan="5" class="con"><?php echo $contentInfo["location"];?></td>
                    </tr>
                    <tr>
                        <td class="tableTitle">简介</td>
                        <td colspan="5" class="con"><?php echo $contentInfo["description"];?></td>
                    </tr>

                    </tbody>
                </table>

                <h3 class="subTitle am-text-left">
                    <span class="num">02</span>
                    <span class="numContent">课程<b class="red">介绍</b></span>
                </h3>

                <p class="am-margin-vertical-sm"><b>一、适合考生：</b></p>
                <p class="am-margin-vertical-sm">参加管理类硕士学位（MBA EMBA MPA MPAcc MEM MAT MLIS MAud）入学考试的考生；</p>
                <p class="am-margin-vertical-sm"><b>二、时间及地点安排：</b></p>
                <p class="am-margin-vertical-sm">时间：<?php echo date('m月d日 H:i',$contentInfo["begTime"]);?>-<?php echo date('m月d日 H:i',$contentInfo["endTime"]);?></p>
                <p class="am-margin-vertical-sm">地点：<?php echo $contentInfo["location"];?></p>
                <p class="am-margin-vertical-sm"><b>三、主讲导师：</b></p>
                <img src="<?php echo $contentInfo["image"];?>" class="am-img-responsive am-margin-vertical-sm" width="250" alt="<?php echo $contentInfo["Instructor"];?>" />

                <p class="am-margin-vertical-sm"><?php echo $contentInfo["subject"];?> 导师- <?php echo $contentInfo["Instructor"];?></p>
                <p class="am-margin-vertical-sm"><?php echo $contentInfo["teacherIntro"];?></p>

                <h3 class="subTitle am-text-left">
                    <span class="num">03</span>
                    <span class="numContent">课程<b class="red">服务</b></span>
                </h3>
                <p class="am-margin-vertical-sm am-text-sm"><b>参加此次备考管理类硕士联考公开课的考生,您还可以向老师咨询：</b></p>
                <p class="am-margin-vertical-sm am-text-sm">--剖析MBA各大院校怎么解决学生的落户问题？</p>
                <p class="am-margin-vertical-sm am-text-sm">--各院校招生政策的新变化是什么？</p>
                <p class="am-margin-vertical-sm am-text-sm">--上海各大名校MBA/MPA/MPAcc招生院校的特色、方向、报名人数是什么？学费是多少？</p>
                <p class="am-margin-vertical-sm am-text-sm">--每个学校的录取人数是多少，在本地有什么特殊政策？</p>
                <p class="am-margin-vertical-sm am-text-sm">--如何申请提前面试？哪个学校比较适合您，哪个学校你比较容易考上？</p>
                <p class="am-margin-vertical-sm am-text-sm">--历年的分数线是多少，总分与各科的要求是什么</p>
                <p class="am-margin-vertical-sm am-text-sm">--如何使在繁忙的工作中，使很有限的备考时间有效果？备考时间不充足怎么办？</p>
                <p class="am-margin-vertical-sm am-text-sm"><b>现场您可以了解：</b></p>
                <p class="am-margin-vertical-sm am-text-sm">--提前面试应该如何准备呢？</p>
                <p class="am-margin-vertical-sm am-text-sm">--工作背景是私企、民企、外企、500强、政府机关，考哪个学校以后发展更好呢？</p>
                <p class="am-margin-vertical-sm am-text-sm">笔试系统好，如何备考才能拿到高校的巨额奖学金呢？</p>
                <p class="am-margin-vertical-sm am-text-sm">--一年的备考，毕业10年还能重新拾起吗？</p>
                <p class="am-margin-vertical-sm am-text-sm">--想要落个上海户口，我应该怎么择校，如何做准备呢？</p>

                <p class="am-margin-vertical-sm am-text-sm"><b>华章教育——核心优势：</b></p>
                <p class="am-margin-vertical-sm am-text-sm">高教版、机工版主编授课；</p>
                <p class="am-margin-vertical-sm am-text-sm">华章笔试通过率业界遥遥领先</p>
                <p class="am-margin-vertical-sm am-text-sm">提前面试辅导老师为各商学院面试官及行业大咖</p>
                <p class="am-margin-vertical-sm am-text-sm">连续多年命中联考真题</p>

                <p class="am-margin-vertical-sm am-text-sm"><b>现场报名（笔试+面试）即可享受比较新优惠（时间飞逝，不容错过）：</b></p>
                <p class="am-margin-vertical-sm am-text-sm">报全程笔试+提前面试班享受打折优惠；</p>
                <p class="am-margin-vertical-sm am-text-sm">赠送个性化提前面试择校方案一套；</p>
                <p class="am-margin-vertical-sm am-text-sm">赠送新学年导学班课程（价值1980元）；</p>
                <p class="am-margin-vertical-sm am-text-sm">获得校长一对一备考咨询一次；</p>
                <p class="am-margin-vertical-sm am-text-sm">赠送机工版MBA\MPA\MPAcc系列辅导教材《数学分册》1本；</p>
                <p class="am-margin-vertical-sm am-text-sm">赠送高教版MBA\MPA\MPAcc系列辅导教材《英语分册》1本；</p>
                <p class="am-margin-vertical-sm am-text-sm">赠送高教版MBA\MPA\MPAcc系列辅导教材《词频、词汇》1本；</p>
                <p class="am-margin-vertical-sm am-text-sm">赠送比较新版MBA\MPA/MPAcc联考《英语核心词汇》《数学公式》《管理类联考历年真题》各一本；</p>

                <p class="am-margin-vertical-sm am-text-sm"><b>华章课程服务：</b></p>
                <p class="am-margin-vertical-sm am-text-sm">★ 如果你因种种原因不能来现场上课，可通过华章“网络课堂”轻松补课；</p>
                <p class="am-margin-vertical-sm am-text-sm">★ 华章网络平台支持手机（苹果+安卓系）、平板、笔记本，台式机等所有设备，没有时间及地点限制，帮您节省宝贵的学习时间。</p>
            </div>

            <div class="formBox">
                <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="formSubmit am-margin-bottom-lg">

                    <p class="formTitle">预约试听</p>

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

                        <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                        <input type="hidden" name="table" value="guestbook">
                        <button type="submit" id="submitFormButton">点击提交</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</section>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>";s:12:"compile_time";i:1520369422;}";
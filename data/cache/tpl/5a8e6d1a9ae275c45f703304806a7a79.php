<?php exit;?>001575081740993f9c8c5f34be9cf870f70376e314bes:8122:"a:2:{s:8:"template";s:8058:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2017-12-22/1.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="contentContainer am-padding-vertical-lg">
    <div class="am-container">

        <div class="collegeBlock teacherBlock">

            <div class="collegeList">

                <span class="teacherName am-hide"><?php echo $contentInfo["title"];?></span>

                <h3 class="subTitle am-text-left">
                    <span class="num">01</span>
                    <span class="numContent">管理类联考<b class="red">导师</b></span>
                </h3>

                <div class="dreamTeamTab am-tabs am-margin-top-sm" data-am-tabs="{noSwipe: 1}">

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                            <div class="innerBox">
                                <div class="imgBox">
                                    <img src="<?php echo $contentInfo["image"];?>" class="am-img-responsive am-center" alt="<?php echo $contentInfo["ranking"];?><?php echo $contentInfo["subject"];?>-<?php echo $contentInfo["title"];?>" />
                                </div>

                                <div class="teacherInfo">
                                    <h4><?php echo $contentInfo["ranking"];?><?php echo $contentInfo["subject"];?>-<?php echo $contentInfo["title"];?></h4>
                                    <?php echo $contentInfo["content"];?>
                                    <p class="paraForCheck"><button class="checkMore" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 230}">预约课程试听</button></p>

                                </div>


                            </div>
                        </div>

                    </div>


                </div>

                <h3 class="subTitle am-text-left hidingBlock">
                    <span class="num">02</span>
                    <span class="numContent">近期<?php echo $contentInfo["title"];?><b class="red">公开课</b></span>
                </h3>

                <div class="theoryClass testClass hidingBlock">
                    <div class="class am-padding-top-sm layerBox">
                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "sub"=>true, "expand_id"=>8, "limit"=>50));  if(is_array($listList)) foreach($listList as $list){ ?>
                        
                        <?php if ( $list['Instructor'] ==  $contentInfo['title']  && date('Y-m-d H-i-s',$list['time']) >=  date("Y-m-d H-i-s") ){ ?>
                        <div class="layer">
                            <a href="<?php echo $list["aurl"];?>" class="am-padding-horizontal-lg" target="_blank">
                                <div class="schedule">
                                    <span><?php echo $list["week"];?></span>
                                    <span><?php echo date('d',$list["begTime"]);?></span>
                                </div>
                                <div class="classContent am-padding-horizontal-lg">
                                    <p class="am-text-truncate" id="instructor"><?php echo $list["Instructor"];?></p>
                                    <p class="am-text-truncate"><?php echo $list["description"];?></p>
                                </div>
                                <p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>

                                <button class="checkMore">免费试听</button>
                            </a>
                        </div>
                        <?php } ?>

                        <?php } ?>

                    </div>
                </div>

                <h3 class="subTitle am-text-left hidingBlock">
                    <span class="num">03</span>
                    <span class="numContent"><?php echo $contentInfo["title"];?>老师<b class="red">在线公开课程</b></span>
                </h3>

                <div class="videoList am-margin-bottom-xl hidingBlock">
                    <ul class="am-avg-sm-3">
                        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>26, "sub"=>true, "limit"=>100, "expand_id"=>10));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <?php if ( $list['teacher'] ==  $contentInfo['title']  ){ ?>
                        <li>
                            <div class="innerBox">
                                <a href="<?php echo $list["aurl"];?>">
                                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" alt="<?php echo $list["title"];?>" />
                                    <p>
                                        <span class="am-icon-youtube-play"></span>
                                    </p>
                                </a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php } ?>

                    </ul>
                </div>
            </div>

            <div class="formBox">

                <?php $__Template->display("themes/default/sideBarForm"); ?>


            </div>

        </div>
    </div>
</section>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">立即预约
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

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1543545740;}";
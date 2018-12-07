<?php exit;?>0015750791458383ff2790c5998b2f37b50563537daas:4721:"a:2:{s:8:"template";s:4657:"<footer class="am-padding-vertical-xl">
    <div class="am-container">
        <article class="top am-padding-bottom-sm">

            <?php if ( $_SERVER['HTTP_HOST'] ==  'www.hz-mba.com'  ){ ?>

            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"hz_mba_describe", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
            <div class="leftInfo">
                <p>当前所在：<?php echo $list["school"];?></p>
                <p>地址：<?php echo $list["location"];?></p>
                <p>邮箱：<?php echo $list["email"];?> 网址： <a href="http://<?php echo $list["website"];?>" target="_blank" title="<?php echo $list["school"];?>"><?php echo $list["website"];?></a></p>
                <p>备案号：<?php echo $list["beian"];?></p>
                <p>版本所有，请勿模仿，保留法律追究权利！</p>
            </div>


            <div class="rightInfo">
                <p>免费咨询电话</p>
                <p class="tel"><a href="tel:<?php echo $list["tel"];?>" target="_blank" title="<?php echo $list["school"];?>"><?php echo $list["tel"];?></a></p>
            </div>
            <?php } ?>

            <?php }else{ ?>

            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schoolInfo", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
            <div class="leftInfo">
                <p>当前所在分校：<?php echo $list["school"];?></p>
                <p>地址：<?php echo $list["location"];?></p>
                <p>邮箱：<?php echo $list["email"];?> 网址： <a href="http://<?php echo $list["website"];?>" target="_blank" title="<?php echo $list["school"];?>"><?php echo $list["website"];?></a></p>
                <p>备案号：<?php echo $list["beian"];?></p>
                <p>版本所有，请勿模仿，保留法律追究权利！</p>
            </div>


            <div class="rightInfo">
                <p>免费咨询电话</p>
                <p class="tel"><a href="tel:<?php echo $list["tel"];?>" target="_blank" title="<?php echo $list["school"];?>"><?php echo $list["tel"];?></a></p>
            </div>
            <?php } ?>

            <?php } ?>

        </article>

        <hr/>

        <article class="bottom am-padding-top-sm">

            <?php if ( $_SERVER['HTTP_HOST'] ==  'www.hz-mba.com'  ){ ?>
            <ul class="am-avg-sm-4">
                <li class="am-margin-bottom-xs"><a href="/topic-guanyuwomen.html">关于我们</a></li>
                <li class="am-margin-bottom-xs"><a href="/topic-keChengBiao.html" target="_blank" title="本周课程">本周课程</a></li>
                <li class="am-margin-bottom-xs"><a href="/list-huaZhangXiaoQu.html" title="校区地图" target="_blank">校区地图</a></li>
                <li class="am-margin-bottom-xs"><a href="/topic-MBAJiChuWenDa.html" title="适合人群" target="_blank">适合人群</a></li>
                <!--<li class="am-margin-bottom-xs"><a href="http://wk.hzmba.net" target="_blank" title="华章网课">华章网课</a></li>-->
            </ul>
            <?php }else{ ?>
            <ul class="am-avg-sm-5">
                <li class="am-margin-bottom-xs"><a href="/topic-guanyuwomen.html">关于我们</a></li>
                <li class="am-margin-bottom-xs"><a href="/topic-keChengBiao.html" target="_blank" title="本周课程">本周课程</a></li>
                <li class="am-margin-bottom-xs"><a href="/list-huaZhangXiaoQu.html" title="校区地图" target="_blank">校区地图</a></li>
                <li class="am-margin-bottom-xs"><a href="/topic-MBAJiChuWenDa.html" title="适合人群" target="_blank">适合人群</a></li>
                <li class="am-margin-bottom-xs"><a href="http://wk.hzmba.net" target="_blank" title="华章网课">华章网课</a></li>

                <li><a href="http://bj.hzmba.com/" target="_blank" title="北京校区">北京校区</a></li>
                <li><a href="http://www.mbajs.com/" target="_blank" title="南京校区">南京校区</a></li>
                <li><a href="http://sz.szhzmba.com/" target="_blank" title="深圳校区">深圳校区</a></li>
                <li><a href="http://suzhou.hzmba.net/" title="苏州校区" target="_blank">苏州校区</a></li>
                <li><a href=" http://www.nkmba.com/" target="_blank" title="天津校区">天津校区</a></li>
            </ul>
            <?php } ?>

        </article>

    </div>
</footer>";s:12:"compile_time";i:1543543145;}";
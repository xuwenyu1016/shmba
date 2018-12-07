<?php exit;?>0015518546191b2167c85941340299844f7372e2b21cs:1829:"a:2:{s:8:"template";s:1765:"<footer class="am-padding-vertical-xl">
    <div class="am-container">
        <article class="top am-padding-bottom-sm">

            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schoolInfo", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
            <div class="leftInfo">
                <p>当前所在分校：<?php echo $list["school"];?></p>
                <p>地址：<?php echo $list["location"];?></p>
                <p>邮箱：<?php echo $list["email"];?> 网址： <a href="<?php echo $list["website"];?>" target="_blank" title="<?php echo $list["school"];?>"><?php echo $list["website"];?></a></p>
            </div>


            <div class="rightInfo">
                <p>免费咨询电话</p>
                <p class="tel"><a href="tel:<?php echo $list["tel"];?>" target="_blank" title="<?php echo $list["school"];?>"><?php echo $list["tel"];?></a></p>
            </div>
            <?php } ?>


        </article>

        <hr/>

        <article class="bottom am-padding-top-sm">
            <ul class="am-avg-sm-8">
                <li><a>华章优势</a></li>
                <li><a>课程优势</a></li>
                <li><a href="/list-huazhangdaoshi.html" title="教师优势">教师优势</a></li>
                <li><a>适合人群</a></li>
                <li><a>全国校区</a></li>
                <li><a href="http://bj.hzmba.com/" target="_blank" title="北京校区">北京校区</a></li>
                <li><a href="/page-readingParty.html">樊登读书会</a></li>
                <li><a href="http://wk.hzmba.net" target="_blank" title="华章网课">华章网课</a></li>
            </ul>

        </article>

    </div>
</footer>";s:12:"compile_time";i:1520318619;}";
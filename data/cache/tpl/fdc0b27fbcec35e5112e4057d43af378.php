<?php exit;?>0015750792617ca4eaf7a2b5f6fad892cf6cb9120a67s:2246:"a:2:{s:8:"template";s:2182:"<!--<article class="am-padding-vertical-sm sector-title sector-bordered am-margin-bottom-sm">-->
    <!--<ul class="am-avg-sm-2">-->
        <!--<li><a href="/list-MBAbaike.html">MBA百科</a></li>-->
        <!--<li><a href="/list-MBABaoKaoXiangGuan.html">如何备考MBA</a></li>-->
        <!--<li><a href="/list-MBAbeikaoriji.html">MBA备考日记</a></li>-->

        <!--<li><a href="/list-MBAshenqing.html">MBA申请</a></li>-->



        <!--<li><a href="/list-MBAshenghuo.html">MBA生活</a></li>-->



        <!--<li><a href="/list-MBApengyouquan.html">MBA朋友圈</a></li>-->
    <!--</ul>-->
<!--</article>-->
<article class="am-padding-sm sector-bordered am-margin-bottom-sm">
    <img src="/upload/2018-05-23/32.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" width="180"/>
    <p class="am-text-center am-margin-bottom-0 am-margin-top-sm">微信扫一扫 关注该微信号</p>
</article>

<article class="am-padding-sm sector-twenty-four sector-bordered">
    <h3 class="am-margin-vertical-0 am-padding-bottom-xs">24小时热门</h3>

    <div class="sector-twenty-four-box">
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"14,16,18,36" , "limit"=>6));  if(is_array($listList)) foreach($listList as $list){ ?>
        <a href="<?php echo $list["aurl"];?>">
            <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
            <p class="am-margin-0 am-padding-left-sm"><?php echo $list["title"];?></p>
        </a>
        <?php } ?>
    </div>

</article>

<!--<script>-->
    <!--$(document).ready(function(){-->
        <!--$(".sector-title ul li:nth-child(1)").css("opacity",".6");-->
        <!--$sectorTitle = $(".sector-title ul li a").text();-->
        <!--$numContent = $("h2 span.numContent").text();-->
        <!--console.log($numContent);-->
        <!--console.log($sectorTitle);-->
        <!--if( $sectorTitle == $numContent ){-->
            <!--$(this).css("opacity",".6");-->
        <!--}-->

    <!--})-->
<!--</script>-->";s:12:"compile_time";i:1543543261;}";
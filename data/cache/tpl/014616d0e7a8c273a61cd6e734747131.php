<?php exit;?>00157507923864ab2c4c6f0966b04c1297d7a48d80d6s:2864:"a:2:{s:8:"template";s:2800:"<section class="intro am-padding-sm">

    <img src="/assets/img/31.png#1" class="am-img-responsive am-center qrCode" alt="上海专硕" />
    <p class="am-text-center">微信搜索关注“上海专硕”<br/>了解更多MBA报考资讯</p>
    <h3 class="am-text-center"><b>华章MBA考前辅导专业机构</b></h3>
    <p>18年来华章及其遍及全国43个城市的分支机构，已成功引领近10万学子考入理想名校。培养出清华、北大、复旦、上海交大、中山大学岭南学院、人大、 对外经贸、同济、上海财大、西安交大、南开大学、南京大学、浙江大学、厦门大学、中财、中科院、北邮、重庆大学、四川大学、华东理工大学等高校MBA联考状元和MBA面试满分得者。</p>
    <h3 class="am-text-center">不仅通过联考，更要受益终身</h3>
</section>

<footer class="am-padding-xs">
    <p class="am-text-center">免费咨询电话</p>
    <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schoolInfo", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
    <a class="am-text-center tel" href="tel:<?php echo $list["tel"];?>" title="<?php echo $list["school"];?>"><?php echo $list["tel"];?></a>
    <?php } ?>




        <?php if ( $_SERVER['HTTP_HOST'] ==  'www.hz-mba.com'  ){ ?>
    <ul class="am-avg-sm-2 am-padding-top-sm">
        <li><a class="am-text-center am-text-sm am-padding-xs" href="/topic-guanyuwomen.html">关于我们</a></li>
        <li><a class="am-text-center am-text-sm am-padding-xs" href="/list-huaZhangXiaoQu.html" title="校区地图">校区地图</a></li>
        <!--<li><a class="am-text-center am-text-sm am-padding-xs" href="http://wk.hzmba.net" target="_blank" title="华章网课">华章网课</a></li>-->
    </ul>
        <?php }else{ ?>
    <ul class="am-avg-sm-3 am-padding-top-sm">
        <li>
            <a href='/' class="am-text-center am-text-sm am-padding-xs">上海首页</a>
        </li>
        <li>
            <a href='http://bj.hzmba.com/' class="am-text-center am-text-sm am-padding-xs">北京校区</a>
        </li>

        <li>
            <a href='http://www.mbajs.com/' class="am-text-center am-text-sm am-padding-xs">南京校区</a>
        </li>
        <li>
            <a href='http://sz.szhzmba.com/' class="am-text-center am-text-sm am-padding-xs">深圳校区</a>
        </li>
        <li>
            <a href='http://suzhou.hzmba.net/' class="am-text-center am-text-sm am-padding-xs">苏州校区</a>
        </li>
        <li>
            <a href='http://www.nkmba.com/' class="am-text-center am-text-sm am-padding-xs">天津校区</a>
        </li>
    </ul>
        <?php } ?>


</footer>";s:12:"compile_time";i:1543543238;}";
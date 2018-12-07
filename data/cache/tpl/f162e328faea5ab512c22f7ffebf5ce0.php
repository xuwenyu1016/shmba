<?php exit;?>00155185453685759ebca8649294d2e7c67ec866cbe1s:1252:"a:2:{s:8:"template";s:1188:"<section class="intro am-padding-sm">

    <img src="/assets/img/31.png" class="am-img-responsive am-center qrCode" alt="" />

    <h3 class="am-text-center"><b>华章MBA考前辅导专业机构</b></h3>
    <p>17年来华章及其遍及全国43个城市的分支机构，已成功引领近10万学子考入理想名校。培养出清华、北大、复旦、上海交大、中山大学岭南学院、人大、 对外经贸、同济、上海财大、西安交大、南开大学、南京大学、浙江大学、厦门大学、中财、中科院、北邮、重庆大学、四川大学、华东理工大学等名校MBA联考状元和MBA面试满分得者。</p>
    <h3 class="am-text-center">不仅通过联考，更要受益终身</h3>
</section>

<footer class="am-padding-xs">
    <p class="am-text-center">免费咨询电话</p>
    <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schoolInfo", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
    <a class="am-text-center" href="tel:<?php echo $list["tel"];?>" title="<?php echo $list["school"];?>"><?php echo $list["tel"];?></a>
    <?php } ?>
</footer>";s:12:"compile_time";i:1520318536;}";
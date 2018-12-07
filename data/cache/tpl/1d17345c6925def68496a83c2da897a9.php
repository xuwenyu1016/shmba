<?php exit;?>001575080861b5645181ba5920e25c738a362adc06a9s:9409:"a:2:{s:8:"template";s:9345:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>


<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="schedule-table am-padding-sm">

    <h3 class="noBorder">本周课程表</h3>

    <!--徐汇-->
    <table class="am-table am-table-bordered am-margin-top-sm">
        <thead>
        <tr>
            <th colspan="8">徐汇校区 本周课程表</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>日期</td>
            <td>讲师</td>
            <td>内容</td>
            <td>教室</td>
        </tr>
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['xiaoqu'] ==  "徐汇"   && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
        <tr>
            <td><?php echo $list["date"];?><br/><?php echo $list["time"];?></td>
            <td><?php echo $list["lecturer"];?></td>
            <td><?php echo $list["class"];?>-<?php echo $list["keyPoints"];?></td>
            <td><?php echo $list["address"];?></td>
        </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>


    <!--长宁-->
    <table class="am-table am-table-bordered am-margin-top-sm">
        <thead>
        <tr>
            <th colspan="8">长宁校区 本周课程表</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>日期</td>
            <td>讲师</td>
            <td>内容</td>
            <td>教室</td>
        </tr>
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['xiaoqu'] ==  "长宁"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
        <tr>
            <td><?php echo $list["date"];?><br/><?php echo $list["time"];?></td>
            <td><?php echo $list["lecturer"];?></td>
            <td><?php echo $list["class"];?>-<?php echo $list["keyPoints"];?></td>
            <td><?php echo $list["address"];?></td>
        </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>


    <!--浦东-->
    <table class="am-table am-table-bordered am-margin-top-sm">
        <thead>
        <tr>
            <th colspan="8">浦东校区 本周课程表</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>日期</td>
            <td>讲师</td>
            <td>内容</td>
            <td>教室</td>
        </tr>
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['xiaoqu'] ==  "浦东" && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
        <tr>
            <td><?php echo $list["date"];?><br/><?php echo $list["time"];?></td>
            <td><?php echo $list["lecturer"];?></td>
            <td><?php echo $list["class"];?>-<?php echo $list["keyPoints"];?></td>
            <td><?php echo $list["address"];?></td>
        </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>


    <!--杨浦-->
    <table class="am-table am-table-bordered am-margin-top-sm">
        <thead>
        <tr>
            <th colspan="8">杨浦校区 本周课程表</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>日期</td>
            <td>讲师</td>
            <td>内容</td>
            <td>教室</td>
        </tr>
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['xiaoqu'] ==  "杨浦"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
        <tr>
            <td><?php echo $list["date"];?><br/><?php echo $list["time"];?></td>
            <td><?php echo $list["lecturer"];?></td>
            <td><?php echo $list["class"];?>-<?php echo $list["keyPoints"];?></td>
            <td><?php echo $list["address"];?></td>
        </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>


    <!--黄浦-->
    <table class="am-table am-table-bordered am-margin-top-sm">
        <thead>
        <tr>
            <th colspan="8">黄浦校区 本周课程表</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>日期</td>
            <td>讲师</td>
            <td>内容</td>
            <td>教室</td>
        </tr>
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['xiaoqu'] ==  "黄浦"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
        <tr>
            <td><?php echo $list["date"];?><br/><?php echo $list["time"];?></td>
            <td><?php echo $list["lecturer"];?></td>
            <td><?php echo $list["class"];?>-<?php echo $list["keyPoints"];?></td>
            <td><?php echo $list["address"];?></td>
        </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>

    <!--30人小班-->
    <table class="am-table am-table-bordered am-margin-top-sm">
        <thead>
        <tr>
            <th colspan="8">30人小班 本周课程表</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>日期</td>
            <td>讲师</td>
            <td>内容</td>
            <td>教室</td>
        </tr>
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['xiaoqu'] ==  "小班"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
        <tr>
            <td><?php echo $list["date"];?><br/><?php echo $list["time"];?></td>
            <td><?php echo $list["lecturer"];?></td>
            <td><?php echo $list["class"];?>-<?php echo $list["keyPoints"];?></td>
            <td><?php echo $list["address"];?></td>
        </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>


    <!--VIP班-->
    <table class="am-table am-table-bordered am-margin-top-sm">
        <thead>
        <tr>
            <th colspan="8">VIP班 本周课程表</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>日期</td>
            <td>讲师</td>
            <td>内容</td>
            <td>教室</td>
        </tr>
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['xiaoqu'] ==  "VIP"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
        <tr>
            <td><?php echo $list["date"];?><br/><?php echo $list["time"];?></td>
            <td><?php echo $list["lecturer"];?></td>
            <td><?php echo $list["class"];?>-<?php echo $list["keyPoints"];?></td>
            <td><?php echo $list["address"];?></td>
        </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>

    <!--突破班-->
    <table class="am-table am-table-bordered am-margin-top-sm">
        <thead>
        <tr>
            <th colspan="8">突破班 本周课程表</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>日期</td>
            <td>讲师</td>
            <td>内容</td>
            <td>教室</td>
        </tr>
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <?php if ( $list['xiaoqu'] ==  "突破"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
        <tr>
            <td><?php echo $list["date"];?><br/><?php echo $list["time"];?></td>
            <td><?php echo $list["lecturer"];?></td>
            <td><?php echo $list["class"];?>-<?php echo $list["keyPoints"];?></td>
            <td><?php echo $list["address"];?></td>
        </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>
</section>

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>
";s:12:"compile_time";i:1543544861;}";
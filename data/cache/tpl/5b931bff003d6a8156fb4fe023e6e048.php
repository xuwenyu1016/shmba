<?php exit;?>0015750798677e01012fc0322a9305d20bb4c752cbf9s:13088:"a:2:{s:8:"template";s:13023:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="banterBox">
    <img src="/upload/2018-01-31/6907a2c96fef130f2cdea3ace90ffea5.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />
    <!--<h1 class="banterTheme"><?php echo $categoryInfo["name"];?></h1>-->
</section>

<section class="schedule-table am-padding-vertical-xl">
    <div class="am-container">
        <h2>本周课程表</h2>
        <!--徐汇-->
        <table class="am-table am-table-bordered am-margin-top-lg tbListTM">
            <thead>
            <tr>
                <th colspan="8">徐汇校区 本周课程表</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>日期</td>
                <td>时间</td>
                <td>课程</td>
                <td>讲师</td>
                <td>内容</td>
                <td>材料</td>
                <td>班主任</td>
                <td>教室</td>
            </tr>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['xiaoqu'] ==  "徐汇"   && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
            <tr>
                <td class="scheduleDate"><?php echo $list["date"];?></td>
                <td><?php echo $list["time"];?></td>
                <td><?php echo $list["class"];?></td>
                <td><?php echo $list["lecturer"];?></td>
                <td><?php echo $list["keyPoints"];?></td>
                <td><?php echo $list["material"];?></td>
                <td><?php echo $list["teacherInfo"];?></td>
                <td><?php echo $list["address"];?></td>
            </tr>
            <?php } ?>
            <?php } ?>
            </tbody>
        </table>
        

        <!--长宁-->
        <table class="am-table am-table-bordered am-margin-top-lg tbListTM">
            <thead>
            <tr>
                <th colspan="8">长宁校区 本周课程表</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>日期</td>
                <td>时间</td>
                <td>课程</td>
                <td>讲师</td>
                <td>内容</td>
                <td>材料</td>
                <td>班主任</td>
                <td>教室</td>
            </tr>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['xiaoqu'] ==  "长宁"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
            <tr>
                <td class="scheduleDate"><?php echo $list["date"];?></td>
                <td><?php echo $list["time"];?></td>
                <td><?php echo $list["class"];?></td>
                <td><?php echo $list["lecturer"];?></td>
                <td><?php echo $list["keyPoints"];?></td>
                <td><?php echo $list["material"];?></td>
                <td><?php echo $list["teacherInfo"];?></td>
                <td><?php echo $list["address"];?></td>
            </tr>
            <?php } ?>
            <?php } ?>
            </tbody>
        </table>


        <!--浦东-->
        <table class="am-table am-table-bordered am-margin-top-lg tbListTM">
            <thead>
            <tr>
                <th colspan="8">浦东校区 本周课程表</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>日期</td>
                <td>时间</td>
                <td>课程</td>
                <td>讲师</td>
                <td>内容</td>
                <td>材料</td>
                <td>班主任</td>
                <td>教室</td>
            </tr>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['xiaoqu'] ==  "浦东" && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
            <tr>
                <td class="scheduleDate"><?php echo $list["date"];?></td>
                <td><?php echo $list["time"];?></td>
                <td><?php echo $list["class"];?></td>
                <td><?php echo $list["lecturer"];?></td>
                <td><?php echo $list["keyPoints"];?></td>
                <td><?php echo $list["material"];?></td>
                <td><?php echo $list["teacherInfo"];?></td>
                <td><?php echo $list["address"];?></td>
            </tr>

            <?php } ?>
            <?php } ?>
            </tbody>
        </table>


        <!--杨浦-->
        <table class="am-table am-table-bordered am-margin-top-lg tbListTM">
            <thead>
            <tr>
                <th colspan="8">杨浦校区 本周课程表</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>日期</td>
                <td>时间</td>
                <td>课程</td>
                <td>讲师</td>
                <td>内容</td>
                <td>材料</td>
                <td>班主任</td>
                <td>教室</td>
            </tr>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['xiaoqu'] ==  "杨浦"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
            <tr>
                <td class="scheduleDate"><?php echo $list["date"];?></td>
                <td><?php echo $list["time"];?></td>
                <td><?php echo $list["class"];?></td>
                <td><?php echo $list["lecturer"];?></td>
                <td><?php echo $list["keyPoints"];?></td>
                <td><?php echo $list["material"];?></td>
                <td><?php echo $list["teacherInfo"];?></td>
                <td><?php echo $list["address"];?></td>
            </tr>

            <?php } ?>
            <?php } ?>
            </tbody>
        </table>



        <!--黄浦-->
        <table class="am-table am-table-bordered am-margin-top-lg tbListTM">
            <thead>
            <tr>
                <th colspan="8">黄浦校区 本周课程表</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>日期</td>
                <td>时间</td>
                <td>课程</td>
                <td>讲师</td>
                <td>内容</td>
                <td>材料</td>
                <td>班主任</td>
                <td>教室</td>
            </tr>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['xiaoqu'] ==  "黄浦"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
            <tr>
                <td class="scheduleDate"><?php echo $list["date"];?></td>
                <td><?php echo $list["time"];?></td>
                <td><?php echo $list["class"];?></td>
                <td><?php echo $list["lecturer"];?></td>
                <td><?php echo $list["keyPoints"];?></td>
                <td><?php echo $list["material"];?></td>
                <td><?php echo $list["teacherInfo"];?></td>
                <td><?php echo $list["address"];?></td>
            </tr>
            
            <?php } ?>
            <?php } ?>
            </tbody>
        </table>

        <!--30人小班-->
        <table class="am-table am-table-bordered am-margin-top-lg tbListTM">
            <thead>
            <tr>
                <th colspan="8">30人小班 本周课程表</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>日期</td>
                <td>时间</td>
                <td>课程</td>
                <td>讲师</td>
                <td>内容</td>
                <td>材料</td>
                <td>班主任</td>
                <td>教室</td>
            </tr>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['xiaoqu'] ==  "小班"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
            <tr>
                <td class="scheduleDate"><?php echo $list["date"];?></td>
                <td><?php echo $list["time"];?></td>
                <td><?php echo $list["class"];?></td>
                <td><?php echo $list["lecturer"];?></td>
                <td><?php echo $list["keyPoints"];?></td>
                <td><?php echo $list["material"];?></td>
                <td><?php echo $list["teacherInfo"];?></td>
                <td><?php echo $list["address"];?></td>
            </tr>

            <?php } ?>
            <?php } ?>
            </tbody>
        </table>


        <!--VIP班 -->
        <table class="am-table am-table-bordered am-margin-top-lg tbListTM">
            <thead>
            <tr>
                <th colspan="8">VIP班 本周课程表</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>日期</td>
                <td>时间</td>
                <td>课程</td>
                <td>讲师</td>
                <td>内容</td>
                <td>材料</td>
                <td>班主任</td>
                <td>教室</td>
            </tr>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['xiaoqu'] ==  "VIP"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
            <tr>
                <td class="scheduleDate"><?php echo $list["date"];?></td>
                <td><?php echo $list["time"];?></td>
                <td><?php echo $list["class"];?></td>
                <td><?php echo $list["lecturer"];?></td>
                <td><?php echo $list["keyPoints"];?></td>
                <td><?php echo $list["material"];?></td>
                <td><?php echo $list["teacherInfo"];?></td>
                <td><?php echo $list["address"];?></td>
            </tr>

            <?php } ?>
            <?php } ?>
            </tbody>
        </table>

        <!--突破班 -->
        <table class="am-table am-table-bordered am-margin-top-lg tbListTM">
            <thead>
            <tr>
                <th colspan="8">突破班 本周课程表</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>日期</td>
                <td>时间</td>
                <td>课程</td>
                <td>讲师</td>
                <td>内容</td>
                <td>材料</td>
                <td>班主任</td>
                <td>教室</td>
            </tr>
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"schedule" , "limit"=>50, "order"=>"detailedTime asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
            <?php if ( $list['xiaoqu'] ==  "突破"  && date('Y-m-d H-i-s',$list['detailedTime']) >=  date("Y-m-d H-i-s") ){ ?>
            <tr>
                <td class="scheduleDate"><?php echo $list["date"];?></td>
                <td><?php echo $list["time"];?></td>
                <td><?php echo $list["class"];?></td>
                <td><?php echo $list["lecturer"];?></td>
                <td><?php echo $list["keyPoints"];?></td>
                <td><?php echo $list["material"];?></td>
                <td><?php echo $list["teacherInfo"];?></td>
                <td><?php echo $list["address"];?></td>
            </tr>

            <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>

</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>
";s:12:"compile_time";i:1543543867;}";
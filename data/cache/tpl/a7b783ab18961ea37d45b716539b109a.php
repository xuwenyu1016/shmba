<?php exit;?>0015750795012b11e4e8bdb0c4d064eb1656b43e8e8ds:2229:"a:2:{s:8:"template";s:2165:"<style>
    .dux-box{position: relative;}
    .table-responsive{overflow: scroll;width: 100%;}
    .table{table-layout: fixed;min-width: 1110px;overflow: scroll;}
    @media (max-width: 760px){
        .table-responsive{width: 1000px;}
        table.table{table-layout: initial;min-width:1000px;float:none;max-width: 1000px;width: 1000px;}
    }


</style>

<div class="panel dux-box">
    <div class="table-responsive">
        <table id="table" class="table table-hover ">
            <tbody>
                <tr>
                    <th width="75">编号</th>
                    <?php foreach ($tableTh as $vo) { ?>
                    <th width="*"><?php echo $vo;?></th>
                    <?php } ?>
                    <th width="100">操作</th>
                </tr>
                <?php foreach ($list as $vo) { ?>
                <tr>
                    <td style="word-wrap:break-word;word-break:break-all; "><?php echo $vo["data_id"];?></td>
                    <?php foreach ($fieldList as $val) { ?>
                    <?php if ($val['show']){ ?>
                    <td style="word-wrap:break-word;word-break:break-all; "><?php echo target('duxcms/FieldData')->showListField($vo[$val['field']],$val['type'],$val['config']); ?></a>
                    <?php } ?>
                    </td>
                    <?php } ?>
                    <td>
                        <a class="button bg-blue button-small icon-pencil" href="<?php echo url('edit',array('data_id'=>$vo['data_id'],'fieldset_id'=>$formInfo['fieldset_id']));?>" title="修改"></a>
                        <a class="button bg-red button-small icon-trash-o js-del" href="javascript:;" url="<?php echo url('del',array('fieldset_id'=>$formInfo['fieldset_id']));?>" data="<?php echo $vo["data_id"];?>" title="删除"></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="panel-foot table-foot clearfix">
        <?php echo $page;?>
    </div>
</div>
<script>
    Do.ready('base', function () {
        $('#table').duxTable();
    });
</script>";s:12:"compile_time";i:1543543501;}";
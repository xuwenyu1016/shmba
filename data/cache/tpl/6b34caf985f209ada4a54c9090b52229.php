<?php exit;?>001563938157f307f0d9de6c4d9b14c8a04975d72b72s:1171:"a:2:{s:8:"template";s:1107:"<form method="post">
    <div class="panel dux-box">
       <div class="table-responsive">
        <table id="table" class="table table-hover ">
            <tbody>
                <tr>
                    <th width="*">说明</th>
                    <th width="*">路径</th>
                    <th width="*">大小</th>
                    <th width="100">操作</th>
                </tr>
                <?php foreach ($list as $vo) { ?>
                <tr>
                    <td><?php echo $vo["name"];?></td>
                    <td><?php echo $vo["dir"];?></td>
                    <td><?php echo $vo["size"];?></td>
                    <td>
                        <a class="button bg-red button-small icon-trash-o js-del" href="javascript:;" data="<?php echo $vo["id"];?>" title="清空缓存"></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</form>
<script>
Do.ready('base',function() {
	$('#table').duxTable({
		deleteUrl: "<?php echo url();?>"
	});
});
</script>";s:12:"compile_time";i:1532402157;}";
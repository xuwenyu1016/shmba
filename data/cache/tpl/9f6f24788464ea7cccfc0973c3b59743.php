<?php exit;?>001575104043575287691667c625e707a38d69aeeedes:1205:"a:2:{s:8:"template";s:1141:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<div class="am-container alert-box">

    <article class="form-alert">
        <p class="am-margin-vertical-sm am-text-center am-center am-padding-bottom-xs alert-title">您的留言已收到</p>
        <p class="am-margin-vertical-sm am-padding-top-xs">华章老师将在3个工作日内和您联系。系统即将为您跳转至首页。。。</p>
        <a class="checkMore margin-top-sm am-center" onclick="history.go(-1)">返回上一页</a>
    </article>

</div>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/ending"); ?>

<script>
   $(document).ready(function() {
       function jump(count) {
           window.setTimeout(function(){
               count--;
               if(count > 0) {
                   $('#num').attr('innerHTML', count);
                   jump(count);
               } else {
                   location.href="/";
               }
           }, 1000);
       }
       jump(3);
   });
    
</script>

";s:12:"compile_time";i:1543568043;}";
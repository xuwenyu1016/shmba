<?php exit;?>001575092648712d3292e6fa881370a8acf879b4117as:1371:"a:2:{s:8:"template";s:1307:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>


<img src="/upload/2018-02-13/9d63b75cbcd684503e11b8b4fedf1a27.jpg" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />



    <article class="form-alert">
        <p class="am-margin-vertical-sm am-text-center am-center am-padding-bottom-xs alert-title">您的留言已收到</p>
        <p class="am-margin-vertical-sm am-padding-top-xs">华章老师将在3个工作日内和您联系。系统即将为您跳转至首页。。。</p>
        <a class="signUp margin-top-sm am-center" onclick="history.go(-1)">返回上一页</a>
    </article>



<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>

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

";s:12:"compile_time";i:1543556648;}";
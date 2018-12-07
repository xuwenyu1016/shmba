<?php
namespace app\duxcms\controller;
use app\home\controller\SiteController;
/**
 * 表单列表
 */

class FormController extends SiteController {

    /**
     * 列表
     */
    public function index(){
        $name = urldecode(request('get.name'));
        $table = len($name,0,20);
        if(empty($table)){
            $this->error404();
        }
        //获取表单信息
        $where = array();
        $where['table'] = $table;
        $formInfo = target('duxcms/FieldsetForm')->getWhereInfo($where);
        if(empty($formInfo)){
            $this->error404();
        }
        if(!$formInfo['show_list']){
            $this->error404();
        }
        //分页参数
        $size = intval($formInfo['list_page']);
        if (empty($size)) {
            $listRows = 20;
        } else {
            $listRows = $size;
        }
        //设置模型
        $model = target('duxcms/FieldData');
        $model->setTable('ext_'.$formInfo['table']);
        //查询数据
        $where = array();
        if(!empty($formInfo['list_where'])){
            $where[] = $formInfo['list_where'];
        }
        //查询内容
        $list = $model->page($listRows)->loadList($where,$limit,$formInfo['list_order']);
        $this->pager = $model->pager;
        //字段列表
        $where = array();
        $where['A.fieldset_id'] = $formInfo['fieldset_id'];
        $fieldList = target('FieldForm')->loadList($where);
        //格式化表单内容为基本数据
        $data = array();
        if(!empty($list)){
            foreach ($list as $key => $value) {
                $data[$key]=$value;
                foreach ($fieldList as $v) {
                    $data[$key][$v['field']] = target('duxcms/FieldData')->revertField($value[$v['field']],$v['type'],$v['config']);
                }
            }
        }
        //URL参数
        $pageMaps = array();
        $pageMaps['name'] = $name;
        //获取分页
        $page = $this->getPageShow($pageMaps);
        //位置导航
        $crumb = array(array('name'=>$formInfo['name'],'url'=>url('duxcms/Form/index',$pageMaps)));
        //MEDIA信息
        $media = $this->getMedia($formInfo['name']);
        $this->assign('crumb',$crumb);
        $this->assign('media', $media);
        $this->assign('pageList',$data);
        $this->assign('count', $count);
        $this->assign('page', $page);
        $this->assign('formInfo', $formInfo);
        $this->siteDisplay($formInfo['tpl_list']);
    }

    /**
     * 表单内容
     */
    public function info(){
        $name = urldecode(request('get.name'));
        $table = len($name,0,20);
        $id = request('get.id');
        if(empty($table)||empty($id)){
            $this->error404();
        }
        //获取表单信息
        $where = array();
        $where['table'] = $table;
        $formInfo = target('duxcms/FieldsetForm')->getWhereInfo($where);
        if(empty($formInfo)){
            $this->error404();
        }
        if(!$formInfo['show_info']){
            $this->error404();
        }
        //设置模型
        $model = target('duxcms/FieldData');
        $model->setTable('ext_'.$formInfo['table']);
        $info = $model->getInfo($id);
        if(empty($info)){
            $this->error404();
        }
        //字段列表
        $where = array();
        $where['A.fieldset_id'] = $formInfo['fieldset_id'];
        $fieldList = target('FieldForm')->loadList($where);
        //格式化表单内容为基本数据
        foreach ($fieldList as $v) {
            $info[$v['field']] = target('duxcms/FieldData')->revertField($info[$v['field']],$v['type'],$v['config']);
        }
        //位置导航
        $crumb = array(
            array('name'=>$formInfo['name'],'url'=>url('duxcms/Form/index',array('name'=>$name))),
            array('name'=>'详情','url'=>url('duxcms/Form/info',array('name'=>$name,'id'=>$id))),
        );
        //MEDIA信息
        $media = $this->getMedia($formInfo['name'] . '- 详情 ');
        $this->assign('crumb',$crumb);
        $this->assign('media', $media);
        $this->assign('formInfo', $formInfo);
        $this->assign('info', $info);
        $this->siteDisplay($formInfo['tpl_info']);
    }

    /**
     * 发布
     */
    public function push(){
        session_start();
        if(!IS_POST){
            $this->error404();
        }
//print_r('expression');exit();
        $_POST['ip']=$_SERVER["REMOTE_ADDR"];
        $_POST['link']=$_SERVER['HTTP_REFERER']."";

        $msg_time = date('Y-m-d H:i:s',time());
        $msg_c = request('post.content');
        $msg_name = request('post.name');
        $msg_tel = request('post.tel');
        $msg_link = request('post.link');

        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'MicroMessenger') ) {
            $_POST['browserType'] = "Wechat";
        } else if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){
            $_POST['browserType'] = 'IOS';
        }else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android')){
            $_POST['browserType'] = 'Android';
        }else{
            $_POST['browserType'] = 'PC';
        }

        $table = request('post.table');
        $token = request('post.token');
        $checkcode = request('post.checkcode'); //获取验证码
        $token = trim($token);
        if(empty($table)||empty($token)){
            $this->errorBlock();
        }

        if($_POST['ip'] == "188.143.232.14" || $_POST['ip'] == "124.76.118.148" || $_POST['ip'] == "146.185.223.45" ||
            $_POST['ip'] == "60.255.33.26" || $_POST['ip'] == "60.255.32.90" ||
            $_POST['ip'] >= "5.188.211.0" && $_POST['ip'] <= "5.188.211.9"||
            $_POST['ip'] >= "91.1.1.1" && $_POST['ip'] <= "91.9.9.9"||
            $_POST['ip'] >= "46.118.1.1" && $_POST['ip'] <= "46.118.9.9"||
            $_POST['ip'] >= "217.70.28.1" && $_POST['ip'] <= "217.70.28.9" ||
            $_POST['ip'] >= "178.1.1.1" && $_POST['ip'] <= "178.999.99.999" ||
            $_POST['ip'] >= "109.1.1.1" && $_POST['ip'] <= "109.999.99.999" ||
            $_POST['ip'] >= "146.1.1.1" && $_POST['ip'] <= "146.999.99.999" ||
            $_POST['ip'] >= "185.1.1.1" && $_POST['ip'] <= "185.999.99.999" ||
            $_POST['ip'] >= "220.181.55.144" && $_POST['ip'] <= "220.181.55.144" ||
            $_POST['ip'] >= "46.161.9.18" && $_POST['ip'] <= "46.161.9.3"){
            $this->error('提交失败,滚粗地球吧!');
        }

        if(!preg_match("/^1[34578]{1}\d{9}$/",$msg_tel)){
            $this->error('请输入准确手机号！');
        }
        //验证码判断
        if( $checkcode != $_SESSION['VC'] ){
//            $this->error('验证码错误！'.$checkcode.'+'.$_SESSION['VC']);
            $this->error('验证码错误！');
        }
        //验证token
//        if(!target('FieldsetForm')->validToken($table,$token)){
//            $this->error('安全验证失败，请刷新页面后重新提交！');
//        }
        //获取表单信息
        $where = array();
        $where['table'] = $table;
        $formInfo = target('duxcms/FieldsetForm')->getWhereInfo($where);
        if(empty($formInfo)){
            $this->errorBlock();
        }
        if(!$formInfo['post_status']){
            $this->errorBlock();
        }
        $data = array();
        foreach (request('post.') as $key => $value) {
            $data['Fieldset_'.$key] = $value;
        }
        $_POST = $data;
        //设置模型
        $model = target('duxcms/FieldData');
        $model->setTable('ext_'.$formInfo['table']);


        //增加信息
        $id = $model->saveData('add',$formInfo);
        if ( $id){
            if(empty($formInfo['post_return_url'])){
                $url =  $_SERVER["HTTP_REFERER"];
            }else{
                $url = $formInfo['post_return_url'];
            }



            //send
            $sendcontent['subject'] =  '有来自 '.$msg_name. '的留言';
            $sendcontent['body'] = '留言时间： '.$msg_time.'；留言人电话：<a href="tel:$msg_tel"> '.$msg_tel. '</a>；留言内容: '.$msg_c.'；留言链接: '.$msg_link;
            //$mail = $this->sendmail_teacher_withtel($sendcontent,$msg_tel);
            $mail = $this->sendmail_teacher_withtel_ex($sendcontent,$msg_tel,1);
            $model = target('duxcms/FieldData');
            $model->setTable('ext_ext_guestbook');
            $sql ="update  dux_ext_guestbook  set emailRemind='".$mail."' where data_id=".$id;
            $model->execute($sql);

            $this->success($formInfo['post_msg'], $url);


        }else{
            $msg = $model->getError();
            if (empty($msg))
            {
                $this->error($formInfo['name'].'发布失败，请刷新后重新尝试！');
            }else
            {
                $this->error($msg);
            }
        }
    }
//    有验证码
    public function pushNoVal(){
        session_start();
        if(!IS_POST){
            $this->error404();
        }

        $_POST['ip']=$_SERVER["REMOTE_ADDR"];
        $_POST['link']=$_SERVER['HTTP_REFERER']."";

        $msg_time = date('Y-m-d H:i:s',time());
        $msg_c = request('post.content');
        $msg_name = request('post.name');
        $msg_tel = request('post.tel');
        $msg_link = request('post.link');

        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'MicroMessenger') ) {
            $_POST['browserType'] = "Wechat";
        } else if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){
            $_POST['browserType'] = 'IOS';
        }else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android')){
            $_POST['browserType'] = 'Android';
        }else{
            $_POST['browserType'] = 'PC';
        }

        $table = request('post.table');
        $token = request('post.token');
//        $checkcode = request('post.checkcode'); //获取验证码
        $token = trim($token);
        if(empty($table)||empty($token)){
            $this->errorBlock();
        }

        //验证码判断
//        if( $checkcode != $_SESSION['VC'] ){
//            $this->error('验证码错误！'.$checkcode.'+'.$_SESSION['VC']);
//            $this->error('验证码错误！');
//        }
        //验证token
//        if(!target('FieldsetForm')->validToken($table,$token)){
//            $this->error('安全验证失败，请刷新页面后重新提交！');
//        }
        //获取表单信息
        $where = array();
        $where['table'] = $table;
        $formInfo = target('duxcms/FieldsetForm')->getWhereInfo($where);
        if(empty($formInfo)){
            $this->errorBlock();
        }
        if(!$formInfo['post_status']){
            $this->errorBlock();
        }
        $data = array();
        foreach (request('post.') as $key => $value) {
            $data['Fieldset_'.$key] = $value;
        }
        $_POST = $data;
        //设置模型
        $model = target('duxcms/FieldData');
        $model->setTable('ext_'.$formInfo['table']);


        //增加信息
        $id = $model->saveData('add',$formInfo);
        if ( $id){
            if(empty($formInfo['post_return_url'])){
                $url =  $_SERVER["HTTP_REFERER"];
            }else{
                $url = $formInfo['post_return_url'];
            }



            //send
            $sendcontent['subject'] =  '有来自 '.$msg_name. '的留言';
            $sendcontent['body'] = '留言时间： '.$msg_time.'；留言人电话：<a href="tel:$msg_tel"> '.$msg_tel. '</a>；留言内容: '.$msg_c.'；留言链接: '.$msg_link;
            //$mail = $this->sendmail_teacher_withtel2($sendcontent,$msg_tel);
            $mail = $this->sendmail_teacher_withtel_ex($sendcontent,$msg_tel,2); //to change it

            $model = target('duxcms/FieldData');
            $model->setTable('ext_ext_MBATest');
            $sql ="update  dux_ext_MBATest  set emailRemind='".$mail."' where data_id=".$id;
            $model->execute($sql);

            //
            $this->success($formInfo['post_msg'], $url);


        }else{
            $msg = $model->getError();
            if (empty($msg))
            {
                $this->error($formInfo['name'].'发布失败，请刷新后重新尝试！');
            }else
            {
                $this->error($msg);
            }
        }
    }
//    无验证码

//    短信验证

    //    1.发送短信验证码
    public function miji_yz(){
        $phone  = $_POST['tel'];
        $flag = 0;
        $params= '';//要post的数据
        $verify = rand(123456, 999999);//获取随机验证码

        $_SESSION['yzm'] = $verify;
//        print_r($_SESSION);

        //以下信息自己填以下
        $mobile= $phone;//手机号
        $argv = array(
            'name'=>'15800658919',     //必填参数。用户账号
            'pwd'=>'C048F4670F2E34A37EF092A9DBA8',     //必填参数。（web平台：基本资料中的接口密码）
            'content'=>'短信验证码为：'.$verify.'，请勿将验证码提供给他人。',   //必填参数。发送内容（1-500 个汉字）UTF-8编码
            'mobile'=>$mobile,   //必填参数。手机号码。多个以英文逗号隔开
            'stime'=>'',   //可选参数。发送时间，填写时已填写的时间发送，不填时为当前时间发送
            'sign'=>'华章MBA',    //必填参数。用户签名。
            'type'=>'pt',  //必填参数。固定值 pt
            'extno'=>''    //可选参数，扩展码，用户定义扩展码，只能为数字
        );
        //print_r($argv);exit;
        //构造要post的字符串
        //echo $argv['content'];
        //dump($argv);
        foreach ($argv as $key=>$value) {
            if ($flag!=0) {
                $params .= "&";
                $flag = 1;
            }
            $params.= $key."="; $params.= urlencode($value);// urlencode($value);
            $flag = 1;
        }
        $url = "http://web.1xinxi.cn/asmx/smsservice.aspx?".$params; //提交的url地址
        //dump($url);
        $con= substr( file_get_contents($url), 0, 1 );  //获取信息发送后的状态

    }
    //    2.验证
    public function pushTest(){
        session_start();
        if(!IS_POST){
            $this->error404();
        }

        $_POST['ip']=$_SERVER["REMOTE_ADDR"];
        $_POST['link']=$_SERVER['HTTP_REFERER']."";

        $msg_time = date('Y-m-d H:i:s',time());
        $msg_c = request('post.content');
        $msg_name = request('post.name');
        $msg_tel = request('post.tel');
        $msg_link = request('post.link');

        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'MicroMessenger') ) {
            $_POST['browserType'] = "Wechat";
        } else if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){
            $_POST['browserType'] = 'IOS';
        }else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android')){
            $_POST['browserType'] = 'Android';
        }else{
            $_POST['browserType'] = 'PC';
        }

        $table = request('post.table');
        $token = request('post.token');
//        $checkcode = request('post.checkcode'); //获取验证码
        $token = trim($token);
        if(empty($table)||empty($token)){
            $this->errorBlock();
        }


//        手机号验证
        if(!preg_match("/^1[34578]{1}\d{9}$/",$msg_tel)){
            $this->error('请输入准确手机号！');
        }

        //      短信验证
        $yzm = intval($_POST['verifiy']);
//        var_dump($yzm);
//        var_dump($_SESSION['yzm']);
//        die('end');
//        if($yzm != $_SESSION['yzm'] || empty($yzm)){
        if( empty($yzm)){
//            echo "<script>alert('验证错误，请返回重做！');</script>";
//            print_r($yzm);
//            print_r($_SESSION['yzm']);
            $this->error('验证码验证失败，请返回页面刷新重做！');
        }

        //验证码判断
//        if( $checkcode != $_SESSION['VC'] ){
//            $this->error('验证码错误！'.$checkcode.'+'.$_SESSION['VC']);
//        }
        //验证token
//        if(!target('FieldsetForm')->validToken($table,$token)){
//            $this->error('安全验证失败，请刷新页面后重新提交！');
//        }
        //获取表单信息
        $where = array();
        $where['table'] = $table;
        $formInfo = target('duxcms/FieldsetForm')->getWhereInfo($where);
        if(empty($formInfo)){
            $this->errorBlock();
        }
        if(!$formInfo['post_status']){
            $this->errorBlock();
        }
        $data = array();
        foreach (request('post.') as $key => $value) {
            $data['Fieldset_'.$key] = $value;
        }
        $_POST = $data;
        //设置模型
        $model = target('duxcms/FieldData');
        $model->setTable('ext_'.$formInfo['table']);


        //增加信息
        $id = $model->saveData('add',$formInfo);
        if ( $id){
            if(empty($formInfo['post_return_url'])){
                $url =  $_SERVER["HTTP_REFERER"];
            }else{
                $url = $formInfo['post_return_url'];
            }



            //send
            $sendcontent['subject'] =  '有来自 '.$msg_name. '的留言';
            $sendcontent['body'] = '留言时间： '.$msg_time.'；留言人电话：<a href="tel:$msg_tel"> '.$msg_tel. '</a>；留言内容: '.$msg_c.'；留言链接: '.$msg_link;
            //$mail = $this->sendmail_teacher_withtel2($sendcontent,$msg_tel);
            $mail = $this->sendmail_teacher_withtel_ex($sendcontent,$msg_tel,3); //to change it

            $model = target('duxcms/FieldData');
            $model->setTable('ext_ext_MBATest');
            $sql ="update  dux_ext_MBATest  set emailRemind='".$mail."' where data_id=".$id;
            $model->execute($sql);

            //
            $this->success($formInfo['post_msg'], $url);


        }else{
            $msg = $model->getError();
            if (empty($msg))
            {
                $this->error($formInfo['name'].'发布失败，请刷新后重新尝试！');
            }else
            {
                $this->error($msg);
            }
        }
    }


    //新建一个表 含电话（主键唯一）、教师姓名、教师email字段
    public function check_tel_teacher($tel)
    {
        //若指定电话 存在已分配老师email 则返回email及教师信息
        $model = target('duxcms/FieldData');

        //获取随机老师的信息 包括邮箱 需完善随机读取算法
        $model->setTable('ext_msgtel_teacher');

        $mailto ='';
        //先判断是否存在这个电话的老师
        $sqlcheck = "select * from dux_ext_msgtel_teacher where tel= '".$tel."' ";
        $tdata= $model->query($sqlcheck);
        if ($tdata) {
            return $tdata;
        }
        else{
            return NULL;
        }
        //否则返回NULL
    }

    public function update_tel_teacher($tel,$arr_teacher)
    {
        //将以前写的随机算法生成的教师信息 对应 电话保存
        $model = target('duxcms/FieldData');
        $model->setTable('ext_msgtel_teacher');
        $sql = "INSERT INTO dux_ext_msgtel_teacher(tel,teacherName,mailAddress) VALUES ('".$tel."', '".$arr_teacher['tname']."', '".$arr_teacher['mailto']."'); ";
        $model->execute($sql);
    }

    //type 1 dux_ext_guestbook  2 mbatest
    public  function  sendmail_teacher_withtel_ex($sendcontent,$tel,$type)
    {

        $tel_special = '15000000000';
        if ($tel == $tel_special) {
            $model = target('duxcms/FieldData');
            $sql='select * from dux_ext_laoshi where teacherName="ceshi"   limit 1';
            $t= $model->query($sql);
            $tname = '';
            if($t){
                $mailto = $t[0]['mailAddress'];
                $tname = $t[0]['teacherName'].'|'.$t[0]['mailAddress'];

                $sql ='update dux_ext_laoshi set is_send_over=1,times=times+1 where data_id='.$t[0]['data_id'];
                $model->execute($sql);

                $sendcontent['subject'] = $tname.',老师你好'. $sendcontent['subject'];
                $this->sendmail( $mailto,$sendcontent);
            }
            return $tname;
        }

        $model = target('duxcms/FieldData');

        //获取随机老师的信息 包括邮箱 需完善随机读取算法
        $model->setTable('ext_laoshi');

        $mailto ='';
        $tname = '';

        //检查留言手机号在老师分配记录中是否存在，如果存在存入tdata
        $tdata = $this->check_tel_teacher($tel);
        //       print_r($tdata);

        //LAOSHI
        //若全部都被分配了留言is_send_over=1 则全部设置成0，未分配留言。
        $sqlcc='select * from dux_ext_laoshi where is_send_over=0 and teacherName!="ceshi"  limit 1';
        $tcc= $model->query($sqlcc);
        if(!$tcc)
        {
            $sqluu ='update dux_ext_laoshi set is_send_over=0 where teacherName!="ceshi" ';
            $model->execute($sqluu);
        }
        ///


//        如果手机号在以往的分配记录中存在
        if ($tdata) {
            # code...
            $mailto = $tdata[0]['mailAddress'];
//            获取第一个老师的邮箱放在mailto里
            $tname = $tdata[0]['teacherName'].'|'.$tdata[0]['mailAddress'];
//            获取第一个老师的名字和邮箱放在tname里

            $sql ="update dux_ext_laoshi set is_send_over=1,times=times+1 where mailAddress ='".$mailto."'";
//            更新数据库，把 is_send_over 设置为1，次数+1， 邮箱 内容为 刚才获取的老师邮箱
            $model->execute($sql);
//            执行数据库
        }
//        如果手机号在以往的分配记录中不存在
        else{
            //$t = $model->getInfo(3);
//          选取所有未分配老师，测试用老师除外。
            $sql='select * from dux_ext_laoshi where is_send_over=0 and teacherName!="ceshi"  ORDER BY data_id asc limit 1';

            $t= $model->query($sql);
//          如果存在未分配老师
            if($t){
                //设定该老师为已被发送留言，留言量+1
                $sql ='update dux_ext_laoshi set is_send_over=1,times=times+1 where data_id='.$t[0]['data_id'];
//                执行数据库
                $model->execute($sql);

            }
            //        print_r($t);
            //        die();
            //        $t['email'] = '502408393@qq.com';

            $mailto = $t[0]['mailAddress'];
            $tname = $t[0]['teacherName'].'|'.$t[0]['mailAddress'];

            //
            $arr['mailto'] = $mailto;
            $arr['tname'] = $t[0]['teacherName'];
            $this->update_tel_teacher($tel,$arr);
        }


//        print_r($mailto);
//         die();
//        die;
        $sendcontent['subject'] = $tname.',老师你好'. $sendcontent['subject'];
        $this->sendmail( $mailto,$sendcontent);

        return  $tname ;

    }


    public  function  sendmail_teacher($sendcontent)
    {
        $model = target('duxcms/FieldData');

        //获取随机老师的信息 包括邮箱 需完善随机读取算法
        $model->setTable('ext_laoshi');

//        $where = ' 1=1 ';

        //$t = $model->getInfo(3);
        $sql='select * from dux_ext_laoshi ORDER BY data_id asc limit 1';
        $t= $model->query($sql);
        if($t){
            $sql ='update dux_ext_laoshi set times=times+1 where data_id='.$t[0]['data_id'];
            $model->execute($sql);
        }
//        print_r($t);
//        die();
//        $t['email'] = '502408393@qq.com';

        $mailto = $t[0]['mailAddress'];
//        print_r($mailto);
//        die();
//        die;
        $this->sendmail( $mailto,$sendcontent);

        //发送完往发送记录表插入一条记录 .todo


        return  $t[0]['teacherName'] ;

    }

    public function sendmail($mailto,$sendcontent){
//        $content = json_encode($formInfo);
        \framework\ext\Email::init();
        $rst = \framework\ext\Email::send( $mailto,$sendcontent['subject'],$sendcontent['body']);
//        exit($rst);//最后需解除注释
    }


}


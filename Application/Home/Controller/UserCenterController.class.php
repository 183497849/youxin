<?php
namespace Home\Controller;
use Think\Controller;
class UserCenterController extends Controller {
    public function index(){
        echo "asd";
     }

    public function reg(){
       $this->display();
    }

    public function doReg(){
        $User = D('User');
        $data = array(
            'number' => $_POST['number'],
            'password' => $_POST['password'],
            'image' => $_POST['image'],
            'create_time' => date('Y-m-d H:i:s'),
        );

        $verifyCode = $_POST['verify'];
        $Verify = new \Think\Verify();
        $status = $Verify->check($verifyCode);
        if(!$status){
            $this->error('验证码错误',U('Home/UserCenter/login'));
            die();
        }

        if(empty($_POST['number'])||empty($_POST['password'])){
            $this->error('参数错误',U('Home/UserCenter/reg'));
            die();
        }
        $status = $User->add($data);
        if($status){
           $this->success('注册成功',U('Home/UserCenter/login'));
        }
    }

    public function login(){
        $this->display();
    }

    public function doLogin(){
        $User = D('User');
        $number = $_POST['number'];
        $password = $_POST['password'];
        $data = array(
            'number' => $number,
        );
        $verifyCode = $_POST['verify'];
        $Verify = new \Think\Verify();
        $status = $Verify->check($verifyCode);
        if(!$status){
            $this->error('验证码错误',U('Home/UserCenter/login'));
            die();
        }

        $res = $User->where($data)->select();
        $userInfo = $res[0];
        if($userInfo['password'] == $password){
            unset($userInfo['password']);
            $_SESSION['me'] = $userInfo;
            $this->success('密码正确，登录成功',U('Home/UserCenter/reg'));
        }else{
             $this->error('密码错误，登录失败',U('Home/UserCenter/login'));
        }
    }
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 20;
        $Verify->length   = 3;
        $Verify->useNoise = false;
        $Verify->useImgBg = true;
        $Verify->entry();
    }

}
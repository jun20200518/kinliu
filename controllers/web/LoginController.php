<?php
namespace app\controllers\web;
use app\models\db\configDB;
use app\models\db\ggDB;
use Yii;
use yii\web\Controller;
use app\models\TestForm;
use app\models\form\web\loginform;
use app\models\form\web\singupform;
use app\models\form\web\forgetform;
class LoginController extends Controller
{
    //登入
    public function actionLogin()
    {
        echo'有盡actionLogin';
        exit;
        $session = Yii::$app->session;
        $model= new loginform;
        $error= Yii::$app->request->get('error');
        echo'有盡actionLogin';
        exit;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //有送出表單

            if($model->login()){
                //登入成功

                //
                if($model->getstatus()=="1"){
                    //echo"是1".$model->getstatus();
                    $this->redirect('https://zb.objkss.cc/index.php?r=web/login/login&error=你的帐户被禁用无法使用');
                }else {
                    $id = $model->getId();
                    $session['id']=$id;
                    //echo"不是1". $model->getstatus();
                    $this->redirect('https://zb.objkss.cc/index.php?r=web/index/index');
                }
            }else {
                //登入失败
                $this->redirect('https://zb.objkss.cc/index.php?r=web/login/login&error=帐号密码错误请重新登入');
                //echo "登入失敗";
            }


        }else{
            //$session['id']='20';
            if(!isset($session['id'])){
                // 沒有Session['id']
                if($error==""){
                    return $this->renderPartial("login",  array('model' => $model) );
                }else {
                    return $this->renderPartial("login",  array('model' => $model,'error' => $error) );
                }

            }else {
                //echo "有";
                //有Session['id']
                $this->redirect('https://zb.objkss.cc/index.php?r=web/index/index');

            }
        }
    }

    public function actionLogin1()
    {
        $session = Yii::$app->session;
        $model= new loginform;
        $db_gg=ggDB::find()->one();
        $error= Yii::$app->request->get('error');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //有送出表單

            if($model->login()){
                //登入成功
                //
                if($model->getstatus()=="1"){
                    //echo"是1".$model->getstatus();
                    $this->redirect($db_gg->url.'web/login/login&error=你的帐户被禁用无法使用');
                }else {
                    $id = $model->getId();
                    $session['id']=$id;
                    //echo"不是1". $model->getstatus();
                    $this->redirect($db_gg->url.'web/index/index');
                }
            }else {
                //登入失败
                $this->redirect($db_gg->url.'web/login/login&error=帐号密码错误请重新登入');
                //echo "登入失敗";
            }

        }else{
            //$session['id']='20';
            if(!isset($session['id'])){
                // 沒有Session['id']
                if($error==""){
                    return $this->renderPartial("login1",  array('model' => $model) );
                }else {
                    return $this->renderPartial("login1",  array('model' => $model,'error' => $error) );
                }
            }else {
                //echo "有";
                //有Session['id']
                $this->redirect($db_gg->url.'web/index/index');
            }
        }
    }

  




    //注册
    public function actionSignup()
    {
        $config = configDB::find()->where('id=3')->one();
        $is_reg = $config->value;
//        echo $is_reg;
        if($is_reg =="1"){
            $model= new singupform;
            //echo "load".$model2->load(Yii::$app->request->post())."<br>";
            $error= Yii::$app->request->get('error');
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                //有送出表單
                $data =$model->select();
                if($data != ""){
                    //echo "已有此帐号";
                    $this->redirect('https://zb.objkss.cc/index.php?r=web/login/signup&error=此电话号码已被注册');
                }else {
                    if($model->password != $model->repassword){

                        $this->redirect('https://zb.objkss.cc/index.php?r=web/login/signup&error=两次输入密码不同,请重新输入');
                    }else {
                        if($model->singup() == "true"){
                            $this->redirect('https://zb.objkss.cc/index.php?r=web/login/login&error=注册成功请填写帐号密码登入');
                            //echo "注册成功";
                        }else if($model->singup() == "false"){
                            $this->redirect('https://zb.objkss.cc/index.php?r=web/login/signup&error=注册失败');
                            //echo "注册失败";
                        }else if($model->singup() == "error"){
                            $this->redirect('https://zb.objkss.cc/index.php?r=web/login/signup&error=验证码错误');
                            //echo "注册失败";
                        }
                    }
                }
            }else{
                if($error==""){
                    return $this->renderPartial("signup",  array('model' => $model) );
                }else {
                    return $this->renderPartial("signup",  array('model' => $model,'error' => $error) );
                }
                //查看注册初始頁面

            }
        }else{
            $this->redirect('https://zb.objkss.cc/index.php?r=web/login/login&error=目前不开放注册');
        }
    }

    // 忘记密码
    public function actionForget()
    {
      $model = new forgetform;
        $error= Yii::$app->request->get('error');
      if ($model->load(Yii::$app->request->post()) && $model->validate()) {
          //有送出表單
          $data =$model->select();
          if($data == ""){
            $this->redirect('https://zb.objkss.cc/index.php?r=web/login/forget&error=找不到此帐号');
          }else {
            if($model->password != $model->repassword){
              $this->redirect('https://zb.objkss.cc/index.php?r=web/login/forget&error=两次输入密码不同,请重新输入');
            }else {
              if($model->update()){
                $this->redirect('https://zb.objkss.cc/index.php?r=web/login/login&error=密码已修改请使用新的密码登入');
              }else {
                $this->redirect('https://zb.objkss.cc/index.php?r=web/login/login&error=修改失败');
              }
            }
        }
      }else{
          //查看忘記密碼頁面
          if($error==""){
              return $this->renderPartial("forget",  array('model' => $model) );
          }else {
              return $this->renderPartial("forget",  array('model' => $model,'error' => $error) );
          }
      }

    }


}

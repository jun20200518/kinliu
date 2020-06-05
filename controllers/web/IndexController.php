<?php
namespace app\controllers\web;
use Yii;
use yii\web\Controller;
use app\models\db\userinfoDB;
use app\models\db\productinfoDB;
use app\models\db\configDB;
class IndexController extends Controller
{

    public function actionRyanindex(){
        if($this->checksession()){
            $session = Yii::$app->session;
            $id = $session['id'];

            $ryan = 123;

            return $this->renderPartial("ryanindex",array('ryan'=>$ryan));
        }
    }

    //登入
    public function actionIndex()
    {
        echo'有盡index';
//        exit();
      if($this->checksession()){
        $session = Yii::$app->session;
        $id = $session['id'];
        $userinfo = userinfoDB::find()->where('uid='.$id)->one();
        $productinfo = productinfoDB::find()->where('isopen=1')->orderBy(['pid'=>SORT_ASC])->all();
        $page = $productinfo[0]->pid;
        $config = configDB::find()->where('id=31')->one();
        $announcement = $config->value;
        $config1 = configDB::find()->where('id=4')->one();
          $poundage = $config1->value;
          $config2 = configDB::find()->where('id=36')->one();
          $pop = $config2->value;
          $config3 = configDB::find()->where('id=7')->one();
          $pay_choose = $config3->value;

          //echo $poundage;

        return $this->renderPartial("index",array('userinfo' => $userinfo,'productinfo' => $productinfo,'page' => $page,'announcement' => $announcement,'poundage' => $poundage,'pop' => $pop,'pay_choose'=>$pay_choose));
      }
    }

    public function actionIndex1(){
        if($this->checksession()){
            $session = Yii::$app->session;
            $id = $session['id'];
            $userinfo = userinfoDB::find()->where('uid='.$id)->one();
            $productinfo = productinfoDB::find()->where('isopen=1')->orderBy(['pid'=>SORT_ASC])->all();
            $page = $productinfo[0]->pid;
            $config = configDB::find()->where('id=31')->one();
            $announcement = $config->value;
            $config1 = configDB::find()->where('id=4')->one();
            $poundage = $config1->value;
            $config2 = configDB::find()->where('id=36')->one();
            $pop = $config2->value;
            $config3 = configDB::find()->where('id=7')->one();
            $pay_choose = $config3->value;

            return $this->renderPartial("index1",array('userinfo' => $userinfo,'productinfo' => $productinfo,'page' => $page,'announcement' => $announcement,'poundage' => $poundage,'pop' => $pop,'pay_choose'=>$pay_choose));
        }
    }
  //檢查Session
  public function checksession()
  {
      echo'有盡checksession';
      exit();
    $session = Yii::$app->session;
    if(!isset($session['id'])){
      $this->redirect('http://localhost/basic/web/index.php?r=web/login/login');
      return false;
    }else {
      return true;
    }
  }
    //注册
}

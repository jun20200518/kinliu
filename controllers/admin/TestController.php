<?php

namespace app\controllers\admin;
use Yii;
use yii\web\Controller;
use app\models\db\userinfoDB;
class TestController extends Controller
{
  public function actionHello(){
    // echo '123';
    $jason = userinfoDB::find()->where('ustatus=:config',[':config'=>'1'])->one();

    

    return $this->renderPartial("index",array('jason'=>$jason));
  }

  public function actionDb(){
    $jason  = userinfoDB::find()->where('ustatus=:config',[':config'=>'1'])->all();
    print_r ($jason);

    exit();
  }


    public function actionHello1(){
    // echo '123';
    // $jason = userinfoDB::find()->where('ustatus=:config',[':config'=>'1'])->one();

    // 返回多行. 每行都是列名和值的关联数组.
    // 如果该查询没有结果则返回空数组
    $jason = Yii::$app->db->createCommand('SELECT * FROM tx_userinfo')
                ->queryAll();
      // echo'<pre>';         
      // print_r($jason);
      // echo'</pre>';     
      // exit;    
      // $jason = json_encode($jason);
      // return $jason;      

    // return $this->renderPartial("index",array('jason'=>$jason));
    return $this->render("index",array('jason'=>$jason));
  }
}

?>
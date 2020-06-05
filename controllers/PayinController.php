<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

//負責入金功能
class PayinController extends Controller
{
    //入金API主體
    public function actionPayin(){
        $request = Yii::$app->request;
        //如果有帶入帳戶及金額才會往下執行
        if(empty($request->post('partner') || empty($request->post('money')){
            //end
            echo'請檢查是否有帶入帳號或金額參數';
            exit;
        }else{
            //解密驗簽
            //將參數丟至相應lib(一個供應商一個lib) post
            $param = '';
            $this->payform($param);
        }

    }
    public function payform($param){
        $str = '<body><form action="http://google.com.tw" method="post" id="payform" name="payform" style="display:none"> ' ;
        $str .= '<input type="text" name="partner" value="' . $param['partner'] . '" /><br />' ;
        $str .= '<input type="text" name="money" value="' . $param['money'] . '" /><br />' ;

        $str .= '<script>window.οnlοad= function(){document.getElementById("payform").submit();}</script>';
        echo $str; exit;
    }

}

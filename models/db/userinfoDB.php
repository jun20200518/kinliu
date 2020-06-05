<?php
namespace app\models\db;
use yii\db\ActiveRecord;

class userinfoDB extends ActiveRecord{
  public static function tableName(){
    return "{{%userinfo}}";
  }
}

?>
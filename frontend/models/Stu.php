<?php
namespace app\models;
 
use Yii;
 
class Stu extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'stu';
    }
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['name', 'email'], 'string', 'max' => 200]
        ];
    }   
}
?>
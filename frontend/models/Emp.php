<?php
namespace app\models;
 
use Yii;
 
class Emp extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'emp';
    }
    public function rules()
    {
        return [
            [['SDivision'], 'required'],
            [['SDivision'], 'string', 'max' => 200]
        ];
    }   
}
?>
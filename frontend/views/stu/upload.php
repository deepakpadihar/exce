<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
     <img src="upload/girnar-logo.png"> 	
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
 
    <?= $form->field($model, 'file')->fileInput(); ?>
     
    <?= Html::submitButton('Add', ['class' => 'btn btn-success btn-block']); ?>

 
<?php ActiveForm::end(); ?>
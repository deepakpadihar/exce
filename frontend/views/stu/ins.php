<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
  
<div class="alert alert-success" style="text-align:center">
  <strong>Add New Details..!</strong> 
</div>
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'email'); ?>
    <?= $form->field($model, 'password'); ?>
     
    <?= Html::submitButton('Add', ['class' => 'btn btn-success btn-block']); ?>
 
<?php ActiveForm::end(); ?>
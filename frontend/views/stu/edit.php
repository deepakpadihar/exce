<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 <div class="alert alert-warning" style="text-align:center">
  <strong>Update Details..!</strong> 
</div>
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($edit, 'name'); ?>
    <?= $form->field($edit, 'email'); ?>
    <?= $form->field($edit, 'password'); ?>
    <?= Html::submitButton('update', ['class' => 'btn btn-warning btn-block', 'name' => 'update']) ?>

<?php ActiveForm::end(); ?>
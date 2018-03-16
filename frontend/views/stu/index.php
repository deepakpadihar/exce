<?php
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\export\ExportMenu;
?>
<style>
table th,td{
    padding: 10px;
}
</style>
 
<div class="alert alert-info" style="text-align:center">
  <strong>Student Details..!</strong> 
</div>
 <?= Html::a('Add new details', ['stu/insert'], ['class' => 'btn btn-info']); ?>
 <?= Html::a('Import .xlsx file', ['stu/upload'], ['class' => 'btn btn-info']); ?>
 <?= Html::a('Import .csv file', ['stu/upload'], ['class' => 'btn btn-info']); ?>
<table border="1" class="table table-striped" style="margin-top:15px">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach($model as $m){ ?>
    <tr>
        <td><?= $m->name; ?></td>
        <td><?= $m->email; ?></td>
        <td><?= $m->password; ?></td>
        <td><?= Html::a("Edit", ['stu/edit', 'id' => $m->id]  ); ?> </td>
        <td><?= Html::a("Delete", ['stu/del', 'id' => $m->id]  ); ?></td>
        </tr>
    <?php } ?>
</table>

 <?= Html::a('Export Excel file', ['stu/export'], ['class' => 'btn btn-info btn-block']); ?>

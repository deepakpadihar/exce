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
 <?= Html::a('Import Excel file', ['stu/upload'], ['class' => 'btn btn-info']); ?>
<div class="table-responsive">
<table border="1" class="table table-hover  " style="margin-top:15px;table-layout: auto;">
    <tr>
        <th>Edit</th>
        <th>Delete</th>        
        <th>S division</th>
        <th>S Divisionname</th>
        <th>S Sourcetype</th>
        <th>S division</th>
        <th>S Divisionname</th>
        <th>S Sourcetype</th>        
        <th>S division</th>
        <th>S Divisionname</th>
        <th>S Sourcetype</th>       
        <th>S division</th>
        <th>S Divisionname</th>
        <th>S Sourcetype</th>        
        <th>S division</th>
        <th>S Divisionname</th>
        <th>S Sourcetype</th>        
        <th>S division</th>
        <th>S Divisionname</th>
        <th>S Sourcetype</th>        
        <th>S division</th>
        <th>S Divisionname</th>
        <th>S Sourcetype</th>

    </tr>
    <?php foreach($model as $m){ ?>
    <tr>
        <td><?= Html::a("Edit", ['stu/edit', 'id' => $m->id]  ); ?> </td>
        <td><?= Html::a("Delete", ['stu/del', 'id' => $m->id]  ); ?></td>
        <td><?= $m->SDivision; ?></td>
        <td><?= $m->SDivisionname; ?></td>
        <td><?= $m->SSourcetype; ?></td>
        
            </tr>
    <?php } ?>
</table>
</div>

 <?= Html::a('Export Excel file', ['stu/export'], ['class' => 'btn btn-info btn-block']); ?>


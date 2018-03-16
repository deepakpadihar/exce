<?php
namespace frontend\controllers;
use Yii;
use app\models\Stu;
use app\models\Upload;
use yii\web\UploadedFile;
use yii\web\Controller;


class StuController extends Controller
{  
	 public function actionIndex()
    {
       // echo "ok";
        $stu = Stu::find()->all();
        //echo print_r($stu);         
       return $this->render('index', ['model' => $stu]);
    }

    public function actionInsert()
    {
        $model = new Stu();
        if($model->load(Yii::$app->request->post()) && $model->save())
        {
             return $this->redirect(['index']);
        }
		return $this->render('ins', ['model' => $model]);
    }

    public function actionEdit($id)
    {
        //echo "Edit.. id=".$id;
        $edit = Stu::find()->where(['id' => $id])->one();
  		//print_r($edit);
  		if($edit->load(Yii::$app->request->post()) && $edit->save()){
            return $this->redirect(['index']);
        }
  		return $this->render('edit', ['edit' => $edit]);

    }

    public function actionDel($id)
    {
     //   echo "Del.. id=".$id;
        $model = Stu::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }

    public function actionUpload()
    {
    	$model=new Upload();
    	if(Yii::$app->request->isPost)
    	{
    		$model->file= UploadedFile::getInstance($model,'file');
    		if($model->file && $model->validate())
    		{
    			if($model->file->saveAs('upload/'.$model->file->basename.'.'.$model->file->extension))
    			{

    	// 			echo '<div class="alert alert-info" style="text-align:center;margin-top:50px">
 				// 	 <strong>Excel file has been uploaded</strong> 
					// </div>';
					$inputFile='upload/'.$model->file->basename.'.'.$model->file->extension;
    	try{
    		$inputFileType=\PHPExcel_IOFactory::identify($inputFile);
    		$objReader=\PHPExcel_IOFactory::createReader($inputFileType);
    		$objPHPExcel=$objReader->load($inputFile);

    	}
    	catch(Exception $e){ die('Error'); }

    	$sheet= $objPHPExcel->getSheet(0);
    	$highestRow	=$sheet->getHighestRow();
    	$highestColumn	=$sheet->getHighestColumn();
    	for($row=1;$row <=$highestRow; $row++  )
    	{
    		$rowData=$sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);
    		if($row == 1)
    		{
    			continue;
    		}
    		$stu=new Stu();
       		$stu->name=$rowData[0][0];	
    		$stu->email=$rowData[0][1];
    		$stu->password=$rowData[0][2];
    		$stu->save();

    	}
    return $this->redirect(['index']);	
    			}

    		}
    	}
    	return $this->render('upload', ['model' => $model]);
    }


    public function actionExport()
    {
     
     			echo '<div class="alert alert-info" style="text-align:center;margin-top:50px">
 					 <strong>Export Excel file loading...</strong> 
					</div>';

    }





} 

 ?>
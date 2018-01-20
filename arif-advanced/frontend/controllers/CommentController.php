<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Comment;


class CommentController extends Controller{
	public function actionIndex(){
		// SELECT * from tbl_comment;
		$model = Comment::find()->all();
		return $this->render('index',['model'=>$model]);
	}

	public function actionUpdate($id){
		$model = Comment::findOne($id);
		if(Yii::$app->request->post()){
			$model->load(Yii::$app->request->post());
			if($model->save()){
				Yii::$app->session->setFlash('success','Berhasil update data');
				return $this->redirect(['index']);
		}
	}
		return $this->render('create',['model'=>$model]);

	}

	public function actionCreate(){
		$model = new Comment();
		//proses form submit
		if(Yii::$app->request->post()){
			$model->load(Yii::$app->request->post());
			if($model->save()){
				Yii::$app->session->setFlash('success','Berhasil simpan data');
				return $this->redirect(['index']);
			} else{
				Yii::$app->session->setFlash('error','Gagal simpan data');
			}
		}
		return $this->render('create',['model'=>$model]);
	}

	public function actionDelete($id){
		$model = Comment::findOne($id);
		$model->delete();
		Yii::$app->session->setFlash('success','Berhasil hapus data');
		return $this->redirect(['index']);
	}
}

?>
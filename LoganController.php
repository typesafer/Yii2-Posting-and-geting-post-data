<?php
namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\LoganModel;


class LoganController extends Controller
{

	public function actionHello(){
	$model = new LoganModel;
	 if ($model->load(Yii::$app->request->post()) && $model->validate()) {
	 $name = $model->name;
	 Yii::$app->session->setFlash("success","You have entered data correctly $name");
	}
	return $this->render('LoganForm', ['model' => $model,]);
	}
}

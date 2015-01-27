<?php
namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\LoganForm;


class LoganController extends Controller
{

	public function actionHello(){
	$model = new LoganForm;
	 if ($model->load(Yii::$app->request->post()) && $model->validate()) {
	 $name = $model->name;
	 Yii::$app->session->setFlash("success","You have entered data correctly $name");
	}
	return $this->render('loganform', ['model' => $model,]);
	}
}

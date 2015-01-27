<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<br/><br/><br/><br/>
<?php
if(Yii::$app->session->hasFlash('success')){
echo Yii::$app->session->getFlash('success');
}
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>

<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

<?php
/**
 * @var $this yii\web\View
 * @var $this app\modules\admin\controllers\LoginController
 * @var $model app\modules\user\models\LoginForm
 * @var $form yii\widgets\ActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 OMMU (www.ommu.co)
 * @created date 3 January 2018, 14:02 WIB
 * @link https://github.com/ommu/ommu
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\widgets\ActiveForm;

$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([
	'enableClientValidation' => true,
	'enableAjaxValidation' => false,
	//'enableClientScript' => true,
]); ?>
	<?php echo $form->field($model, 'username', ['template'=>'{label}<div class="input-group input-group-merge">{input}<div class="input-group-prepend"><div class="input-group-text"><span class="far fa-envelope"></span></div></div></div>{error}'])
		->textInput(['autofocus'=>true, 'type'=>'email', 'class'=>'form-control form-control-prepended', 'placeholder'=>'john@doe.com'])
		->label($model->getAttributeLabel('username'), ['class'=>'text-label']); ?>

	<?php echo $form->field($model, 'password', ['template'=>'{label}<div class="input-group input-group-merge">{input}<div class="input-group-prepend"><div class="input-group-text"><span class="fa fa-key"></span></div></div></div>{error}'])
		->passwordInput(['type'=>'password', 'class'=>'form-control form-control-prepended', 'placeholder'=>'Enter your password'])
		->label($model->getAttributeLabel('password'), ['class'=>'text-label']); ?>

	<div class="form-group">
		<?php echo Html::submitButton(Yii::t('app', 'Login'), ['class'=>'btn btn-block btn-primary']) ?>
	</div>

	<?php echo $form->field($model, 'rememberMe', ['options'=>['class'=>'form-group text-center']])
		->checkbox(['template'=>'<div class="custom-control custom-checkbox">{input}{label}</div>', 'class'=>'custom-control-input'])
		->label(Yii::t('app', 'Remember me for 30 days'), ['class'=>'custom-control-label']) ?>

	<div class="form-group text-center">
		<a href=""><?php echo Yii::t('app', 'Forgot password?');?></a> <br>
		Don't have an account? <a class="text-body text-underline" href="signup-centered-boxed.html">Sign up!</a>
	</div>

<?php ActiveForm::end(); ?>
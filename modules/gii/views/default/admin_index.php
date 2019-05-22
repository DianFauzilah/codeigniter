<?php
/**
 * @var $this DefaultController
 * @var $this \yii\web\View
 * @var $generators \yii\gii\Generator[]
 * @var $content string
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 OMMU (www.ommu.co)
 * @created date 24 September 2017, 12:38 WIB
 * @link https://github.com/ommu/ommu
 *
 */

use yii\helpers\Html;

$generators = Yii::$app->controller->module->generators;
$this->context->layout = 'admin_default';?>

<div class="row">
	<?php foreach ($generators as $id => $generator): ?>
	<div class="col-lg-4">
		<div class="card">
			<div class="card-header card-header-large bg-white">
				<h4 class="card-header__title"><?php echo Html::encode($generator->getName()) ?></h4>
			</div>
			<div class="card-body">
				<p><?php echo $generator->getDescription() ?></p>
				<p class="lead">Start the fun with the following code generators:</p>
				<div class="widget_summary">
					<?php echo Html::a('Start &raquo;', ['default/view', 'id' => $id], ['class' => 'btn btn-success']) ?>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<p><a class="btn btn-success" href="http://www.yiiframework.com/extensions/?tag=gii">Get More Generators</a></p>
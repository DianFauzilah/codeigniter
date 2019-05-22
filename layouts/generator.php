<?php 
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;

\themes\stackadmin\assets\GiiAsset::register($this);
$generators = Yii::$app->controller->module->generators;
$activeGenerator = Yii::$app->controller->generator;
?>

<?php $this->beginContent('@themes/stackadmin/layouts/admin_default.php'); ?>

<?php echo \app\components\widgets\Alert::widget(['closeButton'=>false]); ?>

<div class="row">
	<div class="col-lg-9">
		<div class="card">
			<div class="card-body">
				<?php echo $content; ?>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="card">
			<div class="list-group">
				<?php foreach ($generators as $id => $generator) {
					$label = '<i class="glyphicon glyphicon-chevron-right float-right"></i>' . Html::encode($generator->getName());
					echo Html::a($label, ['default/view', 'id' => $id], [
						'class' => $generator === $activeGenerator ? 'list-group-item active' : 'list-group-item',
					]);
				} ?>
			</div>
		</div>
	</div>
</div>

<?php $this->endContent(); ?>
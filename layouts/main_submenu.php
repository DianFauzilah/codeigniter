<?php
/* @var $this \yii\web\View */
/* @var $generators \yii\gii\Generator[] */
/* @var $activeGenerator \yii\gii\Generator */
/* @var $content string */

use yii\helpers\Html;

$controller = $this->context;
$menus = $controller->subMenu;
$route = $controller->route;
foreach ($menus as $i => $menu) {
	foreach ($menu['url'] as $key => $val) {
		$part = explode('*', $val);
		if(strpos($part[0], '$_GET') !== false)
			$menus[$i]['url'][$key] = $controller->subMenuParam ? $controller->subMenuParam : Yii::$app->request->get($part[1]);
	}
	if(isset($menu['select'])) {
		if($menu['select'] == 'controller')
			$menus[$i]['active'] = strtolower($controller->id) == trim($menu['url'][0], '/');
			// $menus[$i]['active'] = strtolower($controller->id) == str_replace('/'.$controller->action->id, '', trim($menu['url'][0], '/'));
		else if($menu['select'] == 'action')
			$menus[$i]['active'] = strtolower($controller->id.'/'.$controller->action->id) == trim($menu['url'][0], '/');
	} else
		$menus[$i]['active'] = strpos($route, trim($menu['url'][0], '/')) === 0;
} ?>

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
			<?php foreach ($menus as $menu) {
				$label = Html::tag('i', '', ['class' => 'glyphicon glyphicon-chevron-right pull-right']) .
					Html::tag('span', Html::encode($menu['label']), []);
				$active = $menu['active'] ? ' active' : '';
				$htmlOptions = ['class' => 'list-group-item' . $active];
				if(isset($menu['htmlOptions']))
					$htmlOptions = \yii\helpers\ArrayHelper::merge($htmlOptions, $menu['htmlOptions']);
				echo Html::a($label, $menu['url'], $htmlOptions);
			} ?>
		</div>
	</div>
</div>

<?php $this->endContent(); ?>

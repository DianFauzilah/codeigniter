<?php
namespace themes\stackadmin\components;

use Yii;
use yii\helpers\ArrayHelper;
use app\modules\rbac\components\MenuHelper;

class Sidebars extends \yii\base\Widget
{
	use \ommu\traits\ThemeTrait;

	public function run()
	{
		$menus = [];
		if(!Yii::$app->isDemoTheme()) {
			$menus = ArrayHelper::merge(
				$menus,
				MenuHelper::getAssignedMenu(Yii::$app->user->id)
			);
		} else 
			$menus = $this->themeMenu('stackadmin');

		return $this->render('sidebars', [
			'menus' => $menus,
		]);
	}
}
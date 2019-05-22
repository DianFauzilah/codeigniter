<?php
namespace themes\stackadmin\components;

use Yii;
use yii\helpers\ArrayHelper;
use app\modules\rbac\components\MenuHelper;

class Navigation extends \yii\base\Widget
{
	use \ommu\traits\ThemeTrait;

	public $menus = [];

	public function init()
	{
		$menus = [];
		if(!Yii::$app->isDemoTheme()) {
			$menus = ArrayHelper::merge(
				$menus,
				MenuHelper::getAssignedMenu(Yii::$app->user->id)
			);
		} else 
			$menus = $this->themeMenu('stackadmin');
		$this->menus = $menus;
	}

	public function run() {
		return $this->render('navigation');
	}
}
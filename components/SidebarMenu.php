<?php
namespace themes\stackadmin\components;

class SidebarMenu extends \yii\base\Widget
{
	public $menus = [];

	public function run()
	{
		return $this->render('sidebar_menu');
	}
}
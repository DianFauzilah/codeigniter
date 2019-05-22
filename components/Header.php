<?php
namespace themes\stackadmin\components;

class Header extends \yii\base\Widget
{
	public function run() {
		return $this->render('header');
	}
}
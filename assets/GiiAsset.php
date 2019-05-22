<?php
namespace themes\stackadmin\assets;

use Yii;

class GiiAsset extends \yii\gii\GiiAsset
{
	/**
	 * {@inheritdoc}
	 */
	public function init()
	{
		parent::init();

		Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
			'css' => [],
		];
	}
}
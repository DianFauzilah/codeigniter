<?php
namespace themes\stackadmin\assets;

class MaterialDesignKitFactoryPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/material-design-kit/dist';

	public $js = [
		'material-design-kit.js',
	];

	public $depends = [
		'themes\stackadmin\assets\DOMFactoryPluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}
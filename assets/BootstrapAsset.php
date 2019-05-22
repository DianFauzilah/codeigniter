<?php
namespace themes\stackadmin\assets;

class BootstrapAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/bootstrap/dist';
	
	public $css = [
		'css/bootstrap.css',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}
<?php
namespace themes\stackadmin\assets;

class DOMFactoryPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/dom-factory/dist';

	public $js = [
		'dom-factory.js',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}
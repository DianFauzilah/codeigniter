<?php
namespace themes\stackadmin\assets;

class MomentRangePluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/moment-range/dist';

	public $js = [
		'moment-range.js',
	];

	public $depends = [
		'themes\stackadmin\assets\MomentPluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}
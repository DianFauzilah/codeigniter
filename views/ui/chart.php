<?php
/**
 * @var $this app\components\View
 * @var $this themes\stackadmin\controllers\UiController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 15 February 2019, 16:07 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
\themes\stackadmin\assets\ChartJsPluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/js/settings.js', ['depends' => [ThemePluginAsset::className()]]);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/chartjs-rounded-bar.js', ['depends' => [ThemePluginAsset::className()]]);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/charts.js', ['depends' => [ThemePluginAsset::className()]]);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/chart-custom.js', ['depends' => [ThemePluginAsset::className()]]);
?>

<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Line</h4>
	</div>
	<div class="card-body">
		<p>A line chart is a way of plotting data points on a line. Often, it is used to show trend data, or the comparison of two data sets.</p>

		<div class="chart">
			<canvas id="performanceChart" class="chart-canvas"></canvas>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Area</h4>
	</div>
	<div class="card-body">
		<p>An area chart or area graph displays graphically quantitative data. It is based on the line chart.</p>

		<div class="chart">
			<canvas id="performanceAreaChart" class="chart-canvas"></canvas>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Doughnut</h4>
	</div>
	<div class="card-body">
		<p>Excellent at showing the relational proportions between data.</p>

		<div class="chart">
			<canvas id="devicesChart" class="chart-canvas"></canvas>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Bar</h4>
	</div>
	<div class="card-body">
		<p>A bar chart provides a way of showing data values represented as vertical bars. It is sometimes used to show trend data, and the comparison of multiple data sets side by side.</p>

		<div class="chart">
			<canvas id="ordersChart" class="chart-canvas"></canvas>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header card-header-large bg-white d-flex align-items-center">
		<h4 class="card-header__title flex">Switch Toggle</h4>
		<div class="d-flex align-items-center">
			<label for="chart-switch-toggle" class="mb-0">Show affiliate:</label>
			<div class="custom-control custom-checkbox-toggle ml-2">
				<input checked="" aria-checked="true" type="checkbox" id="chart-switch-toggle" class="custom-control-input" role="switch" data-toggle="chart" data-target="#ordersChartSwitch" data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#b2e599","label":"Affiliate"}]}}'>
				<label class="custom-control-label" for="chart-switch-toggle"><span class="sr-only">Show affiliate</span></label>
			</div>
		</div>
	</div>
	<div class="card-body">
		<p>Easily toggle an additional set of data with a simple interface based on the <code>data</code> attributes.</p>
		<div class="chart">
			<canvas id="ordersChartSwitch" class="chart-canvas"></canvas>
		</div>
	</div>
</div>
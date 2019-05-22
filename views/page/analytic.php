<?php
/**
 * @var $this app\components\View
 * @var $this themes\stackadmin\controllers\PageController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 17 February 2019, 13:51 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
\themes\stackadmin\assets\FlatpickrPluginAsset::register($this);
\themes\stackadmin\assets\MomentRangePluginAsset::register($this);
\themes\stackadmin\assets\ChartJsPluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/js/settings.js', ['depends' => [ThemePluginAsset::className()]]);
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/flatpickr.css', ['depends' => [ThemePluginAsset::className()]]);
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/flatpickr.rtl.css', ['depends' => [ThemePluginAsset::className()]]);
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/flatpickr-airbnb.css', ['depends' => [ThemePluginAsset::className()]]);
$this->registerCssFile($themeAsset->baseUrl . '/demo/css/flatpickr-airbnb.rtl.css', ['depends' => [ThemePluginAsset::className()]]);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/flatpickr.js', ['depends' => [ThemePluginAsset::className()]]);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/charts.js', ['depends' => [ThemePluginAsset::className()]]);
$this->registerJsFile($themeAsset->baseUrl . '/demo/data/chart-sample-line.js', ['depends' => [ThemePluginAsset::className()]]);
?>

<div class="card-group">
	<div class="card card-body text-center">

		<div class="d-flex flex-row align-items-center">
			<div class="card-header__title m-0"> <i class="material-icons icon-muted icon-30pt">assessment</i> Visits</div>
			<div class="text-amount ml-auto">3,642</div>
		</div>
	</div>
	<div class="card card-body text-center">
		<div class="d-flex flex-row align-items-center">
			<div class="card-header__title m-0"><i class="material-icons icon-muted icon-30pt">shopping_basket</i> Purchases</div>
			<div class="text-amount ml-auto">&dollar;12,311</div>
		</div>
	</div>
	<div class="card card-body text-center">
		<div class="d-flex flex-row align-items-center">
			<div class="card-header__title m-0"><i class="material-icons  icon-muted icon-30pt">perm_identity</i> Customers</div>
			<div class="text-amount ml-auto">78</div>
		</div>
	</div>
</div>


<div class="card card-form d-flex flex-column flex-sm-row">
	<div class="card-form__body card-body-form-group flex">
		<div class="row">
			<div class="col-sm-auto">
				<div class="form-group">
					<label for="filter_name">Name</label>
					<input id="filter_name" type="text" class="form-control" placeholder="Search by name">
				</div>
			</div>
			<div class="col-sm-auto">
				<div class="form-group">
					<label for="filter_category">Category</label><br>
					<select id="filter_category" class="custom-select" style="width: 200px;">
						<option value="all">All Categories</option>
					</select>
				</div>
			</div>
			<div class="col-sm-auto">
				<div class="form-group">
					<label for="filter_stock">In stock?</label>
					<div class="custom-control custom-checkbox mt-sm-2">
						<input type="checkbox" class="custom-control-input" id="filter_stock" checked="">
						<label class="custom-control-label" for="filter_stock">Yes</label>
					</div>
				</div>
			</div>
			<div class="col-sm-auto">
				<div class="form-group" style="width: 200px;">
					<label for="filter_date">Order date</label>
					<input id="filter_date" type="text" class="form-control" placeholder="Select date ..." value="13/03/2018 to 20/03/2018" data-toggle="flatpickr" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
				</div>
			</div>
		</div>
	</div>
	<button class="btn bg-white border-left border-top border-top-sm-0 rounded-top-0 rounded-top-sm rounded-left-sm-0"><i class="material-icons text-primary icon-20pt">refresh</i></button>
</div>

<div class="row">
	<div class="col-lg-7">
		<div class="card">
			<div class="card-body">
				<div class="d-flex align-items-center text-center mb-4">
					<div class="border-right pr-4 mr-4">
						<div class="mb-0">Total Views</div>
						<div class="text-amount">4,412</div>
					</div>
					<div>
						<div class="mb-0">Conv. Ratio</div>
						<div class="text-amount">4%</div>
					</div>
					<div class="ml-auto">
						<a href="#" class="btn btn-primary">Export Data <i class="material-icons">file_download</i></a>
					</div>
				</div>
				<div class="chart" style="height: 295px;">
					<canvas id="viewsChart">
						<span style="font-size: 1rem;"><strong>Views</strong> area chart goes here.</span>
					</canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-5">
		<div class="card">
			<div class="card-header card-header-large bg-white d-flex align-items-center">
				<div class="flatpickr-wrapper flex">
					<div id="recent_orders_date" data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
						<h4 class="card-header__title">Recent Orders</h4>
						<a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 to 20/03/2018</a>
						<input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
					</div>
				</div>
				<i class="material-icons icon-muted">help_outline</i>
			</div>
			<div class="card-body py-0">
				<div class="list-group list-group-small list-group-flush">

					<div class="list-group-item d-flex align-items-center px-0">
						<div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Sherri J. Cardenas</div>
						<div class="mr-3 text-dark-gray">3 days ago</div>
						<div><a href="">&dollar;123</a></div>
					</div>

					<div class="list-group-item d-flex align-items-center px-0">
						<div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Joseph S. Ferland</div>
						<div class="mr-3 text-dark-gray">2 days ago</div>
						<div><a href="">&dollar;246</a></div>
					</div>

					<div class="list-group-item d-flex align-items-center px-0">
						<div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Bryan K. Davis</div>
						<div class="mr-3 text-dark-gray">1 day ago</div>
						<div><a href="">&dollar;369</a></div>
					</div>

					<div class="list-group-item d-flex align-items-center px-0">
						<div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Elizabeth J. Ohara</div>
						<div class="mr-3 text-dark-gray">4 hours ago</div>
						<div><a href="">&dollar;492</a></div>
					</div>

					<div class="list-group-item d-flex align-items-center px-0">
						<div class="mr-3 flex"> <i class="material-icons icon-18pt icon-muted">contacts</i> Kaci M. Langston</div>
						<div class="mr-3 text-dark-gray">just now</div>
						<div><a href="">&dollar;615</a></div>
					</div>

				</div>
			</div>
			<div class="card-footer text-center">
				<a class="text-muted" href="">View All (54)</a>
			</div>
		</div>
	</div>
</div>
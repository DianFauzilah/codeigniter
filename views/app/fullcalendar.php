<?php
/**
 * @var $this app\components\View
 * @var $this themes\stackadmin\controllers\AppController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 17 February 2019, 20:54 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

use yii\helpers\Html;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
\themes\stackadmin\assets\JqueryUiPluginAsset::register($this);
\themes\stackadmin\assets\MomentPluginAsset::register($this);
\themes\stackadmin\assets\FullcalendarPluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/fullcalendar.js', ['depends' => [ThemePluginAsset::className()]]);
?>

<div class="row">
	<div class="col-lg-9">
		<div class="card card-body">
			<div id="calendar" data-toggle="fullcalendar"></div>
		</div>
	</div> <!-- end col -->

	<div class="col-lg-3">
		<div id="external-events">
			<p class="text-muted">Drag and drop your event or click in the calendar.</p>
			<div class="external-event bg-success" data-class="bg-success">
				<i class="mr-2 material-icons">drag_handle</i>
				<span class="external-event__title">New Theme Release</span>
			</div>
			<div class="external-event bg-info" data-class="bg-info">
				<i class="mr-2 material-icons">drag_handle</i>
				<span class="external-event__title">My Event</span>
			</div>
			<div class="external-event bg-warning" data-class="bg-warning">
				<i class="mr-2 material-icons">drag_handle</i>
				<span class="external-event__title">Meet manager</span>
			</div>
			<div class="external-event bg-danger" data-class="bg-danger">
				<i class="mr-2 material-icons">drag_handle</i>
				<span class="external-event__title">Create New theme</span>
			</div>
		</div>

		<!-- checkbox -->
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="drop-remove">
			<label class="custom-control-label" for="drop-remove">Remove after drop</label>
		</div>
	</div> <!-- end col-->
</div> <!-- end row -->
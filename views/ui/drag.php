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
\themes\stackadmin\assets\DragulaPluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/dragula.js', ['depends' => [ThemePluginAsset::className()]]);
?>

<div class="card">
	<div class="card-header card-header-large bg-white">
		<h4 class="card-header__title">Simple Drag and Drop</h4>
	</div>
	<div class="card-body">
		<p>Just add the data attribute <code>data-toggle="dragula"</code> to have drag and drop support in your container.</p>

		<div class="form-row" data-toggle="dragula">
			<div class="col-md col-lg-4">
				<div class="card form-row__card text-white bg-primary">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</div> <!-- end card-body-->
				</div> <!-- end card-->
			</div>
			<div class="col-md col-lg-4">
				<div class="card form-row__card bg-dark text-white">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</div> <!-- end card-body-->
				</div> <!-- end card-->
			</div>
			<div class="col-md col-lg-4">
				<div class="card form-row__card text-white bg-success">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</div> <!-- end card-body-->
				</div> <!-- end card-->
			</div> <!-- end col-->

			<div class="col-md col-lg-4">
				<div class="card form-row__card text-white bg-info">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</div> <!-- end card-body-->
				</div> <!-- end card-->
			</div> <!-- end col-->

			<div class="col-md col-lg-4">
				<div class="card form-row__card text-white bg-warning">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</div> <!-- end card-body-->
				</div> <!-- end card-->
			</div> <!-- end col-->

			<div class="col-md col-lg-4">
				<div class="card form-row__card text-white bg-danger">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</div> <!-- end card-body-->
				</div> <!-- end card-->
			</div> <!-- end col-->

		</div>
	</div>
</div>





<h4>Containers</h4>
<p>Add the data attribute <code>data-dragula-containers='["#cards-left", "#cards-right"]'</code> to allow the user to drag an element in any of the containers and drop it in any other container in the list.</p>



<div class="row" data-toggle="dragula" data-dragula-containers='["#cards-left", "#cards-right"]'>
	<div class="col-md">
		<div class="card shadow-none border bg-light">
			<div class="card-body">
				<div class="text-label mb-3">Container #1</div>
				<div id="cards-left" class="card-list">


					<div class="card">
						<div class="card-body media">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<p>
									<strong>Jenell D. Matney</strong><br>
									<span class="text-muted">Founder and CEO</span>
								</p>
								<p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-body media">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<p>
									<strong>Sherri J. Cardenas</strong><br>
									<span class="text-muted">Software Engineer</span>
								</p>
								<p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-body media">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<p>
									<strong>Joseph S. Ferland</strong><br>
									<span class="text-muted">Web Designer</span>
								</p>
								<p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
	<div class="col-md">
		<div class="card shadow-none border bg-light">
			<div class="card-body">
				<div class="text-label mb-3">Container #2</div>
				<div id="cards-right" class="card-list">


					<div class="card">
						<div class="card-body media">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<p>
									<strong>Bryan K. Davis</strong><br>
									<span class="text-muted">Web Developer</span>
								</p>
								<p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-body media">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<p>
									<strong>Elizabeth J. Ohara</strong><br>
									<span class="text-muted">Business Analyst</span>
								</p>
								<p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-body media">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<p>
									<strong>Kaci M. Langston</strong><br>
									<span class="text-muted">Human Resources</span>
								</p>
								<p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>

<h4>Handles</h4>
<p>Add the data attribute <code>data-dragula-moves="js-dragula-handle"</code> to allow the user to drag an element in any of the containers and drop it in any other container in the list <strong>using a handle</strong>.</p>



<div class="row" data-toggle="dragula" data-dragula-containers='["#cards-moves-left", "#cards-moves-right"]' data-dragula-moves="js-dragula-handle">
	<div class="col-md">
		<div class="card shadow-none border bg-light">
			<div class="card-body">
				<div class="text-label mb-3">Container #1</div>
				<div id="cards-moves-left" class="card-list">


					<div class="card">
						<div class="card-body media align-items-center">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<strong>Jenell D. Matney</strong><br>
								<span class="text-muted">Founder and CEO</span>
							</div>
							<div class="media-right ml-3">
								<span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-body media align-items-center">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<strong>Sherri J. Cardenas</strong><br>
								<span class="text-muted">Software Engineer</span>
							</div>
							<div class="media-right ml-3">
								<span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-body media align-items-center">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<strong>Joseph S. Ferland</strong><br>
								<span class="text-muted">Web Designer</span>
							</div>
							<div class="media-right ml-3">
								<span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
	<div class="col-md">
		<div class="card shadow-none border bg-light">
			<div class="card-body">
				<div class="text-label mb-3">Container #2</div>
				<div id="cards-moves-right" class="card-list">


					<div class="card">
						<div class="card-body media align-items-center">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<strong>Bryan K. Davis</strong><br>
								<span class="text-muted">Web Developer</span>
							</div>
							<div class="media-right ml-3">
								<span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-body media align-items-center">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<strong>Elizabeth J. Ohara</strong><br>
								<span class="text-muted">Business Analyst</span>
							</div>
							<div class="media-right ml-3">
								<span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
							</div>
						</div>
					</div>



					<div class="card">
						<div class="card-body media align-items-center">
							<div class="media-left mr-3">
								<div class="avatar">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>
							</div>
							<div class="media-body">
								<strong>Kaci M. Langston</strong><br>
								<span class="text-muted">Human Resources</span>
							</div>
							<div class="media-right ml-3">
								<span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
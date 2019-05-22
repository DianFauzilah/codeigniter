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
\themes\stackadmin\assets\DragulaPluginAsset::register($this);
$this->registerJsFile($themeAsset->baseUrl . '/demo/js/dragula.js', ['depends' => [ThemePluginAsset::className()]]);
?>

<div class="trello-board__tasks" data-toggle="dragula" data-dragula-containers='["#trello-tasks-1", "#trello-tasks-2", "#trello-tasks-3", "#trello-tasks-4"]'>
	<div class="card bg-light border">
		<div class="card-header card-header-sm bg-white">
			<h4 class="card-header__title">Todo (3)</h4>
		</div>
		<div class="card-body p-2">
			<div class="trello-board__tasks-list card-list" id="trello-tasks-1">





				<div class="trello-board__tasks-item card shadow-none border">
					<div class="p-3">
						<p class="m-0 d-flex align-items-center">
							<strong>Add UI Buttons Page</strong> <span class="badge badge-light-gray ml-auto">OPEN</span></p>

						<p class="d-flex align-items-center mb-2">
							<i class="material-icons icon-16pt mr-2 text-muted">folder_open</i>
							<span class="text-muted mr-3">Stack</span>
							<i class="material-icons icon-16pt mr-2 text-muted">comment</i>
							<span class="text-muted"><strong>28</strong> comments</span>
						</p>
						<div class="media">
							<div class="media-left mr-2">

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

							</div>
							<div class="media-body">

							</div>
						</div>
					</div>
				</div>



				<div class="trello-board__tasks-item card shadow-none border">
					<div class="p-3">
						<p class="m-0 d-flex align-items-center">
							<strong>Envato Item Presentation</strong> <span class="badge badge-success ml-auto">RESOLVED</span></p>

						<p class="d-flex align-items-center mb-2">
							<i class="material-icons icon-16pt mr-2 text-muted">folder_open</i>
							<span class="text-muted mr-3">Stack</span>
							<i class="material-icons icon-16pt mr-2 text-muted">comment</i>
							<span class="text-muted"><strong>28</strong> comments</span>
						</p>
						<div class="media">
							<div class="media-left mr-2 avatar-group">

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

							</div>
							<div class="media-body">

								<a href="">+2 more</a>

							</div>
						</div>
					</div>
				</div>



				<div class="trello-board__tasks-item card shadow-none border">
					<div class="p-3">
						<p class="m-0 d-flex align-items-center">
							<strong>Add Trello App Page</strong> <span class="badge badge-warning ml-auto">NEED HELP</span></p>

						<p class="d-flex align-items-center mb-2">
							<i class="material-icons icon-16pt mr-2 text-muted">folder_open</i>
							<span class="text-muted mr-3">Stack</span>
							<i class="material-icons icon-16pt mr-2 text-muted">comment</i>
							<span class="text-muted"><strong>28</strong> comments</span>
						</p>
						<div class="media">
							<div class="media-left mr-2">

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

							</div>
							<div class="media-body">

							</div>
						</div>
					</div>
				</div>



			</div>
			<a href="#" class="btn btn-light btn-block mt-2">+ Add Card</a>
		</div>
	</div>
</div>
<div class="trello-board__tasks">
	<div class="card bg-light border">
		<div class="card-header card-header-sm bg-white">
			<h4 class="card-header__title">In Progress (2)</h4>
		</div>
		<div class="card-body p-2">
			<div class="trello-board__tasks-list card-list" id="trello-tasks-2">





				<div class="trello-board__tasks-item card shadow-none border">
					<div class="p-3">
						<p class="m-0 d-flex align-items-center">
							<strong>Add Trello App Page</strong> <span class="badge badge-danger ml-auto">HIGH</span></p>

						<p class="d-flex align-items-center mb-2">
							<i class="material-icons icon-16pt mr-2 text-muted">folder_open</i>
							<span class="text-muted mr-3">Stack</span>
							<i class="material-icons icon-16pt mr-2 text-muted">comment</i>
							<span class="text-muted"><strong>28</strong> comments</span>
						</p>
						<div class="media">
							<div class="media-left mr-2 avatar-group">

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

							</div>
							<div class="media-body">

								<a href="">+1 more</a>

							</div>
						</div>
					</div>
				</div>



				<div class="trello-board__tasks-item card shadow-none border">
					<div class="p-3">
						<p class="m-0 d-flex align-items-center">
							<strong>Add UI Alerts Page</strong> <span class="badge badge-light-gray ml-auto">OPEN</span></p>

						<p class="d-flex align-items-center mb-2">
							<i class="material-icons icon-16pt mr-2 text-muted">folder_open</i>
							<span class="text-muted mr-3">Stack</span>
							<i class="material-icons icon-16pt mr-2 text-muted">comment</i>
							<span class="text-muted"><strong>28</strong> comments</span>
						</p>
						<div class="media">
							<div class="media-left mr-2">

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

							</div>
							<div class="media-body">

							</div>
						</div>
					</div>
				</div>



			</div>
			<a href="#" class="btn btn-light btn-block mt-2">+ Add Card</a>
		</div>
	</div>
</div>
<div class="trello-board__tasks">
	<div class="card bg-light border">
		<div class="card-header card-header-sm bg-white">
			<h4 class="card-header__title">Review (1)</h4>
		</div>
		<div class="card-body p-2">
			<div class="trello-board__tasks-list card-list" id="trello-tasks-3">





				<div class="trello-board__tasks-item card shadow-none border">
					<div class="p-3">
						<p class="m-0 d-flex align-items-center">
							<strong>Add UI Modals Page</strong> <span class="badge badge-success ml-auto">RESOLVED</span></p>

						<p class="d-flex align-items-center mb-2">
							<i class="material-icons icon-16pt mr-2 text-muted">folder_open</i>
							<span class="text-muted mr-3">Stack</span>
							<i class="material-icons icon-16pt mr-2 text-muted">comment</i>
							<span class="text-muted"><strong>28</strong> comments</span>
						</p>
						<div class="media">
							<div class="media-left mr-2">

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

							</div>
							<div class="media-body">

							</div>
						</div>
					</div>
				</div>



			</div>
			<a href="#" class="btn btn-light btn-block mt-2">+ Add Card</a>
		</div>
	</div>
</div>
<div class="trello-board__tasks">
	<div class="card bg-light border">
		<div class="card-header card-header-sm bg-white">
			<h4 class="card-header__title">Done (1)</h4>
		</div>
		<div class="card-body p-2">
			<div class="trello-board__tasks-list card-list" id="trello-tasks-4">





				<div class="trello-board__tasks-item card shadow-none border">
					<div class="p-3">
						<p class="m-0 d-flex align-items-center">
							<strong>Add UI Avatars Page</strong> <span class="badge badge-warning ml-auto">NEED HELP</span></p>

						<p class="d-flex align-items-center mb-2">
							<i class="material-icons icon-16pt mr-2 text-muted">folder_open</i>
							<span class="text-muted mr-3">Stack</span>
							<i class="material-icons icon-16pt mr-2 text-muted">comment</i>
							<span class="text-muted"><strong>28</strong> comments</span>
						</p>
						<div class="media">
							<div class="media-left mr-2">

								<div class="avatar avatar-xs">
									<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
								</div>

							</div>
							<div class="media-body">

							</div>
						</div>
					</div>
				</div>



			</div>
			<a href="#" class="btn btn-light btn-block mt-2">+ Add Card</a>
		</div>
	</div>
</div>
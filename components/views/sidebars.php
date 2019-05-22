<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$themeAsset = \themes\stackadmin\assets\ThemePluginAsset::register($this);
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;
?>

<div class="mdk-drawer js-mdk-drawer" id="default-drawer" data-align="start">
	<div class="mdk-drawer__content <?php echo $this->subLayout == 'mini' ? 'js-sidebar-mini' : '';?>" <?php echo $this->subLayout == 'mini' ? 'data-responsive-width="992px"' : '';?>>
		<?php if($this->subLayout == 'mini') {?>
		<div class="sidebar sidebar-mini sidebar-primary sidebar-left simplebar" data-simplebar>
			<ul class="nav flex-column sidebar-menu mt-3" id="sidebar-mini-tabs" role="tablist">
				<li class="sidebar-menu-item" data-toggle="tooltip" data-title="Dashboards" data-placement="right" data-boundary="window">
					<a class="sidebar-menu-button" href="#sm_dashboards" data-toggle="tab" role="tab" aria-controls="sm_dashboards" aria-selected="true">
						<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
						<span class="sidebar-menu-text">Dashboard</span>
					</a>
				</li>
				<li class="sidebar-menu-item" data-toggle="tooltip" data-title="Apps" data-placement="right" data-container="body" data-boundary="window">
					<a class="sidebar-menu-button" href="#sm_apps" data-toggle="tab" role="tab" aria-controls="sm_apps" aria-selected="false">
						<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
						<span class="sidebar-menu-text">Apps</span>
					</a>
				</li>
				<li class="sidebar-menu-item " data-toggle="tooltip" data-title="Pages" data-placement="right" data-container="body" data-boundary="window">
					<a class="sidebar-menu-button" href="#sm_pages" data-toggle="tab" role="tab" aria-controls="sm_pages">
						<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
						<span class="sidebar-menu-text">Pages</span>
					</a>
				</li>
				<li class="sidebar-menu-item" data-toggle="tooltip" data-title="UI Components" data-placement="right" data-container="body" data-boundary="window">
					<a class="sidebar-menu-button" href="#sm_components" data-toggle="tab" role="tab" aria-controls="sm_components">
						<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">list</i>
						<span class="sidebar-menu-text">UI Components</span>
					</a>
				</li>
				<li class="sidebar-menu-item" data-toggle="tooltip" data-title="Layouts" data-placement="right" data-boundary="window">
					<a class="sidebar-menu-button" href="#sm_layouts" data-toggle="tab" role="tab" aria-controls="sm_layouts" aria-selected="false">
						<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
						<span class="sidebar-menu-text">Layouts</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="sidebar sidebar-light sidebar-left simplebar flex sidebar-secondary" data-simplebar>
			<div class="tab-content">
				<div class="tab-pane" id="sm_dashboards">
					<div class="sidebar-heading">Dashboards</div>
					<div class="sidebar-block p-0">
						<ul class="sidebar-menu">
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/dashboard'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Dashboard</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/staff'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">CRM/Staff</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/analytic'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">E-commerce</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="tab-pane" id="sm_apps">
					<div class="sidebar-heading">Apps</div>
					<div class="sidebar-block p-0">
						<ul class="sidebar-menu">
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-app/trello'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Trello</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-app/project'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Projects</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-app/fullcalendar'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Event Calendar</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-app/chat'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Chat</span>
								</a>
							</li>
							<li class="sidebar-menu-item ">
								<a class="sidebar-menu-button" data-toggle="collapse" href="#course_menu">
									<span class="sidebar-menu-text">Education</span>
									<span class="ml-auto d-flex align-items-center">
										<span class="badge badge-primary">NEW</span>
										<span class="sidebar-menu-toggle-icon"></span>
									</span>
								</a>
								<ul class="sidebar-submenu collapse " id="course_menu">
									<li class="sidebar-menu-item ">
										<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-app/course'], Yii::$app->request->get()));?>">
											<span class="sidebar-menu-text">Course</span>
										</a>
									</li>
									<li class="sidebar-menu-item ">
										<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-app/lesson'], Yii::$app->request->get()));?>">
											<span class="sidebar-menu-text">Lesson</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="tab-pane " id="sm_pages">
					<div class="sidebar-heading">Pages</div>
					<div class="sidebar-block p-0">
						<ul class="sidebar-menu">
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/story'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Stories</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/invoice'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Invoice</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/pricing'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Pricing</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/edit-account'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Edit Account</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/profile'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">User Profile</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/digital-product'], Yii::$app->request->get()));?>">
									<span class="sidebar-menu-text">Digital Product</span>
									<span class="badge badge-primary ml-auto">NEW</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" data-toggle="collapse" href="#login_menu">
									<span class="sidebar-menu-text">Login</span>
									<span class="ml-auto sidebar-menu-toggle-icon"></span>
								</a>
								<ul class="sidebar-submenu collapse" id="login_menu">
									<li class="sidebar-menu-item">
										<a class="sidebar-menu-button" href="<?php echo Url::to(['/stackadmin-page/login']);?>">
											<span class="sidebar-menu-text">Login / Background Image</span>
										</a>
									</li>
									<li class="sidebar-menu-item">
										<a class="sidebar-menu-button" href="<?php echo Url::to(['/stackadmin-page/login', 'type'=>'centered-boxed']);?>">
											<span class="sidebar-menu-text">Login / Centered Boxed</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" data-toggle="collapse" href="#signup_menu">
									<span class="sidebar-menu-text">Sign Up</span>
									<span class="ml-auto sidebar-menu-toggle-icon"></span>
								</a>
								<ul class="sidebar-submenu collapse" id="signup_menu">
									<li class="sidebar-menu-item">
										<a class="sidebar-menu-button" href="<?php echo Url::to(['/stackadmin-page/signup']);?>">
											<span class="sidebar-menu-text">Sign Up / Background Image</span>
										</a>
									</li>
									<li class="sidebar-menu-item">
										<a class="sidebar-menu-button" href="<?php echo Url::to(['/stackadmin-page/signup', 'type'=>'centered-boxed']);?>">
											<span class="sidebar-menu-text">Sign Up / Centered Boxed</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
						<div class="sidebar-p-a sidebar-b-y layout-mini__d-none">
							<div class="d-flex align-items-center mb-2">
								<div class="sidebar-heading m-0 p-0 flex">Progress</div>
								<div>60%</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="sm_components">
					<div class="sidebar-heading">UI Components</div>
					<div class="sidebar-block p-0">
						<ul class="sidebar-menu" id="components_menu">
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/button'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
									<span class="sidebar-menu-text">Buttons</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/alert'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
									<span class="sidebar-menu-text">Alerts</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/avatar'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
									<span class="sidebar-menu-text">Avatars</span>
									<span class="badge badge-primary ml-auto">NEW</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/modal'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
									<span class="sidebar-menu-text">Modals</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/chart'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
									<span class="sidebar-menu-text">Charts</span>
									<span class="badge badge-warning ml-auto">PRO</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/icon'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
									<span class="sidebar-menu-text">Icons</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/form'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
									<span class="sidebar-menu-text">Forms</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/range-slider'], Yii::$app->request->get()));?>">
									<!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
									<span class="sidebar-menu-text">Range Sliders</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/datetime'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
									<span class="sidebar-menu-text">Time &amp; Date</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/table'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
									<span class="sidebar-menu-text">Tables</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/loader'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
									<span class="sidebar-menu-text">Loaders</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/drag'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
									<span class="sidebar-menu-text">Drag &amp; Drop</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/pagination'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
									<span class="sidebar-menu-text">Pagination</span>
								</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-ui/vector-map'], Yii::$app->request->get()));?>">
									<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
									<span class="sidebar-menu-text">Vector Maps</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="tab-pane" id="sm_layouts">
					<div class="sidebar-heading">Layouts</div>
					<div class="sidebar-block p-0">
						<ul class="sidebar-menu">
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::current(['layout'=>'default']);?>">Default</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::current(['layout'=>'fluid']);?>">Fluid</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::current(['layout'=>'fixed']);?>">Fixed</a>
							</li>
							<li class="sidebar-menu-item">
								<a class="sidebar-menu-button" href="<?php echo Url::current(['layout'=>'mini']);?>">Mini</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<?php } else {?>
		<div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
			<?php if($isDemoTheme || !Yii::$app->user->isGuest) {?>
			<div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
				<a href="<?php echo $isDemoTheme ?
					Url::to(ArrayHelper::merge(['/stackadmin-page/profile'], Yii::$app->request->get())) :
					Url::to(['/#']);?>" class="flex d-flex align-items-center text-underline-0 text-body">
					<span class="avatar mr-3">
						<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/demi.png" alt="avatar" class="avatar-img rounded-circle">
					</span>
					<span class="flex d-flex flex-column">
						<strong><?php echo !$isDemoTheme ? (Yii::$app->user->identity->displayname ? Yii::$app->user->identity->displayname : 'Unknown') : 'Adrian D.';?></strong>
						<!-- <small class="text-muted text-uppercase">Account Manager</small> -->
					</span>
				</a>
				<div class="dropdown ml-auto">
					<a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-item-text dropdown-item-text--lh">
							<div><strong><?php echo !$isDemoTheme ? (Yii::$app->user->identity->displayname ? Yii::$app->user->identity->displayname : 'Unknown Member') : 'Adrian Demian';?></strong></div>
							<div>@<?php echo !$isDemoTheme ? (Yii::$app->user->identity->username ? Yii::$app->user->identity->username : 'u.n.k.n.o.w.n') : 'adriandemian';?></div>
						</div>
						<div class="dropdown-divider"></div>
						<?php $dashboardUrl = $isDemoTheme ?
							Url::to(ArrayHelper::merge(['/stackadmin-page/dashboard'], Yii::$app->request->get())) :
							Url::home();
						echo Html::a(Yii::t('app', 'Dashboard'), $dashboardUrl, ['class'=>'dropdown-item', 'title'=>Yii::t('app', 'Dashboard')]);?>
						<?php $profileUrl = $isDemoTheme ?
							Url::to(ArrayHelper::merge(['/stackadmin-page/profile'], Yii::$app->request->get())) :
							Url::to(['/#']);
						echo Html::a(Yii::t('app', 'My profile'), $profileUrl, ['class'=>'dropdown-item', 'title'=>Yii::t('app', 'My profile')]);?>
						<?php $accountUrl = $isDemoTheme ?
							Url::to(ArrayHelper::merge(['/stackadmin-page/edit-account'], Yii::$app->request->get())) :
							Url::to(['/#']);
						echo Html::a(Yii::t('app', 'Edit account'), $accountUrl, ['class'=>'dropdown-item', 'title'=>Yii::t('app', 'Edit account')]);?>
						<div class="dropdown-divider"></div>
						<?php echo Html::a(Yii::t('app', 'Logout'), ['/site/logout'], ['class'=>'dropdown-item', 'title'=>Yii::t('app', 'Logout')]);?>
					</div>
				</div>
			</div>
			<?php }?>

			<?php // menus
			echo \themes\stackadmin\components\SidebarMenu::widget(['menus' => $menus]);?>

			<?php if($isDemoTheme) {?>
			<div class="sidebar-block p-0">
				<div class="sidebar-p-a sidebar-b-y">
					<div class="d-flex align-items-top mb-2">
						<div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>
						<div class="font-weight-bold text-success">60%</div>
					</div>
					<div class="progress">
						<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
		<?php }?>
	</div>
</div>
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

<div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
	<div class="mdk-header__content">

		<div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark pr-0" id="navbar" data-primary>
			<div class="<?php echo $this->subLayout == 'fixed' ? 'container' : 'container-fluid p-0';?>">

				<!-- Navbar toggler -->
				<button class="navbar-toggler navbar-toggler-right d-block <?php echo in_array($this->subLayout, ['fluid','mini']) ? 'navbar-toggler-custom' : 'd-md-none';?>" type="button" data-toggle="sidebar">
					<?php if(in_array($this->subLayout, ['fluid','mini'])) {?>
					<span class="material-icons">apps</span>
					<?php } else {?>
					<span class="navbar-toggler-icon"></span>
					<?php }?>
				</button>

				<!-- Navbar Brand -->
				<a href="<?php echo Url::to(['/site/index']);?>" class="navbar-brand ">
					<img class="navbar-brand-icon" src="<?php echo $themeAsset->baseUrl;?>/images/stack-logo-white.svg" width="22" alt="<?php echo Yii::$app->name;?>">
					<span><?php echo Yii::$app->name;?></span>
				</a>

				<?php //navigation
				//echo $this->subLayout == 'mini' ? \themes\stackadmin\components\Navigation::widget() : '';

				//if($this->subLayout != 'mini') {?>
				<form class="search-form d-none d-sm-flex flex" action="">
					<button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
					<input type="text" class="form-control" placeholder="Search">
				</form>
				<?php //}?>

				<ul class="nav navbar-nav ml-auto d-none d-md-flex">
					<?php if($isDemoTheme) {?>
					<li class="nav-item">
						<a href="mailto:admin@ommu.co?subject=Hi! I have a question about Stack Admin" class="nav-link">
							<i class="material-icons">help_outline</i> Get Help
						</a>
					</li>
					<li class="nav-item mr-3">
						<a href="<?php echo Url::to(ArrayHelper::merge(['/stackadmin-page/pricing'], Yii::$app->request->get()));?>" class="btn btn-outline-warning">
							<i class="material-icons">star</i> PRO
						</a>
					</li>
					<?php }
					
					if($isDemoTheme || !Yii::$app->user->isGuest) {?>
					<li class="nav-item dropdown">
						<a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
							<i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
						</a>
						<div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
							<div class="dropdown-item d-flex align-items-center py-2">
								<span class="flex navbar-notifications-menu__title m-0">Notifications</span>
								<a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
							</div>
							<div class="navbar-notifications-menu__content" data-simplebar>
								<div class="py-2">
									<?php if($isDemoTheme) {?>
									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<div class="avatar avatar-sm" style="width: 32px; height: 32px;">
												<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="flex">
											<a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
											<small class="text-muted">1 minute ago</small>
										</div>
									</div>
									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<a href="#">
												<div class="avatar avatar-xs" style="width: 32px; height: 32px;">
													<span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
												</div>
											</a>
										</div>
										<div class="flex">
											New user <a href="#">Peter Parker</a> signed up.<br>
											<small class="text-muted">1 hour ago</small>
										</div>
									</div>
									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<a href="#">
												<div class="avatar avatar-xs" style="width: 32px; height: 32px;">
													<span class="avatar-title rounded-circle">JD</span>
												</div>
											</a>
										</div>
										<div class="flex">
											<a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
											<div>Hey, how are you? What about our next meeting</div>
											<small class="text-muted">2 minutes ago</small>
										</div>
									</div>

									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<div class="avatar avatar-sm" style="width: 32px; height: 32px;">
												<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="flex">
											<a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
											<small class="text-muted">1 minute ago</small>
										</div>
									</div>
									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<a href="#">
												<div class="avatar avatar-xs" style="width: 32px; height: 32px;">
													<span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
												</div>
											</a>
										</div>
										<div class="flex">
											New user <a href="#">Peter Parker</a> signed up.<br>
											<small class="text-muted">1 hour ago</small>
										</div>
									</div>
									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<a href="#">
												<div class="avatar avatar-xs" style="width: 32px; height: 32px;">
													<span class="avatar-title rounded-circle">JD</span>
												</div>
											</a>
										</div>
										<div class="flex">
											<a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
											<div>Hey, how are you? What about our next meeting</div>
											<small class="text-muted">2 minutes ago</small>
										</div>
									</div>

									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<div class="avatar avatar-sm" style="width: 32px; height: 32px;">
												<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
											</div>
										</div>
										<div class="flex">
											<a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
											<small class="text-muted">1 minute ago</small>
										</div>
									</div>
									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<a href="#">
												<div class="avatar avatar-xs" style="width: 32px; height: 32px;">
													<span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
												</div>
											</a>
										</div>
										<div class="flex">
											New user <a href="#">Peter Parker</a> signed up.<br>
											<small class="text-muted">1 hour ago</small>
										</div>
									</div>
									<div class="dropdown-item d-flex">
										<div class="mr-3">
											<a href="#">
												<div class="avatar avatar-xs" style="width: 32px; height: 32px;">
													<span class="avatar-title rounded-circle">JD</span>
												</div>
											</a>
										</div>
										<div class="flex">
											<a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
											<div>Hey, how are you? What about our next meeting</div>
											<small class="text-muted">2 minutes ago</small>
										</div>
									</div>
									<?php }?>
								</div>
							</div>
							<?php if($isDemoTheme) {?>
							<a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
							<?php }?>
						</div>
					</li>
					<?php }?>
				</ul>

				<?php if($isDemoTheme || !Yii::$app->user->isGuest) {?>
				<ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
					<li class="nav-item dropdown">
						<a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
							<img src="<?php echo $themeAsset->baseUrl;?>/demo/images/demi.png" class="rounded-circle" width="32" alt="Frontted">
							<span class="ml-1 d-flex-inline">
								<span class="text-light"><?php echo !$isDemoTheme ? (Yii::$app->user->identity->displayname ? Yii::$app->user->identity->displayname : 'Unknown') : 'Adrian D.';?></span>
							</span>
						</a>
						<div id="account_menu" class="dropdown-menu dropdown-menu-right">
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
							<?php if(!$isDemoTheme) {
							echo Html::a(Yii::t('app', 'Settings'), ['/setting/update'], ['class'=>'dropdown-item', 'title'=>Yii::t('app', 'Settings')]);?>
							<div class="dropdown-divider"></div>
							<?php }?>
							<?php echo Html::a(Yii::t('app', 'Logout'), ['/site/logout'], ['class'=>'dropdown-item', 'title'=>Yii::t('app', 'Logout')]);?>
						</div>
					</li>
				</ul>
				<?php }?>

			</div>
		</div>

	</div>
</div>
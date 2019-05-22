<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;

$themeAsset = \themes\stackadmin\assets\ThemeAsset::register($this);
$type = Yii::$app->request->get('type');
$dir = Yii::$app->request->get('dir') ? Yii::$app->request->get('dir') : 'ltr';

$this->beginPage();?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>" dir="<?php echo $dir;?>">
<head>
	<meta charset="<?php echo Yii::$app->charset ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php echo Html::csrfMetaTags() ?>
	<title><?php echo Html::encode($this->pageTitle) ?></title>
	<?php $this->head(); ?>
</head>

<body class="<?php echo !$type ? 'layout-login' : 'layout-login-centered-boxed';?>">
<?php $this->beginBody();

if(!$type) {?>
	<div class="layout-login__overlay"></div>
	<div class="layout-login__form bg-white" data-simplebar>
		<div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
			<a href="<?php echo Url::home();?>" class="navbar-brand" style="min-width: 0">
				<img class="navbar-brand-icon" src="<?php echo $themeAsset->baseUrl;?>/images/stack-logo-blue.svg" width="25" alt="<?php echo Yii::$app->name;?>">
				<span><?php echo Yii::$app->name;?></span>
			</a>
		</div>

		<h4 class="m-0"><?php echo $this->title;?></h4>
		<?php echo $this->description ? '<p class="mb-5">'.$this->description.'</p>' : '';?>

		<?php echo $content; ?>
	</div>

<?php } else {?>
	<div class="layout-login-centered-boxed__form card">
		<div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
			<a href="<?php echo Url::home();?>" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
				<img class="navbar-brand-icon mr-0 mb-2" src="<?php echo $themeAsset->baseUrl;?>/images/stack-logo-blue.svg" width="25" alt="<?php echo Yii::$app->name;?>">
				<span><?php echo Yii::$app->name;?></span>
			</a>
			<?php echo $this->description ? '<p class="m-0">'.$this->description.'</p>' : '';?>
		</div>

		<!-- <div class="alert alert-soft-success d-flex" role="alert">
			<i class="material-icons mr-3">check_circle</i>
			<div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
		</div> -->

		<a href="#" class="btn btn-light btn-block">
			<span class="fab fa-google mr-2"></span>
			Continue with Google
		</a>

		<div class="page-separator">
			<div class="page-separator__text">or</div>
		</div>

		<?php echo $content; ?>
	</div>
<?php }

$this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>

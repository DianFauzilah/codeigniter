<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
use themes\stackadmin\assets\ThemePluginAsset;

$themeAsset = ThemePluginAsset::register($this);
$dir = Yii::$app->request->get('dir') ? Yii::$app->request->get('dir') : 'ltr';
if($this->subLayout == 'mini') {
	$this->registerJsFile($themeAsset->baseUrl . '/js/sidebar-mini.js', ['depends' => [ThemePluginAsset::className()]]);
	$this->registerJsFile($themeAsset->baseUrl . '/js/custom-layout-mini.js', ['depends' => [ThemePluginAsset::className()]]);
}
$isDemoTheme = Yii::$app->isDemoTheme() ? true : false;

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
	<script type="text/javascript">
		var themeAssetUrl = '<?php echo $themeAsset->baseUrl ?>';
	</script>
</head>

<body class="<?php echo $this->subLayout == 'fluid' ? 'layout-fluid layout-sticky-subnav' : ($this->subLayout == 'fixed' ? 'layout-fixed' : ($this->subLayout == 'mini' ? 'layout-mini' : 'layout-fluid'));?> app-chat">
<?php $this->beginBody();?>

<div class="preloader"></div>

<div class="mdk-header-layout js-mdk-header-layout">
	<?php //header menu
	echo \themes\stackadmin\components\Header::widget();?>

<?php if(!$this->subLayout || in_array($this->subLayout, ['default','mini'])) {?>
	<div class="mdk-header-layout__content">
		<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
<?php }?>
			<?php //begin.header content ?>
			<div class="<?php echo in_array($this->subLayout, ['fluid','fixed']) ? 'mdk-header-layout__content' : 'mdk-drawer-layout__content';?> page">
				<?php //navigation
				echo in_array($this->subLayout, ['fluid','fixed']) ? \themes\stackadmin\components\Navigation::widget() : ''; ?>

				<div class="app-chat-container">
					<div class="row h-100 m-0">
						<?php echo $content; ?>
					</div>
				</div>
			</div>
			<?php //end.header content ?>

			<?php //begin.drawermenu
			echo !$this->subLayout || in_array($this->subLayout, ['default','mini']) ? \themes\stackadmin\components\Sidebars::widget() : ''; ?>
<?php if(!$this->subLayout || in_array($this->subLayout, ['default','mini'])) {?>
		</div>
	</div>
<?php }?>
</div>

<?php //begin.drawermenu
echo in_array($this->subLayout, ['fluid','fixed']) ? \themes\stackadmin\components\Sidebars::widget() : ''; ?>

<?php if($isDemoTheme) {?>
<div id="app-settings">
	<app layout-active="default" :layout-location="{
		'default': '<?php echo Url::current(['layout'=>'default']);?>',
		'fluid': '<?php echo Url::current(['layout'=>'fluid']);?>',
		'fixed': '<?php echo Url::current(['layout'=>'fixed']);?>',
		'mini': '<?php echo Url::current(['layout'=>'mini']);?>'
	}"></app>
</div>
<?php }?>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>

<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
?>

<?php if($this->subLayout != 'mini') {
//heading (breadcrumb and title)
if($this->titleShow)
	echo $this->subLayout == 'fluid' ? \themes\stackadmin\components\Heading::widget() : '';?>

<div class="page__header <?php echo $this->subLayout == 'fluid' ? 'page__header-nav' : 'mb-0';?>">
	<div class="<?php echo $this->subLayout == 'fixed' ? 'container' : 'container-fluid';?> page__container">
		<div class="navbar navbar-secondary navbar-light navbar-expand-sm p-0">
			<button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarsExample03" type="button">
				<span class="navbar-toggler-icon"></span>
			</button>
<?php }?>
			<div class="navbar-collapse collapse" id="navbarsExample03">
				<?php echo \themes\stackadmin\components\Menu::widget([
					'options' => ['class'=>'nav navbar-nav'],
					'itemOptions' => ['class'=>'nav-item dropdown'],
					'linkTemplate' => '<a class="dropdown-item" href="{url}">{label}</a>',
					'submenuTemplate' => '<div class="dropdown-menu">{items}</div>',
					'items' => $this->context->menus,
				]); ?>
			</div>
<?php if($this->subLayout != 'mini') {?>
		</div>
	</div>
</div>
<?php }?>
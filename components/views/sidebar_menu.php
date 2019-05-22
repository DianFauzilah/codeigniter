<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
?>

<div class="sidebar-heading sidebar-m-t">Menu</div>
<?php echo \themes\stackadmin\components\Menu::widget([
	'isNavigation' => false,
	'items' => $this->context->menus,
]); ?>
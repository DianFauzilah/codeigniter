<?php
/**
 * GridView for Stackadmin Themes
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 4 May 2019, 12:24 WIB
 * @link https://github.com/ommu/theme-stackadmin
 */

namespace themes\stackadmin\components\grid;

use Yii;
use yii\helpers\Html;
use app\components\Application;

class GridView extends \yii\grid\GridView
{
	/**
	 * {@inheritdoc}
	 */
	public $tableOptions = ['class' => 'table mb-0 thead-border-top-0'];

	/**
	 * {@inheritdoc}
	 */
	public $layout = '<div class="table-responsive border-bottom">{items}</div>{summary}{pager}';

	/**
	 * {@inheritdoc}
	 */
	public $pager = [
		'linkOptions' => [
			'class' => 'page-link',
		],
		'pageCssClass' => 'page-item',
		'firstPageCssClass' => 'first page-item',
		'lastPageCssClass' => 'last page-item',
		'prevPageCssClass' => 'prev page-item',
		'nextPageCssClass' => 'next page-item',
		'disabledListItemSubTagOptions' => [
			'tag' => 'a',
			'class' => 'page-link',
		],
		'prevPageLabel' => '<span class="material-icons">chevron_left</span>',
		'nextPageLabel' => '<span class="material-icons">chevron_right</span>',
	];

	/**
	 * {@inheritdoc}
	 */
	public function renderPager()
	{
		if($this->view->pagination != 'default')
			return Html::tag('div', parent::renderPager(), ['class'=>'pagination-'.$this->view->pagination]);

		return parent::renderPager();
	}
}

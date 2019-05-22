<?php
/**
 * UiController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Index
 *	Alert
 *	Avatar
 *	Button
 *	Chart
 *	Datetime
 *	Drag
 *	Form
 *	Icon
 *	Loader
 *	Modal
 *	Pagination
 *	RangeSlider
 *	Table
 *	VectorMap
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 15 February 2019, 16:06 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

namespace themes\stackadmin\controllers;

use Yii;
use app\components\Controller;

class UiController extends Controller
{
	public static $backoffice = false;

	/**
	 * {@inheritdoc}
	 */
	public function init() 
	{
		parent::init();

		$this->view->theme('stackadmin');
		$this->layout = 'admin_default';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getViewPath()
	{
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'ui';
	}

	/**
	 * Index Action
	 */
	public function actionIndex()
	{
		return $this->redirect(['alert']);
	}

	/**
	 * Alert Action
	 */
	public function actionAlert()
	{
		$this->view->title = Yii::t('app', 'Alerts');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('alert');
	}

	/**
	 * Avatar Action
	 */
	public function actionAvatar()
	{
		$this->view->title = Yii::t('app', 'Avatars');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('avatar');
	}

	/**
	 * Button Action
	 */
	public function actionButton()
	{
		$this->view->title = Yii::t('app', 'Buttons');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('button');
	}

	/**
	 * Chart Action
	 */
	public function actionChart()
	{
		$this->view->title = Yii::t('app', 'Charts');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('chart');
	}

	/**
	 * Datetime Action
	 */
	public function actionDatetime()
	{
		$this->view->title = Yii::t('app', 'Time & Date');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('datetime');
	}

	/**
	 * Drag Action
	 */
	public function actionDrag()
	{
		$this->view->title = Yii::t('app', 'Drag & Drop');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('drag');
	}

	/**
	 * Form Action
	 */
	public function actionForm()
	{
		$this->view->title = Yii::t('app', 'Forms');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('form');
	}

	/**
	 * Icon Action
	 */
	public function actionIcon()
	{
		$this->view->title = Yii::t('app', 'Icons');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('icon');
	}

	/**
	 * Loader Action
	 */
	public function actionLoader()
	{
		$this->view->title = Yii::t('app', 'Loaders');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('loader');
	}

	/**
	 * Modal Action
	 */
	public function actionModal()
	{
		$this->view->title = Yii::t('app', 'Modals');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('modal');
	}

	/**
	 * Pagination Action
	 */
	public function actionPagination()
	{
		$this->view->title = Yii::t('app', 'Paginations');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('pagination');
	}

	/**
	 * RangeSlider Action
	 */
	public function actionRangeSlider()
	{
		$this->view->title = Yii::t('app', 'Range Sliders');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('range_slider');
	}

	/**
	 * Table Action
	 */
	public function actionTable()
	{
		$this->view->title = Yii::t('app', 'Tables');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('table');
	}

	/**
	 * VectorMap Action
	 */
	public function actionVectorMap()
	{
		$this->view->title = Yii::t('app', 'Vector Maps');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('vector_map');
	}

}

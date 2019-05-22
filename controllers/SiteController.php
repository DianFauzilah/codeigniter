<?php
/**
 * SiteController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 20 February 2019, 15:35 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

namespace themes\stackadmin\controllers;

use Yii;
use app\components\Controller;

class SiteController extends Controller
{
	public static $backoffice = false;

	/**
	 * {@inheritdoc}
	 */
	public function init() 
	{
		parent::init();

		$this->view->theme('stackadmin');
		$this->layout = 'maindemo';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getViewPath()
	{
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'site';
	}

	/**
	 * Index Action
	 */
	public function actionIndex()
	{
		$this->view->title = Yii::t('app', 'Stack');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('index');
	}

}

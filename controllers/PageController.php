<?php
/**
 * PageController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Dashboard
 *	Staff
 *	Analytic
 *	DigitalProduct
 *	EditAccount
 *	Invoice
 *	Login
 *	Pricing
 *	Profile
 *	Signup
 *	Story
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 17 February 2019, 13:51 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

namespace themes\stackadmin\controllers;

use Yii;
use app\components\Controller;

class PageController extends Controller
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
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'page';
	}

	/**
	 * Dashboard Action
	 */
	public function actionDashboard()
	{
		$this->view->title = Yii::t('app', 'Dashboard');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('dashboard');
	}

	/**
	 * Staff Action
	 */
	public function actionStaff()
	{
		$this->view->title = Yii::t('app', 'Staff');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('staff');
	}

	/**
	 * Analytic Action
	 */
	public function actionAnalytic()
	{
		$this->view->title = Yii::t('app', 'Analytics');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('analytic');
	}

	/**
	 * DigitalProduct Action
	 */
	public function actionDigitalProduct()
	{
		$this->view->title = Yii::t('app', 'Digital Products');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('digital_product');
	}

	/**
	 * EditAccount Action
	 */
	public function actionEditAccount()
	{
		$this->view->title = Yii::t('app', 'Edit Accounts');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('edit_account');
	}

	/**
	 * Invoice Action
	 */
	public function actionInvoice()
	{
		$this->view->title = Yii::t('app', 'Invoices');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('invoice');
	}

	/**
	 * Login Action
	 */
	public function actionLogin()
	{
		$this->layout = 'login';
		$this->view->title = Yii::t('app', 'Welcome back!');
		$this->view->description = Yii::t('app', 'Login to access your {app-name} Account', ['app-name'=>Yii::$app->name]);
		$this->view->keywords = '';
		return $this->render('login');
	}

	/**
	 * Pricing Action
	 */
	public function actionPricing()
	{
		$this->view->title = Yii::t('app', 'Pricings');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('pricing');
	}

	/**
	 * Profile Action
	 */
	public function actionProfile()
	{
		$this->layout = 'profile';
		$this->view->title = Yii::t('app', 'Profiles');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('profile');
	}

	/**
	 * Signup Action
	 */
	public function actionSignup()
	{
		$this->layout = 'login';
		$this->view->title = Yii::t('app', 'Sign up!');
		$this->view->description = Yii::t('app', 'Create an account with {app-name}', ['app-name'=>Yii::$app->name]);
		$this->view->keywords = '';
		return $this->render('signup');
	}

	/**
	 * Story Action
	 */
	public function actionStory()
	{
		$this->view->title = Yii::t('app', 'Stories');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('story');
	}
}

<?php
/**
 * AppController
 * @var $this app\components\View
 *
 * Reference start
 * TOC :
 *	Chat
 *	Course
 *	Fullcalendar
 *	Lesson
 *	Project
 *	Trello
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 17 February 2019, 20:54 WIB
 * @link https://github.com/ommu/theme-stackadmin
 *
 */

namespace themes\stackadmin\controllers;

use Yii;
use app\components\Controller;

class AppController extends Controller
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
		return $this->view->theme->getBasePath() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'app';
	}

	/**
	 * Trello Action
	 */
	public function actionTrello()
	{
		$this->layout = 'trello';
		$this->view->title = Yii::t('app', 'Trello');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('trello');
	}

	/**
	 * Project Action
	 */
	public function actionProject()
	{
		$this->view->title = Yii::t('app', 'Projects');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('project');
	}

	/**
	 * Chat Action
	 */
	public function actionChat()
	{
		$this->layout = 'chat';
		$this->view->title = Yii::t('app', 'Chats');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('chat');
	}

	/**
	 * Fullcalendar Action
	 */
	public function actionFullcalendar()
	{
		$this->view->title = Yii::t('app', 'Fullcalendars');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('fullcalendar');
	}

	/**
	 * Course Action
	 */
	public function actionCourse()
	{
		$this->layout = 'default';
		$this->view->title = Yii::t('app', 'Courses');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('course');
	}

	/**
	 * Lesson Action
	 */
	public function actionLesson()
	{
		$this->layout = 'default';
		$this->view->title = Yii::t('app', 'Lessons');
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('lesson');
	}
}

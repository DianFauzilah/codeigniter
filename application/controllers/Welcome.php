<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/overview");
		$this->load->view("admin/partials/footer");
	}
	public function staff()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/staff");
		$this->load->view("admin/partials/footer");
	}
	public function analytics()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/analytics");
		$this->load->view("admin/partials/footer");
	}
	public function trello()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/trello");
		$this->load->view("admin/partials/footer");
	}
	public function project()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/project");
		$this->load->view("admin/partials/footer");
	}
	public function calendar()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/calendar");
		$this->load->view("admin/partials/footer");
	}
	public function chat()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/chat");
		$this->load->view("admin/partials/footer");
	}
	public function course()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/course");
		$this->load->view("admin/partials/footer");
	}
	public function lesson()
	{
		$this->load->view("admin/partials/header");
		$this->load->view("admin/lesson");
		$this->load->view("admin/partials/footer");
	}
}

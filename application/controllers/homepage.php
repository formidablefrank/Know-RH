<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('quiz');
		$this->load->model('schedules');
	}

	public function index(){
		$data['title'] = 'Know-RH';
		$this->load->view('templates/header', $data);
		$this->load->view('home_view', $data);
		$this->load->view('templates/footer', $data);
	}

	public function start(){
		$this->session->set_userdata('question_data', array());
        $this->session->set_userdata('easy_correct', 0);
        $this->session->set_userdata('summation', $this->quiz->getSummation());
        $this->session->set_userdata('medium_correct', 0);
        $this->session->set_userdata('hard_correct', 0);
        $this->session->set_userdata('total_points', 0);
        $this->session->set_userdata('user_answers', '');
        $this->session->set_userdata('random_id', 1);
        $this->session->set_userdata('total_questions', 0);

		$this->quiz->getRandomQuestion();
		$data['question'] = $this->session->userdata('question_data');
		$data['title'] = 'Know-RH | Start Quiz';
		$data['isCorrect'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('quiz_view', $data);
		$this->load->view('templates/footer', $data);
	}

	public function submit($question_id, $answer_letter){
		$data['isCorrect'] = $this->quiz->getUserAnswer($answer_letter);
		$this->quiz->getRandomQuestion();
		$data['title'] = 'Know-RH | Start Quiz';
		$data['question'] = $this->session->userdata('question_data');
		$this->load->view('templates/header', $data);
		$this->load->view('quiz_view', $data);
		$this->load->view('templates/footer', $data);
	}

	public function results($user_name, $lat, $lon){
		$this->quiz->destruct($user_name, $lat, $lon);
		$data['title'] = 'Know-RH | Result';
		$this->load->view('templates/header', $data);
		$this->load->view('results_view', $data);
		$this->load->view('templates/footer', $data);
	}

	public function donate(){
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}

	public function map(){
		$data['table'] = $this->quiz->getLiteracyArray();
		$data['title'] = 'Know-RH | Literacy Map';
		$this->load->view('map', $data);
	}

	public function viewsched(){
		$data['title'] = 'KnowRH | Training Schedules';
		$data['schedules'] = $this->schedules->getAllSchedules();
		$this->load->view('viewsched', $data);
	}

	public function deleteSched($id){
		$this->schedules->deleteSchedule($id);
		$data['title'] = 'KnowRH | Training Schedules';
		$data['schedules'] = $this->schedules->getAllSchedules();
		redirect('/homepage/viewsched', 'refresh');
	}

	public function newSched(){
		$data['title'] = 'KnowRH | Create New Schedule';
		$this->load->view('newsched', $data);
	}

	public function insertSched(){
		$data['title'] = 'KnowRH | Create New Schedule';
		$this->load->view('newsched', $data);
		redirect('/homepage/viewsched', 'refresh');
	}
}
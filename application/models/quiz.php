<?php

class Quiz extends CI_model{

    function __construct(){
        parent::__construct();
        $query = $this->db->get('questions');
        $this->session->set_userdata('total_questions', $query->num_rows());
        $query->free_result();
        $random_id = 1;
    }

    function getLiteracyArray(){
        $query = $this->db->get('users');
        $table = array();
        foreach ($query->result() as $row) {
            $row->total_correct /= $this->session->userdata('total_questions') / 100;
            $table[] =  $row;
        }
        $query->free_result();
        return $table;
    }

    function destruct($user_name = 'user', $user_lat, $user_lon){
        $user_data = array(
            'user_name' => $user_name,
            'user_lat' => $user_lat,
            'user_lon' => $user_lon,
            'easy_correct' => $this->session->userdata('easy_correct'),
            'medium_correct' => $this->session->userdata('medium_correct'),
            'hard_correct' => $this->session->userdata('hard_correct'),
            'total_correct' => $this->session->userdata('total_correct'),
            'total_points' => $this->session->userdata('total_points'),
            );
        $this->db->insert('users', $user_data);
    }

    function getRandomQuestion(){
        $random_id = rand(1, $this->session->userdata('total_questions'));
        $query = $this->db->get_where('questions', array('question_id' => $random_id), 1);
        $this->session->set_userdata('question_data', $query->row_array());
        $query->free_result();
    }

    function getUserAnswer($answer_letter){
        $easy_cost = 5;
        $medium_cost = 10;
        $hard_cost = 15;
        $this->session->set_userdata('user_answers', $this->session->userdata('user_answers') . $this->session->userdata('random_id') . "," . $answer_letter . ";");
        if ($answer_letter === $this->session->userdata('question_data')['question_answer']){
            switch ($this->session->userdata('question_data')['difficulty']) {
                case 1:
                    $this->session->set_userdata('easy_correct', $this->session->userdata('easy_correct') + 1);
                    break;
                case 2:
                    $this->session->set_userdata('medium_correct', $this->session->userdata('medium_correct') + 1);
                    break;
                case 3:
                    $this->session->set_userdata('hard_correct', $this->session->userdata('hard_correct') + 1);
                    break;
            }
            $this->session->set_userdata('total_points', $this->session->userdata('easy_correct') * $easy_cost + $this->session->userdata('medium_correct') * $medium_cost + $this->session->userdata('hard_correct') * $hard_cost);
            return true;
        }
        else {
            return false;
        }
    }

    function getSummation(){
        $this->db->select_sum('total_points');
        $query = $this->db->get('users');
        return $query->row_array()['total_points'];
    }
}

?>
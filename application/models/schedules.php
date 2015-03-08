<?php

class Schedules extends CI_model{

    function __construct(){
        parent::__construct();
    }

    function getAllSchedules(){
        $query = $this->db->get_where('schedules', array('active' => 1));
        $table = array();
        foreach ($query->result() as $row) {
            $table[] =  $row;
        }
        $query->free_result();
        return $table;
    }

    function getSchedule($id){
        $query = $this->db->get_where('schedules', array('id' => $id));
        $row = $query->result()[0];
        $query->free_result();
        return $row;
    }

    function insertSchedule($title, $desc, $venue, $venue_address, $target, $req, $start, $end){
        $data = array('title' => $title,
            'description' => $desc,
            'venue_name' => $venue,
            'venue_address' => $venue_address,
            'target' => $venue,
            'requirements' => $req,
            'start_date' => $start,
            'end_date' => $end);

        return $this->db->insert('schedules', $data);
    }

    function deleteSchedule($id){
        $data = array('active' => 0);
        $this->db->where('id', $id);
        return $this->db->update('schedules', $data);
    }
}

?>
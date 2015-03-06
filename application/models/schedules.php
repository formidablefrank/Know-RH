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

    function insertSchedule($title, $desc, $venue, $venue_address, $target, $req, $start, $end){
        $data = array('title' => $title,
            'description' => $desc,
            'venue' => $venue,
            'venue_address' => $venue_address,
            'target' => $venue,
            'requirements' => $req,
            'start_date' => $start,
            'end' => $end);

        $this->db->insert('mytable', $data);
    }

    function deleteSchedule($id){
        $data = array('active' => 0);
        $this->db->where('id', $id);
        $this->db->update('schedules', $data);
        return true;
    }
}

?>
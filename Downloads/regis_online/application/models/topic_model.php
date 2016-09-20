<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of topic_model
 *
 * @author sittipongm
 */
class topic_model extends CI_Model {

    //put your code here
    public $topic;
    public $detail;
    public $datetime_update;
    public $start_date;
    public $end_date;

    public function __construct() {
        parent::__construct();
    }

    public function insertTopic() {
        $this->topic = $_POST['topic']; // please read the below note
        $this->detail = $_POST['detail'];
        $this->datetime_update = date('Y-m-d H:i:s');
        $this->start_date = $_POST['start_date'];
        $this->end_date = $_POST['end_date'];

        $this->db->insert('topic', $this);
    }

    public function updateTopic($where = null) {
        $this->topic = $_POST['topic']; // please read the below note
        $this->detail = $_POST['detail'];
        $this->datetime_update = date('Y-m-d H:i:s');
        $this->start_date = $_POST['start_date'];
        $this->end_date = $_POST['end_date'];

        $this->db->update('topic', $this, $where);
    }

    public function getTopic($param = null) {
        $this->db->select('topic.*,COUNT(member.id) as nummember');
        $this->db->from('topic');
        $this->db->join('member', 'member.topic_id = topic.id', 'left');
        $this->db->where($param);
        $query = $this->db->group_by('topic.id');
        return $query->get();
    }

    public function member_list($where = nUll) {
        $this->db->select('member.*,attendance.attendance as attendance_name,profession.profession as profession_name');
        $this->db->from('member');
        $this->db->join('attendance', 'attendance.id = member.attendance', 'left');
        $this->db->join('profession', 'profession.id = member.profession', 'left');
        $query =  $this->db->where($where);
        return $query->get();
    }

}

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
class registration_model extends CI_Model {

    //put your code here
    public $name;
    public $lname;
    public $prename;
    public $work;
    public $department;
    public $profession;
    public $attendance;
    public $payment;
    public $licenses;
    public $hotname;
    public $idx;
    public $datetime;
    public $topic_id;
    public function __construct() {
        parent::__construct();
    }

    public function insertMember() {
        $this->name = $_POST['name']; // please read the below note
        $this->lname = $_POST['lname'];
        $this->prename = $_POST['prename'];
        $this->work = $_POST['work'];
        $this->department = $_POST['department']; // please read the below note
        $this->profession = $_POST['profession'];
        $this->attendance = $_POST['attendance'];
        $this->payment = $_POST['payment'];
        $this->licenses = $_POST['licenses'];
        $this->hotname = $_POST['hotname'];
        $this->idx = $_POST['idx'];
        $this->datetime = date('Y-m-d H:i:s');
        $this->topic_id = $_POST['topic_id'];
        $this->db->insert('member', $this);
    }

    public function insert() {
        
    }

    public function getTopic($param = null) {
        $query = $this->db->get_where('topic', $param);
        return $query->result();
    }

}

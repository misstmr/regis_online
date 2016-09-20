<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Regis_online
 *
 * @author Dell
 */
class Regis_online extends MY_Controller {

    public $dt;

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('topic_model', 'topic');
        $this->load->model('profession_model', 'p');
        $this->load->model('attendance_model', 'a');
        $this->load->model('registration_model', 'r');
    }

    public function viewlogin() {
        $this->load->view('login');
    }

    public function login() {

        if ($_POST['Username'] == 'admin' && $_POST['Password'] == 'adminHA') {
            echo '<script>alert("Hello! Wellcome Admin");</script>';
            redirect('regis_online/topic');
        } else {
            echo '<script>alert("Please Login unsuccessful!");</script>';
            redirect('regis_online/viewlogin');
        }
    }

    public function index() {
        $data['topic'] = $this->topic->getTopic("topic.id is not null")->result();
        $data['page'] = 'member_page';
        $this->load->view('regis/masterpage', $data);
    }

    public function topic($param = null) {

        $data['topic'] = $this->topic->getTopic("topic.id is not null")->result();
        $data['page'] = 'regis_page';
        $data['status'] = 'insert';
        $this->load->view('regis/masterpage_1', $data);
    }

    public function member_list($topic_id = null) {

        $data['topic'] = $this->topic->getTopic("topic.id=" . $topic_id)->result();
        $data['page'] = 'member_list';
         $data['member'] = $this->topic->member_list("topic_id=".$topic_id)->result();
        $data['slide'] = TRUE;
        //  $data['status'] = 'insert';
        $this->load->view('regis/masterpage', $data);
    }

    public function editTopic($param = null) {

        $data['edit'] = $this->topic->getTopic("topic.id=" . $param)->row();
        $data['topic'] = $this->topic->getTopic("topic.id is not null")->result();
        $data['page'] = 'regis_page';
        $data['status'] = 'edit';
        $this->load->view('regis/masterpage_1', $data);
    }

    public function insertTopic() {
        $this->topic->insertTopic();
        redirect("Regis_online/topic");
    }

    public function updateTopic($id = null) {
        $this->topic->updateTopic('id=' . $id);
        redirect("regis_online/topic");
    }

    public function test() {

        $this->load->view('regis/test');
    }

    public function regis_from($param = null) {
        $data['topic'] = $this->topic->getTopic("topic.id=" . $param)->row();
        $data['p'] = $this->p->getDATA('id is not null');
        $data['a'] = $this->a->getDATA('id is not null');
        //  $data['page'] = 'member_regis_page';
        // $data['page'] = 'member_regis_page';
        $this->load->view('regis/member_regis_page', $data);
    }

    public function insertRegistration() {
        $this->r->insertMember();
        // $this->r->insertRegistration();
        redirect("Regis_online/index");
    }

    public function view_member($param=null) {
        $data['topic'] = $this->topic->getTopic("topic.id is not null")->result();
     //  $data['member'] = $this->topic->member_list("topic_id=".$topic_id)->result();
        $data['page'] = 'memberlist_page';
        $this->load->view('regis/masterpage_1', $data);
    }
     public function view_memberlist($param=null) {
        $data['topic'] = $this->topic->getTopic("topic.id=". $param)->row();
        $data['member'] = $this->topic->member_list("topic_id=".$param)->result();
        $data['page'] = 'usermemberlist_page';
        $this->load->view('regis/masterpage_1', $data);
    }

}

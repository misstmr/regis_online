<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profession_model
 *
 * @author sittipongm
 */
class profession_model extends CI_Model {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getDATA($param = null) {
        $query = $this->db->get_where('profession', $param);
        return $query->result();
    }
}

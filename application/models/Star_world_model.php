<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Star_world_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);
        $this->tableName                        =   'star_world';
    }

    public function get_posts()
    {
        $this->db->select('*');
        $result = $this->db->get($this->tableName)->row_array();
        return $result;
    }

}
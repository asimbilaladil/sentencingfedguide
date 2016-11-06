<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class ReportModel extends CI_Model {

    private $tableName = 'dynamicForms';

    function __construct() {
        parent::__construct();
    }


    public function getFormById($id) {
    
        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->where('id', $id);
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;  
              
    }
}
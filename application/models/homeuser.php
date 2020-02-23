<?php

    class Homeuser extends CI_Model {


    public function getusre(){
        $this->load->database();
        $q = $this->db->query(*SELECT * FROM user*);
        
        return $q->$result_arry();


        
        
    }
  }


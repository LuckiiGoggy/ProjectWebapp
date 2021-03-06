<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends MY_Model
{
    public function __construct()
    {
        parent::__construct('users', 'user_id');
    }
    
    /** Searches the table by username **/
    /** Returns NULL on no user found **/
    public function get_by_username($username)
    {
        $this->db->where('username',$username);       
         $query = $this->db->get($this->_tableName);
         if(count($query->result()) == 0)
         {
            return NULL;
         }else
         {
            return $query->result()[0];
         }
    }
}


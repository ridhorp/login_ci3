<?php
class M_auth extends CI_Model
{
    private $_table = "user";

    public function insert_user($data)
    {
        return $this->db->insert($this->_table, $data);
    }
}

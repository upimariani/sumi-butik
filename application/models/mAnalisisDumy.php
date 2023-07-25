<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisisDumy extends CI_Model
{
    public function data_dumy()
    {
        $this->db->select('*');
        $this->db->from('data_dummy');
        return $this->db->get()->result();
    }
}

/* End of file mAnalisisDumy.php */

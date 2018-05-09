<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactModel extends CI_Model
{
    /**
     * Submit contact us message.
     * @param $data
     */
    public function insertMessage($data)
    {
        return $this->db->insert('contacts', $data);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 02/09/17
 * Time: 17:55
 */

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
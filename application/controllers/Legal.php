<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 02/09/17
 * Time: 17:47
 */

class Legal extends CI_Controller
{
    public function terms()
    {
        $this->load->view('template/layout', [
            'title' => 'Terms of Service',
            'page' => 'legal/terms'
        ]);
    }

    public function privacy()
    {
        $this->load->view('template/layout', [
            'title' => 'Privacy',
            'page' => 'legal/privacy'
        ]);
    }
}
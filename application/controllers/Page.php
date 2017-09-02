<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 02/09/17
 * Time: 17:46
 */

class Page extends CI_Controller
{
    /**
     * Show index page
     */
    public function index()
    {
        $this->load->view('template/layout', [
            'title' => 'Hierarchical Model View Controller',
            'page' => 'page/index'
        ]);
    }

    /**
     * Show about page
     */
    public function about()
    {
        $this->load->view('template/layout', [
            'title' => 'About Us',
            'page' => 'page/about'
        ]);
    }

    /**
     * Show help page
     */
    public function help()
    {
        $this->load->view('template/layout', [
            'title' => 'Help',
            'page' => 'page/help'
        ]);
    }

    /**
     * Show contact page
     */
    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->load->model('ContactModel', 'contact');
            $message = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message'),
            ];
            if ($this->contact->insertMessage($message)) {
                $this->session->set_flashdata('message', 'Submit message success!');
            } else {
                $this->session->set_flashdata('message', 'Submit data failed!');
            }
            redirect('page/contact');
        } else {
            $this->load->view('template/layout', [
                'title' => 'Contact Us',
                'page' => 'page/contact'
            ]);
        }
    }

}
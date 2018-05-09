<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author_data extends MX_Controller
{
    /**
     * Author constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show table author data.
     */
    public function fetch()
    {
        $this->load->model('Author_model', 'author');
        $this->load->view('index', [
            'title' => 'Authors',
            'authors' => $this->author->getAllAuthors()
        ]);
    }
}
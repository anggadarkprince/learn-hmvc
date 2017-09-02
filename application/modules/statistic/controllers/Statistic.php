<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistic extends MX_Controller
{
    /**
     * Statistic constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show partial view from result of another modules.
     */
    public function index()
    {
        $this->load->view('template/layout', [
            'title' => 'Statistic',
            'page' => 'index',
        ]);
    }

    /**
     * Show article list from another modules.
     */
    public function article()
    {
        $this->load->module('article');
        $this->article->index();
    }

    /**
     * Show author list from another modules.
     */
    public function author()
    {
        $this->load->module('author');
        $this->author->index();
    }
}
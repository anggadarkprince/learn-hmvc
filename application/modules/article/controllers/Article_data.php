<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_data extends MX_Controller
{
    /**
     * Article constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show table article data.
     */
    public function fetch()
    {
        $this->load->model('Article_model', 'article');
        $this->load->view('index', [
            'title' => 'Articles',
            'articles' => $this->article->getAllArticles()
        ]);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MX_Controller
{
    /**
     * Show index article data.
     */
    public function index()
    {
        $this->load->model('Article_model', 'article');
        $this->load->view('template/layout', [
            'title' => 'Articles',
            'page' => 'index',
            'articles' => $this->article->getAllArticles()
        ]);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller
{
    /**
     * Show index article data.
     */
    public function index()
    {
        $this->load->model('ArticleModel', 'article');
        $this->load->view('template/layout', [
            'title' => 'Articles',
            'page' => 'index',
            'articles' => $this->article->getAllArticles()
        ]);
    }
}
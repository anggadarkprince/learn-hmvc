<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MX_Controller
{
    /**
     * Article constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model', 'article');
    }

    /**
     * Show index article data.
     */
    public function index()
    {
        $this->load->view('template/layout', [
            'title' => 'Articles',
            'page' => 'index',
            'articles' => $this->article->getAllArticles()
        ]);
    }

    /**
     * Show article data.
     * @param $slug
     */
    public function view($slug)
    {
        $article = $this->article->getArticleBySlug($slug);
        $this->load->view('template/layout', [
            'title' => $article['title'],
            'page' => 'view',
            'article' => $article
        ]);
    }
}
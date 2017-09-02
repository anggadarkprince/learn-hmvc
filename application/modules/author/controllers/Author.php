<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Author_model', 'author');
    }

    /**
     * Show index author data.
     */
    public function index()
    {
        $this->load->view('template/layout', [
            'title' => 'Authors',
            'page' => 'index',
            'authors' => $this->author->getAllAuthors()
        ]);
    }

    /**
     * View detail user / author data.
     * @param $username
     */
    public function view($username)
    {
        $this->load->view('template/layout', [
            'title' => 'Detail Author',
            'page' => 'view',
            'author' => $this->author->getAuthorByUsername($username)
        ]);
    }

    /**
     * Show all articles created by specific user.
     * @param $username
     */
    public function article($username)
    {
        $this->load->model('article/Article_model', 'article');

        $author = $this->author->getAuthorByUsername($username);
        $articles = $this->article->getArticlesByAuthor($author['id']);

        $this->load->view('template/layout', [
            'title' => 'Detail Author',
            'page' => 'article',
            'author' => $author,
            'articles' => $articles
        ]);
    }
}
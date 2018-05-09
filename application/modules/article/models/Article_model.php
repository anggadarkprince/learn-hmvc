<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model
{
    /**
     * Build basic query for article data.
     * @return mixed
     */
    private function getArticleBaseQuery()
    {
        return $this->db
            ->select([
                'articles.*',
                'users.name AS author_name',
                'users.username AS author_username'
            ])
            ->from('articles')
            ->join('users', 'articles.author_id = users.id');
    }

    /**
     * Fetch all articles data.
     * @return mixed
     */
    public function getAllArticles()
    {
        return $this->getArticleBaseQuery()->get()->result_array();
    }

    /**
     * Get article by author id.
     * @param $authorId
     * @return mixed
     */
    public function getArticlesByAuthor($authorId)
    {
        return $this->getArticleBaseQuery()
            ->where(['author_id' => $authorId])->get()
            ->result_array();
    }

    /**
     * Get specific article by slug.
     * @param $slug
     * @return mixed
     */
    public function getArticleBySlug($slug)
    {
        return $this->getArticleBaseQuery()
            ->where(['slug' => $slug])->get()
            ->row_array();
    }
}
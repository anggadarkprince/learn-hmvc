<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleModel extends CI_Model
{
    /**
     * Fetch all articles data.
     * @return mixed
     */
    public function getAllArticles()
    {
        return $this->db
            ->select([
                'articles.*',
                'users.name AS author_name'
            ])
            ->from('articles')
            ->join('users', 'articles.author_id = users.id')
            ->get()
            ->result_array();
    }
}
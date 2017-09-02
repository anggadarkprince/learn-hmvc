<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model
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

    /**
     * Get article by author id.
     * @param $authorId
     * @return mixed
     */
    public function getArticlesByAuthor($authorId)
    {
        return $this->db->get_where('articles', ['author_id' => $authorId])->result_array();
    }
}
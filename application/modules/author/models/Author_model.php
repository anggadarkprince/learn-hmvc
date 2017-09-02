<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author_model extends CI_Model
{
    /**
     * Fetch all authors data.
     * @return mixed
     */
    public function getAllAuthors()
    {
        return $this->db
            ->select([
                'users.*',
                'IFNULL(author_articles.total_article, 0) AS total_article'
            ])
            ->from('users')
            ->join('(
                    SELECT author_id, COUNT(id) AS total_article 
                    FROM articles 
                    GROUP BY author_id
                ) author_articles',
                'author_articles.author_id = users.id', 'left')
            ->get()
            ->result_array();
    }

    /**
     * Get author by username.
     * @param $username
     */
    public function getAuthorByUsername($username)
    {
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }
}
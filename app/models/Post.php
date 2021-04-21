<?php

class Post 
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPosts()
    {
        $sql = 'SELECT 
                    p.title AS title,
                    p.body AS body,
                    p.created_at AS created_at,
                    u.name AS name,
                    p.id AS id
                FROM posts AS p
                JOIN users AS u
                    ON p.user_id = u.id
                ORDER BY p.created_at DESC';
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
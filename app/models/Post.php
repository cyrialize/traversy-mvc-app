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

    public function addPost($data)
    {
        $this->db->query('INSERT INTO posts (title, user_id, body) VALUES (:title, :user_id, :body)');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':body', $data['body']);
        
        return $this->db->execute();
    }
}
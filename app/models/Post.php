<?php

namespace app\models;

class Post
{
    //todo make methods here
    public function getAllPosts()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM posts");
        return $query->getResultArray();

    }
    public function getPostById($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM posts WHERE id = $id");
        return $query->getResultArray();
        
    }
    public function savePost($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query("INSERT INTO posts (title, description) VALUES (:title, :description)");
        $data = [
            'title' => $id['title'],
            'description' => $id['description'],
        ];
        $query->execute($data);
       
    }
    public function updatePost($id)
    {
    $db = \Config\Database::connect();
    $query = $db->query("UPDATE posts SET title = :title, description = :description WHERE id = $id");
    $data = [
        'title' => $id['title'],
        'description' => $id['description'],
    ];
    $query->execute($data);
       
    }
    public function deletePost($id)
    {   
        $db = \Config\Database::connect();
        $query = $db->query("DELETE FROM posts WHERE id = $id");
        $data = [
            'title' => $id['title'],
            'description' => $id['description'],
        ];
        $query->execute($data);
       
    }


}
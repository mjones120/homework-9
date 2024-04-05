<?php

namespace app\models;

class Post
{
    //todo make methods here
    //$db = new PDOdb('localhost', 'root','root','homework_9');
    public function getAllPosts()
    {
        $query=("SELECT * FROM posts WHERE  id")
    }
    public function getPostById($id)
    {
        $query =("SELECT * FROM posts WHERE id = :id");
        return $query;
    }
    public function savePost($id)
    {
        $query = "INSERT INTO posts (title, description) VALUES (:title, :description)";
        return $query;
    }
    public function updatePost($id)
    {
        $query = "UPDATE posts SET title = :title, description = :description WHERE id = :id";
        return $query;
    }
    public function deletePost($id)
    {
        $query = "DELETE FROM posts WHERE id = :id";
        return $query;
    }


}
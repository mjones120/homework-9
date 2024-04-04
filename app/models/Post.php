<?php

namespace app\models;

class Post
{
    //todo make methods here
    public function getAllPosts()
    {
        $query = ("SELECT * FROM posts");
        return $this->fetchAll($query);
    }
    public function getPostById($id)
    {
        $query =("SELECT * FROM posts WHERE id = :id");
        return $this->queryWithParams($query, ["id"=> $id]);
    }
    public function savePost($data)
    {
        $query = "INSERT INTO posts (title, description) VALUES (:title, :description)";
        return $this->queryWithParams($query, $data);
    }
    public function updatePost($data)
    {
        $query = "UPDATE posts SET title = :title, description = :description WHERE id = :id";
        return $this->queryWithParams($query, $data);
    }
    public function deletePost($id)
    {
        $query = "DELETE FROM posts WHERE id = :id";
        return $this->queryWithParams($query, ["id" => $id]);
    }


}
<?php

namespace app\models;
use app\core\Database;

class Post
{
    //todo make methods here

    public function getAllPosts()
    {
        $query="select * from posts where id = :id";
        return $this->fetchAll($query);

    }
    public function getPostById($id)
    {
        $query="select * from posts where id = :id";
        return $this->queryWithParams($query, ["id"=> $id]);
        
    }
    public function savePost($id)
    {
        $query = "insert into posts (title,description) (:title, :description);";
        $this->queryWithParams($query, $id);    
    }
    public function updatePost($id)
    {
        $query = "update posts set title = :title, description = :description where id = :id";
        return $this->queryWithParams($query, $id); 
    }
    public function deletePost($id)
    {   
        $query = "delete from posts where id = :id";
        return $this->queryWithParams($query, $id);
    }
}
    
<?php

namespace App\classes;
use App\classes\Database;

class Blog{
    public function createblog(){
        $sql = "SELECT * FROM categories WHERE publicationStatus=1";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $categoryName = mysqli_query(Database::dbConnection(), $sql);
            return $categoryName;
        }
    }
    public function saveBlogInfo($data){
        $categoryName = $data['categoryName'];
        $blogTitle = $data['blogTitle'];
        $shortDescription = $data['shortDescription'];
        $longDescription = $data['longDescription'];
        $publicationStatus = $data['publicationStatus'];
        $sql = "INSERT INTO blogs (categoryName, blogTitle, shortDescription, longDescription, publicationStatus) VALUES ('$data[categoryName]', '$data[blogTitle]', '$data[shortDescription]', '$data[longDescription]', '$data[publicationStatus]')";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $insertBlog = 'Blog Info Created Successfully';
            return $insertBlog;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function getAllBlogInfo(){
        $sql = "SELECT * FROM blogs";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $blogResult = (mysqli_query(Database::dbConnection(),$sql));
            return $blogResult;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function viewAllBlogInfo($id){
        $sql = "SELECT * FROM blogs where id = $id";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $blogResult = (mysqli_query(Database::dbConnection(),$sql));
            return $blogResult;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function updateBlogInfo($data, $id){
        $sql = "update  blogs SET categoryName = '$data[categoryName]',blogTitle = '$data[blogTitle]', shortDescription = '$data[shortDescription]', longDescription = '$data[longDescription]', publicationStatus = '$data[publicationStatus]' WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(), $sql)){

            header('Location: manageBlog.php');

        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function deleteBlogInfo($id){
        $sql = "delete FROM blogs WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $deleteBlog = 'Blog Info Delete Successfully';
            return $deleteBlog;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }

}

?>
<?php

namespace App\classes;

use App\classes\Database;

class Blog
{
    public function saveCategoryInfo($data)
    {
        $sql = "INSERT INTO categories (category_name,category_description,publication_status) VALUES ('$data[category_name]','$data[category_description]','$data[publication_status]')";

        if (mysqli_query(Database::dbConnection(), $sql)) {
            $message = 'Category information save successfully';
            return $message;
        } else {
            die('Query problem' .mysqli_error(Database::dbConnection()));
        }
    }
    public function getAllCategoryInfo($id){
        $sql = "SELECT * FROM categories";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult =  mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function getCategoryInfoById($id){
        $sql = "SELECT * FROM categories WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult =  mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function updateCategoryInfoById($data,$id){
        $sql = "UPDATE categories SET category_name = '$data[category_name]', category_description = '$data[category_description]', publication_status = '$data[publication_status]' WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            header('Location:manage-category.php');
//            $message = "Category info update success";
//            return $message;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function deleteCategoryInfo($id){
        $sql = "DELETE FROM categories WHERE id = '$id' ";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $message = "Category info delete success";
            return $message;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }



    public function saveBlogInfo($data)
    {

            $fileName= $_FILES['blog_image']['name'];
            $directory='../assets/images/';
            $imageUrl=$directory.$fileName;

            $fileSize= $_FILES['blog_image']['size'];
            $fileType= pathinfo($_FILES['blog_image']['name'], PATHINFO_EXTENSION);
            $check=getimagesize($_FILES['blog_image']['tmp_name']);
            if($check){

                if(file_exists($imageUrl)){
                    die('This file already exist. Please select another one.');
                }else{

                    if($fileSize >50000){
                        die('File size is too large.');
                    }else{

                        if( $fileType !='jpg' && $fileType !='png'){
                            die('File type is not valid.Please use jpg or png file type');
                        }else{
                            move_uploaded_file($_FILES['blog_image']['tmp_name'], $imageUrl);

                            $sql = "INSERT INTO blogs (category_id,blog_title,short_description,long_description,blog_image,publication_status) VALUES ('$data[category_id]','$data[blog_title]','$data[short_description]','$data[long_description]','$imageUrl','$data[publication_status]')";

                            if (mysqli_query(Database::dbConnection(), $sql)) {
                                $message = 'Blog information save successfully';
                                return $message;
                            } else {
                                die('Query problem' .mysqli_error(Database::dbConnection()));
                            }
                        }
                    }
                }
            }else{
                die('Image select kor.');
            }


    }

    public function getAllBlogInfo($id){
        $sql = "SELECT * FROM blogs";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult =  mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function getBlogInfoById($id){
        $sql = "SELECT * FROM blogs WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult =  mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function updateBlogInfoById($data,$id){
        $sql = "UPDATE blogs SET category_name = '$data[category_name]', blog_title = '$data[blog_title]', short_description = '$data[short_description]', long_description = '$data[long_description]', publication_status = '$data[publication_status]' WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            header('Location:manage-blog.php');
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function deleteBlogInfo($id){
        $sql = "DELETE FROM blogs WHERE id = '$id' ";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $message = "Category info delete success";
            return $message;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function getAllPublishedCategory(){
        $sql = "SELECT * FROM categories WHERE publication_status ='1' ";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }







}
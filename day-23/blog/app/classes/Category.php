<?php

namespace App\classes;
use App\classes\Database;

class Category{
    public function saveCategoryInfo($data){
        $categoryName = $data['categoryName'];
        $categoryDescription = $data['categoryDescription'];
        $publicationStatus = $data['publicationStatus'];
        $sql = "INSERT INTO categories (categoryName, categoryDescription, publicationStatus) VALUES ('$data[categoryName]', '$data[categoryDescription]', '$data[publicationStatus]')";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $insert = 'Category Info Created Successfully';
            return $insert;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function getAllCategoryInfo(){
        $sql = "SELECT * FROM categories";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $categoryResult = (mysqli_query(Database::dbConnection(),$sql));
            return $categoryResult;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function getCategoryById($id){
        $sql = "SELECT * FROM categories WHERE id = $id";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $categoryResult = mysqli_query(Database::dbConnection(), $sql);
            return $categoryResult;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function updateCategoryInfo($data, $id){
        $sql = "update  categories SET categoryName = '$data[categoryName]',categoryDescription= '$data[categoryDescription]',publicationStatus = '$data[publicationStatus]' WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(), $sql)){

            header('Location: manageCategory.php');

        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function deleteCategoryInfo($id){
        $sql = "delete FROM categories WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $deleteCategory = 'Category Info Delete Successfully';
            return $deleteCategory;
        }
    }
}
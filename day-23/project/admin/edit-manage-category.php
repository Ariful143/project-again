<?php include 'includes/header.php'; ?>

<?php
    require_once '../vendor/autoload.php';
    use App\classes\Blog;

    $id = $_GET['id'];
    $queryResult = Blog::getCategoryInfoById($id);
    $result = mysqli_fetch_assoc($queryResult);

    $message='';

    if(isset($_POST['btn'])){
        $message = Blog::updateCategoryInfoById($_POST,$id);
    }
?>



    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <h4 class="text-primary text-center"><?php echo $message; ?></h4><br/>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="category_name" value="<?php echo $result['category_name'];?>" class="form-control" placeholder="Category Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="category_description"><?php echo $result['category_description'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <label><input type="radio" name="publication_status" value="1"> Published</label>
                                    <label><input type="radio" name="publication_status" value="0"> Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-primary btn-block">Save Category Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include 'includes/footer.php'; ?>
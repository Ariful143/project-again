<?php include 'includes/header.php'; ?>

<?php
    require_once '../vendor/autoload.php';
    $blog =new App\classes\Blog;

    $queryResult=$blog->getAllPublishedCategory();

    $message='';
    if(isset($_POST['btn'])){
        $message = $blog->saveBlogInfo($_POST);
    }
?>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <h4 class="text-primary text-center"><?php echo $message; ?></h4><br/>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id">
                                        <option value="">---Select Category Name---</option>
                                        <?php while($category= mysqli_fetch_assoc($queryResult)) {?>
                                        <option value="<?php echo $category['id'];?>"><?php echo $category['category_name'];?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Blog Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="blog_title" class="form-control" placeholder="Blog Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Short Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="short_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control textarea" name="long_description" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="blog_image" accept="image/*"/>
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
                                    <button type="submit" name="btn" class="btn btn-primary btn-block">Save Blog Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include 'includes/footer.php'; ?>
<?php
namespace App\classes;
use App\classes\Category;
include 'includes/header.php';

$insert = '';
if(isset($_POST['btn'])){
    $insert = Category::saveCategoryInfo($_POST);
}
?>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-success"><?php echo $insert; ?><br></h4>
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="categoryName" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categoryDescription" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea name="categoryDescription" placeholder="Category Description"  id="categoryDescription" cols="70" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="publicationStatus" value="1"> Published
                                <input type="radio" name="publicationStatus" value="0"> Unublished
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Save Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>


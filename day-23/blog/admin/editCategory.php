<?php
namespace App\classes;
use App\classes\Category;
include 'includes/header.php';

$id = $_GET['id'];
$categoryResult = Category::getCategoryById($id);
$result= mysqli_fetch_assoc($categoryResult);
if(isset($_POST['btn'])){
    $updateCategory = Category::updateCategoryInfo($_POST, $id);
}
?>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" name="editCategoryForm">
                        <div class="form-group row">
                            <label for="categoryName" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?php echo $result['categoryName'];?>" id="categoryName" name="categoryName" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categoryDescription" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea name="categoryDescription" placeholder="Category Description"  id="categoryDescription" cols="53" rows="4"><?php echo $result['categoryDescription']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="publicationStatus" active value="1"> Published
                                <input type="radio" name="publicationStatus" value="0"> Unpublished
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Update Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['editCategoryForm'].elements['publicationStatus'].value="<?php echo $result['publicationStatus']; ?>"
</script>
<?php include 'includes/footer.php'; ?>


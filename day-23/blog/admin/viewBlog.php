<?php
namespace App\classes;
use App\classes\Blog;
include 'includes/header.php';

$id = $_GET['id'];
$blogResult = Blog::viewAllBlogInfo($id );
?>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <?php
                        $i = 0;
                        while ($result = mysqli_fetch_assoc($blogResult)) {
                        $i++;
                        ?>
                        <tr>
                            <th>SL NO</th>
                            <th><?php echo $i; ?></th>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <th><?php echo $result['categoryName']; ?></th>
                        </tr>
                        <tr>
                            <th>Blog TItle</th>
                            <th><?php echo $result['blogTitle']; ?></th>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <th><?php echo $result['shortDescription']; ?></th>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <th><?php echo $result['longDescription']; ?></th>
                        </tr>
                        <tr>
                            <th>Publication Statuss</th>
                            <th>  <?php if($result['publicationStatus'] == 1){
                                    echo 'Published';
                                }else{
                                    echo 'Unpublished';
                                } ?></th>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>


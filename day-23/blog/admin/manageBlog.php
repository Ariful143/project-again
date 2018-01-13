<?php
namespace App\classes;
use App\classes\Blog;
include 'includes/header.php';

$deleteBlog = '';
if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $deleteBlog= Blog::deleteBlogInfo($id);
}
$blogResult = Blog::getAllBlogInfo();
?>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-success text-center"><?php echo $deleteBlog; ?><br></h4>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Sl NO</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <?php
                        $i = 0;
                        while ($result = mysqli_fetch_assoc($blogResult)) {
                        $i++;
                        ?>
                        <tbody>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $result['categoryName']; ?></td>
                            <td><?php echo $result['blogTitle']; ?></td>
                            <td>
                                <?php if($result['publicationStatus'] == 1){
                                    echo 'Published';
                                }else{
                                    echo 'Unpublished';
                                } ?>
                            </td>
                            <td>
                                <a href="viewBlog.php?id=<?php echo $result['id'];?>">View</a> ||
                                <a href="editBlog.php?id=<?php echo $result['id'];?>">Edit</a> ||
                                <a href="?delete=true&id=<?php echo $result['id']; ?>" onclick="return confirm('Are You Sure To Delete');">Delete</a>
                            </td>
                        </tr>

                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>


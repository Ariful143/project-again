<?php include 'includes/header.php'; ?>

<?php
    require_once '../vendor/autoload.php';
    use App\classes\Blog;

    $id = $_GET['id'];
    $queryResult = Blog::getBlogInfoById($id);
    $result = mysqli_fetch_assoc($queryResult);
?>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-active">
                            <tr>
                                <th>Blog Image</th>
                                <td>No Upload Image</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td><?php echo $result['category_name'];?></td>
                            </tr>
                            <tr>
                                <th>Blog Title</th>
                                <td><?php echo $result['blog_title'];?></td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td><?php echo $result['short_description'];?></td>
                            </tr>
                            <tr>
                                <th>Long Description</th>
                                <td><?php echo $result['long_description'];?></td>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td><?php echo $result['publication_status'];?></td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>



<?php include 'includes/footer.php'; ?>
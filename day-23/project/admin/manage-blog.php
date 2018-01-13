<?php include 'includes/header.php'; ?>

<?php
    require_once '../vendor/autoload.php';
    use App\classes\Blog;

    $id = " ";
    $message='';

    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $message = Blog::deleteBlogInfo($id);
    }

    $queryResult = Blog::getAllBlogInfo($id);


?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SL_NO</th>
                                    <th scope="col">Category_Name</th>
                                    <th scope="col">Blog_Title</th>
                                    <th scope="col">Short_Description</th>
                                    <th scope="col">Long Description</th>
                                    <th scope="col">Publication_Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                            <?php
                            $i = 1;
                            while ($data = mysqli_fetch_assoc($queryResult)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i++;?></th>
                                    <td><?php echo $data['category_name'];?></td>
                                    <td><?php echo $data['blog_title'];?></td>
                                    <td><?php echo $data['short_description'];?></td>
                                    <td><?php echo $data['long_description'];?></td>
                                    <td><?php echo $data['publication_status'];?></td>
                                    <td>
                                        <a href="single-blog-view.php?id=<?php echo $data['id'];?>">View</a> ||
                                        <a href="edit-manage-blog.php?id=<?php echo $data['id'];?>">Edit</a> ||
                                        <a href="?delete=true&id=<?php echo $data['id'];?>" onclick="return confirm('Are you sure to delete this')">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>



<!---->
<!--                            <tr>-->
<!--                                <th scope="row">3</th>-->
<!--                                <td>Larry</td>-->
<!--                                <td>the Bird</td>-->
<!--                                <td>@twitter</td>-->
<!--                                <td>@twitter</td>-->
<!--                                <td>@twitter</td>-->
<!--                                <td>-->
<!--                                    <a href="">View</a>-->
<!--                                    <a href="">Edit</a>-->
<!--                                    <a href="">Delete</a>-->
<!--                                </td>-->
<!--                            </tr>-->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'includes/footer.php'; ?>
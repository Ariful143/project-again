<?php
namespace App\classes;
use App\classes\Category;
include 'includes/header.php';

$deleteCategory = '';
if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $deleteCategory = Category::deleteCategoryInfo($id);
}
$categoryResult = Category::getAllCategoryInfo();
?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-success text-center"><?php echo $deleteCategory; ?><br></h4>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Sl NO</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Category Description</th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <?php
                        $i = 0;
                        while ($result = mysqli_fetch_assoc($categoryResult)) {
                        $i++;
                        ?>
                        <tbody>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $result['categoryName']; ?></td>
                            <td><?php echo $result['categoryDescription'] ?></td>
                            <td>
                                <?php if($result['publicationStatus'] == 1){
                                echo 'Published';
                                }else{
                                    echo 'Unpublished';
                                } ?>
                            </td>
                            <td>
                                <a href="editCategory.php?id=<?php echo $result['id'];?>">Edit </a>||
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


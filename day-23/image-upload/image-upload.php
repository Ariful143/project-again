<?php
    $link=mysqli_connect('localhost', 'root', '', 'image');



    if(isset($_POST['btn'])){
        $fileName= $_FILES['image_file']['name'];
        $directory='images/';
        $imageUrl=$directory.$fileName;

        $fileSize= $_FILES['image_file']['size'];
        $fileType= pathinfo($_FILES['image_file']['name'], PATHINFO_EXTENSION);
        $check=getimagesize($_FILES['image_file']['tmp_name']);
        if($check){

            if(file_exists($imageUrl)){
                die('This file already exist. Please select another one.');
            }else{

                if($fileSize >50000){
                    die('File size is too large.');
                }else{

                    if( $fileType !='jpg' && $fileType !='png'){
                        die('File type is not valid.Please use jpg or png file type');
                    }else{
                        move_uploaded_file($_FILES['image_file']['tmp_name'], $imageUrl);
                       $sql="INSERT INTO images(image_file) VALUES('$imageUrl')";
                       mysqli_query($link,$sql);
                       echo'success';
                    }
                }
            }
        }else{
            die('Image select kor.');
        }

    }


//
?>



<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select Image</th>
            <td><input type="file" name="image_file" accept="image/*"</td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Save" /></td>
        </tr>
    </table>
</form>
<hr/>
<?php
    $sql="SELECT * FROM images";
    $queryResult=mysqli_query($link,$sql);
?>

<table>
    <?php while($imageInfo = mysqli_fetch_assoc($queryResult)){?>
    <tr>
        <td>
            <img src="<?php echo $imageInfo['image_file']?>" align="" height="150" width="200">
        </td>
    </tr>
    <?php } ?>
</table>
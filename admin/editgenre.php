<?php

@include 'configure.php';
@include 'header.php';

?>

<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $genrename = $_GET['genrename'];
    $catid = $_GET['catid'];
    $genreid = $_GET['genreid'];

    if (isset($_POST['submit'])) {

        $genrename1 = $_POST['genrename'];
        $cat_id = $_POST['cat_id'];
        $genreid1 = $_POST['genre_id'];

        $query = " UPDATE `genre` SET `genre_name`='$genrename1',`category_id`=$cat_id,`genreid`=$genreid1 WHERE id=$id ";
        $run = mysqli_query($conn, $query);
        if ($run) {
            echo "<script>alert('Genre Successfully Updated.. :)');window.location.href='genrelist.php';</script>";
        } else {
            echo "<script>alert('Something Went Wrong');window.location.href='editgenre.php';</script>";
        }
    }
} else {
    header('location:genrelist.php');
}


?>

<style>
    * {
        color: #fff;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        padding-bottom: 60px;
        color: #fff;
    }

    .lead {
        font-size: 25px;
        color: #ffb43a;
    }

    .form-row,
    .inputBox {
        padding: 20px;
        margin-top: 10px;
    }
</style>


<div class="container">
    <div class="row">

        <div class="col">
            <h1>Edit Genre</h1>
            <p class="lead">Edit Genre and also please mention their Category ID</p>
            <hr class="my-4">
            <form action="#" method="post">
                <div class="form-row">
                    <div class="col-7">
                        <input type="text" name="genrename" value="<?php echo$genrename; ?>" class="inputBox" placeholder="Genre Name">
                    </div>

                    <div class="col">
                        <input type="text" name="cat_id"  value="<?php echo$catid; ?>" class="inputBox" placeholder="Category ID ">
                    </div>
                    <div class="col">
                        <input type="text" name="genre_id" value="<?php echo$genreid; ?>" class="inputBox" placeholder="Genre ID ">
                    </div>
                </div>
                <br>
                <button class="btn " name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
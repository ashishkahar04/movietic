<?php

@include 'configure.php';
@include 'header.php';

?>
<style>
    *{
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
    .lead{
        font-size: 25px;
        color: #ffb43a;
    }
    .form-row , .inputBox{
        padding: 20px;
        margin-top: 10px;
        background-color: #333;
    }
</style>

<div class="container">
    <div class="row">

        <div class="col">
            <h1 >Add a Category</h1>
            <p class="lead">Add Category and also please mention their Category ID</p>
            <hr class="my-4">
            <form action="addcategory.php" method="post">
                <div class="form-row">
                    <div class="col-7">
                        <input type="text" name="catname" class="inputBox" placeholder="Category Name">
                    </div>

                    <div class="col">
                        <input type="text" name="catid" class="inputBox" placeholder="Category ID ">
                    </div>
                </div>
                <br><br>
                <button class="btn btn-primary btn-lg" name="submit">Add category</button>
            </form>
        </div>
    </div>
</div>
<?php

if (isset($_POST['submit'])) {
    $catname = $_POST['catname'];
    $catid = $_POST['catid'];

    $query = "INSERT INTO `category`(`category_id`, `category_name`) VALUES ($catid,'$catname')";
    $run = mysqli_query($conn, $query);
    if ($run) {
        echo "<script>alert('Category Successfully Added.. :)');window.location.href='categorylist.php';</script>";
    } else {
        echo "<script>alert('There Was A Problem While adding Category'); window.location.href='addcategory.php';</script>";
    }
}

?>
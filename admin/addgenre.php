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
            <h1 >Add Genre</h1>
            <p class="lead">Add Genre and also please mention their Category ID</p>
            <hr class="my-4">
            <form action="addgenre.php" method="post">
                <div class="form-row">
                    <div class="col-7">
                        <input type="text" name="genrename" class="inputBox" placeholder="Genre Name">
                    </div>

                    <div class="col">
                        <input type="text" name="cat_id" class="inputBox" placeholder="Category ID ">
                    </div>
                    <div class="col">
                        <input type="text" name="genre_id" class="inputBox" placeholder="Genre ID ">
                    </div>
                </div>
                <br>
                <button class="btn btn-primary btn-lg" name="submit">Add genre</button>
            </form>
        </div>
    </div>
</div>


<?php 

if (isset($_POST['submit'])) {
	$gename = $_POST['genrename'];
	$catid = $_POST['cat_id'];
	$genre= $_POST['genre_id'];

	$query = "INSERT INTO `genre`( `genre_name`, `category_id`, `genreid`) VALUES ('$gename',$catid,$genre)"; 
	$run = mysqli_query($conn,$query);
	if ($run) {
		echo "<script>alert('Genre Successfully Added.. :)');window.location.href='genrelist.php';</script>";
	}
	else{
		echo "<script>alert('Something Went Wrong :(');window.location.href='addgenre.php';</script>";
	}

}

  ?>
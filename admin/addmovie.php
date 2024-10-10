<?php

@include 'configure.php';
@include 'header.php';

?>
<?php 
include 'header.php';
include 'db.php';

if (isset($_POST['submit'])) {
	$mv_name = $_POST['mv_name'];
	$mv_m_desc = $_POST['mv_m_desc'];
	$mv_m_tag = $_POST['mv_m_tag'];
	$mv_link1 = $_POST['mv_link1'];
	$mv_link2 = $_POST['mv_link2'];
	$mv_lang = $_POST['mv_lang'];
	$cat_id = $_POST['cat_id'];
	$genre_id = $_POST['genre_id'];
	$mv_desc = $_POST['mv_desc'];
	$mv_director = $_POST['mv_director'];
	$mv_date = date('Y-m-d', strtotime($_POST['mv_date']));
	$target = "../upload/".basename($_FILES['img']['name']);
	$img = $_FILES['img']['name'];

	$query = "INSERT INTO movie_dbs (`cat_id`, `genre_id`, `mv_name`, `mv_des`, `mv_tag`, `link1`, `link2`, `img`, `date`, `lang`, `director`, `meta_description`) VALUES ($cat_id,$genre_id,'$mv_name','$mv_desc','$mv_m_tag','$mv_link1','$mv_link2','$img','$mv_date','$mv_lang','$mv_director','$mv_m_desc')";

	$run = mysqli_query($conn,$query);
	if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
		echo "<script>alert('Movie Successfully Added.. :)');window.location.href='movielist.php';</script>";
		
	}
	else{
		echo "<script>alert('Something Went Wrong!!.. :(');window.location.href='addmovie.php';</script>";
		
	}

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
    h1 {
            text-align: center;
            padding-top: 50px;
            color: #ffb43a;
        }

    .lead {
        font-size: 25px;
        color: #ffb43a;
    }

    #form-container form input,
    #input {
        width: 100%;
        padding: 10px 15px;
        font-size: 17px;
        margin: 8px 0;
        background: #333;
        border-radius: 5px;
    }

    #customFile{
        width: 350px;
        max-width: 100%;
        color: #fff;
        padding: 5px;
        background: #ffb43a;
        border-radius: 10px;
        border: 1px solid #555;
        cursor: pointer;
    }
</style>


<div class="container">
    <div class="row">

        <div class="col" id="form-container">
            <h1>Add Movie</h1>
            <p class="lead">Add Movie and also please mention their Category ID</p>
            <hr class="my-4">
            <form action="#" method="post" enctype="multipart/form-data">

                <div class="form-row">

                    <div class="col-7">
                        <input type="text" name="mv_name" class="inputBox" placeholder="Enter Movie Name">
                    </div>

                    <div class="col">
                        <input type="text" name="mv_m_desc" class="inputBox" placeholder="Enter meta description">
                    </div>

                    <div class="col">
                        <input type="text" name="mv_m_tag" class="inputBox" placeholder="Enter Meta Tags">
                    </div>

                    <div class="col">
                        <input type="text" name="mv_link1" class="inputBox" placeholder="Enter Link 1">
                    </div>

                    <div class="col">
                        <input type="text" name="mv_link2" class="inputBox" placeholder="Enter Link 2">
                    </div>

                    <div class="col">
                        <input type="date" name="mv_date" class="inputBox" placeholder="Enter Date">
                    </div>

                    <div class="col">
                        <input type="text" name="mv_lang" class="inputBox" placeholder="Enter Movie Language">
                    </div>

                    <div class="col">
                        <input type="text" name="mv_director" class="inputBox" placeholder="Enter Movie Director">
                    </div>

                    <div class="col">
                        <input type="text" name="cat_id" class="inputBox" placeholder="Enter Category ID ">
                    </div>

                    <div class="col">
                        <input type="text" name="genre_id" class="inputBox" placeholder="Enter Genre ID ">
                    </div>

                    <div class="col">
                        <input type="file" name="img" class="inputBox" id="customFile">
                    </div>

                    <div class="col">
                        <textarea type="text" name="mv_desc" class="inputBox" id="input" placeholder="Enter Movie description" rows="4"></textarea>
                    </div>


                </div>
                <br>
                <button class="btn" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
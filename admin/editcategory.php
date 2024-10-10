<?php

@include 'configure.php';
@include 'header.php';

?>

<?php 


if (isset($_GET['id'])) {
	$id =$_GET['id'];
	$catname = $_GET['catname'];
	$fk = $_GET['forkey'];

    if (isset($_POST['submit'])) {
        $cname = $_POST['categoryname'];
		$frky = $_POST['frky'];
		$pid = $_POST['pid'];

        // if any error occur about variable than below line will be use
       // $catname=$fk=$id='';
        
        $query = "UPDATE `category` SET `id`=$pid,`category_id`=$frky,`category_name`='$cname' WHERE id=$id";
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "<script>alert('Category Successfully Updated.. :)');window.location.href='categorylist.php';</script>";
		}
		else{
			echo "<script>alert('Something Went Wrong');window.location.href='editcategory.php';</script>";
		}
    }
}
else{
    header('location:categorylist.php');
}

?>

<style>
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px 20px;
        color: #fff;
    }

.txt{
    color: #fff;
    margin-left: 12px;
}
</style>

<div class="container">
    <form action=" " method="post">
        <div class="row">

            <div class="col">

                <h1>Edit Category</h1>
                <div class="inputBox" >
                    <span>Category Name</span>
                    <input class="txt" type="text" name="categoryname" value="<?php echo $catname; ?>" placeholder="Category Name">
                </div>
                <div class="inputBox">
                    <span>Foriegn Key</span>
                    <input class="txt" type="text" name="frky" value="<?php echo $fk; ?>" placeholder="Foriegn Key">
                </div>
                <div class="inputBox">
                    <span>Primary ID</span>
                    <input class="txt" type="text" name="pid" value="<?php echo $id; ?>" placeholder="Primary ID">
                </div>

                <input type="submit" class="btn" name="submit">
            </div>
        </div>
    </form>

</div>
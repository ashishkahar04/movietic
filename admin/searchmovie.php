<?php

@include 'configure.php';
@include 'header.php';

?>

<?php 


$search1 = $_POST['search'];


?>

<style>
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        padding-top: 50px;
        color: #fff;
    }

    table {
        width: 80%;
        border-collapse: collapse;
    }

    tr {
        text-align: center;
    }

    th,
    td {
        border: 1px solid;
        padding: 15px;
    }
    .searchbox{
        margin-left: 70%;
    }
    .search{
        color: #fff;
    }

    .btn-size {
        display: flex;
    }
</style>


<h1>Seach Result of "<?php echo $search1; ?></h1>

<div class="container">

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Poster</th>
                <th scope="col">Name</th>
                <th scope="col">Actor</th>
                <th scope="col">Category</th>
                <th scope="col">View Details</th>
                <th scope="col">CURD</th>
            </tr>
        </thead>
        <tbody>
<?php
        if (isset($_POST['submit'])) {
	$search = $_POST['search'];
	$searchpreg =preg_replace("#[^0-9a-z]#i", "", $search);
	$query = "SELECT * FROM movie_dbs where mv_name LIKE '%$search%' OR mv_tag LIKE '%$search%' OR lang LIKE '%$search%' OR director LIKE '%$search%' or date LIKE '%$search%' ";
	$run = mysqli_query($conn,$query);
	$count = mysqli_num_rows($run);
	if ($count == 0) {
		echo "<h1>No Movie Found!!</h1>";
	}
	else{
		while ($row=mysqli_fetch_array($run)) {
			?>
 <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo "<img height='180px' width='auto' src='../upload/" . $row['img'] . "'>"; ?></td>
                        <td><?php echo $row['mv_name']; ?></td>
                        <td><?php echo $row['meta_description'] ?></td>
                        <td><?php echo $row['mv_tag'] ?></td>


                        <td><a href="viewmovie.php?id=<?php echo $row['id']; ?>" class="btn btn-size">View Details</a></td>
                        <td><div class="button"><a href="deletemovie.php?id=<?php echo $row['id'] ?>" class="btn btn-delete ">DELETE</a>
                            <a href="editmovie.php?id=<?php echo $row['id'] ?>" class="btn btn-add">Edit</a></div>
                        </td>

                    </tr>
            <?php
                }
            }
        }
            ?>



        </tbody>
    </table>
</div>




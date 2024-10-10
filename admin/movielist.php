<?php

@include 'configure.php';
@include 'header.php';

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
        background-color: #333;
    }

    .btn-size {
        display: flex;
    }
</style>

<h1>MovieList</h1>

<form action="searchmovie.php" class="searchbox" method="post"> 
  <input type="text" name="search" class="search" placeholder="Search here!">
  <input type="submit" name="submit" class="btn" value="Search">
</form>
<a class="btn" href="addmovie.php" style="margin-left: 25%;">Add Movie</a>



<div class="container">

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Poster</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">View Details</th>
                <th scope="col">CURD</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM movie_dbs";
            $run = mysqli_query($conn, $query);

            if ($run) {
                while ($row = mysqli_fetch_array($run)) {
            ?>

                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo "<img height='180px' width='auto' src='../upload/" . $row['img'] . "'>"; ?></td>
                        <td><?php echo $row['mv_name']; ?></td>
                        <td><?php echo $row['meta_description'] ?></td>
                        <td><?php echo $row['mv_tag'] ?></td>


                        <td><a href="viewmovie.php?id=<?php echo $row['id']; ?>" class="btn btn-size">View Details</a></td>
                        <td><div class="button"><a href="deletemovie.php?id=<?php echo $row['id'] ?>" class="btn btn-delete btn-size">DELETE</a>
                            <a href="editmovie.php?id=<?php echo $row['id'] ?>" class="btn btn-add btn-size ">Edit</a></div>
                        </td>

                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
</div>
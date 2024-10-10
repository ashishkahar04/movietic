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
        padding-bottom: 60px;
        color: #fff;
    }

    table {
        width: 50%;
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
</style>


<h1>Seach Result of "<?php echo $search1; ?>"</h1>

<div class="container">

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Genre Name</th>
                <th scope="col">Category Id</th>
                <th scope="col">Genre</th>
                <th scope="col">No. of Category</th>
                <th scope="col">No. of Posts</th>
                <th scope="col">CURD</th>
            </tr>
        </thead>

        <?php

        if (isset($_POST['submit'])) {
            $search = $_POST['search'];
            $searchpreg = preg_replace("#[^0-9a-z]#i", "", $search);
            $query = "SELECT * FROM genre where category_id LIKE '%$search%' OR genre_name LIKE '%$search%' OR genreid LIKE '%$search%' ";
            $run = mysqli_query($conn, $query);
            $count = mysqli_num_rows($run);
            if ($count == 0) {
                echo "<h1>No Genre Found!!</h1>";
            } else {
                while ($row = mysqli_fetch_array($run)) {
        ?>

                    <tbody>


                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['genre_name']; ?></td>
                            <td><?php echo $row['category_id']; ?>
                            </td>
                            <td><?php echo $row['genreid']; ?></td>
                            <?php
                            $id = $row['id'];
                            $query1 = "SELECT count(*) as total_category from category,genre where genre.id=category.genre_id and genre.id=$id";
                            $run1 = mysqli_query($conn, $query1);
                            if ($run1) {
                                while ($row1 = mysqli_fetch_array($run1)) {

                            ?>

                                    <td><?php echo $row1['total_category']; ?></td>
                            <?php
                                }
                            }
                            ?>
                            <?php

                            $query2 = "SELECT count(*) as total_post from movie_dbs,genre where genre.id=movie_dbs.genre_id and genre.id=$id";
                            $run2 = mysqli_query($conn, $query2);
                            if ($run2) {
                                while ($row2 = mysqli_fetch_array($run2)) {
                            ?>

                                    <td><?php echo $row2['total_post']; ?></td>
                            <?php

                                }
                            }

                            ?>
                            <td><a class="btn btn-delete" href="deletegenre.php?id=<?php echo $row['id']; ?>">DELETE</a> <a class="btn btn-add href="editgenre.php?id=<?php echo $row['id']; ?>&genrename=<?php echo $row['genre_name']; ?>&catid=<?php echo $row['category_id']; ?>&genreid=<?php echo $row['genreid']; ?>">EDIT</a></td>

                        </tr>

                    </tbody>




        <?php
                }
            }
        }


        ?>
    </table>
</div>
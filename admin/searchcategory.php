<?php

@include 'configure.php';
@include 'header.php';

?>

<?php


$search1 = $_POST['search'];


?>

<style>
    .searchbox {
        margin-left: 70%;
    }

    .search {
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


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category ID <small>Foriegn Key</small></th>
                <th scope="col">Category Name</th>
                <th scope="col">No. of Post</th>
                <th scope="col">CURD</th>
                <th scope="col">View Post</th>


            </tr>
        </thead>

        <?php

        if (isset($_POST['submit'])) {
            $search = $_POST['search'];
            $searchpreg = preg_replace("#[^0-9a-z]#i", "", $search);
            $query = "SELECT * FROM category where category_id LIKE '%$search%' OR category_name LIKE '%$search%' OR genre_id LIKE '%$search%' ";
            $run = mysqli_query($conn, $query);
            $count = mysqli_num_rows($run);
            if ($count == 0) {
                echo "<h1>No Category Found!!</h1>";
            } else {
                while ($row = mysqli_fetch_array($run)) {
        ?>

                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['category_id']; ?></td>
                            <td><?php echo $row['category_name']; ?>
                            </td>
                            <?php
                            $id = $row['id'];
                            $query1 = "SELECT count(*) as total from movie_dbs,category where category.id=movie_dbs.cat_id and category.id=$id ";
                            $run1 = mysqli_query($conn, $query1);
                            if ($run1) {
                                while ($row1 = mysqli_fetch_array($run1)) {

                            ?>
                                    <td><?php echo $row1['total']; ?></td>
                            <?php
                                }
                            }
                            ?>

                            <td>
                                <a href="deletecategory.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-delete">Delete</a>
                                <a class="btn btn-add" href="editcategory.php?id=<?php echo $row['id']; ?>&forkey=<?php echo $row['category_id']; ?>&catname=<?php echo $row['category_name']; ?>">Edit</a>
                            </td>
                            <td><a href="viewpost.php?id=<?php echo $row['id'] ?>" class="btn">View Posts</a></td>

                        </tr>

                    </tbody>




        <?php
                }
            }
        }

        ?>

    </table>
</div>
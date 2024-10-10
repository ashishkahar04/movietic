<?php

@include 'configure.php';
@include 'header.php';

?>

<style>
    .search-box {
        max-width: 290px;
        width: 100%;
        display: flex;
        align-items: center;
        column-gap: 0.7rem;
        padding: 8px 15px;
        background: var(--container-color);
        border-radius: 4rem;
        margin-right: 1rem;
    }

    .search-box .search-logo {
        font-size: 1.1rem;
    }

    .search-box .search-logo:hover {
        color: #ffb43a;
    }

    #search-input {
        width: 100%;
        border: none;
        outline: none;
        color: var(--text-color);
        background: transparent;
        font-size: 0.938rem;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        padding-bottom: 60px;
        color: #fff;
    }

    .card {
        text-align: center;
        justify-items: center;
        border: 1px solid #ffb43a;
        height: 470px;
    }

    .searchbox {
        width: 400px;
        margin: auto;
        margin-left: 70%;
    }

    input {
        padding: 4px 10px;
        border: 0;
        font-size: 16px;
    }

    .search {
        width: 75%;
        border: 1px solid #fff;
        color: #fff;
    }

    .search-btn {
        width: 70px;
        background-color: #ffb43a;
        color: #ffffff;
    }
</style>
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query1 = "SELECT * FROM category where id = $id";
    $run1 = mysqli_query($conn, $query1);
    if ($run1) {
        while ($row1 = mysqli_fetch_array($run1)) {
?>



            <h1>MovieList</h1>
            <form class="searchbox">
                <input type="text" name="text" class="search" placeholder="Search here!">
                <input type="submit" name="submit" class="search-btn" value="Search">

            </form>

            <a class="btn" href="addmovie.php" style="margin-left: 25%;">Add Movie</a>

            <div class="container">

                <div class="row">

                    <?php

                    $query2 = "SELECT * FROM category,movie_dbs where category.id=movie_dbs.cat_id and category.id=$id";
                    $run2 = mysqli_query($conn, $query2);
                    if ($run2) {
                        while ($row2 = mysqli_fetch_array($run2)) {
                    ?>
                            <div class="col">

                                <div class="card">
                                    <p><?php echo $row2['id']; ?></p>
                                    <?php echo "<img height='180px' width='auto' src='../upload/" . $row2['img'] . "'>"; ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row2['mv_name']; ?></h5>
                                        <p class="card-text"><?php echo $row2['meta_description']; ?></p>
                                        <a href="viewmovie.php?id=<?php echo $row2['id']; ?>" class="btn btn-secondary">View Details</a>
                                        <br>
                                        <br>
                                        <a href="deletemovie.php?id=<?php echo $row2['id'] ?>" class="btn btn-danger">DELETE</a>
                                        <a href="editmovie.php?id=<?php echo $row2['id'] ?>" class="btn btn-info ">Edit</a>
                                    </div>

                                </div>
                            </div> <?php
                                }
                            }

                                    ?>
                </div>
            </div>
<?php
        }
    }
} else {
    header('location:categorylist.php');
}

?>
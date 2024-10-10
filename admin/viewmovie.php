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
        padding-top: 85px;
        color: #fff;
    }
    .row{
        margin-top: 110px;
        text-align: center;
        border: 1px solid #ffb43a;
    }
    .mvname{
        padding: 0;
    }
    .downloadlink{
        padding: 30px;
    }
</style>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM movie_dbs where id=$id";
    $run = mysqli_query($conn, $query);
    if ($run) {
        while ($row = mysqli_fetch_array($run)) {
?>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php echo "<img height='315px' src='../upload/" . $row['img'] . "'>"; ?>

                        <h1 class="mvname"><?php echo $row['mv_name']; ?></h1>
                        <p><?php echo $row['mv_des']; ?></p>
                        <div class="date">
                            <span><?php echo $row['date']; ?></span><br>
                            <span><?php echo $row['director']; ?></span><br>
                            <span><?php echo $row['lang']; ?></span>
                        </div>
                        <div class="downloadlink">
                            <a class="btn" href="<?php echo $row['link1'] ?>">Download 1</a>
                            <a class="btn" href="<?php echo $row['link2'] ?>">Download 2</a>
                        </div>
                    </div>
                    
                    <div class="col">
                    <p><?php echo $row['meta_description']; ?></p>
                    
                        <?php echo $row['mv_tag']; ?>
                    </div>
                </div>
            </div>

<?php
        }
    }
}

?>
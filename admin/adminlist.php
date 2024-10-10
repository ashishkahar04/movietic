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


<h1>AdminList</h1>
<div class="container">

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">EmailId</th>
                <th scope="col">Password</th>
                <th scope="col">CURD</th>
            </tr>
        </thead>

        <?php
        $query = "SELECT * from admin_db";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while (
                $row = mysqli_fetch_array($result)
            ) {

        ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <pre>Password Encrypted</pre>
                        </td>
                        <td><a class="btn btn-delete" href="deleteadmin.php?adminid=<?php echo $row['id']; ?>">Delete</a> <a class="btn btn-add" href="register.php">New Admin</a></td>
                    </tr>
            <?php
            }
        }
            ?>
                </tbody>
    </table>
</div>
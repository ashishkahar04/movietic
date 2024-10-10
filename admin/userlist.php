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

    .btn-delete,
    .btn-add {
        border-radius: 10px;
        background: #ffb43a;
        padding: 10px 10px;
        font-weight: 500;
        color: #333;
    }

    .btn-add:hover {
        background-color: yellowgreen;
    }

    .btn-delete:hover {
        background-color: red;
    }
</style>


<h1>UserList</h1>
<div class="container">

    <table class="table">
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
        $query = "SELECT * from user_db";
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
                        <td><a class="btn btn-delete" href="deleteadmin.php?usernameid=<?php echo $row['id']; ?>">Delete</a> <!-- <a class="btn btn-add" href="register_form.php">New User</a> --> </td>
                    </tr>
            <?php
            }
        }
            ?>
                </tbody>
    </table>
</div>
<?php

include 'configure.php';
session_start();
if (!isset($_SESSION['admin_name'])) {
   echo "<script>alert('You Logged in');window.location.href='login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin of MovieTic</title>


    <!-- Box Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        body{
            background-color: #1e1e2a;
        }

        /*header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
            background-color: #333;
        }

        .containers {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-top: 60px;
        }

        /* logo*/
        .logo {
            font-size: 40px;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            margin: 0 auto 0 0;
            float: left;
            display: flex;
        }

        .logo span {
            color: #ffb43a;
        }

        h1 {
            text-align: center;
            padding-top: 130px;
            color: #ffb43a;
        }
        /*this is for hello admin in navbar*/
        .hello{
            font-size: 20px;
            text-align: center;
            color: #ffb43a;
            padding-right: 30%;
        }

        /*button */
        .button {
            display: flex;
            gap: 25px;
        }

        .btn {
            border-radius: 10px;
            background: #ffb43a;
            padding: 10px 10px;
            color: #333;
            font-weight: 200;
            cursor: pointer;
        }

        .btn:hover {
            background: #fff;
            transition: 0.3s all linear;
        }
        
        .navs a {
            margin: 20px;
            text-decoration: none;
        }

        /* Navbar */
        .navbar {
            font-family: 'Poppins', sans-serif;
            position: fixed;
            top: 20%;
            transform: translate(-50%);
            left: 100px;
            display: flex;
            flex-direction: column;
            row-gap: 2.1rem;
            font-size: 20px;
            text-align: center; 
            padding: 10px;
        }

        .navbarlink {
            color: #fff;
        }

        .navbarlink:hover {
            color: #ffb43a;
            transition: 0.3s all linear;
        }


        /*button for delete & add */
        .btn-delete,
        .btn-add {
            border-radius: 10px;
            background: #ffb43a;
            padding: 10px 10px;
            font-weight: 500;
            color: #333;
            cursor: pointer;
        }

        .btn-add:hover {
            background-color: yellowgreen;
        }

        .btn-delete:hover {
            background-color: red;
        }

        /* form css */
        .container form {
            padding: 20px;
            width: 550px;
        }

        .container form .row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .container form .row .col {
            flex: 1 1 250px;
            padding-top: 80px;
        }

        .container form .row .col .inputBox {
            margin: 15px 0;
            display: flex;
        }

        .container form .row .col .inputBox span {
            margin-bottom: 10px;
            display: block;
        }
    </style>

</head>

<body>
    <header>
        <div class="nav containers">
            <!--Logo-->
            <a href="admin_page.php" class="logo">
                Movie<span>Tic</span>
            </a>
        
            <p class="hello" >welcome <span style="color: #fff;"><?php echo $_SESSION['admin_name']; ?></span> </p>
            <div class="navs">
                <a href="userlist.php" class="navbarlink">
                    <span>UserList</span>
                </a>
            
            </div>
            <div class="button">
                <a href="register.php" class="btn">register</a>
                <a href="logouts.php" class="btn">logout</a>
            </div>

        

            <!-- NavBar-->
            <div class="navbar">
                
                <a href="admin_page.php" class="navbarlink">
                    <span>Home</span>
                </a>
                <a href="adminlist.php" class="navbarlink">
                    <span>AdminList</span>
                </a>
                <a href="categorylist.php" class="navbarlink">
                    <span>Category</span>
                </a>
                <a href="genrelist.php" class="navbarlink">
                    <span>Genre</span>
                </a>
                <a href="movielist.php" class="navbarlink">
                    <span>Movie</span>
                </a>
            </div>
        </div>
        <hr>
    </header>

</body>

</html>
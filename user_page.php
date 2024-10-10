<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieTic</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?> ">
    <!-- Link to Swiper CSS-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css ">


    <!---fav Icon-->
    <link rel="shortcut icon" href="img/popcorn.jpeg" type="image/x-icon">
    <!-- Box Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <!--Header-->
    <header>
        <!--Nav-->
        <div class=" nav container">
            <!--Logo-->
            <a href="#" class="logo">
                Movie<span>Tic</span>
            </a>
            <!-- Search Box -->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search Movie">
                <i class="search-logo fa-solid fa-magnifying-glass"></i>
            </div>
            <a href="#" class="user">
                <img src="img/Robot.png" alt="" class="user-img">
            </a>
            <a href="index.php" class="login">
                <input type="submit" class="login-btn" value="Logout">
            </a>
            <!-- NavBar-->
            <div class="navbar">
                <a href="user_page.php#home" class="nav-link nav-active">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="user_page.php#popular" class="nav-link">
                    <i class="fa-solid fa-fire"></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="user_page.php#movies" class="nav-link">
                    <i class="fa-solid fa-compass"></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="play-page.php" class="nav-link">
                    <i class="fa-solid fa-tv"></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class="fa-solid fa-heart"></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
            </div>
        </div>
    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <!-- Home Image-->
        <img src="img/RRR2.jpeg" alt="" class="home-img">
        <!-- Home Text -->
        <div class="home-text">
            <h1 class="home-title">RRR(Hindi)</h1>
            <p>Releasing 24 March 2022</p>
            <a href="play-page.php" class="watch-btn">
                <i class="fa-sharp fa-solid fa-caret-right"></i>
                <span>Watch the trailer</span>
            </a>
        </div>
    </section>
    <!--- HOME END-->
    <!--- Popular Section Start-->
    <section class="popular container" id="popular">
        <!-- heading -->
        <div class="heading">
            <h2 class="heading-title">Popular Movies</h2>
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <!--Content-->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!-- Movies Box 1 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/kgf1.jpeg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">KGF Chapter 2</h2>
                            <span class="movie-type">Drama,Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="fa-sharp fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 2 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/Karthikeya 2 .jpeg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">KGF Chapter 2</h2>
                            <span class="movie-type">Drama,Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="fa-sharp fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 3 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/vikram.jpeg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">KGF Chapter 2</h2>
                            <span class="movie-type">Drama,Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="fa-sharp fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 4    -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/Vikrant Rona.jpeg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">KGF Chapter 2</h2>
                            <span class="movie-type">Drama,Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="fa-sharp fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 5    -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/Pushpa.jpeg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">KGF Chapter 2</h2>
                            <span class="movie-type">Drama,Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="fa-sharp fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 6 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/DBS-SH.jpeg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">KGF Chapter 2</h2>
                            <span class="movie-type">Drama,Action</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="fa-sharp fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--- Popular Section End-->
    <!-- Movies Section Start-->
    <section class="movies container" id="movies">
        <div class="heading">
            <h2 class="heading-title">Movies And Shows</h2>
        </div>
        <!-- Movies content -->
        <div class="movies-content">
            <!-- Movies Box 1 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/gangubai kathiawadi .jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Gangubai Kathiawadi</h2>
                        <span class="movie-type">Drama,Romantic</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 2 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/mirzapur2.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Mirzapur Season 2</h2>
                        <span class="movie-type">Action,Gangster</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 3 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/shershaah.jpeg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Shershaah</h2>
                        <span class="movie-type">Action,Romantic</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 4 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/familyman.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Family Man 2</h2>
                        <span class="movie-type">Action,Thriller</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 5 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/83.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">83</h2>
                        <span class="movie-type">Sport,Drama</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 6 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/kotafactory2.jpg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Kota Factory Season 2</h2>
                        <span class="movie-type">Educstion,Drama,Romantic</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 7 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/Karthikeya 2 .jpeg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Karthikeya 2</h2>
                        <span class="movie-type">Adventure,Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 8 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/Pushpa.jpeg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Pushpa</h2>
                        <span class="movie-type">Gangster,Action,Romantic</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 9 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/vikram.jpeg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Vikram</h2>
                        <span class="movie-type">Action,Gangster</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Movies Box 10 -->
            <div class="swiper-slide">
                <div class="movie-box">
                    <img src="img/Vikrant Rona.jpeg" alt="" class="movie-box-img">
                    <div class="box-text">
                        <h2 class="movie-title">Vikrant Rona</h2>
                        <span class="movie-type">Adventure,Drama,Action</span>
                        <a href="#" class="watch-btn play-btn">
                            <i class="fa-sharp fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Movies Section End-->
    <!-- Next Page -->
    <div class="next-page">
        <a href="#" class="next-btn">Next Page</a>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; MovieTic All Right Reserved</p>
    </div>


    <!-- Link to Swiper Js -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Link to Js -->
    <script src="js/main.js"></script>

</body>

</html>
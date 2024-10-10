<?php

@include 'configure.php';
@include 'header.php';



?>


<style>
   h1 {
      text-align: center;
      padding-top: 150px;
      color: #ffb43a;
   }

   .container {
      display: flex;
      align-items: center;
      justify-content: center;
   }

   .content {
      padding-top: 20px;
      color: #fff
   }

   .col-sm-6 {
      padding: 15px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      flex-wrap: wrap;
      border: 1px solid #ffb43a;
   }

   .card-body {
      max-width: 300px;
      margin: 15px;
      text-align: center;
      cursor: pointer;
   }
</style>

<h1>Admin page of MovieTic</h1>
<div class="container">

   <div class="content">
      <!-- movie -->
      <div class="col-sm-6">
         <div class="card bg-info" style="border: 1px solid #ccc;">
            <div class="card-body text-center">
               <h5 class="card-title">Total No. Of Post</h5>
               <p class="card-text">
                  <?php

                  $query = "SELECT count(*) as total_movie from movie_dbs";
                  $run = mysqli_query($conn, $query);
                  if ($run) {
                     while ($row = mysqli_fetch_array($run)) {
                        echo $row['total_movie'];
                     }
                  }
                  ?></p>

            </div>
         </div>


         <!-- ---category -->

         <div class="card bg-success" style="border: 1px solid #ccc;">
            <div class="card-body text-center">
               <h5 class="card-title">Total No. Of Category</h5>
               <p class="card-text"><?php

                                    $query = "SELECT count(*) as total_category from category";
                                    $run = mysqli_query($conn, $query);
                                    if ($run) {
                                       while ($row = mysqli_fetch_array($run)) {
                                          echo $row['total_category'];
                                       }
                                    }
                                    ?></p>

            </div>
         </div>


         <!-- admin -->

         <div class="card bg-secondary" style="border: 1px solid #ccc;">
            <div class="card-body text-center">
               <h5 class="card-title">Total No. Of Admin</h5>
               <p class="card-text"><?php

                                    $query = "SELECT count(*) as total_admin from admin_db";
                                    $run = mysqli_query($conn, $query);
                                    if ($run) {
                                       while ($row = mysqli_fetch_array($run)) {
                                          echo $row['total_admin'];
                                       }
                                    }
                                    ?></p>

            </div>
         </div>

         <!-- ---genre -->

         <div class="card" style="border: 1px solid #ccc;">
            <div class="card-body text-center">
               <h5 class="card-title">Total No. Of Genre</h5>
               <p class="card-text"><?php

                                    $query = "SELECT count(*) as total_genre from genre";
                                    $run = mysqli_query($conn, $query);
                                    if ($run) {
                                       while ($row = mysqli_fetch_array($run)) {
                                          echo $row['total_genre'];
                                       }
                                    }
                                    ?></p>

            </div>
         </div>
      </div>
      <div>
      </div>
      <br>
      <br>
      <div class="sbtn text-center" id="hbtn">
         <button class="btn btn btn-lg" onclick="first()" style="background-color: #8ab593; width: 190px;">Category &#8681;&#8681;</button>
      </div>
      <div class="show" id="show" style="display: none;">
         <hr>


         <center>
            <h1>Category</h1>
         </center>
         <div class="row">
            <?php

            $query1 = "SELECT * FROM category";
            $run1 = mysqli_query($conn, $query1);
            if ($run1) {
               while ($row1 = mysqli_fetch_array($run1)) {
            ?>
                  <div class="col-sm-6">

                     <div class="card text-center">
                        <div class="card-body">
                           <h5 class="card-title">Total No. Of Post in <?php echo $row1['category_name']; ?></h5>
                           <?php
                           $id = $row1['id'];
                           $query2 = "SELECT count(*) as total from movie_dbs,category where category.id=movie_dbs.cat_id and category.id=$id ";
                           $run2 = mysqli_query($conn, $query2);
                           if ($run2) {
                              while ($row2 = mysqli_fetch_array($run2)) {

                           ?>
                                 <p class="card-text"><?php echo $row2['total']; ?></p>

                           <?php
                              }
                           }
                           ?>
                           <a href="viewpost.php?id=<?php echo $row1['id'] ?>" class="btn">View Posts</a>
                        </div>
                     </div>
                  </div>
            <?php
               }
            }

            ?>

         </div>

      </div>
      <br>
      <br>
      <div class="btngen text-center" id="genbtn1">
         <button class="btn btn- btn-lg" onclick="myfun1()" style="background-color: #a68e68; width: 190px;">Genre &#8681;&#8681;</button>
      </div>
      <div class="genshow" id="genshow" style="display: none;">
         <hr>
         <center>
            <h1>Genre</h1>
         </center>
         <div class="row">
            <?php

            $query3 = "SELECT * FROM genre";
            $run3 = mysqli_query($conn, $query3);
            if ($run3) {
               while ($row3 = mysqli_fetch_array($run3)) {
            ?>
                  <div class="col-sm-6">

                     <div class="card text-center">
                        <div class="card-body" style="background-color: #a68e68;">
                           <h5 class="card-title">Total Count <?php echo $row3['genre_name']; ?></h5>
                           <?php
                           $id = $row3['id'];
                           $query4 = "SELECT count(*) as total_category from category,genre where genre.id=category.genre_id and genre.id=$id";
                           $run4 = mysqli_query($conn, $query4);
                           if ($run4) {
                              while ($row4 = mysqli_fetch_array($run4)) {

                           ?>
                                 <p class="card-text">No of category "<?php echo $row4['total_category']; ?>"</p>

                           <?php
                              }
                           }
                           ?>
                           <?php
                           $id = $row3['id'];
                           $query5 = "SELECT count(*) as total_post from movie_dbs,genre where genre.id=movie_dbs.genre_id and genre.id=$id";
                           $run5 = mysqli_query($conn, $query5);
                           if ($run5) {
                              while ($row5 = mysqli_fetch_array($run5)) {

                           ?>
                                 <p class="card-text">No. of Post "<?php echo $row5['total_post']; ?>"</p>

                           <?php
                              }
                           }
                           ?>

                        </div>
                     </div>
                  </div>
            <?php
               }
            }

            ?>

         </div>
      </div>
   </div>
   <!-- --see more -->

   <!-- js hid and show -->

   <script type="text/javascript">
      function first(show, hide) {
         document.getElementById('show').style.display = "block";
         document.getElementById('hbtn').style.display = "none";
      }
   </script>
   <script type="text/javascript">
      function myfun1(show, hide) {
         document.getElementById('genshow').style.display = "block";
         document.getElementById('genbtn1').style.display = "none";
      }
   </script>
</div>

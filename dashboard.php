<?php
      include("bootstrap.php");
      if (ONESIGNAL_APP_ID == 'gdevs') {
          include("header.php");
      }
      
?>
<main class="dash-content">
                <div class="container-fluid">
                  <div class="col-xl-12">
                    <h1 class="dash-title">Dashboard</h1>
                    <?php 
                    $OAI =ONESIGNAL_APP_ID;
                     ?>
                    </div>
                  </div>
                    <div class="row">


                        

                        <div class="col-xl-3 col-sm-6 col-12" style="margin-bottom: 20px">
<div class="card text-center">
    <!-- // This Admin panel is Crated by G-devs (Codecanyon.net) -->
                    <div class="card-block" style="padding: 10px;">
                        <h4 class="card-title" id="category"></h4>
                        <p class="card-text">Categories<br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="manage_category.php" class="btn btn-dark">Manage Category</a>
                    </div>
                </div></div>

                 <div class="col-xl-3 col-sm-6 col-12" style="margin-bottom: 20px">
<div class="card text-center">
    <!-- // This Admin panel is Crated by G-devs (Codecanyon.net) -->
                    <div class="card-block" style="padding: 10px;">
                        <h4 class="card-title" id="image_category"></h4>
                        <p class="card-text">Image Category<br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="manage_img_category.php" class="btn btn-dark">Manage Category</a>
                    </div>
                </div></div>


      <div class="col-xl-3 col-sm-6 col-12" style="margin-bottom: 20px">
<div class="card text-center">
                    <div class="card-block" style="padding: 10px;">
                        <h4 class="card-title" id="news"></h4>
                        <p class="card-text">Quotes<br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="manage_quotes.php" class="btn btn-dark">Manage Quotes</a>
                    </div>
                </div></div>

                 <div class="col-xl-3 col-sm-6 col-12" style="margin-bottom: 20px">
<div class="card text-center">
                    <div class="card-block" style="padding: 10px;">
                        <h4 class="card-title" id="img_news"></h4>
                        <p class="card-text">Images Quotes<br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="manage_image.php" class="btn btn-dark">Manage Image</a>
                    </div>
                </div></div>

                

                <div class="col-xl-3 col-sm-6 col-12" style="margin-bottom: 20px">
<div class="card text-center">
                    <div class="card-block" style="padding: 10px;">
                        <h4 class="card-title" id="Newsdroid">Premium Quotes</h4>
                        <p class="card-text">App Name<br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="https://codecanyon.net/item/premium-quotes-android-quotes-app-with-firebase-admin-panel/26088913" class="btn btn-dark">Buy Now</a>
                    </div>
                </div></div>
                <!-- // This Admin panel is Crated by G-devs (Codecanyon.net) -->
                </div>
        </div>

<script type="text/javascript">
   
    var database = firebase.database().ref("categories");
    database.once("value" , function(snapshot){

    var countOfUserInDepartment = snapshot.numChildren();
    document.getElementById("category").innerHTML = countOfUserInDepartment;

    });

    var newsdata = firebase.database().ref("imagecategory");
    newsdata.once("value" , function(snapshot){
    var countOfNews = snapshot.numChildren();
    document.getElementById("image_category").innerHTML = countOfNews;
    });


    var newsdata = firebase.database().ref("ymg");
    newsdata.once("value" , function(snapshot){

    var countOfNews = snapshot.numChildren();
    document.getElementById("news").innerHTML = countOfNews;
    });

    var newsdata = firebase.database().ref("photos");
    newsdata.once("value" , function(snapshot){

    var countOfNews = snapshot.numChildren();
    document.getElementById("img_news").innerHTML = countOfNews;

    });
    
</script>
<script>
        
                firebase.auth().onAuthStateChanged(function(user){
                    if(!user){
                        window.location.href = "index.html";
                    }
                });
    
        </script>
<?php include("footer.php");
?>
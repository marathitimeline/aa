<?php 

  include "codehead.php";

 if (isset($_GET['del_id'])) {

	# code...
	$id = $_GET['del_id'];
	echo "  wait Reloading...";


 ?>

 <input type="hidden" name="name" id="myText" value="<?php echo $id ?>">

 <?php } ?>

 <!--  This Admin panel is Crated by G-devs (Codecanyon.net) -->

 <script>
 	var x = document.getElementById("myText").value;
    alert("Deleted Data Successfully");
    var dbCategories1 = firebase.database().ref("photos");
   dbCategories1.on("value", function(categories){

   	categories.forEach(function(category){
    firebase.database().ref('photos/'+x+'/') 
      .remove()
        window.location="manage_image.php"; 

    });

    // This Admin panel is Crated by G-devs (Codecanyon.net)
   
      });
</script>
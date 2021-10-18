 <?php

$email=$_SESSION['sid'];
$fo=fopen("users/$email/details.txt","r");
fgets($fo);fgets($fo);fgets($fo);fgets($fo);

$img_add=fgets($fo);
// echo $img_add;

 ?>
 
 
 
 
 
 
 
 <div class="list-group">
  <a href="?con=cimg" class="list-group-item list-group-item-action"><img src="<?php echo $img_add ?>"alt="" width="200px" height="200px" class="ml-5" style="border-radius:50%;">Change image</a>
  <a href="?con=orders" class="list-group-item list-group-item-action">Name</a>
  <a href="?con=feedback" class="list-group-item list-group-item-action">Age</a>
  <a href="?con=feedback" class="list-group-item list-group-item-action">Gender</a>  
  
  <a href="?con=image" class="list-group-item list-group-item-action">Image</a>  
</div> 

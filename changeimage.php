<?php
if(isset($_POST['sub']))
{
    
$email=$_SESSION['sid'];
$fo=fopen("users/$email/details.txt","r");
$a1=trim(fgets($fo));
$a2=trim(fgets($fo));
$a3=trim(fgets($fo));
$a4=trim(fgets($fo));
$img=trim(fgets($fo));

$tmp=$_FILES['att']['tmp_name'];
$fn=$_FILES['att']['name'];
$ext=pathinfo($fn,PATHINFO_EXTENSION);
$fname="image-".time()."-".rand().".$ext";

move_uploaded_file($tmp,"users/$email/$fname");

$fo=fopen("users/$email/details.txt","w");

fwrite($fo,"$a1\n$a2\n$a3\n$a4\n"."users/$email/$fname");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" enctype="multipart/form-data">

   <input type="file" name="att">
   <input type="submit" value="change" name="sub">
   </form>
</body>
</html>


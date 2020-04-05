<?php
session_start();

$con= mysql_connect("localhost","root","") or die("does not exist") ;
mysql_select_db("clg_edu" ,$con);
$result= mysql_query("clg_edu",$con);

  $a = $_SESSION['uid'];
	$name  = $_FILES["myfile"]["name"];
	$type  = $_FILES["myfile"]["type"];
	$size  = $_FILES["myfile"]["size"];
	$temp  = $_FILES["myfile"]["tmp_name"];
	$error = $_FILES["myfile"]["error"];

if ($error > 0) {
  die("Uploading Error");
}
else {
  move_uploaded_file($temp,"uploaded/".$name);
  echo "upload complete";

  $qwer_sel = "SELECT * FROM `user_img` WHERE user_id = '$a' ";
  $qwer_get = mysql_query($qwer_sel,$con);
  echo $num = mysql_num_rows($qwer_get);

  if ($num > 0) {
      $upd = "UPDATE `user_img` SET img_name = '$name' WHERE user_id = '$a' ";
      $upd_qwe = mysql_query($upd,$con);
  }
  else
  {
  $qwer_img = "INSERT into `user_img`(user_id,img_name)
  values ('$a','$name')";

  $res_img = mysql_query($qwer_img,$con);
  }

}

header("location:profile.php");
?>

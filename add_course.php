<?php
include("header.php");
include("head.php");

$cou_id = $_GET['id'];

$get_cou = mysql_query("SELECT * FROM `course` WHERE id ='$cou_id' && status = '1' ",$con);
$see = mysql_fetch_array($get_cou);
$mod = $see[3];
// Upload file Content
if (isset($_POST["submit"])) {


$name  = $_FILES["myfile"]["name"];
$type  = $_FILES["myfile"]["type"];
$size  = $_FILES["myfile"]["size"];
$temp  = $_FILES["myfile"]["tmp_name"];
$error = $_FILES["myfile"]["error"];

$module = $_POST["module"];

if ($error > 0) {
die("Uploading Error");
}
else {
move_uploaded_file($temp,"upload/".$name);
//echo "upload complete";


$qwer_mod = "INSERT into `course_data`(course_id,mod_num,file)
values ('$cou_id','$module','$name')";

$res_img = mysql_query($qwer_mod,$con);


}

}



?>
<body>
  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="banner_content text-center">
              <h2><?=$see[1]; ?></h2>
              <h4><?=$see[2]; ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
<hr>

<!--  -->
<div class="container">
  <div class="section-top-border">
      <div class="row">
        <div class="col-lg-8 col-md-8" style="text-align:center;">
          <h3 class="mb-30 title_color">Add Content Of The Course</h3>

          <form method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-6">
              <label for="inputState">Module</label>
              <select name="module" class="form-control">
                <option selected>Choose Module</option>
                <?php
                  for ($i=1; $i <= $mod ; $i++) {
                ?>
                    <option value="<?=$i; ?>"><?=$i; ?></option>
                <?php
                  }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input type="file" name="myfile" required="true">
            </div>
            <div class="form-group" >
            <input type="submit" name="submit" class="btn btn-lg btn-primary like" value="Rigister"/>
            </div>
          </form>
        </div>
       </div>
      </div>
    </div>
<!--  -->

<!-- <iframe src="uploaded/JCTSL Routes.pdf" width="500px" height="500px"></iframe> -->


</body>





</php

include("footer.php");
?>

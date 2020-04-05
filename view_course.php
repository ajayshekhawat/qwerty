<?php
include("header.php");
include("head.php");

$cou_id = $_GET['id'];
$num_mod = 0;
$get_cou = mysql_query("SELECT * FROM `course` WHERE id ='$cou_id' && status = '1' ",$con);
$see = mysql_fetch_array($get_cou);
$mod = $see[3];
// Upload file Content
if (isset($_POST["submit"])) {



$module = $_POST["module"];


$qwer_mod = "SELECT * FROM `course_data` WHERE course_id = '$cou_id' && mod_num = '$module'";
$res_img = mysql_query($qwer_mod,$con);
$num_mod = mysql_num_rows($res_img);

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
          <h3 class="mb-30 title_color">All The Modules Of The Course</h3>

          <form method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-6">
              <label for="inputState">Module</label>
              <select name="module" class="form-control" required="true">
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
            <div class="form-group" >
            <input type="submit" name="submit" class="btn btn-md btn-primary like" value="View Module"/>
            </div>
          </form>
        </div>
       </div>
      </div>
    </div>
<!--  -->

<?php
if ($num_mod > 0) {

  while ($mod_img = mysql_fetch_assoc($res_img)) {

  ?>

  <iframe src="upload/<?=$mod_img['file']; ?>" width="500px" height="500px"></iframe>
<?php
}
}
else {
  echo "No data found";
}
?>


</body>





</php

include("footer.php");
?>

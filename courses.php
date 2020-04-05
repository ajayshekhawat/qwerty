<?php
include("header.php");
include("head.php");

if (isset($_POST["submit"])) {
  $name     = $_POST["course_name"];
  $details  = $_POST["details"];
  $module   = $_POST["modules"];

  $ins = mysql_query("INSERT INTO `course`(name,details,modules)
  VALUES('$name','$details','$module') ",$con);

}

    $get      = mysql_query("SELECT * FROM `course` WHERE status ='1' ",$con);

?>
  <body>

    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Courses</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="courses.html">Courses</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Popular Courses</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
            <div class="main_title">
              <button type="button" class="btn btn-primary" name="button"
              data-toggle="modal" data-target="#mymodal" >Create Course</button>
            </div>
          </div>
        </div>

        <!-- </div>
      </div> -->
    <!--================ End Popular Courses Area =================-->
    <!--================ Start Popular Courses Area =================-->
    <!-- <div class="popular_courses section_gap_top">
      <div class="container"> -->
      <div class="row">
        <?php
        while ($get_show = mysql_fetch_assoc($get)) {
          ?>
        <div class="col-lg-4 col-md-6">
              <div class="single_feature">
                <div class="icon"><span class="flaticon-student"></span></div>
                <div class="desc">
                  <h4 class="mt-3 mb-2"><?=$get_show['name']; ?></h4>
                  <p>
                    <?=$get_show['details']; ?>(<?=$get_show['modules']; ?>)
                  </p>
                  <div class="row">
                    <div class="col-md-6">

                    <a href="add_course.php?id=<?=$get_show['id']; ?>">
                    <button type="button"
                    class="btn" name="button">Add Content</button>
                    </a>
                  </div>
                    <div class="col-md-6">

                    <a href="view_course.php?id=<?=$get_show['id']; ?>">
                    <button type="button"
                    class="btn" name="button">View Content</button>
                    </a>
                  </div>

                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Popular Courses Area =================-->
    <!-- Modal Start -->
    <div class="modal fade" id="mymodal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create a course</h4>
          </div>
          <div class="modal-body">

            <form method="POST" >
              <div class="mt-10">
                <input type="text" name="course_name" placeholder="Course Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
              </div>
              <div class="mt-10">
                <input type="text" name="details" placeholder="Course Details" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
              </div>
              <div class="mt-10">
                <input type="number" name="modules" placeholder="Number Of Modules" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="" class="single-input">
              </div>
          </div>
          <div class="modal-footer">

              <input type="submit" name="submit" class="btn btn-primary  like" value="Create">
            <button type="button" class="btn btn-primary" name="button" data-dismiss="modal">&times;</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal End -->
</body>
<?php
include("footer.php");
?>
<!-- <script>
function myFunction() {
  var q,x;
  x = document.getElementById("demo").innerHTML;
  //document.write (x);
  //x.style.color = "red";
  <?php //$abs = x;
  //echo $abs;
    ?>
}
</script>
<?php
//echo $ab ="<script>document.write(x)</script>";
?> -->

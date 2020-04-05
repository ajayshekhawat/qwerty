<?php
include("header.php");
include("head.php");

$get_cou = mysql_query("SELECT * FROM `course` WHERE status = '1' ",$con);

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
              <h2>Your Content</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
<!--  -->
<section class="feature_area section_gap_top title-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Notes</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
          while ($a = mysql_fetch_assoc($get_cou) ) {

            ?>
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2"><?=$a['name']; ?></h4>
                <p>
                  <?=$a['details']; ?>(<?=$a['modules']; ?>)
                </p>
                <a href="../view_course.php?id=<?=$a['id']; ?>">
                <button type="button"
                class="btn" name="button">View Content</button>
                </a>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
        </div>
      </div>
    </section>

<!--  -->
</body>
<?php
include("footer.php");
?>

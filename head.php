<?php
$a = $_SESSION['end'];
$name = $_SESSION['name'];
$id = $_SESSION['uid'];

$con= @mysql_connect("localhost","root","") or die("does not exist") ;
mysql_select_db("clg_edu" ,$con);
$result= mysql_query("clg_edu",$con);

$qwer = "SELECT * FROM `user` where id = '$id' ";

$qwer_new = "SELECT * FROM `user` where status =0 ";
$result_new = mysql_query($qwer_new, $con);
$ans = mysql_num_rows($result_new);

$result = mysql_query($qwer, $con);

$row = mysql_fetch_array($result);

$result2 = mysql_query("SELECT * FROM user WHERE user = 1 && status = 2 ", $con);
$d_ans = mysql_num_rows($result2);
//$row[1];
?>

<!--================ Start Header Menu Area =================-->
<header class="header_area">
  <div class="main_menu">

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="index.php"
          ><img src="img/logo.png" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div
          class="collapse navbar-collapse offset"
          id="navbarSupportedContent"
        >
          <ul class="nav navbar-nav menu_nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active" >
              <a class="nav-link" href="about-us.php">About</a>
            </li>
            <?php
            if($row[1] == 0)
            {  $loc = "admin.php";     }
            else {
               $loc = "landing.php";
            }

             if($a == "0" ){ ?>
            <li class="nav-item active">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="log_in.php">Log In</a>
            </li>
            <?php }


            else { ?>
              <li class="nav-item submenu dropdown active">
                <a
                  href="<?=$loc; ?>"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown"
                  role=""
                  aria-haspopup=""
                  aria-expanded=""
                  ><?=$name; ?></a
                >
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="landing.php">View Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="upgrade.php">Upgrade</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profile.php">Update Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pas_chg.php"
                      >Update Password</a
                    >
                  </li>
                </ul>
              </li>
              <?php if ($row[1] == 1){ ?>
                <li class="nav-item active" >
                  <a class="nav-link" href="content/index.php">Content</a>
                </li>
                <?php } ?>
              <?php if ($row[1] == 0){ ?>
                <li class="nav-item active" >
                  <a class="nav-link" href="courses.php">Content</a>
                </li>
                <li class="nav-item submenu dropdown active">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Users</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="new_user.php">New Users(<?=$ans; ?>)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="delete.php">Deleted User(<?=$d_ans; ?>)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pas_chg.php"
                        >Update Password</a
                      >
                    </li>
                  </ul>
                </li>
              <?php } ?>

              <li class="nav-item active">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
             <?php  } ?>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<!--================ End Header Menu Area =================-->

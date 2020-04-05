<?php
include("header.php");
include("head.php");

if(isset($_POST["submit"]))
{


        $con= mysql_connect("localhost","root","") or die("does not exist") ;
        mysql_select_db("clg_edu" ,$con);
        $result= mysql_query("clg_edu",$con);

      $email = $_POST["email"];
      $password = $_POST["password"];

      $qwer = "SELECT * FROM `user` where email = '$email' AND password = '$password' ";

      $result = mysql_query($qwer, $con);

      $row = mysql_fetch_array($result);

      if (!$row) {
        //echo "Sorry this does not match any of them";
      }
      else {
        $_SESSION['uid'] = $row[0];
        $_SESSION['name'] = $row[2];
        $_SESSION['end'] = 1;
        if ($row[1] == 0)
        {
          header("location:admin.php");
        }
        else
        {
          header('location:landing.php');
        }

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
                  <h2>Log In</h2>
                  <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="contact.html">Contact</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================End Home Banner Area =================-->
      <!--================Register Banner Area =================-->
    <div class="container">
      <div class="section-top-border">
  				<div class="row">
  					<div class="col-lg-8 col-md-8" style="text-align:center;">
  						<form method="POST" >
  							<div class="mt-10">
  								<input type="EMAIL" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
  							</div>
  							<div class="mt-10">
  								<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
  							</div>
  							<div class="mt-10" style="text-align:right;" >
                <input type="submit" name="submit" class="btn btn-md btn-primary like" value="Log In"/>
  							</div>
              </form>
            </div>
           </div>
  				</div>
  			</div>
  		</div>
		</div>
</body>


<?php
include("footer.php");
 ?>

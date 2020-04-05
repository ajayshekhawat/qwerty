<?php
include("header.php");
include("head.php");
$message = 1;
if(isset($_POST["submit"]))
{


        $con= mysql_connect("localhost","root","") or die("does not exist") ;
        mysql_select_db("clg_edu" ,$con);
        $result= mysql_query("clg_edu",$con);

      $name = $_POST["first_name"];
      $lname = $_POST["last_name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $phone = $_POST["phone"];
      $address = $_POST["address"];
      $city = $_POST["city"];
      $country = $_POST["country"];

//echo $phone;

      //
      // $sql = "SELECT email FROM user";
      // $resul = mysql_query($sql);
      // $rew = mysql_fetch_array($resul);
      // echo $rew[3];

      $sql=mysql_query("select email from user where email='$email'");
      $return=mysql_num_rows($sql);
      //if $return returns true value it means user's email already exists
      if($return)
      {
      $message="<font color='red'>".ucfirst($email)." already exists choose another email</font>";
      }
      else
      {






      $qwer = "INSERT into `user`(name,l_name,email,password,phone,address,city,country,status)
      values ('$name','$lname','$email','$password','$phone','$address','$city','$country','0')";

      $result = mysql_query($qwer, $con);
      if ($result) {
        $message = '<div class="alert alert-success">Success</div> ';
      }
      else {
        $message = '<div class="alert alert-danger">Error</div> ';
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
                  <h2>Register Here</h2>
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
  						<h3 class="mb-30 title_color">Enroll Here</h3>

              <?php
              if ($message != 1) {
                echo $message;
              }

              ?>

  						<form method="POST" >
  							<div class="mt-10">
  								<input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
  							</div>
  							<div class="mt-10">
  								<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
  							</div>
  							<div class="mt-10">
  								<input type="EMAIL" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
  							</div>
  							<div class="mt-10">
  								<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
  							</div>
  							<div class="mt-10">
  								<input type="number" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="" class="single-input">
  							</div>
  							<div class="input-group-icon mt-10">
  								<div class="icon"><i class="ti-location-pin" aria-hidden="true"></i></div>
  								<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input">
  							</div>
  							<div class="mt-10">
  								<input type="text" name="city" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" required="" class="single-input">
  							</div>
  							<div class="mt-10">
  								<input type="text" name="country" placeholder="Country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'COuntry'" required="" class="single-input">
  							</div>
  							<div class="mt-10" >
                <input type="submit" name="submit" class="btn btn-lg btn-primary like" value="Rigister"/>
  							</div>
              </form>
            </div>
           </div>
  				</div>
  			</div>

</body>


<?php
include("footer.php");
 ?>

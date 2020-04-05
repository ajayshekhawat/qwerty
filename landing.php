<?php
//session_start();
include("header.php");
include("head.php");
//echo "hello";
$a = $_SESSION['uid'];
$name = $_SESSION['name'];

if ($_SESSION['uid'] == "") {
  header("location:index.php");
}
$con= mysql_connect("localhost","root","") or die("does not exist") ;
mysql_select_db("clg_edu" ,$con);
$result= mysql_query("clg_edu",$con);

$qwer = "SELECT * FROM `user` where id = '$a' ";

$result = mysql_query($qwer, $con);

$row = mysql_fetch_array($result);

$qwer_img = "SELECT * FROM `user_img` where user_id = '$a' ";

$result_img = mysql_query($qwer_img, $con);

$row_img = mysql_fetch_array($result_img);


//echo $a;
?>


<!--================ Start Header Menu Area =================-->
<header class="header_area">
  <div class="main_menu">

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div
          class="collapse navbar-collapse offset"
          id="navbarSupportedContent"
        >
          <ul class="nav navbar-nav menu_nav ml-auto">


          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<!--================ End Header Menu Area =================-->

<!-- <div class="container" style="
padding-top: 100px;">
  <div class="row">
    <div class="col-md-12" >
      <table border="1px">
        <tr>
          <th>Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>City</th>
          <th>Country</th>
        </tr>
        <tr>
          <td><?=$row[2]; ?></td>
          <td><?=$row[3]; ?></td>
          <td><?=$row[4]; ?></td>
          <td><?=$row[6]; ?></td>
          <td><?=$row[7]; ?></td>
          <td><?=$row[8]; ?></td>
          <td><?=$row[9]; ?></td>
        </tr>
      </table>
    </div>
  </div>
</div> -->
<!--  -->
<div class="container" style="
padding-top: 100px;">
  <div class="row">
    <div class="col-md-6" >
      <form class="" action="" method="post">
        <table border="0px;">
          <tr>
            <th width = "200px;">Profile Picture</th>
              <td width = "400px;">
                <div class="mt-10">
    								<img src="uploaded/<?=$row_img[3] ?>" alt="" class="img-fluid">
                   </div>
              </td>
            </tr>
          <tr>
            <th width = "200px;">Name</th>
              <td width = "400px;">
                <div class="mt-10">
    								<input type="text" name="first_name" placeholder=""
                     onfocus="this.placeholder = '<?php echo $row[2]." ";
                     echo $row[3]; ?>'"
                     value="<?php echo $row[2]." ";
                     echo $row[3]; ?>"
                      onblur="this.placeholder = '<?php echo $row[2]." ";
                      echo $row[3]; ?>'"
                     required="" class="single-input" disabled="true">
                   </div>
              </td>
            <!-- </tr>
            <tr>
              <th>Last Name</th>
                <td>
                  <div class="mt-10">
                      <input type="text" name="last_name" placeholder=""
                       onfocus="this.placeholder = '<?=$row[3]; ?>'"
                       value="<?=$row[3]; ?>"
                        onblur="this.placeholder = '<?=$row[3]; ?>'"
                       required="" class="single-input" disabled="true">
                  </div>
                </td>
            </tr> -->
            <tr>
            <th>Email</th>
              <td>
                <div class="mt-10">
                    <input type="email" name="email" placeholder=""
                     onfocus="this.placeholder = '<?=$row[4]; ?>'"
                     value="<?=$row[4]; ?>"
                      onblur="this.placeholder = '<?=$row[4]; ?>'"
                     required="" class="single-input" disabled="true">
                  </div>
              </td>
          </tr>
          <tr>
            <th>Phone</th>
              <td>
                <div class="mt-10">
                    <input type="number" name="phone" placeholder=""
                     onfocus="this.placeholder = '<?=$row[6]; ?>'"
                     value="<?=$row[6]; ?>"
                      onblur="this.placeholder = '<?=$row[6]; ?>'"
                     required="" class="single-input" disabled="true">
                  </div>
              </td>
          </tr>
          <tr>
            <th>Address</th>
              <td>
                <div class="mt-10">
                    <input type="text" name="address" placeholder=""
                     onfocus="this.placeholder = '<?=$row[7]; ?>'"
                     value="<?=$row[7]; ?>"
                      onblur="this.placeholder = '<?=$row[7]; ?>'"
                     required="" class="single-input" disabled="true">
                  </div>
              </td>
          </tr>
          <tr>
            <th>City</th>
              <td>
                <div class="mt-10">
                    <input type="text" name="city" placeholder=""
                     onfocus="this.placeholder = '<?=$row[8]; ?>'"
                     value="<?=$row[8]; ?>"
                      onblur="this.placeholder = '<?=$row[8]; ?>'"
                     required="" class="single-input" disabled="true">
                  </div>
              </td>
          </tr>
          <tr>
            <th>Country</th>
            <td>
              <div class="mt-10">
                  <input type="text" name="country" placeholder=""
                   onfocus="this.placeholder = '<?=$row[9]; ?>'"
                   value="<?=$row[9]; ?>"
                    onblur="this.placeholder = '<?=$row[9]; ?>'"
                   required="" class="single-input" disabled="true">
                </div>
            </td>
          </tr>
          <!-- <tr>
            <th>      </th>
            <td>
              <div class="mt-10" style="text-align:right;" >
                <input type="submit" name="submit"/>
              </div>
            </td>
          </tr> -->
        </table>
      </form>
    </div>
    <!-- <div class="col-md-6">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <table border="0px;">
          <tr>
            <th>Choose File</th>
            <td>
              <div class="mt-10">
                  <input type="file" name="myfile">
                </div>
            </td>
          </tr>
          <tr>
            <th>      </th>
            <td>
              <div class="mt-10" style="text-align:right;" >
                <input type="submit" name="submit" value="upload"/>
              </div>
            </td>
          </tr>
        </table>
      </form> -->
    </div>
  </div>
</div>


<!--  -->

<?php
include("footer.php");
?>

<?php
include("header.php");
include("head.php");
if ($_SESSION['uid'] == "") {
  header("location:index.php");
}
$con= mysql_connect("localhost","root","") or die("does not exist") ;
mysql_select_db("clg_edu" ,$con);
$result= mysql_query("clg_edu",$con);


$a = $_SESSION['uid'];


$qwer = "SELECT * FROM `user` where id = '$a' ";

$result = mysql_query($qwer, $con);

$row = mysql_fetch_array($result);

$qwer_img = "SELECT * FROM `user_img` where user_id = '$a' ";

$result_img = mysql_query($qwer_img, $con);

$row_img = mysql_fetch_array($result_img);

if(isset($_POST['submit']))
{

        $name = $_POST["first_name"];
        $lname = $_POST["last_name"];
        //$email = $_POST["email"];
        //$password = $_POST["password"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $country = $_POST["country"];

        $qwer1 = "UPDATE `user` SET name = '$name', l_name = '$lname', phone = '$phone',
        address = '$address', city = '$city', country = '$country' WHERE id = '$a' ";
        $result1 = mysql_query($qwer1 , $con);
        header("location:landing.php");
}

//$name = $_SESSION['name'];

?>

<div class="container" style="padding-top: 100px;">
  <div class="row">
    <div class="col-md-6" >
      <form class="" action="" method="post">
        <table border="0px;">
          <tr>
            <th width = "200px;">Profile Picture</th>
              <td width = "400px;">
                <div class="mt-10" style="text-align:center">
    								<img src="uploaded/<?=$row_img[3] ?>" alt="" class="img-fluid" style="border-radius:50%; width:200px; height:200px;">
                </div>
              </td>
            </tr>
          <tr>
            <th width = "200px;">Name</th>
              <td width = "400px;">
                <div class="mt-10">
    								<input type="text" name="first_name" placeholder=""
                     onfocus="this.placeholder = '<?=$row[2]; ?>'"
                     value="<?=$row[2]; ?>"
                      onblur="this.placeholder = '<?=$row[2]; ?>'"
                     required="" class="single-input">
                   </div>
              </td>
            </tr>
            <tr>
              <th>Last Name</th>
                <td>
                  <div class="mt-10">
                      <input type="text" name="last_name" placeholder=""
                       onfocus="this.placeholder = '<?=$row[3]; ?>'"
                       value="<?=$row[3]; ?>"
                        onblur="this.placeholder = '<?=$row[3]; ?>'"
                       required="" class="single-input">
                  </div>
                </td>
            </tr>
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
                     required="" class="single-input">
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
                     required="" class="single-input">
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
                     required="" class="single-input">
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
                   required="" class="single-input">
                </div>
            </td>
          </tr>
          <tr>
            <th>      </th>
            <td>
              <div class="mt-10" style="text-align:right;" >
                <input type="submit" name="submit" class="btn btn-primary like" value="Update"/>
              </div>
            </td>
          </tr>
        </table>
      </form>
    </div>
    <div class="col-md-6">
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
      </form>
    </div>
  </div>
</div>
<?php
include("footer.php");
 ?>

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

$password = $row[5];
if(isset($_POST['submit']))
{

        $pass = $_POST["pass"];
        $npass = $_POST["npass"];
        $cpass = $_POST["cpass"];

        if($pass == $password)
        {
          if($npass == $cpass)
          {
              $qwer1 = "UPDATE `user` SET password = '$npass' WHERE id = '$a' ";
              $result1 = mysql_query($qwer1 , $con);
          }
          else
          {
            //echo "Confirm password does not match";

          function alert(){
           echo "<script type='text/javascript'>";
           echo "alert('Confirm Password Does Not Match!');";
           echo "</script>";
          }
          alert();

          }
        }
        else
        {
        //echo "Old password does not match";

        function alert1(){
         echo "<script type='text/javascript'>";
         echo "alert('Current Password Does Not Match!');";
         echo "</script>";
        }
        alert1();
        }

}

//$name = $_SESSION['name'];

?>

<div class="container" style="
padding-top: 100px;">
  <div class="row">
    <div class="col-md-12" >
      <form class="" action="" method="post">
        <table border="0px;">
          <tr>
            <th width = "200px;">Current Password</th>
              <td width = "400px;">
                <div class="mt-10">
    								<input type="password" name="pass" placeholder="**************"
                     onfocus="this.placeholder = ''"
                     onblur="this.placeholder = ''"
                     required="" class="single-input">
                   </div>
              </td>
            </tr>
            <tr>
              <th>New Password</th>
                <td>
                  <div class="mt-10">
                      <input type="password" name="npass" placeholder="**************"
                       onfocus="this.placeholder = >'"
                      onblur="this.placeholder = ''"
                       required="" class="single-input">
                  </div>
                </td>
            </tr>
            <tr>
            <th>Confirm Password</th>
              <td>
                <div class="mt-10">
                    <input type="password" name="cpass" placeholder="**************"
                     onfocus="this.placeholder = ''"
                     onblur="this.placeholder = ''"
                     required="" class="single-input">
                  </div>
              </td>
          </tr>
          <tr>
            <th>      </th>
            <td>
              <div class="mt-10" style="text-align:right;" >
                <input type="submit" name="submit"data-toggle="modal"
                data-target="#mymodal"/>
              </div>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>

<!--Modal start  -->
<div class="modal fade" id="mymodal" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Have a look</h4>
        <button type="button" class="btn" data-dismiss="modal">*</button>
      </div>
      <div class="modal-body">
        <p>
          Approve or disapprove the user
        </p>
      </div>
      <div class="modal-footer">
        <!-- <form action="" method="post">
          <input type="hidden" name="val" value="<?//=$p_id[1]; ?>">
          <input type="submit" name="submit"/>

        </form> -->
        <button type="submit" name="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="submit" name="dapp"class="btn btn-default" data-dismiss="modal">Disapprove</button> -->
      </div>
    </div>
  </div>
</div>
<!--Modal end  -->
<?php
include("footer.php");
 ?>

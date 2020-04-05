<?php
include("header.php");
include("head.php");
if ($_SESSION['uid'] == "") {
  header("location:index.php");
}
//$qwer2 = "SELECT * FROM `user` where user = '1' ";
$result2 = mysql_query("SELECT * FROM user WHERE user = 1 && status = 0 ", $con);
//$row2 = mysql_fetch_array($result2);
$row_2 = mysql_num_rows($result2);
if (isset($_POST['app'])) {

  $d_id = $_POST['a_id'];
  $qwer3 = mysql_query("UPDATE user SET status='1'  WHERE id = '$d_id' ");
}
if (isset($_POST['dapp'])) {

  $d_id = $_POST['a_id'];
  $qwer4 = mysql_query("UPDATE user SET status='2'  WHERE id = '$d_id' ");
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
              <h2>New Users</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <div class="container">
    <div class="section-top-border">
      <div class="row">
        <div class="col-lg-8 col-md-8" style="text-align:center;">
          <table border="1px">

            <tr>
              <!-- <th>Id</th>
              <th>User</th> -->
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>City</th>
              <th>Country</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
            <?php
            if ($row_2 == 0) {
              ?>
              <tr>

                No data in the Column
              </tr>
              <?php
            }
            else{
            while ($as = mysql_fetch_assoc($result2)) {
            ?>
            <tr>
              <td><?=$as['name']; ?></td>
              <td><?=$as['l_name']; ?></td>
              <td><?=$as['email']; ?></td>
              <td><?=$as['phone']; ?></td>
              <td><?=$as['address']; ?></td>
              <td><?=$as['city']; ?></td>
              <td><?=$as['country']; ?></td>
              <td>
                <form class="" action="" method="post">
                  <input type="hidden" name="a_id" value="<?=$as['id']; ?>">
                  <button type="submit" name="app" class="btn btn-info btn-sm">Approve</button>
                </td>
                <td>
                  <button type="submit" name="dapp" class="btn btn-info btn-sm">Disapprove</button>
                </form>
              </td>
            </tr>
          <?php }
        }?>
          </table>
        </div>
      </div>
    </div>
  </div>

<!--Modal start  -->
<div class="modal fade" id="mymodal" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Take action on User</h4>
        <button type="button" class="btn" data-dismiss="modal">*</button>
      </div>
      <div class="modal-body">
        <p>
          Approve or disapprove the user
        </p>
      </div>
      <div class="modal-footer">
        <form action="" method="post">
          <input type="hidden" name="val" value="<?=$p_id[1]; ?>">
          <input type="submit" name="submit"/>

        </form>
        <button type="submit" name="submit" class="btn btn-default" data-dismiss="">Approve</button>
        <button type="submit" name="dapp"class="btn btn-default" data-dismiss="modal">Disapprove</button>
      </div>
    </div>
  </div>
</div>
<!--Modal end  -->
</body>
<?php
include("footer.php");
?>

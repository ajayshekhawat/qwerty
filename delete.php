<?php
include("header.php");
include("head.php");

$result2 = mysql_query("SELECT * FROM user WHERE user = 1 && status = 2 ", $con);


if(isset($_POST["submit"]))
{
  $d_id = $_POST["del"];
  $qwer3 = mysql_query("UPDATE user SET status='1'  WHERE id = '$d_id' ");
}
if ($_SESSION['uid'] == "") {
  header("location:index.php");
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
              <h2>Deleted Users</h2>
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
            </tr>
            <?php while ($as = mysql_fetch_assoc($result2)) {
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
                       <div class="mt-10">
                          <input type="hidden" name="del" placeholder=""
                           onfocus="this.placeholder = '<?=$as['id']; ?>'"
                           value="<?=$as['id']; ?>"
                            onblur="this.placeholder = '<?=$as['id']; ?>'"
                           required="" class="single-input">
                      </div>
    								 <input type="submit" name="submit"
                    class="btn btn-success like" value="Approve"/>
                </form>
              </td>
            </tr>
          <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>
<?php
include("footer.php");
?>

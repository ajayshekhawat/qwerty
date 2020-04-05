<?php
include("header.php");
include("head.php");

//$qwer2 = "SELECT * FROM `user` where user = '1' ";
if ($_SESSION['uid'] == "") {
  header("location:index.php");
}
$result2 = mysql_query("SELECT * FROM user WHERE user = 1 && status = 1 ", $con);

//$row2 = mysql_fetch_array($result2);
//$row_2 = mysql_num_rows($result2);
if (isset($_POST['submit'])) {

  $d_id = $_POST['del'];
  $qwer3 = mysql_query("UPDATE user SET status='2'  WHERE id = '$d_id' ");
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
              <h2>All Users</h2>
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
              <th>View Profile</th>
              <th>First-Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>__Address__</th>
              <th>City</th>
              <th>Country</th>
              <th>Remove</th>
            </tr>
            <?php while ($as = mysql_fetch_assoc($result2)) {
            ?>
            <tr>
              <td> <a href="view_profile.php?id=<?=$as['id']; ?>"><button type="button" class="btn btn-primary">View Profile</button></a></td>
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
                          <input type="radio" name="del" placeholder=""
                           onfocus="this.placeholder = '<?=$ras['id']; ?>'"
                           value="<?=$as['id']; ?>"
                            onblur="this.placeholder = '<?=$as['id']; ?>'"
                           required="" class="single-input">
                      </div>
    								<input type="submit" name="submit"
                    class="btn btn-primary"/>
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

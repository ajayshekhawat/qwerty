<?php
include("header.php");
include("head.php");

    $user_id = $_GET['id'];
    $get_user = mysql_query("SELECT * FROM `user` WHERE id='$user_id' ",$con);
    $show = mysql_fetch_array($get_user);

    $get_img = mysql_query("SELECT * FROM `user_img` WHERE user_id='$user_id' ",$con);
    $num_img = mysql_num_rows($get_img);
    $show_img = mysql_fetch_array($get_img);


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
              <h2>View Profile</h2>
              <div class="page_link">
                <a href="index.html">Home</a>
                <a href="contact.html">Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
<div class="container">
  <div class="section-top-border">
  		<h3 class="mb-30 title_color"><?=$show[2]; ?></h3>
  			<div class="row">
  				<div class="col-md-3">
            <?php
            if ($num_img == 0) {?>
            <img src="uploaded/user_img.png" alt="" class="img-fluid" style="border-radius:50%; width:200px; height:200px;">
            <?php
          }else {
            ?>
            <img src="uploaded/<?=$show_img[3]; ?>" alt="" class="img-fluid" style="border-radius:50%; width:200px; height:200px;">
            <?php
          } ?>
  				</div>
  			<div class="col-md-9 mt-sm-20 left-align-p">
  					<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to
  						transfer money to them through any US bank or payment system. As a result of this law, most of the popular
  						online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino
  						players found themselves being chased by the Federal government. But, after a fortnight, the online casino
  						industry came up with a solution and new online casinos started taking root. These began to operate under a
  						different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major
  						part of this was enlisting electronic banking systems that would accept this new clarification and start doing
  						business with me. Listed in this article are the electronic banking systems that accept players from the United
  						States that wish to play in online casinos.</p>
  			</div>
  		</div>
   </div>
</div>

</body>



<?php
include("footer.php");

?>

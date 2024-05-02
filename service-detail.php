 <?php 
 include('header.php'); 
 include('admin/config.php'); 
 
   $edit_id = $_GET['sid'];
 
    $query_service = mysqli_query($conn,"SELECT * from tbl_services where id='$edit_id'"); 
    $firm_service = mysqli_fetch_array($query_service);
$sid= $firm_service['id'];
 ?>
              <section>
                <div class="gp ls-gp">
                    <div class="fxd-bg" style="background: url(images/bg/breadcrumb2.jpg);"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="pg-tl txt-cntr">
                                    <h1 itemprop="headline">Service Detail</h1>
                                    <ul class="breadcrumbs">
                                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                                        <li class="active"><?php $firm_service['services_name']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="gp">
                    <div class="container1">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 col-lg-8 offset-lg-2">
                                        <div class="blg-dtl-wrp">
                                            <div class="lt-blg-pst">
                                                <img src="admin/service_img/<?php echo $firm_service['services_image']; ?>" alt="" itemprop="image" />
                                               
                                            </div>
                                            <h2 itemprop="headline"><?php echo $firm_service['services_name']; ?></h2>
                                            <div class="rtl-pst-wrp">
                                                <h4 class="ttl3" itemprop="headline"></h4>
                                                <div class="rltd-pst-crsl">
                                                    <?php  $query = "SELECT * FROM add_service_img where sid='$edit_id' ";
                                                    $result = $conn->query($query);
                                                    while ($firm = mysqli_fetch_array($result)) {  ?>
                                                    <div class="rlt-pst-itm">
                                                        <a href="#" title="" itemprop="url"><img src="admin/service_img/<?php echo $firm['img']; ?>" alt="<?php echo $firm['name']; ?>" itemprop="image" /></a>
                                                    
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                           
                                            <div class="rpl-frm">
                                                <h4 class="ttl3" itemprop="headline">Book Service</h4>
                                                <form action="sendind_inquiry.php" method="post">
                                                    <input type="hidden" name="serviceid" value="<?php echo $firm_service['id']; ?>" >
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <input type="text" name="txtname" placeholder="Name:" required />
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <input type="number" name="txtphone" placeholder="Your Mobile:" required/>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <input type="text" name="txtaddress"  placeholder="Address:" required />
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <textarea placeholder="Remark:" name="txtremark"></textarea>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <button class="rd30" type="submit" name="submit">Send Inquiry</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="gp ls-gp3 drk-bg2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="nes-lstr">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12 col-lg-5">
                                            <div class="nws-ltr-tl">
                                                <h3 itemprop="headline">Subscribe to Our Newsletter</h3>
                                                <p itemprop="description">We have been on web marketing for 12 years helping you compete on Internet and converting your visitors</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 offset-md-1 col-sm-12 offset-sm-0 col-lg-6 offset-lg-1">
                                            <form class="nws-ltr-frm">
                                                <input class="rd30" type="email" placeholder="Your Email" />
                                                <button class="thm-btn2 rd30" type="submit">Send</button>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- Newsletter -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php include('footer.php');  ?>
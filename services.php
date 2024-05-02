<?php include('header.php'); ?>
           <section>
                <div class="gp ls-gp">
                    <div class="fxd-bg" style="background: url(images/bg/breadcrumb2.jpg);"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="pg-tl txt-cntr">
                                    <h1 itemprop="headline">Services</h1>
                                    <ul class="breadcrumbs">
                                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                                        <li class="active">Services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<section>
                <div class="gp">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="title1 txt-cntr">
                                    <h3 itemprop="headline">Our Services</h3>
                                   
                                </div>
                                <div class="rmv-ext">
                                    <div class="row">
                                         <?php  $query = "SELECT * FROM tbl_services ORDER BY sqs ASC ";
                                         $result = $conn->query($query);
                                         while ($firm = mysqli_fetch_array($result)) {  ?>
                                        <div class="col-md-6 col-sm-6 col-lg-4">
                                            <div class="pst-bx">
                                                <a href="service-detail.php?sid=<?php echo $firm['id']; ?>" title="" itemprop="url"><img class="rd6" src="admin/service_img/<?php echo $firm['services_image']; ?>" alt="" itemprop="image" /></a>
                                                <div class="pst-inf">
                                                    <h4 itemprop="headline"><a href="service-detail.php?sid=<?php echo $firm['id']; ?>" title="" itemprop="url"><?php echo $firm['services_name']; ?></a></h4>
                                                    
                                                </div>
                                            </div>
                                        </div> <?php } ?>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <?php include('footer.php'); ?>
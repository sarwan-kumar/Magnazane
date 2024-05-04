<?php
include('header.php');
?>
<style>
    .minict_wrapper {
        display: none !important;
    }

    .form-control {
        display: block !important;
    }
</style>

<link rel="stylesheet" href="path/to/revslider/css/settings.css">
<script src="path/to/revslider/js/jquery.themepunch.tools.min.js"></script>
<script src="path/to/revslider/js/jquery.themepunch.revolution.min.js"></script>
<!-- 
<div class="creative-slider">
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;">
            <ul>
                <?php
                $sql = "SELECT * FROM slider";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li data-transition="random" data-slotamount="default" data-hideafterloop="0" data-easein="default" data-easeout="default" data-masterspeed="5000" data-rotate="0" data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-title="">';
                            echo '<img src="admin/slider_img/' . $row["img"] . '" itemprop="image" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="45" class="rev-slidebg" data-no-retina />';
                            echo '</li>';
                        }
                    } else {
                        echo "No images found in the slider table";
                    }
                } else {
                    echo "Error fetching images: " . mysqli_error($conn);
                }
                ?>
                
            </ul>
        </div>
    </div>
</div> -->



<div class="creative-slider">
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;">
            <ul>
                <?php
                $sql = "SELECT * FROM slider";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li data-transition="random" data-slotamount="default" data-hideafterloop="0" data-easein="default" data-easeout="default" data-masterspeed="5000" data-rotate="0" data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-title="">';
                            echo '<img src="admin/slider_img/' . $row["img"] . '" itemprop="image" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="45" class="rev-slidebg" data-no-retina />';
                            echo '<h2 class="tp-caption tp-resizeme rs-parallaxlevel-3" data-x="center" data-hoffset="0" data-y="center" data-voffset="-50" data-width="auto" data-height="auto" data-transform_idle="o:1;" data-transform_in="x:0;y:top;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="font-size:40px;margin:0;letter-spacing:-.3px;font-weight:700;color:#ffffff;">MagnaZane</h2>';
                            echo '</li>';

                        }
                    } else {
                        echo "No images found in the slider table";
                    }
                } else {
                    echo "Error fetching images: " . mysqli_error($conn);
                }
                ?>
            </ul>
        </div>
    </div>
</div>



<!-- Slider Sec -->


<section>
    <div class="gp nogp ovrlp-tp-170">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="ln-frm" style="background-image: url(images/resource/lck-pst-bg2.jpg);padding: 19px 19px 19px 19px;">
                        <div class="titl4 txt-cntr">
                            <h3 itemprop="headline">New Book Service</h3>

                        </div>
                        <form class="lon-frm" action="sendind_inquiry.php" method="post">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <input type="text" name="txtname" placeholder="Name" required />
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <input type="text" name="txtphone" placeholder="Your Mobile Number" required />
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <input type="text" name="txtaddress" placeholder="Your Address" required />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <textarea placeholder="Remark" name="txtremark"></textarea>
                                        </div>

                                        <div class="col-md-5 col-sm-12 col-lg-5">

                                            <label>Service Name:*</label>
                                            <select name="serviceid" class="form-control" style="display:block!important;" required>
                                                <option value="">Select Service</option>
                                                <?php $query_1 = mysqli_query($conn, "SELECT * FROM tbl_services");
                                                while ($firm_s = mysqli_fetch_array($query_1)) {  ?>
                                                    <option value="<?php echo $firm_s['id']; ?>"><?php echo  $firm_s['services_name']; ?></option><?php } ?>
                                            </select>

                                        </div><br>
                                        <div class="col-md-3 col-sm-6 col-lg-3">
                                            <button type="submit" style="margin-top: 30px;" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="gp" style="padding: 45px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="title1 txt-cntr">
                        <h3 itemprop="headline">Our Services</h3>

                    </div>
                    <div class="rmv-ext">
                        <div class="row">
                            <?php $query = "SELECT * FROM tbl_services ORDER BY sqs ASC ";
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
<section>
    <div class="gp nogp">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="vd-strd-wrp">
                    <div class="vd-strd">
                        <div class="row mrgd">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="vdo-sc" style="background-image: url(admin/gallery_img/gallery-51227702899.jpeg);">
                                    <a target="_blank" href="https://www.youtube.com/embed/yAxIo84SE5w?si=KYiXfeHpxhavdmup" title="" itemprop="url"><i class="fa fa-play-circle"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="vdo-dta">
                                    <h2 itemprop="headline">Why Choose <?= $firm_data['fname']?> ?</h2>
                                    <div class="vd-bx">
                                        <i class="fa fa-database"></i>
                                        <div class="vd-bx-inf">
                                            <h4 itemprop="headline">Distinctive Architectural Style:</h4>
                                            <p itemprop="description">Maznazane's designs epitomize a unique blend of modern innovation and cultural heritage. Their architectural projects seamlessly integrate contemporary techniques with traditional elements, resulting in structures that are not only visually stunning but also deeply rooted in local identity.</p>
                                        </div>
                                    </div>
                                    <div class="vd-bx">
                                        <i class="fa fa-support"></i>
                                        <div class="vd-bx-inf">
                                            <h4 itemprop="headline">Sustainable Design Practices:</h4>
                                            <p itemprop="description">Maznazane is renowned for its commitment to sustainable architecture. Their projects prioritize environmental responsibility, employing strategies such as passive design, renewable energy integration, and locally sourced materials.</p>
                                        </div>
                                    </div>
                                    <div class="vd-bx">
                                        <i class="fa fa-support"></i>
                                        <div class="vd-bx-inf">
                                            <h4 itemprop="headline">Award-Winning Excellence:</h4>
                                            <p itemprop="description">Maznazane's portfolio boasts numerous accolades and awards, recognizing their excellence in design, innovation, and functionality. By featuring Maznazane's award-winning projects on your website, you can instill confidence in potential clients, demonstrating the firm's proven track record of delivering exceptional results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Video Shortcode -->
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
                        <h3 itemprop="headline"><?= $firm_data['fname'] ?> Portfolio</h3>

                    </div>
                    <div class="port-fltrs">

                        <div class="port-dta rmv-ext7">
                            <div class="row mrgd12-5">
                                <div class="msnry">
                                    <?php $query = "SELECT * FROM add_gallery ";
                                    $result = $conn->query($query);
                                    while ($firm = mysqli_fetch_array($result)) {  ?>
                                        <div class="col-md-4 col-sm-4 fltr1 col-lg-3">
                                            <div class="prj-bx2">
                                                <img src="admin/gallery_img/<?php echo $firm['img']; ?>" alt="" itemprop="image" />
                                                <div class="prj-bx-inf2">
                                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url"><?php echo $firm['name']; ?></a></h5>
                                                    <div class="prj-btns2">
                                                        <!-- <a href="#" title="" itemprop="url"><i class="fa fa-chain"></i></a> -->
                                                        <span class="lightbox"><a href="admin/gallery_img/<?php echo $firm['img']; ?>" title="" itemprop="url"><i class="fa fa-search-plus"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><?php } ?>

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
    <div class="gp nogp drk-bg3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="tst-car-wrp">
                        <div class="tst-car2">
                            <div class="tst-itm">
                                <img src="images/testimonial/img1.png" alt="" itemprop="image" />
                                <div class="tst-inf">
                                    <p itemprop="description">
                                    “Maznazane's approach to architecture is truly innovative. They seamlessly integrated sustainable design principles into our project, creating spaces that are not only beautiful but also environmentally responsible. Their creativity and expertise transformed our space into something truly extraordinary. Working with Maznazane was a game-changer for us, and we couldn't be happier with the outcome.”</p>
                                    <h5 itemprop="headline">Priya Sharma.</h5>

                                </div>
                            </div>
                            <div class="tst-itm">
                                <img src="images/testimonial/img2.png" alt="" itemprop="image" />
                                <div class="tst-inf">
                                    <p itemprop="description">“Working with Maznazane was an absolute pleasure. From concept to completion, they were attentive to our needs and brought our vision to life in ways we couldn't have imagined. Their attention to detail and commitment to quality surpassed our expectations. We are thrilled with the final result and highly recommend Maznazane to anyone seeking top-notch architectural expertise.”</p>
                                    <h5 itemprop="headline">Rajesh Singh.</h5>

                                </div>
                            </div>
                            <div class="tst-itm">
                                <img src="images/testimonial/img1.png" alt="" itemprop="image" />
                                <div class="tst-inf">
                                    <p itemprop="description">“Maznazane embodies professionalism and excellence in every aspect of their work. From the initial consultation to the final delivery, their team demonstrated a deep understanding of our needs and executed flawlessly. Their dedication to quality and craftsmanship is evident in every detail of our project. We are immensely grateful for their expertise and highly recommend Maznazane to anyone looking for exceptional architectural services.”</p>
                                    <h5 itemprop="headline">Nisha Patel.</h5>

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
    <div class="gp ls-gp blu-bg6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="fn-fcts rmv-ext">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="fct-bx">
                                    <i class="fa fa-handshake-o"></i>
                                    <div class="fct-inf">
                                        <strong class="cntr">3587</strong>
                                        <span>Satisfied Clients</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="fct-bx">
                                    <i class="fa fa-user-plus"></i>
                                    <div class="fct-inf">
                                        <strong class="cntr">70</strong>
                                        <span>Awards</span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="fct-bx">
                                    <i class="fa fa-trophy"></i>
                                    <div class="fct-inf">
                                        <strong class="cntr">685</strong>
                                        <span>Employees</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="fct-bx">
                                    <i class="fa fa-code"></i>
                                    <div class="fct-inf">
                                        <strong class="cntr">20930</strong>
                                        <span>Cups of Coffee</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Fun Facts -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
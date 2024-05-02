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
                            echo '<h2 class="tp-caption tp-resizeme rs-parallaxlevel-3" data-x="center" data-hoffset="0" data-y="center" data-voffset="-50" data-width="auto" data-height="auto" data-transform_idle="o:1;" data-transform_in="x:0;y:top;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="font-size:40px;margin:0;letter-spacing:-.3px;font-weight:700;color:#ffffff;">Mgnazane</h2>';
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
                        <form class="lon-frm" id="bookServiceForm"  >
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <input type="text" name="name" placeholder="Name" required />
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <input type="text" name="number" placeholder="Your Mobile Number" required />
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <input type="text" name="address" placeholder="Your Address" required />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <textarea placeholder="Remark" name="remark"></textarea>
                                        </div>

                                        <div class="col-md-5 col-sm-12 col-lg-5">

                                            <label>Service Name:*</label>
                                            <select name="service" class="form-control" style="display:block!important;" required>
                                                <option value="">Select Service</option>
                                                <?php $query_1 = mysqli_query($conn, "SELECT * FROM tbl_services");
                                                while ($firm_s = mysqli_fetch_array($query_1)) {  ?>
                                                    <option value="<?php echo $firm_s['id']; ?>"><?php echo  $firm_s['services_name']; ?></option><?php } ?>
                                            </select>
                                            <!--<input type="date" name="book_date" required />-->

                                        </div><br>
                                        <div class="col-md-3 col-sm-6 col-lg-3">
                                            <button type="submit"  style="margin-top: 30px;" name="submit">Submit</button>
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
                                <div class="vdo-sc" style="background-image: url(images/bg/26.png);">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=Kk2ZYw46THk&ab_channel=Bamniasfitness" title="" itemprop="url"><i class="fa fa-play-circle"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="vdo-dta">
                                    <h2 itemprop="headline">Why Choose Magnazane?</h2>
                                    <div class="vd-bx">
                                        <i class="fa fa-database"></i>
                                        <div class="vd-bx-inf">
                                            <h4 itemprop="headline">Exemplary Facilities</h4>
                                            <p itemprop="description">Sirsa Club boasts state-of-the-art facilities equipped with the latest amenities, providing a conducive environment for sports enthusiasts to hone their skills and excel in their chosen disciplines</p>
                                        </div>
                                    </div>
                                    <div class="vd-bx">
                                        <i class="fa fa-support"></i>
                                        <div class="vd-bx-inf">
                                            <h4 itemprop="headline">Expert Coaching</h4>
                                            <p itemprop="description">The club is renowned for its exceptional coaching staff, comprising seasoned professionals dedicated to nurturing talent and fostering a culture of continuous improvement.</p>
                                        </div>
                                    </div>
                                    <div class="vd-bx">
                                        <i class="fa fa-support"></i>
                                        <div class="vd-bx-inf">
                                            <h4 itemprop="headline">Customer-Centric Approach</h4>
                                            <p itemprop="description">Sirsa Club prioritizes customer satisfaction, consistently delivering top-notch services and facilities that exceed expectations, ensuring a fulfilling experience for every member.</p>
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
                        <h3 itemprop="headline">Magnazane Portfolio</h3>

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
                                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url">Your Work Title</a></h5>
                                                    <div class="prj-btns2">
                                                        <a href="#" title="" itemprop="url"><i class="fa fa-chain"></i></a>
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
                                        I've been a member at Sirsa Club for over three years now, and it has truly become my second home. The club's facilities are exceptional, and the coaching staff's commitment to excellence is commendable. My journey from a novice to a confident athlete is all thanks to Sirsa Club.</p>
                                    <h5 itemprop="headline">Priya Sharma.</h5>

                                </div>
                            </div>
                            <div class="tst-itm">
                                <img src="images/testimonial/img2.png" alt="" itemprop="image" />
                                <div class="tst-inf">
                                    <p itemprop="description">As a parent, seeing my child flourish in sports at Sirsa Club brings immense joy. The club's emphasis on holistic development, not just in the sport but also in character-building, is truly remarkable. My son's confidence has soared, and I'm grateful for the nurturing environment here.</p>
                                    <h5 itemprop="headline">Rajesh Singh.</h5>

                                </div>
                            </div>
                            <div class="tst-itm">
                                <img src="images/testimonial/img1.png" alt="" itemprop="image" />
                                <div class="tst-inf">
                                    <p itemprop="description">Sirsa Club's swimming program is exceptional! The coaches' attention to detail and personalized approach have significantly improved my technique. It's not just a place to swim; it's a community that motivates and supports each other</p>
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
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="fct-bx">
                                    <i class="fa fa-user-plus"></i>
                                    <div class="fct-inf">
                                        <strong class="cntr">70</strong>
                                        <span>Awards</span>
                                    </div>
                                </div>
                            </div>
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
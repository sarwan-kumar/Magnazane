<?php include('header.php'); ?>

<?php
// Include your database configuration file
include('config.php');

// Define an array to store the fetched data
$firm = array();

// Check if the connection to the database is successful
if ($conn) {
    // Prepare and execute the SQL SELECT query
    $query = "SELECT * FROM firm_detail WHERE id = 1"; // Assuming you want to fetch the data for firm with id 1
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the result row as an associative array
        $firm = mysqli_fetch_assoc($result);
    } else {
        // Handle the case where the query fails
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle the case where the connection to the database fails
    echo "Error: Unable to connect to the database.";
}

// Output the about information or a default message if it's not available
$about_info = isset($firm['about']) ? $firm['about'] : "About information not available.";
$about_info;
?>


<section>
    <div class="gp ls-gp">
        <div class="fxd-bg" style="background: url(images/bg/breadcrumb2.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="pg-tl txt-cntr">
                        <h1 itemprop="headline">About Us</h1>
                        <ul class="breadcrumbs">
                            <li><a href="index.php" title="" itemprop="url">Home</a></li>
                            <li class="active">About Us</li>
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


                    <div class="row">
                       
                        <div class="col-12 text-center"> <!-- Your existing column -->
                            <div class="col-12"> <!-- Removed unnecessary nested div -->
                                <p id="about"><?php echo $firm['about']; ?></p>
                            </div>
                        </div>
                        
                    </div>




                    <div class="nd-gal">
                        <div class="row mrgd10">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <img class="rd10" src="images/bg/9.png" alt="" itemprop="image" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <img class="rd10" src="images/bg/26.png" alt="" itemprop="image" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <img class="rd10" src="images/bg/56.png" alt="" itemprop="image" />
                            </div>
                        </div>
                    </div>
                    <div class="rmv-ext2">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="serv-bx">
                                    <i class="rd50"><img src="images/resource/serv-icn1.png" alt="" itemprop="image" /></i>
                                    <div class="serv-inf">
                                        <h4 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">
                                        Portfolio Showcase</a></h4>
                                        <p itemprop="description">
                                        Explore our stunning portfolio created with CorelDRAW, showcasing innovative architectural designs, detailed renderings, and conceptual sketches.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="serv-bx">
                                    <i class="rd50"><img src="images/resource/serv-icn2.png" alt="" itemprop="image" /></i>
                                    <div class="serv-inf">
                                        <h4 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">
                                        Design Services</a></h4>
                                        <p itemprop="description">
                                        Discover our comprehensive range of architectural design services tailored to meet your unique needs. From residential to commercial projects, we use CorelDRAW to bring your vision to life. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="serv-bx">
                                    <i class="rd50"><img src="images/resource/serv-icn3.png" alt="" itemprop="image" /></i>
                                    <div class="serv-inf">
                                        <h4 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">
                                                Commitment to Customer Satisfaction</a></h4>
                                        <p itemprop="description">
                                        Hear from our satisfied clients about their experiences working with us. Discover how CorelDRAW enhances collaboration and enables us to exceed expectations, delivering exceptional results every time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="serv-bx">
                                    <i class="rd50"><img src="images/resource/serv-icn5.png" alt="" itemprop="image" /></i>
                                    <div class="serv-inf">
                                        <h4 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">Accessibility and Our Process</a></h4>
                                        <p itemprop="description">Dive into our design process, where we combine creativity with technical expertise. Explore how we leverage CorelDRAW's powerful tools to conceptualize, draft, and refine architectural plans.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="serv-bx">
                                    <i class="rd50"><img src="images/resource/serv-icn4.png" alt="" itemprop="image" /></i>
                                    <div class="serv-inf">
                                        <h4 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">
                                        Embracing Innovation</a></h4>
                                        <p itemprop="description">
                                        Innovation lies at the heart of everything we do. We are constantly exploring new ideas, technologies, and methodologies to revolutionize the architectural landscape.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="serv-bx">
                                    <i class="rd50"><img src="images/resource/serv-icn6.png" alt="" itemprop="image" /></i>
                                    <div class="serv-inf">
                                        <h4 itemprop="headline"><a href="service-detail.html" title="" itemprop="url">
                                        Collaborative Approach</a></h4>
                                        <p itemprop="description">We recognize that true innovation thrives in an environment of collaboration and exchange. That's why we foster close partnerships with clients, consultants, and industry experts, leveraging collective insights and expertise to drive innovation forward.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- 
<section>
    <div class="gp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="title1 txt-cntr">
                        <h3 itemprop="headline">Our Perfect Team</h3>

                    </div>
                    <div class="rmv-ext">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-lg-3">
                                <div class="tm-bx txt-cntr">
                                    <div class="tm-thmb">
                                        <img src="images/team/01.jpeg" alt="" itemprop="image" style="height: 270px;width: 268px;" />
                                    </div>
                                    <div class="tm-inf">
                                        <h4 itemprop="headline">Ishu Bansal</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-3">
                                <div class="tm-bx txt-cntr">
                                    <div class="tm-thmb">
                                        <img src="images/team/05.jpeg" alt="" itemprop="image" style="height: 270px;width: 268px;" />

                                    </div>
                                    <div class="tm-inf">
                                        <h4 itemprop="headline">Nakul</h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-3">
                                <div class="tm-bx txt-cntr">
                                    <div class="tm-thmb">
                                        <img src="images/team/03.jpeg" alt="" itemprop="image" style="height: 270px;width: 268px;" />

                                    </div>
                                    <div class="tm-inf">
                                        <h4 itemprop="headline">Suresh Sharma</h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-3">
                                <div class="tm-bx txt-cntr">
                                    <div class="tm-thmb">
                                        <img src="images/team/04.jpeg" alt="" itemprop="image" style="height: 270px;width: 268px;" />

                                    </div>
                                    <div class="tm-inf">
                                        <h4 itemprop="headline">Rajesh Goyal</h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-3">
                                <div class="tm-bx txt-cntr">
                                    <div class="tm-thmb">
                                        <img src="images/team/06.jpeg" alt="" itemprop="image" style="height: 270px;width: 268px;" />

                                    </div>
                                    <div class="tm-inf">
                                        <h4 itemprop="headline">Rajan Bawa</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section>
    <div class="gp nogp grn-bg">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="wrk-prft-wrp">
                        <div class="wrk-prft-inr">
                            <div class="wrk-prft-crsl">
                                <div class="wr-prft-itm">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <div class="wrd-prft-inf">
                                                <h2 itemprop="headline">Exploring Diversity in Design</h2>
                                                <p itemprop="description">we celebrate the richness of diversity in architectural design. Our portfolio encompasses a wide range of offerings tailored to suit diverse preferences, needs, and styles. From contemporary marvels to timeless classics, we pride ourselves on our ability to deliver exceptional designs that reflect the unique tastes and aspirations of our clients.</p>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <div class="wrk-prft-mckp">
                                                <img src="images/bg/50.png" alt="" itemprop="image" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wr-prft-itm">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <div class="wrd-prft-inf">
                                                <h2 itemprop="headline">Cultural Sensitivity </h2>
                                                <p itemprop="description">We recognize the importance of cultural sensitivity and inclusivity in architectural design. Our diverse team understands the significance of context, heritage, and cultural identity in shaping the built environment. Whether we're working on a local community project or a global initiative, we strive to incorporate cultural nuances and respect local traditions, ensuring that our designs resonate with the people they serve.</p>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <div class="wrk-prft-mckp">
                                                <img src="images/bg/27.png" alt="" itemprop="image" />
                                            </div>
                                        </div>
                                    </div>
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

<?php include('footer.php'); ?>
<?php 
include('header.php');



?>
<style>
    .cnt-wrp > form input, 
.cnt-wrp > form textarea {
    background-color: #ffffff;
    border: 1px solid #f6f6f6;
    color: black;
    float: left;
    font-size: 14px;
    height: 50px;
    letter-spacing: 0;
    margin-bottom: 37px;
    padding: 10px 13px;
    width: 100%;
}
</style>

            <section>
                <div class="gp ls-gp">
                    <div class="fxd-bg" style="background: url(images/bg/breadcrumb2.jpg);"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="pg-tl txt-cntr">
                                    <h1 itemprop="headline">Contact Us</h1>
                                    <ul class="breadcrumbs">
                                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                                        <li class="active">Contact Us</li>
                                    </ul>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55540.63740219422!2d74.98912138036424!3d29.53705254769774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39114db0893d723d%3A0xc51125be998c4f95!2sSirsa%2C%20Haryana%20125055!5e0!3m2!1sen!2sin!4v1714417661828!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="gp gry-bg3" style="background-color: #d50d0d;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="cnt-wrp txt-cntr">
                                    <h2 itemprop="headline">Get In Touch With Us</h2>
                                    <form action="contact1.php" method="post">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-lg-6">
                                                <input class="rd6" type="text" name="txtname" placeholder="Name" required />
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-lg-6">
                                                <input class="rd6" type="email" name="txtemail" placeholder="Email" required />
                                            </div>
                                             <div class="col-md-4 col-sm-12 col-lg-6">
                                                <input class="rd6" type="number" name="txtphone" placeholder="Phone Number" required />
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-lg-6">
                                                <input class="rd6" type="text" name="txtsubject" placeholder="Subject" required />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea class="rd6" name="txtmessage" placeholder="Message" required></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button class="rd6" type="submit" name="submit">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php include('footer.php'); ?>
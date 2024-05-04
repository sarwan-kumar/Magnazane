<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
    include('admin/config.php');
    $query_firm = mysqli_query($conn, "SELECT * FROM firm_detail WHERE id='1'"); 
    if($query_firm) {
        $firm_data = mysqli_fetch_array($query_firm); 
        // Check if logo path is valid
        if(!empty($firm_data['flogo'])) {
            $logo_path = "admin/logo/" . $firm_data['flogo'];
            // Check if logo file exists
            if(file_exists($logo_path)) {
                ?>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="" />
                <meta name="keywords" content="" />
                <link rel="icon" type="image/png" href="<?php echo 'admin/logo/' . $firm_data['flogo']; ?>" />
                <title>Welcom to Magnazae</title>
                <?php
            } else {
                echo "Logo file does not exist: " . $logo_path;
            }
        } else {
            echo "Logo path is empty.";
        }
    } else {
        echo "Error fetching firm data: " . mysqli_error($conn);
    }
?>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/color.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        
        <!-- Revolution Style -->
        <link rel="stylesheet" type="text/css" href="css/revolution/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="css/revolution/settings.css" />
        <link rel="stylesheet" type="text/css" href="css/revolution/navigation.css" />
        <style>
            .purchase-btn{
                display:none!important;
            }
            .logo {
    float: left;
    margin: 1px 0;
    width: 13%;
}
        </style>
   
    </head>

    <body itemscope>
      
        <div class="pg-lyut1">
           
            <header class="fr-stky style2">
                <div class="top-bar2">
                    <div class="container">
                        <ul class="contact-info2">
                            <li>Phone: +91 <?php echo $firm_data['fphone']; ?></li>
                            <li>Email:  <?php echo $firm_data['femail']; ?></li>
                           
                        </ul>
                        <div class="socl-sh3">
                            <a href="<?php echo $firm_data['facebook']; ?>" title="" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $firm_data['instagram']; ?>" title="" itemprop="url" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo $firm_data['youtube']; ?>" title="" itemprop="url" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="lg-mnu-sec">
                    <div class="container">
                        <div class="logo"><h1 itemprop="headline">
                            <a href="index.php" title="" itemprop="url">
                             <img src="admin/logo/<?php echo $firm_data['flogo']; ?>" alt="<?php echo $firm_data['fname']; ?>" itemprop="image" style="height: 98px;width: 98px;" /></a></h1>
                            </div>
                        <nav>
                            <div class="menu">
                                <ul>
                                   
                                    <li><a href="index.php" title="" itemprop="url">Home</a></li>
                                    <li><a href="about.php" title="" itemprop="url">About Us</a></li>
                                    <li><a href="services.php" title="" itemprop="url">Services</a></li>
                                    
                                    <li><a href="contact.php" title="" itemprop="url">Contact</a></li>
                                </ul>
                            </div>
                            
                        </nav>
                    </div>
                </div>
            </header><!-- Header -->
             <div class="rspn-hdr">
                <div class="rspn-tpbr">
                    <ul class="rspn-cnt">
                        <li class="active"><i class="fa fa-map-marker"></i> <?php echo $firm_data['faddress']; ?></li>
                        <li><i class="fa fa-phone"></i> (+91) <?php echo $firm_data['fphone']; ?></li>
                    </ul>
                </div>
                <div class="rspn-mdbr">
                    <ul class="rspn-scil">
                        <!--<li><a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a></li>-->
                        <li><a href="<?php echo $firm_data['facebook']; ?>" title="" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $firm_data['instagram']; ?>" title="" itemprop="url" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?php echo $firm_data['youtube']; ?>" title="" itemprop="url" target="_blank"><i class="fa fa-youtube"></i></a></li>                    
                    </ul>
                    
                </div>
                <div class="lg-mn">
                    <div class="logo">
                        <h1><a href="index.php" title="" itemprop="url">
                            <img src="admin/gallery_img/<?php echo $firm_data['flogo']; ?>" alt="" /></a></h1>
                    </div>
                    <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
                </div>
                <div class="rsnp-mnu">
                    <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                    <ul>
                       
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        <li><a href="about.php" title="" itemprop="url">About Us</a></li>
                        <li><a href="service.php" title="" itemprop="url">Service</a></li>
                        <li><a href="contact.php" title="" itemprop="url">Contact</a></li>
                    </ul>
                </div><!-- Responsive Menu -->
            </div><!-- Responsive Header -->
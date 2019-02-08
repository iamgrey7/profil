<!DOCTYPE HTML>
<html>
<head>
  <title>Gallery</title>
  <link rel="stylesheet" type="text/css" href="css/coba.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- Baris Navbar -->
<div class="baris">
        <div class="topnav" id="myTopnav">
            <a href="home.php" style="width:150px;height:48px"><img src="img/logo.jpg"></a>
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a class="active" href="gallery.php">Gallery</a>
            <a href="contact.php">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>


    <!-- Baris Sidebar dan Konten -->
    <div class="baris">        
        <div class="sidebar" >
            <ul>           
                <li><a href="profile.php">Profile</a></li>
                <li><a class="active" href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <!-- Content -->
        <div class="konten">                         
                   
            <h1 style="text-align:center">Our Gallery</h1>        
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal1.jpg">
                    <img src="img/gal1.jpg"></a>
                    <div class="desc">Project 1</div>
                </div>
            </div>


            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal2.jpg">
                    <img src="img/gal2.jpg"></a>
                    <div class="desc">Project 2</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal2.jpg">
                    <img src="img/gal2.jpg"></a>
                    <div class="desc">Project 2</div>
                </div>                    
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="img/gal2.jpg">
                    <img src="img/gal2.jpg"></a>
                    <div class="desc">Project 2</div>
                </div>                    
            </div>

        </div>
        
        <div class="clearfix"></div>

    </div>

   

    <!-- Footer -->
    <div class="footer">
        &copy Copyright Egry Yudanegara 2018
    </div>



</body>
</html>

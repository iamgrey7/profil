<!DOCTYPE HTML>
<html>
<head>
  <title>Contact</title>
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
            <a href="gallery.php">Gallery</a>
            <a class="active" href="contact.php">Contact</a>
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
                <li><a href="gallery.php">Gallery</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
            </ul>
        </div>
        <!-- Content -->
        <div class="konten">
            <div class="">
                <h1 class="judulkiri">Contact Us</h1>
            </div>
            <div>
                <p>Silahkan isi form dibawah ini untuk menghubungi administrator. </p>
                <p>Kami akan langsung merespon pesan yang anda kirimkan.</p>                 
            </div>
            
            <div class="container">
                <form id="form_kontak">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap Anda ..">
                    <label for="nama">E-Mail</label>

                    <!-- <input type="email" id="email" name="email" placeholder="Alamat E-Mail .."> -->
                    <input type="text" id="email" name="email" onblur="validasiEmail(this)"
                    placeholder="Alamat E-Mail ..">                         

                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" placeholder="Silahkan tulis pesan anda .." 
                    style="height:200px"></textarea>

                    <!-- <input type="submit" value="Kirim Pesan"> -->
                    <button class="kirim" id="btn_kirim" name="btn_kirim" onClick="validasi()"> Kirim Pesan</button>
                </form>
            </div>         
                       
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        &copy Copyright Egry Yudanegara 2018
    </div>

<script type="text/javascript">

    function validasiEmail(email){
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

            if (reg.test(email.value) == false) 
            {
                alert('Email yang anda input salah');
                email.value = "";
                // email.focus();
                return false;
            } else {
                return true;
            }
            
    }

   
    function validasi(){
        var name = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var pesan = document.getElementById("pesan").value;
        
        if (name == ""){
            alert ("Cantumkan nama anda");
            // nama.focus();
        } else if (email ==""){
            alert ("Silakan isi email anda");           
            // email.focus();
        } else if (pesan == ""){
            alert("Tuliskan pesan anda kepada kami");
            // pesan.focus();
        } else {          
            alert(
                "Pesan anda telah dikirim \n"+
                "Nama : "+name+"\n"+              
                "E-Mail : "+email+"\n"+
                "Pesan : "+pesan
                );     
        }  
    };

</script>


</body>
</html>

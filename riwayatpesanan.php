<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: loginadmin.php");
}
$username = $_SESSION['username'];

?>

<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM riwayat WHERE username='$username' ORDER BY date DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Laundry Cuciin</title>
    <!-- Favicon-->
    <link rel="icon" type="" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Template JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar bg-light static-top">
        <div class="container">
            <img src="icon cuciin.png" alt="">
            <a class="navbar-brand text-white" href="berhasil_login.php">Dashboard</a>
            <a class="navbar-brand text-white" href="hargauser.php">Harga</a>
            <a class="navbar-brand text-white" href="laundrynow.php">Laundry Now</a>
            <a class="navbar-brand text-white" href="statuspesanan.php">Status Pesanan</a>
            <a class="navbar-brand text-white" href="faquser.php">FAQ</a>
            <!--
            <div class="dropdown show">
                <a class="navbar-brand btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin Tools
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item navbar-brand" href="#">Action</a>
                    <a class="dropdown-item navbar-brand" href="#">Another action</a>
                    <a class="dropdown-item navbar-brand" href="#">Something else here</a>
                </div>
            </div>
            -->
            <div class="dropdown show">
            <a class="navbar-brand btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                <form action="" method="POST" class="navbar-brand text-white h3 " > 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                <?php echo " Selamat Datang, " . $_SESSION['username'] ."!"; ?></form></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item navbar-brand" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>



    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-12">
                    <div class="card bg-white text-light" style="border-radius: 2rem;">
                        <div class="card-body p-5 text-center">

                           
                                <form action="" method="post">
                                    <h2 class="fw-bold mb-2 text-center ">Daftar Riwayat Pesanan</h2>
                                    <p class="text-light-50 mb-5 text-center">Riwayat pesanan akan tampil disini
                                    </p>

                                    <div class="text-start">
                                    <a href="statuspesanan.php">< Status Pesanan     </a><br /><br />
                                    </div>

                                    <table class="table text-light p">

                                        <tr>
                                            <th>ID_P</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Phone</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Layanan</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>Jemput</th>
                                            <th>Antar</th>  
                                            <th>Status</th> 
                                            <th>Tgl Pesan</th> 
                                        </tr>
                                        <?php  
                                        while($user_data = mysqli_fetch_array($result)) {         
                                        echo "<tr>";
                                        echo "<td>".$user_data['idpesanan']."</td>";
                                        echo "<td>".$user_data['nama']."</td>";
                                        echo "<td>".$user_data['username']."</td>";
                                        echo "<td>".$user_data['phone']."</td>";
                                        echo "<td>".$user_data['alamat']."</td>";
                                        echo "<td>".$user_data['email']."</td>";
                                        echo "<td>".$user_data['layanan']."</td>";
                                        echo "<td>".$user_data['harga']."</td>";
                                        echo "<td>".$user_data['qty']."</td>";  
                                        echo "<td>".$user_data['total']."</td>";   
                                        echo "<td>".$user_data['jemput']."</td>";
                                        echo "<td>".$user_data['antar']."</td>";
                                        echo "<td><b>".$user_data['status']."</b></td>";
                                        echo "<td>".$user_data['date']."</td>";
                                        // echo "<td><a href='editadmin.php?idpesanan=$user_data[idpesanan]'>Edit</a> | <a href='deleteadmin.php?idpesanan=$user_data[idpesanan]'>Delete</a></td></tr>";        
                                        }
                                        ?>

                                    </table>


                                </form>

                            
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <!-- Navigation-->
    <nav class="navbar bg-light static-bot">
        <div class="container">
            <img src="icon cuciin.png" alt="">

            <div class="navbar-brand text-white">
                
            </div>

        </div>
    </nav>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
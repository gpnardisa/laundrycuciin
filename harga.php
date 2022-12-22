<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM harga ORDER BY no");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Daftar Harga</title>
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
            <img src="icon cuciin.png" style="width: 7%; height: 7%" alt="">
            <a class="navbar-brand text-white" href="index.html">Dashboard</a>
            <a class="navbar-brand text-white" href="harga.php">Harga</a>
            <a class="navbar-brand text-white" href="laundrynow.php">Laundry Now</a>
            <a class="navbar-brand text-white" href="statuspesanan.php">Status Pesanan</a>
            <a class="navbar-brand text-white" href="faq.html">FAQ</a>
            <a class="btn btn-primary btn-lg" href="login.php">Login</a>
        </div>
    </nav>



    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-12">
                    <div class="card bg-white text-light" style="border-radius: 2rem;">
                        <div class="card-body p-5 text-center">

                           
                                <form action="" method="post">
                                    <h2 class="fw-bold mb-2 text-center ">Daftar Harga Layanan Laundry Cuciin</h2>
                                    <p class="text-light-50 mb-3 text-center">Harga di bawah belum termasuk biaya antar-jemput
                                    </p>
                                    
                                    <table class="table text-light p">

                                        <tr>
                                            <th>No</th>
                                            <th>Layanan</th>
                                            <th>Durasi</th>
                                            <th>Harga Per Kg / Pcs</th>
                                        </tr>
                                        <?php  
                                        while($user_data = mysqli_fetch_array($result)) {         
                                        echo "<tr>";
                                        echo "<td>".$user_data['no']."</td>";
                                        echo "<td>".$user_data['layanan']."</td>";
                                        echo "<td>".$user_data['durasi']."</td>";
                                        echo "<td> Rp. &nbsp;".$user_data['harga']."</td>";
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
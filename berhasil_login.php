<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 


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



    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white py-5">
                        <!-- Page heading-->
                        <h1 class="mb-5 ">Selamat Datang!</h1>
                        <a class="btn btn-primary btn-lg" href="laundrynow.php">Laundry Sekarang!</a>
                        <a class="btn btn-primary btn-lg" href="harga.html">Cek Harga</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><svg class="m-auto text-primary"
                                xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                class="bi bi-stars" viewBox="0 0 16 16">
                                <path
                                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                            </svg></div>
                        <h3 class="text-white mt-2 mb-2">Wangi & Bersih</h3>
                        <p class="lead mb-0 text-white">Menggunakan detergen pilihan sehingga membuat pakaian anda
                            bersih dari noda dan wangi sepanjang hari.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><svg class="m-auto text-primary"
                                xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                class="bi bi-card-checklist" viewBox="0 0 16 16">
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path
                                    d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                            </svg></div>
                        <h3 class="text-white mt-2 mb-2">Layanan Lengkap</h3>
                        <p class="lead mb-0 text-white">Memiliki pilihan layanan yang lengkap dari Layanan Kiloan sampai
                            Layanan Satuan. Juga menyediakan Layanan Cuci Lainnya seperti Karpet, Sprei, Sepatu, dll.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><svg class="m-auto text-primary"
                                xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                            </svg></div>
                        <h3 class="text-white mt-2 mb-2">Tepat Waktu</h3>
                        <p class="lead mb-0 text-white">Layanan yang tepat waktu sehingga menjadikan kepercayaan anda
                            sebagai mitra Layanan Laundy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-12">
                    <div class="card bg-white text-light" style="border-radius: 2rem;">
                        <div class="card-body p-5 text-center">

                            <div class="faq_area section_padding_130" id="faq">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <!-- Section Heading-->
                                            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                <h2><span>Frequently </span> Asked Questions</h3>
                                                    <p>Cuciin adalah Layanan Laundry yang mengutamakan kepuasan dari
                                                        pelanggan.</p>
                                                    <div class="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-1">
                                        <!-- FAQ Area-->
                                        <div class="col-12 col-sm-12 col-lg-9">
                                            <div class="accordion faq-accordian" id="faqAccordion">
                                                <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s"
                                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0 collapsed" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">Bagaimana cara mendaftar menjadi
                                                            member Cuciin?<span class="lni-chevron-up"></span></h6>
                                                    </div>
                                                    <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                                                        data-parent="#faqAccordion">
                                                        <div class="card-body">
                                                            <p>Kamu dapat mendaftar dengan cara menekan tombol Login di
                                                                kanan atas, kemudian scroll ke bawah kemudian pilih
                                                                "klik disini" pada elemen "belum memiliki akun,".</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s"
                                                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0 collapsed" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="true"
                                                            aria-controls="collapseTwo">Bagaimana cara melakukan Layanan
                                                            Pemesanan Antar-Jemput?<span class="lni-chevron-up"></span>
                                                            </h6>
                                                    </div>
                                                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                                        data-parent="#faqAccordion">
                                                        <div class="card-body">
                                                            <p>Dengan cara menekan "Laundry Sekarang!" pada Navigasi,
                                                                kemudian pilih layanan yang diinginkan dan estimasi
                                                                berat, kemudian tekan konfirmasi untuk melanjutkan
                                                                pemesanan. Maka karyawan kami akan menjemput ke Alamat
                                                                yang terdaftar.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s"
                                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0 collapsed" data-toggle="collapse"
                                                            data-target="#collapseThree" aria-expanded="true"
                                                            aria-controls="collapseThree">Apa keuntungan menjadi member
                                                            cuciin?<span class="lni-chevron-up"></span></h6>
                                                    </div>
                                                    <div class="collapse" id="collapseThree"
                                                        aria-labelledby="headingThree" data-parent="#faqAccordion">
                                                        <div class="card-body">
                                                            <p>Loyalitas dan Kepuasan pelanggan menjadi tanggung jawab
                                                                kami, oleh karena itu kami memberikan potongan sebesar
                                                                5% dari total yang harus dibayarkan untuk pemesanan
                                                                layanan di atas Rp. 50.000.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Support Button-->
                                            <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp"
                                                data-wow-delay="0.5s"
                                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <i class="lni-emoji-sad"></i>
                                                <p class="mb-0 px-2">Tidak dapat menemukan jawaban anda?</p>
                                                <a href="faq.html"> pertanyaan lainnya...</a>
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
    <!--FAQ-->


    
    <!-- Navigation -->
    <nav class="navbar bg-light static-bot">
        <div class="container">
            <img src="icon cuciin.png" alt="">

            <div class="navbar-brand text-light">
            
            </div>

        </div>
    </nav>
    


    <!-- Footer
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#!">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2022. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    -->

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
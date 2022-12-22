<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['ausername'])) {
    header("Location: loginadmin.php");
}
 
if (isset($_POST['submit'])) {
    $ausername = $_POST['ausername'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM admin WHERE ausername='$ausername'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO admin (ausername, password)
                    VALUES ('$ausername', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi Admin berhasil!')</script>";
                $ausername = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Maaf! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Maaf! Username Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Maaf! Password Tidak Sesuai')</script>";
    }

    echo "<script>alert('Berhasil Mendaftar, Silahkan Pergi Ke Halaman Login!')</script>";
    
    
} 

 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sign Up Admin</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
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
            <a class="navbar-brand text-white" href="index.html">Dashboard</a>
        </div>
    </nav>

    <div class="alert alert-warning d-none" role="alert">
        <?php echo $_SESSION['error']?>
    </div>

    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                    <div class="card bg-white text-light" style="border-radius: 2rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="" method="POST" class="">
                                    <h2 class="fw-bold mb-2 ">Sign Up Sebagai Admin</h2>
                                    <p class="text-light-50 mb-5 ">Silahkan Masukkan Data Admin Baru</p>

                                     <div class="form-light mb-4 h-6">
                                        <label class="form-label h5" for="ausername">Username</label>
                                        <input type="text" placeholder="username" id="ausername" name="ausername" class="form-control form-control-lg" value="<?php echo $ausername; ?>" required>
                                     </div>

                                     <div class="form-light mb-4 h-6">
                                        <label class="form-label h5" for="password">Password</label>
                                        <input type="password" placeholder="Password" name="password" class="form-control form-control-lg" value="<?php echo $_POST['password']; ?>" required>
                                    </div>
                                    <div class="form-light mb-4 h-6">
                                        <label class="form-label h5" for="cpassword">Konfirmasi Password</label>
                                        <input type="password" placeholder="Confirm Password" name="cpassword" class="form-control form-control-lg" value="<?php echo $_POST['cpassword']; ?>" required>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button class="btn btn-primary btn-lg px-cust mt-2" name="submit">Konfirmasi</button>

                                    

                                </form>
                            </div>
                            <div>
                                <p class="mb-0">Sudah Memiliki Akun Admin? Klik Disini Untuk <a href="loginadmin.php"
                                        class="text-light-50 fw-bold text-decoration-none"> Login Sebagai Admin.</a>
                                </p>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bot Navigation-->
    <nav class="navbar bg-light static-bot">
        <div class="container">
            <img src="icon cuciin.png" alt="">

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
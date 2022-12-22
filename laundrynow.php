<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$username = $_SESSION['username'];

?>

<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

$user_data = mysqli_fetch_array($result);

// take column from table harga for dropdown
require 'config.php'; 
$query = "SELECT no, layanan FROM harga";
?>


<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$idpesanan = $_POST['idpesanan'];
	
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$phone=$_POST['phone'];
    $alamat=$_POST['alamat'];
	$email=$_POST['email'];
    $layanan=$_POST['layanan'];
	$harga=$_POST['harga'];
	$qty=$_POST['qty'];
	$total=$_POST['total'];
    $jemput=$_POST['jemput'];
	$antar=$_POST['antar'];
	$status=$_POST['status'];
	$date=$_POST['date'];

    include_once("config.php");

    // insert user data
	$result = mysqli_query($conn, " INSERT INTO pesanan (idpesanan, nama, username, phone, alamat, email, layanan, harga, qty, total, jemput, antar, status, date)
    VALUES ('$idpesanan' ,'$nama', '$username', '$phone', '$alamat', '$email', '$layanan', '$harga' ,'$qty', '$total', '$jemput' ,'$antar', '$status', '$date')");
    
    //delete from pesanan
    // $result = mysqli_query($conn, "DELETE FROM pesanan WHERE idpesanan=$idpesanan");

	// Redirect to homepage to display updated user in list
	header("Location: statuspesanan.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Laundry Now!</title>
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
    <script src="https://randojs.com/1.0.0.js"></script>
    <script>
    function showRandomNumber() {
    var d = rando(10000, 99999)
    document.getElementById('idpesanan').value = d;
    }
    </script>
    <script>
    function hasil() {
    var harga=parseInt(document.getElementById('harga').value);
    var qty=parseFloat(document.getElementById('qty').value);
    var total=harga*qty;
    if(total<60000){
        total = total + 5000;
        document.getElementById('total').value=total;
    } else {
        total=harga*qty;
        document.getElementById('total').value=total;
    }

    }

    </script>   

    <script>
    function getDate() {
        var d = new Date();
        var t = d.getDate();
        var m = d.getMonth() + 1;
        var y = d.getFullYear()
        document.getElementById('date').value = y +  "-" + m  +  "-" + t;
    }
    </script>

    <script>
    function getData() {
        showRandomNumber();
        getDate();
    }
    </script>


</head>

<body onload="getData();">
    <!-- Navigation-->
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
                <div class="col-12 col-md-8 col-lg-6 col-xl-10">
                    <div class="card bg-white text-light" style="border-radius: 2rem;">
                        <div class="card-body p-5 ">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="laundrynow.php" method="POST">
                                    <h2 class="fw-bold mb-2 text-center ">Laundry Now!</h2>
                                    <p class="text-light-50 mb-5 text-center">Pesan Sekarang Layanan Laundry dari Laundry Cuciin
                                    </p>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="nama">Nama Lengkap</label>
                                        <input type="text" id="nama" name="nama" value="<?php echo $user_data['nama'] ?>" class="form-control form-control-lg" readonly>
                                    </div>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="username">Username</label>
                                        <input type="text" id="username" name="username" value="<?php echo $user_data['username'] ?>"class="form-control form-control-lg" readonly/>
                                    </div>

                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="phone">Nomor Handphone (Whatsapp)</label>
                                        <input type="text" id="phone" name="phone" value="<?php echo $user_data['phone'] ?>"
                                            class="form-control form-control-lg" readonly/>
                                    </div>

                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="alamat">Alamat Lengkap</label>
                                        <input type="text" id="alamat" name="alamat" value="<?php echo $user_data['alamat'] ?>"
                                            class="form-control form-control-lg" readonly/>
                                    </div>

                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="email">Email</label>
                                        <input type="email" id="email" name="email" value="<?php echo $user_data['email'] ?>"
                                            class="form-control form-control-lg" readonly/>
                                    </div>

                                    <p class="text-light-50 mb-5 mt-5 h3 text-center">Silahkan Pilih Layanan yang Diinginkan</p>


                                    
                                    <div class=" form-light mb-4">
                                        <!-- ID Pesanan-->
                                        <input type="hidden" id="idpesanan" name="idpesanan" 
                                        action="javascript:showRandomNumber()" class="form-control form-control-lg" />
                                    </div>

                                    <!-- ID Pesanan
                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="layanan" id="layanan">Layanan</label>
                                        <select id="layanan" name="layanan" class="form-control form-control-lg">
                                        <option value="-">Silahkan Pilih Layanan...</option>
                                        <option value="Cuci Kering Lipat (Min 3 kg)">Cuci Kering Lipat (Min 3 kg)</option>
                                        <option value="Cuci Setrika (Min 3 kg)">Cuci Setrika (Min 3 kg)</option>
                                        <option value="Cuci Kering Lipat Express (Min 3 kg)">Cuci Kering Lipat Express (Min 3 kg)</option>
                                        <option value="Cuci Setrika Express (Min 3 kg)">Cuci Setrika Express (Min 3 kg)</option>
                                        <option value="Handuk Mandi">Handuk Mandi</option>
                                        <option value="Bed Cover">Bed Cover</option>
                                        <option value="Sepatu">Sepatu</option>
                                        <option value="Jaket / Sweater / Hoodie">Jaket / Sweater / Hoodie</option>
                                        <option value="Jeans">Jeans</option>
                                    </select>
                                    </div>
                                    -->

                                    <div class=" form-light mb-4">
                                    <label class="form-label h5" for="layanan" id="layanan">Layanan</label>
                                    <?php
                                    //query pertama cuma buat ngisi dropdown
                                    $result = mysqli_query($conn,"select * from harga ORDER BY no");

                                    //bikin array baru buat persiapan si harga
                                    $jsArray = "var nama_layanan = new Array();\n";

                                    //ini dropdownnya
                                    echo '
                                    <select class= "form-control form-control-lg" for="layanan" id="layanan" name="layanan" onchange="document.getElementById(\'harga\').value = nama_layanan[this.value]">
                                    <option>Pilih Layanan...</option>';
                                    //ini logic buat munculin semua opsi di dropdownnya
                                    while ($row = mysqli_fetch_array($result)) {
                                    echo '
                                    <option value="' . $row['layanan'] . '">' . $row['layanan'] . '</option>';

                                    //ini dia update variabel jsarray diatas buat munculin harga berdasarkan no 
                                    $jsArray .= "nama_layanan['" . $row['layanan'] . "'] = '" . addslashes($row['harga']) . "';\n";
                                    }
                                    echo '
                                    </select>';
                                    ?>
                                    </div>


                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="harga">Harga Per (Kg) / Satuan (Pcs)</label>
                                         <!-- ini bikin tujuan si js nanti lempar kemana -->
                                        <input type="text" name="harga" id="harga" placeholder="Pilih layanan untuk menampilkan harga"
                                        class="form-control form-control-lg"  readonly></td>
                                        <script type="text/javascript">
                                        //tinggal di panggil deh di mari
                                        <?php echo $jsArray; ?>
                                        </script>    
                                        </tr>
                                        </table>
                                    </div>

                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="qty">Berat (Kg) / Satuan (Pcs)</label>
                                        <input type="number" id="qty" name="qty" placeholder="contoh : " step="0.1"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="total">Total Bayar</label>
                                        <input type="text" id="total" name="total" placeholder="Klik Tombol Hitung Untuk Menampilkan Total yang Harus dibayar"
                                            class="form-control form-control-lg" required onkeypress="return false;" style="background-color: #e9ecef; opacity: 1;"/>
                                        <label class="form-label h6 mt-4" for="total">Catatan : Pembelian di bawah Rp. 60000 akan dikenakan biaya antar-jemput sebesar Rp. 5000.</label>
                                    </div>
                                    
                                    <div class="text-center">
                                    <button onclick="hasil()" class="btn btn-primary btn-lg px-cust mt-2" type="button" >Hitung</button>
                                    </div>
                                

                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="jemput" id="jemput">Waktu Jemput</label>
                                        <select id="jemput" name="jemput" class="form-control form-control-lg">
                                        <option>Silahkan Pilih Waktu Jemput...</option>
                                        <option value="Pagi">Pagi : 09.00 - 11.30</option>
                                        <option value="Siang">Siang : 12.30 - 15.00</option>
                                        <option value="Malam">Sore : 16.00 - 18.00</option>
                                        <option value="Anytime">Anytime : 09.00 - 18.00</option>
                                    </select>
                                    </div>

                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="antar" id="antar">Waktu Antar</label>
                                        <select id="antar" name="antar" class="form-control form-control-lg">
                                        <option>Silahkan Pilih Waktu Antar...</option>
                                        <option value="Pagi">Pagi : 09.00 - 11.30</option>
                                        <option value="Siang">Siang : 12.30 - 15.00</option>
                                        <option value="Malam">Sore : 16.00 - 18.00</option>
                                        <option value="Anytime">Anytime : 09.00 - 18.00</option>
                                    </select>
                                    </div>

                                    <div class=" form-light mb-4">
                                        <!-- Status Pesanan-->
                                        <input type="hidden" id="status" name="status" 
                                        value="Pending" class="form-control form-control-lg" />
                                    </div>

                                    <div class=" form-light mb-4" >
                                        <!-- Tanggal Pesanan -->
                                        <input type="hidden" id="date" name="date" 
                                        action="javascript:getDate()" class="form-control form-control-lg" />
                                    </div>

                                    <div class="text-center">
                                    <input class="btn btn-primary btn-lg px-cust mt-2" type="submit" name="update" value="Pesan Sekarang!"></td>
                                    </div>

                                </form>
                            
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
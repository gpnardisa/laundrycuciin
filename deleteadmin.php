<?php 
 
session_start();
 
if (!isset($_SESSION['ausername'])) {
    header("Location: loginadmin.php");
}

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
	$result = mysqli_query($conn, " INSERT INTO riwayat(idpesanan, nama, username, phone, alamat, email, layanan, harga, qty, total, jemput, antar, status, date)
    VALUES ('$idpesanan', '$nama', '$username', '$phone', '$alamat', '$email', '$layanan', '$harga' ,'$qty', '$total', '$jemput' ,'$antar', '$status', '$date')");
    
    //delete from pesanan
    $result = mysqli_query($conn, "DELETE FROM pesanan WHERE idpesanan=$idpesanan");

	// Redirect to homepage to display updated user in list
	header("Location: viewadmin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Selesaikan Pesanan</title>
	<link href="css/styles.css" rel="stylesheet" />
</head>
<body>
	<?php 
	include "config.php";
    $idpesanan = $_GET['idpesanan'];
 
    // Fetech user data based on id
    $result = mysqli_query($conn, "SELECT * FROM pesanan WHERE idpesanan=$idpesanan");

	while($user_data = mysqli_fetch_array($result)){
	?>

<section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-10">
                    <div class="card bg-white text-light" style="border-radius: 2rem;">
                        <div class="card-body p-5 ">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="deleteadmin.php" method="POST">
                                    <h2 class="fw-bold mb-2 text-center ">Selesaikan Pesanan</h2>
                                    <p class="text-light-50 mb-5 text-center">Pastikan pesanan sudah diantar sampai ke rumah pemesan sebelum melakukan tindakan selesaikan pesanan
                                    </p>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="idpesanan">ID Pesanan</label>
                                        <input type="text" name="idpesanan" class="form-control form-control-lg" value="<?php echo $user_data['idpesanan'] ?>"readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="nama">Nama Pemesan</label>
                                        <input type="text" name="nama" class="form-control form-control-lg" value="<?php echo $user_data['nama'] ?>"readonly>
                                    </div>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="username">Username</label>
                                        <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $user_data['username'] ?>"readonly>
                                    </div>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control form-control-lg" value="<?php echo $user_data['phone'] ?>"readonly>
                                    </div>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control form-control-lg" value="<?php echo $user_data['alamat'] ?>"readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="email">Email</label>
                                        <input type="text" name="email" class="form-control form-control-lg" value="<?php echo $user_data['email'] ?>"readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="layanan">Layanan</label>
                                        <input type="text" name="layanan" class="form-control form-control-lg" value="<?php echo $user_data['layanan'] ?>"readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="harga">Harga</label>
                                        <input type="text" name="harga" id="harga" class="form-control form-control-lg" value="<?php echo $user_data['harga'] ?>"readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="qty">QTY</label>
                                        <input type="number" step="0.1" name="qty" id="qty" class="form-control form-control-lg" value="<?php echo $user_data['qty'] ?>" readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="total">Total Bayar</label>
                                        <input type="text" name="total" id="total" class="form-control form-control-lg" value="<?php echo $user_data['total'] ?>"readonly>
                                    </div>
                                
									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="jemput">Waktu Jemput</label>
                                        <input type="text" name="jemput" id="jemput" class="form-control form-control-lg" value="<?php echo $user_data['jemput'] ?>"readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="antar">Waktu Antar</label>
                                        <input type="text" name="antar" id="antar" class="form-control form-control-lg" value="<?php echo $user_data['antar'] ?>"readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="total">Status Pesanan</label>
                                        <input type="radio" name="status" <?php if($user_data['status']=="DITOLAK") echo "checked";?> value="DITOLAK">DITOLAK
										<input type="radio" name="status" <?php if($user_data['status']=="Pending") echo "checked";?> value="Pending">Pending
										<input type="radio" name="status" <?php if($user_data['status']=="Dikonfirmasi") echo "checked";?> value="Dikonfirmasi">Dikonfirmasi
										<input type="radio" name="status" <?php if($user_data['status']=="Jemput") echo "checked";?> value="Jemput">Jemput	
										<input type="radio" name="status" <?php if($user_data['status']=="Cuci") echo "checked";?> value="Cuci">Cuci
										<input type="radio" name="status" <?php if($user_data['status']=="Antar") echo "checked";?> value="Antar">Antar
										<input type="radio" name="status" <?php if($user_data['status']=="Selesai") echo "checked";?> value="Selesai">Selesai	
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="date">Tanggal Pemesanan</label>
                                        <input type="text" name="date" id="date" class="form-control form-control-lg" value="<?php echo $user_data['date'] ?>"readonly>
                                    </div>

                                    <div class="text-center">
                                    <input type="hidden" name="idpesanan" value=<?php echo $_GET['idpesanan'];?>>
									<input class="btn btn-primary btn-lg px-cust mt-2" type="submit" name="update" value="Selesaikan Pesanan">
									<a class="btn btn-danger btn-lg px-5 mt-2" href="viewadmin.php">Batal</a>
                                    </div>

                                </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!--
	<form action="deleteadmin.php" method="post">		
		<table>
			<tr>
				<td>ID Pesanan</td>
				<td><input type="text" name="idpesanan" value="<?php echo $user_data['idpesanan'] ?>"readonly></td>					
			</tr>
            <tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $user_data['nama'] ?>"></td>					
			</tr>
            <tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $user_data['username'] ?>"></td>					
			</tr>
            <tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value="<?php echo $user_data['phone'] ?>"></td>					
			</tr>			
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $user_data['alamat'] ?>"></td>					
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $user_data['email'] ?>"></td>					
			</tr>	
            <tr>
				<td>Layanan</td>
				<td><input type="text" name="layanan" value="<?php echo $user_data['layanan'] ?>"></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $user_data['harga'] ?>"></td>					
			</tr>
            <tr>
				<td>QTY</td>
				<td><input type="number" step="0.1" name="qty" value="<?php echo $user_data['qty'] ?>"></td>					
			</tr>	
			<tr>
				<td>Total</td>
				<td><input type="text"  name="total" value="<?php echo $user_data['total'] ?>"></td>					
			</tr>	
            <tr>
				<td>Jemput</td>
				<td><input type="text" name="jemput" value="<?php echo $user_data['jemput'] ?>"></td>					
			</tr>	
            <tr>
				<td>Antar</td>
				<td><input type="text" name="antar" value="<?php echo $user_data['antar'] ?>"></td>					
			</tr>	
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $user_data['status'] ?>"></td>					
			</tr>
			<tr>
				<td>Date</td>
				<td><input type="text" name="date" value="<?php echo $user_data['date'] ?>"></td>					
			</tr>	
			<tr>
            <td><input type="hidden" name="idpesanan" value=<?php echo $_GET['idpesanan'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>					
			</tr>				
		</table>
	</form>
	-->
	<?php } ?>
</body>
</html>
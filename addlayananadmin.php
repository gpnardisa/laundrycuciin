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
	$no=$_POST['no'];
	$layanan=$_POST['layanan'];
	$durasi=$_POST['durasi'];
    $harga=$_POST['harga'];

    include_once("config.php");

    // insert user data
	$result = mysqli_query($conn, " INSERT INTO harga(no, layanan, durasi, harga)
    VALUES ('$no', '$layanan', '$durasi', '$harga')");

	// Redirect to homepage to display updated user in list
	header("Location: hargaadmin.php");
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
    // $idpesanan = $_GET['idpesanan'];
 
    // Fetech user data based on id
    // $result = mysqli_query($conn, "SELECT * FROM pesanan WHERE idpesanan=$idpesanan");

	// while($user_data = mysqli_fetch_array($result)){
	?>

<section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-10">
                    <div class="card bg-white text-light" style="border-radius: 2rem;">
                        <div class="card-body p-5 ">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="addlayananadmin.php" method="POST">
                                    <h2 class="fw-bold mb-2 text-center ">Tambah Layanan</h2>
                                    <p class="text-light-50 mb-5 text-center">Halaman ini adalah form untuk menambah layanan ke tabel harga
                                    </p>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="no">No Layanan</label>
                                        <input type="text" name="no" class="form-control form-control-lg" value="" placeholder="contoh : 12">
                                    </div>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="layanan">Nama Layanan</label>
                                        <input type="text" name="layanan" class="form-control form-control-lg" value="">
                                    </div>

                                    <div class=" form-light mb-4">
                                        <label class="form-label h5" for="durasi" id="durasi">Layanan</label>
                                        <select id="durasi" name="durasi" class="form-control form-control-lg">
                                        <option value="-">Silahkan Pilih Durasi...</option>
                                        <option value="Regular (3 Hari)">Regular (3 Hari)</option>
                                        <option value="Express (1 Hari)">Express (1 Hari)</option>
                                    </select>
                                    </div>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="harga">Harga Per Kg / Pcs</label>
                                        <input type="text" name="harga" placeholder="contoh : 8000" class="form-control form-control-lg" value="">
                                    </div>


                                    <div class="text-center">
									<input class="btn btn-primary btn-lg px-cust mt-2" type="submit" name="update" value="Tambah Layanan">
									<a class="btn btn-danger btn-lg px-5 mt-2" href="hargaadmin.php">Batal</a>
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
	<?php // } ?>
</body>
</html>
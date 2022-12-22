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
    include_once("config.php");
    
    //delete from pesanan
    $result = mysqli_query($conn, "DELETE FROM harga WHERE no=$no");

	// Redirect to homepage to display updated user in list
	header("Location: hargaadmin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Layanan</title>
	<link href="css/styles.css" rel="stylesheet" />
</head>
<body>
	<?php 
	include "config.php";
    $no = $_GET['no'];
 
    // Fetech user data based on id
    $result = mysqli_query($conn, "SELECT * FROM harga WHERE no=$no");

	while($user_data = mysqli_fetch_array($result)){
	?>

<section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-10">
                    <div class="card bg-white text-light" style="border-radius: 2rem;">
                        <div class="card-body p-5 ">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="deletehargaadmin.php" method="POST">
                                    <h2 class="fw-bold mb-2 text-center ">Hapus Layanan</h2>
                                    <p class="text-light-50 mb-5 text-center">Tindakan ini tidak dapat diurungkan
                                    </p>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="no">No</label>
                                        <input type="text" name="no" class="form-control form-control-lg" value="<?php echo $user_data['no'] ?>"readonly>
                                    </div>

									<div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="layanan">Nama Layanan</label>
                                        <input type="text" name="layanan" class="form-control form-control-lg" value="<?php echo $user_data['layanan'] ?>"readonly>
                                    </div>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="durasi">Durasi</label>
                                        <input type="text" name="durasi" class="form-control form-control-lg" value="<?php echo $user_data['durasi'] ?>"readonly>
                                    </div>

                                    <div class=" form-light mb-4 h-6">
                                        <label class="form-label h5" for="harga">Harga Per Kg / Pcs</label>
                                        <input type="text" name="harga" class="form-control form-control-lg" value="<?php echo $user_data['harga'] ?>"readonly>
                                    </div>

                                    
                                    <div class="text-center">
									<input class="btn btn-primary btn-lg px-cust mt-2" type="submit" name="update" value="Hapus Layanan">
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
	<?php } ?>
</body>
</html>
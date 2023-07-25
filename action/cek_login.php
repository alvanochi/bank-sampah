
		<?php
include '../controller/koneksi.php';
		if(isset($_POST['login'])){
			$user = mysqli_real_escape_string($conn, $_POST['user']);
			$pass = mysqli_real_escape_string($conn, md5($_POST['pass']));


			$data_admin = mysqli_query($conn, "SELECT * FROM tb_admin WHERE kode_admin = '$user' AND password = '$pass'");
			$data_nasabah = mysqli_query($conn, "SELECT * FROM tb_users WHERE nik = '$user' AND password = '$pass'");

			$n = mysqli_fetch_array($data_nasabah);
			$a = mysqli_fetch_array($data_admin);

			// admin
			$nama_a = $a['nama'];
			$alamat_a = $a['alamat'];
			$no_telp_a = $a['no_telp'];
			$email_a = $a['email'];
			$password_a = $a['password'];
			$level = $a['level'];
			$foto_a = $a['foto'];
			$kode_admin = $a['kode_admin']; 	
			$cek_admin = mysqli_num_rows($data_admin);
			

			// nasabah (masyarakat)
			$nama_n = $n['nama'];
			$alamat = $n['alamat'];
			$no_telp_n = $n['no_telp'];	
			$email_n = $n['email'];
			$password_n = $n['password'];
			$saldo = $n['saldo'];
			$sampah = $n['sampah'];
			$nik = $n['nik'];
			$cek_user = mysqli_num_rows($data_nasabah);

			if ($user == "" || $pass == "") {
				echo "
				<script>
					alert('Username dan Password tidak boleh kosong!');
					document.location.href ='../login.php';
				</script>
				";
			}
			else {
				if ($cek_admin > 0) {
				session_start();
				$_SESSION['nama'] = $nama_a;
				$_SESSION['alamat'] = $alamat_a;
				$_SESSION['no_telp'] = $no_telp_a;
				$_SESSION['email'] = $email_a;
				$_SESSION['password'] = $password_a;
				$_SESSION['level'] = $level;
				$_SESSION['foto'] = $foto_a;
				$_SESSION['kode_admin'] = $kode_admin;
				$_SESSION['status'] = "login_a";
				echo "
				<script>
					alert('Selamat Anda berhasil login!');
					document.location.href ='../pages/admin_pengelola_sampah/index.php';
				</script>
				";
				}
				else if ($cek_user > 0) {
				session_start();
				$_SESSION['nama_n'] = $nama_n;
				$_SESSION['email_n'] = $email_n;
				$_SESSION['pass_n'] = $password_n;
				$_SESSION['telepon_n'] = $telepon_n;
				$_SESSION['nik'] = $nik;
		
				$_SESSION['alamat'] = $alamat;
				$_SESSION['saldo'] = $saldo;
				$_SESSION['sampah'] = $sampah;
				echo "
					<script>
						alert('Selamat Anda berhasil login!');
						document.location.href ='../pages/user/index.php';
					</script>
				";	
				}
				else {
				echo "
				<script>
					alert('Maaf username dan password tidak valid!');
					document.location.href ='../login.php';
				</script>
				";
				}
			}
		} else {header('location:../login.php');}

	?>
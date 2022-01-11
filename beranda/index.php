<?php
require_once "model/m_beranda.php";
$crud = new m_beranda();
$data = $crud->jm_all();
?>
<aside class="text-center bg-gradient-primary-to-secondary" style="padding-bottom: 2rem !important;">
	<div class="container px-5">
		<div class="row gx-5 justify-content-center">
			<div class="col-xl-12">
				<h2 class="text-white">
				SISTEM ARSIP ONLINE TIYUH DAYA ASRI BERBASIS WEB
				<br><br>"Selamat Datang <?php echo $_SESSION['nama'] ?>"
				<br>Anda login sebagai <?php echo $_SESSION['level'] ?>
				</h2>
			</div>
		</div>
	</div>
</aside>
<section>
	<div class="container px-5">
		<div class="row gx-5">
			<div class="col-lg-4 mb-4">
				<div class="card bg-gradient-primary-to-secondary text-white">
					<div class="card-body">
						<i class="fas fa-folder-open"></i> Jumlah Kategori Dokumen
					</div>
					<div class="card-footer">
						<?php echo $data['jm_kategori'] ?> Kategori Dokumen
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-4">
				<div class="card bg-gradient-primary-to-secondary text-white">
					<div class="card-body">
						<i class="fas fa-envelope"></i> Jumlah Dokumen
					</div>
					<div class="card-footer">
						<?php echo $data['jm_dokumen'] ?> Dokumen
					</div>
				</div>
			</div>
			<?php if ($_SESSION['level'] == 'Admin'): ?>
			<div class="col-lg-4 mb-4">
				<div class="card bg-gradient-primary-to-secondary text-white">
					<div class="card-body">
						<i class="fas fa-user"></i> Jumlah User
					</div>
					<div class="card-footer">
						<?php echo $data['jm_user'] ?> User
					</div>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>

<?php $page = empty($_GET['page']) ? '' : $_GET['page']?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
	<div class="container">
		<a class="navbar-brand fw-bold" href="?page=beranda"><i class="fas fa-file-archive"></i> DESA</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		Menu
		<i class="bi-list"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav me-auto me-4 my-3 my-lg-0">
				<li class="nav-item ac"><a class="nav-link me-lg-3 <?php echo $page == 'beranda' || $page == '' ? 'active' : '' ?>" href="?page=beranda">Beranda</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Input Data
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item <?php echo $page == 'dokumen' ? 'active' : '' ?>" href="?page=dokumen">Dokumen</a></li>
						<li><a class="dropdown-item <?php echo $page == 'kategori' ? 'active' : '' ?>" href="?page=kategori">Kategori Dokumen</a></li>
					</ul>
				</li>
				<?php if ($_SESSION['level'] == 'Admin'): ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Pengaturan
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item <?php echo $page == 'user' ? 'active' : '' ?>" href="?page=user">User</a></li>
						<li><a class="dropdown-item <?php echo $page == 'backup' ? 'active' : '' ?>" href="?page=backup">Backup Database</a></li>
						<li><a class="dropdown-item <?php echo $page == 'restore' ? 'active' : '' ?>" href="?page=restore">Restore Database</a></li>
					</ul>
				</li>
				<?php endif?>
			</ul>
			<a href="logout.php" class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
			<span class="d-flex align-items-center">
				<i class="fas fa-sign-out-alt"></i>&nbsp;
				<span class="small">Logout</span>
			</span>
			</a>
		</div>
	</div>
</nav>
a

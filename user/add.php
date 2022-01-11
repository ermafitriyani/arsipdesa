<?php
require_once "model/m_user.php";
$crud_kategori = new m_user();
$kategori = $crud_kategori->read();
?>
<section>
    <div class="container px-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?page=beranda">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">User</li>
            </ol>
        </nav>
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 mb-4">
                <div class="card bg-gradient-primary-to-secondary text-white">
                    <div class="card-body text-uppercase">
                        <i class="fas fa-user"></i> User
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <?php $message = empty($_SESSION['message']) ? '' : $_SESSION['message'];unset($_SESSION['message'])?>
                <?php if (!empty($message)): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif?>
                <div class="card">
                    <div class="card-header">
                        Form Tambah User
                    </div>
                    <div class="card-body">
                        <form method="POST" action="user/save.php">
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Level user</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="level" required>
                                        <option value="">Pilih Level</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Lurah">Lurah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                            <a class="btn btn-warning" onclick="window.history.go(-1); return false;"><i class="fas fa-times"></i> Batal</a>
                        </form>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

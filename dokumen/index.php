<?php require_once "model/m_dokumen.php";?>
<?php $crud = new m_dokumen();?>
<?php $result_set = $crud->read();?>
<section>
    <div class="container px-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?page=beranda">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dokumen</li>
            </ol>
        </nav>
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 mb-4">
                <div class="card bg-gradient-primary-to-secondary text-white">
                    <div class="card-body text-uppercase">
                        <i class="fas fa-envelope"></i> Dokumen
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <?php $message = empty($_SESSION['message']) ? '' : $_SESSION['message'];unset($_SESSION['message'])?>
                <?php $message_type = empty($_SESSION['message_type']) ? '' : $_SESSION['message_type'];unset($_SESSION['message_type'])?>
                <?php if (!empty($message)): ?>
                <div class="alert alert-<?php echo $message_type ?> alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif?>
                <div class="card">
                    <div class="card-header">
                        <a href="?page=dokumen&aksi=add" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr align="center">
                                    <th width="15%">ID dokumen</th>
                                    <th>Nama dokumen</th>
                                    <th>Detail dokumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($result = mysqli_fetch_assoc($result_set)) {?>
                                <tr>
                                    <td><?php echo $result["id"]; ?></td>
                                    <td><?php echo $result["nama_dokumen"]; ?></td>
                                    <td>
                                        Kategori : <?php echo $result["nama_kategori"]; ?>
                                        <br>Tahun : <?php echo $result["tahun"]; ?>
                                        <br>Nomor : <?php echo $result["nomor"]; ?>
                                        <br>Keterangan : <?php echo $result["keterangan"]; ?>
                                        <br>
                                        <?php if (!empty($result['file'])): ?>
                                        <a class="btn btn-danger btn-sm" href="uploads/dokumen/<?php echo $result["file"]; ?>" target="_blank"><i class="fas fa-file"></i> File</a>
                                        <?php else: ?>
                                        <button class="btn btn-danger btn-sm" disabled><i class="fas fa-file"></i> File Tidak Ada</button>
                                        <?php endif?>
                                    </td>
                                    <td>
                                        <a href="?page=dokumen&aksi=edit&id=<?php echo $result['id'] ?>" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="?page=dokumen&aksi=delete&id=<?php echo $result['id'] ?>" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapus data ini..?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

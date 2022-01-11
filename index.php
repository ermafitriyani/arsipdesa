<?php
// error_reporting(E_ERROR | E_PARSE);
session_start();
if (empty($_SESSION['login'])) {
    header("Location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi Arsip Dokumen</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico?v=1.1" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css?v=1.1" rel="stylesheet" />
        <!-- FontAwesome Icons -->
        <link href="assets/libs/fontawesome/css/all.min.css" rel="stylesheet"/>
        <!-- DataTables -->
        <link href="assets/libs/datatables/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    </head>
    <body id="page-top" class="d-flex flex-column min-vh-100">
        <?php include 'template/header.php'?>
<content>
<?php
$page = empty($_GET['page']) ? '' : $_GET['page'];
$aksi = empty($_GET['aksi']) ? '' : $_GET['aksi'];

if ($page == "") {
    include "beranda/index.php";
} else {
    if (empty($aksi)) {
        include "$page/index.php";
    } else {
        include "$page/$aksi.php";
    }
}
?>
</content>
        <?php include 'template/footer.php'?>
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/jquery/jquery-3.6.0.js"></script>
        <script src="assets/libs/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/js/dataTables.bootstrap5.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js?v=1.12"></script>
        <script>
$(document).ready(function() {
    $('#example').DataTable();
} );
        </script>
    </body>
</html>

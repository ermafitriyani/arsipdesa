<?php
session_start();
require_once "model/m_login.php";
$crud = new m_login();
if (!empty($_POST)) {
    $result = $crud->cek_login();
    if ($result != false) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION["login"] = true;
        $_SESSION["username"] = $data['username'];
        $_SESSION["nama"] = $data['nama'];
        $_SESSION["level"] = $data['level'];
        echo "<script>window.location.href = \"index.php\" </script>";
    } else {
        echo "<script>window.location.href = \"login.php?message=Username atau Password anda salah&message_type=warning\" </script>";
    }
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
        <style type="text/css">
.gradient-custom-2 {
  /* fallback for old browsers */
  background: #fccb90;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right,  #2462ee, #367ed8, #36a4dd, #457cb4);

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, #2462ee, #367ed8, #36a4dd, #457cb4)
}

@media (min-width: 768px) {
  .gradient-form {
    height: 100vh !important;
  }
}
@media (min-width: 769px) {
  .gradient-custom-2 {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem;
  }
}
        </style>
    </head>
    <body id="page-top" class="d-flex flex-column min-vh-100">
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <h4 class="mt-1 mb-5 pb-1">
                  	Sistem Arsip Online
                  	<br>Tiyuh Daya Asri
              	  </h4>
                </div>
                <?php $message = empty($_GET['message']) ? '' : $_GET['message']?>
                <?php $message_type = empty($_GET['message_type']) ? '' : $_GET['message_type']?>
                <?php if (!empty($message)): ?>
                <div class="alert alert-<?php echo $message_type ?> alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif?>
                <form method="POST" action="">
                  <p>Please login to your account</p>
                  <div class="form-floating mb-4">
                      <input class="form-control" name="username" id="username" type="text" placeholder="Enter your username.." required value="admin" />
                      <label for="username">Username</label>
                  </div>

                  <div class="form-floating mb-4">
                      <input class="form-control" name="password" id="password" type="password" placeholder="Enter your password.." required value="admin" />
                      <label for="password">Passwrod</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1 d-grid gap-2">
                    <button class="btn btn-primary fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Sistem Arsip Online</h4>
                <p class="small mb-0">Sistem informasi yang mampu melakukan pengelolaan pengarsipan dokumen, pencarian arsip, menyediakan arsip berbasis web.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="bg-black text-center py-5 mt-auto">
	<div class="container px-5">
		<div class="text-white-50 small">
			<div class="mb-2">&copy; Sistem Arsip Online 2021. All Rights Reserved.</div>
		</div>
	</div>
</footer>

        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/jquery/jquery-3.6.0.js"></script>
        </script>
    </body>
</html>

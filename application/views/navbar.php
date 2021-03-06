<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>fontawesome/css/all.css">
  </head>
  <body>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal" href="<?= base_url('Home/index') ?>">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">
  <?php // JIKA SUDAH LOGIN
  if($this->session->userdata("email_admin")) : ?>
  <a class="p-2 text-dark" href="<?= base_url('Home/index') ?>">Home</a>
    <a class="p-2 text-dark" href="<?= base_url('Input/package') ?>">All in One</a>
    <a class="p-2 text-dark" href="#">Transaksi</a>
    <a class="p-2 text-dark" href="<?= base_url('Admin') ?>">Dashboard</a>
    <a class="p-2 text-dark" href="<?= base_url('Auth/logout') ?>">Logout</a>

  <?php elseif($this->session->userdata("email_user")) : ?>  
  <a class="p-2 text-dark" href="<?= base_url('Home/index') ?>">Home</a>
    <a class="p-2 text-dark" href="<?= base_url('Input/package') ?>">All in One</a>
    <a class="p-2 text-dark" href="#">Transaksi</a>
    <a class="p-2 text-dark" href="<?= base_url('Home/myaccount') ?>">Lihat akun</a>
    <a class="p-2 text-dark" href="<?= base_url('Auth/logout') ?>">Logout</a>
    
  <?php else : ?>
    <a class="p-2 text-dark" href="<?= base_url('Home/index') ?>">Home</a>
    <a class="p-2 text-dark" href="<?= base_url('Input/package') ?>">All in One</a>
    <a class="p-2 text-dark" href="#">Transaksi</a>
    <a class="p-2 text-dark" href="<?= base_url('Home/login') ?>">Login</a>
    <a class="p-2 text-dark" href="<?= base_url('Home/register') ?>">Register</a>
  <?php endif;?>
  </nav>
</div>

  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
  <a class="navbar-brand" href="<?= base_url('Home/index') ?>">Image</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
        <a class="nav-link text-white" href="<?= base_url('Home/index') ?>">Home</a>
      </li>
      <li>
        <a class="nav-link text-white" href="<?= base_url('Input/package') ?>">Paket All In One</a>
      </li>
      <li>
        <a class="nav-link text-white" href="<?= base_url('Input/package') ?>">Transaksi</a>
      </li>
      
    </ul>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
      <a class=" nav-link mr-md-2 text-white" href="<?= base_url('Home/login') ?>" id="bd-versions" aria-haspopup="true" aria-expanded="false">Login</a>
      </li>
      <li>
      <a class="nav-link mr-md-2 text-white" href="<?= base_url('Home/register') ?>" id="bd-versions" aria-haspopup="true" aria-expanded="false">Register</a>
      </li>
  </div>
  </div>
</nav>   -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
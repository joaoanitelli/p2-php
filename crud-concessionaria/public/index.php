<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>

<style>
  .navbar {
    background: white !important;
    border-bottom: 2px solid red;
    margin-bottom: 32px;
    position: relative;
    z-index: 1000;
  }

  .navbar-collapse {
    justify-content: space-between;

  }

  .navbar-collapse img {
    width: 50px;
  }

  body {
    background-image: url(https://pitstopbrasil.wordpress.com/wp-content/uploads/2009/03/ferrarishowwom.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  body::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: black;
    opacity: 0.8;
    z-index: -1;
  }

  .navbar-nav li a {
    font-weight: bold;
    color: red;
  }

  .btn-primary {
    background-color: red !important;
    border: none;
    transition: 0.3s;
  }

  .btn-primary:hover {
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    background-color: rgb(255, 111, 111) !important;
  }

  .form-control:focus {
    border-color: yellow !important;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px !important;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="container collapse navbar-collapse" id="navbarNav">
      <img src="https://i.pinimg.com/736x/86/30/83/863083894905bc5140b054917fe597d5.jpg" />
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/carro">Carros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cliente">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/filial">Filial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/fornecedor">Fornecedores</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
include __DIR__ . '/../bootstrap.php';
?>
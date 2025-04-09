<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tienda Tech - Estilo Cyberpuerta</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
    }

    .productos {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
      padding: 2rem;
    }

    .producto {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      width: 250px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .producto:hover {
      transform: translateY(-5px);
    }

    .producto img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .producto .info {
      padding: 1rem;
    }

    .producto h3 {
      margin: 0;
      font-size: 1.1rem;
    }

    .producto p {
      margin: 0.5rem 0;
      color: #555;
    }

    .precio {
      color: #e53935;
      font-weight: bold;
      font-size: 1.1rem;
    }

    .custom-bg {
      background-color: #001f3f !important;
    }
  </style>
</head>
<body>

  <!-- 🔹 Barra superior con contacto y enlaces rápidos -->
  <div class="top-bar bg-light py-1 d-flex justify-content-between px-4">
    <span class="text-muted small">Tel. 81 8865 6000</span>
    <div>
      <a href="#" class="text-muted small mx-2"><i class="fab fa-whatsapp"></i> Ayuda</a>
      <a href="#" class="text-muted small mx-2">Quiénes somos</a>
    </div>
  </div>

  <!-- 🔹 Navbar principal -->
  <nav class="navbar navbar-expand-lg bg-white py-2">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://lh6.googleusercontent.com/HcbQXmsHaf48oe2oCTpX6J3Nw4rKHJxjEw7nFSSarYrS1lnfQOs_9_1aMO-wgNNIvs1KoHOGEGxOIhbSELg1ksU=w16383" alt="Logo" style="height: 90px;">
      </a>
      <form class="d-flex mx-auto w-50">
        <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Buscar">
        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <div class="d-flex align-items-center">
        <a href="#" class="text-dark me-3"><i class="far fa-heart fa-lg"></i></a>
        <a href="#" class="text-dark me-3"><i class="fas fa-user"></i> Mi Cuenta</a>
        <a href="#" class="text-dark position-relative">
          <i class="fas fa-shopping-cart fa-lg"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">0</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- 🔹 Barra de categorías -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-bg">
    <div class="container">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link text-white" href="#">Computadoras</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Hardware</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Accesorios</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Almacenamiento</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Electrónica</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Redes</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Software</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Impresión</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Seguridad</a></li>
      </ul>
    </div>
  </nav>

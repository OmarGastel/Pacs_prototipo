<?php include __DIR__ . '/../includes/header.php'; ?>

<head>
  ...
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Aquí pegas los estilos actualizados -->
  <style>
  body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa; /* Color claro para fondo */
    color: #001f4d; /* Texto principal en azul oscuro */
  }

  .navbar-brand img {
    height: 90px;
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
    color: #003399; /* azul intermedio para títulos */
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
    background-color: #001f4d !important; /* azul institucional para nav inferior */
  }

  .btn-outline-primary {
    border-color: #003399;
    color: #003399;
  }

  .btn-outline-primary:hover {
    background-color: #003399;
    color: white;
  }

  .bg-warning {
    background-color: #f4e500 !important; /* amarillo PACS */
  }

  .text-primary {
    color: #003399 !important;
  }

  .badge.bg-warning {
    color: #001f4d; /* contraste oscuro para el texto del badge */
    font-weight: bold;
  }
  </style>

</head>

<section class="container my-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    
    <!-- Tarjeta 1 -->
    <div class="col">
      <div class="card shadow-sm border-0 h-100">
        <img src="https://img.pccomponentes.com/pcblog/1743116400000/500x320-ofertas-top.png" class="card-img-top" alt="Oferta 1">
        <div class="card-body">
          <h5 class="card-title">PcCom Ready i5 + RTX 4060</h5>
          <p class="card-text">32GB RAM / 1TB SSD / Windows 11</p>
          <p class="card-text fw-bold text-danger fs-5">999€</p>
          <button class="btn btn-success mt-2 w-100" onclick="comprarPorWhatsApp('PcCom Ready i5 + RTX 4060')">
            <i class="fab fa-whatsapp me-1"></i> Comprar por WhatsApp
          </button>
        </div>
      </div>
    </div>

    <!-- Tarjeta 2 -->
    <div class="col">
      <div class="card shadow-sm border-0 h-100">
        <img src="https://img.pccomponentes.com/pcblog/1743717600000/500x320-pccustom.png" class="card-img-top" alt="Oferta 2">
        <div class="card-body">
          <h5 class="card-title">Lenovo IdeaPad Slim 3</h5>
          <p class="card-text">i5 / 16GB RAM / 1TB SSD</p>
          <p class="card-text fw-bold text-danger fs-5">499€</p>
          <button class="btn btn-success mt-2 w-100" onclick="comprarPorWhatsApp('Lenovo IdeaPad Slim 3')">
            <i class="fab fa-whatsapp me-1"></i> Comprar por WhatsApp
          </button>
        </div>
      </div>
    </div>

    <!-- Tarjeta 3 -->
    <div class="col">
      <div class="card shadow-sm border-0 h-100">
        <img src="https://img.pccomponentes.com/pcblog/1743717600000/500x320-lg-days.png" class="card-img-top" alt="Oferta 3">
        <div class="card-body">
          <h5 class="card-title">AMD Ryzen 7 9800X3D</h5>
          <p class="card-text">5.2GHz / 8 núcleos</p>
          <p class="card-text fw-bold text-danger fs-5">549€</p>
          <button class="btn btn-success mt-2 w-100" onclick="comprarPorWhatsApp('AMD Ryzen 7 9800X3D')">
            <i class="fab fa-whatsapp me-1"></i> Comprar por WhatsApp
          </button>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="container my-5">
  <h2 class="mb-4 fw-bold text-center">¡Consigue las ofertas más <span class="text-danger">TOP</span> del momento!</h2>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

    <!-- Producto 1 -->
    <div class="col text-center">
      <span class="badge bg-danger">-10%</span>
      <img src="https://thumb.pccomponentes.com/w-150-150/articles/1084/10846085/1465-pccom-ready-intel-core-i5-12400f-32gb-ssd-1tb-rtx-4060-windows-11-home-comprar.jpg" class="img-fluid mb-2" alt="PcCom">
      <span class="badge bg-warning text-dark">Promoción</span>
      <p class="fw-bold mt-2 mb-1">PcCom Ready Intel Core i5</p>
      <p class="small text-muted">32GB / 1TB / RTX 4060 / Win 11</p>
      <p class="text-danger fw-bold">999€ <span class="text-decoration-line-through text-muted fs-6">1.108,35€</span></p>
      <p class="small text-dark">4,6/5 ⭐ 1330 opiniones</p>
      <p class="text-success small fw-bold">📦 Envío gratis. Recíbelo mañana</p>
      <button class="btn btn-success btn-sm mt-2 w-100" onclick="comprarPorWhatsApp('PcCom Ready Intel Core i5')">
        <i class="fab fa-whatsapp me-1"></i> Comprar por WhatsApp
      </button>
    </div>

    <!-- Producto 2 -->
    <div class="col text-center">
      <span class="badge bg-danger">-23%</span>
      <img src="https://thumb.pccomponentes.com/w-150-150/articles/1084/10847189/1176-lenovo-ideapad-slim-3-gen-8-15irh8-intel-core-i5-13420h-16gb-1tb-ssd-156.jpg" class="img-fluid mb-2" alt="Lenovo">
      <span class="badge bg-warning text-dark">Promoción</span>
      <p class="fw-bold mt-2 mb-1">Lenovo IdeaPad Slim 3</p>
      <p class="small text-muted">i5 / 16GB / 1TB SSD</p>
      <p class="text-danger fw-bold">499€ <span class="text-decoration-line-through text-muted fs-6">649€</span></p>
      <p class="small text-dark">4,5/5 ⭐ 186 opiniones</p>
      <p class="text-success small fw-bold">📦 Envío gratis. Recíbelo mañana</p>
      <button class="btn btn-success btn-sm mt-2 w-100" onclick="comprarPorWhatsApp('Lenovo IdeaPad Slim 3')">
        <i class="fab fa-whatsapp me-1"></i> Comprar por WhatsApp
      </button>
    </div>

    <!-- Producto 3 -->
    <div class="col text-center">
      <span class="badge bg-danger">-27%</span>
      <img src="https://thumb.pccomponentes.com/w-150-150/articles/1086/10860456/1996-amd-ryzen-7-9800x3d-47-52ghz.jpg" class="img-fluid mb-2" alt="Ryzen">
      <span class="badge bg-primary">Te recomendamos</span>
      <span class="badge bg-warning text-dark">Trending</span>
      <p class="fw-bold mt-2 mb-1">AMD Ryzen 7 9800X3D</p>
      <p class="small text-muted">4.7GHz / 5.2GHz</p>
      <p class="text-danger fw-bold">549€ <span class="text-decoration-line-through text-muted fs-6">749,99€</span></p>
      <p class="small text-dark">4,7/5 ⭐ 412 opiniones</p>
      <p class="text-success small fw-bold">📦 Envío gratis. Recíbelo mañana</p>
      <button class="btn btn-success btn-sm mt-2 w-100" onclick="comprarPorWhatsApp('AMD Ryzen 7 9800X3D')">
        <i class="fab fa-whatsapp me-1"></i> Comprar por WhatsApp
      </button>
    </div>

    <!-- Producto 4 -->
    <div class="col text-center">
      <span class="badge bg-danger">-50%</span>
      <img src="https://thumb.pccomponentes.com/w-150-150/articles/1087/10874441/1431-tv-lg-nanocell-43-43nano-ultrahd-4k-webos-ai-thinq-pccom-hdmi-20-30awg-ccs.jpg" class="img-fluid mb-2" alt="NanoCell TV">
      <span class="badge bg-purple text-dark border">Pack</span>
      <span class="badge bg-warning text-dark">Promoción</span>
      <p class="fw-bold mt-2 mb-1">TV LG NanoCell 43"</p>
      <p class="small text-muted">4K WebOS + HDMI PcCom</p>
      <p class="text-danger fw-bold">299€ <span class="text-decoration-line-through text-muted fs-6">604€</span></p>
      <p class="small text-dark">4,5/5 ⭐ 178 opiniones</p>
      <p class="text-success small fw-bold">📦 Envío gratis. Recíbelo mañana</p>
      <button class="btn btn-success btn-sm mt-2 w-100" onclick="comprarPorWhatsApp('TV LG NanoCell 43')">
        <i class="fab fa-whatsapp me-1"></i> Comprar por WhatsApp
      </button>
    </div>

    <!-- Producto 5 -->
    <div class="col text-center">
      <span class="badge bg-danger">-11%</span>
      <img src="https://thumb.pccomponentes.com/w-150-150/articles/1080/10804884/1781-xiaomi-redmi-note-13-8-256gb-azul-libre.jpg" class="img-fluid mb-2" alt="RTX 4060">
      <span class="badge bg-warning text-dark">Promoción</span>
      <span class="badge bg-warning text-dark">Trending</span>
      <p class="fw-bold mt-2 mb-1">MSI GeForce RTX 4060</p>
      <p class="small text-muted">8GB GDDR6 DLSS3</p>
      <p class="text-danger fw-bold">319,90€ <span class="text-decoration-line-through text-muted fs-6">359€</span></p>
      <p class="small text-dark">4,7/5 ⭐ 1484 opiniones</p>
      <p class="text-success small fw-bold">📦 Envío gratis. Recíbelo mañana</p>
      <button class="btn btn-success btn-sm mt-2 w-100" onclick="comprarPorWhatsApp('MSI GeForce RTX 4060')">
        <i class="fab fa-whatsapp me-1"></i> Comprar por WhatsApp
      </button>
    </div>

  </div>
</section>

<section class="container my-5">
  <div class="row justify-content-center g-4">

    <!-- Categoría 1 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
      <div class="rounded-4 p-3 text-white" style="background: linear-gradient(135deg, #1b006a, #ff7300);">
        <h5 class="fw-bold mb-2"></h5>Los mejores<br>portátiles</h5>
        <img src="https://img.pccomponentes.com/pcblog/1737586800000/500x500-smartphones.png" class="img-fluid mb-2" alt="Portátiles">
        <div class="bg-white text-dark rounded-circle d-inline-block px-2 py-1 fw-bold">+</div>
      </div>
    </div>

    <!-- Categoría 2 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
      <div class="rounded-4 p-3 text-white" style="background: linear-gradient(135deg, #1b006a, #ff7300);">
        <h5 class="fw-bold mb-2">Componentes<br>de PC</h5>
        <img src="https://img.pccomponentes.com/pcblog/1736463600000/500x500-hogar-ofertas.png" class="img-fluid mb-2" alt="Componentes PC">
        <div class="bg-white text-dark rounded-circle d-inline-block px-2 py-1 fw-bold">+</div>
      </div>
    </div>

    <!-- Categoría 3 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
      <div class="rounded-4 p-3 text-white" style="background: linear-gradient(135deg, #1b006a, #00e0e0);">
        <h5 class="fw-bold mb-2">Monitores en<br>tendencia</h5>
        <img src="https://img.pccomponentes.com/pcblog/1735858800000/tv-500x500-v2.png" class="img-fluid mb-2" alt="Monitores">
        <div class="bg-white text-dark rounded-circle d-inline-block px-2 py-1 fw-bold">+</div>
      </div>
    </div>

    <!-- Categoría 4 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
      <div class="rounded-4 p-3 text-white" style="background: linear-gradient(135deg, #1b006a, #ff7300);">
        <h5 class="fw-bold mb-2">Novedades en<br>televisores</h5>
        <img src="https://img.pccomponentes.com/pcblog/1735858800000/500x500-monitores-v2.png" class="img-fluid mb-2" alt="TVs">
        <div class="bg-white text-dark rounded-circle d-inline-block px-2 py-1 fw-bold">+</div>
      </div>
    </div>

    <!-- Categoría 5 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
      <div class="rounded-4 p-3 text-white" style="background: linear-gradient(135deg, #1b006a, #b170ff);">
        <h5 class="fw-bold mb-2">Estrena<br>smartphone</h5>
        <img src="https://img.pccomponentes.com/pcblog/1735858800000/500x500-componentes-v2.png" class="img-fluid mb-2" alt="Smartphones">
        <div class="bg-white text-dark rounded-circle d-inline-block px-2 py-1 fw-bold">+</div>
      </div>
    </div>

    <!-- Categoría 6 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
      <div class="rounded-4 p-3 text-white" style="background: linear-gradient(135deg, #1b006a, #00e0e0);">
        <h5 class="fw-bold mb-2">Conecta con<br>tu hogar</h5>
        <img src="https://img.pccomponentes.com/pcblog/1735858800000/500x500-portatiles-1-v2.png" class="img-fluid mb-2" alt="Hogar inteligente">
        <div class="bg-white text-dark rounded-circle d-inline-block px-2 py-1 fw-bold">+</div>
      </div>
    </div>

  </div>
</section>
<section class="container my-5 bg-light p-4 rounded-3">
  <div class="row">
    <!-- Columna izquierda: descripción y botón -->
    <div class="col-md-3 d-flex flex-column justify-content-between mb-4 mb-md-0">
      <div>
        <h5 class="fw-bold text-primary"><i class="fas fa-heart text-orange me-2"></i>Selección <span class="text-dark">TOP</span></h5>
        <p>La tecnología que quieres a un precio increíble en marcas TOP. ¡Aprovecha ahora!</p>
      </div>
      <a href="#" class="btn btn-warning fw-bold px-4 py-2">Ver más</a>
    </div>

    <!-- Columna derecha: productos con tabs -->
    <div class="col-md-9">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs mb-3" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#portatiles">Portátiles</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#graficas">Tarjetas gráficas</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#moviles">Móviles</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tvs">Televisores</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#hogar">Hogar</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Portátiles -->
        <div class="tab-pane fade show active" id="portatiles">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">

            <!-- Producto 1 -->
            <div class="col">
              <div class="card border-0 shadow-sm">
                <span class="position-absolute top-0 start-0 badge bg-danger m-2">-29%</span>
                <img src="https://thumb.pccomponentes.com/w-150-150/articles/1081/10815882/1813-asus-tuf-gaming-f17-fx707vv4-hx110-intel-core-i7-13620h-32gb-1tb-ssd-rtx-4060-173.jpg" class="card-img-top" alt="Alurin">
                <div class="card-body">
                  <p class="card-text">Alurin Go Start Intel Celeron N4020/8GB/256GB SSD/15.6"</p>
                  <p class="fw-bold text-danger">219,99€ <span class="text-muted text-decoration-line-through small">309,99€</span></p>
                  <small>3,9/5 ⭐ 443 opiniones</small>
                </div>
              </div>
            </div>

            <!-- Producto 2 -->
            <div class="col">
              <div class="card border-0 shadow-sm">
                <span class="position-absolute top-0 start-0 badge bg-danger m-2">-12%</span>
                <img src="https://thumb.pccomponentes.com/w-150-150/articles/1084/10848624/1163-asus-tuf-gaming-a15-fa506ncr-hn006-amd-ryzen-7-7435hs-16gb-512gb-ssd-rtx-3050-156.jpg" class="card-img-top" alt="PcCom">
                <div class="card-body">
                  <p class="card-text">PcCom Revolt 4060 Intel Core i9 / 32GB / 1TB SSD / RTX 4060</p>
                  <p class="fw-bold text-danger">1.699,99€ <span class="text-muted text-decoration-line-through small">1.929,99€</span></p>
                  <small>4,5/5 ⭐ 156 opiniones</small>
                </div>
              </div>
            </div>

            <!-- Producto 3 -->
            <div class="col">
              <div class="card border-0 shadow-sm">
                <span class="position-absolute top-0 start-0 badge bg-danger m-2">-22%</span>
                <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Trending</span>
                <img src="https://thumb.pccomponentes.com/w-150-150/articles/1081/10813478/1930-pccom-revolt-4060-intel-core-i9-14900hx-32gb-1tb-ssd-rtx-4060-173-windows-11-home.jpg" class="card-img-top" alt="ASUS TUF">
                <div class="card-body">
                  <p class="card-text">ASUS TUF Gaming A15 Ryzen 7 / 16GB / 512GB SSD</p>
                  <p class="fw-bold text-danger">699€ <span class="text-muted text-decoration-line-through small">899€</span></p>
                  <small>4,5/5 ⭐ 428 opiniones</small>
                </div>
              </div>
            </div>

            <!-- Producto 4 -->
            <div class="col">
              <div class="card border-0 shadow-sm">
                <span class="position-absolute top-0 start-0 badge bg-danger m-2">-31%</span>
                <img src="https://thumb.pccomponentes.com/w-150-150/articles/1066/10663368/1710-alurin-go-start-intel-pentium-n4020-8gb-256gb-ssd-156-comprar.jpg" class="card-img-top" alt="ASUS TUF F17">
                <div class="card-body">
                  <p class="card-text">ASUS TUF Gaming F17 i7-13620H / 32GB / 1TB SSD</p>
                  <p class="fw-bold text-danger">1.099€ <span class="text-muted text-decoration-line-through small">1.599€</span></p>
                  <small>4,6/5 ⭐ 1548 opiniones</small>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Aquí podrías agregar más secciones para tarjetas gráficas, móviles, etc. -->
        <div class="tab-pane fade" id="graficas"><p class="text-muted p-3">Contenido de tarjetas gráficas aquí...</p></div>
        <div class="tab-pane fade" id="moviles"><p class="text-muted p-3">Contenido de móviles aquí...</p></div>
        <div class="tab-pane fade" id="tvs"><p class="text-muted p-3">Contenido de televisores aquí...</p></div>
        <div class="tab-pane fade" id="hogar"><p class="text-muted p-3">Contenido de hogar aquí...</p></div>

      </div>
    </div>
  </div>
</section>
<section class="container my-5">
  <h4 class="fw-bold mb-4">Lo que no puedes perderte</h4>
  <div class="row g-4">

    <!-- Banner 1 -->
    <div class="col-12 col-md-4">
      <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
        <img src="https://img.pccomponentes.com/pcblog/1743372000000/500x320-nilait-30.png" class="img-fluid" alt="GeForce RTX">
        <div class="card-img-overlay d-flex flex-column justify-content-end p-3 text-white" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.7));">
          <h5 class="card-title fw-bold">GeForce RTX</h5>
          <p class="card-text">Encuentra las mejores tarjetas gráficas para jugadores y creadores.</p>
          <a href="#" class="btn btn-light btn-sm fw-bold mt-2">Ver ahora</a>
        </div>
      </div>
    </div>

    <!-- Banner 2 -->
    <div class="col-12 col-md-4">
      <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
        <img src="https://img.pccomponentes.com/pcblog/1743976800000/500x320-alergias.png" class="img-fluid" alt="Especial Alergias">
        <div class="card-img-overlay d-flex flex-column justify-content-end p-3 text-dark" style="background: linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,0.9));">
          <h5 class="card-title fw-bold text-dark">Especial Alergias</h5>
          <p class="card-text">Hasta un <span class="text-danger fw-bold">-50%</span> en aspiradoras y purificadores.</p>
          <a href="#" class="btn btn-dark btn-sm fw-bold mt-2">Ver ofertas</a>
        </div>
      </div>
    </div>

    <!-- Banner 3 -->
    <div class="col-12 col-md-4">
      <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
        <img src="https://img.pccomponentes.com/pcblog/1743976800000/500x320-nvidia-rtx.png" class="img-fluid" alt="Nilait">
        <div class="card-img-overlay d-flex flex-column justify-content-end p-3 text-dark" style="background: linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,0.9));">
          <h5 class="card-title fw-bold">Descubre Nilait</h5>
          <p class="card-text">Hasta un <span class="text-primary fw-bold">-30%</span> en televisores propios.</p>
          <a href="#" class="btn btn-info btn-sm fw-bold mt-2 text-white">Descúbrelo</a>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  function comprarPorWhatsApp(nombreProducto) {
    const mensaje = encodeURIComponent(`Hola, quiero comprar el producto: ${nombreProducto}`);
    const numero = '5216181450222';
    window.open(`https://wa.me/${numero}?text=${mensaje}`, '_blank');
  }
</script>






<?php include __DIR__ . '/../includes/footer.php'; ?>

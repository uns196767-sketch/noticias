<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="NOTICIAS AL DÍA - El Noticioso 2026. Siempre Listos, Siempre Actualizados.">
    <meta name="author" content="Noticias al Día">

    <title>NOTICIAS AL DÍA | El Noticioso 2026</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Merriweather:wght@700;900&display=swap" rel="stylesheet">

    <style>
      :root {
        --rpp-red: #d90416;
        --rpp-dark-red: #a8000e;
        --rpp-dark: #18191a;
        --rpp-gray-bg: #f4f5f7;
        --rpp-border: #e2e5e9;
      }
      body {
        font-family: 'Roboto', sans-serif;
        background-color: var(--rpp-gray-bg);
        color: #1c1e21;
      }
      /* Topbar institucional */
      .top-utility-bar {
        background-color: var(--rpp-dark);
        color: #fff;
        font-size: 0.8rem;
        padding: 6px 0;
      }
      .live-badge {
        background-color: var(--rpp-red);
        color: #fff;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 3px;
        font-size: 0.72rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        animation: pulse 2s infinite;
      }
      @keyframes pulse {
        0% { opacity: 1; }
        50% { opacity: 0.65; }
        100% { opacity: 1; }
      }
      /* Cabecera principal estilo RPP */
      .main-header {
        background-color: #ffffff;
        border-bottom: 3px solid var(--rpp-red);
        padding: 16px 0;
      }
      .brand-logo {
        font-family: 'Roboto', sans-serif;
        font-weight: 900;
        font-size: 2.3rem;
        color: var(--rpp-red) !important;
        letter-spacing: -1px;
        text-decoration: none !important;
        text-transform: uppercase;
        line-height: 1;
      }
      .brand-subtitle {
        font-size: 0.82rem;
        font-weight: 700;
        color: #4b5563;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 4px;
      }
      /* Barra de navegación */
      .nav-rpp {
        background-color: var(--rpp-red);
        box-shadow: 0 2px 6px rgba(0,0,0,0.12);
      }
      .nav-rpp .nav-link {
        color: #ffffff !important;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        padding: 10px 14px;
        transition: background 0.2s;
      }
      .nav-rpp .nav-link:hover {
        background-color: var(--rpp-dark-red);
      }
      /* Portada Hero */
      .hero-portada {
        background: linear-gradient(135deg, #18191a 0%, #2c2f33 100%);
        border-left: 6px solid var(--rpp-red);
        color: #ffffff;
        border-radius: 6px;
        padding: 2rem;
        margin-top: 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      }
      .hero-kicker {
        display: inline-block;
        background-color: var(--rpp-red);
        color: #fff;
        font-weight: 700;
        font-size: 0.75rem;
        text-transform: uppercase;
        padding: 3px 10px;
        border-radius: 2px;
        margin-bottom: 10px;
        letter-spacing: 0.6px;
      }
      .hero-portada h1 {
        font-family: 'Merriweather', serif;
        font-weight: 900;
        font-size: 2.2rem;
        margin-bottom: 0.6rem;
      }
      .hero-portada p.lead {
        font-size: 1.15rem;
        color: #e5e7eb;
        font-weight: 400;
        margin-bottom: 0;
      }
      /* Tarjetas de noticias estilo portal periodístico */
      .news-card {
        background-color: #ffffff;
        border: 1px solid var(--rpp-border);
        border-top: 3px solid var(--rpp-red);
        border-radius: 4px;
        height: 100%;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
      }
      .news-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
      }
      .section-tag {
        color: var(--rpp-red);
        font-weight: 800;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
        display: block;
      }
      .news-title {
        font-family: 'Merriweather', serif;
        font-weight: 700;
        font-size: 1.12rem;
        line-height: 1.35;
        margin-bottom: 8px;
      }
      .news-title a {
        color: #111827;
        text-decoration: none;
      }
      .news-title a:hover {
        color: var(--rpp-red);
      }
      .news-meta {
        font-size: 0.78rem;
        color: #6b7280;
        font-weight: 500;
        margin-bottom: 10px;
      }
      .news-summary {
        font-size: 0.92rem;
        color: #374151;
        line-height: 1.5;
      }
      .section-divider {
        border-left: 4px solid var(--rpp-red);
        padding-left: 10px;
        font-weight: 900;
        font-size: 1.1rem;
        text-transform: uppercase;
        color: #111827;
        margin: 1.5rem 0 1rem 0;
      }
      .site-footer {
        background-color: var(--rpp-dark);
        color: #9ca3af;
        padding: 2rem 0;
        margin-top: 3rem;
        border-top: 4px solid var(--rpp-red);
        font-size: 0.88rem;
      }
      .site-footer strong {
        color: #ffffff;
      }
    </style>
  </head>

  <body>
    <!-- Barra superior de actualidad -->
    <div class="top-utility-bar">
      <div class="container d-flex justify-content-between align-items-center">
        <div>
          <span class="live-badge mr-2">EN VIVO</span>
          <span>Edición Digital &bull; Lunes, 16 de Noviembre de 2026 &bull; Perú</span>
        </div>
        <div class="d-none d-md-block">
          <span>Siempre Listos, Siempre Actualizados</span>
        </div>
      </div>
    </div>

    <!-- Cabecera Principal -->
    <header class="main-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
            <a class="brand-logo" href="#">NOTICIAS AL DÍA</a>
            <div class="brand-subtitle">El Noticioso 2026 &mdash; Información al instante</div>
          </div>
          <div class="col-md-4 text-center text-md-right mt-2 mt-md-0">
            <span class="badge badge-danger px-3 py-2">ÚLTIMO MINUTO</span>
          </div>
        </div>
      </div>
    </header>

    <!-- Menú de Secciones -->
    <nav class="navbar navbar-expand-lg nav-rpp p-0">
      <div class="container">
        <button class="navbar-toggler text-white py-2" type="button" data-toggle="collapse" data-target="#navbarSecciones">
          &#9776; Secciones
        </button>
        <div class="collapse navbar-collapse" id="navbarSecciones">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#portada">Portada</a></li>
            <li class="nav-item"><a class="nav-link" href="#nacional">Nacional</a></li>
            <li class="nav-item"><a class="nav-link" href="#internacional">Internacional</a></li>
            <li class="nav-item"><a class="nav-link" href="#economia">Economía</a></li>
            <li class="nav-item"><a class="nav-link" href="#deportes">Deportes</a></li>
            <li class="nav-item"><a class="nav-link" href="#tecnologia">Tecnología</a></li>
            <li class="nav-item"><a class="nav-link" href="#ciencia">Ciencia</a></li>
            <li class="nav-item"><a class="nav-link" href="#opinion">Opinión</a></li>
            <li class="nav-item"><a class="nav-link" href="#cloud">Cloud &amp; DevOps</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container" id="portada">
      <?php include("secciones/portada.php"); ?>
      <section class="hero-portada">
        <span class="hero-kicker">Edición Central 2026</span>
        <h1><?php echo $portada["titulo"]; ?></h1>
        <p class="lead"><?php echo $portada["resumen"]; ?></p>
      </section>

      <div class="section-divider" id="nacional">Actualidad Nacional e Internacional</div>
      <!-- Fila 1 -->
      <?php
        include("secciones/internacional.php");
        include("secciones/nacional.php");
      ?>
      <div class="row">
        <div class="col-md-6 mb-4" id="internacional">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Internacional</span>
              <h3 class="news-title"><a href="#"><?php echo $internacional["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $internacional["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $internacional["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Nacional</span>
              <h3 class="news-title"><a href="#"><?php echo $nacional["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $nacional["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $nacional["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <div class="section-divider" id="economia">Economía y Opinión</div>
      <!-- Fila 2 -->
      <?php
        include("secciones/economia.php");
        include("secciones/opinion.php");
      ?>
      <div class="row">
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Economía</span>
              <h3 class="news-title"><a href="#"><?php echo $economia["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $economia["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $economia["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4" id="opinion">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Opinión</span>
              <h3 class="news-title"><a href="#"><?php echo $opinion["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $opinion["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $opinion["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <div class="section-divider" id="tecnologia">Tecnología y Ciencia</div>
      <!-- Fila 3 -->
      <?php
        include("secciones/tecnologia.php");
        include("secciones/ciencia.php");
      ?>
      <div class="row">
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Tecnología</span>
              <h3 class="news-title"><a href="#"><?php echo $tecnologia["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $tecnologia["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $tecnologia["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4" id="ciencia">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Ciencia</span>
              <h3 class="news-title"><a href="#"><?php echo $ciencia["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $ciencia["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $ciencia["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <div class="section-divider">Cultura y Actualidad</div>
      <!-- Fila 4 -->
      <?php
        include("secciones/cultura.php");
        include("secciones/gente.php");
      ?>
      <div class="row">
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Cultura</span>
              <h3 class="news-title"><a href="#"><?php echo $cultura["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $cultura["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $cultura["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Gente</span>
              <h3 class="news-title"><a href="#"><?php echo $gente["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $gente["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $gente["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <div class="section-divider" id="deportes">Deportes y Multimedia</div>
      <!-- Fila 5 -->
      <?php
        include("secciones/deportes.php");
        include("secciones/television.php");
        include("secciones/video.php");
      ?>
      <div class="row">
        <div class="col-md-4 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Deportes</span>
              <h3 class="news-title"><a href="#"><?php echo $deportes["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $deportes["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $deportes["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-4 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Televisión</span>
              <h3 class="news-title"><a href="#"><?php echo $television["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $television["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $television["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-4 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Video</span>
              <h3 class="news-title"><a href="#"><?php echo $video["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $video["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $video["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <div class="section-divider">Educación, Empleo y Sociedad</div>
      <!-- Fila 6 -->
      <?php
        include("secciones/formacion.php");
        include("secciones/empleo.php");
        include("secciones/sociedad.php");
      ?>
      <div class="row">
        <div class="col-md-4 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Formación</span>
              <h3 class="news-title"><a href="#"><?php echo $formacion["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $formacion["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $formacion["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-4 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Empleo</span>
              <h3 class="news-title"><a href="#"><?php echo $empleo["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $empleo["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $empleo["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-4 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Sociedad</span>
              <h3 class="news-title"><a href="#"><?php echo $sociedad["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $sociedad["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $sociedad["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <div class="section-divider" id="cloud">Especial Cloud Computing y DevOps</div>
      <!-- Fila 7 -->
      <?php
        include("secciones/openstack.php");
        include("secciones/git.php");
      ?>
      <div class="row">
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">OpenStack</span>
              <h3 class="news-title"><a href="#"><?php echo $openstack["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $openstack["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $openstack["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Git</span>
              <h3 class="news-title"><a href="#"><?php echo $git["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $git["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $git["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <!-- Fila 8 -->
      <?php
        include("secciones/contenedores.php");
        include("secciones/openshift.php");
      ?>
      <div class="row">
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">Contenedores</span>
              <h3 class="news-title"><a href="#"><?php echo $contenedores["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $contenedores["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $contenedores["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4">
          <article class="card news-card">
            <div class="card-body d-flex flex-column">
              <span class="section-tag">OpenShift</span>
              <h3 class="news-title"><a href="#"><?php echo $openshift["titulo"]; ?></a></h3>
              <div class="news-meta">Por <?php echo $openshift["autor"]; ?> &bull; Hoy</div>
              <p class="news-summary mb-0"><?php echo $openshift["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>
    </main>

    <footer class="site-footer">
      <div class="container text-center">
        <p class="mb-1"><strong>NOTICIAS AL DÍA</strong> &mdash; El Noticioso 2026</p>
        <p class="mb-2">Siempre Listos, Siempre Actualizados</p>
        <p class="mb-0"><a href="#" class="text-white">Volver arriba &uarr;</a></p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

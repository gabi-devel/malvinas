<!-- index.php -->

<?php
include ruta('head');
?>

<link rel="stylesheet" href="<?php echo url('index_estilos');?>">

<?php
include ruta('navbar');
include ruta('hero');
include ruta('noticias_index');
include ruta('actividades_index');
include ruta('produccion_index');
include ruta('biblioteca_index');
?>

<section id="educativo">
  <div class="wrap">
    <div class="section-head">
      <div>
        <h2>Material educativo</h2>
        <p>Recursos pensados para distintos niveles de enseñanza.</p>
      </div>
    </div>
    <div class="edu-grid">
      <div class="edu-card level-secundario"><div class="edu-top"></div><div class="edu-body"><span class="lvl">Nivel secundario</span><h4>Guía didáctica: Malvinas en 6 clases</h4><p>Secuencia de actividades lista para llevar al aula.</p></div></div>
      <div class="edu-card level-docentes"><div class="edu-top"></div><div class="edu-body"><span class="lvl">Formación docente</span><h4>Curso virtual: enseñar Malvinas hoy</h4><p>Módulo autoadministrado con certificación de la UNR.</p></div></div>
      <div class="edu-card"><div class="edu-top"></div><div class="edu-body"><span class="lvl">Nivel superior</span><h4>Antología de fuentes primarias comentadas</h4><p>Selección de documentos históricos con análisis.</p></div></div>
    </div>
  </div>
</section>

<section class="newsletter" id="newsletter">
  <div class="wrap">
    <div class="nl-box">
      <div>
        <h2>Sumate al newsletter</h2>
        <p style="margin:6px 0 0;color:var(--navy);font-size:.92rem;max-width:44ch">Una vez por mes, novedades del Observatorio directo a tu correo.</p>
      </div>
      <div>
        <form class="nl-form" id="nlForm">
          <input type="email" id="nlEmail" placeholder="tu@email.com" required>
          <button class="btn btn-primary" type="submit">Suscribirme</button>
        </form>
        <div class="nl-msg" id="nlMsg"></div>
      </div>
    </div>
  </div>
</section>

<?php include ruta('footer'); ?>
<script src="<?php echo url('javascript');?>"></script>
<?php include ruta('final'); ?>


<!-- Cuando el proyecto web crezca:
Pensá los datos (noticias, actividades, producción, PDFs) como arrays/consultas, no HTML hardcodeado. Hoy cada .php de /index/ tiene el HTML y el contenido mezclados. Cuando conectes MySQL, la idea es que cada uno se transforme en algo como:

$noticias = obtenerNoticias(4);
foreach($noticias as $n):
  <article class="news-card">...  echo $n['titulo']; ?>...</article>
endforeach; 

Así el HTML/CSS que ya armamos no se toca cuando cambia el contenido — solo cambia de dónde sale el array. -->
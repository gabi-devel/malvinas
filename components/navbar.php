<!-- components/navbar.php -->
<header>
  <div class="nav">
    <div class="brand">
      <svg width="26" height="26" viewBox="0 0 26 26"><circle cx="13" cy="13" r="12" fill="none" stroke="#0E2B3D" stroke-width="1.4"/><path d="M6 13 Q13 6 20 13 Q13 20 6 13Z" fill="#3E7487" opacity=".5"/></svg>
      Observatorio Malvinas · UNR
    </div>
    <button class="navtoggle" id="navToggle" aria-label="Abrir menú">☰</button>
    <div id="navMenu" class="d-flex">
      <div class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Noticias <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#noticias">Últimas noticias</a>
          <a href="#noticias">Archivo completo</a>
        </div>
      </div>
      <div class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Actividades <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#actividades" data-filter="charla">Charlas</a>
          <a href="#actividades" data-filter="seminario">Seminarios</a>
          <a href="#actividades" data-filter="jornada">Jornadas</a>
        </div>
      </div>
      <div class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Producción <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#produccion" data-filter="articulo">Artículos</a>
          <a href="#produccion" data-filter="informe">Informes</a>
          <a href="#produccion" data-filter="libro">Capítulos de libro</a>
        </div>
      </div>
      <div class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Biblioteca <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#biblioteca">Buscar por título</a>
          <a href="#biblioteca">Todos los documentos</a>
        </div>
      </div>
      <div class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Educativo <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#educativo">Nivel secundario</a>
          <a href="#educativo">Formación docente</a>
          <a href="#educativo">Nivel superior</a>
        </div>
      </div>
      <div class="has-drop">
        <button class="navlink drop-trigger"><a href="#newsletter">Newsletter</a></button>
      </div>
    </d>
  </div>
</header>



<!-- components/navbar.php -->
<!--  <header>
  <div class="nav">
    <div class="brand">
      <svg width="26" height="26" viewBox="0 0 26 26"><circle cx="13" cy="13" r="12" fill="none" stroke="#0E2B3D" stroke-width="1.4"/><path d="M6 13 Q13 6 20 13 Q13 20 6 13Z" fill="#3E7487" opacity=".5"/></svg>
      Observatorio Malvinas · UNR
    </div>
    <button class="navtoggle" id="navToggle" aria-label="Abrir menú">☰</button>
    <ul id="navMenu">
      <li><a href="#noticias" class="navlink">Noticias</a></li>
      <li><a href="#actividades" class="navlink">Actividades</a></li>
      <li><a href="#produccion" class="navlink">Producción</a></li>
      <li><a href="#biblioteca" class="navlink">Biblioteca</a></li>
      <li><a href="#educativo" class="navlink">Educativo</a></li>
      <li><a href="#newsletter" class="navlink">Newsletter</a></li>
    </ul>
  </div>
</header> -->
<header>
  <div class="nav">
    <div class="brand">
      <svg width="26" height="26" viewBox="0 0 26 26"><circle cx="13" cy="13" r="12" fill="none" stroke="#0E2B3D" stroke-width="1.4"/><path d="M6 13 Q13 6 20 13 Q13 20 6 13Z" fill="#3E7487" opacity=".5"/></svg>
      Observatorio Malvinas · UNR
    </div>
    <button class="navtoggle" id="navToggle" aria-label="Abrir menú">☰</button>
    <ul id="navMenu">
      <li class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Noticias <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#noticias">Últimas noticias</a>
          <a href="#noticias">Archivo completo</a>
        </div>
      </li>
      <li class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Actividades <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#actividades" data-filter="charla">Charlas</a>
          <a href="#actividades" data-filter="seminario">Seminarios</a>
          <a href="#actividades" data-filter="jornada">Jornadas</a>
        </div>
      </li>
      <li class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Producción <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#produccion" data-filter="articulo">Artículos</a>
          <a href="#produccion" data-filter="informe">Informes</a>
          <a href="#produccion" data-filter="libro">Capítulos de libro</a>
        </div>
      </li>
      <li class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Biblioteca <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#biblioteca">Buscar por título</a>
          <a href="#biblioteca">Todos los documentos</a>
        </div>
      </li>
      <li class="has-drop">
        <button class="navlink drop-trigger" aria-expanded="false">Educativo <span class="caret">▾</span></button>
        <div class="drop-panel">
          <a href="#educativo">Nivel secundario</a>
          <a href="#educativo">Formación docente</a>
          <a href="#educativo">Nivel superior</a>
        </div>
      </li>
      <li><a href="#newsletter" class="navlink">Newsletter</a></li>
    </ul>
  </div>
</header>



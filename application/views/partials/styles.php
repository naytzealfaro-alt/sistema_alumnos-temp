<style>
/* ===== VARIABLES ===== */

:root {
    --bg: #f8f5ff;
    --card: #ffffff;
    --card-2: #f0e8ff;
    --purple: #9875c9;
    --purple-light: #8565b2;
    --border: rgba(152, 117, 201, 0.30);
    --text: #382b4b;
    --muted: #786b8b;
}

/* ===== BODY ===== */

body {
    margin: 0;
    min-height: 100vh;
    color: var(--text);
    font-family: Arial, Helvetica, sans-serif;
    background:
        radial-gradient(circle at 20% 20%, rgba(190, 164, 232, .28), transparent 30%),
        radial-gradient(circle at 80% 80%, rgba(213, 195, 242, .32), transparent 30%),
        var(--bg);
}
/* ===== NAVBAR ===== */

.navbar-saes {
    /* Un lila más firme y fuertecito que resalta sobre el fondo */
    background: rgba(233, 213, 255, 0.65);
    border-bottom: 1px solid rgba(175, 134, 214, 0.25);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    padding: 14px 25px;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar-container {
    max-width: 1100px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* ===== MARCA ===== */

.brand {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #4a1d96 !important; /* Morado oscuro fuerte y legible para el texto SAES */
    font-family: "JetBrains Mono", "Fira Code", monospace;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: .5px;
}

/* Cambiamos el color del icono (birrete) para que combine y no se pierda */
.brand i {
    color: #4a1d96 !important;
}

.brand span { 
    color: #4a1d96 !important; 
}

.terminal-dot {
    width: 8px;
    height: 8px;
    background-color: #9333ea !important; /* Morado brillante estético */
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 8px rgba(147, 51, 234, 0.4);
}

.system-status {
    color: #4a1d96;
    font-family: "JetBrains Mono", "Fira Code", monospace;
    font-size: 12px;
    margin-left: 20px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

/* Nos aseguramos de que no haya puntos extra generados por ::before */
.system-status::before {
    content: none !important;
} /* <--- ¡Aquí faltaba cerrar esta llave! */

/* ===== NAVEGACIÓN ===== */

.nav-links { 
    display: flex; 
    align-items: center; 
    gap: 5px; 
}

/* Letras e iconos inactivos en un morado oscuro bien marcado y legible */
.nav-links a {
    color: #4a1d96 !important; /* Morado oscuro fuerte para alto contraste */
    text-decoration: none;
    padding: 9px 14px;
    border-radius: 10px;
    transition: all .2s ease;
    font-size: 14px;
    font-weight: 600; /* Un poco más de grosor para que resalte */
}

/* Estilo al pasar el cursor (hover) */
.nav-links a:hover { 
    color: #2e1065 !important; 
    background: rgba(147, 51, 234, 0.15); 
}

/* Enlace activo (Inicio) */
.nav-links a.active {
    color: #ffffff !important; /* Letra blanca brillante sobre el botón morado */
    background: #8b5cf6 !important; /* Fondo morado sólido */
    border: 1px solid #7c3aed;
    box-shadow: 0 2px 8px rgba(139, 92, 246, 0.3);
}

/* Asegurar que los desplegables (dropdown) también mantengan el texto oscuro */
.nav-dropdown-toggle {
    color: #4a1d96 !important;
}

/* ===== TARJETA CONTENEDORA (Si la usas en CSS) ===== */
.tarjeta {
    background: rgba(243, 232, 255, 0.85); /* Tono lila suave pero más marcado */
    border: 1px solid rgba(192, 132, 252, 0.4);
    box-shadow: 0 8px 24px rgba(147, 51, 234, 0.12);
    border-radius: 16px;
}

/* ===== HERO ===== */

.hero {
    max-width: 1100px;
    margin: auto;
    padding: 70px 20px 30px;
    text-align: center;
}

.saes-title {
    margin: 0;
    font-family: "JetBrains Mono", "Fira Code", monospace;
    font-size: clamp(48px, 8vw, 82px);
    font-weight: 800;
    letter-spacing: -3px;
    color: var(--text);
    text-shadow: 0 0 20px rgba(152, 117, 201, .18);
}

.saes-title .title-dot {
    display: inline-block;
    width: 13px;
    height: 13px;
    margin-right: 8px;
    vertical-align: middle;
    background: var(--purple);
    border-radius: 50%;
    box-shadow: 0 0 7px var(--purple), 0 0 16px var(--purple), 0 0 35px rgba(152, 117, 201, .55);
    animation: pulse 2s infinite;
}

.instituto {
    margin-top: 5px;
    color: var(--purple-light);
    font-family: "JetBrains Mono", "Fira Code", monospace;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 5px;
    text-transform: uppercase;
}

.instituto-line {
    width: 70px;
    height: 2px;
    margin: 15px auto 0;
    background: linear-gradient(90deg, transparent, var(--purple), transparent);
}

/* ===== CONTENIDO ===== */

.contenido {
    max-width: 1100px;
    min-height: 50vh;
    margin: auto;
    padding: 30px 20px 70px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* ===== TARJETA ===== */

.tarjeta {
    width: 100%;
    max-width: 700px;
    padding: 45px;
    text-align: center;
    background: linear-gradient(145deg, rgba(255, 255, 255, .97), rgba(245, 239, 255, .97));
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: 0 20px 60px rgba(99, 76, 130, .12), 0 0 35px rgba(190, 164, 232, .12);
    position: relative;
    overflow: hidden;
}

.tarjeta::before {
    content: "";
    position: absolute;
    top: 0;
    left: 15%;
    width: 70%;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--purple), transparent);
    opacity: .7;
}

.imagen-alumno {
    width: 100%;
    max-width: 460px;
    height: 180px;
    object-fit: cover;
    margin-bottom: 25px;
    border-radius: 15px;
    border: 1px solid var(--border);
    box-shadow: 0 10px 35px rgba(99, 76, 130, .10);
}
.tarjeta h1 { margin: 0 0 10px; color: var(--text); font-size: 30px; font-weight: 700; }
.tarjeta p  { margin: 0; color: var(--muted); font-size: 16px; }
.descripcion { margin-top: 12px !important; font-size: 14px !important; line-height: 1.6; }

/* ===== BOTÓN ===== */

.btn-saes {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 30px;
    padding: 12px 25px;
    border: none;
    border-radius: 12px;
    color: var(--text);
    font-weight: 600;
    text-decoration: none;
    background: linear-gradient(135deg, #9875c9, #b49add);
    box-shadow: 0 8px 25px rgba(152, 117, 201, .22);
    transition: all .2s ease;
}

.btn-saes:hover {
    color: var(--text);
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(152, 117, 201, .32);
}



/* ===== FOOTER ===== */

footer {
    text-align: center;
    padding: 25px 20px;
    color: var(--muted);
    font-family: "JetBrains Mono", "Fira Code", monospace;
    font-size: 12px;
    border-top: 1px solid rgba(152, 117, 201, .13);
}
footer span { color: var(--purple-light); }

/* ===== RESPONSIVE ===== */

@media (max-width: 768px) {
    .navbar-container { flex-direction: column; gap: 12px; }
    .nav-links { flex-wrap: wrap; justify-content: center; }
    .system-status { display: none; }
    .hero { padding-top: 45px; }
    .tarjeta { padding: 30px 20px; }
    .imagen-alumno { height: 140px; }
}

/* ===== FORMULARIOS ===== */

.form-container {
    width: 100%;
    max-width: 1000px;
    min-height: 50vh;
    margin: 0 auto;
    padding: 25px 20px 70px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.form-card {
    width: 100%;
    max-width: 850px;
    margin: 0 auto;
    padding: 38px;
    background: linear-gradient(145deg, rgba(255, 255, 255, .98), rgba(245, 239, 255, .98));
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: 0 20px 60px rgba(99, 76, 130, .12), 0 0 35px rgba(190, 164, 232, .12);
}

.form-title {
    margin: 0;
    color: var(--text);
    font-size: clamp(26px, 4vw, 34px);
    font-weight: 700;
    text-align: center;
}

.form-subtitle {
    max-width: 680px;
    margin: 10px auto 30px;
    color: var(--muted);
text-align: center;
    line-height: 1.6;
}

.section-title {
    display: flex;
    align-items: center;
    gap: 9px;
    margin: 28px 0 16px;
    padding-bottom: 9px;
    color: var(--purple-light);
    font-weight: 700;
    border-bottom: 1px solid rgba(152, 117, 201, .20);
}

.form-label {
    color: var(--text);
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 7px;
}

.form-control,
.form-select,
.input-group-text {
    color: var(--text);
    background-color: rgba(255, 255, 255, .92);
    border-color: rgba(155, 92, 255, .22);
}

.form-control,
.form-select {
    min-height: 44px;
}

.form-control::placeholder {
    color: #9a8cac;
}

.form-control:focus,
.form-select:focus {
    color: var(--text);
    background-color: rgba(255, 255, 255, .98);
    border-color: var(--purple);
    box-shadow: 0 0 0 .2rem rgba(152, 117, 201, .18);
}

.input-group-text {
    color: var(--purple-light);
}

.form-select option {
    color: var(--text);
    background: var(--card);
}

.btn-purple {
    display: inline-flex
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 44px;
    padding: 10px 20px;
    border: 1px solid rgba(192, 132, 252, .35);
    border-radius: 10px;
    color: #ffffff;
    background: linear-gradient(135deg, #9875c9, #b49add);
    box-shadow: 0 8px 24px rgba(152, 117, 201, .22);
    font-weight: 600;
    transition: all .2s ease;
}

.btn-purple:hover {
    color: #ffffff;
    transform: translateY(-1px);
    box-shadow: 0 10px 28px rgba(152, 117, 201, .30);
}

.btn-outline-darkmode {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 44px;
    padding: 10px 20px;
    border: 1px solid rgba(120, 107, 139, .28);
    border-radius: 10px;
    color: var(--muted);
    background: transparent;
    font-weight: 600;
}

.btn-outline-darkmode:hover {
    color: var(--text);
    border-color: var(--purple);
    background: rgba(152, 117, 201, .10);
}

.status-box {
    display: flex;
    align-items: center;
    gap: 9px;
    margin-top: 20px;
    padding: 11px 14px;
    border: 1px solid rgba(152, 117, 201, .20);
    border-radius: 10px;
    color: var(--muted);
    background: rgba(213, 195, 242, .20);
    font-size: 13px;
}

.status-dot {
    width: 8px;
    height: 8px;
    flex: 0 0 8px;
    border-radius: 50%;
    background: var(--purple);
    box-shadow: 0 0 8px var(--purple);
}

/* ===== TABLAS ===== */

.table-container {
    width: 100%;
    max-width: 1150px;
    margin: 0 auto;
    padding: 25px 20px 70px;
    display: flex;
    justify-content: center;
}

.table-card {
    width: 100%;
    max-width: 1100px;
    padding: 35px;
    margin: 0 auto;
    background: linear-gradient(145deg, rgba(255, 255, 255, .98), rgba(245, 239, 255, .98));
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: 0 20px 60px rgba(99, 76, 130, .12), 0 0 35px rgba(190, 164, 232, .12);
}
.table-responsive {
    border-radius: 14px;
    overflow-x: auto;
}
.table-saes {
    margin: 0;
    --bs-table-bg: rgba(248, 245, 255, .75);
    --bs-table-color: var(--text);
    --bs-table-border-color: rgba(152, 117, 201, .20);
    vertical-align: middle;
}
.table-saes thead th {
    color: var(--purple-light);
    background: rgba(152, 117, 201, .12);
    border-bottom: 1px solid rgba(152, 117, 201, .30);
    white-space: nowrap;
}
.table-saes tbody tr:hover {
    --bs-table-hover-bg: rgba(152, 117, 201, .08);
}
.titulo-seccion {
    margin: 0 0 22px;
    color: var(--text);
    text-align: center;
    font-size: 30px;
    font-weight: 700;
}

/* ===== REGLAS GENERALES DE CENTRADO ===== */

main.contenido,
main.form-container,
main.table-container {
    margin-left: auto;
    margin-right: auto;
}
main.contenido > .w-100 {
    width: 100% !important;
    max-width: 1100px;
    margin: 0 auto;
}
@media (max-width: 768px) {
    .form-container,
    .table-container {
        padding: 20px 12px 50px;
    }
    .form-card,
    .table-card {
        padding: 24px 18px;
        border-radius: 17px;
    }
    .d-flex.justify-content-end {
        justify-content: center !important;
    }
    .btn-purple,
    .btn-outline-darkmode {
        flex: 1 1 180px;
    }
}

/* ===== NAVEGACIÓN PRINCIPAL ===== */

.navbar-container {
    width: 100%;
    max-width: 1180px;
    margin: 0 auto;
}
.nav-links {
    flex-wrap: wrap;
    justify-content: flex-end;
}
.nav-links a {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    white-space: nowrap;
}

.nav-links a i {
    color: var(--purple-light);
}

.nav-links a.active {
    box-shadow: inset 0 0 18px rgba(152, 117, 201, .08);
}

@media (max-width: 1000px) {
    .navbar-container {
        flex-wrap: wrap;
        justify-content: center;
    }
    .brand {
        margin-right: auto;
    }

    .system-status {
        display: none;
    }

    .nav-links {
    width: 100%;
        justify-content: center;
    }
}

/* ===== MENÚS DESPLEGABLES SIN JAVASCRIPT ===== */

.nav-dropdown {
    position: relative;
}

.nav-dropdown-toggle {
    cursor: pointer;
}

.nav-dropdown .dropdown-menu {
    margin-top: 8px;
    min-width: 210px;
    padding: 8px;
    background: rgba(255, 255, 255, .98);
    border: 1px solid var(--border);
    border-radius: 12px;
    box-shadow: 0 18px 45px rgba(99, 76, 130, .12);
}

.nav-dropdown:hover .dropdown-menu,
.nav-dropdown:focus-within .dropdown-menu {
    display: block;
}

.nav-dropdown .dropdown-item {
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 9px 11px;
    border-radius: 8px;
    color: var(--muted);
}

.nav-dropdown .dropdown-item:hover,
.nav-dropdown .dropdown-item:focus {
    color: var(--text);
    background: rgba(152, 117, 201, .13);
}

.nav-dropdown .dropdown-item i {
    color: var(--purple-light);
}

.nav-dropdown .dropdown-divider {
    border-color: rgba(152, 117, 201, .18);
}

@media (max-width: 1000px) {
    .nav-dropdown .dropdown-menu {
        position: static;
        width: 100%;
        margin-top: 5px;
     }
}

</style>
<style>
/* ===== VARIABLES ===== */
:root {
    --bg: #09070f;
    --card: #110d1b;
    --card-2: #171022;
    --purple: #9b5cff;
    --purple-light: #c084fc;
    --border: rgba(155, 92, 255, 0.25);
    --text: #f5f3ff;
    --muted: #9f96b2;
}

/* ===== BODY ===== */
body {
    margin: 0;
    min-height: 100vh;
    color: var(--text);
    font-family: Arial, Helvetica, sans-serif;
    background:
        radial-gradient(circle at 20% 20%, rgba(126, 34, 206, .18), transparent 30%),
        radial-gradient(circle at 80% 80%, rgba(168, 85, 247, .12), transparent 30%),
        var(--bg);
}

/* ===== NAVBAR ===== */
.navbar-saes {
    background: rgba(9, 7, 15, .82);
    border-bottom: 1px solid var(--border);
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
    color: var(--text);
    font-family: "JetBrains Mono", "Fira Code", monospace;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: .5px;
}
.brand span { color: var(--purple-light); }

.terminal-dot {
    width: 10px;
    height: 10px;
    background: var(--purple);
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 6px var(--purple), 0 0 14px var(--purple), 0 0 25px rgba(155, 92, 255, .8);
    animation: pulse 2s infinite;
}
@keyframes pulse {
    0%, 100% { opacity: 1; box-shadow: 0 0 6px var(--purple), 0 0 14px var(--purple); }
    50%      { opacity: .65; box-shadow: 0 0 4px var(--purple), 0 0 8px var(--purple); }
}

.system-status {
    color: var(--muted);
    font-family: "JetBrains Mono", "Fira Code", monospace;
    font-size: 12px;
    margin-left: 20px;
}
.system-status::before {
    content: "●";
    color: var(--purple);
    margin-right: 6px;
}

/* ===== NAVEGACIÓN ===== */
.nav-links { display: flex; align-items: center; gap: 5px; }
.nav-links a {
    color: var(--muted);
    text-decoration: none;
    padding: 9px 14px;
    border-radius: 10px;
    transition: all .2s ease;
    font-size: 14px;
}
.nav-links a:hover { color: var(--text); background: rgba(155, 92, 255, .10); }
.nav-links a.active {
    color: white;
    background: rgba(139, 92, 246, .22);
    border: 1px solid rgba(155, 92, 255, .25);
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
    text-shadow: 0 0 20px rgba(155, 92, 255, .20);
}
.saes-title .title-dot {
    display: inline-block;
    width: 13px;
    height: 13px;
    margin-right: 8px;
    vertical-align: middle;
    background: var(--purple);
    border-radius: 50%;
    box-shadow: 0 0 7px var(--purple), 0 0 16px var(--purple), 0 0 35px rgba(155, 92, 255, .8);
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
    background: linear-gradient(145deg, rgba(23, 16, 34, .96), rgba(13, 10, 21, .96));
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, .45), 0 0 35px rgba(126, 34, 206, .08);
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
    box-shadow: 0 10px 35px rgba(0, 0, 0, .35);
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
    color: white;
    font-weight: 600;
    text-decoration: none;
    background: linear-gradient(135deg, #7c3aed, #a855f7);
    box-shadow: 0 8px 25px rgba(124, 58, 237, .25);
    transition: all .2s ease;
}
.btn-saes:hover {
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(124, 58, 237, .40);
}

/* ===== FOOTER ===== */
footer {
    text-align: center;
    padding: 25px 20px;
    color: var(--muted);
    font-family: "JetBrains Mono", "Fira Code", monospace;
    font-size: 12px;
    border-top: 1px solid rgba(155, 92, 255, .12);
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
    background: linear-gradient(145deg, rgba(23, 16, 34, .97), rgba(13, 10, 21, .97));
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, .42), 0 0 35px rgba(126, 34, 206, .08);
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
    border-bottom: 1px solid rgba(155, 92, 255, .16);
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
    background-color: rgba(9, 7, 15, .85);
    border-color: rgba(155, 92, 255, .22);
}

.form-control,
.form-select {
    min-height: 44px;
}

.form-control::placeholder {
    color: #766d86;
}

.form-control:focus,
.form-select:focus {
    color: var(--text);
    background-color: rgba(9, 7, 15, .95);
    border-color: var(--purple);
    box-shadow: 0 0 0 .2rem rgba(155, 92, 255, .14);
}

.input-group-text {
    color: var(--purple-light);
}

.form-select option {
    color: var(--text);
    background: var(--card);
}

.btn-purple {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 44px;
    padding: 10px 20px;
    border: 1px solid rgba(192, 132, 252, .35);
    border-radius: 10px;
    color: #fff;
    background: linear-gradient(135deg, #7c3aed, #a855f7);
    box-shadow: 0 8px 24px rgba(124, 58, 237, .22);
    font-weight: 600;
    transition: all .2s ease;
}

.btn-purple:hover {
    color: #fff;
    transform: translateY(-1px);
    box-shadow: 0 10px 28px rgba(124, 58, 237, .35);
}

.btn-outline-darkmode {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 44px;
    padding: 10px 20px;
    border: 1px solid rgba(159, 150, 178, .28);
    border-radius: 10px;
    color: var(--muted);
    background: transparent;
    font-weight: 600;
}

.btn-outline-darkmode:hover {
    color: var(--text);
    border-color: var(--purple);
    background: rgba(155, 92, 255, .08);
}

.status-box {
    display: flex;
    align-items: center;
    gap: 9px;
    margin-top: 20px;
    padding: 11px 14px;
    border: 1px solid rgba(155, 92, 255, .16);
    border-radius: 10px;
    color: var(--muted);
    background: rgba(155, 92, 255, .05);
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
    background: linear-gradient(145deg, rgba(23, 16, 34, .97), rgba(13, 10, 21, .97));
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, .42), 0 0 35px rgba(126, 34, 206, .08);
}

.table-responsive {
    border-radius: 14px;
    overflow-x: auto;
}

.table-saes {
    margin: 0;
    --bs-table-bg: rgba(9, 7, 15, .55);
    --bs-table-color: var(--text);
    --bs-table-border-color: rgba(155, 92, 255, .16);
    vertical-align: middle;
}

.table-saes thead th {
    color: var(--purple-light);
    background: rgba(155, 92, 255, .10);
    border-bottom: 1px solid rgba(155, 92, 255, .28);
    white-space: nowrap;
}

.table-saes tbody tr:hover {
    --bs-table-hover-bg: rgba(155, 92, 255, .07);
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
    box-shadow: inset 0 0 18px rgba(155, 92, 255, .06);
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
    background: rgba(17, 13, 27, .98);
    border: 1px solid var(--border);
    border-radius: 12px;
    box-shadow: 0 18px 45px rgba(0, 0, 0, .45);
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
    background: rgba(155, 92, 255, .12);
}

.nav-dropdown .dropdown-item i {
    color: var(--purple-light);
}

.nav-dropdown .dropdown-divider {
    border-color: rgba(155, 92, 255, .15);
}

@media (max-width: 1000px) {
    .nav-dropdown .dropdown-menu {
        position: static;
        width: 100%;
        margin-top: 5px;
    }
}

</style>
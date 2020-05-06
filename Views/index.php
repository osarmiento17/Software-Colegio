<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './Templates/styles.php'; ?>
    <title>Inicio | Software Colegio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <span href="#" class="navbar-brand mb-0 h1">Software Colegio</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSoftware">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSoftware">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">Asistencia</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Gestionar</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Cursos</a>
                        <a href="#" class="dropdown-item">Profesores</a>
                        <a href="#" class="dropdown-item">Estudiantes</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Cerrar sesi&oacute;n</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php include_once './Templates/scripts.php'; ?>
</body>
</html>
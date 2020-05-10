<?php 
    date_default_timezone_set('America/Bogota');

    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
    
    switch($mes){
        case '01':
            $mes = 'Enero';
        break;
        case '02':
            $mes = 'Febrero';
        break;
        case '03':
            $mes = 'Marzo';
        break;
        case '04':
            $mes = 'Abril';
        break;
        case '05':
            $mes = 'Mayo';
        break;
        case '06':
            $mes = 'Junio';
        break;
        case '07':
            $mes = 'Julio';
        break;
        case '08':
            $mes = 'Agosto';
        break;
        case '09':
            $mes = 'Septiembre';
        break;
        case '10':
            $mes = 'Octubre';
        break;
        case '11':
            $mes = 'Noviembre';
        break;
        case '12':
            $mes = 'Diciembre';
        break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './Templates/styles.php'; ?>
    <title>Inicio | Software Colegio</title>
</head>
<body>
    <?php include_once './Templates/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-4">Panel de Administraci&oacute;n</h1>
            </div>
        </div>
        <br>
        <div class="row mb-5">
            <div class="col-sm-12">
                <button class="btn btn-primary btn-lg btn-block">
                    <h4 class="card-title text-center">
                        <i class="fas fa-calendar-alt"></i> Asistencia de hoy <?= "$dia de $mes de $ano."; ?>
                    </h4>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 mt-1 mb-1">
                <div class="card shadow bg-info text-white">
                    <div class="row no-glutters">
                        <div class="col-6">
                            <i class="fas fa-chalkboard fa-4x mt-4 ml-5"></i>
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <p class="card-text display-4">0</p>
                            </div>
                        </div>
                    </div>
                    <a href="http://localhost/Clases/SoftwareColegio/Views/cursos.php" class="card-link text-white">
                        <div class="card-footer text-center">
                            <h4>Cursos</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mt-1 mb-1">
                <div class="card shadow bg-success text-white">
                    <div class="row no-glutters">
                        <div class="col-6">
                            <i class="fas fa-chalkboard-teacher fa-4x mt-4 ml-5"></i>
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <p class="card-text display-4">0</p>
                            </div>
                        </div>
                    </div>
                    <a href="http://localhost/Clases/SoftwareColegio/Views/profesores.php" class="card-link text-white">
                        <div class="card-footer text-center">
                            <h4>Profesores</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mt-1 mb-1">
                <div class="card shadow bg-secondary text-white">
                    <div class="row no-glutters">
                        <div class="col-6">
                            <i class="fas fa-user-graduate fa-4x mt-4 ml-5"></i>
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <p class="card-text display-4">0</p>
                            </div>
                        </div>
                    </div>
                    <a href="http://localhost/Clases/SoftwareColegio/Views/estudiantes.php" class="card-link text-white">
                        <div class="card-footer text-center">
                            <h4>Estudiantes</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './Templates/scripts.php'; ?>
</body>
</html>
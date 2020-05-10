<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './Templates/styles.php'; ?>
    <title>Gestionar cursos | Software Colegio</title>
</head>
<body>
    <?php include_once './Templates/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-4">Gesti&oacute;n de cursos</h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-end pr-2">
            <div class="col-xs-3 offset-sm-9 offset-md-9 offset-lg-9">
                <button class="btn btn-success" id="btnCrearCurso"><i class="fas fa-plus"></i> Nuevo curso</button>
            </div>
        </div>
        <br><br>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><i class="fas fa-chalkboard"></i> Curso</th>
                        <th class="text-right"><i class="fas fa-tools"></i> Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1A</td>
                    <td class="text-right">
                        <button class="btn btn-primary btnActualizarCurso">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btnEliminarCurso">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2B</td>
                    <td class="text-right">
                        <button class="btn btn-primary btnActualizarCurso">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btnEliminarCurso">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3D</td>
                    <td class="text-right">
                        <button class="btn btn-primary btnActualizarCurso">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btnEliminarCurso">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>4A</td>
                    <td class="text-right">
                        <button class="btn btn-primary btnActualizarCurso">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btnEliminarCurso">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>11D</td>
                    <td class="text-right">
                        <button class="btn btn-primary btnActualizarCurso">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btnEliminarCurso">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once './Templates/scripts.php'; ?>
</body>
</html>
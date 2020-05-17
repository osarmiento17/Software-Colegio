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
                <button class="btn btn-success" id="btnCrearCurso" data-toggle="modal" data-target="#modalNuevoCurso"><i class="fas fa-plus"></i> Nuevo curso</button>
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
                <tbody id="bodyTablaCursos">
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="modalNuevoCurso" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelTituloModal">Nuevo curso</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-xsm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="txtNombreCurso">Nombre</label>
                                        <input type="text" class="form-control" id="txtDescripcionCurso" maxlength="3">
                                        <input type="text" class="form-control" id="txtIdCurso" style="display:none" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="btnNuevoCurso"><i class="fas fa-check"></i> Crear</button>
                        <button class="btn btn-primary" id="btnActualizarCurso" style="display:none;"><i class="fas fa-edit"></i> Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './Templates/scripts.php'; ?>
    <script src="./Js/cursos.js"></script>
</body>
</html>
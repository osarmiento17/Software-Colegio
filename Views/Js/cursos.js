$(document).ready(function(){

    listarCursos();
   
    $('#btnNuevoCurso').on('click', function(){

        descripcion = $('#txtDescripcionCurso').val();

        if(descripcion == null || descripcion == ""){

            alert("Ingrese el nombre del curso");
        }
        else{

            if(descripcion.length <= 3){

                crearCurso(descripcion);   
            }
            else{
                alert("El nombre del curso es muy largo (max. 3 caracteres)");
            }
        }
    });

    $('#btnActualizarCurso').on('click', function(){

        id = $('#txtIdCurso').val();
        descripcion = $('#txtDescripcionCurso').val();

        if(descripcion == null || descripcion == ""){

            alert("Ingrese el nombre del curso");
        }
        else{

            if(descripcion.length <= 3){

                actualizarCurso(id, descripcion);
            }
            else{
                alert("El nombre del curso es muy largo (max. 3 caracteres)");
            }
        }
    });

    $('#modalNuevoCurso').on('hidden.bs.modal', function (e) {        
        
        $('#labelTituloModal').text("Nuevo curso");
        $('#btnNuevoCurso').show();
        $('#btnActualizarCurso').hide();
        $('#txtIdCurso').val("");
        $('#txtDescripcionCurso').val("");
    });

    function listarCursos(){
        
        $.ajax({
            type: "GET",
            url: "http://localhost/Clases/SoftwareColegio/Controllers/cursos.php",
            data: {
                metodo: "listarCursos"
            },
            dataType: "json",
            success: function (result) {
    
                if(result.des === 'OK'){
        
                    cursos = result.data;
                    htmlCursos = "";
    
                    $.each(cursos, function (i, curso) { 
                       
                        htmlCursos += "<tr><td>" + curso.descripcion + "</td><td class='text-right'><button class='btn btn-primary btnActualizarCurso' data-id_curso='" + curso.id + "'><i class='fas fa-edit'></i></button> <button class='btn btn-danger btnEliminarCurso' data-id_curso='" + curso.id + "'><i class='fas fa-trash-alt'></i></button></td></tr>"
                    });
    
                    $('#bodyTablaCursos').html(htmlCursos);

                    $('.btnActualizarCurso').on('click', function(){

                        id = $(this).data('id_curso');
                        descripcion = $(this).parent().parent().children().filter(':first').text(); 
                        $('#labelTituloModal').text("Actualizar curso " + descripcion);
                        $('#txtIdCurso').val(id);
                        $('#txtDescripcionCurso').val(descripcion);
                        $('#btnNuevoCurso').hide();
                        $('#btnActualizarCurso').show();
                        $('#modalNuevoCurso').modal('show');
                    });
                    
                    $('.btnEliminarCurso').on('click', function(){ 

                        id = $(this).data('id_curso');
                        
                        eliminarCurso(id);
                     });
                }
            },
            error: function (){ 
                alert("Error: Ocurrió un error de comunicación con el servidor")
            }
        });

        
    }

    function crearCurso(descripcion){

        $.ajax({
            type: "POST",
            url: "http://localhost/Clases/SoftwareColegio/Controllers/cursos.php",
            data: {
                metodo: "crearCurso",
                descripcion: descripcion
            },
            dataType: "json",
            success: function (result) {
    
                if(result.cod == 200){
        
                    $('#modalNuevoCurso').modal('hide');
                    listarCursos();
                }
                else if(result.cod == 502){

                    alert("Precaución: El curso ya existe");
                }
                else{

                    alert("Error: Problema al crear curso");
                }
            },
            error: function (){ 
                alert("Error: Ocurrió un error de comunicación con el servidor");
            }
        });
    }

    function actualizarCurso(id, descripcion){
        
        $.ajax({
            type: "POST",
            url: "http://localhost/Clases/SoftwareColegio/Controllers/cursos.php",
            data: {
                metodo: "actualizarCurso",
                id: id,
                descripcion: descripcion
            },
            dataType: "json",
            success: function (result) {
    
                if(result.cod == 200){
        
                    listarCursos();
                    $('#modalNuevoCurso').modal('hide');
                    alert("Curso actualizado");
                }
                else if(result.cod == 502){
                    
                    alert("Precaución: El nombre del curso sigue siendo el mismo");
                }
                else{

                    alert("Error: Problema al actualizar curso");
                }
            },
            error: function (){ 
                alert("Error: Ocurrió un error de comunicación con el servidor");
            }
        });
    }

    function eliminarCurso(id){
        
        $.ajax({
            type: "GET",
            url: "http://localhost/Clases/SoftwareColegio/Controllers/cursos.php",
            data: {
                metodo: "eliminarCurso",
                id: id
            },
            dataType: "json",
            success: function (result) {
    
                if(result.cod == 200){
        
                    listarCursos();
                }
                else{

                    alert("Error: Problema al eliminar curso");
                }
            },
            error: function (){ 
                alert("Error: Ocurrió un error de comunicación con el servidor");
            }
        });
    }
});
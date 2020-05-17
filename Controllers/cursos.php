<?php 

    require_once $_SERVER["DOCUMENT_ROOT"] . "/Clases/SoftwareColegio/Models/curso.php";

    $metodo = $_REQUEST["metodo"];

    if(isset($metodo)){

        switch($metodo){

            case 'listarCursos':

                $curso = new Curso();
                $cursos = $curso->listar();
                
                if(count($cursos) > 0){

                    $jsonResult = [
                        'cod' => 200,
                        'des' => 'OK',
                        'data' => $cursos
                    ];
                }
                else{

                    $jsonResult = [
                        'cod' => 501,
                        'des' => 'no hay cursos'
                    ];
                }
            break;
            case 'crearCurso':
                
                if(isset($_REQUEST["descripcion"]) && !empty($_REQUEST["descripcion"])){

                    $curso = new Curso();
                    $curso = $curso->crear($_REQUEST["descripcion"]);
                    
                    if($curso){

                        $jsonResult = [
                            "cod" => 200,
                            "des" => "OK"
                        ];
                    }
                    else{
                        $jsonResult = [
                            "cod" => 502,
                            "des" => "Curso existente"
                        ];
                    }
                }
                else{

                    $jsonResult = [
                        'cod' => 500,
                        'des' => 'no existe el parametro descripcion, o está vacío'
                    ];
                }
            break;

            case 'actualizarCurso':
                
                if((isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) && (isset($_REQUEST["descripcion"]) && !empty($_REQUEST["descripcion"]))){

                    $curso = new Curso();
                    $curso = $curso->actualizar($_REQUEST["id"], $_REQUEST["descripcion"]);
                    
                    if($curso){

                        $jsonResult = [
                            "cod" => 200,
                            "des" => "OK"
                        ];
                    }
                    else{
                        $jsonResult = [
                            "cod" => 502,
                            "des" => "Curso existente con el mismo nombre"
                        ];
                    }
                }
                else{

                    $jsonResult = [
                        'cod' => 500,
                        'des' => 'no existe el parametro id descripcion, o están vacíos'
                    ];
                }
            break;

            case 'eliminarCurso':

                if(isset($_REQUEST["id"]) && !empty($_REQUEST["id"])){

                    $curso = new Curso();
                    $curso = $curso->eliminar($_REQUEST["id"]);
                    
                    if($curso){

                        $jsonResult = [
                            "cod" => 200,
                            "des" => "OK"
                        ];
                    }
                    else{
                        $jsonResult = [
                            "cod" => 503,
                            "des" => "No se pudo eliminar el curso"
                        ];
                    }
                }
                else{

                    $jsonResult = [
                        'cod' => 500,
                        'des' => 'no existe el parametro descripcion, o está vacío'
                    ];
                }
            break;
        }
    }
    else{
        $jsonResult = ["cod" => 500, "des" => "No existe la variable método"];
    }

    echo json_encode($jsonResult);
?>
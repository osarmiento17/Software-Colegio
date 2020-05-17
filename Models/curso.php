<?php 
    
    require_once $_SERVER["DOCUMENT_ROOT"] . "/Clases/SoftwareColegio/Models/db.php";

    class Curso extends DB{
        
        private $id;
        private $descripcion;


        public function listar(){

            return self::sql("SELECT * FROM cursos");
        }

        public function crear($descripcion){
            
            $result = false;
            $this->descripcion = strtoupper(trim($descripcion));
            $existeCurso = $this->buscarCurso();

            if(count($existeCurso) == 0){

                $result = self::query('INSERT INTO cursos(descripcion) VALUES ("'.$this->descripcion.'")');
            }

            return $result;

        }

        public function actualizar($id, $descripcion){
            
            $result = false;
            $this->id = trim($id);
            $this->descripcion = strtoupper(trim($descripcion));
            $existeCurso = $this->buscarCurso();

            if(count($existeCurso) == 0){

                $result = self::query('UPDATE cursos SET descripcion = "' . $this->descripcion . '" WHERE id = ' . $this->id);
            }

            return $result;
        }

        public function eliminar($id){

            return self::query('DELETE FROM cursos WHERE id = ' . $id);
        }

        private function buscarCurso(){
            
            return self::sql('SELECT * FROM cursos WHERE descripcion ="' . $this->descripcion .'"');
        }
    }
?>
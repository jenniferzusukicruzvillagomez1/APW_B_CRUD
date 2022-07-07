<?php

        Class Conectar{
            protected $dbh;

            protected function conexion(){
                try{
                    $conectar = $this ->dbh = new PDO("mysql:local=localhost;dbname=apw_b_crud","root","");
                    
                    return $conectar;
                }catch(Exception $e){
                    print "¡Error en la conexion de la Db!:" . $e->getMessage() . "<br/>";
                }
            }

            public function set_names(){
                return $this->dbh->query("SET NAMES 'utf8'");
            }
        }
?>

<?php
    require '../config/conexion.php';
        
        Class Productos extends Conectar{
            public function get_producto(){
                $conectar = parent::conexion();
                parent::set_names();
                $sql="SELECT * FROM tm_producto";
                $sql =$conectar->prepare($sql);
                $sql->execute();

                return $resultado=$sql->fetchAll();
            }
            public function get_producto_x_id($prod_id){
                $conectar = parent::conexion();
                parent::set_names();
                $sql="SELECT * FROM tm_producto where prod_id=?";
                $sql =$conectar->prepare($sql);
                $sql->bindValue(1,$prod_id);
                $sql->execute();

                return $resultado=$sql->fetchAll();
            }
            public function delete_producto($prod_id){
                $conectar = parent::conexion();
                parent::set_names();
                $sql="UPDATE tm_producto
                    SET
                        est=0
                        fech_alim=now()
                    WHERE 
                        prod_id = ?
                    ";
                $sql =$conectar->prepare($sql);
                $sql->bindValue(1,$prod_id);
                $sql->execute();

                return $resultado=$sql->fetchAll();
            }
            
        }
?>
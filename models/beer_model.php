<?php
class beer_model{
    private $db;
    private $beer;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->beer=array();
    }

    public function get_beer(){
        $consulta=$this->db->query("select * from beer;");
        while($filas=$consulta->fetch_assoc()){
            $this->beer[]=$filas;
        }
        return $this->beer;
    }
}

?>
<?php

class conexion{

    public function conectar(){
        $con = new mysqli("localhost","root","","mymvc");
        return $con;

    }

}
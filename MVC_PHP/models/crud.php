<?php


require_once('conexion.php');

class datos{

    public function registroUsuario($datos){
        $con = conexion::conectar();
        $sql = $con->prepare("insert into usuarios(usuario, contras,email) values (?,?,?)");
        $sql->bind_param('sss',$datos['usuario'],$datos['contra'],$datos['email']);
        if($sql->execute()){
            return "ok";
        }
        else{
            return "error";
        }
    }

    public function ingresoUsuario($datos){
        $con = conexion::conectar();
        $sql = $con->prepare("select * from usuarios where usuario=? and contras=?");
        $sql->bind_param('ss',$datos['usuario'],$datos['contra']);
        $sql->execute();
        $sql->store_result();
        if($sql->num_rows()==1){
            return "ok";
        }
        else{
            return "error";
        }

    }

    public function listaUsuarios(){
        $con = conexion::conectar();
        $sql = $con->query("select * from usuarios");
        return $sql;

    }
}
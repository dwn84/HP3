<?php
    session_start();
    if(!isset($_SESSION['validar'])||!$_SESSION['validar']){
        echo "Acceso restringido";
        exit;
    }

?>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $mvc = new MvcController();
        $mvc -> listarUsuariosController();
    ?>
  </tbody>
</table>
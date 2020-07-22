<?php

require_once "controllers/controller.php";
require_once "models/crud.php";

?>
<form method="post" action="">
<div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" name="txtUsuarioR" id="txtUsuarioR" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="txtEmailR" id="txtEmailR" aria-describedby="emailHelp" required>
    <small id="emailHelp" class="form-text text-muted">El correo electrónico no es compartido.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="txtPasswordR" id="txtPasswordR" class="form-control" id="exampleInputPassword1" required>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php


    $mvc = new MvcController();
    $mvc -> registroUsuarioController();
?>
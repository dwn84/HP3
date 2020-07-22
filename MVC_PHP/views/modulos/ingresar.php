<?php

require_once "controllers/controller.php";
require_once "models/crud.php";

?>
<form method="post" action="">
<div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" name="txtUsuarioI" id="txtUsuarioI" aria-describedby="emailHelp" required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="txtPasswordI" id="txtPasswordI" class="form-control" id="exampleInputPassword1" required>
  </div>

  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>


<?php
    $mvc = new MvcController();
    $mvc -> ingresoUsuarioController();
?>
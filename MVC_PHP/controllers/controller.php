 <?php
 class mvcController{
	
	public function plantilla()
	{
		include "views/template.php";
	}
	
	public function paginasControler()
	{
		if(!isset($_GET["action"]))
			$enlaces = "0";
		else
			$enlaces = $_GET["action"];

		$respuesta = paginas::url($enlaces);
		include $respuesta;
	}
 }
 ?>
 
 
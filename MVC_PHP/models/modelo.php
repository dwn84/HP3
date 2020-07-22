<?php
class paginas{
	
	public function url($pag)
	{
		if($pag=="registro" || $pag=="ingresar" || $pag=="usuarios" || $pag=="salir"){
			
			$modulo="views/modulos/".$pag.".php";

		}
		else if($pag=="index" ){

			$modulo="views/modulos/inicio.php";

		}

		else{
			
			$modulo="views/modulos/inicio.php";

		}
		
		
		return $modulo;
	}
}
?>


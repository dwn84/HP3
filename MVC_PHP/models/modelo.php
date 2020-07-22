<?php
class paginas{
	
	public function url($pag)
	{
<<<<<<< HEAD
		if($pag=="registro" || $pag=="ingresar" || $pag=="usuarios" || $pag=="salir"){
			
			$modulo="views/modulos/".$pag.".php";

		}
		else if($pag=="index" ){

			$modulo="views/modulos/inicio.php";

		}

		else{
			
			$modulo="views/modulos/inicio.php";

		}
		
=======
		switch ($pag)
		{
			case 0:
				$modulo="inicio";
				break;
			case 1:
				$modulo="nosotros";
				break;
			case 2:
				$modulo="servicios";
				break;
			case 3:
				$modulo="contactenos";
				break;	
			default:
				$modulo="inicio";
		}
		
		$modulo="views/modulos/".$modulo.".php";
>>>>>>> f3e58a19e780f485fe8e9679694c58755cc22a13
		
		return $modulo;
	}
}
?>


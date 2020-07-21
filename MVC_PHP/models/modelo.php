<?php
class paginas{
	
	public function url($pag)
	{
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
		
		return $modulo;
	}
}
?>


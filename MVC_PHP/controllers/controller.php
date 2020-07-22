 <?php
<<<<<<< HEAD

require_once "models/crud.php";


=======
>>>>>>> f3e58a19e780f485fe8e9679694c58755cc22a13
 class mvcController{
	
	public function plantilla()
	{
		include "views/template.php";
	}
	
	public function paginasControler()
	{
		if(!isset($_GET["action"]))
<<<<<<< HEAD
			$enlaces = "index";
=======
			$enlaces = "0";
>>>>>>> f3e58a19e780f485fe8e9679694c58755cc22a13
		else
			$enlaces = $_GET["action"];

		$respuesta = paginas::url($enlaces);
		include $respuesta;
	}
<<<<<<< HEAD

	public function registroUsuarioController(){
		if(isset($_POST['txtUsuarioR'])){

			$datos =  array(
							"usuario" => $_POST['txtUsuarioR'],
							"contra" => md5($_POST['txtPasswordR']),
							"email" => $_POST['txtEmailR']
						);
			$respuesta = datos::registroUsuario($datos);
			if($respuesta=="ok"){
				echo "<script>
						alert('Registro exitoso');
						window.location.href='index.php?action=ingresar';
					</script>
				";
			}
		}
	}

	public function ingresoUsuarioController(){

		if(isset($_POST['txtUsuarioI'])){

			$datos =  array(
							"usuario" => $_POST['txtUsuarioI'],
							"contra" => md5($_POST['txtPasswordI'])
						);
			$respuesta = datos::ingresoUsuario($datos);
			if($respuesta=="ok"){
				session_start();
				$_SESSION['validar']=true;

				echo "<script>
						alert('Ingreso exitoso');
						window.location.href='index.php?action=usuarios';
					</script>
				";
			}
			else{
				echo "<script>
						alert('Ingreso fallido');
						window.location.href='index.php?action=ingresar';
					</script>
				";
			}
		}
	}

	public function listarUsuariosController(){
		$respuesta = datos::listaUsuarios();
		while($filla = $respuesta->fetch_object()){
			echo "
				<tr>
					<td>$filla->id</td>
					<td>$filla->usuario</td>
					<td>$filla->email</td>
				</tr>
			";
		}
	}
=======
>>>>>>> f3e58a19e780f485fe8e9679694c58755cc22a13
 }
 ?>
 
 
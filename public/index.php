<?php
	namespace Practica;
	use  Practica\Personajes\Jugadores\Jugador;
	use  Practica\Personajes\Tecnicos\DirectorTecnico;
	require "../vendor/autoload.php";

	$directorTecnico = new DirectorTecnico("Pep", "Guardiola", "12/11/1980", "España" ,1.72, 70);
	$jugadores = array(
		Jugador::createJugador("James", "Rodriguez", "14/12/1992", "Colombia", 1.71, 76)
		->setNumero(10)
		->setPosicion("Mediocampista")
		->setEstadisticas(20, 82, 79, 72, 87)
		);

	//$equipo = new EquipoFutbol();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Club de futbol</title>
</head>
<body>

	<?php
		
		
	?>

</body>
</html>
<?php
	namespace Practica;
	use  Practica\Personajes\Jugadores\Jugador;
	use  Practica\Personajes\Tecnicos\DirectorTecnico;
	require "../vendor/autoload.php";

	//Creando un equipo A
	$directorTecnicoA = new DirectorTecnico("Pep", "Guardiola", "12/11/1980", "España" ,1.72, 70);

	$jugadoresA = array(
		Jugador::createJugador("Manuel", "Neuer", "13/08/1989", "Alemania", 1.91, 87)
			->setNumero(1)
			->setPosicion("Arquero")
			->setEstadisticas(90, 40, 28, 68, 75),

		Jugador::createJugador("James", "Rodriguez", "14/12/1992", "Colombia", 1.71, 76)
			->setNumero(10)
			->setPosicion("Mediocampista")
			->setEstadisticas(20, 80, 78, 70, 86),

		Jugador::createJugador("Edinson", "Cavani", "01/02/1991", "Uruguay", 1.75, 72)
			->setNumero(9)
			->setPosicion("Delantero")
			->setEstadisticas(18, 82, 89, 65, 79),

		Jugador::createJugador("Diego", "Godin", "25/10/1988", "Uruguay", 1.85, 79)
			->setNumero(2)
			->setPosicion("Defensa")
			->setEstadisticas(40, 30, 45, 87, 73),

		Jugador::createJugador("Francisco", "Alarcon", "20/03/1994", "España", 1.74, 73)
			->setNumero(6)
			->setPosicion("Mediocampista")
			->setEstadisticas(23, 84, 56, 67, 89)
		);

	$equipoA = new EquipoFutbol("Equipo A", "Equipo A Arena", "Ligue 1", $jugadores, $directorTecnico);

	//Creando un equipo B
	$directorTecnicoB = new DirectorTecnico("Pep", "Guardiola", "12/11/1980", "España" ,1.72, 70);

	$jugadoresB = array(
		Jugador::createJugador("Gianluigi", "Buffon", "12/04/1987", "Italia", 1.92, 84)
			->setNumero(1)
			->setPosicion("Arquero")
			->setEstadisticas(86, 36, 26, 59, 68),

		Jugador::createJugador("Thiago", "Alcantara", "30/3/1992", "España", 1.75, 76)
			->setNumero(8)
			->setPosicion("Mediocampista")
			->setEstadisticas(21, 85, 78, 70, 86),

		Jugador::createJugador("Harry", "Kane", "09/05/1995", "Inglaterra", 1.85, 83)
			->setNumero(9)
			->setPosicion("Delantero")
			->setEstadisticas(19, 84, 92, 58, 77),

		Jugador::createJugador("Virgil", "Van Dijk", "22/11/1990", "Holanda", 1.89, 87)
			->setNumero(4)
			->setPosicion("Defensa")
			->setEstadisticas(37, 35, 50, 92, 75),

		Jugador::createJugador("Andres", "Iniesta", "14/07/1986", "España", 1.71, 68)
			->setNumero(6)
			->setPosicion("Mediocampista")
			->setEstadisticas(23, 79, 47, 60, 85)
		);
	$equipoB = new EquipoFutbol("Equipo B", "Equipo B Arena", "Ligue 1", $jugadoresB, $directorTecnicoB);

	$goles_A=0;
	$goles_B=0;
	while($goles_A <= 5 && $goles_B <= 5){
		if($equipoA->getJugadores()[rand(0,3)]->regatear(
					$equipoB->getJugadores()[rand(0,3)])
		){

		}
	}
?>

<?php
	function jugar(){
		$goles_A=0;
		$goles_B=0;
		while($goles_A <= 5 && $goles_B <= 5){
			$atacante_A = $equipoA->getJugadores()[rand(0,3)];
			$defensa_A = $equipoA->getJugadores()[rand(0,3)];
			$arquero_A = $equipoA->getJugadores()[0];

			$atacante_B = $equipoB->getJugadores()[rand(0,3)];
			$defensa_B = $equipoB->getJugadores()[rand(0,3)];
			$arquero_B = $equipoB->getJugadores()[0];

			if($atacante_A->regatear($defensa_B)){
				
			}
		}
	}
?>
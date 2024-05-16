<?php
require_once 'ResponsableV.php';
require_once 'Pasajero.php';
require_once 'PasajeroVIP.php';
require_once 'PasajeroNecesidadesEspeciales.php';
require_once 'Viaje.php';

// Crear responsable del viaje
$responsable = new ResponsableV(1234, "ABC123", "Juan", "Perez");

// Crear viaje
$viaje = new Viaje("V001", "Destino", 50, $responsable, 1000);

// Menú de opciones
while (true) {
    echo "\nMenú:\n";
    echo "1. Modificar información del viaje\n";
    echo "2. Agregar pasajero\n";
    echo "3. Modificar información de un pasajero\n";
    echo "4. Mostrar información del viaje\n";
    echo "5. Vender pasaje\n";
    echo "6. Salir\n";
    echo "Seleccione una opción: ";

    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case '1':
            echo "Ingrese el nuevo código del viaje: ";
            $codigo = trim(fgets(STDIN));
            $viaje->setCodigo($codigo);

            echo "Ingrese el nuevo destino del viaje: ";
            $destino = trim(fgets(STDIN));
            $viaje->setDestino($destino);

            echo "Ingrese la nueva cantidad máxima de pasajeros del viaje: ";
            $maxPasajeros = intval(trim(fgets(STDIN)));
            $viaje->setMaxPasajeros($maxPasajeros);

            echo "Ingrese el nuevo costo del viaje: ";
            $costoViaje = floatval(trim(fgets(STDIN)));
            $viaje->setCostoViaje($costoViaje);
            break;

        case '2':
            echo "Ingrese el tipo de pasajero (1: Estándar, 2: VIP, 3: Necesidades Especiales): ";
            $tipoPasajero = trim(fgets(STDIN));

            echo "Ingrese el nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            
            echo "Ingrese el apellido del pasajero: ";
            $apellido = trim(fgets(STDIN));
            
            echo "Ingrese el número de documento del pasajero: ";
            $documento = trim(fgets(STDIN));
            
            echo "Ingrese el teléfono del pasajero: ";
            $telefono = trim(fgets(STDIN));
            
            echo "Ingrese el número de asiento del pasajero: ";
            $numeroAsiento = trim(fgets(STDIN));
            
            echo "Ingrese el número de ticket del pasajero: ";
            $numeroTicket = trim(fgets(STDIN));

            if ($tipoPasajero == '1') {
                $pasajero = new Pasajero($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket);
            } elseif ($tipoPasajero == '2') {
                echo "Ingrese el número de viajero frecuente: ";
                $numViajeroFrecuente = trim(fgets(STDIN));

                echo "Ingrese la cantidad de millas: ";
                $millas = trim(fgets(STDIN));

                $pasajero = new PasajeroVIP($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket, $numViajeroFrecuente, $millas);
            } elseif ($tipoPasajero == '3') {
                echo "Requiere silla de ruedas (si/no): ";
                $sillaRuedas = trim(fgets(STDIN)) == 'si';

                echo "Requiere asistencia (si/no): ";
                $asistencia = trim(fgets(STDIN)) == 'si';

                echo "Requiere comida especial (si/no): ";
                $comidaEspecial = trim(fgets(STDIN)) == 'si';

                $pasajero = new PasajeroNecesidadesEspeciales($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket, $sillaRuedas, $asistencia, $comidaEspecial);
            } else {
                echo "Tipo de pasajero inválido.\n";
                break;
            }

            $viaje->agregarPasajero($pasajero);
            break;

        case '3':
            echo "Ingrese el documento del pasajero a modificar: ";
            $documento = trim(fgets(STDIN));
            
            echo "Ingrese el nuevo nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            
            echo "Ingrese el nuevo apellido del pasajero: ";
            $apellido = trim(fgets(STDIN));
            
            echo "Ingrese el nuevo teléfono del pasajero: ";
            $telefono = trim(fgets(STDIN));

            $viaje->modificarPasajero($documento, $nombre, $apellido, $telefono);
            break;

        case '4':
            echo $viaje;
            break;

        case '5':
            echo "Ingrese el tipo de pasajero (1: Estándar, 2: VIP, 3: Necesidades Especiales): ";
            $tipoPasajero = trim(fgets(STDIN));

            echo "Ingrese el nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            
            echo "Ingrese el apellido del pasajero: ";
            $apellido = trim(fgets(STDIN));
            
            echo "Ingrese el número de documento del pasajero: ";
            $documento = trim(fgets(STDIN));
            
            echo "Ingrese el teléfono del pasajero: ";
            $telefono = trim(fgets(STDIN));
            
            echo "Ingrese el número de asiento del pasajero: ";
            $numeroAsiento = trim(fgets(STDIN));
            
            echo "Ingrese el número de ticket del pasajero: ";
            $numeroTicket = trim(fgets(STDIN));

            if ($tipoPasajero == '1') {
                $pasajero = new Pasajero($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket);
            } elseif ($tipoPasajero == '2') {
                echo "Ingrese el número de viajero frecuente: ";
                $numViajeroFrecuente = trim(fgets(STDIN));

                echo "Ingrese la cantidad de millas: ";
                $millas = trim(fgets(STDIN));

                $pasajero = new PasajeroVIP($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket, $numViajeroFrecuente, $millas);
            } elseif ($tipoPasajero == '3') {
                echo "Requiere silla de ruedas (si/no): ";
                $sillaRuedas = trim(fgets(STDIN)) == 'si';

                echo "Requiere asistencia (si/no): ";
                $asistencia = trim(fgets(STDIN)) == 'si';

                echo "Requiere comida especial (si/no): ";
                $comidaEspecial = trim(fgets(STDIN)) == 'si';

                $pasajero = new PasajeroNecesidadesEspeciales($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket, $sillaRuedas, $asistencia, $comidaEspecial);
            } else {
                echo "Tipo de pasajero inválido.\n";
                break;
            }

            $costoFinal = $viaje->venderPasaje($pasajero);
            if ($costoFinal !== null) {
                echo "Pasaje vendido. Costo final: $costoFinal\n";
            } else {
                echo "No hay pasajes disponibles.\n";
            }
            break;

        case '6':
            echo "Saliendo...\n";
            exit();

        default:
            echo "Opción inválida. Por favor, seleccione nuevamente.\n";
            break;
    }
}
?>

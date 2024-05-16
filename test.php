<?php
require_once 'Pasajero.php';
require_once 'PasajeroVIP.php';
require_once 'PasajeroNecesidadesEspeciales.php';
require_once 'Viaje.php';

$viaje = new Viaje(1000, 3);

$pasajero1 = new Pasajero("Juan pedro", 1, "TICKET123");
$pasajeroVIP = new PasajeroVIP("Pedro juan", 2, "TICKET124", "VIP123", 500);
$pasajeroEspecial = new PasajeroNecesidadesEspeciales("Pedro pedro", 3, "TICKET125", true, true, true);

$costoPasajero1 = $viaje->venderPasaje($pasajero1);
$costoPasajeroVIP = $viaje->venderPasaje($pasajeroVIP);
$costoPasajeroEspecial = $viaje->venderPasaje($pasajeroEspecial);

echo "Costo pasajero 1: $costoPasajero1\n";
echo "Costo pasajero VIP: $costoPasajeroVIP\n";
echo "Costo pasajero con necesidades especiales: $costoPasajeroEspecial\n";

echo "Hay pasajes disponibles: " . ($viaje->hayPasajesDisponible() ? 'Sí' : 'No') . "\n";
?>

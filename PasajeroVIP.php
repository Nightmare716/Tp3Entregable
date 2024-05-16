<?php
require_once 'Pasajero.php';

class PasajeroVIP extends Pasajero {
    private $numeroViajeroFrecuente;
    private $millas;

    public function __construct($nombre, $numeroAsiento, $numeroTicket, $numeroViajeroFrecuente, $millas) {
        parent::__construct($nombre, $numeroAsiento, $numeroTicket);
        $this->numeroViajeroFrecuente = $numeroViajeroFrecuente;
        $this->millas = $millas;
    }

    public function darPorcentajeIncremento() {
        $incremento = 35;
        if ($this->millas > 300) {
            $incremento += 30;
        }
        return $incremento;
    }
}
?>

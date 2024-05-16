<?php
require_once 'Pasajero.php';

class PasajeroVIP extends Pasajero {
    private $numViajeroFrecuente;
    private $millas;

    public function __construct($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket, $numViajeroFrecuente, $millas) {
        parent::__construct($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket);
        $this->numViajeroFrecuente = $numViajeroFrecuente;
        $this->millas = $millas;
    }

    public function getNumViajeroFrecuente() {
        return $this->numViajeroFrecuente;
    }

    public function setNumViajeroFrecuente($numViajeroFrecuente) {
        $this->numViajeroFrecuente = $numViajeroFrecuente;
    }

    public function getMillas() {
        return $this->millas;
    }

    public function setMillas($millas) {
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

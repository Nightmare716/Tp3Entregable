<?php
class Viaje {
    private $costoViaje;
    private $capacidadMaxima;
    private $pasajeros;
    private $costosAbonados;

    public function __construct($costoViaje, $capacidadMaxima) {
        $this->costoViaje = $costoViaje;
        $this->capacidadMaxima = $capacidadMaxima;
        $this->pasajeros = [];
        $this->costosAbonados = 0;
    }

    public function hayPasajesDisponible() {
        return count($this->pasajeros) < $this->capacidadMaxima;
    }

    public function venderPasaje($objPasajero) {
        if ($this->hayPasajesDisponible()) {
            $this->pasajeros[] = $objPasajero;
            $porcentajeIncremento = $objPasajero->darPorcentajeIncremento();
            $costoFinal = $this->costoViaje * (1 + $porcentajeIncremento / 100);
            $this->costosAbonados += $costoFinal;
            return $costoFinal;
        } else {
            return null;
        }
    }
}
?>

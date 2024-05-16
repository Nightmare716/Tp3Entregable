<?php
class Pasajero {
    protected $nombre;
    protected $numeroAsiento;
    protected $numeroTicket;

    public function __construct($nombre, $numeroAsiento, $numeroTicket) {
        $this->nombre = $nombre;
        $this->numeroAsiento = $numeroAsiento;
        $this->numeroTicket = $numeroTicket;
    }

    public function darPorcentajeIncremento() {
        return 10;  
    }
}
?>
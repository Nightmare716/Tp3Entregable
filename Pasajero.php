<?php

class Pasajero {
    private $nombre;
    private $apellido;
    private $documento;
    private $telefono;
    private $numeroAsiento;
    private $numeroTicket;

    public function __construct($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->telefono = $telefono;
        $this->numeroAsiento = $numeroAsiento;
        $this->numeroTicket = $numeroTicket;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getNumeroAsiento() {
        return $this->numeroAsiento;
    }

    public function setNumeroAsiento($numeroAsiento) {
        $this->numeroAsiento = $numeroAsiento;
    }

    public function getNumeroTicket() {
        return $this->numeroTicket;
    }

    public function setNumeroTicket($numeroTicket) {
        $this->numeroTicket = $numeroTicket;
    }

    public function darPorcentajeIncremento() {
        return 10;
    }
}
?>

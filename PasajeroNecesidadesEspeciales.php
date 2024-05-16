<?php
require_once 'Pasajero.php';

class PasajeroNecesidadesEspeciales extends Pasajero {
    private $sillaRuedas;
    private $asistencia;
    private $comidaEspecial;

    public function __construct($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket, $sillaRuedas, $asistencia, $comidaEspecial) {
        parent::__construct($nombre, $apellido, $documento, $telefono, $numeroAsiento, $numeroTicket);
        $this->sillaRuedas = $sillaRuedas;
        $this->asistencia = $asistencia;
        $this->comidaEspecial = $comidaEspecial;
    }

    public function getSillaRuedas() {
        return $this->sillaRuedas;
    }

    public function setSillaRuedas($sillaRuedas) {
        $this->sillaRuedas = $sillaRuedas;
    }

    public function getAsistencia() {
        return $this->asistencia;
    }

    public function setAsistencia($asistencia) {
        $this->asistencia = $asistencia;
    }

    public function getComidaEspecial() {
        return $this->comidaEspecial;
    }

    public function setComidaEspecial($comidaEspecial) {
        $this->comidaEspecial = $comidaEspecial;
    }

    public function darPorcentajeIncremento() {
        if ($this->sillaRuedas && $this->asistencia && $this->comidaEspecial) {
            return 30;
        } elseif ($this->sillaRuedas || $this->asistencia || $this->comidaEspecial) {
            return 15;
        }
        return 10;
    }
}
?>

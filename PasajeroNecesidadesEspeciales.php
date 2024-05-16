<?php
require_once 'Pasajero.php';

class PasajeroNecesidadesEspeciales extends Pasajero {
    private $sillaRuedas;
    private $asistencia;
    private $comidaEspecial;

    public function __construct($nombre, $numeroAsiento, $numeroTicket, $sillaRuedas, $asistencia, $comidaEspecial) {
        parent::__construct($nombre, $numeroAsiento, $numeroTicket);
        $this->sillaRuedas = $sillaRuedas;
        $this->asistencia = $asistencia;
        $this->comidaEspecial = $comidaEspecial;
    }

    public function darPorcentajeIncremento() {
        $serviciosNecesarios = [$this->sillaRuedas, $this->asistencia, $this->comidaEspecial];
        if ($this->sillaRuedas && $this->asistencia && $this->comidaEspecial) {
            return 30;
        } elseif ($this->sillaRuedas || $this->asistencia || $this->comidaEspecial) {
            return 15;
        }
        return 10;
    }
}
?>

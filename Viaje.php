<?php

class Viaje {
    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $pasajeros;
    private $responsable;
    private $costoViaje;
    private $costosAbonados;

    public function __construct($codigo, $destino, $maxPasajeros, $responsable, $costoViaje) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxPasajeros = $maxPasajeros;
        $this->pasajeros = [];
        $this->responsable = $responsable;
        $this->costoViaje = $costoViaje;
        $this->costosAbonados = 0;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function getMaxPasajeros() {
        return $this->maxPasajeros;
    }

    public function setMaxPasajeros($maxPasajeros) {
        $this->maxPasajeros = $maxPasajeros;
    }

    public function getPasajeros() {
        return $this->pasajeros;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    public function getCostoViaje() {
        return $this->costoViaje;
    }

    public function getCostosAbonados() {
        return $this->costosAbonados;
    }

    public function hayPasajesDisponible() {
        return count($this->pasajeros) < $this->maxPasajeros;
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

    public function agregarPasajero($pasajero) {
        foreach ($this->pasajeros as $p) {
            if ($p->getDocumento() === $pasajero->getDocumento()) {
                echo "Error: El pasajero ya está cargado en este viaje.\n";
                return;
            }
        }
        if ($this->hayPasajesDisponible()) {
            $this->pasajeros[] = $pasajero;
            echo "Pasajero agregado al viaje.\n";
        } else {
            echo "Error: No hay espacio disponible para más pasajeros en este viaje.\n";
        }
    }

    public function modificarPasajero($documento, $nombre, $apellido, $telefono) {
        foreach ($this->pasajeros as $pasajero) {
            if ($pasajero->getDocumento() === $documento) {
                $pasajero->setNombre($nombre);
                $pasajero->setApellido($apellido);
                $pasajero->setTelefono($telefono);
                echo "Datos del pasajero actualizados.\n";
                return;
            }
        }
        echo "Error: No se encontró un pasajero con el documento especificado.\n";
    }

    public function __toString() {
        $str = "Código del Viaje: {$this->codigo}\n";
        $str .= "Destino: {$this->destino}\n";
        $str .= "Cantidad Máxima de Pasajeros: {$this->maxPasajeros}\n";
        $str .= "Costo del Viaje: {$this->costoViaje}\n";
        $str .= "Costos Abonados: {$this->costosAbonados}\n";
        $str .= "Responsable del Viaje: {$this->responsable->getNombre()} {$this->responsable->getApellido()} (Empleado #{$this->responsable->getNumEmpleado()}, Licencia #{$this->responsable->getNumLicencia()})\n";
        $str .= "Pasajeros:\n";
        foreach ($this->pasajeros as $pasajero) {
            $str .= "  Nombre: {$pasajero->getNombre()}, Apellido: {$pasajero->getApellido()}, Documento: {$pasajero->getDocumento()}, Teléfono: {$pasajero->getTelefono()}, Asiento: {$pasajero->getNumeroAsiento()}, Ticket: {$pasajero->getNumeroTicket()}\n";
        }
        return $str;
    }
}
?>

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Src\Accion;

class ActionTest extends TestCase
{

    public function test_si_es_obligatorio_y_es_docente_devolver()
    {
        $esObligatorio = 'si';
        $esDocente = TRUE;
        $accion = new Accion();
        $valorEsperado = 'actualizar';

        $this->assertEquals($valorEsperado, $accion->obtenerAccion($esObligatorio, $esDocente));
    }

    public function test_si_no_es_obligatorio_y_es_docente_devolver()
    {
        $esObligatorio = 'no';
        $esDocente = TRUE;
        $accion = new Accion();
        $valorEsperado = 'matricular';

        $this->assertEquals($valorEsperado, $accion->obtenerAccion($esObligatorio, $esDocente));
    }

    public function test_si_es_externo_y_estado_registro_por_confirmar()
    {
        $esExterno = TRUE;
        $estadoRegistro = 'porConfirmar';
        $accion = new Accion();
        $valorEsperado = 'actualizar';

        $this->assertEquals($valorEsperado, $accion->obtenerAccion(null, null, $estadoRegistro, $esExterno));
    }

    public function test_si_es_externo_y_destinatario_externo()
    {
        $esExterno = TRUE;
        $tipoPersonaDestino = 'externo';
        $accion = new Accion();
        $valorEsperado = 'registrar';

        $this->assertEquals($valorEsperado, $accion->obtenerAccion(null, null, null, $esExterno, $tipoPersonaDestino));
    }

    public function test_si_es_externo_y_estado_registro_vigente()
    {
        $esExterno = TRUE;
        $estadoRegistro = 'vigente';
        $accion = new Accion();
        $valorEsperado = 'matricular';

        $this->assertEquals($valorEsperado, $accion->obtenerAccion(null, null, $estadoRegistro, $esExterno));
    }
}

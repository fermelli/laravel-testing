<?php

namespace App\Src;

class Accion
{
    public function obtenerAccion($esObligatorio, $esDocente, $estadoRegistro = null, $esExterno = null, $tipoPersonaDestino = null)
    {
        if ($esDocente) {
            if ($esObligatorio == 'si') {
                return 'actualizar';
            }

            if ($esObligatorio == 'no') {
                return 'matricular';
            }
        }

        if ($esExterno) {
            if ($estadoRegistro == 'porConfirmar') {
                return 'actualizar';
            }

            if ($estadoRegistro == 'vigente') {
                return 'matricular';
            }

            if ($tipoPersonaDestino == 'externo') {
                return 'registrar';
            }
        }
    }
}

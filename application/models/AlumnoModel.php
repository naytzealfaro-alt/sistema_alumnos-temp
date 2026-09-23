<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
    protected $table = 'alumnos';

    protected $primaryKey = 'id_alumn';

    protected $allowedFields = [
        'nombre_al',
        'apaterno_al',
        'amaterno_al',
        'matricula_al',
        'tel_al',
        'dom_al',
        'estatus_al'
    ];
}
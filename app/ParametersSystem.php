<?php

namespace Massaggi;

use Illuminate\Database\Eloquent\Model;

class ParametersSystem extends Model
{
    
    
    protected $table = 'parameters_system';

    protected $primarykey = 'id';

    protected $fillable = [
        'code', 'name', 'value', 'description', 'status'
    ];
}

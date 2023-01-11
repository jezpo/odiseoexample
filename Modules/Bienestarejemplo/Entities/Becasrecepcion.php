<?php

namespace Modules\Bienestarejemplo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Becasrecepcion extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Bienestarejemplo\Database\factories\BecasrecepcionFactory::new();
    }
}

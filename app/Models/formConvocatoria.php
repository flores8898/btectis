<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formConvocatoria extends Model
{
    use HasFactory;
    public $fillable = ['titulo', 'fecha', 'codigo', 'semestre'];
}

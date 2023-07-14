<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table = 'registros';
    protected $fillable = ['criterio', 'turno', 'documentoid', 'partetabla', 'tipo', 'n1', 'n2', 'mes'];

    public function updateColumn($column, $value)
    {
        $this->query()->update([$column => $value]);
    }
}

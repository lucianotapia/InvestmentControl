<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Operacao;
use Carbon\Carbon;

class Operacao extends Model
{
    use HasFactory;

    protected $guarded = ['idOperacao'];
    
    protected $table = "operacoes";
    protected $primaryKey = 'idOperacao';

    public function getValorAttribute($value) {
        return number_format($value, 2, ',', '');        
    }
    
    public function setValorAttribute($value) {
        $this->attributes['valor'] = str_replace(',', '.', $value);
    }

    public function setDataAttribute($value) {
        $this->attributes['data'] = Carbon::createFromFormat('d/m/Y', $value);
    }

    public function getDataAttribute($value) {
        if($value)
            return Carbon::CreateFromFormat('Y-m-d', $value)->format('d/m/Y');
    }

    public static function operacao_tipo() {
        return [
            'Compra',
            'Vanda'
        ];
    }
}

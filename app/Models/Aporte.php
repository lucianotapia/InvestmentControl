<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Carteira;
use Carbon\Carbon;

class Aporte extends Model
{
    use HasFactory;

    protected $guarded = ['idAporte'];
    protected $primaryKey = 'idAporte';

    public static function carteiras() {
        $carteiras = Carteira::where('excluido', 0)->get();
        return $carteiras;        
    }

    public static function contas() {
        $contas = Conta::where('excluido', 0)->get();
        return $contas;
    }

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
}
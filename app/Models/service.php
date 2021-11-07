<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\car;

class service extends Model
{
    use HasFactory;

    protected $primaryKey = 'service_code';
    protected $keyType = 'string';
    protected $fillable = ['service_name', 'service_code', 'service_description'];

    public function cars(){
        return $this->hasMany(car::class, 'car_service', 'service_code');
    }
}

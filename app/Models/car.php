<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\service;

class car extends Model
{
    use HasFactory;

    protected $fillable = ['car_name', 'car_owner', 'car_description', 'car_plate', 'car_service'];

    public function service(){
        return $this->belongsTo(service::class, 'car_service', 'service_code');
    }
}

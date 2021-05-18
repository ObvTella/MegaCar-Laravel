<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';

    protected $primaryKey = 'id';

    protected $fillable = ['model_name', 'car_id', 'price', 'prod_year', 'used'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
    public function engines()
    {
        return $this->hasMany(Engine::class);
    }
}

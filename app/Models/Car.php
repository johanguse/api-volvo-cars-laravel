<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    use HasFactory;

    protected $fillable = ["modelId", "modelName", "bodyType", "modelType", "imageUrl", "year_released"];

    public function modelName()
    {
        return $this->hasMany(CarModel::class);
    }
    public function bodyType()
    {
        return $this->belongsTo(CarBodyType::class);
    }
}

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
        return $this->hasOne(BodyType::class);
    }
    public function bodyType()
    {
        return $this->hasMany(ModelType::class);
    }
}

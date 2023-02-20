<?php

namespace App\Models;

use App\Models\Types;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    protected $fillable = ['libelle'];
    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

}

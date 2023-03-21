<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_lugar','domicilio'];
    public $timestamps = false;
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}

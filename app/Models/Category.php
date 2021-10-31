<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];
    protected $guraded = ['id'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

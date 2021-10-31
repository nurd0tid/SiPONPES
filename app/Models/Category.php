<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = ['name', 'slug'];
    protected $guraded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

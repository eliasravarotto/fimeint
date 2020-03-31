<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasSlug;

	protected $fillable = ['titulo', 'descripcion', 'contenido', 'link_mp', 'lugar', 'categoria_id'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['titulo'])
            ->saveSlugsTo('slug');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'curso_tags');
    }

    public function foto()
    {
        return $this->hasOne('App\File', 'id', 'foto_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function files()
    {
        return $this->morphMany('App\File', 'notable');
    }
}

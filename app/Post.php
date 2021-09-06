<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;
    //utilizamos un paquete de terceros, para convertir
    //el titulo de un post en un slug en la ruta
    //el slug es basicamente una ruta formateada
    //para ser amigable al usuario y con el seo
    public function sluggable(){
        return [
            'slug' => [
                'source'=> 'title',
                'onUpdate' => true
            ]
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->body, 0, 140) ;
    }
}

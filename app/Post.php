<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates =  ['published_at']; // para que lo trate como una fecha y asi poder aplicaler formatos con la libreria carbon (https://carbon.nesbot.com/docs/)

    public function Category() // $post->category->name
    {
        return $this->bellongsTo(Category::class);
    }    
}

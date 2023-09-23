<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */

     // mass assignment, tujuannya agar field yang ditambahkan pada file migrations bisa digunakan untuk memanipulasi data/CRUD
    protected $fillable = [
        'image',
        'title',
        'content',
    ];


     /**
     * image
     *
     * @return Attribute
     */

    //  nama function, dalam hal ini image(), HARUS SESUAI dengan nama field/kolom pada phpmyadmin di tabel posts
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/posts/' . $image),
        );
    }
}

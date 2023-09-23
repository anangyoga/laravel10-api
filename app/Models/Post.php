<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

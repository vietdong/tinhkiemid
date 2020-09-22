<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table ='post';
    protected $fillable = ['title','slug','cate_id','author','content','image','display_time','active'];
}

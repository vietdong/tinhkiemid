<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SecretQuestion extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='secret_question';
    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];
}

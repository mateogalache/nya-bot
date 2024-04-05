<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Codes extends Model
{
    protected $fillable = ['user_id', 'code', 'title','description', 'keyword','type'];

    // Define la relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

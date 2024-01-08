<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserPreferences extends Model
{
    protected $fillable = ['language'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setLanguageAttribute($value)
    {
        $this->attributes['language'] = strtolower($value);
    }

    public function getLanguageAttribute($value)
    {
        return ucfirst($value);
    }
}


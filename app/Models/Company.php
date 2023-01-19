<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'logo', 'address'];

    public function getImagePathAttribute()
    {
        return asset('storage/'. $this->logo);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}

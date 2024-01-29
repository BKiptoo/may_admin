<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', // Add other fillable fields as needed
    ];

    // Add any additional model logic, relationships, or methods here
}

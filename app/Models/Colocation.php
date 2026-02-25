<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner_id',
        'status',
    ];

    // Relation avec le créateur (Owner)
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    // Relation avec les membres
    public function members()
    {
        return $this->belongsToMany(User::class, 'colocation_user', 'colocation_id', 'user_id')
                    ->withTimestamps();
    }
}
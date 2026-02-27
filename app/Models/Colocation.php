<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Expense;

class Colocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner_id',
        'status', 
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function members() {
        return $this->belongsToMany(User::class, 'colocation_user')
                    ->withTimestamps()
                    ->withPivot('role'); // role: owner/member
    }

    public function expenses() {
        return $this->hasMany(Expense::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description',
    ];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function comments()
    {
        return $this->hasMany(ProjectComment::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_projects')
                    ->withPivot('role', 'status')
                    ->withTimestamps();
    }
}

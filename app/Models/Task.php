<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    use HasFactory;
    
    protected $table = "tasks";

    protected $timestamp = true;

    protected $fillable = [
        "name",
    ];

    protected $hidden = [
        
    ];

    public static function scopeGet()
    {
        $tasks = DB::table('tasks')
                ->orderBy('created_at', 'desc')
                ->get();
        return $tasks;
    }
}

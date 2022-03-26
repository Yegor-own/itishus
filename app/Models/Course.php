<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    // public static function boot() {
    //     parent::boot();

    //     static::deleting(function($course) { // before delete() method call this
    //          $course->video()->delete();
    //          // do the rest of the cleanup...
    //     });
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'instructor_id', 'room', 'start_date', 'end_date'];

    public function activities():HasMany
    {
        return $this->hasMany(Activity::class);
    }

    public function instructors():BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}

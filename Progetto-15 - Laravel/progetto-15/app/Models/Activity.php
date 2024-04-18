<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','time','day','status','difficulty', 'goal', 'course_id'];

    public function courses():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}

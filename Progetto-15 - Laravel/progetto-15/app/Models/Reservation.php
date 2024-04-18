<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    public function activities():BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['activity_id', 'user_id', 'status'];
}

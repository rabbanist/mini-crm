<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'client_id',
        'deadline_at',
        'status',
    ];

    public function user() : belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function client() : belongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function casts() : array
    {
        return [
            'status' => ProjectStatus::class,
        ];
    }
}

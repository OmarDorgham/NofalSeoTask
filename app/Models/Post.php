<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $with = ['user', 'comments'];
    protected $fillable = ['title', 'content', 'image', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function getImageAttribute($value)
    {
        return env('APP_URL') . '/' . $value;
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = 'storage/uploads/' . Carbon::now()->format('Y') . '/' . $value;
    }

    public function getCreatedAtAttribute($value)
    {
        if (Carbon::parse($value)->format('Y-m-d') == Carbon::now()->format('Y-m-d')) {
            return 'Today at ' . Carbon::parse($value)->format('g:i A');
        } elseif (Carbon::parse($value)->format('Y-m-d') == Carbon::now()->subDay()->format('Y-m-d')) {
            return 'Yesterday at ' . Carbon::parse($value)->format('g:i A');
        } else {
            return Carbon::parse($value)->format('Y-m-d g:i A');
        }
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->comments()->delete();
        });

    }
}

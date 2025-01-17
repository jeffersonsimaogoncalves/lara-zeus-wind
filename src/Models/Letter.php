<?php

namespace LaraZeus\Wind\Models;

use Database\Factories\LetterFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $title
 */
class Letter extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'department_id', 'title', 'message', 'status', 'reply_message', 'reply_title',
    ];

    protected static function newFactory()
    {
        return LetterFactory::new();
    }

    public function department()
    {
        return $this->belongsTo(config('zeus-wind.models.department'));
    }

    public function getReplyTitleAttribute($value)
    {
        return $value ?? __('re') . ': ' . $this->title;
    }
}

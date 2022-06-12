<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * @class Post
 * @property int $id Идентификатор
 * @property boolean $published Опубликовано
 * @property string $slug Слаг
 * @property string $title Название
 * @property string $text Описание
 * @property string $annotation Аннотация
 */
class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "blog";

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        $slugFunc = function (Post $post) {
            if (!$post->slug) {
                $post->slug = Str::slug($post->title, "-");
            }
        };
        static::creating($slugFunc);
        static::updating($slugFunc);
    }
}
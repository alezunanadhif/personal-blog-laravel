<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Command\WhereamiCommand;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content'
    ];

    // public static function boot() {
    //     parent::boot();

    //     static::creating(function($post) {
    //         $post->slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $post->title);
    //     });
    // }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $slug = str_replace(' ', '-', strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', ' ', $post->title))));
            $post->slug = preg_replace('/-+/', '-', $slug); // menghilangkan tanda hubung yang berulang
        });
    }


    public function comments() {
        return $this->hasMany(comments::class);
    }

    public function scopeStatus($query, $bool) {
        return $query->where('active', $bool);
    }

    public function scopeSelectById($query, $id) {
        return $query->where('id', $id);
    }
}

<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Category
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description_short
 * @property string $description
 * @property string $image
 * @property boolean $image_show
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 * @property int|null $published
 * @property int|null $viewed
 * @property int|null $created_by
 * @property int|null $modified_by
 *
 * @package App
 */
class Article extends Model
{
    // Mass assigned
    protected $fillable = ['title', 'slug', 'description_short', 'description', 'image', 'image_show', 'meta_title', 'meta_description', 'meta_keyword', 'published', 'created_by', 'modified_by'];

    // Mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . '-' . Carbon::now()->format('dmyHi'), '-');
    }

    // Polymorphic relation with categories
    public function categories()
    {
        return $this->morphToMany('App\Category', 'categoryable');
    }

    public function scopeLastArticles($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}

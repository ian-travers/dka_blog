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
 * @property int|null $parent_id
 * @property int|null $published
 * @property int|null $created_by
 * @property int|null $modified_by
 *
 * @package App
 */
class Category extends Model
{
    /**
     * Mass assigning
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];

    // Mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . '-' . Carbon::now()->format('dmyHi'), '-');
    }

    /**
     * Get children categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}

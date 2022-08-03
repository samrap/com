<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    protected $casts = [
        'images' => 'json',
    ];

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['featured_image_set'];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($project) {
            $project->slug = Str::slug($project->name, '-');
        });
    }

    /**
     * Get the intro image URL set.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function featuredImageSet(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->vueImageSet('featured_image'),
        );
    }

    /**
     * Returns an array of 1x and 2x image URLs for the given 1x image name.
     *
     * @param string $name
     * @return \Illuminate\Support\Collection
     */
    protected function vueImageSet(string $name)
    {
        return collect(['_1x' => $name, '_2x' => "${name}_2x"])->map(function ($attribute) {
            return $this->getAttribute($attribute)
                ? Storage::url($this->getAttribute($attribute))
                : null;
        });
    }
}

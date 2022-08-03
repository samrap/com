<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Concerns\HasImages;
use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model implements Sortable
{
    use HasFactory, SortableTrait, HasImages;

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
    protected $appends = ['featured_image_resolutions'];

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
     * Get the featured image URL resolutions.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function featuredImageResolutions(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getImageResolutions('featured_image'),
        );
    }

    public function images()
    {
        return $this->hasMany(Image::class)->orderBy('sort_order', 'asc');
    }
}

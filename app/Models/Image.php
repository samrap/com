<?php

namespace App\Models;

use App\Models\Concerns\HasImages;
use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model implements Sortable
{
    use HasFactory, HasImages, SortableTrait;

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
        'sort_on_has_many' => true,
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['resolutions'];

    /**
     * Get the image URL resolutions.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function resolutions(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getImageResolutions('path'),
        );
    }
}

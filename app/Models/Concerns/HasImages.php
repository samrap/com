<?php

namespace App\Models\Concerns;

use Illuminate\Support\Facades\Storage;

trait HasImages
{
    /**
     * Returns an array of 1x and 2x image URLs for the given 1x image name.
     *
     * @param string $name
     * @return \Illuminate\Support\Collection
     */
    protected function getImageResolutions(string $name)
    {
        return collect(['_1x' => $name, '_2x' => "${name}_2x"])->map(function ($attribute) {
            return $this->getAttribute($attribute)
                ? Storage::url($this->getAttribute($attribute))
                : null;
        });
    }
}

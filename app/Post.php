<?php

namespace App;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Events\ResourceChanged;

class Post extends Model implements HasMedia
{
    use HasMediaTrait, HasSlug;

    const COVER_COLLECTION = 'cover';

    protected $dispatchesEvents = [
        'saved' => ResourceChanged::class,
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate()
            ->slugsShouldBeNoLongerThan(20);
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection(self::COVER_COLLECTION)
            ->singleFile()
            ->registerMediaConversions(function(Media $media) {
                $this
                    ->addMediaConversion('thumb')
                    ->fit(Manipulations::FIT_CONTAIN, 640, 460)
                    ->withResponsiveImages()
                ;
            })
        ;
    }

    public function coverImageUrl(): ?string
    {
        return $this->getFirstMediaUrl(self::COVER_COLLECTION);
    }

    public function getThumbImg($attributes = [])
    {
        return self::getFirstMedia(self::COVER_COLLECTION)->img('thumb', $attributes);
    }
}

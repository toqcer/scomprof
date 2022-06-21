<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['galleryPhotos'];

    public function galleryPhotos()
    {
        return $this->hasMany(GalleryPhoto::class);
    }

    public function carousel()
    {
        return $this->hasOne(GalleryPhoto::class);
    }

    protected $casts = ['event_at' => 'datetime:Y-m-d'];
}

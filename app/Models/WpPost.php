<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpPost extends Model
{
    protected $table = 'wp_posts';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function scopePublished($query)
    {
        return $query->where('post_status', 'publish')->where('post_type', 'post');
    }

    public function author()
    {
        return $this->belongsTo(WpUser::class, 'post_author', 'ID');
    }

    // A simple method to get the featured image URL by doing a subquery on wp_postmeta
    public function getFeaturedImageUrlAttribute()
    {
        // 1. Get the _thumbnail_id from wp_postmeta for this post
        $thumbnailId = \DB::table('wp_postmeta')
            ->where('post_id', $this->ID)
            ->where('meta_key', '_thumbnail_id')
            ->value('meta_value');

        if (!$thumbnailId) {
            return asset('assets/media/blogs/2.png'); // Fallback
        }

        // 2. Get the _wp_attached_file from wp_postmeta for the thumbnail post
        $attachedFile = \DB::table('wp_postmeta')
            ->where('post_id', $thumbnailId)
            ->where('meta_key', '_wp_attached_file')
            ->value('meta_value');

        if ($attachedFile) {
            return url('/wp/wp-content/uploads/' . $attachedFile);
        }

        return asset('assets/media/blogs/2.png'); // Fallback
    }
}

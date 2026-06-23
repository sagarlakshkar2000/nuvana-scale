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

  // A simple method to get the featured image URL
  public function getFeaturedImageUrlAttribute()
  {
    // 1. Get the _thumbnail_id from wp_postmeta for this post
    $thumbnailId = \DB::table('wp_postmeta')
      ->where('post_id', $this->ID)
      ->where('meta_key', '_thumbnail_id')
      ->value('meta_value');

    if ($thumbnailId) {
      // 2. Get the attachment post's guid, which contains the full URL
      $attachmentUrl = \DB::table('wp_posts')
        ->where('ID', $thumbnailId)
        ->where('post_type', 'attachment')
        ->value('guid');

      if ($attachmentUrl) {
        return $attachmentUrl;
      }

      // Fallback to relative path logic if guid is empty (rare)
      $attachedFile = \DB::table('wp_postmeta')
        ->where('post_id', $thumbnailId)
        ->where('meta_key', '_wp_attached_file')
        ->value('meta_value');

      if ($attachedFile) {
        return url('/wp/wp-content/uploads/' . $attachedFile);
      }
    }

    // 3. Fallback: If no featured image is explicitly set, use the first image attached to this post
    $firstAttachmentUrl = \DB::table('wp_posts')
      ->where('post_parent', $this->ID)
      ->where('post_type', 'attachment')
      ->where('post_mime_type', 'like', 'image/%')
      ->orderBy('ID', 'asc')
      ->value('guid');

    if ($firstAttachmentUrl) {
      return $firstAttachmentUrl;
    }

    // 4. Fallback: Try to extract the first image embedded in the post content
    if (preg_match('/<img.+src=[\'"](?P<src>[^\'"]+)[\'"].*>/i', $this->post_content, $image)) {
        return $image['src'];
    }

    return null;
  }

  // Get tags dynamically for this post
  public function getTagsAttribute()
  {
    return \DB::table('wp_terms as t')
      ->join('wp_term_taxonomy as tt', 't.term_id', '=', 'tt.term_id')
      ->join('wp_term_relationships as tr', 'tt.term_taxonomy_id', '=', 'tr.term_taxonomy_id')
      ->where('tt.taxonomy', 'post_tag')
      ->where('tr.object_id', $this->ID)
      ->pluck('t.name');
  }
}

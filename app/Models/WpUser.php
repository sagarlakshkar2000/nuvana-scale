<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpUser extends Model
{
    protected $table = 'wp_users';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany(WpPost::class, 'post_author', 'ID');
    }
}

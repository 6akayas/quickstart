<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    public function sitemap()
    {
        return $this->belongsTo(Sitemap::class);
    }
}

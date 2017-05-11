<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sitemap extends Model
{
    public function nodes()
    {
        return $this->hasMany(Node::class);
    }
}

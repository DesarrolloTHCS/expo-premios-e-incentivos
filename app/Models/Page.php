<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", "color", "logo", "banner", "points","category1","category2","category3","sections","slug",
    ];
}

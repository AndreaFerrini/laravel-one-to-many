<?php

namespace App\Models\Admin;

use App\Models\Admin\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }


    protected $fillable = ["title", "content", "slug", "cover_image", "type_id"];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}

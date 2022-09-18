<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseArticle extends Model
{
    use HasFactory;
        // $fillable はホワイトリストとして利用することができる。
        // 指定したカラムに対してのみ、 create()やupdate() 、fill()などが可能
    protected $fillable = [
        'title',
        'body',
        'user_name',
    ];
}

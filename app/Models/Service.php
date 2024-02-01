<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'Service';

    protected $fillable = [
        'title',
        'description',
        'cost',
        'category_id',
        'user_id'
    ];

    public function displayCategory(){
        return $this->belongsTo(Category::class, 'category_id');

    }
    public function displayName(){
        return $this->belongsTo(User::class, 'user_id');

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'limit',
    ];

    protected $hidden = [
        // 'is_active',
        // 'limit'
    ];

    protected $casts = [
        
    ];

    public function branches()
    {
        return $this->belongsTo(Categories::class);
    }
}

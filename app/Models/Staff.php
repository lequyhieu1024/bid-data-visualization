<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'staffs';
    protected $fillable = [
        'user_id',
        'role_id',
    ];
    protected $casts = [
        'role_id' => 'array', // Tự động chuyển đổi giữa JSON và mảng
    ];
}

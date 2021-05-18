<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $primaryKey = 'id';

    protected $fillable = ['user_email', 'engine_id', 'price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

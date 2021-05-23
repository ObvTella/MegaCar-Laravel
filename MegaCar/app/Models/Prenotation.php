<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenotation extends Model
{
    use HasFactory;
    protected $table = 'prenotations';

    protected $primaryKey = 'id';

    protected $fillable = ['user_email', 'engine_id', 'date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

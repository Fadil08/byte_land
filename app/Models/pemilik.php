<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    use HasFactory;
    protected $table = 'pemilik';

    protected $guarded = [
        'id'
    ];
    public function tanah()
    {
        return $this->hasMany(Tanah::class);
    }
   
}

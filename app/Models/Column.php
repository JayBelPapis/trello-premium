<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    use HasFactory;
    protected $guarded = ['id_list'];

    protected $primaryKey = 'id_list';

    public function cards()
    {
        return $this->hasMany(Card::class, 'id_list');
    }
}

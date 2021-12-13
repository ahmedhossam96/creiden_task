<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;


    protected $fillable = ['id','name','price'];


    public function item ()
    {

        return $this->belongstomany(Item::class);
    }
}

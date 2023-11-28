<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\tempat;
use App\Models\category;

class Barang extends Model
{
    protected $fillable = ['nama', 'jumlah', 'tempat_id', 'category_id'];

    protected $guarded = [];

    public function tempat()
    {
        return $this->belongsTo(Tempat::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
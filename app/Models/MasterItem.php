<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function kategoriItems()
    {
        return $this->belongsToMany(KategoriItem::class, 'kategori_item_master_item');
    }
}

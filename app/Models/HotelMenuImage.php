<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HotelMenuImage extends Model
{
    protected $table = 'hotel_menu_images';

    protected $fillable = ['hotel_id', 'path'];

    public function hotel(): HasOne
    {
        return $this->hasOne(Hotel::class, 'id', 'hotel_id');
    }
}

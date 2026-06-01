<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hotel extends Authenticatable
{
    protected $fillable = ['name', 'city', 'contact_number', 'address', 'tag_line', 'description', 'status', 'logo'];

    protected $table = 'hotels';

    protected $primaryKey = 'id';

    public function images(): HasMany
    {
        return $this->hasMany(HotelMenuImage::class, 'hotel_id', 'id');

    }
}

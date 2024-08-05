<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kurikulum extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function peo(): HasMany
    {
        return $this->hasMany(Peo::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Owner extends Model
{
    use HasFactory;
    protected $fillable = ['owner_name'];
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'owner_product');
    }
}

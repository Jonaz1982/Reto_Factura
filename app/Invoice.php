<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'price', 'total']);
    }

    public function getSubtotalAttribute()
    {
        return $this->products->sum('pivot.total');
    }

    public function getVatAttribute()
    {
        $subtotal = $this->subtotal;

        return $subtotal * (.16);
    }
}

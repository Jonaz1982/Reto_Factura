<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['id', 'number', 'description', 'subtotal', 'vat', 'total'];

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

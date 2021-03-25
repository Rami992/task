<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attributes';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'quantity', 'price', 'attribute_id', 'value'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    // public function attributesValues()
    // {
    //     return $this->belongsToMany(AttributeValue::class);
    // }
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}

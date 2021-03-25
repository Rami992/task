<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'thumbnail', 'full'];

    /**
     * @var array
     */
    protected $casts = [
        'product_id'    =>  'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

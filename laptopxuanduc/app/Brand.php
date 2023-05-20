<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'brand_name', 'brand_image', 'brand_slug', 'brand_desc', 'brand_status', 'brand_created_at', 'brand_updated_at'
    ];
    protected $primaryKey = 'brand_id';
 	protected $table = 'tbl_brand_product';
}

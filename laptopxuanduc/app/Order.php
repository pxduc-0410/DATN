<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'customer_id', 'shipping_id', 'order_code', 'order_status', 'created_at', 'updated_at', 'order_total','order_nhap','order_ship','quatang','quatang_id'
    ];
    protected $primaryKey = 'order_id';
 	protected $table = 'tbl_order';

}

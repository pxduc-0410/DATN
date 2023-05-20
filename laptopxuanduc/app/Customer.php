<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'customer_name', 'customer_email', 'customer_password','customer_phone', 'customer_add', 'customer_dateofbirth', 'customer_status', 'admin_id', 'customer_vip'
    ];
    protected $primaryKey = 'customer_id';
 	protected $table = 'tbl_customers';
}

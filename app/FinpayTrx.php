<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinpayTrx extends Model
{
    protected $table = 't_finpay_trx';
    protected $primaryKey = 'id';
    protected $fillable = [
        'merchant_id', 'pay_date', 'invoice', 'amount', 'sof_id', 'sof_type', 'payment_code', 'ref_no', 'result_code',
        'result_desc', 'add_info1', 'add_info2', 'add_info3', 'add_info4', 'add_info5', 'payment_code', 'mer_signature', 
    ];
}

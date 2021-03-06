<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    //
    protected $table = 'receipt';

    protected $connection = 'mysql_restReceipt';

    protected $fillable = [
        'id',
        'company_id',
        'branch_id',
        'terminal_id',
        'original_receipt_id',
        'total_tax',
        'total_fee',
        'original_JSON_id'
    ];
}

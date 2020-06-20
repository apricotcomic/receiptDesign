<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'company';

    protected $connection = 'mysql_restReceipt';

    protected $fillable = [
        'id',
        'name',
        'address',
        'tel',
        'fax',
        'email',
        'stamp_image',
        'receipt_image'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_infomation extends Model
{
    //
    protected $table = 'company_infomation';

    protected $fillable = [
        'id',
        'name',
        'address',
        'tel',
        'fax',
        'email',
        'stamp_image',
        'receipt_image',
        'company_id'
    ];
}

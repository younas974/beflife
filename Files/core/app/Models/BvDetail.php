<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BvDetail extends Model
{
    protected $guarded = ['id'];
    protected $table = 'bv_details';


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

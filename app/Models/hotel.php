<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


class hotel extends Model
{
     use HasFactory;

    protected $table = 'hotel';

    public function getAll() {
    $titles = DB::table('hotel')->get();
    return $titles;
    }
 

}

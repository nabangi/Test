<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testaddress extends Model
{
  protected $fillable = [
     'home_address', 'office_address'
 ];
}

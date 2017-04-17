<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{

    public $fillable = ['name','date_claim','description','food','fuel','tender','receipt'];

}

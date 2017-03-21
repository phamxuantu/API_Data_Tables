<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "teams";
    protected $fillable  = ['posiion','name','ST','T','H','B','TG','TH','HS','DIEM'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class covidStatistic extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $fillable = [
        'Country', 'newConfirmed' , 'totalConfirmed' , 'newRecovered' , 'totalRecovered' ,  'newDeaths', 'totalDeaths' , 'date'
    ];}

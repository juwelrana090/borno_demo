<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    use HasFactory;

    protected $fillable = [
      'postid',
      'userip',
      'method',
      'host',
      'url',
      'referer',
      'country',
      'device',
      'operating',
      'browser',
      'browser_version',
      'time_zone',
      'asn',
      'asn_org',
      'date_at',
    ];
}

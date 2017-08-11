<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'groupname', 'groupdescription', 'groupstatus', 'created_by',
    ];

    public function createdby(){
        return $this->belongsTo('App\User');
    }
}
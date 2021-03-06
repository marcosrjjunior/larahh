<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class URL extends Model
{
    protected $table = 'urls';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'alt', 'count_alt', 'view_count'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];
}

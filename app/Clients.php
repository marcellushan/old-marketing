<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['first_name', 'last_name','department','email','phone','due_date','summary'];

    //'press_release','design','photography','social_media','paid_advertising','presentation','videography','event_aid'


}

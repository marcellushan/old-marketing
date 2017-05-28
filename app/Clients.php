<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['first_name', 'last_name','department','email','phone','due_date','summary'];

    //'press_release','design','photo','social_media','paid_advertising','presentation','videography','event_aid'

    public function pressRelease()
    {
        return $this->hasOne('App\PressReleases');
    }

    public function designPrinting()
    {
        return $this->hasOne('App\DesignPrinting');
    }

    public function photography()
    {
        return $this->hasOne('App\Photo');
    }
    public function videography()
    {
        return $this->hasOne('App\Video');
    }
    public function paidAdvertising()
    {
        return $this->hasOne('App\PaidAdvertising');
    }

    public function presentation()
    {
        return $this->hasOne('App\Presentation');
    }

    public function socialMedia()
    {
        return $this->hasOne('App\SocialMedia');
    }

    public function event()
    {
        return $this->hasOne('App\Event');
    }

    public function delete()
    {
        $this->pressRelease()->delete();
        $this->designPrintings()->delete();
        $this->photography()->delete();

        return parent::delete();
    }



}

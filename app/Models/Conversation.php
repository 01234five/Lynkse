<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
	protected $appends = ['contact_name', 'contact_image'];

	public function getContactImageAttribute()
    {
    	return '/users/' . $this->contact()->first(['image'])->image;
    }

    public function getContactNameAttribute()
    {
    	return $this->contact()->first(['name'])->name;
    }

    public function contact() 
    {	// Conversation N   1 User (contact)
    	return $this->belongsTo(User::class);
    }
}

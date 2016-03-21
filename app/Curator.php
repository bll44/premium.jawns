<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Curator extends User
{
    protected $table = 'users';

    public function setAsFeatured()
    {
    	$affectedRows = DB::update('update users set featured = 0 where featured = 1');
    	$affectedRows = DB::update('update users set featured = 1 where username = ?', [$this->username]);
    	return $affectedRows == 1 ? true : false;
    }
}

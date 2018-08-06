<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{	
	/*
	*/
	protected $fillable=['name','price'];
    public static function getAll(){
    	return Product::paginate(5);
    }
}

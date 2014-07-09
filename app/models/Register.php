<?php

class Register extends Eloquent {
    protected $guarded = array();
    protected $table = 'users'; // table name
    public $timestamps = 'false' ; // to disable default timestamp fields

    // model function to store form data to database
    public static function saveFormData($data)
    {
    	$user->password = Hash::make();
        DB::table('users')->insert($data);
    }
 
}

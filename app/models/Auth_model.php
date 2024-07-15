<?php

class Auth_model extends Model
{
    // Table
    protected static $table = 'admin';
    protected static $primaryKey = 'id_admin';


    // Fields
    public $username;
    public $password;
}
?>

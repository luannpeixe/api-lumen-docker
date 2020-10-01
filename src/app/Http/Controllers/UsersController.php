<?php

namespace App\Http\Controllers;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Method to count the number of users registered in the users table
     * 
     * @return amount
     */
    public function countUsers() {
        return User::count();
    }

    /**
     * Method to return a list with the username of all users in the users table
     * 
     * @return array
     */
    public function listUsers() {
        return User::select('username')->get();
    }
   
}

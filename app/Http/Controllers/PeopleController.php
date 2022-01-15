<?php


namespace App\Http\Controllers;
use GuzzleHttp\Client;

class PeopleController extends Controller
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

    //
    public function index()
    {
        $client = new Client();
    }
}

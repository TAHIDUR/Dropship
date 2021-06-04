<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function protected()
    {
        return view('frontend.protected');
    }

    // public function getData()
    // {
    //     return $response = Curl::to('https://jsonplaceholder.typicode.com/users/1')
    //                     ->get();

    // }

    // public function getData()
    // {
    //     $response = Curl::to('https://example.com/posts')

    //     ->withData(['title'=>'Test', 'body'=>'body goes here', 'userId'=>1])

    //     ->post();

    // dd($response);

    // }

    // public function getData()
    // {
    //     return $response = Curl::to('https://jsonplaceholder.typicode.com/users/1')
    //                     ->put();

    // }

    // public function getData()
    // {
    //     return $response = Curl::to('https://jsonplaceholder.typicode.com/users/1')
    //                     ->patch();

    // }

    // public function getData()
    // {
    //     return $response = Curl::to('https://jsonplaceholder.typicode.com/users/1')
    //                     ->delete();

    // }
}

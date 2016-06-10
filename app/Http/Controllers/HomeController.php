<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Book;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //(\DB::enableQueryLog());
        $books = Book::with('bookAuthor')->limit(100)->get();
        //var_dump(\DB::getQueryLog());
        return view('welcome')->with('books', $books);
    }
}

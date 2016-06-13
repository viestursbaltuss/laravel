<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Book;
use Input;
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

    public function index(Request $request)
    {

        return view('layout');
    }

    public function getList(Request $request)
    {

        //(\DB::enableQueryLog());
          //var_dump(\DB::getQueryLog());
        $genre = $request->input('genre');
        $query = Book::with('bookAuthor');
        if ($genre ) {
            $query->where('genre', $genre);

        }

        $books = $query
                    ->orderBy('id', 'asc')
                   ->paginate(15);
        return view('welcome')
        ->with('query',$query)
        ->with('genre', $genre)
        ->with('books', $books);
    }
}

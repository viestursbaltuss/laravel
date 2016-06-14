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

        // $title = $request
        // ->input('title');
        $term = $request
        ->input('term');
        // \DB::enableQueryLog();

        $query = Book::join('authors as a', 'a.id', '=', 'books.author_id');
        if ($term) { 
            $term = strtolower($term);
            $query->whereRaw('lower(title) like ?', ['%' . $term .'%'])
            ->orwhereRaw('lower(genre) like ?', ['%' . $term .'%'])
            ->orwhereRaw('lower(year1) like ?', ['%' . $term .'%'])
            ->orwhereRaw('lower(about) like ?', ['%' . $term .'%'])
            ->orwhereRaw('lower(a.name1) like ?', ['%' . $term .'%'])
            ->orwhereRaw('lower(a.lastname) like ?', ['%' . $term .'%'])
            ->orwhereRaw('lower(a.birth) like ?', ['%' . $term .'%']);
        }
        $books = $query
        ->orderBy('books.id', 'asc')
        ->paginate(15);
        // var_dump(\DB::getQueryLog());
        return view('welcome')
        ->with('query',$query)
        ->with('genre', $term)
        ->with('books', $books);
    }
}


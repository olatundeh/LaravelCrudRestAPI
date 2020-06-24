<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    //Logic to find book by name
    public function showByName(Request $request)
    {
        $client = new Client();
        $name = $request->get('name');
        //print_r($name); die();
        $response = $client->get('https://www.anapioficeandfire.com/api/books', ['query'=> ['name'=> $name]]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $result = ['status_code'=> $statusCode, 'data'=> $body];
        return response()->json($result);
    }

    //Logic to create a new book
    public function create(Request $request)
    {
        $books = new Book();
        //$books->url = $request->input('url');
        $books->name = $request->input('name');
        $books->isbn = $request->input('isbn');
        $books->authors = $request->input('authors');
        $books->number_of_pages = $request->input('number_of_pages');
        $books->publisher = $request->input('publisher');
        $books->country = $request->input('country');
        $books->release_date = $request->input('release_date');

        $books->save();
        return response()->json($books);
    }

    //Logic to return all books created
    public function show()
    {
        $books = Book::all();
        return response()->json($books);
    }

    //Logic to update book records using the id field
    public function updateById(Request $reqest, $id)
    {
        $books = Book::find($id);
        $books->name = $request->input('name');
        $books->isbn = $request->input('isbn');
        $books->authors = $request->input('authors');
        $books->number_of_pages = $request->input('number_of_pages');
        $books->publisher = $request->input('publisher');
        $books->country = $request->input('country');
        $books->release_date = $request->input('release_date');
        $books->save();
        return response()->json($books);
    }

    //Logic to delete a book by id 
    public function deleteById(Request $request, $id)
    {
        $books = Book::find($id);
        $books->delete();
        return response()->json($books);
    }

    //Logic to fetch or show a book by id 
    public function showById($id)
    {
        $books = Book::find($id);
        return response()->json($books);
    }
}

<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    
    public function index(){

        $books = Book::all(); //mostra tutti i libri

        //$books = Book::where('rating', '>=',6)->get(); // mostra solo i libri con un voto uguale o maggiore di 6

        //$books = Book::where('rating',10)->get(); // se l'operatore è omesso di defaul è quella di comparazione

        //$books = Book::where('rating','>=', 4)->orderBy('title')->limit(2)->get();//libri con voto maggiore o uguale a 4 ordinati per titolo in ordine alfabetico prendendo solo 2 elementi

        //$book = Book::find(3); //la find può essere usata solo con la primary key
        //dump($book);
        


        //per creare un nuovo libro
        /*
        $book = new Book();
        $book->author = 'Mario Rossi';
        $book->title = 'Italia oggi';
        $book->description = '';
        $book->rating = 6;
        $book->save();
        */

        //per aggiornare un libro esistente
        /*
        $book = Book::where('id',3)->first();
        $book->title = 'nuovo titolo';
        $book->save();
        */

        return view('home', ['books' => $books]);
    }

    public function contactUs(){
        return view('contatti');
    }
}

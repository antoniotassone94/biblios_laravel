<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Routing\Controller;

class FrontendController extends Controller{
    public function getHome(){
        $books = Book::orderBy("title","asc")->with("author")->get();
        return view("home",["books" => $books]);
    }

    public function getBookDetail($id){
        $book = Book::where("id","=",$id)->with("author")->first();
        return view("detailBook",["book" => $book]);
    }
}
?>

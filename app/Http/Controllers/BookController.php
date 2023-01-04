<?php
namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class BookController extends Controller{
    public function index(){
        $bookList = Book::orderBy("title","asc")->with("author")->get();
        return View::make("book/index")->with("bookList",$bookList);
    }

    public function create(){
        $book = new Book();
        $authorList = Author::all();
        return View::make("book/form")->with("book",$book)->with("authorList",$authorList);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),Book::$rules);
        if($validator->fails()){
            $authorList = Author::all();
            $title = $request["title"];
            $book = new Book();
            $book->title = $title;
            return redirect("book/create")->with("book",$book)->with("authorList",$authorList)->withErrors($validator)->withInput();
        }else{
            $book = new Book();
            $book->storage($request);
            return Redirect::to(route("book.index"));
        }
    }

    public function edit($id){
        $book = Book::find($id);
        $authorList = Author::all();
        return View::make("book/form")->with("book",$book)->with("authorList",$authorList);
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),Book::$rules);
        if($validator->fails()){
            $book = new Book();
            $book->title = $request->title;
            $book->author_id = $request->author_id;
            $authorList = Author::all();
            //return redirect("book/edit")->with("book",$book)->with("authorList",$authorList)->withErrors($validator)->withInput();
            return View::make("book/form")->with("book",$book)->with("authorList",$authorList)->with("errorsValidation",$validator->failed());
        }else{
            $book = Book::find($id);
            $book->title = $request->title;
            $book->author_id = $request->author_id;
            $book->save();
            return Redirect::to(route("book.index"));
        }
    }

    public function destroy($id){
        Book::destroy($id);
        return Redirect::to(route("book.index"));
    }
}
?>

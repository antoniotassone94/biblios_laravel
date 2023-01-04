<?php
namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AuthorController extends Controller{
    public function index(){
        $authorList = Author::orderBy("firstname","asc")->orderBy("lastname","asc")->get();
        return View::make("author/index")->with("authorList",$authorList);
    }

    public function create(){
        $author = new Author();
        return View::make("author/form")->with("author",$author);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),Author::$rules);
        if($validator->fails()){
            $firstname = $request["firstname"];
            $lastname = $request["lastname"];
            $author = new Author();
            $author->firstname = $firstname;
            $author->lastname = $lastname;
            return redirect("author/create")->with("author",$author)->withErrors($validator)->withInput();
        }else{
            $author = new Author();
            $author->storage($request);
            return Redirect::to(route("author.index"));
        }
    }

    public function edit($id){
        $author = Author::find($id);
        return View::make("author/form")->with("author",$author);
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),Author::$rules);
        if($validator->fails()){
            $author = new Author();
            $author->firstname = $request->firstname;
            $author->lastname = $request->lastname;
            //return redirect("author/edit")->with("author",$author)->withErrors($validator)->withInput();
            return View::make("author/form")->with("author",$author)->with("errorsValidation",$validator->failed());
        }else{
            $author = Author::find($id);
            $author->firstname = $request->firstname;
            $author->lastname = $request->lastname;
            $author->save();
            return Redirect::to(route("author.index"));
        }
    }

    public function destroy($id){
        Author::destroy($id);
        return Redirect::to(route("author.index"));
    }
}
?>

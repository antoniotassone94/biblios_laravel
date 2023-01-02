<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Author extends Model{
    use HasFactory;

    protected $table = "authors";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = "integer";

    public static $rules = [
        "firstname" => "required|min:3|max:40",
        "lastname" => "required|min:3|max:40"
    ];

    public function books(){
        return $this->hasMany("App\Models\Book");
    }

    public function storage(Request $request){
        $author = new Author();
        $author->firstname = $request->firstname;
        $author->lastname = $request->lastname;
        $author->save();
    }
}

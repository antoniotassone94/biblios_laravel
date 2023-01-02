<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Book extends Model{
    use HasFactory;

    protected $table = "books";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = "integer";

    public static $rules = [
        "title" => "required|min:3|max:40",
        "author_id" => "required"
    ];

    public function author(){
        return $this->belongsTo("App\Models\Author");
    }

    public function users(){
        return $this->hasMany("App\Models\User");
    }

    public function storage(Request $request){
        $book = new Book();
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->save();
    }
}

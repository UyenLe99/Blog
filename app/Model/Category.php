<?php
namespace App\Model;
use Illuminate\Support\Facades\DB;

class Category
{
    private $table = 'category';
    public $category_id;
    public $category_name;

    public function get_all()
    {
        $array = DB::select("select * from $this->table");
        return $array;
    }

    public function insert()
    {
        DB::insert("insert into $this->table(category_name)value (?)",[
            $this->category_name
        ]);
    }
}

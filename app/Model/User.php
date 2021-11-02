<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

class User
{
    private $table = 'user';
    public $user_id;
    public $user_name;
    public $user_pass;
    public $user_mail;
    public $user_address;
    public $user_phone;
    public $type;

    public function get_all()
    {
        $array = DB::select("select * from $this->table");
        return $array;
    }

    public function insert()
    {
        DB::insert("insert into $this->table(user_name,user_pass,user_mail,user_address,user_phone,type) value (?,?,?,?,?,?)",[
            $this->user_name,
            $this->user_pass,
            $this->user_mail,
            $this->user_address,
            $this->user_phone,
            $this->type
        ]);
    }
}

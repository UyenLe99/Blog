<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

class Admin
{
    private $table = 'admin';
    public $admin_id;
    public $admin_name;
    public $admin_pass;
    public $admin_mail;
    public $admin_address;
    public $admin_phone;
    public $type;

    public function get_all()
    {
        $array = DB::select("select * from $this->table");
        return $array;
    }

    public function insert()
    {
        DB::insert("insert into $this->table(admin_name,admin_pass,admin_mail,admin_address,admin_phone,type) value (?,?,?,?,?,?)",[
            $this->admin_name,
            $this->admin_pass,
            $this->admin_mail,
            $this->admin_address,
            $this->admin_phone,
            $this->type
        ]);
    }
}

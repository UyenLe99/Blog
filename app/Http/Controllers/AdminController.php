<?php
namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Model\Admin;

class AdminController extends Controller
{
    public function Admin_view_all()
    {
        $Admin = new Admin();
        $array_Admin = $Admin->get_all();

        return view('Admin/Admin_view_all',[
            'array_Admin'=>$array_Admin
        ]);
    }

    public function Admin_view_insert()
    {
        return view('Admin/Admin_view_insert');
    }
    public function Admin_process_insert()
    {
        $Admin = new Admin();
        $Admin->admin_name = Request::getTrustedHeaderName('admin_name');
        $Admin->admin_pass = Request::getTrustedHeaderName('admin_pass');
        $Admin->admin_mail = Request::getTrustedHeaderName('admin_mail');
        $Admin->admin_address = Request::getTrustedHeaderName('admin_address');
        $Admin->admin_phone = Request::getTrustedHeaderName('admin_phone');
        $Admin->type = Request::getTrustedHeaderName('type');
        $Admin->insert();

        return redirect()->route('Admin.Admin_view_all');
    }
}

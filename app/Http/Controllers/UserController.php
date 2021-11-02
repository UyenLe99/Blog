<?php
namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Model\User;

class UserController extends Controller
{
    public function User_view_all()
    {
        $User = new User();
        $array_User = $User->get_all();

        return view('User/User_view_all',[
            'array_User'=>$array_User
        ]);
    }

    public function User_view_insert()
    {
        return view('User/User_view_insert');
    }
    public function User_process_insert()
    {
        $User = new User();
        $User->user_name = Request::getTrustedHeaderName('user_name');
        $User->user_pass = Request::getTrustedHeaderName('user_pass');
        $User->user_mail = Request::getTrustedHeaderName('user_mail');
        $User->user_address = Request::getTrustedHeaderName('user_address');
        $User->user_phone = Request::getTrustedHeaderName('user_phone');
        $User->type = Request::getTrustedHeaderName('type');
        $User->insert();

        return redirect()->route('User.User_view_all');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: zhoub
 * Date: 2015/10/5
 * Time: 11:48
 */
namespace App\Http\Controllers;

use Hash;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     *注册方法
     */
    public function register(Request $request){
        $username = $request->input("username");
        $password = $request->input("password");
        $retype_password = $request->input("retype_password");
        $email = $request->input("email");
        if($password == $retype_password) {
            $user = new User;
            $data = User::where("un_email", $email)->count();
            if($data == 0) {
            $user->firstOrCreate([
                'un_user' => $username,
                'un_pass' => Hash::make($password),
                'un_email' => $email
            ])->save();
                redirect('/');
            }else{
                return 2;
            }
        }else{
            return 1;
        }
        return $request->all();
    }
}
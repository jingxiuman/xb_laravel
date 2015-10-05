<?php
/**
 * Created by PhpStorm.
 * User: zhoub
 * Date: 2015/10/5
 * Time: 11:48
 */
namespace App\Http\Controllers;

use Hash;
use Crypt;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;

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
    /**
     *
     * 登陆方法
     */
    public function login(Request $request){
        $username = $request->input("username");
        $password = Hash::make($request->input("password"));
        $data = User::where(['un_user'=>$username]);
       // echo $data->count();
        $flag =0;
        if($data->count()){
            //echo $data->first()->un_pass;
            if (Hash::check($data->first()->un_pass, $password)) {
                // The passwords match...
                Cookie::make(md5("username"),Crypt::encrypt($username));
                redirect("/dashBord");
                $flag = 1;
            }else{
                $flag=2;
            }

        }else{

            $flag = 0;
        }
        return $flag;

    }
}
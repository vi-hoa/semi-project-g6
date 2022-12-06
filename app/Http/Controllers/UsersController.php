<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UsersController extends Controller
{
    public function getAllUsers(){
    $user=User::all();
    return view('ListUser',compact('user'));
    }
    public function index()

    {

        $users = User::all();
        // return view('admin.listCategory', ['categories' => $categories]);
        return view('admin.listUser', compact("users"));
    }
    public function getCreate()
    {
        return view('admin.createUser');
    }
    //Hàm store để thêm dữ liệu
    public function postCreate(Request $request)
    {
        $user = new User();
        $user ->username = $request->username;
        $user ->email = $request->email;
        $user ->password = $request->password;
        $user ->role = $request->role;
        $user->timestamps = false;
        $user ->save();
        return redirect()->route('admin.user.index');
    }
    public function getEditCate($user_id)
    {
        $data['cate'] = User::find($user_id);
        return view('admin.editUser', $data);
    }
    public function postEditCate(Request $request, $user_id)

    {
        $user = User::find($user_id);
        $user ->username = $request->username;
        $user ->email = $request->email;
        $user ->password = $request->password;
        $user ->role = $request->role;
        $user ->save();
        return redirect()->route('admin.user.index');
    }
    public function delete($id)
    {
        $category = User::find($id);
        $category->delete();
        return back();
    }
}

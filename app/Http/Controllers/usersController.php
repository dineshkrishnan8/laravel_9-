<?php

namespace App\Http\Controllers;
use blog\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Crypt;

use App\Models\users;
use Illuminate\Console\View\Components\Alert;

class usersController extends Controller
{
   
    public function front()
    {
        return view('users.front');
    } 
    public function index()
    {
        // return users::where('id','9')->get();
       $users=users::get();
        return view('users.reg',compact('users'));
    }
    public function save(Request $request)
    {
        // return $request;
        $validateData =  $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'gen'   => 'required',
                'password' => 'required',
                'date' => 'required'
            ]
        );

        $users = new users;
        $users->fname = $request->fname;
        $users->lname = $request->lname;
        $users->email = $request->email;
        $users->gen   = $request->gen;
        $users->password =Crypt::encrypt($request->password);
        $users->date = $request->date;
        $users->save();
        return "<script>alert('insert successfully')</script>".redirect('/login');
    }
    public Function edit($id)
    {
        $users=users::find($id);
        return view('users.edit',compact('users'));
    }
    public function update(Request $request)
    {
        $users= users::find($request->id);
        $users->fname = $request->fname;
        $users->lname = $request->lname;
        $users->email = $request->email;
        $users->gen   = $request->gen;
        $users->password =Crypt::encrypt($request->password);      
        $users->date = $request->date;
        $users->save();

        return "<script>alert('update successfully')</script>".redirect('/login');

    }
   public function delete($id)
   {
    $users = users::find($id);
    $users->delete();    
   
    return "<script>alert('delete successfully')</script>".redirect('/login');
}

   
}

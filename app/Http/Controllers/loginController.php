<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\decrypt;
use Illuminate\Support\Facades\Hash;
use Crypt;
use username;
use App\Models\users;
use Illuminate\Console\View\Components\Alert;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
class loginController extends Controller
{
    
   
    public function index()
    {
        return view("login.login");
        
    }
    public function check(Request $request)
    {
            $request->validate([
                'fname' => 'required',
                'password' => 'required',
            ]);
            $users=users::where('fname',$request->fname)->value('password');
            $din=decrypt($users);
            if($din == $request->password)
            {
                $request->session()->put('fname', $request->fname);
                return redirect()->intended('/data');
            }
                return back()->withErrors([
                                'password' => 'Wrong username or password',
                            ]);
                        }
            // $fname = $request->fname;
            // $password = $request->password;
           
            


            // working specfic data
        //   if(users::where('fname',$request->fname && decrypt("password"),$request->password)->get())
        //     {
        //         $request->session()->put('fname', $request->fname);
        //         return redirect()->intended('/data');
        //         }
        //         return back()->withErrors([
        //             'password' => 'Wrong username or password',
        //         ]);
           
            //   if(users::where($pass, $password)->get())
            //   {
            //     return "login";
            //   }
            //   else
            //   {
            //     return"not login";
            //   }
            // }
            // else
            // {
            //     return"no account";
            // }
        

            // $credentials = $request->only('email', 'password');
            // if (Auth::attempt($credentials)) {
            //     // Authentication passed
            //     return redirect('/');
            // } else {
            //     // Authentication failed
            //     return back()->withErrors(['email' => 'Invalid credentials']);
            // }

            
           
            
    
    public function data(Request $request)
    {
      
        if(session()->has('fname'))
        {     
        
        $fname= $request->session()->get('fname');
        $users= users::where('fname',$fname)->get();
        $request->session()->forget('fname');
        return "<script>alert('welcome $fname')</script>".view('login.view',compact('users'));
        }
        else
        {
            return "<script>alert('login again')</script>".redirect('/login');
        }
    }
    public function sample()
    {
        // $din1=users::where('fname','dinesh')->get();
        // $din2=
        $fname='santhosh';
        $password="din123";
       
       if(users::where('fname',$fname)->where(users::where('password',$password))->get())
       {
        return "success";
       }else
       return "pass error";
    }
       

    
       
}

        
    

        //     $user = users::where('fname' , $request->fname)::where('password',$request->password)->get();
            
        //     // if (Auth::attempt(['fname' => $request->fname, 'password' => $request->password])) {
        //         // $request->session()->regenerate();
        //         // return redirect()->intended('/');
        //         return "login success";
        //     }
    
        //     return back()->withErrors([
        //         'password' => 'Wrong fname or password',
        //     ]);
        // }
    
    // {
    //     $this->validate($request, [
    //         $this->username() => 'required', 'password' => 'required',
    //     ]);
    
    // }
    // $credentials = $request->getCredentials();

    // if(!Auth::validate($credentials)):
    //     return redirect()->to('login')
    //         ->withErrors(trans('auth.failed'));
    // endif;

    // $user = Auth::getProvider()->retrieveByCredentials($credentials);

    // Auth::login($user);
    
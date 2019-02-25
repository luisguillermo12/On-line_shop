<?php

namespace Massaggi\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Massaggi\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Massaggi\User;
use Massaggi\Http\Controllers\Controller;
use Massaggi\Mail\ReCodeVerify;

class UserController extends Controller
{
   
  /*  public function index()
    {
       if ( Auth::user()->admin_app == 1 ){
          return redirect()->route('adminmassaggi24');
       }else{ 
        return view('home');
        }
    }*/

    public function profile ($id)
    {
                $user=User::where('id', $id)->first();
                        return view('auth.profile')
                               ->with('user',$user);
    }
    
     public function changepassword ($id)
    {
      
      $user=User::where('id', $id)->first();
                        return view('auth.change_password')
                               ->with('user',$user);

    }
    public function updatepassword(Request $request ,$id)
    {
         $user = User::FindOrFail($id);
         $user->password = bcrypt($request->get('password'));
         $user->save();
        alert()->success('contraseña actualizada', 'Successfully');
                      return redirect()->route('UserProfile', $id);
    }
    public function edituser($id)
    {
         $user=User::where('id', $id)->first();
         return view('auth.edit_user')
         ->with('user',$user);
    }
     public  function update(Request $request, $id)
     {
          
         $user = User::where('id', $id)->first();
         $user->name = $request->get('name') ;
         $user->email = $request->get('email') ;
         $user->cellphone = $request->get('cellphone') ;
       //  $user->password = bcrypt($request->get('password')) ;       
         $user->save();
        
        alert()->success('datos actualizados', 'Successfully');
        return redirect()->route('UserProfile',$id );

      }  
      
      public function desactivate($id)
     {

         $user = User::FindOrFail($id);
         $user->status = 0;
         $result = $user->save();

         alert()->success('Disabled user', 'Successfully');
                    return redirect()->route('UserProfile', $id);
    }
    public function activate ($id){ 

         $user = User::FindOrFail($id);
         $user->status = 1;
         $result = $user->save();

         alert()->success('User Activate', 'Successfully');
                    return redirect()->route('UserProfile', $id);
    }
    public function re_code_verify ($id){
     
             $user = User::where('id', $id)->first();
            Mail::to($user->email)->send(new ReCodeVerify($user));
            alert()->success('codigo renviado', 'verifique su correo electronico');
            return redirect()->back();

    }
    public function verify_code($code){

         $user = User::where('confirmation_code', $code)->first();
         if (!$user){ return redirect('/');}
         $user->confirmed = 1;
         $user->save(); 
                alert()->success('Correo confirmado correctamente', 'Successfully');
               return view('auth.login');
    } 



}

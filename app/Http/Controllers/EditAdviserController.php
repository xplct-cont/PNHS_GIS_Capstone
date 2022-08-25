<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Rules\MatchOldPassword;
use Flash;
use Response;

class EditAdviserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        $user = User::all()->sortBy('usertype');
        return view('addadvisers.index', compact('user'));
      
   }

   public function create()
   {

     
       return view('addadvisers.create');
     
  }

   public function register(Request $request) {
    $validator = Validator::make($request->all(), [
        'advisory' => 'required',
        'name' => 'required',
        'username' => 'required',
        'usertype' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'contact_no' => 'required',
        'password' => 'required|confirmed',

    ]);

    $user = User::create([
        'advisory' => $request->advisory,
        'name' => $request->name,
        'username' => $request->username,  
        'usertype' => $request->usertype,
        'email' => $request->email,
        'address' => $request->address,
        'contact_no' => $request->contact_no
,       'password' => Hash::make($request['password']),
     
    ]);

    $user->save();
    return redirect()->back()->with('status', 'Adviser Added Successfully!');

   }

   public function show($id)
    {
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('Advisers not found');

            return redirect(route('users.index'));
        }

        return view('addadvisers.show')->with('user', $user);
    }



    public function edit($id){
        $user = User::find($id);
        return view('addadvisers.edit', compact('user'));
    }


    public function update(Request $request, $id){

        $user = User::find($id);
        $user->usertype = $request->input('usertype');
        $user->username = $request->input('username');
        $user->advisory = $request->input('advisory');
     
       
        if($request->hasFile('avatar')){
  
          $destination = 'images/avatars/'.$user->avatar;
        //   if(File::exists($destination)){
        //      File::delete($destination);
        //   }
          $file = $request->file('avatar');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'. $extention;
          $file->move('images/avatars/', $filename);
          $user->avatar = $filename;
        
        }
  
        $user->update();
        return redirect()->back()->with('status', 'Adviser Updated Successfully!');
      
     }
      


   public function destroy($id){
    $user = User::find($id);
    $destination = 'images/avatars/'.$user->avatar;
     if(File::exists($destination)){
         File::delete($destination);
     }
    $user->delete();
    return redirect()->back()->with('status', 'Adviser Removed Successfully!');
}
}

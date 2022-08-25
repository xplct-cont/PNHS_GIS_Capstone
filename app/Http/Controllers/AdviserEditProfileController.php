<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;
use App\Models\User;

class AdviserEditProfileController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Show Edit Profile    
           return view('adviser.editprofile', array('user'=>Auth::user()));
           $user = User::all();
        
   }


   public function update_avatar(Request $request){
           
         if($request->hasFile('avatar')){
             $avatar = $request->file('avatar');
             $filename = time() . '.' . $avatar->getClientOriginalExtension();
             Image::make($avatar)->resize(300, 300)->save(public_path('/images/avatars/' . $filename));

             $user = Auth::user();
             $user->avatar = $filename;
             $user->save();

         }
         return view('adviser.editprofile', array('user'=>Auth::user()));

   
   
   
        }

        public function edit($id){
            $user = User::find($id);
            return view('adviser.editprofilename', compact('user'));
        }



        public function update(Request $request, $id){
            $user = User::find($id);
            $user->name = $request->input('name');
            $user->advisory = $request->input('advisory');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->contact_no = $request->input('contact_no');
            // $user->password = Hash::make($request->password);
        
    
            
            $user->update();
            return redirect('advisereditprofile.php');
          
         }


}
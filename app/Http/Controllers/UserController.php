<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use Mockery\Exception;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function showSignup(){
        $data=[];
        $data['users']=User::all()->sortByDesc("id");

                return view('signup',$data);

 }


    public function showSignupA(){
        $data=[];
        $data['users']=User::all()->sortByDesc("id");
        if(\Auth::check()){
            return view('signupshow',$data);
        }
        else{
            return redirect('login');
        }
    }


    public function signup(SignupRequest $request){

       try{
           $user=new User();
           $user->first_name=$request->first_name;
           $user->last_name=$request->last_name;
           $user->email=$request->email;
           $user->mobile_no=$request->mobile_no;
           $user->password=$request->password;


//           $file = $request->file('image');;
//
//
//           $filename = $file->getClientOriginalName();
//           $path = public_path('uploads/' . $filename);
//
//          var_dump($file->move($path, $filename));


//           $uploadObject=$request->file('image');
//           $filename=$uploadObject->getFilename().str_random(10);
//           $file_ext=$uploadObject->getClientOriginalExtension();
//
//           $pho=$uploadObject->move(public_path(),$filename. '.'.$file_ext);





//              $request->file('image')->store('public/upload');
//
//               $file_name = $request->file('image')->hashName();

//           $file = $request->file('image');
//           // Get the Image Name with the File Extension ( e.g .jpg / .png )
//           $fileName = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
//           // Set the Filepath
//           $path = 'uploads/'.$fileName;
//           // Move the file to the upload Folder
//           $file_c = $file->move($path, $fileName);

           $uploadObject=$request->file('image');
           $filename=$uploadObject->getFilename().str_random(10);
           $file_ext=$uploadObject->getClientOriginalExtension();

           if ($uploadObject->move(public_path(),$filename. '.'.$file_ext)){
               $photo_file=$filename. '.' .$file_ext;

           }else{
               return $uploadObject->getErrorMessage();


           }


               $user->photo= $photo_file;



                 $user->save();


           $request->session()->flash('success','Signup Successfully done');

       }catch (\Exception $e){
           $request->session()->flash('error','Signup not Successfully');

       }




    return redirect()->back();
    }


    public function signupDelete(Request $request){
        $user = User::find($request->id);

        $user->delete();
        return redirect()->back();
    }

    public function signupEdit(Request $request){

        $data['users']=User::find($request->id);


        return view('edit_signup')->with($data);
    }
   public function signupUpdate(SignupRequest $request){

       try{
           $users = User::find($request->id);

           $users->first_name = $request->input('first_name');
           $users->last_name = $request->input('last_name');
           $users->email = $request->input('email');
           $users->mobile_no = $request->input('mobile_no');
           $users->password = $request->input('password');


//           $uploadObject=$request->file('image');
//           $filename=$uploadObject->getFilename().str_random(10);
//           $file_ext=$uploadObject->getClientOriginalExtension();
//           move(public_path(),$filename. '.'.$file_ext);
//           $file=$filename. '.' .$file_ext;

           $uploadObject=$request->file('image');
           $filename=$uploadObject->getFilename().str_random(10);
           $file_ext=$uploadObject->getClientOriginalExtension();

           if ($uploadObject->move(public_path(),$filename. '.'.$file_ext)){
               $photo_file=$filename. '.' .$file_ext;



           }else{
               return $uploadObject->getErrorMessage();


           }


           $users->photo= $photo_file;

           $users->update();
           $request->session()->flash('success','Data Update Successfully');

       }catch (Exception $e){
           $request->session()->flash('error','Data Update Failed');
       }

        return redirect()->back();


    }
    public  function getLogin(){
       if(\Auth::check()){
           return redirect('dashboard');
       }
       else{
           return view('login');
       }
    }
    public function processtLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($request->except('_token'))){
            return redirect('dashboard');
        }
        else{
            $request->session()->flash('error','Your Password Or Email is not valid!');
            return redirect()->back();
        }

    }
    public function processtLogout(Request $request){
        Auth::logout();
        return redirect('login');

    }
}

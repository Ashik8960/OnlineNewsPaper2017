<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Mockery\Exception;


class HomeController extends Controller
{
    //not found page



    public function showHome(){
        if(\Auth::check()){
            return view('welcome');
        }
        else{
            return redirect('login');
        }

    }
    public function showAbout(){

            return view('about');


    }
    public function showContact(Request $request){
        if ($request->has('submit')){

            $this->validate($request,[
                'name'=>'required|min:3|max:15',
                'email'=>'required|email',
                'mobile'=>'required|numeric',
                'message'=>'required|min:10|max:255',
            ]);


            //dd($request->all());
            $request->offsetUnset('_token');
            $request->offsetUnset('submit');
            $result=DB::table('contacts')->insert($request->all());

            if ($result){
                $request->session()->flash('success','Contact Message Successfully send');
            }else{
                $request->session()->flash('error','Contact Message not send');
            }


        }
        $data['submit']=DB::table('contacts')->get();
        if(\Auth::check()){
            return view('contact')->with($data);
        }else{
            return redirect('login');
        }


    }
    public function contactDelete(Request $request){

        $result=DB::table('contacts')->where('id',$request->id)->delete();
        if ($result){
            $request->session()->flash('success','Data Delete Successfully');
        }else{
            $request->session()->flash('error','Data not Delete');
        }

        return redirect()->back();
    }
    public function contactEdit(Request $request){
        $data['submit']=DB::table('contacts')->where('id',$request->id)->first();

        return view('edit_contact')->with($data);
    }

    public function contactUpdate(Request $request){


        $this->validate($request,[
            'name'=>'required|min:3|max:15',
            'email'=>'required|email',
            'mobile'=>'required|numeric',
            'message'=>'required|min:10|max:255',
        ]);

        $result=DB::table('contacts')->where('id',$request->id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
            'message'=> $request->message,

        ]);
        if($result){
            $request->session()->flash('success','Data Updata Successfully');
        }else{
            $request->session()->flash('error','Data Updata failed');
        }
        return redirect()->back();

    }


    public function showMail(){


        return view('mail');

    }
    public function postMail(Request $request){

    $this->validate($request,[
        'subject'=>'required',
        'email'=>'required|email',
        'message'=>'required|min:10'
    ]);

    $data=array(
        'subject'=>$request->subject,
        'email'=>$request->email,
        'bodyMessage'=>$request->message
    );

   $mail=Mail::send('send',$data,function($message) use ($data){
    //php artisan config:cache
    $message->to('theasiqkhan@gmail.com');
    $message->subject($data['subject']);

    $message->from($data['email']);


    });

        if($mail){
            $request->session()->flash('error','Mail Send failed');
        }else{
            $request->session()->flash('success','Mail send Successfully');

        }


            return Redirect()->back();


    }


    //blog

    public  function showBlog(){
        $data['blogs']=Blog::orderBy('id', 'desc')->paginate(12);
        if(\Auth::check()){
            return view('blog',$data);
        }else{
            return redirect('login');
        }

    }
    public  function showBlogData(){

        $data['blogs']=Blog::orderBy('id', 'desc')->paginate(9);
        $dat['last']=Blog::all()->last();


        return view('welcome')->with($data)->with($dat);
    }

    public  function processBlog(Request $request){

        $blog=new Blog();
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
        ]);
        try{
            $blog->title=$request->title;
            $blog->body=$request->body;


            $uploadObject=$request->file('image');
            $filename=$uploadObject->getFilename().str_random(10);
            $file_ext=$uploadObject->getClientOriginalExtension();

            if ($uploadObject->move(public_path(),$filename. '.'.$file_ext)){
                $photo_file=$filename. '.' .$file_ext;

            }else{
                return $uploadObject->getErrorMessage();


            }


            $blog->photo= $photo_file;



            $blog->save();

            $request->session()->flash('success','Blog Data Inserted');

        }catch (Exception $e){
            $request->session()->flash('error','Blog Data not Inserted');
        }

        return redirect()->back();

    }
    public function deleteBlog(Request $request){
        $blog=Blog::find($request->id);
        $result=$blog->delete();

        if ($result){
            $request->session()->flash('success','Data Delete Successfully');
        }else{
            $request->session()->flash('error','Data not Delete');
        }
        return redirect()->back();

    }
    public function editBlog(Request $request){
        $data['blog']=Blog::find($request->id);
        return view('blog_edit')->with($data);
    }

    public function updateBlog(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
        ]);

        try{
            $blog=Blog::find($request->id);
            $blog->title=$request->title;
            $blog->body=$request->body;


            $uploadObject=$request->file('image');
            $filename=$uploadObject->getFilename().str_random(10);
            $file_ext=$uploadObject->getClientOriginalExtension();

            if ($uploadObject->move(public_path(),$filename. '.'.$file_ext)){
                $photo_file=$filename. '.' .$file_ext;

            }else{
                return $uploadObject->getErrorMessage();


            }


            $blog->photo= $photo_file;



            $blog->update();

            $request->session()->flash('success','Blog Update Successfully');

        }catch (Exception $e){
            $request->session()->flash('error','Blog Data not Failed');
        }

        return redirect()->back();
    }
    public function adminBlogDetiles(Request $request){
        $data['aBlogD']=Blog::find($request->id);
        return view('adminpanel.aBlogD')->with($data);
    }
    public  function processBlogDetiles(Request $request){

        $data['bDetiles']=Blog::find($request->id);

        $da['latests']=Blog::orderBy('id','desc')->paginate(15);
        return view('blogDetiles')->with($data)->with($da);

    }

// public function lastData(Request $request){
//
//
//
//     return view('welcome',$data);
// }
}

<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Mockery\Exception;
use Laravel\Scout\Searchable;

class CategoryController extends Controller
{






    public function showCategory(Request $request){


            $national['categoryNational']=Category::orderBy('id','desc')->where('category', '=','national')->paginate(2);
            $politics['categoryPolitics']=Category::orderBy('id','desc')->where('category', '=','politics')->paginate(2);
            $sports['categorySports']=Category::orderBy('id','desc')->where('category', '=','sports')->paginate(2);
            $economics['categoryEconomics']=Category::orderBy('id','desc')->where('category', '=','economics')->paginate(2);
            $international['categoryInternational']=Category::orderBy('id','desc')->where('category', '=','international')->paginate(2);
            $entertainment['categoryEntertainment']=Category::orderBy('id','desc')->where('category', '=','entertainment')->paginate(2);
        $educations['categoryEducations']=Category::orderBy('id','desc')->where('category', '=','educations')->paginate(2);
        $features['categoryFeatures']=Category::orderBy('id','desc')->where('category', '=','features')->paginate(2);
        $editor['categoryEditor']=Category::orderBy('id','desc')->where('category', '=','editor')->paginate(2);
        $others['categoryOthers']=Category::orderBy('id','desc')->where('category', '=','others')->paginate(2);

        if(Auth::check()) {
            return view('category')->with($national)->with($politics)->with($sports)->with($economics)->with($international)->with($entertainment)->with($educations)->with($features)->with($editor)->with($others);
        }else{
            return redirect('login');
        }

    }
    public  function createCategory(Request $request){


        $this->validate($request,[
            'title'=>'required',
            'category'=>'required',
            'body'=>'required',
            'image'=>'required',
        ]);
        try {
            $category = new Category();
            $category->title = $request->title;
            $category->category = $request->category;
            $category->body = $request->body;


            $uploadObject = $request->file('image');
            $filename = $uploadObject->getFilename() . str_random(10);
            $file_ext = $uploadObject->getClientOriginalExtension();

            if ($uploadObject->move(public_path(), $filename . '.' . $file_ext)) {
                $photo_file = $filename . '.' . $file_ext;

            } else {
                return $uploadObject->getErrorMessage();


            }


            $category->photo=$photo_file;

            $category->save();
            $request->session()->flash('success','Data insert Successfully');
        }catch (Exception $exception){
            $request->session()->flash('error','Data insert Failed');
        }


        return redirect()->back();
    }
public function deleteCategory(Request $request){

    $user = Category::find($request->id);
    $result=$user->delete();

    if ($result){
        $request->session()->flash('success','Data Delete Successfully');
    }else{
        $request->session()->flash('error','Data not Delete');
    }
    return redirect()->back();


}
public function updateCategory(Request $request){
    $data['users']=Category::find($request->id);



    return view('adminpanel.category_edit')->with($data);
}
public function editCategory(Request $request){

    $this->validate($request,[
        'title'=>'required',
        'category'=>'required',
        'body'=>'required',
        'image'=>'required',
    ]);


    try {
        $category=Category::find($request->id);

        $category->title = $request->title;
        $category->category = $request->category;
        $category->body = $request->body;


        $uploadObject = $request->file('image');
        $filename = $uploadObject->getFilename() . str_random(10);
        $file_ext = $uploadObject->getClientOriginalExtension();

        if ($uploadObject->move(public_path(), $filename . '.' . $file_ext)) {
            $photo_file = $filename . '.' . $file_ext;

        } else {
            return $uploadObject->getErrorMessage();


        }


        $category->photo=$photo_file;

        $category->update();
        $request->session()->flash('success','Data update Successfully');
    }catch (Exception $exception){
        $request->session()->flash('error','Data update Failed');
    }


    return redirect()->back();


}
public function adminCategoryDetiles(Request $request){
    $data['aCategoryD']=Category::find($request->id);
    return view('adminpanel.aCategoryD')->with($data);
}


public function serchingShow(){

    return view('search');
}


//visitors pages

public function categoryDetiles(Request $request){

    $data['categoryDetiles']=Category::find($request->id);
    return view('pages.categoryDetiles')->with($data);
}

public function national(Request $request){
    $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','national')->paginate(9);
    $dat['last']=Category::all()->last();


    return view('pages/national')->with($data)->with($dat);


}
public function politics(){
    $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','politics')->paginate(9);



    return view('pages/politics')->with($data);

}
    public function sports(){
        $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','sports')->paginate(9);

         return view('pages/sports')->with($data);

    }
    public function economics(){
        $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','economics')->paginate(9);

        return view('pages/economics')->with($data);

    }


    public function international(){
        $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','international')->paginate(9);

        return view('pages/international')->with($data);

    }
    public function editors(){
        $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','editor')->paginate(9);

        return view('pages/editors')->with($data);

    }
    public function entertainment(){
        $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','entertainment')->paginate(9);

        return view('pages/entertainment')->with($data);

    }

    public function educations(){
        $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','educations')->paginate(9);

        return view('pages/educations')->with($data);

    }
    public function features(){
        $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','features')->paginate(9);

        return view('pages/features')->with($data);

    }
    public function others(){
        $data['blogs']=Category::orderBy('id', 'desc')->where('category','=','others')->paginate(9);

        return view('pages/others')->with($data);

    }



    //admin page
    public function commntest(){
        return view('adminpanel.category');
    }
    public function commntestB(){
        return view('adminpanel.blog');
    }
    public function commntestC(){

        $data['users']=User::all()->sortByDesc("id");



        return view('adminpanel.admin')->with($data);
    }

    public function commntestD(){
        if(\Auth::check()){
            return view('adminpanel.profile');
        }
        else{
            return redirect('login');
        }
    }
    public function commntestE(){
        if(\Auth::check()){
            return view('adminpanel.dashboard');
        }
        else{
            return redirect('login');
        }
    }

    public function commntestF(){
        if(\Auth::check()){
            return view('adminpanel.addadmin');
        }
        else{
            return redirect('login');
        }
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Model\Category;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $uril=$request->segment(1);
        $grobal=Category::orderBy('id','desc')->paginate(8);

        $headline=Category::orderBy('id','desc')->paginate(3);
        $nationalTops=Category::orderBy('id','desc')->where('category','=','national')->paginate(3);
        $internationalTops=Category::orderBy('id','desc')->where('category','=','international')->paginate(3);
        $politicsTops=Category::orderBy('id','desc')->where('category','=','politics')->paginate(3);
        $sportsTops=Category::orderBy('id','desc')->where('category','=','sports')->paginate(3);


        View::share('sportsTops',$sportsTops);
        View::share('politicsTops',$politicsTops);
        View::share('internationalTops',$internationalTops);
        View::share('nationalTops',$nationalTops);
        View::share('headline',$headline);
        View::share('grobal',$grobal);

        View::share('uril',$uril);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

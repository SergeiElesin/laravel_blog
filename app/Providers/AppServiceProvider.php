<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Session\CacheBasedSessionHandler;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar', function ($view){

            if (Cache::has('cats')){
                $cats = Cache::get('cats');
            } else {
                $cats = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
                Cache::put('cats', $cats, 30);
            }

            $view->with('popular_posts', Post::orderBy('views', 'desc')->limit(3)->get());

//            $view->with('cats', Category::withCount('posts')->orderBy('posts_count', 'desc')->get());
            $view->with('cats', $cats);
        });
    }
}

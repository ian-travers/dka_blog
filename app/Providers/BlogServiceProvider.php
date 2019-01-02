<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->topMenu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    // Top menu for users.
    public function topMenu()
    {
        View::composer('layouts.header', function ($view) {
            $view->with('categories', Category::where('parent_id', 0)->where('published', 1)->get());
        });
    }
}

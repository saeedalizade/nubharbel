<?php

namespace App\Providers;

use App\CategoryProduct;
use App\Post;
use App\Product;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot ()
    {

        view ()->composer ('layouts.layout', function ($view) {

                $data['news'] = Post::where('type','news')->orderBy('id', 'DESC')->limit(6)->get();
                $data['Product'] = Product::orderBy('id', 'DESC')->limit(6)->get();
                $data['ProductCategory'] = CategoryProduct::orderBy('id', 'DESC')->get();

            $view->with ('DataFooter', $data);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register ()
    {
        //
    }
}

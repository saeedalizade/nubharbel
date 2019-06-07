<?php
// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('صفحه اصلی', route('home'));
});

// Home > About
Breadcrumbs::register('product', function ($breadcrumbs,$ProductInfo) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('محصولات');
    $breadcrumbs->push($ProductInfo->title, route('product', $ProductInfo->id));
});

Breadcrumbs::register('productDetail', function ($breadcrumbs,$Product) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('محصولات');
    $breadcrumbs->push($Product->CategoryProduct->title, route('product', $Product->CategoryProduct->id));
    $breadcrumbs->push($Product->title, route('productDetail', $Product->id));
});


Breadcrumbs::register('news', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('اخبار', route('news'));
});


Breadcrumbs::register('article', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('بلاگ', route('article'));
});

Breadcrumbs::register('articleDetail', function ($breadcrumbs,$articleDetail) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('بلاگ', route('article'));
    $breadcrumbs->push('جزئیات', route('articleDetail',$articleDetail->id));
});

Breadcrumbs::register('newsDetail', function ($breadcrumbs,$newsDetail) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('اخبار', route('news'));
    $breadcrumbs->push('جزئیات', route('newsDetail',$newsDetail->id));
});


Breadcrumbs::register('login', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('ورود کاربران', route('login'));
});

Breadcrumbs::register('register', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('ثبت نام کاربران', route('register'));
});

Breadcrumbs::register('ProfileUser', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('پروفایل کاربر', route('ProfileUser'));
});
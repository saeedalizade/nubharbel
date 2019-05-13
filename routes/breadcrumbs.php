<?php
// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('صفحه اصلی', route('home'));
});

// Home > About
Breadcrumbs::register('ProductList', function ($breadcrumbs,$ProductInfo) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push($ProductInfo->title, route('ProductList', $ProductInfo->id));
});


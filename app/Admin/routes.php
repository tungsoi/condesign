<?php

use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resources([
        'projects'      =>  'ProjectsController',
        'general'      =>  'GeneralController',
    ]);
});

Route::group([
    'namespace'     => 'App\\Admin\\Controllers\\Furn',
    'middleware'    => 'web',
    'as'            => 'furn.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/about', 'HomeController@aboutus')->name('about');
    $router->get('/contact', 'HomeController@contact')->name('contact');
    $router->get('/blog', 'HomeController@blog')->name('blog');
    $router->get('/service', 'HomeController@service')->name('service');
    $router->get('/service/detail/{id}', 'HomeController@detailService')->name('service.detailService');
    $router->get('/projects', 'ProjectsController@index')->name('projects');
    $router->get('/projects/detail/{id}', 'ProjectsController@show')->name('projects.detail');
});

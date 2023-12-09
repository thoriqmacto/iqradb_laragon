<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;

/**
 * @var RouteCollection $routes
 */

// API Routes
$routes->group("api", ["namespace" => "App\Controllers"], function ($routes) {

    $routes->get("invalid-access", "AuthController::accessDenied");

    // Post
    $routes->post("register", "AuthController::register");

    // Post
    $routes->post("login", "AuthController::login");

    // Get
    $routes->get("profile", "AuthController::profile", ["filter" => "apiauth"]);

    // Get
    $routes->get("logout", "AuthController::logout", ["filter" => "apiauth"]);    

    // Tags resource
    $routes->resource('tags',['filter' => 'cors']);

    // Tags resource
    $routes->resource('loops',['filter' => 'cors']);
});

// Tags resource    
    // $routes->resource('tags');

/* $routes->get('/', 'Home::index');

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages',[Pages::class,'index']);

service('auth')->routes($routes);
$routes->get('(:segment)',[Pages::class,'view']); */
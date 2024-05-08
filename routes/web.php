<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [   
            'id'    => 1,
            'slug'  => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Ghusan Hidayat Nur',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae blanditiis assumenda, hic molestiae praesentium ea? Placeat voluptas, nihil magni ab facere iusto quis alias modi voluptatibus. Adipisci quod debitis sint.'
        ],
        [
            'id'    => 2,
            'slug'  => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, perferendis beatae? Ipsum perferendis odio exercitationem eligendi, debitis quisquam ipsa odit non delectus eveniet aut nihil quas numquam provident, ea sequi.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [   
            'id'    => 1,
            'slug'  => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Ghusan Hidayat Nur',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae blanditiis assumenda, hic molestiae praesentium ea? Placeat voluptas, nihil magni ab facere iusto quis alias modi voluptatibus. Adipisci quod debitis sint.'
        ],
        [
            'id'    => 2,
            'slug'  => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, perferendis beatae? Ipsum perferendis odio exercitationem eligendi, debitis quisquam ipsa odit non delectus eveniet aut nihil quas numquam provident, ea sequi.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'John Doe'], ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

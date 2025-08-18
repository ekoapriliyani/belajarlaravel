<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Eko Apriliyani',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum reprehenderit neque
            illum rem veritatis,
            consequuntur modi, inventore aliquam atque vel perferendis at. Beatae natus possimus, consequatur tempore
            labore voluptates harum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Mareko Sanjaya',
            'body' => 'manda jaus lorem ipsum to dor,
            consequuntur modi, inventore aliquam atque vel perferendis at. Beatae natus possimus, consequatur tempore
            labore voluptates harum.'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Eko Apriliyani',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum reprehenderit neque
            illum rem veritatis,
            consequuntur modi, inventore aliquam atque vel perferendis at. Beatae natus possimus, consequatur tempore
            labore voluptates harum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Mareko Sanjaya',
            'body' => 'manda jaus lorem ipsum to dor,
            consequuntur modi, inventore aliquam atque vel perferendis at. Beatae natus possimus, consequatur tempore
            labore voluptates harum.'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });
    if (!$post) abort(404);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

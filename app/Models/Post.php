<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}

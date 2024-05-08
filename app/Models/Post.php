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
        'author' => 'Ghusan Hidayat Nur',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae blanditiis assumenda, hic molestiae praesentium ea? Placeat voluptas, nihil magni ab facere iusto quis alias modi voluptatibus. Adipisci quod debitis sint.'
      ],
      [
        'id' => 2,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'John Doe',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, perferendis beatae? Ipsum perferendis odio exercitationem eligendi, debitis quisquam ipsa odit non delectus eveniet aut nihil quas numquam provident, ea sequi.'
      ]
    ];
  }

  public static function find($slug) : ?array
  {
    // return Arr::first(static::all(), function ($post) use ($slug) {
    //   return $post['slug'] === $slug;
    // });

    $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

    if(!$post) {
      abort(404);
    }

    return $post;
  }
}

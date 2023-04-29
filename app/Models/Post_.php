<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_ 
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Fahmi Arif',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, dolore! Iure dignissimos perspiciatis voluptatem debitis commodi? Nulla illo, molestiae, assumenda officia voluptatem est facere rem animi voluptatibus excepturi accusamus deserunt, debitis iure repellendus autem qui quasi cum? Eius consequatur nesciunt dicta illo, exercitationem aut reiciendis enim laboriosam, quaerat nulla voluptate dolorem vel dolores nihil soluta quas ex sequi labore esse ad, vitae veniam. Reprehenderit minima dolores perspiciatis. Nam blanditiis similique sapiente accusantium iste ullam? Aliquid debitis vel veniam expedita adipisci.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Rahmita Paramita',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, qui iure. Consequuntur maiores labore omnis quibusdam dolore modi sed deserunt atque! Eos quis, dolorum laudantium omnis enim nostrum est maxime quidem magnam placeat consectetur perferendis unde possimus, dicta ullam, rem atque architecto. Alias nihil sit, sunt saepe odit temporibus nisi.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

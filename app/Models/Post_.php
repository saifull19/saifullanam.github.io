<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Saiful Anam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nostrum reprehenderit saepe temporibus minus officiis enim pariatur. Autem eaque accusamus a iusto minus explicabo, mollitia nihil nobis dolorem blanditiis fugit atque laudantium recusandae consectetur vitae, officia quaerat amet excepturi quidem dolorum odio ipsa reiciendis? Minima suscipit dolorem deleniti veniam vitae voluptates quod numquam eligendi, aliquam illo eius officia aut voluptatum doloremque. Ratione, maxime! Deleniti accusamus atque fugit, enim, impedit pariatur ut perspiciatis consectetur sequi, rem numquam velit? Dolor, veritatis adipisci."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Khulaifi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusamus itaque non ratione, porro dolorem nemo commodi iusto atque suscipit praesentium accusantium maxime ipsam iste corrupti quaerat. Consectetur autem aliquid, blanditiis animi dolorum, deserunt doloribus cumque facere unde dolores, corporis odit maiores! Natus sint voluptas magni deleniti pariatur eligendi reiciendis cumque aliquid accusantium! Minus veritatis, velit ut officia, illo sit doloribus id doloremque tenetur cupiditate, perspiciatis deleniti nam. Temporibus, incidunt."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

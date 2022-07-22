<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts
{
    private static $blog_posts = [
        [
            'title' => 'FIRST',
            'slug'  => 'judul-tulisan-pertama',
            'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, mollitia quisquam sit molestias vero doloribus porro sapiente, possimus fugiat ab atque repellendus. Quae animi dignissimos a nisi! Ipsam deleniti quo natus possimus? Error voluptatum voluptas velit at perferendis reiciendis libero possimus tempora sed provident. Ducimus facilis optio fugit voluptas libero incidunt quos exercitationem sint animi, maxime labore quasi illo. Numquam, ea rerum? Quae in illo quaerat ut corrupti perferendis voluptates praesentium cum ullam, cumque incidunt deleniti nihil ratione distinctio adipisci animi velit necessitatibus ipsa delectus excepturi! Amet voluptatibus ullam inventore qui earum id odio ratione suscipit, aperiam maxime. Voluptatibus, nemo?'
        ],
        [
            'title' => 'SECOND',
            'slug'  => 'judul-tulisan-kedua',
            'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, mollitia quisquam sit molestias vero doloribus porro sapiente, possimus fugiat ab atque repellendus. Quae animi dignissimos a nisi! Ipsam deleniti quo natus possimus? Error voluptatum voluptas velit at perferendis reiciendis libero possimus tempora sed provident. Ducimus facilis optio fugit voluptas libero incidunt quos exercitationem sint animi, maxime labore quasi illo. Numquam, ea rerum? Quae in illo quaerat ut corrupti perferendis voluptates praesentium cum ullam, cumque incidunt deleniti nihil ratione distinctio adipisci animi velit necessitatibus ipsa delectus excepturi! Amet voluptatibus ullam inventore qui earum id odio ratione suscipit, aperiam maxime. Voluptatibus, nemo?'
        ],
        [
            'title' => 'THIRD',
            'slug'  => 'judul-tulisan-ketiga',
            'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, mollitia quisquam sit molestias vero doloribus porro sapiente, possimus fugiat ab atque repellendus. Quae animi dignissimos a nisi! Ipsam deleniti quo natus possimus? Error voluptatum voluptas velit at perferendis reiciendis libero possimus tempora sed provident. Ducimus facilis optio fugit voluptas libero incidunt quos exercitationem sint animi, maxime labore quasi illo. Numquam, ea rerum? Quae in illo quaerat ut corrupti perferendis voluptates praesentium cum ullam, cumque incidunt deleniti nihil ratione distinctio adipisci animi velit necessitatibus ipsa delectus excepturi! Amet voluptatibus ullam inventore qui earum id odio ratione suscipit, aperiam maxime. Voluptatibus, nemo?'
        ],
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

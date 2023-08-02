<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "pertama",
            "slug" => "slug-pertama",
            "penulis" => "imam",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, accusantium itaque optio amet voluptatibus saepe illo sequi tempore ipsa a consectetur, esse laboriosam, ipsam odit dolorem modi autem aspernatur. Cupiditate reiciendis ea, iste suscipit eius natus sit assumenda et qui! Atque in odio, voluptates explicabo, totam praesentium repellendus maxime odit, ut similique ex quis suscipit excepturi aut esse ducimus adipisci cupiditate. Aperiam ipsa aspernatur nihil natus quis minus quas iste nesciunt praesentium iusto! Incidunt minus porro eligendi cupiditate dolore nemo earum nihil repellendus iste ut ea non unde quos esse labore nesciunt, ab, distinctio quibusdam omnis sit, atque animi quidem facilis debitis! Repellendus illo dolorum expedita porro placeat reprehenderit laboriosam ut numquam blanditiis eaque. Ipsa ipsam facilis suscipit iste possimus quasi a illo dolores magnam quaerat similique distinctio enim, ex molestiae ducimus voluptate voluptas provident odio! Fugit facilis voluptate nam sed odit nisi excepturi quidem a eum. Necessitatibus dolor minima iste rem deleniti cumque aliquid at eligendi asperiores ullam! Eius enim aperiam ipsum soluta placeat perspiciatis error veniam harum id delectus, vitae tempora et vel recusandae culpa corporis? Soluta iure in voluptas fugit eligendi neque, iste qui. Commodi cupiditate possimus tenetur ea sint excepturi asperiores nam obcaecati eligendi, delectus enim?"
        ],
        [
            "title" => "kedua",
            "slug" => "slug-kedua",
            "penulis" => "ASHARI",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, accusantium itaque optio amet voluptatibus saepe illo sequi tempore ipsa a consectetur, esse laboriosam, ipsam odit dolorem modi autem aspernatur. Cupiditate reiciendis ea, iste suscipit eius natus sit assumenda et qui! Atque in odio, voluptates explicabo, totam praesentium repellendus maxime odit, ut similique ex quis suscipit excepturi aut esse ducimus adipisci cupiditate. Aperiam ipsa aspernatur nihil natus quis minus quas iste nesciunt praesentium iusto! Incidunt minus porro eligendi cupiditate dolore nemo earum nihil repellendus iste ut ea non unde quos esse labore nesciunt, ab, distinctio quibusdam omnis sit, atque animi quidem facilis debitis! Repellendus illo dolorum expedita porro placeat reprehenderit laboriosam ut numquam blanditiis eaque. Ipsa ipsam facilis suscipit iste possimus quasi a illo dolores magnam quaerat similique distinctio enim, ex molestiae ducimus voluptate voluptas provident odio! Fugit facilis voluptate nam sed odit nisi excepturi quidem a eum. Necessitatibus dolor minima iste rem deleniti cumque aliquid at eligendi asperiores ullam! Eius enim aperiam ipsum soluta placeat perspiciatis error veniam harum id delectus, vitae tempora et vel recusandae culpa corporis? Soluta iure in voluptas fugit eligendi neque, iste qui. Commodi cupiditate possimus tenetur ea sint excepturi asperiores nam obcaecati eligendi, delectus enim?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();


        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }


}

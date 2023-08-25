<?php

namespace App\Models;

class Post {
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Luthfi",
            "body" => "In est deserunt nostrud non velit consectetur sit reprehenderit consequat labore pariatur et labore Lorem. Esse magna commodo in excepteur non occaecat. Reprehenderit adipisicing excepteur adipisicing pariatur exercitation laboris ipsum est cillum. Labore qui irure eu minim. Commodo reprehenderit magna labore ea cillum qui id adipisicing ipsum. Mollit ad nisi officia non ad esse."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ibra Rizqy",
            "body" => "Excepteur commodo ipsum culpa ex amet est veniam. Enim commodo enim sint irure mollit sint voluptate esse duis sunt cupidatat adipisicing est culpa. Aliqua incididunt commodo consectetur anim exercitation ea velit tempor. Anim duis qui aute ad id. In irure nulla laboris qui aliquip amet consequat enim dolor est anim elit ullamco enim."
        ]
    ];

    public static function all(){
        // return self::$blog_posts;
        return collect(self::$blog_posts); // merubah array menjadi collection
    }

    public static function find($slug){
        $posts = static::all();
        /*$post = [];
        foreach($posts as $p){
            if($p["slug"] === $slug){
                $post = $p;
            }
        }*/
        return $posts->firstWhere('slug', $slug); // menggunakan method dari laravel
    }
}
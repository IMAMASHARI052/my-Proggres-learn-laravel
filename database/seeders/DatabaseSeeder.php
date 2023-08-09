<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Imam Ashari',
        //     'email' => 'imam@gmailc.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Idham Ansyari',
        //     'email' => 'idham@gmailc.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(3)->create();


        // Category::create([
        //     'name' => 'WebDev',
        //     'slug' => 'web-dev'


        // ]);

        // Category::create([
        //     'name' => 'Back End Dev',
        //     'slug' => 'back-end-dev'


        // ]);

        Post::factory(8)->create();
        // Post::create([
        //     'title' => 'Learning Laravel',
        //     'slug' => 'learning-laravel',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium earum id, nobis asperiores voluptas odio, fugiat facilis ea laboriosam, quae saepe commodi dignissimos veniam. Provident, odio cum iste voluptatum ipsam laborum perspiciatis fuga labore repellendus minus consequuntur ab dolorum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium earum id, nobis asperiores voluptas odio, fugiat facilis ea laboriosam, quae saepe commodi dignissimos veniam. Provident, odio cum iste voluptatum ipsam laborum perspiciatis fuga labore repellendus minus consequuntur ab dolorum, modi doloribus nihil officiis, architecto omnis rem nam deleniti accusamus. Vitae minima ad iste, facilis provident accusantium deleniti vero optio quia incidunt laborum id aperiam quisquam deserunt quam omnis cum atque officia commodi, blanditiis magnam temporibus quibusdam! Incidunt suscipit deleniti amet voluptatum blanditiis corrupti, aperiam natus sapiente exercitationem tempore enim corporis explicabo eum beatae inventore quisquam quae quod ullam non nulla?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);


        // Post::create([
        //     'title' => 'Learning PHP',
        //     'slug' => 'learning-php',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium earum id, nobis asperiores voluptas odio, fugiat facilis ea laboriosam, quae saepe commodi dignissimos veniam. Provident, odio cum iste voluptatum ipsam laborum perspiciatis fuga labore repellendus minus consequuntur ab dolorum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium earum id, nobis asperiores voluptas odio, fugiat facilis ea laboriosam, quae saepe commodi dignissimos veniam. Provident, odio cum iste voluptatum ipsam laborum perspiciatis fuga labore repellendus minus consequuntur ab dolorum, modi doloribus nihil officiis, architecto omnis rem nam deleniti accusamus. Vitae minima ad iste, facilis provident accusantium deleniti vero optio quia incidunt laborum id aperiam quisquam deserunt quam omnis cum atque officia commodi, blanditiis magnam temporibus quibusdam! Incidunt suscipit deleniti amet voluptatum blanditiis corrupti, aperiam natus sapiente exercitationem tempore enim corporis explicabo eum beatae inventore quisquam quae quod ullam non nulla?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);


        // Post::create([
        //     'title' => 'Learning React',
        //     'slug' => 'learning-React',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium earum id, nobis asperiores voluptas odio, fugiat facilis ea laboriosam, quae saepe commodi dignissimos veniam. Provident, odio cum iste voluptatum ipsam laborum perspiciatis fuga labore repellendus minus consequuntur ab dolorum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium earum id, nobis asperiores voluptas odio, fugiat facilis ea laboriosam, quae saepe commodi dignissimos veniam. Provident, odio cum iste voluptatum ipsam laborum perspiciatis fuga labore repellendus minus consequuntur ab dolorum, modi doloribus nihil officiis, architecto omnis rem nam deleniti accusamus. Vitae minima ad iste, facilis provident accusantium deleniti vero optio quia incidunt laborum id aperiam quisquam deserunt quam omnis cum atque officia commodi, blanditiis magnam temporibus quibusdam! Incidunt suscipit deleniti amet voluptatum blanditiis corrupti, aperiam natus sapiente exercitationem tempore enim corporis explicabo eum beatae inventore quisquam quae quod ullam non nulla?',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);


        // Post::create([
        //     'title' => 'Learning React.js',
        //     'slug' => 'learning-React-js',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium earum id, nobis asperiores voluptas odio, fugiat facilis ea laboriosam, quae saepe commodi dignissimos veniam. Provident, odio cum iste voluptatum ipsam laborum perspiciatis fuga labore repellendus minus consequuntur ab dolorum',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium earum id, nobis asperiores voluptas odio, fugiat facilis ea laboriosam, quae saepe commodi dignissimos veniam. Provident, odio cum iste voluptatum ipsam laborum perspiciatis fuga labore repellendus minus consequuntur ab dolorum, modi doloribus nihil officiis, architecto omnis rem nam deleniti accusamus. Vitae minima ad iste, facilis provident accusantium deleniti vero optio quia incidunt laborum id aperiam quisquam deserunt quam omnis cum atque officia commodi, blanditiis magnam temporibus quibusdam! Incidunt suscipit deleniti amet voluptatum blanditiis corrupti, aperiam natus sapiente exercitationem tempore enim corporis explicabo eum beatae inventore quisquam quae quod ullam non nulla?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}

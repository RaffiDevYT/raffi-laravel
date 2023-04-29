<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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

        User::create([
            'username' => 'raffidev',
            'email' => 'raffi@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        // User::create([
        //     'name' => 'Dodddy Ferdiansyah',
        //     'email' => 'doddy@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Mantap',
            'slug' => 'mantap'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam natus assumenda unde explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam natus assumenda unde explicabo modi id obcaecati officiis nisi sint, impedit, quis veniam earum exercitationem quasi mollitia tempore ad aperiam? Asperiores itaque velit culpa totam quam error ad sint sunt porro deserunt. Voluptate molestias fugit ipsum, beatae tempore unde quaerat facere optio delectus corrupti. Fuga magni, explicabo enim at deleniti, animi voluptas nesciunt, delectus cum neque hic? Sapiente placeat enim dolorem sequi, maiores minus at. Modi minima odit dolores accusamus amet rerum sequi dolorum hic? Culpa fugit modi deleniti dolorum. Nostrum sint molestias quae cumque magnam accusamus odit corporis, eum ea.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam natus assumenda unde explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam natus assumenda unde explicabo modi id obcaecati officiis nisi sint, impedit, quis veniam earum exercitationem quasi mollitia tempore ad aperiam? Asperiores itaque velit culpa totam quam error ad sint sunt porro deserunt. Voluptate molestias fugit ipsum, beatae tempore unde quaerat facere optio delectus corrupti. Fuga magni, explicabo enim at deleniti, animi voluptas nesciunt, delectus cum neque hic? Sapiente placeat enim dolorem sequi, maiores minus at. Modi minima odit dolores accusamus amet rerum sequi dolorum hic? Culpa fugit modi deleniti dolorum. Nostrum sint molestias quae cumque magnam accusamus odit corporis, eum ea.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam natus assumenda unde explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam natus assumenda unde explicabo modi id obcaecati officiis nisi sint, impedit, quis veniam earum exercitationem quasi mollitia tempore ad aperiam? Asperiores itaque velit culpa totam quam error ad sint sunt porro deserunt. Voluptate molestias fugit ipsum, beatae tempore unde quaerat facere optio delectus corrupti. Fuga magni, explicabo enim at deleniti, animi voluptas nesciunt, delectus cum neque hic? Sapiente placeat enim dolorem sequi, maiores minus at. Modi minima odit dolores accusamus amet rerum sequi dolorum hic? Culpa fugit modi deleniti dolorum. Nostrum sint molestias quae cumque magnam accusamus odit corporis, eum ea.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam natus assumenda unde explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam natus assumenda unde explicabo modi id obcaecati officiis nisi sint, impedit, quis veniam earum exercitationem quasi mollitia tempore ad aperiam? Asperiores itaque velit culpa totam quam error ad sint sunt porro deserunt. Voluptate molestias fugit ipsum, beatae tempore unde quaerat facere optio delectus corrupti. Fuga magni, explicabo enim at deleniti, animi voluptas nesciunt, delectus cum neque hic? Sapiente placeat enim dolorem sequi, maiores minus at. Modi minima odit dolores accusamus amet rerum sequi dolorum hic? Culpa fugit modi deleniti dolorum. Nostrum sint molestias quae cumque magnam accusamus odit corporis, eum ea.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}

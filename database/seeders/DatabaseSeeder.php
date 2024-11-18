<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'abiyoga',
            'username' => 'abiyogawp',
            'email' => 'abiyoga@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => '1'
        ]);
        // User::create([
        //     'name' => 'aji',
        //     'email' => 'aji@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-Programming',
            // 'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Filmukomunikasi.uma.ac.id%2F2023%2F06%2F26%2Fperbedaan-web-programming%2F&psig=AOvVaw37jOBSq7_sb6qce2Ll7BAK&ust=1729092237523000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNj1p9bYkIkDFQAAAAAdAAAAABAE'
        ]);
        Category::create([
            'name' => 'Web design',
            'slug' => 'Web-design',
            // 'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Filmukomunikasi.uma.ac.id%2F2023%2F06%2F26%2Fperbedaan-web-programming%2F&psig=AOvVaw37jOBSq7_sb6qce2Ll7BAK&ust=1729092237523000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNj1p9bYkIkDFQAAAAAdAAAAABAE'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal',
            // 'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Filmukomunikasi.uma.ac.id%2F2023%2F06%2F26%2Fperbedaan-web-programming%2F&psig=AOvVaw37jOBSq7_sb6qce2Ll7BAK&ust=1729092237523000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNj1p9bYkIkDFQAAAAAdAAAAABAE'
        ]);
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'Judul-Pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta enim eius cumque tempore obcaecati accusantium adipisci, mollitia cum. Eos excepturi sint culpa nemo temporibus rerum minus sequi itaque dolorum error.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam iste magni assumenda corporis atque autem aliquam consequuntur nobis totam, eveniet iure sint dolorem molestiae tenetur numquam fugiat? Odio, vitae eius.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'Judul-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta enim eius cumque tempore obcaecati accusantium adipisci, mollitia cum. Eos excepturi sint culpa nemo temporibus rerum minus sequi itaque dolorum error.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam iste magni assumenda corporis atque autem aliquam consequuntur nobis totam, eveniet iure sint dolorem molestiae tenetur numquam fugiat? Odio, vitae eius.',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'Judul-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta enim eius cumque tempore obcaecati accusantium adipisci, mollitia cum. Eos excepturi sint culpa nemo temporibus rerum minus sequi itaque dolorum error.',
        //     'body' => 'Lorem ipsumdolor sit, amet consectetur adipisicing elit. Quam iste magni assumenda corporis atque autem aliquam consequuntur nobis totam, eveniet iure sint dolorem molestiae tenetur numquam fugiat? Odio, vitae eius.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'Judul-Keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta enim eius cumque tempore obcaecati accusantium adipisci, mollitia cum. Eos excepturi sint culpa nemo temporibus rerum minus sequi itaque dolorum error.',
        //     'body' => 'Lorem ipsumdolor sit, amet consectetur adipisicing elit. Quam iste magni assumenda corporis atque autem aliquam consequuntur nobis totam, eveniet iure sint dolorem molestiae tenetur numquam fugiat? Odio, vitae eius.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Saiful Anam',
            'username' => 'Saiful',
            'email' => 'saiful@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Mulia Nikmatun',
        //     'email' => 'mulia@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Progamming',
            'slug' => 'progamming'
        ]);

        Category::create([
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing'
        ]);

        Category::create([
            'name' => 'Photography',
            'slug' => 'Photography'
        ]);

        Post::factory(30)->create();

        //     Post::create([
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti,',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti, laboriosam cupiditate ratione quo veniam vitae illo. Sed deleniti, at nisi labore maxime quisquam consequatur aut culpa enim illo exercitationem perferendis modi, cum rem laboriosam.</p><p>Vero, illo. Sit delectus ut dolorum iusto laboriosam exercitationem perferendis dolor necessitatibus nisi provident cum qui, eaque alias quaerat quasi libero dolorem amet quos nesciunt, numquam enim obcaecati? Eveniet amet quae vel possimus explicabo dicta error alias illo nam ab id reiciendis aperiam quod sapiente sint distinctio velit, impedit in, eius esse necessitatibus voluptatem mollitia deleniti repellat. </p><p> Voluptatem sed quas, quis, labore ducimus perferendis illo, obcaecati fugit explicabo animi provident assumenda quisquam debitis. Tempora, veniam!</p>',
        //         'category_id' => 1,
        //         'user_id' => 1
        //     ]);

        //     Post::create([
        //         'title' => 'Judul Ke Dua',
        //         'slug' => 'judul-kedua',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti,',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti, laboriosam cupiditate ratione quo veniam vitae illo. Sed deleniti, at nisi labore maxime quisquam consequatur aut culpa enim illo exercitationem perferendis modi, cum rem laboriosam.</p><p>Vero, illo. Sit delectus ut dolorum iusto laboriosam exercitationem perferendis dolor necessitatibus nisi provident cum qui, eaque alias quaerat quasi libero dolorem amet quos nesciunt, numquam enim obcaecati? Eveniet amet quae vel possimus explicabo dicta error alias illo nam ab id reiciendis aperiam quod sapiente sint distinctio velit, impedit in, eius esse necessitatibus voluptatem mollitia deleniti repellat. </p><p> Voluptatem sed quas, quis, labore ducimus perferendis illo, obcaecati fugit explicabo animi provident assumenda quisquam debitis. Tempora, veniam!</p>',
        //         'category_id' => 1,
        //         'user_id' => 1
        //     ]);

        //     Post::create([
        //         'title' => 'Judul Ke Tiga',
        //         'slug' => 'judul-ketiga',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti,',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti, laboriosam cupiditate ratione quo veniam vitae illo. Sed deleniti, at nisi labore maxime quisquam consequatur aut culpa enim illo exercitationem perferendis modi, cum rem laboriosam.</p><p>Vero, illo. Sit delectus ut dolorum iusto laboriosam exercitationem perferendis dolor necessitatibus nisi provident cum qui, eaque alias quaerat quasi libero dolorem amet quos nesciunt, numquam enim obcaecati? Eveniet amet quae vel possimus explicabo dicta error alias illo nam ab id reiciendis aperiam quod sapiente sint distinctio velit, impedit in, eius esse necessitatibus voluptatem mollitia deleniti repellat. </p><p> Voluptatem sed quas, quis, labore ducimus perferendis illo, obcaecati fugit explicabo animi provident assumenda quisquam debitis. Tempora, veniam!</p>',
        //         'category_id' => 2,
        //         'user_id' => 1
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Ke Empat',
        //         'slug' => 'judul-keempat',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti,',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti, laboriosam cupiditate ratione quo veniam vitae illo. Sed deleniti, at nisi labore maxime quisquam consequatur aut culpa enim illo exercitationem perferendis modi, cum rem laboriosam.</p><p>Vero, illo. Sit delectus ut dolorum iusto laboriosam exercitationem perferendis dolor necessitatibus nisi provident cum qui, eaque alias quaerat quasi libero dolorem amet quos nesciunt, numquam enim obcaecati? Eveniet amet quae vel possimus explicabo dicta error alias illo nam ab id reiciendis aperiam quod sapiente sint distinctio velit, impedit in, eius esse necessitatibus voluptatem mollitia deleniti repellat. </p><p> Voluptatem sed quas, quis, labore ducimus perferendis illo, obcaecati fugit explicabo animi provident assumenda quisquam debitis. Tempora, veniam!</p>',
        //         'category_id' => 3,
        //         'user_id' => 2
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Ke Lima',
        //         'slug' => 'judul-kelima',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti,',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ducimus eum explicabo, animi autem odio tempore incidunt itaque maxime, deleniti, laboriosam cupiditate ratione quo veniam vitae illo. Sed deleniti, at nisi labore maxime quisquam consequatur aut culpa enim illo exercitationem perferendis modi, cum rem laboriosam.</p><p>Vero, illo. Sit delectus ut dolorum iusto laboriosam exercitationem perferendis dolor necessitatibus nisi provident cum qui, eaque alias quaerat quasi libero dolorem amet quos nesciunt, numquam enim obcaecati? Eveniet amet quae vel possimus explicabo dicta error alias illo nam ab id reiciendis aperiam quod sapiente sint distinctio velit, impedit in, eius esse necessitatibus voluptatem mollitia deleniti repellat. </p><p> Voluptatem sed quas, quis, labore ducimus perferendis illo, obcaecati fugit explicabo animi provident assumenda quisquam debitis. Tempora, veniam!</p>',
        //         'category_id' => 2,
        //         'user_id' => 2
        //     ]);
    }
}

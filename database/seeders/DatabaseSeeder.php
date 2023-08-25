<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        /*\App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        $this->call(ScheduleLocationsSeeder::class);
        /*$this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(museum::class);
        $this->call(stories::class);
        $this->call(itemLocations::class);
        $this->call(story_segments::class);
        $this->call(collection_items::class);*/

        // User::create([
        //     'name' => 'Muhammad Luthfi',
        //     'username' => 'ZeeroXc',
        //     'email' => 'luthfim904@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // /*User::create([
        //     'name' => 'Ibra Rizqy Siregar',
        //     'email' => 'rizqyibra@gmail.com',
        //     'password' => bcrypt('54321'),
        // ]);*/

        // User::factory(3)->create();

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::factory(20)->create();

        /*Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis minima eaque quaerat quam, vitae nobis? Consequatur nobis minima eius corrupti mollitia, sunt delectus laboriosam velit ducimus beatae alias culpa ullam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid iure error pariatur provident dicta necessitatibus dignissimos nam, dolores dolore obcaecati!',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis minima eaque quaerat quam, vitae nobis? Consequatur nobis minima eius corrupti mollitia, sunt delectus laboriosam velit ducimus beatae alias culpa ullam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid iure error pariatur provident dicta necessitatibus dignissimos nam, dolores dolore obcaecati!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, excepturi natus. Aliquid, nostrum. Error numquam sint laborum facilis provident officiis quam unde id? Officiis, quis possimus. Suscipit reprehenderit laudantium maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam impedit possimus, reiciendis numquam atque vel recusandae deleniti nobis quisquam sint.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur unde, exercitationem ullam adipisci magni ad velit doloremque consequatur. Repellat eos natus architecto quae! Quod a similique, error corrupti quis architecto! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero suscipit veniam neque maxime sunt cumque porro ea, omnis nulla rerum.</p>'
        ]);
        
        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis minima eaque quaerat quam, vitae nobis? Consequatur nobis minima eius corrupti mollitia, sunt delectus laboriosam velit ducimus beatae alias culpa ullam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus omnis animi quo quisquam voluptatibus quidem itaque! Iste iusto voluptatem laborum?',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis minima eaque quaerat quam, vitae nobis? Consequatur nobis minima eius corrupti mollitia, sunt delectus laboriosam velit ducimus beatae alias culpa ullam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus omnis animi quo quisquam voluptatibus quidem itaque! Iste iusto voluptatem laborum?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, excepturi natus. Aliquid, nostrum. Error numquam sint laborum facilis provident officiis quam unde id? Officiis, quis possimus. Suscipit reprehenderit laudantium maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ex aut, ratione perspiciatis quod modi labore quaerat in dolor! Natus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur unde, exercitationem ullam adipisci magni ad velit doloremque consequatur. Repellat eos natus architecto quae! Quod a similique, error corrupti quis architecto! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae atque, quam in sit nulla quas doloribus tempora quasi aspernatur inventore!</p>'
        ]);
        
        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt corrupti cupiditate rem quaerat ex illo labore vitae architecto deserunt est. Dicta quo ad fugit a veritatis quis tempora, quae ipsum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam eius earum omnis ratione quasi. Nisi maiores repudiandae ab.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt corrupti cupiditate rem quaerat ex illo labore vitae architecto deserunt est. Dicta quo ad fugit a veritatis quis tempora, quae ipsum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam eius earum omnis ratione quasi. Nisi maiores repudiandae ab.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, dignissimos veritatis debitis temporibus incidunt at alias natus ipsa qui eveniet distinctio ut similique ea dolorum voluptas molestiae nostrum eos obcaecati. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam eius earum omnis ratione quasi. Nisi maiores repudiandae ab.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ullam molestias explicabo magnam eos ab eveniet ea et iure voluptate voluptas expedita alias dicta nostrum minima, doloribus in aliquam accusamus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam eius earum omnis ratione quasi. Nisi maiores repudiandae ab.</p>'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt corrupti cupiditate rem quaerat ex illo labore vitae architecto deserunt est. Dicta quo ad fugit a veritatis quis tempora, quae ipsum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam eius earum omnis ratione quasi. Nisi maiores repudiandae ab.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt corrupti cupiditate rem quaerat ex illo labore vitae architecto deserunt est. Dicta quo ad fugit a veritatis quis tempora, quae ipsum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam eius earum omnis ratione quasi. Nisi maiores repudiandae ab.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, dignissimos veritatis debitis temporibus incidunt at alias natus ipsa qui eveniet distinctio ut similique ea dolorum voluptas molestiae nostrum eos obcaecati. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam eius earum omnis ratione quasi. Nisi maiores repudiandae ab.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ullam molestias explicabo magnam eos ab eveniet ea et iure voluptate voluptas expedita alias dicta nostrum minima, doloribus in aliquam accusamus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni nobis aperiam eius earum omnis ratione quasi. Nisi maiores repudiandae ab.</p>'
        ]);*/
    }
}
<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 6)->create();
        
        $rooms = factory(App\Room::class, 6)->create();
        $posts = factory(App\Post::class, 24)->create()->each( function($post) use ($users, $rooms) {
            $post->room_id = $rooms->random()->id;
            $post->user_id = $users->random()->id;

            $post->save();
        });

        for($i = 0; $i < count($users); $i++)
        {
            $users[$i]->room_id = $rooms[$i]->id;
            $rooms[$i]->user_id = $users[$i]->id;
            
            $users[$i]->save();
            $rooms[$i]->save();
        }
       
    }
}

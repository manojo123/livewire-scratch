<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::find(1)->posts()->createMany([
    		[
    			'title' => 'Bloodhound Gang - The Bad Touch (Official Video)',
    			'video_url' => 'https://www.youtube.com/embed/xat1GVnl8-k',
    			'image_url' => 'https://i.ytimg.com/vi/xat1GVnl8-k/hqdefault.jpg',
    		],
    		[
    			'title' => 'Tony Igy - Astronomia (Official Video)',
    			'video_url' => 'https://www.youtube.com/embed/--cxZbnmmoc',
    			'image_url' => 'https://i.ytimg.com/vi/jl9xKw_xEas/maxresdefault.jpg',
    		],
    		[
    			'title' => 'Vitas - The 7th Element',
    			'video_url' => 'https://www.youtube.com/embed/IwzUs1IMdyQ',
    			'image_url' => 'https://i.ytimg.com/vi/IwzUs1IMdyQ/hqdefault.jpg',
    		],
    		[
    			'title' => 'Afroman - Because I Got High (Official Video)',
    			'video_url' => 'https://www.youtube.com/embed/WeYsTmIzjkw',
    			'image_url' => 'https://i0.wp.com/souvienstoi.net/wp-content/uploads/2020/06/Afroman-Because-I-Got-High.jpg?fit=400%2C225&ssl=1&resize=1280%2C720',
    		],
    		[
    			'title' => 'Eminem - Godzilla ft. Juice WRLD (Dir. by @_ColeBennett_)',
    			'video_url' => 'https://www.youtube.com/embed/r_0JjYUe5jo',
    			'image_url' => 'https://i.ytimg.com/vi/r_0JjYUe5jo/maxresdefault.jpg',
    		]
    	]);
    }
}

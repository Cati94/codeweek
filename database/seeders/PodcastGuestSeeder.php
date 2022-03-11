<?php

namespace Database\Seeders;

use App\Nova\PodcastResource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PodcastGuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::enableForeignKeyConstraints();
        Model::unguard();
        DB::table('podcast_guests')->truncate();
        Model::reguard();
//        Schema::disableForeignKeyConstraints();

        DB::table('podcast_guests')->insert([
            'podcast_id' => 2,
            'position' => 1,
            'image_path' => 'https://codeweek-podcasts.s3.eu-west-1.amazonaws.com/speakers/alessandro.jpeg',
            'name' => 'Alessandro Bogliolo (Italy)',
            'description' => 'Alessandro Bogliolo is a computer science professor at the University of Urbino and an ambassador for Code Week in Italy. You can follow him on Twitter and get in touch with him ([@netralaccess](https://twitter.com/neutralaccess)).'
        ]);

        DB::table('podcast_guests')->insert([
            'podcast_id' => 3,
            'position' => 1,
            'name' => 'Angela Jafarova and Elchin Jafarov (Latvia)',
            'description' => 'Angela Jafarova and Elchin Jafarov are the founders of Datorium, a coding school in Riga. You can follow them and get in touch on Twitter ([@Datorium1](https://twitter.com/Datorium1)).'
        ]);

        DB::table('podcast_guests')->insert([
            'podcast_id' => 4,
            'position' => 1,
            'image_path' => 'https://codeweek-podcasts.s3.eu-west-1.amazonaws.com/speakers/3.OllieBray.jpeg',
            'name' => 'Ollie Bray (UK)',
            'description' => 'Ollie Bray is an experienced school leader and project manager with wide ranging international experience of school and education system transformation. You can get in touch with him on Twitter ([@olliebray](https://twitter.com/olliebray)), [Instagram](https://www.instagram.com/bray.ollie/)  and [LinkedIn](https://uk.linkedin.com/in/olliebray).'
        ]);

        DB::table('podcast_guests')->insert([
            'podcast_id' => 5,
            'position' => 1,
            'image_path' => 'https://codeweek-podcasts.s3.eu-west-1.amazonaws.com/speakers/4.ArturCoelho.jpg',
            'name' => 'Artur Coelho (Portugal)',
            'description' => 'Artur Coelho is a Portuguese ICT teacher, with an interest and vast knowledge in AI, robotics and the Arts. You can follow him on [Mastodon](https://masto.pt/web/@arturcoelho), [Instagram](https://www.instagram.com/artur.coelho/) or on [his blog](http://3dalpha.blogspot.com/).'
        ]);



    }
}

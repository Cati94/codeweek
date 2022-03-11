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

        DB::table('podcast_guests')->insert([
            'podcast_id' => 6,
            'position' => 1,
            'image_path' => 'https://codeweek-podcasts.s3.eu-west-1.amazonaws.com/speakers/5.JakaZeleznikar.png',
            'name' => 'Jaka Železnikar (Slovenia)',
            'description' => 'Jaka is author of works in the fields of poetry, visual arts and web programming. You can learn more about him and his through his [website](https://jaka.org/). You can follow him on Twitter ([@jakaorg](https://twitter.com/jakaorg))'
        ]);

        DB::table('podcast_guests')->insert([
            'podcast_id' => 7,
            'position' => 2,
            'image_path' => 'https://codeweek-podcasts.s3.eu-west-1.amazonaws.com/speakers/6.TeaHorvatic.jpg',
            'name' => 'Tea Horvatic (Croatia)',
            'description' => 'Tea Horvatic is an English teacher, MIEExpert 2021/22, eTwinning & Minecraft enthusiast and Erasmus+ KA1 coordinator. You can get in touch with Tea on Twitter ([@teahorvatic](https://twitter.com/teahorvatic)) and [Facebook](https://www.facebook.com/tea.t.teic).'
        ]);

        DB::table('podcast_guests')->insert([
            'podcast_id' => 7,
            'position' => 1,
            'image_path' => 'https://codeweek-podcasts.s3.eu-west-1.amazonaws.com/speakers/6.MarjanaSmolcec.jpg',
            'name' => 'Marijana Smolcec (Croatia)',
            'description' => 'Marijana Smolcec is an English Teacher and a Teacher Trainer. She is the moderator of the eTwinning featured group "Inclusive Education". You can learn more about her on her [website](https://about.me/msmolcec) and follow her on Twitter ([@mscro1](https://about.me/msmolcec))'
        ]);

        DB::table('podcast_guests')->insert([
            'podcast_id' => 9,
            'position' => 1,
            'image_path' => 'https://codeweek-podcasts.s3.eu-west-1.amazonaws.com/speakers/annika.jpeg',
            'name' => 'Annika Ostergren Pofantis (Sweden)',
            'description' => 'Annika works for the European Commission and specialises in Digital Economy and Skills. She is the coordinator of Code Week and has been involved in the initiative for many years. You can get in touch with her on Twitter: [@AnnikaOP](https://twitter.com/AnnikaOP).'
        ]);

        DB::table('podcast_guests')->insert([
            'podcast_id' => 9,
            'position' => 2,
            'image_path' => 'https://codeweek-podcasts.s3.eu-west-1.amazonaws.com/speakers/tommaso.png',
            'name' => ' Tommaso Dalla Vecchia (Italy)',
            'description' => 'Tommaso works for European Schoolnet as Development and Advocacy Manager. He is part of the Code Week team and has also been involved for several of its editions. You can get in touch with him on Twitter: [@tommaso_eun](https://twitter.com/tommaso_eun).'
        ]);



    }
}

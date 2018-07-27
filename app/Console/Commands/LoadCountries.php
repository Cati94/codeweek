<?php

namespace App\Console\Commands;

use App\Country;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LoadCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        var_dump('Load countries');

        $old_countries = DB::table('countries_plus_country')
            ->select(DB::raw('iso, name, continent'))
            ->get();

        DB::table('countries')->truncate();
        foreach ($old_countries as $old_country) {

            $new = new Country();
            $new->name = $old_country->name;
            $new->continent = $old_country->continent;
            $new->iso = $old_country->iso;
            $new->save();
        }
    }
}

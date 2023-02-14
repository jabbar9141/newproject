<?php

namespace Database\Seeders;

use App\Models\GrConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrConfigsTableSeedings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INSERT INTO `gr_config` (`id`, `variable`, `value`) VALUES
        GrConfig::create([
            'variable' => 'recaptcha_web_key',
            'value' => '6LdSixceAAAAAOk6PsDb2ZGXpFRcEWhjbEaeFZ8M',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        GrConfig::create([
            'variable' => 'recaptcha_secret_key',
            'value' => '6LdSixceAAAAAD6p8X62dM1Q3b_16zMEGldoJNIg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        GrConfig::create([
            'variable' => 'path_photo',
            'value' => 'img/photo/',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

           GrConfig::create([
            'variable' => 'path_avatar',
            'value' => 'img/avatar/',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        GrConfig::create([
            'variable' => 'api_google_maps_key',
            'value' => 'AIzaSyBjM9vlsOlg4HEeKe5X6XULq5kxRJPFxDk',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}

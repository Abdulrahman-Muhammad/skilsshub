<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email' => 'contact@skillshub.com',
            'phone' => '0103232323',
            'twitter' => 'www.twitter.com',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
            'LinkedIn' => 'www.LinkedIn.com',
            'Youtube' => 'www.Youtube.com',

        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users with profile
        User::factory(10)
            ->create()
            ->each(function ($user) {
                UserProfile::factory()
                    ->create([
                        'user_id' => $user->id,
                    ]);
            });

        // Users without profile
        User::factory(10)->create();
    }
}

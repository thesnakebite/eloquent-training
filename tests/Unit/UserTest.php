<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\UserProfile;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function can_get_the_user_profile_associated_to_a_user()
    {
        $user = User::factory()->create();
        $userProfile = UserProfile::factory()->create([
            'website' => 'https://thesnakebite.es',
            'user_id' => $user->id,
        ]);

        $this->assertInstanceOf(UserProfile::class, $user->profile);
        $this->assertTrue($userProfile->is($user->profile));
        $this->assertSame('https://thesnakebite.es', $user->profile->website);
    }
}

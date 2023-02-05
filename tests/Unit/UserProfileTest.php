<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProfileTest extends TestCase
{
    /**
     * @test
     * @testdox Un perfil de usuario pertenece a un usuario.
     */
    function a_user_profile_belongs_to_a_user()
    {
        $user = User::factory()->create();
        $userProfile = UserProfile::factory()->create([
            'website' => 'https://styde.net',
            'user_id' => $user->id,
        ]);

        $this->assertInstanceOf(BelongsTo::class, $userProfile->user());
        $this->assertInstanceOf(User::class, $userProfile->user);
        $this->assertTrue($userProfile->user->is($user));
    }
}
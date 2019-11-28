<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_has_a_full_name()
    {
        $user = factory(User::class)->create([
            'name'=>'Johnatan',
            'last_name'=>'Gonzalez'
        ]);

        $this->assertEquals($user->full_name,'Johnatan Gonzalez');
    }
}

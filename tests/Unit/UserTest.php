<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOne()
    {
        $user = new User();
        $user->name = 'Ron';
        $user->email = 'ronaldo@examp.le';
        $user->password = 'asdfghjkl';

        $this->assertTrue($user->save());
    }
}

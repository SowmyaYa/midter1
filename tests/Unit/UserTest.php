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
    /*public function testOne()
    {
        $user = new User();
        $user->name = 'Harry';
        $user->email = 'harry@potter.com';
        $user->password = 'harrypotter';
        $this->assertTrue($user->save());
    }*/

    //Test  for deletion
    public function testTwo()
    {
        $user = new User();
        $user->name = 'Steve Smith';
        $user->email = 'harry@potter.com';
        $user->password = 'harrypotter';
        $user->save();
        $this->assertTrue($user->delete());
    }
    //Test for counting
    public function testThree(){
        $users=User::All();
        $userCount = $users->count();
        $actual=50;
        $this->assertEquals($userCount,$actual);
    }
    //Test for updation
    public function testFour()
    {
        $user = new User();
        $user->name = 'Steve Smith';
        $user->email = 'harry@potter.com';
        $user->password = 'harrypotter';
        $this->assertTrue($user->save());
    }


}

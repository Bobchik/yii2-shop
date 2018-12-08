<?php
/**
 * Created by PhpStorm.
 * User: bobka
 * Date: 12/7/18
 * Time: 4:00 PM
 */

namespace fronted\tests\unit\user;

use Codeception\Test\Unit;
use common\models\User;

class SignupTest extends Unit
{
    public function testSuccess()
    {
        $user = User::signup(
            $username = 'Test',
            $email = 'email@test.com',
            $password = 'password'
        );

        $this->assertEquals($username, $user->username);
        $this->assertEquals($email, $user->email);
        $this->assertNotEmpty($user->password_hash);
        $this->assertNotEquals($password, $user->password_hash);
        $this->assertNotEmpty($user->created_at);
        $this->assertNotEmpty($user->auth_key);
        $this->assertTrue($user->isActive());
    }
}
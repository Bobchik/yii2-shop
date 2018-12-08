<?php
/**
 * Created by PhpStorm.
 * User: bobka
 * Date: 12/8/18
 * Time: 6:28 AM
 */

namespace backend\services\auth;


use common\models\User;
use frontend\models\SignupForm;

class SignupService
{
    public function signup(SignupForm $form): User
    {
        $user = User::signup(
            $form->username,
            $form->email,
            $form->password
        );

        if (!$user->save()){
            throw new \RuntimeException('Saving Error');
        }
        return $user;
    }
}
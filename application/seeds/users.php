<?php

class Seed_Users extends \S2\Seed {

    public function grow()
    {
        $user = new User;
        $user->type = 'gp';
        $user->name = 'Dr Nigel';
        $user->email = 'nigel@nhs.com';
        $user->password = Hash::make('testing');
        $user->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 1;
    }

}
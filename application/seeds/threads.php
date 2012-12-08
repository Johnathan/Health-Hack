<?php

class Seed_Threads extends \S2\Seed {

    public function grow()
    {
        // Get Dr Nigel
        $user = User::where('email', '=', "nigel@nhs.com")->first();

        $thread = new Thread;
        $thread->name = "Jacob Smith";
        $thread->address = "121 Coryville Avenue, Belfast BT1 3BE";
        $thread->user_id = $user->id;
        $thread->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 2;
    }

}
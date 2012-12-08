<?php

class Seed_Threads extends \S2\Seed {

    public function grow()
    {
        // Get Dr Nigel
        $user = User::where('email', '=', "nigel@nhs.com")->first();

        // First patient
        $thread = new Thread;
        $thread->title = "Diabetes";
        $thread->patient_id = 1;
        $thread->user_id = $user->id;
        $thread->save();

        $thread = new Thread;
        $thread->title = "Bad back";
        $thread->patient_id = 1;
        $thread->user_id = $user->id;
        $thread->save();

        // Second patient
        $thread = new Thread;
        $thread->title = "Wheat allergy concerns";
        $thread->patient_id = 2;
        $thread->user_id = $user->id;
        $thread->save();

        // Third patient
        $thread = new Thread;
        $thread->title = "Ear infection";
        $thread->patient_id = 3;
        $thread->user_id = $user->id;
        $thread->save();

        $thread = new Thread;
        $thread->title = "Throat infection";
        $thread->patient_id = 3;
        $thread->user_id = $user->id;
        $thread->save();

        $thread = new Thread;
        $thread->title = "Chesty cough";
        $thread->patient_id = 3;
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
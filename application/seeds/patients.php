<?php

class Seed_Patients extends \S2\Seed {

    public function grow()
    {
        $user = User::where('email', '=', "nigel@nhs.com")->first();
        $patient = new Patient;
        $patient->name = "Jacob Smith";
        $patient->address = "121 Coryville Avenue, Belfast BT1 3BE";
        $patient->user_id = $user->id;
        $patient->save();

        $patient = new Patient;
        $patient->name = "Frank Wilkins";
        $patient->address = "24 Brent St, Belfast BT4 9RY";
        $patient->user_id = $user->id;
        $patient->save();

        $patient = new Patient;
        $patient->name = "Jemma Anne Loughran";
        $patient->address = "12a Drumbar Road, Belfast BT2 3AA";
        $patient->user_id = $user->id;
        $patient->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 1;
    }

}
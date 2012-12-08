<?php

class Patients_Controller extends Base_Controller 
{

    public function action_index() {
        $patients = Auth::user()->patients()->get();
        return View::make('patients.index')->with( 'patients', $patients );
    }

    public function action_show($patient_id) {
        $patient = Auth::user()->patients()->where_id( $patient_id )->first();
        return View::make('patients.show')
            ->with( 'patient', $patient );
    }

}
<?php

class Patients_Controller extends Base_Controller 
{
    public $restful = true;

    public function get_index() {
        $patients = Auth::user()->patients()->get();
        return View::make('patients.index')->with( 'patients', $patients );
    }

    public function get_show($patient_id) {
        $patient = Auth::user()->patients()->where_id( $patient_id )->first();
        return View::make('patients.show')
            ->with( 'patient', $patient );
    }

    public function get_create() {
        return "Create";
    }

}
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
            ->with('patient', $patient);
    }

    public function get_new() {
        // Get a specific article
        $patient = new Patient();

        return View::make('patients.new')
            ->with('patient', $patient);
    }


    public function post_new() {
        return $this->post_edit();
    }


    public function get_edit($id) {
        // Get a specific article
        $patient = Patient::find($id);

        return View::make('patients.edit')
            ->with('patient', $patient);
    }


    public function post_edit($id = null) {
        if (is_null($id)) {
            $patient = new Patient();
            $patient->user_id = Auth::user()->id;
        }
        else {
            $patient = Patient::find($id);
        }

        $patientValidator = Validator::make(Input::all(), array('name' => 'required', 'address' => 'required'));

        $patient->name = Input::get('name');
        $patient->address = Input::get('address');
		$patient->date_of_birth = Input::get( 'date_of_birth' );
		$patient->gender = Input::get( 'gender' );
		$patient->medical_history = Input::get( 'medical_history' );
		$patient->medication = Input::get( 'medication' );
		$patient->allergies = Input::get( 'allergies' );

        if ($patientValidator->fails()) {
            return View::make($id ? 'patients.edit' : 'patients.new')
                ->with('patient', $patient)
                ->with('errors', $patientValidator->errors);
        }

        $patient->save();

        return Redirect::to('patients/'.$patient->id);
    }

}

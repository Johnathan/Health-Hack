<?php

class Threads_Controller extends Base_Controller
{
    public $restful = true;

    public function get_show($patient_id, $thread_id) {
        $thread = Auth::user()->patients()->where_id( $patient_id )->first()->threads()->where_id( $thread_id )->first();
        $patient = $thread->patient()->first();

        return View::make('patients.threads.show')
            ->with( 'thread', $thread )
            ->with( 'patient', $patient );
    }

	public function get_create( $patient_id = NULL )
	{
		if( Auth::user()->patients()->where_id( $patient_id )->first() )
		{
			return View::make('patients.threads.create');
		}
		else
		{
			return Redirect::to( '/' );
		}
	}

	public function post_create( $patient_id = NULL )
	{
		if( ! Auth::user()->patients()->where_id( $patient_id )->first() )
		{
			return Redirect::to( '/' );
		}

		$rules = array(
			'title' => 'required',
            'message' => 'required',
		);

		$validation = Validator::make( Input::all(), $rules );

		if( $validation->passes() )
		{
			$thread = Thread::create(array(
				'title' => Input::get( 'title' ),
                'message' => Input::get( 'message' ),
                'urgency' => Input::get( 'urgency' ) === "urgent" ? "urgent" : "not_urgent",
                'status' => "unresolved",
				'user_id' => Auth::user()->id,
				'patient_id' => $patient_id
			));

			$thread->save();

			return Redirect::to( 'patients/' . $patient_id . '/threads/' . $thread->id );
		}
		else
		{
			return Redirect::to( 'patients/' . $patient_id . '/threads/new' )->with_errors( $validation->errors );
		}
	}
}

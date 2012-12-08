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

    public function post_show($patient_id, $thread_id) {
        $thread = Auth::user()->patients()->where_id( $patient_id )->first()->threads()->where_id( $thread_id )->first();
        $patient = $thread->patient()->first();

        // Submit a new message

        return View::make('patients.threads.show')
            ->with( 'thread', $thread )
            ->with( 'patient', $patient );
    }

}
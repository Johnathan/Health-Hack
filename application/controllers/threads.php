<?php

class Threads_Controller extends Base_Controller 
{
    public function action_show($patient_id, $thread_id) {
        $thread = Auth::user()->patients()->where_id( $patient_id )->first()->threads()->where_id( $thread_id )->first();
        $patient = $thread->patient()->first();

        return View::make('patients.threads.show')
            ->with( 'thread', $thread )
            ->with( 'patient', $patient );
    }
}
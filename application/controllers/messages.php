<?php

class Messages_Controller extends Base_Controller 
{
    public $restful = true;

    public function post_new($patient_id, $thread_id) {
        $user = Auth::user();
        $thread = Thread::find($thread_id);

        if ( ! $thread) return Response::error(404);

        $message_validation = Validator::make(Input::all(), array('message' => 'required'));

        if ($message_validation->fails()) {
            return Redirect::to("patients/$patient_id/threads/$thread_id")
                ->with_input('only', array('message'))
                ->with_errors($message_validation);
        }

        // Create and save the message
        $message = new Message();
        $message->message = Input::get('message');
        $message->user_id = $user->id;
        $thread->messages()->insert($message);
        $thread->touch(); // Update our last updated on the thread

        return Redirect::to("patients/$patient_id/threads/$thread_id");
    }
}
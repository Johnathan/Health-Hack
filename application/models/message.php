<?php

class Message extends Eloquent
{
	public function patient()
	{
		return $this->has_one( 'patient' );
	}

	public function attachments()
	{
		return $this->has_many( 'attachment' );
	}
}

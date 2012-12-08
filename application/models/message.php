<?php

class Message extends Eloquent
{
	public function patient()
	{
		return $this->belongs_to( 'patient' );
	}

	public function attachments()
	{
		return $this->has_many( 'attachment' );
	}

    public function user()
    {
        return $this->belongs_to( 'user' );
    }
}

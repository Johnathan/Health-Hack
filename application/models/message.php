<?php

class Message extends Eloquent
{
	public function thread()
	{
		return $this->belongs_to( 'thread' );
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

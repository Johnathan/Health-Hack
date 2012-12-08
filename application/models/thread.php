<?php

class Thread extends Eloquent
{
	public function patient()
	{
		return $this->belongs_to( 'patient' );
	}

	public function messages()
	{
		return $this->has_many( 'message' );
	}

    public function user()
    {
        return $this->belongs_to( 'user' );
    }

}

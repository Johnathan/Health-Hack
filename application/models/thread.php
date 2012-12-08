<?php

class Thread extends Eloquent
{
	public function patient()
	{
		return $this->has_one( 'patient' );
	}

	public function messages()
	{
		return $this->has_many( 'message' );
	}
}

<?php

class User extends Eloquent
{
	public function patients()
	{
		return $this->has_many( 'patient' );
	}

	public function threads()
	{
		return $this->has_many( 'thread' );
	}

	public function messages()
	{
		return $this->has_many( 'message' );
	}
}

<?php

class User extends Eloquent
{
	public function patients()
	{
		return $this->has_many( 'patient' );
	}
}

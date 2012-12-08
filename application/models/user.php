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

    public function get_avatar()
    {
        return $this->get_attribute('avatar') ? $this->get_attribute('avatar') : "/img/users/default.png";
    }
}

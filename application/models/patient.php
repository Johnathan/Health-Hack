<?php

class Patient extends Eloquent
{
	public function user()
	{
		return $this->belongs_to( 'user' );
	}

	public function threads()
	{
		return $this->has_many( 'thread' )->order_by( 'updated_at', 'DESC' );
	}

	public function patient_meta()
	{
		return $this->has_many( 'patient_meta' );
	}

	public function get_age()
	{
		$today = new DateTime;
		$date_of_birth = new DateTime( $this->date_of_birth );
		$interval = $today->diff( $date_of_birth );
		return $interval->format( '%y' );
	}

    public function get_avatar()
    {
        return $this->get_attribute('avatar') ? $this->get_attribute('avatar') : "/img/users/default.png";
    }
}

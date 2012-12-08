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
}

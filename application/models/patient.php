<?php

class Patient extends Eloquent
{
	public function gp()
	{
		return $this->belongs_to( 'user' );
	}
}

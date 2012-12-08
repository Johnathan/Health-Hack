<?php

class Attachment extends Eloquent
{
	public function message()
	{
		return $this->belongs_to( 'message' );
	}
}

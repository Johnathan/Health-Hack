<?php

class Thread extends Eloquent
{
	public function patient()
	{
		return $this->belongs_to( 'patient' );
	}

	public function messages()
	{
		return $this->has_many( 'message' )->order_by( 'updated_at', 'DESC' );
	}

    public function user()
    {
        return $this->belongs_to( 'user' );
    }

    public function get_days_ago()
    {
        $today = new DateTime;
        $created = new DateTime( $this->get_attribute('created_at') );
        $interval = $today->diff( $created );
        $days = $interval->format( '%d' );

        if ($days === "0") {
            return "today";
        }
        elseif ($days === "1") {
            return "yesterday";
        }
        else {
            return $days. " days ago";
        }
    }

}

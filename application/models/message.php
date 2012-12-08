<?php

class Message extends Eloquent
{
	public function thread()
	{
		return $this->belongs_to( 'thread' );
	}

	public function attachments()
	{
		return $this->has_many( 'attachment' );
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

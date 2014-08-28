<?php

	class Role extends Eloquent {

		protected $fillable = array('role', 'active');

		 public function user()
	    {
	        return $this->hasOne('User');	    
	    }

	}

?>
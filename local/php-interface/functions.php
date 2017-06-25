<?php

	function dump($var, $all=false, $die=false)
	{
		global $USER;
		
		if($USER->IsAdmin() || $all == true)
		{
			echo "<pre>";
			print_r($var);
			echo "</pre>";
		}

		if($die) die();
	}
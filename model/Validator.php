<?php

namespace model;

class Validator
{
	public static function email($value)
	{
		$value = filter_var($value, FILTER_SANITIZE_EMAIL);
		return filter_var($value, FILTER_VALIDATE_EMAIL);
	}
}
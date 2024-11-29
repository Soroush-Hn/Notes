<?php

namespace model\Middleware;

class Auth
{
	public function handle(): void
	{
		if(! $_SESSION['user'] ?? FALSE){
			header('/');
			exit();
		}
	}
}
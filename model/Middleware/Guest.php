<?php

namespace model\Middleware;

class Guest
{
	public function handle(): void
	{
		if(! $_SESSION['user'] ?? FALSE){
			header('/');
			exit();
		}
	}
}
<?php

namespace model\Middleware;

use Exception;

class Middleware
{
	public const array map =[
		'auth' => Auth::class,
		'guest' => Guest::class,
	];

	/**
	 * @throws Exception
	 */
	public static function resolve($key): void
	{
		if (!$key){
			return;
		}
		$middleware = static::map[$key] ?? FALSE;
		if(!$middleware){
			throw new Exception("the $key for middleware not found");
		}
		(new $middleware)->handle();
	}
}
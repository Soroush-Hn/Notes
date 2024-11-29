<?php
namespace model;

use Exception;
use model\Middleware\Middleware;

class Router
{
	protected array $routes = [];
	protected function add($uri, $controller, $method): Router
	{
		 $this->routes[] = [
			'uri' => $uri,
			'controller' => $controller,
			'method' => $method,
			'middleware' => NULL,
		 ];
		 return $this;
	}
	public function get($uri, $controller): Router
	{
		return $this->add($uri, $controller, 'GET');
	}
	public function delete($uri, $controller): Router
	{
		return $this->add($uri, $controller, 'DELETE');
	}
	public function post($uri, $controller): Router
	{
		return $this->add($uri, $controller, 'POST');
	}
	public function patch($uri, $controller): Router
	{
		return $this->add($uri, $controller, 'PATCH');
	}
	public function put($uri, $controller): Router
	{
		return $this->add($uri, $controller, 'PUT');
	}

	public function only($middleware): Router
	{
		return $this->routes[array_key_last($this->routes)]['middleware'] = $middleware;
	}

	/**
	 * @throws Exception
	 */
	public function route($uri, $method)
	{
		foreach ($this->routes as $route){
			if ($route['uri'] === $uri and $route['method'] === strtoupper($method)){

				Middleware::resolve($route['middleware']);

				return require $route['controller'];
			}
		}

		//
		$this->abort();
	}
	public static function abort($code = 404)
	{
		http_response_code($code);
		return require ROOT_FOLDER . "/view/page/$code.php";
	}
}
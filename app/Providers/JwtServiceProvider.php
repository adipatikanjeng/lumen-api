<?php namespace App\Providers;

use Tymon\JWTAuth\Providers\JWTAuthServiceProvider;

class JwtServiceProvider extends JWTAuthServiceProvider
{

	public function boot()
	{
		$this->app['config']->set('jwt', require realpath(__DIR__ . '/../config/jwt.php'));
		
		$this->bootBindings();

		$this->commands('tymon.jwt.generate');
	}
}

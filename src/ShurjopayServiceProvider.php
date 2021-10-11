<?php
	namespace shurjopay\ShurjopayLaravelPackage8;
	use Illuminate\Support\ServiceProvider;
	
	class ShurjopayServiceProvider extends ServiceProvider{
		
		public function boot()
		{
			$this->loadRoutesFrom(__DIR__.'/routes/web.php');
			$this->loadViewsFrom(__DIR__.'/views','shurjopay');
			$this->loadMigrationsFrom(__DIR__.'/database/migrations');
		}
		
		public function register()
		{
			//include __DIR__ . '/routes.php';
		}
	}
?>
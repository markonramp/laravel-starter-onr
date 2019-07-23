<?php
declare(strict_types = 1);
namespace OnrampLab\Pixnet;
use Illuminate\Support\ServiceProvider;
class PixnetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }
    // --------------------------------------------------------------------------------
    //  private
    // --------------------------------------------------------------------------------
    /**
     * Register the Artisan commands.
     *
     * @return void
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
            ]);
        }
    }
}
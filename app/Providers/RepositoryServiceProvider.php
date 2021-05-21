<?php


namespace App\Providers;


use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\SubscribeEmailRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\SubscribeEmailInterface;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(SubscribeEmailInterface::class, SubscribeEmailRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

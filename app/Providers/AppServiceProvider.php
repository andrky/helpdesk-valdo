<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale' => 'id']);
				Carbon::setLocale('id');
				date_default_timezone_set('Asia/Jakarta');

				Gate::define('admin', function(User $user) {
					return $user->level === 'superadmin';
				});

				Gate::define('teknisi', function(User $user) {
					return $user->level === 'teknisi';
				});

				Gate::define('user', function(User $user) {
					return $user->level === 'user';
				});
    }
}

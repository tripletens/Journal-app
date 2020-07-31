<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Journals;
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
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = $this->recent_journals();
        view()->share('recent', $data);
    }
    public function recent_journals(){
        $journals = Journals::where('status', 1)
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();
        if($journals !== null){
            $data = [
                'recent' => $journals
            ];
        }else{
            $data = [
                'recent' => null
            ];
        }

        return $data;
    }
}

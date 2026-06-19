<?php

namespace App\Providers;
use Illuminate\Support\Facades\Request;
use App\Models\admin\Website;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
  
    public function boot(): void
{
    $host = Request::getHost();

    $parts = explode('.', $host);

    $subdomain = count($parts) > 2 ? $parts[0] : null;

    if ($subdomain) {

        $website = Website::where('domain', $subdomain)->first();

        if (!$website) {
            abort(404, 'غير مسجل');
        }

        app()->instance('info', $website);

        Config::set(
            'database.connections.mysql.database',
            $website->db_name // اسم الحقل الذي يحتوي اسم قاعدة البيانات
        );

        DB::purge('mysql');
        DB::reconnect('mysql');


    } else {
        // حالة الدومين الرئيسي (admin أو بدون subdomain)
        app()->instance('info', false);
    }
}
   
}

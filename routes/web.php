<?php

 use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

include('admin.php');

  
$template = app('info');

if ($template) {
    
    require base_path('routes/customer.php');
 

}else{
    include('admin.php');
}

 
 


 Route::get('/t', function () {

    $databaseName = 'qq';

    DB::statement(
        "CREATE DATABASE IF NOT EXISTS `$databaseName`
         CHARACTER SET utf8mb4
         COLLATE utf8mb4_unicode_ci"
    );

    
        Config::set(
            'database.connections.mysql.database',
           $databaseName // اسم الحقل الذي يحتوي اسم قاعدة البيانات
        );

        DB::purge('mysql');
        DB::reconnect('mysql');


      // تشغيل migrations
      Artisan::call('migrate', [
            '--path' => 'database/migrations/customer',
        ]);
 
    return 'Database created successfully';
});
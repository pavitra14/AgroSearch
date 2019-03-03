<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artisanWeb extends Controller
{
    //This controller handles artisan commands called from the web.
    //This is need for shared hosting
    public function clearCache() {
        $output = new \Symfony\Component\Console\Output\BufferedOutput;
        \Artisan::call('cache:clear', [], $output);
        dd($output);
    }

    public function migrate() {
        $output = new \Symfony\Component\Console\Output\BufferedOutput;
        \Artisan::call('migrate', [], $output);
        dd($output);
    }
    public function passport(){
        $output = new \Symfony\Component\Console\Output\BufferedOutput;
        \Artisan::call('storage:link', [], $output);
        dd($output);
    }
}

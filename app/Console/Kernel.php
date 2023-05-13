<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
<<<<<<< HEAD
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
=======
     */
    protected function schedule(Schedule $schedule): void
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
<<<<<<< HEAD
     *
     * @return void
     */
    protected function commands()
=======
     */
    protected function commands(): void
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

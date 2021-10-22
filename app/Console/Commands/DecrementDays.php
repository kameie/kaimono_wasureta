<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Item;
class DecrementDays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:decrement';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'daysカラムをマイナス１する';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $message = '[' . date('Y-m-d h:i:s') . ']Command:decrement';
        
        $items = Item::all();
        foreach($items as $item) {
            echo $item->days;

            if ($item->days > 0) {
                $item->decrement('days');
            }
        }

        $this->info( $message );

        Log::setDefaultDriver('batch');
        Log::info( $message );
    }
}
<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class UserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rexoit:salary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Added salary amount';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $datas =  Wallet::get();
        foreach($datas as $data){
            $data->salary_amount = $data->salary_amount += 50;
            $data->save();
        }

        $this->info('25 Amount added in salary_amount table');
    }
}

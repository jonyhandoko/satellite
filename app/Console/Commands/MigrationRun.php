<?php

namespace App\Console\Commands;

use Log;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Console\Command;
use Redone\Api\Validation\InputValidation;

class MigrationRun extends Command
{

    protected $signature = 'migration:run {prefix}';

    protected $description = 'Untuk mengkadaluarsakan event';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        config(['database.connections.app.prefix' => $this->argument('prefix')]);
        $this->call('migrate');
    }

}
